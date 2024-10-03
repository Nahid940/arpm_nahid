<?php

namespace Database\Seeders;

use Illuminate\Container\Attributes\DB;
use Illuminate\Database\Console\Seeds\WithoutModelEvents;
use Illuminate\Database\Seeder;
use Illuminate\Support\Facades\DB as FacadesDB;

class OrderSeeder extends Seeder
{
    /**
     * Run the database seeds.
     */
    public function run(): void
    {
         // Sample data
         $orders = [
            [
                'customer_id' => 1, // Assuming customer with ID 1 exists
                'total' => '99.99',
                'status' => 'completed',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_id' => 2, // Assuming customer with ID 2 exists
                'total' => '49.99',
                'status' => 'submitted',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_id' => 3, // Assuming customer with ID 3 exists
                'total' => '29.99',
                'status' => 'processing',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            [
                'customer_id' => 1, // Reusing customer ID 1
                'total' => '19.99',
                'status' => 'canceled',
                'created_at' => now(),
                'updated_at' => now(),
            ],
            // Add more sample orders as needed
        ];

        // Insert sample data into the orders table
        FacadesDB::table('orders')->insert($orders);
    }
}
