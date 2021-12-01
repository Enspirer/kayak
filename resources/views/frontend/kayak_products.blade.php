@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@push('after-styles')
    <link rel="stylesheet" href="{{ url('css/kayak_products.css') }}">
@endpush

@section('content')

@if ( session()->has('message') )

    <div class="container" style="background-color: #6F8FAF; padding-top:5px; margin-bottom:50px; border-radius: 50px 50px; text-align:center;">

        <h1 style="margin-top:150px; color:white" class="fs-1">Thank You!</h1><br>
        <p class="lead mb-3"><h4 style="color:white">We appreciate you for your inquiry. One of our member will get back in touch with you soon!<br><br> Have a great day!</h4></p>
        <br><hr><br>    
        <p class="lead">
            <a class="btn btn-primary btn-md mt-3 mb-3" href="{{url('kayak-products')}}" role="button">Kayak Product Page</a>
        </p>
        <br>
    </div>

@else  
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
                                    <img src="{{ url('img/frontend/kayak_products/kn95-1.png') }}" alt="" class="img-fluid main-image" id="main-image1">
                                </div>
                                <div class="col-12 col-md-7">
                                    <h5 class="fw-bold text-center text-md-left">KN95 FACE MASKS</h5>
                                    <hr>

                                    <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem</p>

                                    <div class="row multiple mx-0 mt-4 mb-4 justify-content-center justify-content-md-start">
                                        <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/kn95-1.png') }}" id="image1" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/kn95-2.jpg') }}" id="image2" alt="" class="img-fluid">
                                        </div>
                                        <!-- <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/kn95.png') }}" id="image3" alt="" class="img-fluid">
                                        </div> -->
                                    </div>

                                    <div class="inquire">
                                        <button class="btn rounded-pill text-white px-5 py-2" data-bs-toggle="modal" data-bs-target="#inquire">Inquire Now</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-tubes" aria-labelledby="pills-tubes-tab">
                            <div class="row">
                                <div class="col-12 col-md-5 mb-4 mb-md-0 text-center">
                                    <img src="{{ url('img/frontend/kayak_products/abercom1.jpg') }}" alt="" class="img-fluid main-image2" id="main-image2">
                                </div>
                                <div class="col-12 col-md-7">
                                    <h5 class="fw-bold text-center text-md-left">ENDOTRACHEAL TUBES</h5>
                                    <hr>

                                    <p>We manufacture High Quality Endotracheal Tubes.</p>

                                    <div class="row multiple2 mx-0 mt-4 mb-4 justify-content-center justify-content-md-start">
                                        <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/abercom1.jpg') }}" id="image4" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/abercom2.jpg') }}" id="image5" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/abercom3.jpg') }}" id="image6" alt="" class="img-fluid">
                                        </div>
                                    </div>

                                    <div class="inquire">
                                        <button class="btn rounded-pill text-white px-5 py-2" data-bs-toggle="modal" data-bs-target="#inquire">Inquire Now</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-contact" aria-labelledby="pills-contact-tab">
                            <div class="row">
                                <div class="col-12 col-md-5 mb-4 mb-md-0 text-center">
                                    <img src="{{ url('img/frontend/kayak_products/roll1.jpg') }}" alt="" class="img-fluid main-image3" id="main-image3">
                                </div>
                                <div class="col-12 col-md-7">
                                    <h5 class="fw-bold text-center text-md-left">SURGICAL CELLULOSE WADDING</h5>
                                    <hr>

                                    <p>We are one of the first ever large-scale manufacturers for Surgical Cellulose Wadding in Sri Lanka.</p>

                                    <div class="row multiple3 mx-0 mt-4 mb-4 justify-content-center justify-content-md-start">
                                        <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/roll1.jpg') }}" id="image7" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/roll2.jpg') }}" id="image8" alt="" class="img-fluid">
                                        </div>
                                        <!-- <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/roll.png') }}" id="image9" alt="" class="img-fluid">
                                        </div> -->
                                    </div>

                                    <div class="inquire">
                                        <button class="btn rounded-pill text-white px-5 py-2" data-bs-toggle="modal" data-bs-target="#inquire">Inquire Now</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-surgical" aria-labelledby="pills-surgical-tab">
                            <div class="row">
                                <div class="col-12 col-md-5 mb-4 mb-md-0 text-center">
                                    <img src="{{ url('img/frontend/kayak_products/Surgical Apron1.jpg') }}" alt="" class="img-fluid main-image4" id="main-image4">
                                </div>
                                <div class="col-12 col-md-7">
                                    <h5 class="fw-bold text-center text-md-left">SURGICAL APRONS</h5>
                                    <hr>

                                    <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>

                                    <div class="row multiple4 mx-0 mt-4 mb-4 justify-content-center justify-content-md-start">
                                        <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/Surgical Apron1.jpg') }}" id="image10" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/Surgical Apron2.jpg') }}" id="image11" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/Surgical Apron3.jpg') }}" id="image12" alt="" class="img-fluid">
                                        </div>
                                    </div>

                                    <div class="inquire">
                                        <button class="btn rounded-pill text-white px-5 py-2" data-bs-toggle="modal" data-bs-target="#inquire">Inquire Now</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-nintyfive" aria-labelledby="pills-nintyfive-tab">
                            <div class="row">
                                <div class="col-12 col-md-5 mb-4 mb-md-0 text-center">
                                    <img src="{{ url('img/frontend/kayak_products/N95 Masks1.jpg') }}" alt="" class="img-fluid main-image5" id="main-image5">
                                </div>
                                <div class="col-12 col-md-7">
                                    <h5 class="fw-bold text-center text-md-left">N95 MASKS</h5>
                                    <hr>

                                    <p>We initiated Manufacturing of N-95 Masks in Sri Lanka to serve and assist the nation during the global pandemic of COVID19. We provide high quality NMRA Certified N-95 masks that protect the nation. Our N-95 Masks are exported to various countries.</p>

                                    <div class="row multiple5 mx-0 mt-4 mb-4 justify-content-center justify-content-md-start">
                                        <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/N95 Masks1.jpg') }}" id="image13" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/N95 Masks2.jpg') }}" id="image14" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/N95 Masks3.jpg') }}" id="image15" alt="" class="img-fluid">
                                        </div>
                                    </div>

                                    <div class="inquire">
                                        <button class="btn rounded-pill text-white px-5 py-2" data-bs-toggle="modal" data-bs-target="#inquire">Inquire Now</button>
                                    </div>
                                    
                                </div>
                            </div>
                        </div>

                        <div class="tab-pane fade" id="pills-spinal" aria-labelledby="pills-spinal-tab">
                            <div class="row">
                                <div class="col-12 col-md-5 mb-4 mb-md-0 text-center">
                                    <img src="{{ url('img/frontend/kayak_products/Spinal needle1.jpg') }}" alt="" class="img-fluid main-image6" id="main-image6">
                                </div>
                                <div class="col-12 col-md-7">
                                    <h5 class="fw-bold text-center text-md-left">SPINAL NEEDLES</h5>
                                    <hr>

                                    <p>Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum Lorem Ipsum</p>

                                    <div class="row multiple6 mx-0 mt-4 mb-4 justify-content-center justify-content-md-start">
                                        <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/Spinal needle1.jpg') }}" id="image16" alt="" class="img-fluid">
                                        </div>
                                        <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/Spinal needle2.jpg') }}" id="image17" alt="" class="img-fluid">
                                        </div>
                                        <!-- <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/Spinal needle.jpg') }}" id="image18" alt="" class="img-fluid">
                                        </div> -->
                                    </div>

                                    <div class="inquire">
                                        <button class="btn rounded-pill text-white px-5 py-2" data-bs-toggle="modal" data-bs-target="#inquire">Inquire Now</button>
                                    </div>
                                    
                                </div>
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
                    <label for="last-name" class="form-label">Company Name <span class="text-danger">*</span></label>
                    <input type="text" class="form-control" name="company" required>
                  </div>
                  <div class="mb-2">
                    <label for="contact-number" class="form-label">Contact Number <span class="text-danger">*</span></label>   
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
                      <div class="g-recaptcha" data-callback="checked" data-sitekey="6LfGnB8dAAAAAH6Baz00Galvcr7s7aZyeGUYly4t" style="display: inline-block;"></div>
                  </div>
              </div>
              <div class="modal-footer justify-content-center">
                <button type="button" class="btn" data-bs-dismiss="modal" style="color: #68AE42;">Cancel</button>
                <input type="submit" class="submit-btn btn text-white px-5" style="background-color: #68AE42;" value="Send Request" disabled/>
              </div>
          </form>  
        </div>
      </div>
    </div>

