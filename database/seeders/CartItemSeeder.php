<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class CartItemSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Sample data
         $cartItems = [
            [
                'item_id' => 1, // Assuming item with ID 1 exists
                'order_id' => 1, // Assuming order with ID 1 exists
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_id' => 2, // Assuming item with ID 2 exists
                'order_id' => 1, // Reusing order ID 1
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_id' => 3, // Assuming item with ID 3 exists
                'order_id' => 2, // Assuming order with ID 2 exists
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'item_id' => 4, // Assuming item with ID 4 exists
                'order_id' => 3, // Assuming order with ID 3 exists
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more sample cart items as needed
        ];

        // Insert sample data into the cart_items table
        DB::table('cart_items')->insert($cartItems);
    }
}
