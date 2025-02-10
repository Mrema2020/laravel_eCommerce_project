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
             <div class="div_center">
                <h1 class="font_size">Add Product</h1>
                <div class="div_design">
                    <label for="title">Product title:</label>
                    <input type="text" class="text_color" name="title" placeholder="Write title">
                </div>
                <div class="div_design">
                    <label for="description">Product description:</label>
                    <input type="text" class="text_color" name="description" placeholder="Write description">
                </div>
                <div class="div_design">
                    <label for="price">Product price:</label>
                    <input type="number" class="text_color" name="price" placeholder="Write price">
                </div>
                <div class="div_design">
                    <label for="discount">Discount price:</label>
                    <input type="number" class="text_color" name="dis_price" placeholder="Write discount price if applied">
                </div>
                <div class="div_design">
                    <label for="quantity">Product quantity:</label>
                    <input type="number" min="0" class="text_color" name="quantity" placeholder="Write quantity">
                </div>
                <div class="div_design">
                    <label for="category">Product category</label>
                    <select class="text_color">
                        <option>shirt</option>
                    </select>
                </div>
                <div class="div_design">
                    <label for="image">Product image here:</label>
                    <input type="file" name="image">
                </div>
                <div class="div_design">
                <input type="Submit">
             </div>
             </div>

            </div>
        </div>
        <!-- plugins:js -->
        @include('admin.script')
        <!-- End custom js for this page -->
</body>

</html>