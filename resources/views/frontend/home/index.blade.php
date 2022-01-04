@extends('frontend.main.index')

@section('container')

    <section class="hero">
    <div class="hero__item set-bg" data-setbg="https://source.unsplash.com/1200x400?spion">
                    <div class="hero__text">
                        <span>Sparepart</span>
                        <h2>Berkualitas <br /> dan Terjamin</h2>
                        <p></p>
                        <a href="/shop" class="primary-btn">SHOP NOW</a>
                    </div>
                </div>
    <!-- Hero Section End -->
    </section>

    <!-- Categories Section Begin -->
    <section class="categories">
        <div class="container">
            <div class="row">
                <div class="categories__slider owl-carousel">
                    @foreach ($brand_category as $brand)
                        <div class="col-lg-3">
                            <div class="categories__item set-bg" data-setbg="{{ $brand['brand_image'] }}">
                                <h5><a href="">{{ $brand['brand_name'] }}</a></h5>
                            </div>
                        </div>
                    @endforeach
                </div>
            </div>
        </div>
    </section>
    <!-- Categories Section End -->

    <!-- Latest Product Section Begin -->
    <section class="latest-product spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Latest Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            @foreach ($latest_product as $latest)
                            <div class="latest-prdouct__slider__item">
                                    <a href="/shop-detail" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="{{ $latest['product_image'] }}" alt="{{ $latest['image_alt'] }}">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>{{ $latest['product_name'] }}</h6>
                                            <span>Rp {{ $latest['product_prize'] }}</span>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                            </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Top Rated Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            @foreach ($latest_product as $latest)
                            <div class="latest-prdouct__slider__item">
                                    <a href="/shop-detail" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="{{ $latest['product_image'] }}" alt="{{ $latest['image_alt'] }}">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>{{ $latest['product_name'] }}</h6>
                                            <span>Rp {{ $latest['product_prize'] }}</span>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-6">
                    <div class="latest-product__text">
                        <h4>Review Products</h4>
                        <div class="latest-product__slider owl-carousel">
                            @foreach ($latest_product as $latest)
                            <div class="latest-prdouct__slider__item">
                                    <a href="/shop-detail" class="latest-product__item">
                                        <div class="latest-product__item__pic">
                                            <img src="{{ $latest['product_image'] }}" alt="{{ $latest['image_alt'] }}">
                                        </div>
                                        <div class="latest-product__item__text">
                                            <h6>{{ $latest['product_name'] }}</h6>
                                            <span>Rp {{ $latest['product_prize'] }}</span>
                                        </div>
                                    </a>
                                </div>
                                @endforeach
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Latest Product Section End -->


    <!-- Blog Section Begin -->
    <section class="from-blog spad">
        <div class="container">
            <div class="row">
                <div class="col-lg-12">
                    <div class="section-title from-blog__title">
                        <h2>From The Blog</h2>
                    </div>
                </div>
            </div>
            <div class="row">
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="/img/blog/blog-1.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Cooking tips make cooking simple</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="/img/blog/blog-2.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">6 ways to prepare breakfast for 30</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
                <div class="col-lg-4 col-md-4 col-sm-6">
                    <div class="blog__item">
                        <div class="blog__item__pic">
                            <img src="/img/blog/blog-3.jpg" alt="">
                        </div>
                        <div class="blog__item__text">
                            <ul>
                                <li><i class="fa fa-calendar-o"></i> May 4,2019</li>
                                <li><i class="fa fa-comment-o"></i> 5</li>
                            </ul>
                            <h5><a href="#">Visit the clean farm in the US</a></h5>
                            <p>Sed quia non numquam modi tempora indunt ut labore et dolore magnam aliquam quaerat </p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </section>
    <!-- Blog Section End -->

@endsection