@endif

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
        $("#image1").click(function(){
            $("#main-image1").attr("src", "img/frontend/kayak_products/kn95-1.png");
        });
        $("#image2").click(function(){
            $("#main-image1").attr("src", "img/frontend/kayak_products/kn95-2.jpg");
        });
        // $("#image3").click(function(){
        //     $("#main-image1").attr("src", "img/frontend/kayak_products/kn95-1.png");
        // });        
    </script>
    <script>
        $("#image4").click(function(){
            $("#main-image2").attr("src", "img/frontend/kayak_products/abercom1.jpg");
        });
        $("#image5").click(function(){
            $("#main-image2").attr("src", "img/frontend/kayak_products/abercom2.jpg");
        });
        $("#image6").click(function(){
            $("#main-image2").attr("src", "img/frontend/kayak_products/abercom3.jpg");
        });
    </script>
    <script>
        $("#image7").click(function(){
            $("#main-image3").attr("src", "img/frontend/kayak_products/roll1.jpg");
        });
        $("#image8").click(function(){
            $("#main-image3").attr("src", "img/frontend/kayak_products/roll2.jpg");
        });
        // $("#image9").click(function(){
        //     $("#main-image3").attr("src", "img/frontend/kayak_products/roll.jpg");
        // });
    </script>
    <script>
        $("#image10").click(function(){
            $("#main-image4").attr("src", "img/frontend/kayak_products/Surgical Apron1.jpg");
        });
        $("#image11").click(function(){
            $("#main-image4").attr("src", "img/frontend/kayak_products/Surgical Apron2.jpg");
        });
        $("#image12").click(function(){
            $("#main-image4").attr("src", "img/frontend/kayak_products/Surgical Apron3.jpg");
        });
    </script>
    <script>
        $("#image13").click(function(){
            $("#main-image5").attr("src", "img/frontend/kayak_products/N95 Masks1.jpg");
        });
        $("#image14").click(function(){
            $("#main-image5").attr("src", "img/frontend/kayak_products/N95 Masks2.jpg");
        });
        $("#image15").click(function(){
            $("#main-image5").attr("src", "img/frontend/kayak_products/N95 Masks3.jpg");
        });
    </script>
    <script>   
        $("#image16").click(function(){
            $("#main-image6").attr("src", "img/frontend/kayak_products/Spinal needle1.jpg");
        });
        $("#image17").click(function(){
            $("#main-image6").attr("src", "img/frontend/kayak_products/Spinal needle2.jpg");
        });
        // $("#image18").click(function(){
        //     $("#main-image6").attr("src", "img/frontend/kayak_products/Spinal needle.jpg");
        // });
    </script>

    <script src="https://www.google.com/recaptcha/api.js" async defer></script>

    <script>
        function checked() {
        $('.submit-btn').removeAttr('disabled');
    };
    </script>
@endpush