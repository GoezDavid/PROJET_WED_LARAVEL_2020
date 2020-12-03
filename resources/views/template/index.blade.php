<!doctype html>
<html class="no-js" lang="zxx">
<head>
    @include('template.partials._head')
</head>
<body>
<!-- Preloader Start -->
<div id="preloader-active">
    <div class="preloader d-flex align-items-center justify-content-center">
        <div class="preloader-inner position-relative">
            <div class="preloader-circle"></div>
            <div class="preloader-img pere-text">
                <img src={{ asset("assets/img/logo/logo.png") }} alt="">
            </div>
        </div>
    </div>
</div>
<!-- Preloader Start-->
<header>
    <!-- Header Start -->
    <div class="header-area">
            <div class="main-header header-sticky">
                <div class="container">
                    <div class="row align-items-center">
                        <!-- Logo -->
                        <div class="col-xl-2 col-lg-2">
                            <div class="logo">
                                <a href="index.html"><img src={{ asset("assets/img/logo/logo.png") }} alt=""></a>
                            </div>
                        </div>
                        <div class="col-xl-10 col-lg-10 col-md-10">
                            <!-- Main-menu -->
                            <div class="main-menu f-right d-none d-lg-block">
                                 @include('template.partials._nav')
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

@include('template.partials._main')
@include('template.partials._footer')

<!-- JS here -->

@include('template.partials._scripts')

</body>
</html>
