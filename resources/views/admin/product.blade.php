<!DOCTYPE html>
<html lang="en">

<head>
    <!-- Required meta tags -->
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
                <h1 class="font_size">Add Product</h1>
                <form action="{{url('add_product')}}" method="POST" enctype="multipart/form-data">

                    @csrf

                <div class="div_design">
                    <label for="title">Product title:</label>
                    <input type="text" class="text_color" name="title" placeholder="Write title" required>
                </div>
                <div class="div_design">
                    <label for="description">Product description:</label>
                    <input type="text" class="text_color" name="description" placeholder="Write description" required>
                </div>
                <div class="div_design">
                    <label for="price">Product price:</label>
                    <input type="number" class="text_color" name="price" placeholder="Write price" required>
                </div>
                <div class="div_design">
                    <label for="discount">Discount price:</label>
                    <input type="number" class="text_color" name="dis_price" placeholder="Write discount price if applied">
                </div>
                <div class="div_design">
                    <label for="quantity">Product quantity:</label>
                    <input type="number" min="0" class="text_color" name="quantity" placeholder="Write quantity" required>
                </div>
                <div class="div_design">
                    <label for="category">Product category</label>
                    <select class="text_color" name="category" required>
                        
                        <option value="" selected="">Add a category</option>
                        @foreach($category as $item)
                        <option value="{{$item -> category_name}}"> {{$item -> category_name}} </option>
                        @endforeach
                    </select>
                </div>
                <div class="div_design">
                    <label for="image">Product image here:</label>
                    <input type="file" name="image" required>
                </div>
                <div class="div_design">
                <input type="Submit" value="Add product" class="btn btn-primary">
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