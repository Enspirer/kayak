@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('Other Products'))

@push('after-styles')
<link rel="stylesheet" href="{{ url('css/other_products.css') }}">
<link rel="stylesheet" href="{{ url('css/consumer_products.css') }}">
@endpush

@section('content')
<div class="container-fluid banner other-products">
    <div class="container" style="padding-top: 9rem;">
        <div class="row justify-content-center">
            <div class="col-12 col-md-7 text-center">
                <h2>Kayak Consumer Products</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-4 mt-md-5 consumer-row">

            <a class="consumer-img" href="#" data-toggle="modal" data-target="#basicModalOne"><img
                    src="{{ url('img/frontend/kayak_consumer_products/product_one.png') }}" 
                    alt=""
                    class="img-fluid consumer-img"></a>

            <div class="modal fade" id="basicModalOne" tabindex="-1" role="dialog" aria-labelledby="basicModal"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Serviette Paper and Toilet Roll</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="{{url('img/frontend/kayak_consumer_products/product_one.png')}}" alt=""
                                class="img-fluid consumer-img pop-img">
                        </div>
                    </div>
                </div>
            </div>


            <a class="consumer-img" href="#" data-toggle="modal" data-target="#basicModalTwo"><img
                    src="{{ url('img/frontend/kayak_consumer_products/product_two.png') }}" 
                    alt=""
                    class="img-fluid consumer-img"></a>

            <div class="modal fade" id="basicModalTwo" tabindex="-1" role="dialog" aria-labelledby="basicModal"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Serviette Paper and Toilet Roll</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="{{url('img/frontend/kayak_consumer_products/product_two.png')}}" alt=""
                                class="img-fluid consumer-img pop-img">
                        </div>
                    </div>
                </div>
            </div>


            <a class="consumer-img" href="#" data-toggle="modal" data-target="#basicModalThree"><img
                    src="{{ url('img/frontend/kayak_consumer_products/product_three.png') }}" 
                    alt=""
                    class="img-fluid consumer-img"></a>

            <div class="modal fade" id="basicModalThree" tabindex="-1" role="dialog" aria-labelledby="basicModal"
                aria-hidden="true">
                <div class="modal-dialog">
                    <div class="modal-content">
                        <div class="modal-header">
                            <h4>Serviette Paper and Toilet Roll</h4>
                            <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                                <span aria-hidden="true">×</span>
                            </button>
                        </div>
                        <div class="modal-body">
                            <img src="{{url('img/frontend/kayak_consumer_products/product_three.png')}}" alt=""
                                class="img-fluid consumer-img pop-img">
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>
</div>

<!-- Modal -->
<div class="modal fade" id="inquire" tabindex="-1" aria-labelledby="inquireLabel" aria-hidden="true">
    <div class="modal-dialog">
        <div class="modal-content">

            <form action="{{ route('frontend.products.send') }}" method="post" enctype="multipart/form-data">
                {{csrf_field()}}
                <div class="modal-header text-white" style="background-color: #1D5001;">
                    <h5 class="modal-title" id="inquire-modal">Send an Inquire</h5>
                </div>
                <div class="modal-body">
                    <div class="mb-2">
                        <label for="first-name" class="form-label">Name <span class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="name" required>
                    </div>
                    <div class="mb-2">
                        <label for="last-name" class="form-label">Company Name <span
                                class="text-danger">*</span></label>
                        <input type="text" class="form-control" name="company" required>
                    </div>
                    <div class="mb-2">
                        <label for="contact-number" class="form-label">Contact Number <span
                                class="text-danger">*</span></label>
                        <input type="number" class="form-control" name="telephone" required>
                    </div>
                    <div class="mb-2">
                        <label for="email" class="form-label">Email Address <span class="text-danger">*</span></label>
                        <input type="email" class="form-control" name="email" required>
                    </div>
                    <div class="mb-3">
                        <label for="message" class="form-label">Message <span class="text-danger">*</span></label>
                        <textarea class="form-control" name="message" cols="30" rows="5" required></textarea>
                    </div>

                    <div class="col-12 col-md-10 text-center">
                        <div class="g-recaptcha" data-callback="checked"
                            data-sitekey="6LfGnB8dAAAAAH6Baz00Galvcr7s7aZyeGUYly4t" style="display: inline-block;">
                        </div>
                    </div>
                </div>
                <div class="modal-footer justify-content-center">
                    <button type="button" class="btn" data-bs-dismiss="modal" style="color: #68AE42;">Cancel</button>
                    <input type="submit" class="submit-btn btn text-white px-5" style="background-color: #68AE42;"
                        value="Send Request" disabled />
                </div>
            </form>
        </div>
    </div>
</div>
@endsection

@push('after-scripts')
<script>
function removeActiveOther() {
    var removeElement = document.getElementById("pills-orthopaedic-tab");
    var removeElementTwo = document.getElementById("pills-surgery-tab");
    var removeElementThree = document.getElementById("pills-mosquito-dunk-tab");
    removeElement.classList.remove("active");
    removeElementTwo.classList.remove("active");
    removeElementThree.classList.remove("active");

};
</script>
@if(config('access.captcha.contact'))
@captchaScripts
@endif
@endpush