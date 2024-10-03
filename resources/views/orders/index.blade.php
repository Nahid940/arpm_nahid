<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Document</title>
</head>
<style>
    table {
        width: 100%;
        border-collapse: collapse; /* Merge borders */
    }
    th, td {
        border: 1px solid black; /* Set border for table cells */
        padding: 8px; /* Add some padding */
        text-align: left; /* Align text to the left */
    }
    th {
        background-color: #f2f2f2; /* Light gray background for header */
    }
</style>
<body>


    <ul style="list-style: none;display: flex;">
        <li style="margin-right: 15px;"><a href="{{route('orders')}}">Task 2</a></li>
        <li style="margin-right: 15px;"><a href="{{route('collection')}}">Task 3</a></li>
        <li style="margin-right: 15px;"><a href="{{route('q&a')}}">Task 4</a></li>
    </ul>

    <center><h2>Order Summery</h2></center>

    <table>
        <thead>
            <tr>
                <th>Order No.</th>
                <th>Customer</th>
                <th>Total Amount</th>
                <th>Total Items</th>
                <th>Last Added To Cart</th>
                <th>Completed Order</th>
                <th>Created At</th>
            </tr>
        </thead>
    
        @foreach ($orders as $order)
    
            <tr>
                <td>{{$order['order_id']}}</td>
                <td>{{$order['customer_name']}}</td>
                <td>{{$order['total_amount']}}</td>
                <td>{{$order['items_count']}}</td>
                <td>{{$order['last_added_to_cart']}}</td>
                <td>{{$order['completed_order_exists']? 'Yes':'No'}}</td>
                <td>{{date('F-d-Y', strtotime($order['created_at']))}}</td>
            </tr>
        
        @endforeach
    </table>
    
</body>
</html>