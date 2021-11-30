@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@push('after-styles')
    <link rel="stylesheet" href="{{ url('css/kayak_products.css') }}">
@endpush

@section('content')
    <div class="container-fluid banner">    
        <div class="container" style="padding-top: 4rem;">
            <div class="row justify-content-center">
                <div class="col-12 col-md-7 text-center">
                    <h2>Kayak Products</h2>
                    <p>We are doing our best to help our customers, throw stable steps</p>
                </div>
            </div>
        </div>

        <div class="container kayak-products">
            <div class="row mt-5">
                <div class="col-12 mb-4 col-md-4 mb-md-0">
                    <ul class="nav flex-column" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active fw-bolder mb-3" id="pills-kn95-tab" data-bs-toggle="pill" data-bs-target="#pills-kn95" type="button" role="tab" aria-controls="pills-kn95" aria-selected="true">KN95 FACE MASKS <i class="bi bi-plus-lg"></i></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-bolder mb-3" id="pills-tubes-tab" data-bs-toggle="pill" data-bs-target="#pills-tubes" type="button" role="tab" aria-controls="pills-tubes" aria-selected="false">ENDOTRACHEAL TUBES <i class="bi bi-plus-lg"></i></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-bolder mb-3" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">SURGICAL CELLULOSE WADDING <i class="bi bi-plus-lg"></i></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-bolder mb-3" id="pills-surgical-tab" data-bs-toggle="pill" data-bs-target="#pills-surgical" type="button" role="tab" aria-controls="pills-surgical" aria-selected="false">SURGICAL APRONS <i class="bi bi-plus-lg"></i></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-bolder mb-3" id="pills-nintyfive-tab" data-bs-toggle="pill" data-bs-target="#pills-nintyfive" type="button" role="tab" aria-controls="pills-nintyfive" aria-selected="false">N95 MASKS <i class="bi bi-plus-lg"></i></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-bolder mb-3" id="pills-spinal-tab" data-bs-toggle="pill" data-bs-target="#pills-spinal" type="button" role="tab" aria-controls="pills-spinal" aria-selected="false">SPINAL NEEDLES <i class="bi bi-plus-lg"></i></button>
                        </li>
                    </ul>
                </div>

                
                <div class="col-12 col-md-8">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="pills-kn95" aria-labelledby="pills-kn95-tab">
                            <div class="row">
                                <div class="col-12 col-md-5 mb-4 mb-md-0 text-center">
                                    <img src="{{ url('img/frontend/kayak_products/kn95.png') }}" alt="" class="img-fluid main-image">
                                </div>
                                <div class="col-12 col-md-7">
                                    <h5 class="fw-bold text-center text-md-left">KN95 FACE MASKS</h5>
                                    <hr>

                                    <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem</p>

                                    <div class="row multiple mx-0 mt-4 mb-4 justify-content-center justify-content-md-start">
                                        <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/kn95.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/kn95.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/kn95.png') }}" alt="" class="img-fluid">
                                        </div>
                                    </div>

                                    <div class="inquire">
                                        <button class="btn rounded-pill text-white px-5 py-2">Inquire Now</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-tubes" aria-labelledby="pills-tubes-tab">
                            <div class="row">
                                <div class="col-12 col-md-5 mb-4 mb-md-0 text-center">
                                    <img src="{{ url('img/frontend/kayak_products/abercom.png') }}" alt="" class="img-fluid main-image2">
                                </div>
                                <div class="col-12 col-md-7">
                                    <h5 class="fw-bold text-center text-md-left">ENDOTRACHEAL TUBES</h5>
                                    <hr>

                                    <p>We manufacture High Quality Endotracheal Tubes.</p>

                                    <div class="row multiple2 mx-0 mt-4 mb-4 justify-content-center justify-content-md-start">
                                        <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/abercom.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/abercom.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/abercom.png') }}" alt="" class="img-fluid">
                                        </div>
                                    </div>

                                    <div class="inquire">
                                        <button class="btn rounded-pill text-white px-5 py-2">Inquire Now</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-contact" aria-labelledby="pills-contact-tab">
                            <div class="row">
                                <div class="col-12 col-md-5 mb-4 mb-md-0 text-center">
                                    <img src="{{ url('img/frontend/kayak_products/roll.png') }}" alt="" class="img-fluid main-image3">
                                </div>
                                <div class="col-12 col-md-7">
                                    <h5 class="fw-bold text-center text-md-left">SURGICAL CELLULOSE WADDING</h5>
                                    <hr>

                                    <p>We are one of the first ever large-scale manufacturers for Surgical Cellulose Wadding in Sri Lanka.</p>

                                    <div class="row multiple3 mx-0 mt-4 mb-4 justify-content-center justify-content-md-start">
                                        <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/roll.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/roll.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/roll.png') }}" alt="" class="img-fluid">
                                        </div>
                                    </div>

                                    <div class="inquire">
                                        <button class="btn rounded-pill text-white px-5 py-2">Inquire Now</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-surgical" aria-labelledby="pills-surgical-tab">
                            <div class="row">
                                <div class="col-12 col-md-5 mb-4 mb-md-0 text-center">
                                    <img src="{{ url('img/frontend/kayak_products/Surgical Apron.JPG') }}" alt="" class="img-fluid main-image4">
                                </div>
                                <div class="col-12 col-md-7">
                                    <h5 class="fw-bold text-center text-md-left">SURGICAL APRONS</h5>
                                    <hr>

                                    <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>

                                    <div class="row multiple4 mx-0 mt-4 mb-4 justify-content-center justify-content-md-start">
                                        <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/Surgical Apron.JPG') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/Surgical Apron.JPG') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/Surgical Apron.JPG') }}" alt="" class="img-fluid">
                                        </div>
                                    </div>

                                    <div class="inquire">
                                        <button class="btn rounded-pill text-white px-5 py-2">Inquire Now</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-nintyfive" aria-labelledby="pills-nintyfive-tab">
                            <div class="row">
                                <div class="col-12 col-md-5 mb-4 mb-md-0 text-center">
                                    <img src="{{ url('img/frontend/kayak_products/N95 Masks.JPG') }}" alt="" class="img-fluid main-image5">
                                </div>
                                <div class="col-12 col-md-7">
                                    <h5 class="fw-bold text-center text-md-left">N95 MASKS</h5>
                                    <hr>

                                    <p>We initiated Manufacturing of N-95 Masks in Sri Lanka to serve and assist the nation during the global pandemic of COVID19. We provide high quality NMRA Certified N-95 masks that protect the nation. Our N-95 Masks are exported to various countries.</p>

                                    <div class="row multiple5 mx-0 mt-4 mb-4 justify-content-center justify-content-md-start">
                                        <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/N95 Masks.JPG') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/N95 Masks.JPG') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/N95 Masks.JPG') }}" alt="" class="img-fluid">
                                        </div>
                                    </div>

                                    <div class="inquire">
                                        <button class="btn rounded-pill text-white px-5 py-2">Inquire Now</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-spinal" aria-labelledby="pills-spinal-tab">
                            <div class="row">
                                <div class="col-12 col-md-5 mb-4 mb-md-0 text-center">
                                    <img src="{{ url('img/frontend/kayak_products/Spinal needle.JPG') }}" alt="" class="img-fluid main-image6">
                                </div>
                                <div class="col-12 col-md-7">
                                    <h5 class="fw-bold text-center text-md-left">SPINAL NEEDLES</h5>
                                    <hr>

                                    <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>

                                    <div class="row multiple6 mx-0 mt-4 mb-4 justify-content-center justify-content-md-start">
                                        <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/Spinal needle.JPG') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/Spinal needle.JPG') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/Spinal needle.JPG') }}" alt="" class="img-fluid">
                                        </div>
                                    </div>

                                    <div class="inquire">
                                        <button class="btn rounded-pill text-white px-5 py-2">Inquire Now</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
