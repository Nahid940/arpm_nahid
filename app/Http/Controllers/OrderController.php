<?php

namespace App\Http\Controllers;

use App\Models\Order;
use App\Services\OrderService;
use Exception;
use Illuminate\Http\Request;

class OrderController extends Controller
{
    

    public function index(OrderService $orderService)
    {
        try{
            $orders = $orderService->processOrderData();
            return view('orders.index', ['orders' => $orders]);
        }catch(Exception $exp)
        {
            return view('exceptions', ['message' => 'Something went wrong!'. $exp->getMessage().' '.$exp->getFile().' '.$exp->getLine()]);
        }
        
    }



}


