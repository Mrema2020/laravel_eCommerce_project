<!DOCTYPE html>
<html>
   <head>
      <!-- Basic -->
      <meta charset="utf-8" />
      <meta http-equiv="X-UA-Compatible" content="IE=edge" />
      <!-- Mobile Metas -->
      <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no" />
      <!-- Site Metas -->
      <meta name="keywords" content="" />
      <meta name="description" content="" />
      <meta name="author" content="" />
      <link rel="shortcut icon" href="images/favicon.png" type="">
      <title>Cart</title>
      <!-- bootstrap core css -->
      <link rel="stylesheet" type="text/css" href="home/css/bootstrap.css" />
      <!-- font awesome style -->
      <link href="home/css/font-awesome.min.css" rel="stylesheet" />
      <!-- Custom styles for this template -->
      <link href="home/css/style.css" rel="stylesheet" />
      <!-- responsive style -->
      <link href="home/css/responsive.css" rel="stylesheet" />
      <style>
        .center{
          margin: auto;
          width: 70%;
          text-align: center;
          padding: 30px;
        }
        table, th, td{
           border: 1px solid grey;
        }
        .th_deg{
           font-size: 20px;
           padding: 5px;
           background: saddlebrown;
        }
        .img_deg{
            height: 100px;
            width: 100px;
        }
        .total_deg{
            font-size: 20px;
            padding: 40px;
            width: 50%;
        }
      </style>
   </head>
   <body>
      <div class="hero_area">
         <!-- header section strats -->
         @include('home.header')
         <!-- end header section -->
         @if(session()->has('message'))
                    <div class="alert alert-success">
                        <button type="button" class="close" data-dismiss="alert" aria-hidden="true">x</button>
                        {{session()->get('message')}}
                    </div>
                @endif

      <div class="center">
        <table>
            <tr>
                <th class="th_deg">Product title</th>
                <th class="th_deg">Product quantity</th>
                <th class="th_deg">Price</th>
                <th class="th_deg">Image</th>
                <th class="th_deg">Action</th>
            </tr>

            <?php $total_price = 0; ?>

           @foreach($cart as $cart)
           <tr>
            <th>{{$cart->product_title}}</th>
            <th>{{$cart->quantity}}</th>
            <th>{{$cart->price}} TZS</th>
            <th><img class="img_deg" src="/product/{{$cart->image}}" alt=""></th>
            <th><a class="btn btn-danger" style="margin:10px;" onclick="return confirm('Are you sure you wabt to remone {{$cart->product_title}} from cart?')"
                  href="{{url('remove_cart', $cart->id)}}">Remove Product</a></th>
           </tr>

           <?php $total_price = $total_price + $cart->price; ?>

           @endforeach
        </table>
        <div>
            <h1 class="total_deg">Total price : {{$total_price}} TZS</h1>
        </div>
        <div>
         <h1 style="font-size: 25px; padding-bottom: 15px;">Proceed to order</h1>
         <a href="{{url('cash_order')}}" class="btn btn-danger">Cash on delivery</a>
         <a href="{{url('stripe', $total_price)}}" class="btn btn-danger">Pay using card</a>
        </div>
      </div>
      <div class="cpy_">
         <p class="mx-auto">© 2025 All Rights Reserved By <a href="https://html.design/">Mtimkavu LTD</a><br>

            Distributed By <a href="https://themewagon.com/" target="_blank">Elvis</a>

         </p>
      </div>
      <!-- jQery -->
      <script src="home/js/jquery-3.4.1.min.js"></script>
      <!-- popper js -->
      <script src="home/js/popper.min.js"></script>
      <!-- bootstrap js -->
      <script src="home/js/bootstrap.js"></script>
      <!-- custom js -->
      <script src="home/js/custom.js"></script>
   </body>
</html>
