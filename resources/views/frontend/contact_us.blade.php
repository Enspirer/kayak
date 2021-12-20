@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@push('after-styles')
    <link rel="stylesheet" href="{{ url('css/contact_us.css') }}">
@endpush

@section('content')

@if ( session()->has('message') )

    <div class="container" style="background-color: #6F8FAF; padding-top:5px; margin-bottom:50px; border-radius: 50px 50px; text-align:center;">

        <h1 style="margin-top:150px; color:white" class="fs-1">Thank You!</h1><br>
        <p class="lead mb-3"><h4 style="color:white">We appreciate you for your inquiry. One of our member will get back in touch with you soon!<br><br> Have a great day!</h4></p>
        <br><hr><br>    
        <p class="lead">
            <a class="btn btn-primary btn-md mt-3 mb-3" href="{{url('contact-us')}}" role="button">Contact Us Page</a>
        </p>
        <br>
    </div>

@else  


    <div class="container-fluid banner">
        <div class="container" style="padding-top: 7rem;">
            <div class="row justify-content-center">
                <div class="col-12 col-md-7 text-center text-white">
                    <h2>Make An Inquiry!</h2>
                    <p>We at Kayak are excited to hear from you. You can reach us through the following:</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container position-relative contact-cards" style="top: -4rem;">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 mb-5 mb-md-0 tab-fifty">
                <div class="col-12 custom-shadow px-4 pt-4 bg-white box" style="padding-bottom: 4.6rem;">
                    <h4 class="mb-3" style="color: #0090FF">Contact Us</h4>
                    <div class="row align-items-center">
                        <div class="col-12 mb-4">
                            <i class="bi bi-telephone-fill text-black me-3" style="font-size: 1.1rem"></i>
                            <p class="d-inline-block" style="font-size: 1rem;">011 5022832</p>
                        </div>

                        <div class="col-12 mb-4">
                            <img src="{{ url('img/frontend/contact_us/fax.png') }}" alt="" class="img-fluid me-3" style="height:1.1rem;">
                            <p class="d-inline-block" style="font-size: 1rem;">0094 11 5526575</p>
                        </div>

                        <div class="col-12 mb-5">
                            <i class="bi bi-envelope-fill text-black me-3" style="font-size: 1.1rem"></i>
                            <p class="d-inline-block" style="font-size: 1rem;">kayakpharma@sltnet.lk</p>
                        </div>

                        <div class="col-12">
                            <h5 class="fw-bold mb-2">Kayak Surgi Pharma (Pvt) Ltd.</h5>
                            <p class="mb-1" style="font-size: 1rem;">526/C2, Eriyawetiya road,</p>
                            <p class="mb-1" style="font-size: 1rem;">Kiribathgoda, Kelaniya,</p>
                            <p class="mb-1" style="font-size: 1rem;">Sri Lanka.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4 tab-fifty">
                <div class="col-12 custom-shadow p-4 bg-white box">
                    <h4 class="mb-3" style="color: #0090FF">Quick Inquiries</h4>

                    <form action="{{ route('frontend.contact.store') }}" method="post" enctype="multipart/form-data">
                        {{csrf_field()}}

                        <div class="mb-2">
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="Full Name" required>
                        </div>
                        <div class="mb-2">
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="email" placeholder="Email Address" required>
                        </div>
                        <div class="mb-2">
                            <input type="text" class="form-control" id="company" name="company" aria-describedby="company" placeholder="Company" required>
                        </div>
                        <div class="mb-2">
                            <input type="number" class="form-control" id="telephone" name="telephone" aria-describedby="telephone" placeholder="Telephone" required>
                        </div>
                        <div class="mb-2">
                            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Type your message" required></textarea>
                        </div>
                        <script src="https://www.google.com/recaptcha/api.js" async defer></script>
                        <div class="g-recaptcha"
       data-sitekey="6Lel4Z4UAAAAAOa8LO1Q9mqKRUiMYl_00o5mXJrR"></div>

                        <button type="submit" class="btn text-white" style="background-color: #0090FF; margin-top: 10px;">Submit</button>

       
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0">
        <div class="mapouter"><div class="gmap_canvas">
            <iframe width="100%" height="350" id="gmap_canvas" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d126724.98970730361!2d79.924141!3d6.990908!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x0%3A0xa7245321ae610ef3!2sKayak%20Surgi%20Pharma%20(Pvt)%20Ltd!5e0!3m2!1sen!2sus!4v1639752875432!5m2!1sen!2sus" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:100%;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:80%;margin-left:auto; margin-right: auto;}</style>
            </div></div>
    </div>





@endif

@endsection

@push('after-scripts')
    @if(config('access.captcha.contact'))
        @captchaScripts
    @endif
@endpush