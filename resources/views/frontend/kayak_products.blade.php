@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@push('after-styles')
    <link rel="stylesheet" href="{{ url('css/kayak_products.css') }}">
@endpush

@section('content')
    <div class="container-fluid banner">    
        <div class="container" style="padding-top: 4rem;">
            <div class="row justify-content-center">
                <div class="col-7 text-center">
                    <h2>Kayak Products</h2>
                    <p>We are doing our best to help our customers, throw stable steps</p>
                </div>
            </div>
        </div>

        <div class="container kayak-products">
            <div class="row mt-5">
                <div class="col-4">
                    <ul class="nav flex-column" id="pills-tab" role="tablist">
                        <li class="nav-item" role="presentation">
                            <button class="nav-link active fw-bolder mb-3" id="pills-kn95-tab" data-bs-toggle="pill" data-bs-target="#pills-kn95" type="button" role="tab" aria-controls="pills-kn95" aria-selected="true">KN95 FACE MASKS <i class="bi bi-plus-lg"></i></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-bolder mb-3" id="pills-tubes-tab" data-bs-toggle="pill" data-bs-target="#pills-tubes" type="button" role="tab" aria-controls="pills-tubes" aria-selected="false">ENDOTRACHEAL TUBES <i class="bi bi-plus-lg"></i></button>
                        </li>
                        <li class="nav-item" role="presentation">
                            <button class="nav-link fw-bolder mb-3" id="pills-contact-tab" data-bs-toggle="pill" data-bs-target="#pills-contact" type="button" role="tab" aria-controls="pills-contact" aria-selected="false">SURGICAL CELLULOSE ROLL <i class="bi bi-plus-lg"></i></button>
                        </li>
                    </ul>
                </div>

                
                <div class="col-8">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="pills-kn95" aria-labelledby="pills-kn95-tab">
                            <div class="row">
                                <div class="col-4 text-center">
                                    <img src="{{ url('img/frontend/kayak_products/kn95.png') }}" alt="" class="img-fluid main-image">
                                </div>
                                <div class="col-8">
                                    <h5 class="fw-bold">KN95 FACE MASKS</h5>
                                    <hr>

                                    <p>Lorem ipsum dolor, sit amet consectetur adipisicing elit. Nulla hic, odit laboriosam minima aliquid reiciendis sint facilis autem, odio ad doloribus. Obcaecati ab ipsam unde doloremque laudantium. Quas hic in, vero maiores iure nihil architecto a, tenetur porro labore voluptatibus distinctio repellendus debitis, fugiat sed ratione eaque dicta beatae magni laboriosam iusto nulla esse? Similique perspiciatis qui voluptatem eligendi repellendus?</p>

                                    <div class="row multiple mx-0 mt-4 mb-4">
                                        <div class="col-2 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/kn95.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-2 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/kn95.png') }}" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-2 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/kn95.png') }}" alt="" class="img-fluid">
                                        </div>
                                    </div>

                                    <button class="btn rounded-pill text-white px-5 py-2 inquire">Inquire Now</button>
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-tubes" aria-labelledby="pills-tubes-tab">
                            
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
@endpush