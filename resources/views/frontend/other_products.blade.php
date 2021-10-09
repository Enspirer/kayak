@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@push('after-styles')
    <link rel="stylesheet" href="{{ url('css/other_products.css') }}">
@endpush

@section('content')
    <div class="container-fluid banner other-products">    
        <div class="container" style="padding-top: 4rem;">
            <div class="row justify-content-center">
                <div class="col-12 col-md-7 text-center">
                    <h2>Other Products</h2>
                    <p>Want to get in touch? We'd love to hear from you. Here's how you can reach us ...</p>
                </div>
            </div>
        </div>

        <div class="container">
            <div class="row mt-4 mt-md-5">
                <div class="col-12 col-md-4 mb-4 mb-md-0">
                    <div class="accordion" id="accordionExample">
                        <div class="accordion-item mb-4">
                            <h2 class="accordion-header" id="headingOne">
                                <button class="accordion-button fw-bolder" type="button" data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true" aria-controls="collapseOne">
                                    SURGICAL DIVISION
                                </button>
                            </h2>
                            <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="nav flex-column">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active btn fw-bold" id="pills-orthopaedic-tab" data-bs-toggle="pill" data-bs-target="#pills-orthopaedic" type="button" role="tab" aria-controls="pills-orthopaedic">Orthopaedic</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link btn fw-bold" id="pills-hand-tab" data-bs-toggle="pill" data-bs-target="#pills-hand" type="button" role="tab" aria-controls="pills-hand">Hand Surgery</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link btn fw-bold" id="pills-cardiac-tab" data-bs-toggle="pill" data-bs-target="#pills-cardiac" type="button" role="tab" aria-controls="pills-cardiac">Cardiac & Vascular Surgery</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link btn fw-bold" id="pills-surgery-tab" data-bs-toggle="pill" data-bs-target="#pills-surgery" type="button" role="tab" aria-controls="pills-surgery">General Surgery & Anesthesia</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-4">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed fw-bolder" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="true" aria-controls="collapseTwo">
                                    PHARMACEUTICAL DIVISION
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="nav flex-column">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active btn fw-bold" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home">Ipsum</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link btn fw-bold" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home">Ipsum</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link btn fw-bold" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home">Ipsum</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link btn fw-bold" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home">Ipsum</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-4">
                            <h2 class="accordion-header" id="headingThree">
                                <button class="accordion-button collapsed fw-bolder" type="button" data-bs-toggle="collapse" data-bs-target="#collapseThree" aria-expanded="true" aria-controls="collapseThree">
                                    PUBLIC HEALTH DIVISION
                                </button>
                            </h2>
                            <div id="collapseThree" class="accordion-collapse collapse" aria-labelledby="headingThree" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="nav flex-column">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active btn fw-bold" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home">Ipsum</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link btn fw-bold" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home">Ipsum</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link btn fw-bold" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home">Ipsum</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link btn fw-bold" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home">Ipsum</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <div class="accordion-item mb-4">
                            <h2 class="accordion-header" id="headingFour">
                                <button class="accordion-button collapsed fw-bolder" type="button" data-bs-toggle="collapse" data-bs-target="#collapseFour" aria-expanded="true" aria-controls="collapseFour">
                                    LAB DIVISION
                                </button>
                            </h2>
                            <div id="collapseFour" class="accordion-collapse collapse" aria-labelledby="headingFour" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="nav flex-column">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link active btn fw-bold" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home">Ipsum</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link btn fw-bold" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home">Ipsum</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link btn fw-bold" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home">Ipsum</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link btn fw-bold" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home">Ipsum</button>
                                        </li>
                                    </ul>
                                </div>
                            </div>
                        </div>
                    </div>
                </div>

                
                <div class="col-12 col-md-8">
                    <div class="tab-content">
                        <div class="tab-pane fade active show" id="pills-orthopaedic" aria-labelledby="pills-orthopaedic-tab">
                            <div class="row">
                                <div class="col-12 col-md-4 mb-4">
                                    <img src="{{ url('img/frontend/other_products/1.png') }}" alt="" class="img-fluid">
                                </div>

                                <div class="col-12 col-md-4 mb-4">
                                    <img src="{{ url('img/frontend/other_products/2.png') }}" alt="" class="img-fluid">
                                </div>

                                <div class="col-12 col-md-4 mb-4">
                                    <img src="{{ url('img/frontend/other_products/3.png') }}" alt="" class="img-fluid">
                                </div>

                                <div class="col-12 col-md-4 mb-4">
                                    <img src="{{ url('img/frontend/other_products/4.png') }}" alt="" class="img-fluid">
                                </div>

                                <div class="col-12 col-md-4 mb-4">
                                    <img src="{{ url('img/frontend/other_products/5.png') }}" alt="" class="img-fluid">
                                </div>

                                <div class="col-12 col-md-4 mb-4">
                                    <img src="{{ url('img/frontend/other_products/6.png') }}" alt="" class="img-fluid">
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-hand" aria-labelledby="pills-hand-tab">
                            
                        </div>
                    </div>
                </div>

            </div>
        </div>
    </div>
@endsection

@push('after-scripts')
    @if(config('access.captcha.contact'))
        @captchaScripts
    @endif
@endpush