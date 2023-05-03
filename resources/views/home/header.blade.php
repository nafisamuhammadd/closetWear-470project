<header>
        <!-- Header Start -->
        <div class="header-area ">
            <div class="main-header header-sticky">
                <div class="container-fluid">
                    <div class="menu-wrapper d-flex align-items-center justify-content-between">
                        <div class="header-left d-flex align-items-center">
                            <!-- Logo -->
                            <div class="logo">
                                <a href="{{url('/')}}"><img src="home/assets/img/logo/logo.png" alt=""></a>
                            </div>
                            <!-- Main-menu -->
                            <div class="main-menu  d-none d-lg-block">
                                <nav>
                                    <ul id="navigation">
                                        <li><a href="{{url('/')}}">Home</a></li> 
                                        <li><a href="{{url('home.product')}}">Shop</a></li>
                                        <li><a href="home/about.html">About</a></li>
                                        <li><a href="home/blog.html">Blog</a>
                                            <ul class="submenu">
                                                <li><a href="home/blog.html">Blog</a></li>
                                                <li><a href="home/blog_details.html">Blog Details</a></li>
                                                <li><a href="home/elements.html">Elements</a></li>
                                                <li><a href="home/product_details.html">Product Details</a></li>
                                            </ul>
                                        </li>
                                        <li><a href="home/contact.html">Contact</a></li>
                                        <li><a href="{{url('home.show_cart')}}">Cart</a></li>
                                    </ul>
                                </nav>
                            </div>   
                        </div>
                        <div class="header-right1 d-flex align-items-center">
                        
                            <!-- Search Box -->
                            <div class="search d-none d-md-block">
                                <ul class="d-flex align-items-center">
                                    <li class="mr-15">
                                        <div class="nav-search search-switch">
                                            <i class="ti-search"></i>
                                        </div>
                                    </li>
                                    <li>
                                    @if (Route::has('login'))
                                             @auth
                                             <x-app-layout>
                                             </x-app-layout>
                                        </li>
                                         @else
                                             <li class="nav-item">
                                             <a class ="btn btn-primary" id = "logincss" 
                                             href="{{ route('login') }}">
                                             Login</a>
                                        </li>
                                         <li class="nav-item">
                                         <a class ="btn btn-success"href="{{ route('register') }}">
                                         Register
                                         </a>
                                         </li>
                                        @endauth
                                        @endif
                                        
                                    </li>
                                </ul>
                            </div>
                        </div>
                        <!-- Mobile Menu -->
                        <div class="col-12">
                            <div class="mobile_menu d-block d-lg-none"></div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <!-- Header End -->
</header>