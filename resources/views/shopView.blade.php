@include('layouts.layoutView')
{{--@include('includes.headerView')--}}
@include('layouts.footerView')

<!-- end loader -->
<link rel="stylesheet" href="{{asset('css/shopStyles/bootstrap.min.css')}}">
<!-- style css -->
<link rel="stylesheet" href="{{asset('css/shopStyles/style.css')}}">
<!-- Responsive-->
<link rel="stylesheet" href="{{asset('css/shopStyles/responsive.css')}}">
<!-- Scrollbar Custom CSS -->
<link rel="stylesheet" href="{{asset('css/shopStyles/jquery.mCustomScrollbar.min.css')}}">
<!-- owl stylesheets -->
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="{{asset('css/shopStyles/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/shopStyles/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.css" media="screen">
<link rel="stylesheet" href="{{asset('css/shopStyles/styleAdminPanel.css')}}">
<!--[if lt IE 9]>
<script src="https://oss.maxcdn.com/html5shiv/3.7.3/html5shiv.min.js"></script>
<script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script><![endif]-->

@include('layouts.headerView')
<!-- end header -->
<section class="slider_section">
    <div id="myCarousel" class="carousel slide banner-main" data-ride="carousel">
        <div class="carousel-inner">
            <div class="carousel-item active">
                <img class="first-slide"
                     src="https://i.pinimg.com/originals/aa/50/8d/aa508d68966d1fd6c9942b1a8e8e7c3c.jpg"
                     alt="First slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <span>New Laptops </span>
                        <h1>up to 25% Sale</h1>

                        <a class="buynow" href="#">Buy Now</a>
                        <ul class="social_icon">
                            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="second-slide" src="https://wallpapercave.com/wp/wp4585032.jpg" alt="Second slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <span>Cool accessories </span>
                        <h1>up to 15% Flat Sale</h1>

                        <a class="buynow" href="#">Buy Now</a>
                        <ul class="social_icon">
                            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
            <div class="carousel-item">
                <img class="third-slide" src="https://i.redd.it/pplw165jfr431.jpg" alt="Third slide">
                <div class="container">
                    <div class="carousel-caption relative">
                        <span>New Gaming PC</span>
                        <h1>up to 25% Flat Sale</h1>

                        <a class="buynow" href="#">Buy Now</a>
                        <ul class="social_icon">
                            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>
                        </ul>
                    </div>
                </div>
            </div>
        </div>
        <a class="carousel-control-prev" href="#myCarousel" role="button" data-slide="prev">
            <i class='fa fa-angle-left'></i>
        </a>
        <a class="carousel-control-next" href="#myCarousel" role="button" data-slide="next">
            <i class='fa fa-angle-right'></i>
        </a>
    </div>
</section>

<!-- about -->
<div class="about"
     style="padding-top: 90px; padding-bottom: 84px; background: url('{{ asset('images/aboutbg.jpg') }}'); background-position: center center; background-repeat: no-repeat; background-size: 100% 100%;">
    <div class="container">
        <div class="row">
            <div class="col-xl-5 col-lg-5 col-md-5 co-sm-l2">

                <div class="logoShopAbout-button">
                    <img src="{{asset('images/Logo.jpg')}}  " alt="Description Image" class="logoShopAbout">
                </div>
            </div>
            <div class="col-xl-7 col-lg-7 col-md-7 co-sm-l2">

                <div class="about_box">

                    <h3 style="color: #cbd5e0">About Us</h3>
                    <span style="color: #cbd5e0">Our Shop</span>
                    <p style="color: #cbd5e0">It is a long established fact that a reader will be distracted by the
                        readable content of a page when looking at its layout. The point of It is a long established
                        fact that a reader will be distracted by the readable content of a page when looking at its
                        layout. The point of It is a long established fact that a reader will be distracted by the </p>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- end about -->

