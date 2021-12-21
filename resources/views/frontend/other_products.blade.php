@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('Other Products'))

@push('after-styles')
<link rel="stylesheet" href="{{ url('css/other_products.css') }}">
@endpush

@section('content')
<div class="container-fluid banner other-products">
    <div class="container" style="padding-top: 9rem;">
        <div class="row justify-content-center">
            <div class="col-12 col-md-7 text-center">
                <h2>Other Products</h2>
            </div>
        </div>
    </div>

    <div class="container">
        <div class="row mt-4 mt-md-5">
            <div class="col-12 col-md-4 mb-4 mb-md-0">
                <div class="accordion" id="accordionExample">
                    <div class="accordion-item mb-4">
                        <h2 class="accordion-header" id="headingOne">
                            <button onclick="removeActiveOther()" class="accordion-button fw-bolder" type="button"
                                data-bs-toggle="collapse" data-bs-target="#collapseOne" aria-expanded="true"
                                aria-controls="collapseOne">
                                SURGICAL DIVISION
                            </button>
                        </h2>
                        <div id="collapseOne" class="accordion-collapse collapse show" aria-labelledby="headingOne"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="nav flex-column">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link active btn fw-bold inner-nav-link"
                                            id="pills-orthopaedic-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-orthopaedic" type="button" role="tab"
                                            aria-controls="pills-orthopaedic">Orthopaedic</button>
                                    </li>
                                    <!-- <li class="nav-item" role="presentation">
                                            <button class="nav-link btn fw-bold" id="pills-hand-tab" data-bs-toggle="pill" data-bs-target="#pills-hand" type="button" role="tab" aria-controls="pills-hand">Hand Surgery</button>
                                        </li>
                                        <li class="nav-item" role="presentation">
                                            <button class="nav-link btn fw-bold" id="pills-cardiac-tab" data-bs-toggle="pill" data-bs-target="#pills-cardiac" type="button" role="tab" aria-controls="pills-cardiac">Cardiac & Vascular Surgery</button>
                                        </li> -->
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link btn fw-bold inner-nav-link" id="pills-surgery-tab"
                                            data-bs-toggle="pill" data-bs-target="#pills-surgery" type="button"
                                            role="tab" aria-controls="pills-surgery">General Surgery</button>
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
                            <button onclick="removeActiveOther()" class="accordion-button collapsed fw-bolder"
                                type="button" data-bs-toggle="collapse" data-bs-target="#collapseTwo"
                                aria-expanded="false" aria-controls="collapseTwo">
                                PUBLIC HEALTH DIVISION
                            </button>
                        </h2>
                        <div id="collapseTwo" class="accordion-collapse collapse" aria-labelledby="headingTwo"
                            data-bs-parent="#accordionExample">
                            <div class="accordion-body">
                                <ul class="nav flex-column">
                                    <li class="nav-item" role="presentation">
                                        <button class="nav-link  btn fw-bold inner-nav-link"
                                            id="pills-mosquito-dunk-tab" data-bs-toggle="pill"
                                            data-bs-target="#pills-mosquito-dunk" type="button" role="tab"
                                            aria-controls="pills-mosquito-dunk">Mosquito Dunks</button>
                                    </li>
                                    <!-- <li class="nav-item" role="presentation">
                                            <button class="nav-link btn fw-bold inner-nav-link" id="pills-public-tab" data-bs-toggle="pill" data-bs-target="#pills-public" type="button" role="tab" aria-controls="pills-public">Ipsum</button>
                                        </li> -->
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
                    <div class="tab-pane fade active show" id="pills-orthopaedic"
                        aria-labelledby="pills-orthopaedic-tab">

                        <div class="row">
                            <div class="col-12 col-md-4 mb-4">
                                <a href="#" data-toggle="modal" data-target="#basicModal"><img
                                        src="{{ url('img/frontend/other_products/orthopaedic/1.jpg') }}" alt=""
                                        class="img-fluid ortho-img"></a>

                                <!-- ortho 1 modal -->
                                <div class="modal fade" id="basicModal" tabindex="-1" role="dialog"
                                    aria-labelledby="basicModal" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4>Orthopaedic</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{{ url('img/frontend/other_products/orthopaedic/1.jpg') }}"
                                                    alt="" class="img-fluid ortho-img pop-img">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="col-12 col-md-4 mb-4">
                                <a href="#" data-toggle="modal" data-target="#basicModal2">
                                    <img src="{{ url('img/frontend/other_products/orthopaedic/2.png') }}" alt=""
                                        class="img-fluid ortho-img "></a>

                                <!-- ortho 2 modal -->
                                <div class="modal fade" id="basicModal2" tabindex="-1" role="dialog"
                                    aria-labelledby="basicModal2" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4>Orthopaedic</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{{ url('img/frontend/other_products/orthopaedic/2.png') }}"
                                                    alt="" class="img-fluid ortho-img pop-img">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>

                        <div class="inquire">
                            <button class="btn rounded-pill text-white px-5 py-2" data-bs-toggle="modal"
                                style="background-color: #00ACEE;" data-bs-target="#inquire">Inquire
                                Now</button>
                        </div>

                    </div>



                    <div class="tab-pane fade" id="pills-surgery" aria-labelledby="pills-surgery-tab">
                        <div class="col-12 col-md-12 mb-4">
                            <div class="other-row">
                                <a href="#" data-toggle="modal" data-target="#general1">
                                    <img src="{{ url('img/frontend/other_products/general-surgery/body-foundation.png') }}"
                                        alt="" class="img-fluid general-img"></a>
                                <a href="#" data-toggle="modal" data-target="#general2">
                                    <img src="{{ url('img/frontend/other_products/general-surgery/maternity.png') }}"
                                        alt="" class="img-fluid general-img"></a>
                                <a href="#" data-toggle="modal" data-target="#general3">
                                    <img src="{{ url('img/frontend/other_products/general-surgery/postsurgical.png') }}"
                                        alt="" class="img-fluid general-img"></a>
                                <!-- general 1 modal -->
                                <div class="modal fade" id="general1" tabindex="-1" role="dialog"
                                    aria-labelledby="general1" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content general-modal-content">
                                            <div class="modal-header">
                                                <h4>General Surgery</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{{ url('img/frontend/other_products/general-surgery/body-foundation.png') }}"
                                                    alt="" class="img-fluid general-img pop-img">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- general 2 modal -->
                                <div class="modal fade" id="general2" tabindex="-1" role="dialog"
                                    aria-labelledby="general2" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content general-modal-content">
                                            <div class="modal-header">
                                                <h4>General Surgery</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{{ url('img/frontend/other_products/general-surgery/maternity.png') }}"
                                                    alt="" class="img-fluid general-img pop-img">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- general 3 modal -->
                                <div class="modal fade" id="general3" tabindex="-1" role="dialog"
                                    aria-labelledby="general3" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content general-modal-content">
                                            <div class="modal-header">
                                                <h4>General Surgery</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{{ url('img/frontend/other_products/general-surgery/postsurgical.png') }}"
                                                    alt="" class="img-fluid general-img pop-img">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                            </div>
                            <div class="other-row">
                                <a href="#" data-toggle="modal" data-target="#general4">
                                    <img src="{{ url('img/frontend/other_products/general-surgery/man-one.png') }}"
                                        alt="" class="img-fluid general-img"></a>
                                <a href="#" data-toggle="modal" data-target="#general5">
                                    <img src="{{ url('img/frontend/other_products/general-surgery/man-two.png') }}"
                                        alt="" class="img-fluid general-img"></a>
                                <a href="#" data-toggle="modal" data-target="#general6">
                                    <img src="{{ url('img/frontend/other_products/general-surgery/man-three.png') }}"
                                        alt="" class="img-fluid general-img "></a>

                                <!-- general 4 modal -->
                                <div class="modal fade" id="general4" tabindex="-1" role="dialog"
                                    aria-labelledby="general4" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content general-modal-content">
                                            <div class="modal-header">
                                                <h4>General Surgery</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{{ url('img/frontend/other_products/general-surgery/man-one.png') }}"
                                                    alt="" class="img-fluid general-img pop-img">
                                            </div>
                                        </div>
                                    </div>
                                </div>


                                <!-- general 5 modal -->
                                <div class="modal fade" id="general5" tabindex="-1" role="dialog"
                                    aria-labelledby="general5" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content general-modal-content">
                                            <div class="modal-header">
                                                <h4>General Surgery</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <img src="{{ url('img/frontend/other_products/general-surgery/man-two.png') }}"
                                                    alt="" class="img-fluid general-img pop-img">
                                            </div>
                                        </div>
                                    </div>
                                </div>

                                <!-- general 6 modal -->
                                <div class="modal fade" id="general6" tabindex="-1" role="dialog"
                                    aria-labelledby="general6" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content general-modal-content">
                                            <div class="modal-header">
                                                <h4>General Surgery</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                            <img src="{{ url('img/frontend/other_products/general-surgery/man-three.png') }}"
                                        alt="" class="img-fluid general-img pop-img">
                                            </div>
                                        </div>
                                    </div>
                                </div>



                            </div>
                        </div>
                        <div class="col-12 col-md-12">
                            <a style="margin-bottom: 15px; display:block;" class="other-company-links"
                                href="https://www.designveronique.com/" target="_blank">Visit:
                                www.designveronique.com</a>

                            <div class="inquire">
                                <button class="btn rounded-pill text-white px-5 py-2" data-bs-toggle="modal"
                                    style="background-color: #00ACEE;" data-bs-target="#inquire">Inquire
                                    Now</button>
                            </div>

                        </div>

                    </div>


                    <!-- end of surgical division -->

                    <!-- public health division products -->
                    <div class="tab-pane fade" id="pills-mosquito-dunk" aria-labelledby="pills-mosquito-dunk-tab">
                        <div class="row">
                            <div class="col-md-6 other-main">
                                <h2>Mosquito Dunks</h2>
                                <a href="#" data-toggle="modal" data-target="#public-health">
                                <img src="{{url('img/frontend/other_products/public-health.png')}}"
                                    alt="">


                                     <!-- public health modal -->
                                <div class="modal fade" id="public-health" tabindex="-1" role="dialog"
                                    aria-labelledby="public-health" aria-hidden="true">
                                    <div class="modal-dialog">
                                        <div class="modal-content">
                                            <div class="modal-header">
                                                <h4>Public Health</h4>
                                                <button type="button" class="close" data-dismiss="modal"
                                                    aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                            <img class="mosquito" src="{{url('img/frontend/other_products/public-health.png')}}"
                                    alt="">
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </div>
                            <div class="inquire">
                                <button class="btn rounded-pill text-white px-5 py-2" data-bs-toggle="modal"
                                    style="background-color: #00ACEE;" data-bs-target="#inquire">Inquire
                                    Now</button>
                            </div>
                            <a class="other-company-links" href="https://summitchemical.com/" target="_blank">Visit:
                                www.summitchemical.com</a>
                            <p>America's best selling homeowner mosquito control product. The only product with BTI, a
                                bacteria toxic only to mosquito larvae, that lasts 30 days and treats 100 square feet of
                                surface water.</p>
                            <div class="list-and-more-wrapper">
                                <ul class="other-list">
                                    <li>Non-toxic to all other wildlife, pets, fish, and humans.</li>
                                    <li>Simply apply Mosquito Dunks® to any standing water, or water garden.</li>
                                    <li>Kills within hours and lasts for 30 days or more.</li>
                                    <li>Labeled For Organic Gardening by the USEPA.</li>
                                    <li>The quintessential highly effective low impact product</li>
                                </ul>
                                <a class="other-more-link"
                                    href="{{ url('pdf/other-products/Summit_Catalog-fnl-web.pdf') }}"
                                    target="_blank">Read More</a>
                            </div>

                            <iframe width="450" height="315" src="https://www.youtube.com/embed/5xq4o0-val4"
                                title="YouTube video player" frameborder="0"
                                allow="accelerometer; autoplay; clipboard-write; encrypted-media; gyroscope; picture-in-picture"
                                allowfullscreen></iframe>

                        </div>
                    </div>

                    <!-- <div class="tab-pane fade" id="pills-public" aria-labelledby="pills-public-tab">
                    public tab
                </div> -->
                    <!-- end of public health division -->
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