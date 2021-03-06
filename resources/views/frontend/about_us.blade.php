@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('About Us'))

@push('after-styles')
    <link rel="stylesheet" href="{{ url('css/about_us.css') }}">
@endpush

@section('content')
    <div class="container-fluid bottom-banner">
        <div class="container" style="padding-top: 6rem; text-align: center;">
            <div class="row">
                <!-- <div class="col-12 col-md-5 mb-5 mb-md-0">
                    <h3 class="mb-2" style="color: #0090FF">HISTORY OF KAYAK</h3>
                    <p>Kayak Surgi Pharma (Pvt) Ltd commenced its journey in 2004 with a few carefully selected and knowledgeable staff. Today, Kayak has evolved into a sophisticated Manufacturer, Provider and Supplier for various Surgical Consumables, Dental Products and Laboratory Essentials. The knowledge of our staff and the ground level experience of Kayak has paved its way for success.</p>
                    <br>
                    <p>We introduced innovative Manufacturing Opportunities to Sri Lanka over various product avenues. We take pride in our inception of manufacturing Surgical Consumables in Sri Lanka. We produce essential surgical products such as Cellulose Wadding, Wound Dressings, N95 Masks, Endotracheal tubes that were not manufactured in Sri Lanka since our initiation.</p>
                    <br>
                    <p>Today, Kayak provides to various Medical Institutes, Hospitals, and healthcare practitioners worldwide with our unparalleled quality products and our trusted service excellence.</p>
                </div>

                <div class="col-12 col-md-7 ps-md-5 py-md-4">
                    <iframe src="https://www.youtube.com/embed/wHWpz804lOk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width: 100%; height: 350px"></iframe>
                </div> -->
                <div class="about-title-box">
                    <!-- <h2 class="about-hidden-title">ABOUT KAYAK</h2> -->
                    <h3 class="about-title">ABOUT KAYAK</h3>
                </div>
                
                <p class="about-center-txt">Kayak Surgi Pharma (Pvt) Ltd commenced its journey in 2004 with a few carefully selected and knowledgeable staff. Today, Kayak has evolved into a sophisticated Manufacturer, Provider and Supplier for various Surgical Consumables, Dental Products and Laboratory Essentials. The knowledge of our staff and the ground level experience of Kayak has paved its way for success.</p>
                <p class="about-center-txt">We introduced innovative Manufacturing Opportunities to Sri Lanka over various product avenues. We take pride in our inception of manufacturing Surgical Consumables in Sri Lanka. We produce essential surgical products such as Cellulose Wadding, Wound Dressings, N95 Masks, Endotracheal tubes that were not manufactured in Sri Lanka since our initiation.
                </p>
                <p class="about-center-txt">Today, Kayak provides to various Medical Institutes, Hospitals, and healthcare practitioners worldwide with our unparalleled quality products and our trusted service excellence.</p>
                <h3 style="margin-top:60px;" class="card-title mb-2">Our standards ISO 9001 and ISO 14001</h3>
            </div>
        </div>

        <div class="container vision-container" style="padding-top: 2rem;">
            <div class="row">
                <div class="col-12 col-md-6 mb-5 mb-md-0">
                    <div class="card custom-shadow">
                        <div class="card-body p-4 position-relative">
                            <!-- <p class="display-2 position-absolute large-title" style="opacity: 0.07; top: -2.8rem; left: -0.5rem;">VISION</p> -->
                            <h3 class="card-title mb-2">VISION</h3>
                            <p class="card-text">Our Vision is to Innovate, Strategize and Evolve Medical and Pharmaceutical Industry to better heights utilizing the undermined potential of the Sri Lankan Stringent Standards.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="card custom-shadow">
                        <div class="card-body p-4 position-relative">
                            <!-- <p class="display-2 position-absolute large-title" style="opacity: 0.07; top: -2.8rem; left: 0rem;">MISSION</p> -->
                            <h3 class="card-title mb-2">MISSION</h3>
                            <p class="card-text">To Provide Better Medical, Surgical & Pharmaceutical Solutions to the Market with Top Tier Quality, Fitness for Purpose & Cost Effectiveness.</p>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    





    <div class="container mb-5 manager-row">

        <div class="text-center">
            <h3 class="mb-5 fw-bold about-bottom-topic" style="color: #0090FF">Message from Managing Director</h3>
        </div>

        <div class="row align-items-center message-area">            

            <div class="col-md-6">
                
                
                <div class="mb-4">
                    <!-- <h5 class="mb-3">Description / Additional Note</h5> -->
                    <div class="text-center md-msg" style="font-size: 0.8rem;">
                        <p class="mt-4" style="text-align:justify;">
                        The inception of Kayak provided a broader scope of innovation and perception to Sri Lankan Healthcare. Our nation was relying solely upon the import of Medical goods as there was no reliable manufacturer of goods locally. However, with dire focus and dedication, we established local manufacturing of surgical consumables. The most challenging aspect of our mission was changing the thinking of the local industry and, many are following the footsteps that we initially took. Kayak will always paddle towards new horizons, ensuring the highest product standards to the Sri Lankan market.
                        </p>
                    </div>
                </div>

                <div class="mt-5 mb-4 text-center">
                    <h5 class="fw-bold">Dr. Eshantha De Silva</h5>
                    <p style="font-size:12px">(PhD, MBA, Dip Public health)</p>
                </div>

                
            </div>

            <div class="col-md-6">
                <img src="{{url('img/frontend/chairman.png')}}" class="img-fluid w-100" style="object-fit: contain; height: 15rem;"/>
            </div>

        </div>
    </div>
    
@endsection

@push('after-scripts')
    @if(config('access.captcha.contact'))
        @captchaScripts
    @endif
@endpush