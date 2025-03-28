<!DOCTYPE html>
<html lang="en">
<head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
        .title_deg{
            text-align: center;
            font-size: 25px;
            font-weight: bold;
            padding-bottom: 30px;
        }
        .table_deg{
            border: 2px solid white;
            width: 100%;
            margin: auto;
            text-align: center;
        }
    </style>
</head>
<body>
<div class="container-scroller">
    <!-- partial:partials/_sidebar.html -->
    @include('admin.sidebar')
    <!-- partial -->
    @include('admin.header')

    <div class="main-panel">
        <div class="content-wrapper">
            <h1 class="title_deg">All orders</h1>
            <table class="table_deg">
                <tr style="background-color: #00c154;">
                    <th>Name</th>
                    <th>Email</th>
                    <th>Address</th>
                    <th>Phone</th>
                    <th>Product title</th>
                    <th>Quantity</th>
                    <th>Price</th>
                    <th>Payment status</th>
                    <th>Delivery status</th>
                    <th>Image</th>
                    <th>Delivered</th>
                    <th>Print PDF</th>
                </tr>
                @foreach($orders as $order)
                    <tr>
                        <td>{{$order->name}}</td>
                        <td>{{$order->email}}</td>
                        <td>{{$order->address}}</td>
                        <td>{{$order->phone}}</td>
                        <td>{{$order->product_title}}</td>
                        <td>{{$order->quantity}}</td>
                        <td>{{$order->price}}</td>
                        <td>{{$order->payment_status}}</td>
                        <td>{{$order->delivery_status}}</td>
                        <td><img style="width: 100px; height:  100px;" src="/product/{{$order->image}}"></td>
                        <td>
                        @if($order->delivery_status == 'delivered')
                           <p>Delivered</p>
                        @else
                            <a onclick="return confirm('Are you sure you want to deliver this order?')" href="{{url('delivered', $order->id)}}" class="btn btn-primary">Delivered</a>
                        @endif
                        </td>
                        <td> <a class="btn btn-danger" href="{{url('print_pdf', $order->id)}}">Print PDF</a> </td>
                    </tr>
                @endforeach
            </table>
        </div>
    </div>

    @include('admin.script')
    <!-- End custom js for this page -->
</div>
</body>
</html>
