@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@push('after-styles')
    <link rel="stylesheet" href="{{ url('css/contact_us.css') }}">
@endpush

@section('content')
    <div class="container-fluid banner">
        <div class="container" style="padding-top: 7rem;">
            <div class="row justify-content-center">
                <div class="col-12 col-md-7 text-center text-white">
                    <h2>Get in Touch</h2>
                    <p>Want to get in touch? We'd love to hear from you. Here's how you can reach us ...</p>
                </div>
            </div>
        </div>
    </div>

    <div class="container position-relative contact-cards" style="top: -4rem;">
        <div class="row justify-content-center">
            <div class="col-12 col-md-4 mb-5 mb-md-0">
                <div class="col-12 custom-shadow px-4 pt-4 bg-white box" style="padding-bottom: 4.6rem;">
                    <h4 class="mb-3" style="color: #0090FF">Contact Us</h4>
                    <div class="row align-items-center">
                        <div class="col-12 mb-4">
                            <i class="bi bi-telephone-fill text-black me-3" style="font-size: 1.1rem"></i>
                            <p class="d-inline-block" style="font-size: 1rem;">0094 11 2942952 / 11 5022832</p>
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
                            <p class="mb-1" style="font-size: 1rem;">490/1B, Lionel Michel Mawatha,</p>
                            <p class="mb-1" style="font-size: 1rem;">Eriyawetiya, Kiribathgoda, Kelaniya,</p>
                            <p class="mb-1" style="font-size: 1rem;">Sri Lanka.</p>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-12 col-md-4">
                <div class="col-12 custom-shadow p-4 bg-white box">
                    <h4 class="mb-3" style="color: #0090FF">Quick Inquiries</h4>

                    <form>
                        <div class="mb-2">
                            <input type="text" class="form-control" id="name" name="name" aria-describedby="name" placeholder="Full Name">
                        </div>
                        <div class="mb-2">
                            <input type="email" class="form-control" id="email" name="email" aria-describedby="email" placeholder="Email Address">
                        </div>
                        <div class="mb-2">
                            <input type="text" class="form-control" id="company" name="company" aria-describedby="company" placeholder="Company">
                        </div>
                        <div class="mb-2">
                            <input type="text" class="form-control" id="telephone" name="telephone" aria-describedby="telephone" placeholder="Telephone">
                        </div>
                        <div class="mb-2">
                            <textarea name="message" id="message" class="form-control" rows="4" placeholder="Type your message"></textarea>
                        </div>
                        <button type="submit" class="btn text-white" style="background-color: #0090FF;">Submit</button>
                    </form>
                </div>
            </div>
        </div>
    </div>

    <div class="container-fluid p-0">
        <div class="mapouter"><div class="gmap_canvas"><iframe width="100%" height="350" id="gmap_canvas" src="https://maps.google.com/maps?q=Lionel%20Michel%20Mawatha,%20Eriyawetiya,%20Kiribathgoda,%20Kelaniya,%20Sri%20Lanka&t=&z=11&ie=UTF8&iwloc=&output=embed" frameborder="0" scrolling="no" marginheight="0" marginwidth="0"></iframe><a href="https://123movies-to.org"></a><br><style>.mapouter{position:relative;text-align:right;height:500px;width:1080px;}</style><a href="https://www.embedgooglemap.net"></a><style>.gmap_canvas {overflow:hidden;background:none!important;height:500px;width:1080px;}</style></div></div>
    </div>
@endsection

@push('after-scripts')
    @if(config('access.captcha.contact'))
        @captchaScripts
    @endif
@endpush