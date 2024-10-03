<?php

namespace App\Services;

use App\Models\Order;

class OrderService {


    /**
     * Make query & Process Order data
     */
    public function processOrderData()
    {

        $orders = Order::with('customer', 'items', 'latesAddtedToCart')->select('id','customer_id' , 'status', 'created_at')->orderBy('id' ,'desc')->get();
        
        $orderData = [];

        if(!$orders) return false;

        foreach ($orders as $order) {
            $orderData[] = $this->organizeData($order);
        }

        $orderData = $this->sortByTimeStamp($orderData, $orders);
        return $orderData;

    }

    /**
     * Order ganize array from the order object
     */
    public function organizeData($order)
    {
        $customer = $order->customer;
        $items = $order->items;

        $itemsCalulation = $this->clculateItems($items);
        $totalAmount     = $itemsCalulation['totalAmount'];
        $itemsCount      = $itemsCalulation['itemsCount'];;

        $lastAddedToCart = $order->latesAddtedToCart->created_at ?? null;

        $completedOrderExists = $order->status == 'completed';

        $orderData = [
            'order_id'              => $order->id,
            'customer_name'         => $customer->name,
            'total_amount'          => $totalAmount,
            'items_count'           => $itemsCount,
            'last_added_to_cart'    => $lastAddedToCart,
            'completed_order_exists' => $completedOrderExists,
            'created_at'            => $order->created_at,
        ];

        return $orderData;
    }


    /**
     * Sort data by timestamp
     */
    public function sortByTimeStamp($orderData, $orders)
    {
        usort($orderData, function($a, $b) use ($orders) {
            $aCompletedAt = $orders->where('id', $a['order_id'])
                ->where('status', 'completed')
                ->sortByDesc('completed_at')
                ->first()
                ->completed_at ?? null;

            $bCompletedAt = $orders->where('id', $b['order_id'])
                ->where('status', 'completed')
                ->sortByDesc('completed_at')
                ->first()
                ->completed_at ?? null;

            return strtotime($bCompletedAt) - strtotime($aCompletedAt);
        });

        return $orderData;
    }

    /**
     * Calculate Items amount and quantity
     */

    public function clculateItems($items)
    {
        $totalAmount = 0;
        $itemsCount  = 0;

        foreach ($items as $item) {
            $totalAmount += $item->price * $item->quantity;
            $itemsCount++;
        }

        return [
            'totalAmount' => $totalAmount,
            'itemsCount'  => $itemsCount,
        ];
    }



}