<!-- brand -->
<div class="brand">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2 style="color: #cbd5e0;">Our Brand</h2>

                </div>
                @if(\Illuminate\Support\Facades\Auth::user()->IsAdmin==1)
                    <div class="container">
                        <div class="row">
                            <div class="col-md-4">
                                <div class="dropdown">
                                    <button class="button-30 adminPanel_toJsonButton" onmouseover="toggleDropdown()"> {{ Auth::user()->name }} </button>
                                    <div class="dropdown-content adminPanel_userDropdown" id="adminPanel_dropdownContent">
                                        <form action="{{ route('addProduct') }}" method="post" class="adminPanel_dropdown-form">
                                            @csrf
                                            <x-dropdown-link id="showFormButton" :href="route('addProduct')"
                                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                {{ __('Add product') }}

                                            </x-dropdown-link>
                                            <input style="background-color: rgba(43,45,48,0.49);" type="text" name="ItemName" id="ItemName" placeholder="Enter product name" autocomplete="off"/>
                                            <input style="background-color: rgba(43,45,48,0.49);;" type="text" name="ImageUrl" id="ImageUrl" placeholder="Enter image URL" autocomplete="off"/>
                                            <input style="background-color: rgba(43,45,48,0.49);" type="number" name="ItemPrice" id="ItemPrice" placeholder="Enter product price" autocomplete="off"/>
                                            <input style="background-color: rgba(43,45,48,0.49);" type="text" name="ItemDescription" id="ItemDescription"
                                                   placeholder="Enter product description" autocomplete="off"/>


                                        </form>
                                        <form action="{{route('editProduct')}}" method="post" class="adminPanel_dropdown-form">
                                            @csrf
                                            <x-dropdown-link id="showFormButton" :href="route('editProduct')"
                                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                {{ __('Edit product') }}

                                            </x-dropdown-link>
                                            <input style="background-color: rgba(43,45,48,0.49);" type="text" name="id" id="id" placeholder="Enter index of editing product" autocomplete="off"/>
                                            <input style="background-color: rgba(43,45,48,0.49);" type="text" name="ItemName" id="ItemName" placeholder="Enter product name" autocomplete="off"/>
                                            <input style="background-color: rgba(43,45,48,0.49);" type="text" name="ImageUrl" id="ImageUrl" placeholder="Enter image URL" autocomplete="off"/>
                                            <input style="background-color: rgba(43,45,48,0.49);" type="number" name="ItemPrice" id="ItemPrice" placeholder="Enter product price" autocomplete="off"/>
                                            <input style="background-color: rgba(43,45,48,0.49);" type="text" name="ItemDescription" id="ItemDescription"
                                                   placeholder="Enter product description" autocomplete="off"/>


                                        </form>
                                        <form action="{{route('deleteProduct')}}" method="post" class="adminPanel_dropdown-form">
                                            @csrf
                                            <x-dropdown-link id="showFormButton" :href="route('deleteProduct')"
                                                             onclick="event.preventDefault();
                                                this.closest('form').submit();">
                                                {{ __('Delete product') }}

                                            </x-dropdown-link>
                                            <input style="background-color: rgba(43,45,48,0.49);"  type="text" name="id" id="id" placeholder="Enter index of deleting product" autocomplete="off"/>


                                        </form>
                                    </div>
                                </div>
                            </div>
                            <div class="col-md-4">
                                <button class="button-30 adminPanel_toJsonButton" onclick="redirectToJson()">To .json</button>
                            </div>
                        </div>
                    </div>
{{--                    <div class="container">--}}
{{--                        <div class="row">--}}
{{--                            <div class="col-md-4">--}}
{{--                                <div class="dropdown">--}}
{{--                                    <button class="button-30">{{Auth::user()->name}}</button>--}}
{{--                                    <div class="dropdown-content">--}}
{{--                                        <form action="{{route('addProduct')}}" method="post">--}}
{{--                                            @csrf--}}
{{--                                            <x-dropdown-link id="showFormButton" :href="route('addProduct')"--}}
{{--                                                             onclick="event.preventDefault();--}}
{{--                                                this.closest('form').submit();">--}}
{{--                                                {{ __('Add product') }}--}}

{{--                                            </x-dropdown-link>--}}
{{--                                            <input style="background-color: rgb(194,197,204);" type="text" name="ItemName" id="ItemName" placeholder="Enter product name"/>--}}
{{--                                            <input style="background-color: rgb(194,197,204);" type="text" name="ImageUrl" id="ImageUrl" placeholder="Enter image URL"/>--}}
{{--                                            <input style="background-color: rgb(194,197,204);" type="number" name="ItemPrice" id="ItemPrice" placeholder="Enter product price"/>--}}
{{--                                            <input style="background-color: rgb(194,197,204);" type="text" name="ItemDescription" id="ItemDescription"--}}
{{--                                                   placeholder="Enter product description"/>--}}


{{--                                        </form>--}}
{{--                                        <form action="{{route('editProduct')}}" method="post">--}}
{{--                                            @csrf--}}
{{--                                            <x-dropdown-link id="showFormButton" :href="route('editProduct')"--}}
{{--                                                             onclick="event.preventDefault();--}}
{{--                                                this.closest('form').submit();">--}}
{{--                                                {{ __('Edit product') }}--}}

{{--                                            </x-dropdown-link>--}}
{{--                                            <input style="background-color: rgb(194,197,204);" type="text" name="id" id="id" placeholder="Enter index of editing product"/>--}}
{{--                                            <input style="background-color: rgb(194,197,204);" type="text" name="ItemName" id="ItemName" placeholder="Enter product name"/>--}}
{{--                                            <input style="background-color: rgb(194,197,204);" type="text" name="ImageUrl" id="ImageUrl" placeholder="Enter image URL"/>--}}
{{--                                            <input style="background-color: rgb(194,197,204);" type="number" name="ItemPrice" id="ItemPrice" placeholder="Enter product price"/>--}}
{{--                                            <input style="background-color: rgb(194,197,204);" type="text" name="ItemDescription" id="ItemDescription"--}}
{{--                                                   placeholder="Enter product description"/>--}}


{{--                                        </form>--}}
{{--                                        <form action="{{route('deleteProduct')}}" method="post">--}}
{{--                                            @csrf--}}
{{--                                            <x-dropdown-link id="showFormButton" :href="route('deleteProduct')"--}}
{{--                                                             onclick="event.preventDefault();--}}
{{--                                                this.closest('form').submit();">--}}
{{--                                                {{ __('Delete product') }}--}}

{{--                                            </x-dropdown-link>--}}
{{--                                            <input style="background-color: rgb(194,197,204);"  type="text" name="id" id="id" placeholder="Enter index of deleting product"/>--}}


{{--                                        </form>--}}

{{--                                    </div>--}}
{{--                                </div>--}}

{{--                            </div>--}}
{{--                            <div class="col-md-4">--}}
{{--                                <button class="button-30">To .json</button>--}}

{{--                            </div>--}}
{{--                        </div>--}}
{{--                    </div>--}}

                @endif
            </div>

        </div>
    </div>
</div>
<div class="brand-bg">
    <div class="container">
        <div class="row">
            @foreach($products as $product)
                <div class="col-xl-4 col-lg-4 col-md-4 col-sm-6 margin">
                    <div class="brand_box" style="display: flex; flex-direction: column; align-items: center;">
                        <img src="{{ $product->ImageUrl }}" alt="img" class="imgShop imgShopItem"/>
                        <h4 style="margin-top: 10px;"><strong class="red">{{ $product->ItemName }}</strong></h4>
                        <p style="color: #cbd5e0; margin-top: 5px;">${{ $product->ItemPrice }}</p>
                        <p style="margin-top: 5px;">{{ $product->ItemDescription }}</p>
                    </div>
                </div>
            @endforeach
            <div class="col-md-12">
                <a class="read-more">See More</a>
            </div>
        </div>
    </div>
</div>


<!-- end brand -->
<!-- clients -->
<div class="clients">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2>what say our clients</h2>
                </div>
            </div>
        </div>
    </div>
</div>
<div class="clients_red">
    <div class="container">
        <div id="testimonial_slider" class="carousel slide" data-ride="carousel">
            <!-- Indicators -->
            <ul class="carousel-indicators">
                <li data-target="#testimonial_slider" data-slide-to="0" class=""></li>
                <li data-target="#testimonial_slider" data-slide-to="1" class="active"></li>
                <li data-target="#testimonial_slider" data-slide-to="2" class=""></li>
            </ul>
            <!-- The slideshow -->
            <div class="carousel-inner">
                <div class="carousel-item">
                    <div class="testomonial_section">
                        <div class="full center">
                        </div>
                        <div class="full testimonial_cont text_align_center cross_layout">
                            <div class="cross_inner">
                                <h4 style="color: #cbd5e0">Due markes<br><strong class="ornage_color">Rental</strong>
                                </h4>
                                <p style="color: #cbd5e0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="carousel-item active">

                    <div class="testomonial_section">
                        <div class="full center">
                        </div>
                        <div class="full testimonial_cont text_align_center cross_layout">
                            <div class="cross_inner">
                                <h4 style="color: #cbd5e0">Due markes<br><strong class="ornage_color">Rental</strong>
                                </h4>
                                <p style="color: #cbd5e0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</i>
                                </p>
                            </div>
                        </div>
                    </div>

                </div>

                <div class="carousel-item">

                    <div class="testomonial_section">
                        <div class="full center">
                        </div>
                        <div class="full testimonial_cont text_align_center cross_layout">
                            <div class="cross_inner">
                                <h4 style="color: #cbd5e0">Due markes<br><strong class="ornage_color">Rental</strong>
                                </h4>
                                <p style="color: #cbd5e0;">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed
                                    do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim
                                    veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                                    consequat. Duis aute irure dolor in reprehenderit in voluptate velit ess</i>
                                </p>
                            </div>
                        </div>
                    </div>
                </div>

            </div>

        </div>

    </div>
</div>
<!-- end clients -->
<!-- contact -->
<div class="contact">
    <div class="container">
        <div class="row">
            <div class="col-md-12">
                <div class="titlepage">
                    <h2 style="color: #cbd5e0;">Contact us</h2>
                </div>
                <form class="main_form">
                    <div class="row">
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <input class="form-control" placeholder="Your name" type="text" name="Your Name">
                        </div>
                        <div class="col-xl-6 col-lg-6 col-md-6 col-sm-6">
                            <input class="form-control" placeholder="Email" type="text" name="Email">
                        </div>
                        <div class=" col-md-12">
                            <input class="form-control" placeholder="Phone" type="text" name="Phone">
                        </div>
                        <div class="col-md-12">
                            <textarea class="textarea" placeholder="Message"></textarea>
                        </div>
                        <div class=" col-md-12">
                            <button class="button-86">Contact us
                            </button>
                        </div>
                    </div>
                </form>
            </div>
        </div>
    </div>
</div>
<!-- end contact -->

<!-- footer -->
<footer>
    <div id="contact" class="footer">
        <div class="container">
            <div class="row pdn-top-30">
                <div class="col-md-12 ">
                    <div class="footer-box">
                        <div class="headinga">
                            <h3>Address</h3>
                            <span>Healing Center, 176 W Streetname,New York, NY 10014, US</span>
                            <p>(+71) 8522369417
                                <br>demo@gmail.com</p>
                        </div>
                        <ul class="location_icon">
                            <li><a href="#"><i class="fa fa-facebook-f"></i></a></li>
                            <li><a href="#"><i class="fa fa-twitter"></i></a></li>
                            <li><a href="#"><i class="fa fa-instagram"></i></a></li>

                        </ul>
                        <div class="menu-bottom">
                            <ul class="link">
                                <li><a href="#">Home</a></li>
                                <li><a href="#">About</a></li>

                                <li><a href="#">Brand </a></li>
                                <li><a href="#">Specials </a></li>
                                <li><a href="#"> Contact us</a></li>
                            </ul>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        <div class="copyright">
            <div class="container">
                <p>© 2019 All Rights Reserved.</p>
            </div>
        </div>
    </div>
</footer>
<!-- end footer -->
<!-- Javascript files-->
<script src="{{asset('js/shopScripts/popper.min.js')}}"></script>
<script src="{{asset('js/shopScripts/jquery-3.0.0.min.js')}}"></script>
<script src="{{asset('js/shopScripts/plugin.js')}}"></script>
<!-- sidebar -->
<script src="{{asset('js/shopScripts/jquery.mCustomScrollbar.concat.min.js')}}"></script>
<script src="{{asset('js/shopScripts/custom.js')}}"></script>
<!-- javascript -->
<script src="{{asset('js/shopScripts/owl.carousel.js')}}"></script>
<script src="https:cdnjs.cloudflare.com/ajax/libs/fancybox/2.1.5/jquery.fancybox.min.js"></script>
<script>
    $(document).ready(function () {
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });

        $(".zoom").hover(function () {

            $(this).addClass('transition');
        }, function () {

            $(this).removeClass('transition');
        });
    });
</script>
<script>
    document.getElementById('showFormButton').addEventListener('click', function () {
        const formContainer = document.getElementById('formContainer');

        formContainer.style.display = 'block';
    });
</script>
<script>
    function redirectToJson()
    {
        window.location.href="{{route('tojson')}}";
    }
</script>

