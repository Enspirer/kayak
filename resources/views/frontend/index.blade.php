@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('navs.general.home'))

@push('after-styles')
    <link rel="stylesheet" href="{{ url('css/index.css') }}"/>
    <link rel="stylesheet" href="{{ url('css/products-swiper.css') }}"/>
@endpush

@section('content')

    <div id="loading">
        <div id="earth"></div>

        <div class="container" style="z-index: 9999; margin-top: 1rem;">
            <div class="row justify-content-center">
                <div class="col-6 text-center">
                    <div class="name" data-aos="zoom-in" data-aos-delay="1000" data-aos-duration="1000">
                        <p style="font-family: lora; font-size:2rem; line-height:0.75; color: white; z-index: 9999999;">KAYAK</p>
                        <p class="mt-2" style="font-family: lora; font-size:1rem; color: #FFFFFF">SURGI PHARMA</p>
                    </div>

                    <div class="mt-4">
                        <button class="btn"><i class="bi bi-arrow-right-circle-fill" style="font-size: 2rem; color: white;"></i></button>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="index">

    

    <div class="container-fluid p-0 banners" style="margin-top: 5rem;">
        <div class="swiper mySwiper">
            <div class="swiper-wrapper">
                <div class="swiper-slide">
                    <div class="banner" style="background-image: url('img/frontend/index/1.jpg');">
                        <div class="container" style="padding-top: 11rem;">
                            <div class="row justify-content-end">
                                <div class="col-12 col-md-6">
                                    <h1>Better Technology for</h1>
                                    <h1 class="mb-2">Better Health Care</h1>
                                    <p class="ps-1">Widest range of products with Highest Quality standards</p>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="banner" style="background-image: url('img/frontend/index/2.jpg');">
                        <div class="container" style="padding-top: 11rem;">
                            <div class="row justify-content-end">
                                <div class="col-6">
                                    <!-- <h1>Better Technology for</h1>
                                    <h1 class="mb-2">Better Health Care</h1>
                                    <p class="ps-1">Widest range of products with Highest Quality standards</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="banner" style="background-image: url('img/frontend/index/3.jpg');">
                        <div class="container" style="padding-top: 11rem;">
                            <div class="row justify-content-end">
                                <div class="col-6">
                                    <!-- <h1>Better Technology for</h1>
                                    <h1 class="mb-2">Better Health Care</h1>
                                    <p class="ps-1">Widest range of products with Highest Quality standards</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="banner" style="background-image: url('img/frontend/index/4.jpg');">
                        <div class="container" style="padding-top: 11rem;">
                            <div class="row justify-content-end">
                                <div class="col-6">
                                    <!-- <h1>Better Technology for</h1>
                                    <h1 class="mb-2">Better Health Care</h1>
                                    <p class="ps-1">Widest range of products with Highest Quality standards</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="banner" style="background-image: url('img/frontend/index/5.jpg');">
                        <div class="container" style="padding-top: 11rem;">
                            <div class="row justify-content-end">
                                <div class="col-6">
                                    <!-- <h1>Better Technology for</h1>
                                    <h1 class="mb-2">Better Health Care</h1>
                                    <p class="ps-1">Widest range of products with Highest Quality standards</p> -->
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>
    </div>

    
    <div class="container text-center about-us" style="margin-top: 5rem;">
        <h1 class="mb-3 mb-md-0">Get More Information About Us</h1>
        <p>We are doing out best to help our customers, throw stable steps</p>


        <div class="row about-us-row" style="margin-top: 6rem;">
            <div class="col-12 col-md-4 position-relative">
                <div class="row justify-content-center mb-3">
                    <div class="col-3 about-cards">
                        <img src="{{ url('img/frontend/index/team.png') }}" class="img-fluid" alt="...">
                    </div>
                </div>
                <div class="card about-main">
                    <div class="card-body">
                        <h5 class="card-title mb-2">About Kayak</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur</p>

                        <div class="row justify-content-end">
                            <div class="col-2 text-end pe-1">
                                <i class="bi bi-plus-lg" style="color: #8E8C8C"></i>
                            </div>
                        </div>

                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 position-relative">
                <div class="row justify-content-center mb-3">
                    <div class="col-3 about-cards">
                        <img src="{{ url('img/frontend/index/hand.png') }}" class="img-fluid" alt="...">
                    </div>
                </div>
                <div class="card about-main">
                    <div class="card-body">
                        <h5 class="card-title mb-2">About Kayak</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur</p>

                        <div class="row justify-content-end">
                            <div class="col-2 text-end pe-1">
                                <i class="bi bi-plus-lg" style="color: #8E8C8C"></i>
                            </div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 position-relative">
                <div class="row justify-content-center mb-3">
                    <div class="col-3 about-cards">
                        <img src="{{ url('img/frontend/index/medicine.png') }}" class="img-fluid" alt="...">
                    </div>
                </div>
                <div class="card about-main">
                    <div class="card-body ">
                        <h5 class="card-title mb-2">Manufacturing</h5>
                        <p class="card-text">Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata sanctus est Lorem ipsum dolor sit amet. Lorem ipsum dolor sit amet, consetetur</p>

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

        <div class="container swiper mySwiper1 mt-md-5 px-5">
            <div class="swiper-wrapper align-items-center">
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="{{ url('img/frontend/index/slide-1.png') }}" alt="...">
                            <h6 class="card-title fw-bold mb-2">Multilayer Surgical Cellulose Roll</h6>
                            <div class="text-center mb-2">
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="card-text mb-md-3" style="font-size: 0.8rem;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                            <a href="#" class="btn d-none">View More</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="{{ url('img/frontend/index/slide-2.png') }}" alt="...">
                            <h5 class="card-title fw-bold mb-2">KN95 Face Masks</h5>
                            <div class="text-center mb-2">
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="card-text mb-md-3">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                            <a href="#" class="btn d-none">View More</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="{{ url('img/frontend/index/slide-3.png') }}" alt="...">
                            <h6 class="card-title fw-bold mb-2">Endotracheal Tubes</h6>
                            <div class="text-center mb-2">
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="card-text mb-md-3" style="font-size: 0.8rem;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                            <a href="#" class="btn d-none">View More</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="{{ url('img/frontend/index/slide-1.png') }}" alt="...">
                            <h6 class="card-title fw-bold mb-2">Multilayer Surgical Cellulose Roll</h6>
                            <div class="text-center mb-2">
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="card-text mb-md-3" style="font-size: 0.8rem;">Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry.</p>
                            <a href="#" class="btn d-none">View More</a>
                        </div>
                    </div>
                </div>
            </div>
            <div class="swiper-button-next"></div>
            <div class="swiper-button-prev"></div>
        </div>

    </div>


    <div class="container-fluid other-banner">
        <div class="container">
            <div class="row pt-5">
                <div class="col-12 text-center mb-4 mb-md-0">
                    <h3>Other Products</h3>
                    <p>We are doing our best to help our customers, throw stable steps</p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6 text-center">
                            <h4 class="fw-bold">SURGICAL DIVISION</h4>
                            <p>Lorem ipsum dolor sit amet consectetur adipisicing elit. Illo commodi vitae dignissimos quos provident, qui laudantium neque possimus totam esse nulla animi, earum cum repudiandae ea libero? Ad iste nulla, quo quas laudantium placeat in expedita tempora tenetur necessitatibus nam!</p>
                        </div>

                    <div class="col-12 col-md-6">
                        <div class="swiper mySwiper2 mt-5">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide px-5">        
                                    <div class="d-flex align-items-end" style="background: linear-gradient(to bottom, rgba(0,0,0, 0), rgba(0,0,0, 100) ),url('../img/frontend/index/shoulder.png'); background-repeat: no-repeat;background-size: cover; height: 16rem; background-position:center center; justify-content: center">
                                        <h5 class="fw-bold text-white">Orthopedics Products</h5>
                                    </div>
                                </div>
                                
                                <div class="swiper-slide px-5">
                                    <div class="d-flex align-items-end" style="background: linear-gradient(to bottom, rgba(0,0,0, 0), rgba(0,0,0, 100) ),url('../img/frontend/index/shoulder.png'); background-repeat: no-repeat;background-size: cover; height: 16rem; background-position:center center; justify-content: center">
                                        <h5 class="fw-bold text-white">Surgical Products</h5>
                                    </div>
                                </div>
                                <div class="swiper-slide px-5">
                                    <div class="d-flex align-items-end" style="background: linear-gradient(to bottom, rgba(0,0,0, 0), rgba(0,0,0, 100) ),url('../img/frontend/index/shoulder.png'); background-repeat: no-repeat;background-size: cover; height: 16rem; background-position:center center; justify-content: center">
                                        <h5 class="fw-bold text-white">Vaccine Products</h5>
                                    </div>
                                </div>
                            </div>
                            <div class="swiper-button-next"></div>
                            <div class="swiper-button-prev"></div>
                        </div>
                        
                    </div>
                </div>

                <div class="text-center mt-5">
                    <a href="#" type="button" class="btn text-decoration-none text-white rounded-pill" style="background-color: #00ACEE;">View All Products</a>
                </div>
                </div>
            </div>

            
        </div>
    </div>
    

    <div class="container-fluid new-banner">
        <div class="container">
            <div class="row pt-5 justify-content-center">
                <div class="col-10">
                    <div class="row">
                        <div class="col-12 text-center">
                            <h1>What's New at Kayak</h1>
                            <p>Lorem ipsum dolor sit amet, consetetur sadipscing elitr, sed diam nonumy eirmod tempor invidunt ut labore et dolore magna aliquyam erat, sed diam voluptua. At vero eos et accusam et justo duo dolores et ea rebum. Stet clita kasd gubergren, no sea takimata</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
        
        <div class="container">
            <div class="row mt-5">

                @if($news_1 != null )
                    <div class="col-12 col-md-3">
                        <a href="{{ route('frontend.news') }}" style="text-decoration:none; color:black;">
                            <img src="{{ uploaded_asset(json_decode($news_1->images)[0]->image1) }}" alt="" class="img-fluid" style="height:260px; object-fit:cover;">
                            <div class="row justify-content-end">
                                <div class="col-11">
                                    <div class="position-relative p-2" style="background-color: white; top: -4rem;">
                                        <p class="fw-bold mb-2" style="text-align: justify; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;">{{$news_1->title}}</p>
                                        <p style="text-align: justify; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical; font-size: 0.8rem;">{{$news_1->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif
                
                @if($news_2 != null )
                    <div class="col-12 col-md-3">
                        <a href="{{ route('frontend.news') }}" style="text-decoration:none; color:black;">
                            <img src="{{ uploaded_asset(json_decode($news_2->images)[0]->image1) }}" alt="" class="img-fluid" style="height:260px; object-fit:cover;">
                            <div class="row justify-content-end">
                                <div class="col-11">
                                    <div class="position-relative p-2" style="background-color: white; top: -4rem;">
                                        <p class="fw-bold mb-2" style="text-align: justify; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 1; -webkit-box-orient: vertical;">{{$news_2->title}}</p>
                                        <p style="text-align: justify; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 5; -webkit-box-orient: vertical; font-size: 0.8rem;">{{$news_2->description}}</p>
                                    </div>
                                </div>
                            </div>
                        </a>
                    </div>
                @endif

                <!-- <div class="col-12 col-md-3">
                    <img src="{{ url('img/frontend/index/new-2.png') }}" alt="" class="img-fluid">

                    <div class="row justify-content-end">
                        <div class="col-11">
                            <div class="position-relative p-2" style="background-color: white; top: -4rem;">
                                <p class="fw-bold mb-2">Lorem Ipsum Dolar</p>
                                <p style="font-size: 0.8rem;">Lorem ipsum, dolor sit amet consectetur adipisicing elit. Voluptatum vero cum, nemo aperiam repellendus quae enim modi a itaque saepe?</p>
                            </div>
                        </div>
                    </div>
                </div> -->

                <div class="col-12 col-md-6">
                    <iframe src="https://www.youtube.com/embed/wHWpz804lOk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width: 100%; height: 336px"></iframe>
                </div>
            </div>
        </div>
        
    </div>

    </div>

@endsection


@push('after-scripts')

    <script>
        $('#loading .btn').on('click', function() {
            $('#loading').fadeOut(2000);

            // $( "#loading" ).animate({
            //         width: "toggle",
            //         height: "toggle"
            //     }, {
            //         duration: 5000,
            //         specialEasing: {
            //         width: "easeOutSine",
            //         height: "easeInOutSine",
            //         },
            //         complete: function() {
            //         alert( "Animation complete!" );
            //         }
            // });

        });
    </script>

<!-- Initialize Swiper -->
<script>
  var swiper = new Swiper(".mySwiper", {
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        autoplay: {
          delay: 4000,
          disableOnInteraction: false,
        },
        effect: "fade",
        speed: 1000,
  });
</script>

<script>
    var swiper = new Swiper( '.mySwiper1', {
		// pagination: '.swiper-pagination',
        spaceBetween: 50,
		slidesPerView: 3,
        loop: true,
        loopFillGroupWithBlank: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        },
        breakpoints: {
            0: {
                slidesPerView: 1,
            },

            576: {
                slidesPerView: 3,
            },
            768: {
                slidesPerView: 3,
            }
            },
        
    });

    if($('.mySwiper1 .swiper-slide').hasClass('swiper-slide-next')) {
        $(this).find('.card-title').css('border', '1px solid black');
    }

    if($('.mySwiper1 .swiper-slide').hasClass('swiper-slide-next')) {
            $('.mySwiper1 .swiper-slide-next').find('a').removeClass('d-none');
        }

    $('.swiper-button-next').on('click', function() {
        if($('.mySwiper1 .swiper-slide').hasClass('swiper-slide-next')) {
            $('.mySwiper1 .swiper-slide-next').find('a').removeClass('d-none');
        }

        if ($('.mySwiper1 .swiper-slide').hasClass('swiper-slide-active')) {
           $('.mySwiper1 .swiper-slide-active').find('a').addClass('d-none');
        }
        $(window).resize();
    });

    $('.swiper-button-prev').on('click', function() {
        if($('.mySwiper1 .swiper-slide').hasClass('swiper-slide-next')) {
            $('.mySwiper1 .swiper-slide-next').find('a').removeClass('d-none');
        }

        if ($('.mySwiper1 .swiper-slide').classList.length == 1) {
           $('.mySwiper1 .swiper-slide').find('a').addClass('d-none');
        }
        $(window).resize();
    });


    $(window).resize(function(e) {
        if ($(window).width() <= 576) {
            $('.mySwiper1 a').removeClass('d-none');
        }
        
    });

    $(document).ready(function(){
        $(window).resize(); // call once for good measure!
    });

</script>

<script>
      var swiper = new Swiper(".mySwiper2", {
        slidesPerView: 1,
        loop: true,
        navigation: {
            nextEl: ".swiper-button-next",
            prevEl: ".swiper-button-prev",
        }
      });
</script>


@endpush