@endsection

@push('after-scripts')
    
    <script>
        $('.kayak-products .nav-link').on('click', function() {

            $('.kayak-products .nav-link').each(function() {
                if($(this).hasClass('active')) {

                    $(this).find('i').addClass('rotate');
                }
                else {
                    $(this).find('i').removeClass('rotate');
                }
            });
        });
    </script>

    <script>
        $('.multiple img').on('click', function() {
            let src = $(this).attr('src');

            $('.main-image').attr('src', src);
        });
    </script>
    <script>
        $('.multiple2 img').on('click', function() {
            let src = $(this).attr('src');

            $('.main-image2').attr('src', src);
        });
    </script>
    <script>
        $('.multiple3 img').on('click', function() {
            let src = $(this).attr('src');

            $('.main-image3').attr('src', src);
        });
    </script>
    <script>
        $('.multiple4 img').on('click', function() {
            let src = $(this).attr('src');

            $('.main-image4').attr('src', src);
        });
    </script>
    <script>
        $('.multiple5 img').on('click', function() {
            let src = $(this).attr('src');

            $('.main-image5').attr('src', src);
        });
    </script>
    <script>
        $('.multiple6 img').on('click', function() {
            let src = $(this).attr('src');

            $('.main-image6').attr('src', src);
        });
    </script>
@endpush