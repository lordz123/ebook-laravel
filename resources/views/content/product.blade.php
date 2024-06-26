@extends('layouts.app')
@section('content')
<section class="product-sec">
    <div class="container">
        <h1>7 Day Self publish How to Write a Book</h1>
        <div class="row">
            <div class="col-md-6 slider-sec">
                <!-- main slider carousel -->
                <div id="myCarousel" class="carousel slide">
                    <!-- main slider carousel items -->
                    <div class="carousel-inner">
                        <div class="active item carousel-item" data-slide-number="0">
                            <img src="images/product1.jpg" class="img-fluid">
                        </div>

                    </div>
                    <!-- main slider carousel nav controls -->
                    <ul class="carousel-indicators list-inline">
                        <li class="list-inline-item active">
                            <a id="carousel-selector-0" class="selected" data-slide-to="0" data-target="#myCarousel">
                            <img src="images/product1.jpg" class="img-fluid">
                        </a>
                        </li>
                    </ul>
                </div>
                <!--/main slider carousel-->
            </div>
            <div class="col-md-6 slider-content">
                <p>Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and Scrambled it to make a type and typesetting industry. Lorem Ipsum has been the book. </p>
                <p>t has survived not only fiveLorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's printer took a galley of type and</p>
                <ul>
                    <li>
                        <span class="name">Digital List Price</span><span class="clm">:</span>
                        <span class="price">$4.71</span>
                    </li>
                    <li>
                        <span class="name">Print List Price</span><span class="clm">:</span>
                        <span class="price">$10.99</span>
                    </li>
                    <li>
                        <span class="name">Kindle Price</span><span class="clm">:</span>
                        <span class="price final">$3.37</span>
                    </li>
                    <li><span class="save-cost">Save $7.62 (69%)</span></li>
                </ul>
                <div class="btn-sec">
                    <button class="btn ">Add To cart</button>
                    <button class="btn black">Buy Now</button>
                </div>
            </div>
        </div>
    </div>
</section>
<section class="related-books">
    <div class="container">
        <h2>You may also like these book</h2>
        <div class="recomended-sec">
            <div class="row">
                <div class="col-lg-3 col-md-6">
                    <div class="item">
                        <img src="images/img1.jpg" alt="img">
                        <h3>how to be a bwase</h3>
                        <h6><span class="price">$49</span> / <a href="{{route('product')}}">Buy Now</a></h6>
                        <div class="hover">
                            <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="item">
                        <img src="images/img2.jpg" alt="img">
                        <h3>How to write a book...</h3>
                        <h6><span class="price">$19</span> / <a href="{{route('product')}}">Buy Now</a></h6>
                        <span class="sale">Sale !</span>
                        <div class="hover">
                            <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="item">
                        <img src="images/img3.jpg" alt="img">
                        <h3>7-day self publish...</h3>
                        <h6><span class="price">$49</span> / <a href="{{route('product')}}">Buy Now</a></h6>
                        <div class="hover">
                            <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                        </div>
                    </div>
                </div>
                <div class="col-lg-3 col-md-6">
                    <div class="item">
                        <img src="images/img4.jpg" alt="img">
                        <h3>wendy doniger</h3>
                        <h6><span class="price">$49</span> / <a href="{{route('product')}}">Buy Now</a></h6>
                        <div class="hover">
                            <span><i class="fa fa-long-arrow-right" aria-hidden="true"></i></span>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>
@endsection
