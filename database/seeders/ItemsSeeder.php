<?php

namespace Database\Seeders;

use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB;

class ItemsSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
        // Sample data
        $items = [
            [
                'order_id' => 1, // Assuming order with ID 1 exists
                'product' => 'Product A',
                'price' => 19.99,
                'quantity' => 2,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 1, // Reusing order ID 1
                'product' => 'Product B',
                'price' => 29.99,
                'quantity' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 2, // Assuming order with ID 2 exists
                'product' => 'Product C',
                'price' => 49.99,
                'quantity' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 2, // Assuming order with ID 2 exists
                'product' => 'Product D',
                'price' => 49.99,
                'quantity' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 2, // Assuming order with ID 2 exists
                'product' => 'Product E',
                'price' => 49.99,
                'quantity' => 3,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 3, // Assuming order with ID 3 exists
                'product' => 'Product D',
                'price' => 99.99,
                'quantity' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'order_id' => 3, // Assuming order with ID 3 exists
                'product' => 'Product A',
                'price' => 99.99,
                'quantity' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'order_id' => 3, // Assuming order with ID 3 exists
                'product' => 'Product E',
                'price' => 99.99,
                'quantity' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],

            [
                'order_id' => 3, // Assuming order with ID 3 exists
                'product' => 'Product F',
                'price' => 99.99,
                'quantity' => 1,
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more sample items as needed
        ];

        // Insert sample data into the items table
        DB::table('items')->insert($items);
    }
}
