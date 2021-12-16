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
                    <p>Tissue Items such as paper serviette, Toilet Tissue, Kitchen Towel etc.</p>
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

                        <!-- <div class="accordion-item mb-4">
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
                        </div> -->

                        <div class="accordion-item mb-4">
                            <h2 class="accordion-header" id="headingTwo">
                                <button class="accordion-button collapsed fw-bolder" type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo" aria-expanded="false" aria-controls="collapseTwo">
                                    PUBLIC HEALTH DIVISION
                                </button>
                            </h2>
                            <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo" data-bs-parent="#accordionExample">
                                <div class="accordion-body">
                                    <ul class="nav flex-column">
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link  btn fw-bold" id="pills-mosquito-dunk-tab" data-bs-toggle="pill" data-bs-target="#pills-mosquito-dunk" type="button" role="tab" aria-controls="pills-mosquito-dunk">Mosquito Dunks</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link btn fw-bold" id="pills-public-tab" data-bs-toggle="pill" data-bs-target="#pills-public" type="button" role="tab" aria-controls="pills-public">Ipsum</button>
                                        </li>
                                        <!-- <li class="nav-item" role="presentation">
                                            <button class="nav-link btn fw-bold" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home">Ipsum</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link btn fw-bold" id="pills-home-tab" data-bs-toggle="pill" data-bs-target="#pills-home" type="button" role="tab" aria-controls="pills-home">Ipsum</button>
                                        </li>  -->
                                    </ul>
                                </div>
                            </div>
                        </div>

                        <!-- <div class="accordion-item mb-4">
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
                        </div> -->

                    </div>
                </div>

                <!-- surgical division products -->
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
                            hands
                        </div>

                <!-- end of surgical division -->

                <!-- public health division products -->
                        <div class="tab-pane fade" id="pills-mosquito-dunk" aria-labelledby="pills-mosquito-dunk-tab">
                            <div class="row">
                                <div class="col-md-6 other-main">
                                    <h2>Mosquito Dunks</h2>
                                    <img src="{{url('img/frontend/other_products/public-health.png')}}" alt="">
                                </div>
                                
                                <a class="other-company-links" href="https://summitchemical.com/" target="_blank">Visit: www.summitchemical.com</a>
                                <p>America's best selling homeowner mosquito control product. The only product with BTI, a bacteria toxic only to mosquito larvae, that lasts 30 days and treats 100 square feet of surface water.</p>
                                <div class="list-and-more-wrapper">
                                <ul class="other-list">
                                    <li>Non-toxic to all other wildlife, pets, fish, and humans.</li>
                                    <li>Simply apply Mosquito Dunks® to any standing water, or water garden.</li>
                                    <li>Kills within hours and lasts for 30 days or more.</li>
                                    <li>Labeled For Organic Gardening by the USEPA.</li>
                                    <li>The quintessential highly effective low impact product</li>
                                </ul>
                                <a class="other-more-link" href="{{ url('pdf/other-products/Summit_Catalog-fnl-web.pdf') }}" target="_blank">Read More</a>
                                </div>

                                <iframe width="450" height="315" src="https://www.youtube.com/embed/5xq4o0-val4" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen></iframe>
                              
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-public" aria-labelledby="pills-public-tab">
                            public tab
                        </div>
                <!-- end of public health division -->
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