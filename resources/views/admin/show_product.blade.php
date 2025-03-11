<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
    @include('admin.css')
    <style>
        .center{
            margin: auto;
            width: 50%;
            border: 2px solid white;
            text-align: center;
            margin-top: 40px;
        }
        .font-size{
           text-align: center; 
           font-size: 40px;
           margin-top: 20px;
        }
        .img-size{
            width: 100px;
            height: 100px;
        }
        .th-color{
            background-color: #8d99ae;
        }
        .th-dg{
            padding: 20px;
            border: 0.01px solid #757F8FFF;
        }
        .td-class{
            border: 0.01px solid #757F8FFF;
        }
    </style>
</head>

<body>
    <div class="container-scroller">
        <!-- partial:partials/_sidebar.html -->
        @include('admin.sidebar')
        <!-- partial -->
        @include('admin.header')
        <!-- partial -->
        <div class="main-panel">
            <div class="content-wrapper">
            @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{session()->get('message')}}
                    </div>
                @endif
                <h2 class="font-size">All products</h2>
                <table class="center">
                    <tr class="th-color">
                        <th class="th-dg">Product title</th>
                        <th class="th-dg">Description</th>
                        <th class="th-dg">Quantity</th>
                        <th class="th-dg">Category</th>
                        <th class="th-dg">Price</th>
                        <th class="th-dg">Discount Price</th>
                        <th class="th-dg">Product Image</th>
                        <th class="th-dg">Delete</th>
                        <th class="th-dg">Edit</th>
                    </tr>
                    @foreach($product as $product)
                    <tr>
                        <td class="td-class">{{$product->title}}</td>
                        <td class="td-class">{{$product->description}}</td>
                        <td class="td-class">{{$product->quantity}}</td>
                        <td class="td-class">{{$product->category}}</td>
                        <td class="td-class">{{$product->price}}</td>
                        <td class="td-class">{{$product->discount_price}}</td>
                        <td class="td-class">
                            <img class="img-size" src="/product/{{$product->image}}" alt="">
                        </td>
                        <td><a href="{{url('delete_product', $product->id)}}" class="btn btn-danger" onclick="return confirm('Are you sure you want to delete this product?')">Delete</a></td>
                        <td><a href="{{url('update_product', $product->id)}}" class="btn btn-success">Edit</a></td>
                    </tr>
                    @endforeach
                </table>
            </div>
        </div>
        <!-- container-scroller -->
        <!-- plugins:js -->
        @include('admin.script')
        <!-- End custom js for this page -->
</body>

</html>