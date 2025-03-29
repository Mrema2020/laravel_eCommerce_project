<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Order Details</title>
    <style>
        body {
            font-family: Arial, sans-serif;
            background-color: #f8f9fa;
            margin: 0;
            padding: 20px;
        }
        .container {
            max-width: 600px;
            margin: auto;
            background: white;
            padding: 20px;
            border-radius: 12px;
            box-shadow: 0 4px 8px rgba(0, 0, 0, 0.1);
        }
        h2 {
            text-align: center;
            color: #333;
        }
        .order-info {
            margin: 20px 0;
            padding: 15px;
            background: #f1f1f1;
            border-radius: 8px;
        }
        .order-info p {
            margin: 8px 0;
        }
        .status {
            text-align: center;
            font-weight: bold;
            padding: 10px;
            border-radius: 6px;
            color: white;
            background: #28a745;
        }
        .items {
            margin-top: 20px;
            text-align: center;
        }
        .item {
            display: flex;
            justify-content: space-between;
            padding: 10px;
            border-bottom: 1px solid #ddd;
        }
        .total {
            text-align: right;
            font-size: 1.2em;
            font-weight: bold;
            margin-top: 10px;
        }
        .product-image {
            display: block;
            margin: 10px auto;
            max-width: 100px;
            border-radius: 8px;
        }
    </style>
</head>
<body>
<div class="container">
    <h2>Order Details</h2>
    <div class="order-info">
        <p><strong>Customer name:</strong> {{$order->name}}</p>
        <p><strong>Email:</strong> {{$order->email}}</p>
        <p><strong>Phone:</strong> {{$order->phone}}</p>
        <p><strong>Address:</strong> {{$order->address}}</p>
        <p class="status">{{$order->delivery_status}}</p>
    </div>
    <div class="items">
        <img src="product/{{$order->image}}" alt="Product Image" class="product-image">
        <div class="item">
            <span>Product</span>
            <span>{{$order->product_title}}</span>
        </div>
        <div class="item">
            <span>Quantity</span>
            <span>{{$order->quantity}}</span>
        </div>
        <div class="total">{{$order->price}}</div>
    </div>
</div>
</body>
</html>
