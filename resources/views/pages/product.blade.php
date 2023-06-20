@extends('index')

@section('content')
    <!-- Shop Section Begin -->
    <section class="shop spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-3 sidebar-left">
                    <div class="shop__sidebar">
                        <div class="shop__sidebar__search">
                            <form method="GET"
                            {{-- action="{{ route('search') }}" --}}
                            >
                                <input type="text" placeholder="Search..." name="key">
                                <button type="submit"><i class="fas fa-search"></i></button>
                            </form>
                        </div>
                        <div class="shop__sidebar__accordion">
                            <div class="accordion" id="accordionExample">
                                <div class="card">
                                    <div>
                                        <a><b>THƯƠNG HIỆU</b></a>
                                    </div>
                                    <div id="collapseTwo" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__brand">
                                                <ul>
                                                    <li><a href="#">Adidas</a></li>
                                                    <li><a href="#">Nike</a></li>
                                                    <li><a href="#">MLB Korea</a></li>
                                                    <li><a href="#">Balenciaga</a></li>
                                                    <li><a href="#">Gucci</a></li>
                                                    <li><a href="#">Converse</a></li>
                                                    <li><a href="#">Vans</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div>
                                        <a><b>GIÁ</b></a>
                                    </div>
                                    <div id="collapseThree" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__price">
                                                <ul>
                                                    <li><a href="#">500.000đ</a></li>
                                                    <li><a href="#">500.000-1.000.000đ</a></li>
                                                    <li><a href="#">1.000.000-1.500.000đ</a></li>
                                                    <li><a href="#">1.500.000-2.000.000đ</a></li>

                                                    <li><a href="#">&rsaquo;2.000.000đ</a></li>
                                                </ul>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                                <div class="card">
                                    <div>
                                        <a><b>SIZE</b></a>
                                    </div>
                                    <div id="collapseFour" class="collapse show" data-parent="#accordionExample">
                                        <div class="card-body">
                                            <div class="shop__sidebar__size">
                                                <label for="xs">35
                                                    <input type="radio" id="35">
                                                </label>
                                                <label for="sm">36
                                                    <input type="radio" id="36">
                                                </label>
                                                <label for="md">37
                                                    <input type="radio" id="37">
                                                </label>
                                                <label for="xl">38
                                                    <input type="radio" id="38">
                                                </label>
                                                <label for="2xl">39
                                                    <input type="radio" id="39">
                                                </label>
                                                <label for="xxl">40
                                                    <input type="radio" id="40">
                                                </label>
                                                <label for="3xl">41
                                                    <input type="radio" id="41">
                                                </label>
                                                <label for="4xl">42
                                                    <input type="radio" id="42">
                                                </label>
                                            </div>
                                        </div>
                                    </div>
                                </div>

                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-lg-9 sidebar-right  ">
                    <div class="shop__product__option">
                        <div class="row">
                            <div class="col-lg-2 col-md-2 col-sm-2">
                                <div class="shop__product__option__left">
                                    <p><b>SẢN PHẨM</b></p>
                                </div>
                            </div>
                        </div>
                    </div>
                    
                    {{-- @foreach($products as $product) --}}
                    <div class="row list-item">                       
                        <div class="col-lg-3 col-md-4 col-sm-6 mix women men kid accessories cosmetic">
                            <div class="product__item sale">
                                <div class="product__item__pic set-bg" 
                                data-setbg="{{ asset('frontend/img/product/product-8.jpg') }}"
                                {{-- data-setbg="{{asset('img/'.$product->img)}}" --}}
                                >
                                    <div class="label">Sale</div>
                                    <ul class="product__hover">
                                        
                                        <li><a href="{{ asset('frontend/img/product/product') }}-8.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                        <li><a 
                                            {{-- href="{{ route('detail', $product->id) }}" --}}
                                            ><span class="icon_heart_alt"></span></a></li>
                                        <li><a 
                                            {{-- href="{{ route('add.cart', $product->id) }}"  --}}
                                            ><span class="icon_bag_alt"></span></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">
                                        {{-- <h6>{{$product->name}}</h6> --}}
                                        Water resistant backpack
                                    </a></h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__price">
                                        {{-- <h5>{{$product->price}} vnđ</h5> --}}
                                        $ 49.0 
                                        <span>$ 59.0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>
                    {{-- @endforeach --}}

                    <div class="row list-item">
                        
                        {{-- @foreach($products as $product) --}}
                        <div class="col-lg-3 col-md-4 col-sm-6 mix women men kid accessories cosmetic">
                            <div class="product__item sale">
                                <div class="product__item__pic set-bg" 
                                data-setbg="{{ asset('frontend/img/product/product-8.jpg') }}"
                                {{-- data-setbg="{{asset('img/'.$product->img)}}" --}}
                                >
                                    <div class="label">Sale</div>
                                    <ul class="product__hover">
                                        
                                        <li><a href="{{ asset('frontend/img/product/product') }}-8.jpg" class="image-popup"><span class="arrow_expand"></span></a></li>
                                        <li><a 
                                            {{-- href="{{ route('detail', $product->id) }}" --}}
                                            ><span class="icon_heart_alt"></span></a></li>
                                        <li><a 
                                            {{-- href="{{ route('add.cart', $product->id) }}"  --}}
                                            ><span class="icon_bag_alt"></span></a></li>
                                    </ul>
                                </div>
                                <div class="product__item__text">
                                    <h6><a href="#">
                                        {{-- <h6>{{$product->name}}</h6> --}}
                                        Water resistant backpack
                                    </a></h6>
                                    <div class="rating">
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                        <i class="fa fa-star"></i>
                                    </div>
                                    <div class="product__price">
                                        {{-- <h5>{{$product->price}} vnđ</h5> --}}
                                        $ 49.0 
                                        <span>$ 59.0</span>
                                    </div>
                                </div>
                            </div>
                        </div>
                        {{-- @endforeach --}}

                    </div>
                    
                    <div class="d-flex justify-content-center">
                        {{-- {{$products->links("pagination::bootstrap-4")}} --}}
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Shop Section End -->
@endsection