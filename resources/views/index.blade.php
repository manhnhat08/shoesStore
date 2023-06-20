<!DOCTYPE html>
<html lang="">

<head>
    <meta charset="UTF-8">
    <meta name="description" content="Ashion">
    <meta name="keywords" content="Ashion, unica, creative, html">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <meta http-equiv="X-UA-Compatible" content="ie=edge">
    <title>Shoes Store</title>
    <link rel="icon" href="{{asset('frontend/img/Shoes Store.png')}}"> 

    @include('layouts.mainCSS')
</head>

<body>
<!-- Page Preloder -->
    {{-- @include('layouts.Preloader') --}}

<!-- Offcanvas Menu Begin -->
    @include('layouts.headerResponsive')
<!-- Offcanvas Menu End -->

<!-- Header Section Begin -->
   @include('layouts.header')
<!-- Header Section End -->

    <div class="page-content">
        {{-- @include('pages.home') --}}
        @yield('content')
    </div>
    


<!-- Footer Section Begin -->
    @include('layouts.footer')
<!-- Footer Section End -->

<!-- Search Begin -->
<div class="search-model">
    <div class="h-100 d-flex align-items-center justify-content-center">
        <div class="search-close-switch">+</div>
        <form class="search-model-form">
            <input type="text" id="search-input" placeholder="Search here.....">
        </form>
    </div>
</div>
<!-- Search End -->

@include('layouts.mainJS')
</body>
</html>