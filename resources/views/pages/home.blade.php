@extends('index')
@section('content')
   
   <!-- Categories Section Begin -->
   @include('layouts.categories')
   <!-- Categories Section End -->
   
   <!-- Product Section Begin -->
       @include('layouts.product')
   <!-- Product Section End -->
   
   <!-- Banner Section Begin -->
       @include('layouts.banner')
   <!-- Banner Section End -->
   
   <!-- Trend Section Begin -->
       @include('layouts.trend')
   <!-- Trend Section End -->
   
   <!-- Discount Section Begin -->
       @include('layouts.discount')
   <!-- Discount Section End -->
   
   <!-- Services Section Begin -->
       @include('layouts.services')
   <!-- Services Section End -->
   
   <!-- Instagram Begin -->
       @include('layouts.instagram')
   <!-- Instagram End -->

@endsection