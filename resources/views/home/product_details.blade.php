<!doctype html>
<html class="no-js" lang="zxx">
<head>
<style type="text/css">
        .img_size{
            width: 200px;
            height: 300px;
        }
    </style>
    <base href="/public">
    <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <title>ClosetWear</title>
    <meta name="description" content="">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <link rel="manifest" href="home/site.webmanifest">
    <link rel="shortcut icon" type="image/x-icon" href="home/assets/img/favicon.ico">

    <!-- CSS here -->
    <link rel="stylesheet" href="home/assets/css/bootstrap.min.css">
    <link rel="stylesheet" href="home/assets/css/owl.carousel.min.css">
    <link rel="stylesheet" href="home/assets/css/slicknav.css">
    <link rel="stylesheet" href="home/assets/css/flaticon.css">
    <link rel="stylesheet" href="home/assets/css/progressbar_barfiller.css">
    <link rel="stylesheet" href="home/assets/css/gijgo.css">
    <link rel="stylesheet" href="home/assets/css/animate.min.css">
    <link rel="stylesheet" href="home/assets/css/animated-headline.css">
    <link rel="stylesheet" href="home/assets/css/magnific-popup.css">
    <link rel="stylesheet" href="home/assets/css/fontawesome-all.min.css">
    <link rel="stylesheet" href="home/assets/css/themify-icons.css">
    <link rel="stylesheet" href="home/assets/css/slick.css">
    <link rel="stylesheet" href="home/assets/css/nice-select.css">
    <link rel="stylesheet" href="home/assets/css/style.css">
    
</head>
<body class="full-wrapper">
    <!-- ? Preloader Start -->
    <div id="preloader-active">
        <div class="preloader d-flex align-items-center justify-content-center">
            <div class="preloader-inner position-relative">
                <div class="preloader-circle"></div>
                <div class="preloader-img pere-text">
                    <img src="home/assets/img/logo/loder.png" alt="">
                </div>
            </div>
        </div>
    </div>
    <!-- Preloader Start-->
    <!--Header Start--> 
    @include('home.header')

    <div claass="col-sm-6 col-md-4 col-lg-4" style="margin: auto; width:50%; padding:30px">
    <div class="img-box">
        <img class="img_size" src="product/{{$product->image}}" alt="">
        <br>
        {{$product->title}}
        <br>
        <br>
        @if($product->discount_price!=null)

                        <h6 >
                           Discount price: {{$product->discount_price}} taka
                        </h6>
                        <h6> Price</h6>
                        <h6 style="text-decoration: line-through;">
                           {{$product->price}} taka
                        </h6>
                        @else



                        <h6 >
                           Product price:{{$product->price}} taka
                        </h6>


                        @endif
        <br>
        
        Product description: {{$product->description}}
        <br>
        <br>
        <form action="{{url('add_cart',$product->id)}}" method="Post">
                        @csrf
                        <div>
                        <input style="width: 50px" type="number" name="quantity" value="1" min="1">
                        <br>
                        <input style="colour:pink" type="submit" class="btn btn-primary" value="Add to Cart">
      
                        <br>
                        
                     </form>
    
    </div>
    </div>
    </div>
    <!-- header end -->
    <footer>
    <!-- Footer Start-->
    @include('home.footer')
  <!-- Footer End-->
</footer>
<!--? Search model Begin -->
<div class="search-model-box">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-btn">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Searching key.....">
        </form>
    </div>
</div>
<!-- Search model end -->
<!-- Scroll Up -->
<div id="back-top" >
    <a title="Go to Top" href="#"> <i class="fas fa-level-up-alt"></i></a>
</div>

<!-- JS here -->
<!-- Jquery, Popper, Bootstrap -->
<script src="home/assets/js/vendor/modernizr-3.5.0.min.js"></script>
<script src="home/assets/js/vendor/jquery-1.12.4.min.js"></script>
<script src="home/assets/js/popper.min.js"></script>
<script src="home/assets/js/bootstrap.min.js"></script>

<!-- Slick-slider , Owl-Carousel ,slick-nav -->
<script src="home/assets/js/owl.carousel.min.js"></script>
<script src="home/assets/js/slick.min.js"></script>
<script src="home/assets/js/jquery.slicknav.min.js"></script>

<!-- One Page, Animated-HeadLin, Date Picker -->
<script src="home/assets/js/wow.min.js"></script>
<script src="home/assets/js/animated.headline.js"></script>
<script src="home/assets/js/jquery.magnific-popup.js"></script>
<script src="home/assets/js/gijgo.min.js"></script>

<!-- Nice-select, sticky,Progress -->
<script src="home/assets/js/jquery.nice-select.min.js"></script>
<script src="home/assets/js/jquery.sticky.js"></script>
<script src="home/assets/js/jquery.barfiller.js"></script>

<!-- counter , waypoint,Hover Direction -->
<script src="home/assets/js/jquery.counterup.min.js"></script>
<script src="home/assets/js/waypoints.min.js"></script>
<script src="home/assets/js/jquery.countdown.min.js"></script>
<script src="home/assets/js/hover-direction-snake.min.js"></script>

<!-- contact js -->
<script src="home/assets/js/contact.js"></script>
<script src="home/assets/js/jquery.form.js"></script>
<script src="home/assets/js/jquery.validate.min.js"></script>
<script src="home/assets/js/mail-script.js"></script>
<script src="home/assets/js/jquery.ajaxchimp.min.js"></script>

<!-- Jquery Plugins, main Jquery -->	
<script src="home/assets/js/plugins.js"></script>
<script src="home/assets/js/main.js"></script>

</body>
</html>