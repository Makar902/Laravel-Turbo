@include('layouts.layoutView')
<link href="{{asset('css/styles.css')}}" rel="stylesheet"/>
@include('layouts.headerView')
<!-- Navigation-->

<section class="page-section clearfix">
    <div class="container">
        <div class="introW">
            <div class="slider">
                <ul>
                    <li style="background-image:url(https://assets2.razerzone.com/images/pnx.assets/381e915d58d2b9759725c30a9f2c3a0f/razer-blade-16-2023-laptop-500x500.jpg)">
                        <div class="center-y">
                            <h3>Laptops</h3>
                        </div>
                    </li>
                    <li style="background-image:url(https://australianwarehouses.com.au/wp-content/uploads/2021/11/RAZER-RAPTOR-27-.jpg)">
                        <div class="center-y">
                            <h3>DESKTOPS & COMPONENTS</h3>
                        </div>
                    </li>
                    <li style="background-image:url(https://assets2.razerzone.com/images/pnx.assets/381e915d58d2b9759725c30a9f2c3a0f/accessories-category-500x500.jpg)">
                        <div class="center-y">
                            <h3>ACCESSORIES</h3>
                        </div>
                    </li>
                </ul>

                <ul>
                    <nav>
                        <a href="#"></a>
                        <a href="#"></a>
                        <a href="#"></a>
                    </nav>
                </ul>
            </div>
            <div class="intro-text left-0 text-center bg-faded p-5 rounded">
                <h2 class="section-heading mb-3">
                    <span class="section-heading-upper">Welcome to our PC Shop</span>
                    <span class="section-heading-lower">The Places Where You </span>
                </h2>
                <p class="mb-3">Will explore our high-performance computers and cutting-edge accessories.
                    Find the perfect PC for your gaming, work, or entertainment needs.</p>
                <div class="intro-button mx-auto"><a class="button-86" href="/userVerify">Visit Us Today!</a></div>
            </div>
        </div>
    </div>
</section>
<section class="page-section cta">
    <div class="container">
        <div class="row">
            <div class="col-xl-9 mx-auto">
                <div class="cta-inner bg-faded text-center rounded">
                    <h2 class="section-heading mb-4">
                        <span class="section-heading-upper">Our Recognition</span>
                        <span class="section-heading-lower">Acknowledging Excellence Together
</span>
                    </h2>
                    <p class="mb-3">Turbo Technologies is more than just a store; it's a community of enthusiasts who share a passion for technology. We take pride in being your trusted partner in all aspects of this exciting world.</p>
                </div>
            </div>
        </div>
    </div>
</section>
@include('layouts.footerView')
<!-- Bootstrap core JS-->
<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>
<!-- Core theme JS-->
<script src="{{asset('js/scripts.js')}}"></script>
<script src="{{asset('js/scriptSlider.js')}}"></script>

</body>
</html>
