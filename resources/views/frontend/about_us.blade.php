@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@push('after-styles')
    <link rel="stylesheet" href="{{ url('css/about_us.css') }}">
@endpush

@section('content')
    <div class="container-fluid banner">
        <div class="container" style="padding-top: 3rem;">
            <div class="row">
                <div class="col-12 col-md-5 mb-5 mb-md-0">
                    <h3 class="mb-2" style="color: #0090FF">HISTORY OF KAYAK</h3>
                    <p>Kayak Surgi Pharma (Pvt) Ltd commenced its journey in 2004 in their small and modest office with a few carefully selected and knowledgeable staff.</p>
                    <br>
                    <p>Our first products that we introduced to the market was Surgical Consumables and Dental Products, where we obtained our agencies from highly reputed companies. From there onwards, we never looked back, but continued to pursue on other products, such as, Pharmaceutical, Diagnostics, Orthopedics and Public Health.</p>
                    <br>
                    <p>We have now set up our own manufacturing plant to manufacture surgical consumables, like Cellulose Wadding for medical use and other wound dressings, and disposable tissue products. Our motto is to continuously seek quality products that will serve the health sector and ensure the public are benefited</p>
                </div>

                <div class="col-12 col-md-7 ps-md-5 py-md-4">
                    <iframe src="https://www.youtube.com/embed/wHWpz804lOk" title="YouTube video player" frameborder="0" allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture" allowfullscreen style="width: 100%; height: 350px"></iframe>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid bottom-banner">
        <div class="container" style="padding-top: 8rem;">
            <div class="row">
                <div class="col-12 col-md-6 mb-5 mb-md-0">
                    <div class="card custom-shadow">
                        <div class="card-body p-4 position-relative">
                            <p class="display-2 position-absolute large-title" style="opacity: 0.07; top: -2.8rem; left: -0.5rem;">VISION</p>
                            <h3 class="card-title mb-2">VISION</h3>
                            <p class="card-text">Our vision is mainly focused on selling scientifically proven new concepts, through careful research, to the Health Sector and Public in Sri Lanka. While maintaining our reputation of introducing high quality medical healthcare products, for the first time in Sri Lanka, through uncompromising and stringent standards, we also want to ensure prices are affordable and that our valued customers satisfaction exceeds their level of expectation.</p>
                        </div>
                    </div>
                </div>

                <div class="col-12 col-md-6">
                    <div class="card custom-shadow" style="height: 14.9rem;">
                        <div class="card-body p-4 position-relative">
                            <p class="display-2 position-absolute large-title" style="opacity: 0.07; top: -2.8rem; left: 0rem;">MISSION</p>
                            <h3 class="card-title mb-2">MISSION</h3>
                            <p class="card-text">To continue the good work Kayak has achieved so far, and to further enhance our competitive advantage, through innovation, marketing infrastructure, cost effectiveness, and customer relationship extended by our dynamic team.</p>
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