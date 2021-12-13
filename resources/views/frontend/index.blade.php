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
                        <!-- <p style="font-family: lora; font-size:2rem; line-height:0.75; color: white; z-index: 9999999;">KAYAK</p>
                        <p class="mt-2" style="font-family: lora; font-size:1rem; color: #FFFFFF">SURGI PHARMA</p> -->
                        <img src="{{ url('img/frontend/loader_text.png') }}" alt="" style="height: 3rem;">
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
        <p>We are doing our best to help our customers. TRUSTED OVER 30 YEARS IN THE MEDICAL INDUSTRY At Kayak Surgi Pharma, We Serve You for Better Health.</p>

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
                        <p class="card-text">We started our operations by introducing many products related to Pharmaceutical, Surgical and Public Health.
                            Since our initiation in 2004, we have excelled in various avenues in Medical and Surgical Goods Manufacturing that were previously deemed impossible to produce locally. 
                        </p>

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
                        <p class="card-text">Kayak is one of the first-ever organizations to set up manufacturing operations for Cellulose Wadding. Thereafter, we introduced a wide scope of medical goods such as Surgical Aprons, Respiratory Masks, Spinal Needles, Endotracheal Tubes and Many More. 
                            Kayak takes Pride in its Sri Lankan Heritage and strive to Heal the Nation.
                        </p>

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
                        <p class="card-text">We also engage in import and supply of many types of Medical items in Sri Lanka. We Strive to import Quality Products that heal the Nation. 
                            We are one of the local manufacturers to Export Medical Goods.
                        </p>

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
                <h3 class="text-white">Kayak Product Portfolio</h3>
                <p class="text-white">At Kayak, Quality is Our Prime Concern. Browse Our Portfolio.</p>
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
                            <p class="card-text mb-md-3" style="font-size: 0.8rem;">At Kayak, Quality is Our Prime Concern. Browse Our Portfolio.</p>
                            <a href="#" class="btn d-none">View More</a>
                        </div>
                    </div>
                </div>
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-body text-center">
                            <img src="{{ url('img/frontend/index/slide-2.png') }}" alt="...">
                            <h5 class="card-title fw-bold mb-2">Face Masks</h5>
                            <div class="text-center mb-2">
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="card-text mb-md-3">At Kayak, Quality is Our Prime Concern. Browse Our Portfolio.</p>
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
                            <p class="card-text mb-md-3" style="font-size: 0.8rem;">At Kayak, Quality is Our Prime Concern. Browse Our Portfolio.</p>
                            <a href="#" class="btn d-none">View More</a>
                        </div>
                    </div>
                </div>

                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-body text-center">
                            <img style="padding-bottom: 10px;" src="{{ url('img/frontend/kayak_products/surgical-aprons/surgical-apron.png') }}" alt="...">
                            <h6 class="card-title fw-bold mb-2">Surgical Aprons</h6>
                            <div class="text-center mb-2">
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="card-text mb-md-3" style="font-size: 0.8rem;">At Kayak, Quality is Our Prime Concern. Browse Our Portfolio.</p>
                            <a href="#" class="btn d-none">View More</a>
                        </div>
                    </div>
                </div>

                
                <div class="swiper-slide">
                    <div class="card">
                        <div class="card-body text-center">
                            <img style="padding-bottom: 10px;" src="{{ url('img/frontend/kayak_products/spinal_needles/needles.jpg') }}" alt="...">
                            <h6 class="card-title fw-bold mb-2">Spinal Needles</h6>
                            <div class="text-center mb-2">
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill gold"></i>
                                <i class="bi bi-star-fill"></i>
                            </div>
                            <p class="card-text mb-md-3" style="font-size: 0.8rem;">At Kayak, Quality is Our Prime Concern. Browse Our Portfolio.</p>
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
                    <p>We are doing our best to help our customers.</p>
                </div>
            </div>

            <div class="row justify-content-center">
                <div class="col-12 col-md-10">
                    <div class="row align-items-center">
                        <div class="col-12 col-md-6 text-center">
                            <!-- <h4 class="fw-bold">SURGICAL DIVISION</h4> -->
                            <p>Kayak Surgical Division provides Orthopedic and Hand Surgery essentials. We also supply Cardiac surgery goods such as Perfusion Cannula. We are partnered with leading manufacturers worldwide with exclusive products to provide for our Nation.  
                                We excel in providing Post-Surgical Garments, Bacteria Filters, Cellulose Wadding, IV Cannula, Spinal Needle, Endotracheal tubes, Syringes, Face Masks, N-95 Masks and other general medical products. Our unparallel manufacturing technology allows us to provide better solutions for our stakeholders. 
                            </p>
                        </div>

                    <div class="col-12 col-md-6">
                        <div class="swiper mySwiper2 mt-5 swipper-with-bottom-caption">
                            <div class="swiper-wrapper">
                                <div class="swiper-slide px-5">        
                                    <div class="d-flex align-items-end" style="background-image: url('../img/frontend/index/shoulder.png'); background-repeat: no-repeat;background-size: cover; height: 16rem; background-position:center center; justify-content: center; border-radius: 15px;">
                                        <h5 class="fw-bold text-white mb-2 bottom-caption">Surgical Division</h5>
                                    </div>
                                </div>
                                <div class="swiper-slide px-5">        
                                    <div class="d-flex align-items-end" style="background-image: url('../img/frontend/other_products/lab-division.png'); background-repeat: no-repeat;background-size: cover; height: 16rem; background-position:center center; justify-content: center; border-radius: 15px;">
                                        <h5 class="fw-bold text-white mb-2 bottom-caption">Lab Division</h5>
                                    </div>
                                </div>
                                <div class="swiper-slide px-5">        
                                    <div class="d-flex align-items-end" style="background-image:url('../img/frontend/other_products/public-health.png'); background-repeat: no-repeat;background-size: cover; height: 16rem; background-position:center center; justify-content: center;border-radius: 15px;">
                                        <h5 class="fw-bold text-white mb-2 bottom-caption">Public Health Division</h5>
                                    </div>
                                </div>
                                <div class="swiper-slide px-5">        
                                    <div class="d-flex align-items-end" style="background-image:url('../img/frontend/other_products/pharmaceutical-division.png'); background-repeat: no-repeat;background-size: cover; height: 16rem; background-position:center center; justify-content: center;border-radius:15px;">
                                        <h5 class="fw-bold text-white mb-2 bottom-caption">Pharmaceutical Division</h5>
                                    </div>
                                </div>
                                <!-- <div class="swiper-slide px-5">        
                                    <div class="d-flex align-items-end" style="url('../img/frontend/other_products/5.png'); background-repeat: no-repeat;background-size: cover; height: 16rem; background-position:center center; justify-content: center">
                                        <h5 class="fw-bold text-white mb-2 bottom-caption">Orthopedics</h5>
                                    </div>
                                </div>
                                <div class="swiper-slide px-5">        
                                    <div class="d-flex align-items-end" style="url('../img/frontend/other_products/6.png'); background-repeat: no-repeat;background-size: cover; height: 16rem; background-position:center center; justify-content: center">
                                        <h5 class="fw-bold text-white mb-2 bottom-caption">Orthopedics</h5>
                                    </div>
                                </div> -->
                            </div>
                            <div class="swiper-button-next bold-arrow"></div>
                            <div class="swiper-button-prev bold-arrow"></div>
                        </div>
                        
                    </div>
                </div>

                <div class="text-center mt-5">
                    <a href="{{ route('frontend.other_products') }}" type="button" class="btn text-decoration-none text-white rounded-pill" style="background-color: #00ACEE;">View All Products</a>
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
                            <h1>News From Kayak</h1>
                            <p>At Kayak, we are constantly focusing on providing better solutions for our clientele. We undertake extensive research on our product standards and how it serves healthcare organizations worldwide.</p>
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
        $(document).ready(function(){
            setTimeout(function(){
                $("#loading").css('display', 'none');
            }, 3500);
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



        /*next button*/
    $('.swiper-button-next').on('click', function() {
        if($('.mySwiper1 .swiper-slide').hasClass('swiper-slide-active')) {
            $('.mySwiper1 .swiper-slide-next').find('a').removeClass('d-none');
        }

        if ($('.mySwiper1 .swiper-slide').hasClass('swiper-slide-next')) {
            $('.mySwiper1 .swiper-slide-active').find('a').addClass('d-none');
        }

        $(window).resize();
        
    });


/*previous button*/
    $('.swiper-button-prev').on('click', function() {
        if($('.mySwiper1 .swiper-slide').hasClass('swiper-slide')) {
             $('.mySwiper1 .swiper-slide').find('a').addClass('d-none');
        }

        if($('.mySwiper1 .swiper-slide-active').hasClass('swiper-slide-active')) {
             $('.mySwiper1 .swiper-slide-active').find('a').addClass('d-none');
        }

        if ($('.mySwiper1 .swiper-slide-next').hasClass('swiper-slide-next')) {
            $('.mySwiper1 .swiper-slide-next').find('a').removeClass('d-none');
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
