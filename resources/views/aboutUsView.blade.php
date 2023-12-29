@include('layouts.layoutView')
@include('layouts.headerView')
@include('layouts.footerView')

<link rel="stylesheet" href="{{asset('css/owl.carousel.min.css')}}">
<link rel="stylesheet" href="{{asset('css/owl.theme.default.min.css')}}">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/ionicons/4.5.6/css/ionicons.min.css">
<link rel="stylesheet" href="{{asset('css/style.css')}}">
<link rel="stylesheet" href="{{asset('css/styleAbout.css')}}">
<div>
    <div class="home-slider owl-carousel js-fullheight">
        <div class="slider-item js-fullheight"
             style="background-image:url(https://i.pinimg.com/originals/03/dd/d1/03ddd10eae09ddb201060c7d7d630b06.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-12 ftco-animate">
                        <div class="text w-100 text-center">
                            <h2>Best Place to buy PC</h2>
                            <h1 class="mb-3">Turbo</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight"
             style="background-image:url(https://th.bing.com/th/id/R.2809cb098f6ab59d83ded9007258280e?rik=qnSKqDZ9U777EA&riu=http%3a%2f%2fwww.luciinbici.org%2fwp-content%2fuploads%2f2019%2f08%2fgaming-performance.jpg&ehk=AYGH1q7tbWxUzXnuIvvSm5cgKQEcryaISeN33bXODlo%3d&risl=&pid=ImgRaw&r=0);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-12 ftco-animate">
                        <div class="text w-100 text-center">
                            <h2>Best Place to buy laptop</h2>
                            <h1 class="mb-3">Turbo</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>

        <div class="slider-item js-fullheight" style="background-image:url(https://i.redd.it/co8axxnpncm61.jpg);">
            <div class="overlay"></div>
            <div class="container">
                <div class="row no-gutters slider-text js-fullheight align-items-center justify-content-center">
                    <div class="col-md-12 ftco-animate">
                        <div class="text w-100 text-center">
                            <h2>Best Place to buy accessories</h2>
                            <h1 class="mb-3">Turbo</h1>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>


<div class="contentAbout">
    <div class="image-wrapper">
        <img src="{{asset('images/Logo.jpg')}}  " alt="Description Image" class="centered-image image-1 logoAbout">
        <img src="{{asset('images/Logo.jpg')}}  " alt="Description Image" class="centered-image image-2 logoAbout">
        <img src="{{asset('images/Logo.jpg')}}  " alt="Description Image" class="centered-image image-3 logoAbout">
        <img src="{{asset('images/Logo.jpg')}}  " alt="Description Image" class="centered-image image-4 logoAbout">

    </div>
    <div style="text-align: center; display: flex; flex-direction: column; align-items: center; justify-content: center; height: 100vh; box-shadow: rgba(240, 46, 170, 0.4) 0px 5px, rgba(240, 46, 170, 0.3) 0px 10px, rgba(240, 46, 170, 0.2) 0px 15px, rgba(240, 46, 170, 0.1) 0px 20px, rgba(240, 46, 170, 0.05) 0px 25px;">
        <div style="padding: 20px; margin: auto; max-width: 600px;">
            <h2 style="color: #FFFFF0;">About Turbo Technologies</h2>
            <p style="color: #FFFFF0;">
                Turbo Technologies is at the forefront of providing cutting-edge solutions in the realm of high-performance computing. We pride ourselves on delivering top-notch products tailored to meet the diverse needs of technology enthusiasts, avid gamers, and seasoned professionals alike.
            </p>
            <p style="color: #FFFFF0;">
                Our mission is rooted in the relentless pursuit of empowering individuals and businesses through the deployment of state-of-the-art technology. We emphasize quality, innovation, and unwavering commitment to customer satisfaction. As a result, Turbo Technologies has earned its standing as a trusted and reputable name in the industry.
            </p>
        </div>
    </div>



</div>
<script src="{{asset('js/jquery.min.js')}}"></script>
<script src="{{asset('js/popper.js')}}"></script>
<script src="{{asset('js/bootstrap.min.js')}}"></script>
<script src="{{asset('js/owl.carousel.min.js')}}"></script>
<script src="{{asset('js/main.js')}}"></script>
