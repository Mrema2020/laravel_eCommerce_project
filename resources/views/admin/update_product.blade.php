<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
     <base href="/public">
    @include('admin.css')
    <style type="text/css">
       .div_center{
        text-align: center;
        padding-top: 40px;
       }
       .font_size{
        font-size: 40px;
        padding-bottom: 40px;
       }
       .text_color{
        color: black;
        padding-bottom: 20px; 
       }
       label{
        display: inline-block;
        width: 200px;
       }
       .div_design{
        padding-bottom: 15px;
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
            @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{session()->get('message')}}
                    </div>
                @endif
             <div class="div_center">
                <h1 class="font_size">Update Product</h1>
                <form action="{{url('update_product_confirm', $product->id)}}" method="POST" enctype="multipart/form-data">

                    @csrf

                <div class="div_design">
                    <label for="title">Product title:</label>
                    <input type="text" class="text_color" name="title" placeholder="Write title" required value="{{$product -> title}}">
                </div>
                <div class="div_design">
                    <label for="description">Product description:</label>
                    <input type="text" class="text_color" name="description" placeholder="Write description" required value="{{$product -> description}}">
                </div>
                <div class="div_design">
                    <label for="price">Product price:</label>
                    <input type="number" class="text_color" name="price" placeholder="Write price" required value="{{$product -> price}}">
                </div>
                <div class="div_design">
                    <label for="discount">Discount price:</label>
                    <input type="number" class="text_color" name="dis_price" placeholder="Write discount price if applied" value="{{$product -> discount_price}}">
                </div>
                <div class="div_design">
                    <label for="quantity">Product quantity:</label>
                    <input type="number" min="0" class="text_color" name="quantity" placeholder="Write quantity" required value="{{$product -> quantity}}">
                </div>
                <div class="div_design">
                    <label for="category">Product category</label>
                    <select class="text_color" name="category" required>
                        
                        <option value="{{$product->category}}" selected="">{{$product->category}}</option>

                        @foreach($category as $item)
                        <option value="{{$item -> category_name}}"> {{$item -> category_name}} </option>
                        @endforeach
                       
                    </select>
                </div>
                <div class="div_design">
                    <label for="image">Current image:</label>
                    <img style="margin: auto;" height="100" width="100" src="/product/{{$product->image}}" alt="">
                </div>
                <div class="div_design">
                    <label for="image">Change Product image:</label>
                    <input type="file" name="image">
                </div>
                <div class="div_design">
                <input type="Submit" value="Update product" class="btn btn-primary">
             </div>
             </form>
             </div>

            </div>
        </div>
        <!-- plugins:js -->
        @include('admin.script')
        <!-- End custom js for this page -->
</body>

</html>