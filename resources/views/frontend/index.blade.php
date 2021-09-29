@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@push('after-styles')
    <link rel="stylesheet" href="{{ url('css/index.css') }}"/>
@endpush

@section('content')
    <!-- <div class="container-fluid p-0" style="margin-top: 5rem;">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper" style="background-attachment: fixed;">
                <div class="swiper-slide banner-1">
                    <div class="container" style="padding-top: 11rem;">
                        <div class="row justify-content-end">
                            <div class="col-6">
                                <h1>Better Technology for</h1>
                                <h1 class="mb-2">Better Health Care</h1>
                                <p class="ps-1">Widest range of products with Highest Quality standards</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide banner-2"></div>
                <div class="swiper-slide banner-3"></div>
                <div class="swiper-slide banner-4"></div>
                <div class="swiper-slide banner-5"></div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div> -->

    <div class="container-fluid p-0 banners" style="margin-top: 5rem;">
        <div class="banner first" style="background-image: url('img/frontend/index/1.jpg');">
            <div class="container" style="padding-top: 11rem;">
                <div class="row justify-content-end">
                    <div class="col-6">
                        <h1>Better Technology for</h1>
                        <h1 class="mb-2">Better Health Care</h1>
                        <p class="ps-1">Widest range of products with Highest Quality standards</p>
                    </div>
                    
                </div>
                <div class="swiper-button-next next"></div>
                <div class="swiper-button-prev previous"></div>
            </div>
        </div>

        <div class="banner d-none" style="background-image: url('img/frontend/index/2.jpg');">
            <div class="container" style="padding-top: 11rem;">
                <div class="row justify-content-end">
                    <div class="col-6">
                        <!-- <h1>Better Technology for</h1>
                        <h1 class="mb-2">Better Health Care</h1>
                        <p class="ps-1">Widest range of products with Highest Quality standards</p> -->
                    </div>
                    <div class="swiper-button-next next"></div>
                    <div class="swiper-button-prev previous"></div>
                </div>
            </div>
        </div>

        <div class="banner d-none" style="background-image: url('img/frontend/index/3.jpg');">
            <div class="container" style="padding-top: 11rem;">
                <div class="row justify-content-end">
                    <div class="col-6">
                        <!-- <h1>Better Technology for</h1>
                        <h1 class="mb-2">Better Health Care</h1>
                        <p class="ps-1">Widest range of products with Highest Quality standards</p> -->
                    </div>
                    <div class="swiper-button-next next"></div>
                    <div class="swiper-button-prev previous"></div>
                </div>
            </div>
        </div>

        <div class="banner d-none" style="background-image: url('img/frontend/index/4.jpg');">
            <div class="container" style="padding-top: 11rem;">
                <div class="row justify-content-end">
                    <div class="col-6">
                        <!-- <h1>Better Technology for</h1>
                        <h1 class="mb-2">Better Health Care</h1>
                        <p class="ps-1">Widest range of products with Highest Quality standards</p> -->
                    </div>
                    <div class="swiper-button-next next"></div>
                    <div class="swiper-button-prev previous"></div>
                </div>
            </div>
        </div>

        <div class="banner d-none last" style="background-image: url('img/frontend/index/5.jpg');">
            <div class="container" style="padding-top: 11rem;">
                <div class="row justify-content-end">
                    <div class="col-6">
                        <!-- <h1>Better Technology for</h1>
                        <h1 class="mb-2">Better Health Care</h1>
                        <p class="ps-1">Widest range of products with Highest Quality standards</p> -->
                    </div>
                    <div class="swiper-button-next next"></div>
                    <div class="swiper-button-prev previous"></div>
                </div>
            </div>
        </div>
    </div>

    
    <div class="container text-center" style="margin-top: 5rem;">
        <h1>Get More Information About Us</h1>
        <p>We are doing out best to help our customers, throw stable steps</p>


        <div class="row" style="margin-top: 7rem;">
            <div class="col-4 position-relative">
                <div class="row justify-content-center mb-3">
                    <div class="col-3 about-cards">
                        <img src="{{ url('img/frontend/index/team.png') }}" class="img-fluid" alt="..." style="height: 3rem;">
                    </div>
                </div>
                <div class="card about-main">
                    <div class="card-body ">
                        <h5 class="card-title mb-2">About Kayak</h5>
                        <p class="card-text" style="font-size: 0.9rem;">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur</p>

                        <div class="row justify-content-end">
                            <div class="col-2 text-end pe-1">
                                <i class="bi bi-plus-lg" style="color: #8E8C8C"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-4 position-relative">
                <div class="row justify-content-center mb-3">
                    <div class="col-3 about-cards">
                        <img src="{{ url('img/frontend/index/hand.png') }}" class="img-fluid" alt="..." style="height: 3rem;">
                    </div>
                </div>
                <div class="card about-main">
                    <div class="card-body ">
                        <h5 class="card-title mb-2">About Kayak</h5>
                        <p class="card-text" style="font-size: 0.9rem;">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur</p>

                        <div class="row justify-content-end">
                            <div class="col-2 text-end pe-1">
                                <i class="bi bi-plus-lg" style="color: #8E8C8C"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-4 position-relative">
                <div class="row justify-content-center mb-3">
                    <div class="col-3 about-cards">
                        <img src="{{ url('img/frontend/index/medicine.png') }}" class="img-fluid" alt="..." style="height: 3rem;">
                    </div>
                </div>
                <div class="card about-main">
                    <div class="card-body ">
                        <h5 class="card-title mb-2">Manufacturing</h5>
                        <p class="card-text" style="font-size: 0.9rem;">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur</p>

                        <div class="row justify-content-end">
                            <div class="col-2 text-end pe-1">
                                <i class="bi bi-plus-lg" style="color: #8E8C8C"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>


    <div class="container-fluid products-banner" style="margin-top: 5rem;">
        <div class="row pt-5">
            <div class="col-12 text-center">
                <h3 class="text-white">KAYAK Products</h3>
                <p class="text-white">We are doing our best to help our customers, throw stable steps</p>
            </div>
        </div>

        <div class="container swiper mySwiper1 mt-5">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="card" style="width: 18rem; height: 20rem; background: rgba(255, 255, 255, .8);">
                        <div class="card-body text-center">
                            <img src="{{ url('img/frontend/index/slide-1.png') }}" alt="..." style="height: 10rem; object-fit: cover;">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="{{ url('img/frontend/index/slide-1.png') }}" alt="..." style="height: 10rem; object-fit: cover;">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="{{ url('img/frontend/index/slide-1.png') }}" alt="..." style="height: 10rem; object-fit: cover;">
                            <h5 class="card-title">Card title</h5>
                            <p class="card-text">Some quick example text to build on the card title and make up the bulk of the card's content.</p>
                            <a href="#" class="btn btn-primary">Go somewhere</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">Slide 4</div>
                <div class="swiper-slide">Slide 5</div>
                <div class="swiper-slide">Slide 6</div>
                <div class="swiper-slide">Slide 7</div>
                <div class="swiper-slide">Slide 8</div>
                <div class="swiper-slide">Slide 9</div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </div>


    <div class="container" style="margin-top: 1rem;">
        <div class="row pt-5">
            <div class="col-12 text-center">
                <h3>Other Products</h3>
                <p>We are doing our best to help our customers, throw stable steps</p>
            </div>
        </div>
        <div class="swiper mySwiper2 mt-5">
            <div class="swiper-wrapper">
                <div class="swiper-slide px-5">
                    <div class="row justify-content-center">
                        <div class="col-9">
                            <div class="row align-items-center">
                                    <div class="col-6 text-center">
                                    <h4 class="fw-bold">SURGICAL DIVISION</h4>
                                    <p>Lorem ipsum dolor sit, amet consectetur adipisicing elit. Odio dolorum consequatur excepturi hic quae enim minima ipsam nobis atque quas, totam autem mollitia dolores cupiditate nihil officiis dicta aliquam similique.</p>
                                </div>

                                <div class="col-6 d-flex align-items-end" style="background: linear-gradient(to bottom, rgba(0,0,0, 0), rgba(0,0,0, 100) ),url('../img/frontend/index/shoulder.png'); background-repeat: no-repeat;background-size: cover; height: 16rem; background-position:center center; justify-content: center">
                                    <!-- <img src="{{ url('img/frontend/index/shoulder.png') }}" alt="" style="height: 15rem; "> -->
                                    <h5 class="fw-bold text-white">Orthopedics Products</h5>
                                </div>
                            </div>
                        </div>
                       
                    </div>
                </div>
                <div class="swiper-slide">Slide 2</div>
                <div class="swiper-slide">Slide 3</div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

        <div class="text-center mt-5">
            <a href="#" type="button" class="btn text-decoration-none text-white rounded-pill" style="background-color: #00ACEE;">View All Products</a>
        </div>
    </div>

    <div class="container-fluid new-banner" style="margin-top: 5rem;">
        <div class="row pt-5 justify-content-center">
            <div class="col-6">
                <div class="row">
                    <div class="col-12 text-center">
                        <h1>What's New at Kayak</h1>
                        <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata</p>
                    </div>
                </div>
            </div>
        </div>
    
        <div class="container">
            <div class="row mt-5">
                <div class="col-3">
                    <img src="{{ url('img/frontend/index/new-1.png') }}" alt="" class="img-fluid">

                    <div class="row justify-content-end">
                        <div class="col-11">
                            <div class="position-relative p-2" style="background-color: white; top: -4rem;">
                                <p class="fw-bold mb-2">Lorem Ipsum Dolar</p>
                                <p style="font-size: 0.8rem;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum vero cum, nemo aperiam repellendus quae enim modi a itaque saepe?</p>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="col-3">
                    <img src="{{ url('img/frontend/index/new-2.png') }}" alt="" class="img-fluid">

                    <div class="row justify-content-end">
                        <div class="col-11">
                            <div class="position-relative p-2" style="background-color: white; top: -4rem;">
                                <p class="fw-bold mb-2">Lorem Ipsum Dolar</p>
                                <p style="font-size: 0.8rem;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum vero cum, nemo aperiam repellendus quae enim modi a itaque saepe?</p>
                            </div>
                        </div>
                    </div>
                </div>

                <div class="col-6">

                </div>
            </div>
        </div>
        
    </div>
@endsection


@push('after-scripts')
<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
    navigation: {
      nextEl: ".swiper-button-next",
      prevEl: ".swiper-button-prev",
    }
  });
</script>

<script>
      var swiper = new Swiper(".mySwiper1", {
        slidesPerView: 3,
        spaceBetween: 60,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        }
      });
</script>

<script>
      var swiper = new Swiper(".mySwiper2", {
        slidesPerView: 1,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        }
      });
</script>


<script>
    $('.banners .banner .next').on('click', function() {
        $(this).parents('.banner').addClass('d-none');
        $(this).parents('.banner').next().removeClass('d-none');

        if($(this).parents('.banner').hasClass('last')) {
            $(this).parents('.banner').addClass('d-none');
            $(this).parents('.banners').find('.banner:first-child').removeClass('d-none');
        };
    });

    $('.banners .banner .previous').on('click', function() {
        $(this).parents('.banner').addClass('d-none');
        $(this).parents('.banner').prev().removeClass('d-none');

        if($(this).parents('.banner').hasClass('first')) {
            $(this).parents('.banner').addClass('d-none');
            $(this).parents('.banners').find('.banner:last-child').removeClass('d-none');
        };
    });

    
</script>

@endpush
