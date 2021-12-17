@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@push('after-styles')
<link rel="stylesheet" href="{{ url('css/kayak_products.css') }}">
<script src="{{ url('json/kayak-products.js')}}"></script>


@endpush

@section('content')

@if ( session()->has('message') )

<div class="container"
    style="background-color: #6F8FAF; padding-top:5px; margin-bottom:50px; border-radius: 50px 50px; text-align:center;">

    <h1 style="margin-top:150px; color:white" class="fs-1">Thank You!</h1><br>
    <p class="lead mb-3">
    <h4 style="color:white">We appreciate you for your inquiry. One of our member will get back in touch with you
        soon!<br><br> Have a great day!</h4>
    </p>
    <br>
    <hr><br>
    <p class="lead">
        <a class="btn btn-primary btn-md mt-3 mb-3" href="{{url('kayak-products')}}" role="button">Kayak Product
            Page</a>
    </p>
    <br>
</div>

@else
<div class="container-fluid banner kayak-main-container">
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
                <ul id="pills-tab" role="tablist" class="nav flex-column">
                    <li role="presentation" class="nav-item"><button id="pills-mask-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-respirator-masks" type="button" role="tab"
                            aria-controls="pills-respirator-masks" aria-selected="true"
                            class="nav-link fw-bolder mb-3 active-kayak">Respirator Masks<i
                                class="bi bi-plus-lg rotate"></i></button></li>
                    <li role="presentation" class="nav-item"><button id="pills-tubes-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-endo-tubes" type="button" role="tab" aria-controls="pills-tubes"
                            aria-selected="false" class="nav-link fw-bolder mb-3">Endotracheal Tubes <i
                                class="bi bi-plus-lg"></i></button></li>

                    <li role="presentation" class="nav-item"><button id="pills-cellulose-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-cellulose" type="button" role="tab" aria-controls="pills-cellulose"
                            aria-selected="false" class="nav-link fw-bolder mb-3">Multilayer Surgical Cellulose Roll<i
                                class="bi bi-plus-lg"></i></button></li>

                    <li role="presentation" class="nav-item"><button id="pills-surgical-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-apron" type="button" role="tab" aria-controls="pills-apron"
                            aria-selected="false" class="nav-link fw-bolder mb-3">Surgical Aprons<i
                                class="bi bi-plus-lg"></i></button></li>


                    <li role="presentation" class="nav-item"><button id="pills-spinal-tab" data-bs-toggle="pill"
                            data-bs-target="#pills-spinal" type="button" role="tab" aria-controls="pills-spinal"
                            aria-selected="false" class="nav-link fw-bolder mb-3">Spinal Needles<i
                                class="bi bi-plus-lg"></i></button></li>
                </ul>
            </div>


            <div class="col-12 col-md-8">
                <div class="tab-content">
                    <!-- Respirator masks -->
                    <div class="tab-pane fade active show" id="pills-respirator-masks" aria-labelledby="pills-mask-tab">
                        <div class="row">

                            <div class="col-12 col-md-5 mb-4 mb-md-0 text-center">
                               <img id="maskImg"
                                        src="{{ url('img/frontend/kayak_products/respiratory-masks/breath-right/N95 Masks1.png') }}"
                                        alt="" class="img-fluid main-image5 zoom-img">


                            </div>


                            <div class="col-12 col-md-7" style="z-index:1">

                                <h5 class="fw-bold text-center text-md-left">Respirator Masks</h5>
                                <hr>

                                <div
                                    class="row multiple5 mx-0 mt-4 mb-4 justify-content-center justify-content-md-start">
                                    <div class="col-3 col-md-3 text-center me-1">
                                        <a onclick="maskSubOne()" href="#"> <img id="maskSubImgOne"
                                                src="{{ url('img/frontend/kayak_products/respiratory-masks/breath-right/N95 Masks1.png') }}"
                                                alt="" class="img-fluid"> </a>
                                    </div>
                                    <div class="col-3 col-md-3 text-center me-1">
                                        <a onclick="maskSubTwo()" href="#">
                                            <img id="maskSubImgTwo"
                                                src="{{ url('img/frontend/kayak_products/respiratory-masks/breath-right/N95 Masks2.jpg') }}"
                                                 alt="" class="img-fluid"> </a>
                                    </div>
                                </div>

                            </div>

                            <div class="product-varients-wrapper">
                                <h5 style="margin-right: 15px;">Masks Products :- </h5>
                                <button onclick="masksOne()" class="product-varient-btn active">N95</button>
                                <button onclick="masksTwo()" class="product-varient-btn">KN95</button>
                            </div>

                        </div>

                
                        <div class="row">
                            <div class="content-wrapper">
                                <div class="row">
                                    <div class="spec-row">
                                        <span class="spec">Product:</span>
                                        <p id="maskProduct">Breath Right</p>
                                    </div>
                                    <div class="spec-row">
                                        <span class="spec">Specification: </span>
                                        <p id="maskSpec">
                                            N95 Respiratory Protection,fold- flat respirator, individually packed
                                        </p>


                                    </div>

                                    <div class="spec-row">
                                        <span class="spec">Filtration Rate: </span>
                                        <p id="maskFil">
                                            Bacteria Filtration ≥ 99% <br>Particle Filtration ≥ 95 %
                                        </p>
                                    </div>

                                    <div class="spec-row mobile-size-row">
                                        <span class="spec">Size:</span>
                                        <p id="maskSize" class="size-divider">500g</p>
                                        <span class="spec">Pack Size:</span>
                                        <p id="packSize" class="size-divider">1 x 1</p>
                                        <span class="spec">Carton Size: </span>
                                        <p id="cartonSize" class="size-divider"> 1 x 24</p>
                                    </div>

                                    <div class="spec-row">
                                        <div class="inquire">
                                            <button class="btn rounded-pill text-white px-5 py-2" data-bs-toggle="modal"
                                                data-bs-target="#inquire">Inquire
                                                Now</button>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        </div>


                    </div>
<!-- 
                    <div id="popupMask" class="overlay">
                        <div class="popup" style="width: max-content;">
                            <h2>N95</h2>
                            <a class="close" href="#">&times;</a>
                            <div class="content">
                            <img id="maskImgPop" style="width: 350px;"
                                        src="{{ url('img/frontend/kayak_products/respiratory-masks/breath-right/N95 Masks1.png') }}"
                                        alt="" class="img-fluid main-image5" >
                            </div>
                        </div>
                    </div> -->

                    <!-- endotracheal tubes -->
                    <div class="tab-pane fade" id="pills-endo-tubes" aria-labelledby="pills-tubes">
                        <div class="row">
                            <div class="col-12 col-md-5 mb-4 mb-md-0 text-center">
                                <img id="endoImg" class="zoom-img"
                                    src="{{ url('img/frontend/kayak_products/endo-tubes/abercom1.png') }}">
                            </div>
                            <div class="col-12 col-md-7">

                                <h5 class="fw-bold text-center text-md-left">Endotracheal Tube</h5>
                                <hr>

                                <div
                                    class="row multiple5 mx-0 mt-4 mb-4 justify-content-center justify-content-md-start">

                                    <div class="col-3 col-md-3 text-center me-1">
                                        <a onclick="endoSubOne()" href="#">
                                            <img src="{{ url('img/frontend/kayak_products/endo-tubes/abercom1.jpg') }}"
                                                id="image13" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="col-3 col-md-3 text-center me-1">
                                        <a onclick="endoSubTwo()">
                                            <img src="{{ url('img/frontend/kayak_products/endo-tubes/abercom3.png') }}"
                                                id="image14" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-3 col-md-3 text-center me-1">
                                        <a onclick="endoSubThree()" href="#">
                                            <img src="{{ url('img/frontend/kayak_products/endo-tubes/abercom2.png') }}"
                                                id="image13" alt="" class="img-fluid"></a>
                                    </div>

                                </div>

                            </div>
                        </div>

                        <div class="row">
                            <div class="content-wrapper">
                                <div class="row-with-btn">
                                    <div class="spec-img-row">
                                        <span class="spec">Specification: </span>
                                        <a class="" href="#popup-tubes">
                                            <img class="spec-img"
                                                src="{{ url('img/frontend/kayak_products/endo-tubes/endo-table.png') }}"
                                                alt=""></a>
                                        <div class="btn-wrapper">
                                            <a class="popup-btn" href="#popup-tubes">View Details</a>
                                            <button data-bs-toggle="modal" data-bs-target="#inquire"
                                                class="popup-btn inquire-btn">Inquire
                                                Now</button>
                                        </div>

                                    </div>




                                    <div id="popup-tubes" class="overlay">
                                        <div class="popup">
                                            <h2>Endotracheal Tubes</h2>
                                            <a class="close" href="#">&times;</a>
                                            <div class="content">
                                                <table class="table-popup" border="1" cellpadding="15px">
                                                    <tr>
                                                        <th>SR Number</th>
                                                        <th>Product Name</th>
                                                        <th>Specification</th>
                                                        <th>Pack Size</th>
                                                        <th>Box Size</th>
                                                    </tr>
                                                    <!-- product one -->
                                                    <tr>
                                                        <!-- sr number -->
                                                        <td>13800101</td>
                                                        <!-- product name -->
                                                        <td>Abercrom <br>Un-cuffed<br> Endotracheal Tube<br>2.0mm
                                                        </td>
                                                        <!-- specification -->
                                                        <td style="white-space: normal;"> Murphy Eye type, for oral
                                                            and
                                                            nasal use, size 2.0mm ID, made of implant quality clear
                                                            PVC,
                                                            with radio opaque marker through the length, with a
                                                            black
                                                            intubation depth marker and a 15mm connector, conforming
                                                            to
                                                            ISO standards, sterile in peel open pack.</td>
                                                        <!-- pack size -->
                                                        <td>1 x 1</td>
                                                        <!-- box size -->
                                                        <td>1 x 10</td>
                                                    </tr>
                                                    <!-- product two -->
                                                    <tr>
                                                        <!-- sr number -->
                                                        <td>13800102</td>
                                                        <!-- product name -->
                                                        <td>Abercrom <br>Un-cuffed <br> Endotracheal Tube <br> 2.5mm
                                                        </td>
                                                        <!-- specification -->
                                                        <td style="white-space: normal;"> Murphy Eye type, for oral
                                                            and
                                                            nasal use, size 2.5mm ID, made of implant quality clear
                                                            PVC,
                                                            with radio opaque marker through the length, with a
                                                            black
                                                            intubation depth marker and a 15mm connector, conforming
                                                            to
                                                            ISO standards, sterile in peel open pack.</td>
                                                        <!-- pack size -->
                                                        <td>1 x 1</td>
                                                        <!-- box size -->
                                                        <td>1 x 10</td>
                                                    </tr>

                                                    <!-- product three -->
                                                    <tr>
                                                        <!-- sr number -->
                                                        <td>13800103</td>
                                                        <!-- product name -->
                                                        <td>Abercrom<br> Un-cuffed<br> Endotracheal Tube <br>3.0mm
                                                        </td>
                                                        <!-- specification -->
                                                        <td style="white-space: normal;">Murphy Eye type, for oral
                                                            and
                                                            nasal use, size 3.0mm ID, made of implant quality clear
                                                            PVC,
                                                            with radio opaque marker through the length, with a
                                                            black
                                                            intubation depth marker and a 15mm connector, conforming
                                                            to
                                                            ISO standards, sterile in peel open pack.</td>
                                                        <!-- pack size -->
                                                        <td>1 x 1</td>
                                                        <!-- box size -->
                                                        <td>1 x 10</td>
                                                    </tr>


                                                    <!-- product four -->
                                                    <tr>
                                                        <!-- sr number -->
                                                        <td>13800104</td>
                                                        <!-- product name -->
                                                        <td>Abercrom <br>Un-cuffed <br>Endotracheal Tube <br>3.5mm
                                                        </td>
                                                        <!-- specification -->
                                                        <td style="white-space: normal;"> Murphy Eye type, for oral
                                                            and
                                                            nasal use, size 3.5mm ID, made of implant quality clear
                                                            PVC,
                                                            with radio opaque marker through the length, with a
                                                            black
                                                            intubation depth marker and a 15mm connector, conforming
                                                            to
                                                            ISO standards, sterile in peel open pack.</td>
                                                        <!-- pack size -->
                                                        <td>1 x 1</td>
                                                        <!-- box size -->
                                                        <td>1 x 10</td>
                                                    </tr>

                                                    <!-- product five -->
                                                    <tr>
                                                        <!-- sr number -->
                                                        <td>13800105</td>
                                                        <!-- product name -->
                                                        <td>Abercrom <br>Un-cuffed<br> Endotracheal Tube<br> 4.0mm
                                                        </td>
                                                        <!-- specification -->
                                                        <td style="white-space: normal;"> Murphy Eye type, for oral
                                                            and
                                                            nasal use, size 4.0mm ID, made of implant quality clear
                                                            PVC,
                                                            with radio opaque marker through the length, with a
                                                            black
                                                            intubation depth marker and a 15mm connector, conforming
                                                            to
                                                            ISO standards, sterile in peel open pack.</td>
                                                        <!-- pack size -->
                                                        <td>1 x 1</td>
                                                        <!-- box size -->
                                                        <td>1 x 10</td>
                                                    </tr>

                                                    <!-- product six -->
                                                    <tr>
                                                        <!-- sr number -->
                                                        <td>13800106</td>
                                                        <!-- product name -->
                                                        <td>Abercrom <br>Un-cuffed<br> Endotracheal Tube<br> 4.5mm
                                                        </td>
                                                        <!-- specification -->
                                                        <td style="white-space: normal;"> Murphy Eye type, for oral
                                                            and
                                                            nasal use, size 4.5mm ID, made of implant quality clear
                                                            PVC,
                                                            with radio opaque marker through the length, with a
                                                            black
                                                            intubation depth marker and a 15mm connector, conforming
                                                            to
                                                            ISO standards, sterile in peel open pack.</td>
                                                        <!-- pack size -->
                                                        <td>1 x 1</td>
                                                        <!-- box size -->
                                                        <td>1 x 10</td>
                                                    </tr>

                                                    <!-- product seven -->
                                                    <tr>
                                                        <!-- sr number -->
                                                        <td>13800107</td>
                                                        <!-- product name -->
                                                        <td>Abercrom <br>Un-cuffed<br> Endotracheal Tube<br> 5.0mm</td>
                                                        <!-- specification -->
                                                        <td style="white-space: normal;"> Murphy Eye type, for oral and
                                                            nasal use, size 5.0mm ID, made of implant quality clear PVC,
                                                            with radio opaque marker through the length, with a black
                                                            intubation depth marker and a 15mm connector, conforming to
                                                            ISO standards, sterile in peel open pack.</td>
                                                        <!-- pack size -->
                                                        <td>1 x 1</td>
                                                        <!-- box size -->
                                                        <td>1 x 10</td>
                                                    </tr>


                                                    <!-- product eight -->
                                                    <tr>
                                                        <!-- sr number -->
                                                        <td>13800108</td>
                                                        <!-- product name -->
                                                        <td>Abercrom <br>Un-cuffed<br> Endotracheal Tube<br> 5.5mm</td>
                                                        <!-- specification -->
                                                        <td style="white-space: normal;">Murphy Eye type, for oral and
                                                            nasal use, size 5.5mm ID, made of implant quality clear PVC,
                                                            with radio opaque marker through the length, with a black
                                                            intubation depth marker and a 15mm connector, conforming to
                                                            ISO standards, sterile in peel open pack.</td>
                                                        <!-- pack size -->
                                                        <td>1 x 1</td>
                                                        <!-- box size -->
                                                        <td>1 x 10</td>
                                                    </tr>


                                                    <!-- product nine -->
                                                    <tr>
                                                        <!-- sr number -->
                                                        <td>13800109</td>
                                                        <!-- product name -->
                                                        <td>Abercrom <br>Un-cuffed<br> Endotracheal Tube<br> 6.0mm</td>
                                                        <!-- specification -->
                                                        <td style="white-space: normal;">Murphy Eye type, for oral and
                                                            nasal use,size 6.0mm ID, made of implant quality clear PVC,
                                                            with radio opaque marker through the length, with a black
                                                            intubation depth marker and a 15mm connector, conforming to
                                                            ISO standards, sterile in peel open pack.</td>
                                                        <!-- pack size -->
                                                        <td>1 x 1</td>
                                                        <!-- box size -->
                                                        <td>1 x 10</td>
                                                    </tr>


                                                    <!-- product ten -->
                                                    <tr>
                                                        <!-- sr number -->
                                                        <td>13800110</td>
                                                        <!-- product name -->
                                                        <td>Abercrom <br>Un-cuffed<br> Endotracheal Tube<br> 6.5mm</td>
                                                        <!-- specification -->
                                                        <td style="white-space: normal;">Murphy Eye type, for oral and
                                                            nasal use,size 6.5mm ID, made of implant quality clear PVC,
                                                            with radio opaque marker through the length, with a black
                                                            intubation depth marker and a 15mm connector, conforming to
                                                            ISO standards, sterile in peel open pack.</td>
                                                        <!-- pack size -->
                                                        <td>1 x 1</td>
                                                        <!-- box size -->
                                                        <td>1 x 10</td>
                                                    </tr>

                                                    <!-- product eleven -->
                                                    <tr>
                                                        <!-- sr number -->
                                                        <td>13800113</td>
                                                        <!-- product name -->
                                                        <td>Abercrom <br>Un-cuffed<br> Endotracheal Tube<br> 8.0mm</td>
                                                        <!-- specification -->
                                                        <td style="white-space: normal;">Murphy Eye type, for oral and
                                                            nasal use,size 8.0mm ID, made of implant quality clear PVC,
                                                            with radio opaque marker through the length, with a black
                                                            intubation depth marker and a 15mm connector, conforming to
                                                            ISO standards, sterile in peel open pack.</td>
                                                        <!-- pack size -->
                                                        <td>1 x 1</td>
                                                        <!-- box size -->
                                                        <td>1 x 10</td>
                                                    </tr>

                                                    <!-- product twelve -->
                                                    <tr>
                                                        <!-- sr number -->
                                                        <td>13800201</td>
                                                        <!-- product name -->
                                                        <td>Abercrom<br>cuffed<br> Endotracheal Tube<br> 5.0mm</td>
                                                        <!-- specification -->
                                                        <td style="white-space: normal;">Murphy Eye, oral & nasal, with
                                                            low pressure cuff and a pilot balloon to indicate cuff
                                                            inflation, size 5.0mm ID, made of implant quality PVC, clear
                                                            with radio opaque marker through the length, a black
                                                            intubation depth marker and a 15mm connector confirming to
                                                            ISO standards, sterile in peel open pack.</td>
                                                        <!-- pack size -->
                                                        <td>1 x 1</td>
                                                        <!-- box size -->
                                                        <td>1 x 10</td>
                                                    </tr>


                                                    <!-- product thirteen -->
                                                    <tr>
                                                        <!-- sr number -->
                                                        <td>13800202</td>
                                                        <!-- product name -->
                                                        <td>Abercrom <br>cuffed <br>Endotracheal Tube<br> 5.5mm</td>
                                                        <!-- specification -->
                                                        <td style="white-space: normal;"> Murphy Eye, oral & nasal, with
                                                            low pressure cuff and a pilot balloon to indicate cuff
                                                            inflation, size 5.5mm ID, made of implant quality PVC, clear
                                                            with radio opaque marker through the length, a black
                                                            intubation depth marker and a 15mm connector confirming to
                                                            ISO standards, sterile in peel open pack.</td>
                                                        <!-- pack size -->
                                                        <td>1 x 1</td>
                                                        <!-- box size -->
                                                        <td>1 x 10</td>
                                                    </tr>

                                                    <!-- product forteen -->
                                                    <tr>
                                                        <!-- sr number -->
                                                        <td>13800203</td>
                                                        <!-- product name -->
                                                        <td>Abercrom <br>cuffed<br> Endotracheal Tube<br> 6.0mm</td>
                                                        <!-- specification -->
                                                        <td style="white-space: normal;"> Murphy Eye, oral & nasal, with
                                                            low pressure cuff and a pilot balloon to indicate cuff
                                                            inflation, size 6.0mm ID, made of implant quality PVC, clear
                                                            with radio opaque marker through the length, a black
                                                            intubation depth marker and a 15mm connector confirming to
                                                            ISO standards,sterile in peel open pack.</td>
                                                        <!-- pack size -->
                                                        <td>1 x 1</td>
                                                        <!-- box size -->
                                                        <td>1 x 10</td>
                                                    </tr>

                                                    <!-- product fifteen -->
                                                    <tr>
                                                        <!-- sr number -->
                                                        <td>13800204</td>
                                                        <!-- product name -->
                                                        <td>Abercrom <br>cuffed<br> Endotracheal Tube<br> 6.5mm</td>
                                                        <!-- specification -->
                                                        <td style="white-space: normal;"> Murphy Eye, oral & nasal, with
                                                            low pressure cuff and a pilot balloon to indicate cuff
                                                            inflation, size 6.5mm ID, made of implant quality PVC, clear
                                                            with radio opaque marker through the length, a black
                                                            intubation depth marker and a 15mm connector confirming to
                                                            ISO standards,sterile in peel open pack.</td>
                                                        <!-- pack size -->
                                                        <td>1 x 1</td>
                                                        <!-- box size -->
                                                        <td>1 x 10</td>
                                                    </tr>

                                                    <!-- product sixteen -->
                                                    <tr>
                                                        <!-- sr number -->
                                                        <td>13800205</td>
                                                        <!-- product name -->
                                                        <td>Abercrom <br>cuffed<br> Endotracheal Tube<br> 7.0mm</td>
                                                        <!-- specification -->
                                                        <td style="white-space: normal;"> Murphy Eye, oral & nasal, with
                                                            low pressure cuff and a pilot balloon to indicate cuff
                                                            inflation, size 7.0mm ID, made of implant quality PVC, clear
                                                            with radio opaque marker through the length, a black
                                                            intubation depth marker and a 15mm connector confirming to
                                                            ISO standards,sterile in peel open pack.</td>
                                                        <!-- pack size -->
                                                        <td>1 x 1</td>
                                                        <!-- box size -->
                                                        <td>1 x 10</td>
                                                    </tr>

                                                    <!-- product seventeen -->
                                                    <tr>
                                                        <!-- sr number -->
                                                        <td>13800206</td>
                                                        <!-- product name -->
                                                        <td>Abercrom <br>cuffed<br> Endotracheal Tube<br> 7.5mm</td>
                                                        <!-- specification -->
                                                        <td style="white-space: normal;">Cuffed Endotracheal Tubes
                                                            Murphy Eye, oral & nasal, with low pressure cuff and a pilot
                                                            balloon to indicate cuff
                                                            inflation, size 7.5mm ID, made of implant quality PVC, clear
                                                            with radio opaque marker through the length, a black
                                                            intubation depth marker and a 15mm connector confirming to
                                                            ISO standards,sterile in peel open pack.</td>
                                                        <!-- pack size -->
                                                        <td>1 x 1</td>
                                                        <!-- box size -->
                                                        <td>1 x 10</td>
                                                    </tr>

                                                    <!-- product eighteen -->
                                                    <tr>
                                                        <!-- sr number -->
                                                        <td>13800207</td>
                                                        <!-- product name -->
                                                        <td>Abercrom <br>cuffed<br> Endotracheal Tube<br> 8.0mm</td>
                                                        <!-- specification -->
                                                        <td style="white-space: normal;">Cuffed Endotracheal Tubes
                                                            Murphy Eye, oral & nasal, with low pressure cuff and a pilot
                                                            balloon to indicate cuff
                                                            inflation, size 8.0mm ID, made of implant quality PVC, clear
                                                            with radio opaque marker through the length, a black
                                                            intubation depth marker and a 15mm connector confirming to
                                                            ISO standards,sterile in peel open pack.</td>
                                                        <!-- pack size -->
                                                        <td>1 x 1</td>
                                                        <!-- box size -->
                                                        <td>1 x 10</td>
                                                    </tr>

                                                    <!-- product nineteen -->
                                                    <tr>
                                                        <!-- sr number -->
                                                        <td>13800208</td>
                                                        <!-- product name -->
                                                        <td>Abercrom <br>cuffed<br> Endotracheal Tube<br> 8.5mm</td>
                                                        <!-- specification -->
                                                        <td style="white-space: normal;">Cuffed Endotracheal Tubes
                                                            Murphy Eye, oral & nasal, with low pressure cuff and a pilot
                                                            balloon to indicate cuff
                                                            inflation, size 8.5mm ID, made of implant quality PVC, clear
                                                            with radio opaque marker through the length, a black
                                                            intubation depth marker and a 15mm connector confirming to
                                                            ISO standards,sterile in peel open pack.</td>
                                                        <!-- pack size -->
                                                        <td>1 x 1</td>
                                                        <!-- box size -->
                                                        <td>1 x 10</td>
                                                    </tr>

                                                    <!-- product twenty -->
                                                    <tr>
                                                        <!-- sr number -->
                                                        <td>13800209</td>
                                                        <!-- product name -->
                                                        <td>Abercrom <br>cuffed<br> Endotracheal Tube<br> 9.0mm</td>
                                                        <!-- specification -->
                                                        <td style="white-space: normal;">Endotracheal Tubes Murphy Eye,
                                                            oral & nasal, with low pressure cuff and a pilot balloon to
                                                            indicate cuff inflation, size 9.0mm ID, made of implant
                                                            quality PVC, clear with radio opaque marker through the
                                                            length, a black intubation depth marker and a 15mm connector
                                                            confirming to ISO standards. Sterile. Each tube
                                                            packed individually in a peel open pouch and labelled
                                                            accordingly.</td>
                                                        <!-- pack size -->
                                                        <td>1 x 1</td>
                                                        <!-- box size -->
                                                        <td>1 x 10</td>
                                                    </tr>

                                                    <!-- product twentyone -->
                                                    <tr>
                                                        <!-- sr number -->
                                                        <td>13800302</td>
                                                        <!-- product name -->
                                                        <td>Abercrom Steel<br>Un-cuffed<br>Nylon Reinforced<br>3.5mm
                                                        </td>
                                                        <!-- specification -->
                                                        <td style="white-space: normal;">Un-cuffed Endotracheal Tubes
                                                            Nylon/Steel Reinforced, for oral and nasal use, size 3.5mm
                                                            ID, made of implant quality latex with a 15mm connector
                                                            conforming to ISO standards,sterile in peel open pack.</td>
                                                        <!-- pack size -->
                                                        <td>1 x 1</td>
                                                        <!-- box size -->
                                                        <td>1 x 10</td>
                                                    </tr>

                                                    <!-- product twentytwo-->
                                                    <tr>
                                                        <!-- sr number -->
                                                        <td>13800303</td>
                                                        <!-- product name -->
                                                        <td>Abercrom Steel<br>Un-cuffed<br>Nylon Reinforced<br>4.0mm
                                                        </td>
                                                        <!-- specification -->
                                                        <td style="white-space: normal;">Un-cuffed Endotracheal Tubes
                                                            Nylon/Steel Reinforced, for oral and nasal use, size 4.0mm
                                                            ID, made of implant quality latex with a 15mm connector
                                                            conforming to ISO standards,sterile in peel open pack.</td>
                                                        <!-- pack size -->
                                                        <td>1 x 1</td>
                                                        <!-- box size -->
                                                        <td>1 x 10</td>
                                                    </tr>

                                                    <!-- product twentythree -->
                                                    <tr>
                                                        <!-- sr number -->
                                                        <td>13800304</td>
                                                        <!-- product name -->
                                                        <td>Abercrom Steel<br>Un-cuffed<br>Nylon Reinforced<br>4.5mm
                                                        </td>
                                                        <!-- specification -->
                                                        <td style="white-space: normal;">Un-cuffed Endotracheal Tubes
                                                            Nylon/Steel Reinforced, for oral and nasal use, size 4.5mm
                                                            ID, made of implant quality latex with a 15mm connector
                                                            conforming to ISO standards,sterile in peel open pack.</td>
                                                        <!-- pack size -->
                                                        <td>1 x 1</td>
                                                        <!-- box size -->
                                                        <td>1 x 10</td>
                                                    </tr>

                                                    <!-- product twentyfour -->
                                                    <tr>
                                                        <!-- sr number -->
                                                        <td>13800305</td>
                                                        <!-- product name -->
                                                        <td>Abercrom Steel<br>cuffed<br>Nylon Reinforced<br>5.0mm</td>
                                                        <!-- specification -->
                                                        <td style="white-space: normal;">Endotracheal Tubes Nylon
                                                            Reinforced, oral & nasal, with cuff and a pilot balloon to
                                                            indicate cuff inflation, size 5.0mm ID, made of implant
                                                            quality latex with a 15mm connector confirming to ISO
                                                            standards. Sterile. Each tube packed individually in a peel
                                                            open pouch and labelled accordingly.</td>
                                                        <!-- pack size -->
                                                        <td>1 x 1</td>
                                                        <!-- box size -->
                                                        <td>1 x 10</td>
                                                    </tr>

                                                    <!-- product twentyfive -->
                                                    <tr>
                                                        <!-- sr number -->
                                                        <td>13800306</td>
                                                        <!-- product name -->
                                                        <td>Abercrom Steel<br>Un-cuffed<br>Nylon Reinforced<br>5.5mm
                                                        </td>
                                                        <!-- specification -->
                                                        <td style="white-space: normal;">Un-cuffed Endotracheal Tubes
                                                            Nylon/Steel Reinforced, for oral and nasal use, without
                                                            cuff, size 5.5mm ID, made of
                                                            implant quality latex with a 15mm connector conforming to
                                                            ISO standards,sterile in peel open pack.</td>
                                                        <!-- pack size -->
                                                        <td>1 x 1</td>
                                                        <!-- box size -->
                                                        <td>1 x 10</td>
                                                    </tr>

                                                    <!-- product twentysix -->
                                                    <tr>
                                                        <!-- sr number -->
                                                        <td>13800307</td>
                                                        <!-- product name -->
                                                        <td>Abercrom Steel<br>Un-cuffed<br>Nylon Reinforced<br>6.0mm
                                                        </td>
                                                        <!-- specification -->
                                                        <td style="white-space: normal;">Un-cuffed Endotracheal Tubes
                                                            Nylon/Steel Reinforced, for oral and nasal use, size 6.0mm
                                                            ID, made of implant quality latex with a 15mm connector
                                                            conforming to ISO standards,sterile in peel open pack.</td>
                                                        <!-- pack size -->
                                                        <td>1 x 1</td>
                                                        <!-- box size -->
                                                        <td>1 x 10</td>
                                                    </tr>

                                                    <!-- product twentyseven -->
                                                    <tr>
                                                        <!-- sr number -->
                                                        <td>13800308</td>
                                                        <!-- product name -->
                                                        <td>Abercrom Steel<br>cuffed<br>Nylon Reinforced<br>6.5mm</td>
                                                        <!-- specification -->
                                                        <td style="white-space: normal;">Cuffed Endotracheal Tubes
                                                            Nylon/Steel Reinforced, for oral and nasal use, size 6.5mm
                                                            ID, made of implant quality latex with a 15mm connector
                                                            conforming to ISO standards,sterile in peel open pack.</td>
                                                        <!-- pack size -->
                                                        <td>1 x 1</td>
                                                        <!-- box size -->
                                                        <td>1 x 10</td>
                                                    </tr>

                                                    <!-- product twentyeight -->
                                                    <tr>
                                                        <!-- sr number -->
                                                        <td>13800309</td>
                                                        <!-- product name -->
                                                        <td>Abercrom Steel<br>cuffed<br>Nylon Reinforced<br>7.0mm</td>
                                                        <!-- specification -->
                                                        <td style="white-space: normal;">Cuffed Endotracheal Tubes
                                                            Nylon/Steel Reinforced, for oral and nasal use, size 7.0mm
                                                            ID, made of implant quality latex with a 15mm connector
                                                            conforming to ISO standards,sterile in peel open pack.</td>
                                                        <!-- pack size -->
                                                        <td>1 x 1</td>
                                                        <!-- box size -->
                                                        <td>1 x 10</td>
                                                    </tr>

                                                    <!-- product twentynine -->
                                                    <tr>
                                                        <!-- sr number -->
                                                        <td>13800310</td>
                                                        <!-- product name -->
                                                        <td>Abercrom Steel<br>cuffed<br>Nylon Reinforced<br>7.5mm</td>
                                                        <!-- specification -->
                                                        <td style="white-space: normal;">Cuffed Endotracheal Tubes
                                                            Nylon/Steel Reinforced, for oral and nasal use, size 7.5mm
                                                            ID, made of implant quality latex with a 15mm connector
                                                            conforming to ISO standards,sterile in peel open pack.</td>
                                                        <!-- pack size -->
                                                        <td>1 x 1</td>
                                                        <!-- box size -->
                                                        <td>1 x 10</td>
                                                    </tr>

                                                    <!-- product thirty-->
                                                    <tr>
                                                        <!-- sr number -->
                                                        <td>13800311</td>
                                                        <!-- product name -->
                                                        <td>Abercrom Steel<br>cuffed<br>Nylon Reinforced<br>8.0mm</td>
                                                        <!-- specification -->
                                                        <td style="white-space: normal;">Cuffed Endotracheal Tubes
                                                            Nylon/Steel Reinforced, for oral and nasal use, size 8.0mm
                                                            ID, made of implant quality latex with a 15mm connector
                                                            conforming to ISO standards,sterile in peel open pack.</td>
                                                        <!-- pack size -->
                                                        <td>1 x 1</td>
                                                        <!-- box size -->
                                                        <td>1 x 10</td>
                                                    </tr>

                                                    <!-- product thirtyone -->
                                                    <tr>
                                                        <!-- sr number -->
                                                        <td>13800312</td>
                                                        <!-- product name -->
                                                        <td>Abercrom Steel<br>cuffed<br>Nylon Reinforced<br>8.5mm</td>
                                                        <!-- specification -->
                                                        <td style="white-space: normal;">Cuffed Endotracheal Tubes
                                                            Nylon/Steel Reinforced, for oral and nasal use, size 8.5mm
                                                            ID, made of implant quality latex with a 15mm connector
                                                            conforming to ISO standards,sterile in peel open pack.</td>
                                                        <!-- pack size -->
                                                        <td>1 x 1</td>
                                                        <!-- box size -->
                                                        <td>1 x 10</td>
                                                    </tr>

                                                    <!-- product thirtytwo -->
                                                    <tr>
                                                        <!-- sr number -->
                                                        <td>13800314</td>
                                                        <!-- product name -->
                                                        <td>Abercrom Steel<br>Un-cuffed<br>Nylon Reinforced<br>6.5mm
                                                        </td>
                                                        <!-- specification -->
                                                        <td style="white-space: normal;">Un -Cuffed Endotracheal Tubes
                                                            Nylon/Steel Reinforced, for oral and nasal use, size 6.5mm
                                                            ID, made of implant quality latex with a 15mm connector
                                                            conforming to ISO standards,sterile in peel open pack.</td>
                                                        <!-- pack size -->
                                                        <td>1 x 1</td>
                                                        <!-- box size -->
                                                        <td>1 x 10</td>
                                                    </tr>

                                                    <!-- product thirtythree -->
                                                    <tr>
                                                        <!-- sr number -->
                                                        <td>13800315</td>
                                                        <!-- product name -->
                                                        <td>Abercrom Steel<br>Un-cuffed<br>Nylon Reinforced<br>7.5mm
                                                        </td>
                                                        <!-- specification -->
                                                        <td style="white-space: normal;">Un -Cuffed Endotracheal Tubes
                                                            Nylon/Steel Reinforced, for oral and nasal use, size 7.5mm
                                                            ID, made of implant quality latex with a 15mm connector
                                                            conforming to ISO standards,sterile in peel open pack.</td>
                                                        <!-- pack size -->
                                                        <td>1 x 1</td>
                                                        <!-- box size -->
                                                        <td>1 x 10</td>
                                                    </tr>

                                                    <!-- product thirtyfour -->
                                                    <tr>
                                                        <!-- sr number -->
                                                        <td>13800316</td>
                                                        <!-- product name -->
                                                        <td>Abercrom Steel<br>Un-cuffed<br>Nylon Reinforced<br>8.0mm
                                                        </td>
                                                        <!-- specification -->
                                                        <td style="white-space: normal;">Un-Cuffed Endotracheal Tubes
                                                            Nylon/Steel Reinforced, for oral and nasal use, size 8.0mm
                                                            ID, made of implant quality latex with a 15mm connector
                                                            conforming to ISO standards,sterile in peel open pack.</td>
                                                        <!-- pack size -->
                                                        <td>1 x 1</td>
                                                        <!-- box size -->
                                                        <td>1 x 10</td>
                                                    </tr>

                                                    <!-- product thirtyfive -->
                                                    <tr>
                                                        <!-- sr number -->
                                                        <td>13800316</td>
                                                        <!-- product name -->
                                                        <td>Abercrom Steel<br>Un-cuffed<br>Nylon Reinforced<br>8.5mm
                                                        </td>
                                                        <!-- specification -->
                                                        <td style="white-space: normal;">Un-Cuffed Endotracheal Tubes
                                                            Nylon/Steel Reinforced, for oral and nasal use, size 8.5mm
                                                            ID, made of implant quality latex with a 15mm connector
                                                            conforming to ISO standards,sterile in peel open pack.</td>
                                                        <!-- pack size -->
                                                        <td>1 x 1</td>
                                                        <!-- box size -->
                                                        <td>1 x 10</td>
                                                    </tr>
                                                </table>
                                            </div>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>



                    <!-- surgical cellulose roll -->
                    <div class="tab-pane fade" id="pills-cellulose" aria-labelledby="pills-cellulose-tab">
                        <div class="row">
                            <div class="col-12 col-md-5 mb-4 mb-md-0 text-center">
                                <img id="rollImg" src="{{ url('img/frontend/kayak_products/roll1.png') }}" alt=""
                                    class="img-fluid main-image3 zoom-img">
                            </div>
                            <div class="col-12 col-md-7">
                                <h5 class="fw-bold text-center text-md-left">Multilayer Surgical Cellulose Roll</h5>
                                <hr>

                                <div
                                    class="row multiple3 mx-0 mt-4 mb-4 justify-content-center justify-content-md-start">
                                    <div class="col-3 col-md-3 text-center me-1">
                                        <a href="#" onclick="rollOne()" >
                                        <img src="{{ url('img/frontend/kayak_products/roll1.png') }}" id="rollSubOne" alt=""
                                            class="img-fluid"></a>
                                    </div>
                                    <div class="col-3 col-md-3 text-center me-1">
                                        <a href="#" onclick="rollTwo()">
                                        <img src="{{ url('img/frontend/kayak_products/roll2.png') }}" id="rollSubTwo" alt=""
                                            class="img-fluid"></a>
                                    </div>
                                    <!-- <div class="col-3 col-md-3 text-center me-1">
                                            <img src="{{ url('img/frontend/kayak_products/roll.png') }}" id="image9" alt="" class="img-fluid">
                                        </div> -->
                                </div>



                            </div>
                        </div>
                        <div class="row">
                            <div class="content-wrapper">
                                <div class="row">
                                    <div class="spec-row">
                                        <span class="spec">SR Number:</span>
                                        <p>14500701</p>
                                    </div>
                                    <div class="spec-row">
                                        <span class="spec">Specification: </span>
                                        <p>Cellulose Wadding B.P<br>
                                            Cellulose Wadding Tissue B.P
                                        </p>
                                    </div>

                                    <div class="spec-row mobile-size-row">
                                        <span class="spec">Size:</span>
                                        <p class="size-divider">500g</p>
                                        <span class="spec">Pack Size:</span>
                                        <p class="size-divider">1 x 1</p>
                                        <span class="spec">Carton Size: </span>
                                        <p class="size-divider"> 1 x 24</p>
                                    </div>

                                    <div class="spec-row">
                                        <div class="inquire">
                                            <button class="btn rounded-pill text-white px-5 py-2" data-bs-toggle="modal"
                                                data-bs-target="#inquire">Inquire
                                                Now</button>
                                        </div>
                                    </div>

                                </div>
                            </div>
                        </div>
                    </div>

                    <!-- surgical aprons -->
                    <div class="tab-pane fade" id="pills-apron" aria-labelledby="pills-surgical-tab">
                        <div class="row">
                            <div class="col-12 col-md-5 mb-4 mb-md-0 text-center">
                                <img id="apronImg"
                                    src="{{ url('img/frontend/kayak_products/surgical-aprons/surgical-apron.png') }}"
                                    alt="" class="img-fluid main-image5 zoom-img">
                            </div>
                            <div class="col-12 col-md-7">

                                <h5 class="fw-bold text-center text-md-left">Surgical Aprons</h5>
                                <hr>

                                <div
                                    class="row multiple5 mx-0 mt-4 mb-4 justify-content-center justify-content-md-start">
                                    <div class="col-3 col-md-3 text-center me-1">
                                        <a href="#" onclick="apronSubOne()">
                                            <img id="apronSubImgOne" src="" id="image13" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="col-3 col-md-3 text-center me-1">
                                        <a href="#" onclick="apronSubTwo()">
                                            <img id="apronSubImgTwo" src="" id="image14" alt="" class="img-fluid"></a>
                                    </div>
                                    <div class="col-3 col-md-3 text-center me-1">
                                        <a href="#" onclick="apronSubThree()">
                                            <img src="" id="apronSubImgThree" alt="" class="img-fluid"></a>
                                    </div>
                                </div>




                            </div>

                            <div class="product-varients-wrapper">
                                <h5 style="margin-right: 15px;">Apron Products :- </h5>
                                <button onclick="apronOne()" class="product-varient-btn-apron active">Surgical
                                    Apron</button>
                                <button onclick="apronTwo()" class="product-varient-btn-apron">Wear-on
                                    (Sterille)</button>
                            </div>
                            <div class="row">
                                <div class="content-wrapper">
                                    <div class="row">
                                        <div class="spec-row">
                                            <span class="spec">SR Number:</span>
                                            <p id="apronSR">14800501</p>
                                        </div>
                                        <div class="spec-row">
                                            <span class="spec">Product:</span>
                                            <p id="apronProduct">Surgical Apron</p>
                                        </div>
                                        <div class="spec-row">
                                            <span class="spec">Specification: </span>
                                            <p id="apronSpec">Apron disposable, medical use, for neck to toe protection
                                                (Non
                                                Sterile)</p>
                                        </div>

                                        <div class="spec-row mobile-size-row">

                                            <span class="spec">Size:</span>
                                            <p id="apronSize" class="size-divider">152cm x 71cm<br>
                                                (Length x Width)</p>


                                            <span class="spec">Pack Size:</span>
                                            <p id="apronPkSize" class="size-divider">1 x 50</p>
                                            <span class="spec">Carton Size: </span>
                                            <p id="apronCarton" class="size-divider"> 50 x 10</p>


                                        </div>

                                        <div class="spec-row">
                                            <div class="inquire">
                                                <button class="btn rounded-pill text-white px-5 py-2"
                                                    data-bs-toggle="modal" data-bs-target="#inquire">Inquire
                                                    Now</button>
                                            </div>
                                        </div>

                                    </div>
                                </div>
                            </div>
                        </div>
                    </div>


                    <!-- spinal needles -->
                    <div class="tab-pane fade" id="pills-spinal" aria-labelledby="pills-spinal-tab">
                        <div class="row">
                            <div class="col-12 col-md-5 mb-4 mb-md-0 text-center">
                                <img id="spinalImg"
                                    src="{{ url('img/frontend/kayak_products/spinal_needles/needles.jpg') }}" alt=""
                                    class="img-fluid main-image5 zoom-img">
                            </div>
                            <div class="col-12 col-md-7">

                                <h5 class="fw-bold text-center text-md-left">Spinal Needles</h5>
                                <hr>

                                <div
                                    class="row multiple5 mx-0 mt-4 mb-4 justify-content-center justify-content-md-start">
                                    <div class="col-3 col-md-3 text-center me-1">
                                        <a href="#" onclick="spinalSubOne()">
                                            <img src="{{ url('img/frontend/kayak_products/spinal_needles/needles.jpg') }}"
                                                id="image13" alt="" class="img-fluid">
                                        </a>
                                    </div>
                                    <div class="col-3 col-md-3 text-center me-1">
                                        <a href="#" onclick="spinalSubTwo()">
                                            <img src="{{ url('img/frontend/kayak_products/spinal_needles/spinal needle2.png') }}"
                                                id="image14" alt="" class="img-fluid"></a>
                                    </div>
                                </div>


                                <div id="popup1" class="overlay">
                                    <div class="popup">
                                        <h2>Spinal Needles</h2>
                                        <a class="close" href="#">&times;</a>
                                        <div class="content">
                                            <table class="table-popup" border="1" cellpadding="15px">
                                                <tr>
                                                    <th>SR Number</th>
                                                    <th>Product Name</th>
                                                    <th>Specification</th>
                                                    <th>Pack Size</th>
                                                    <th>Box Size</th>
                                                </tr>
                                                <!-- product one -->
                                                <tr>
                                                    <td>13704700</td>
                                                    <td>Heinrich Spinal Needle</td>
                                                    <td style="white-space: normal;">Spinal Needle for lumbar
                                                        puncture,size
                                                        18G bevelled point,with stilette,luer lock fitting,90mm
                                                        length,sterile</td>
                                                    <td>1 x 1</td>
                                                    <td>1 x 25</td>
                                                </tr>

                                                <!-- product two -->
                                                <tr>
                                                    <td>13704701</td>
                                                    <td>Heinrich Spinal Needle</td>
                                                    <td style="white-space: normal;">Spinal Needle for lumbar
                                                        puncture,size
                                                        20G bevelled point,with stilette,luer lock fitting,90mm
                                                        length,sterile.</td>
                                                    <td>1 x 1</td>
                                                    <td>1 x 25</td>
                                                </tr>
                                                <!-- product three -->
                                                <tr>
                                                    <td>13704702</td>
                                                    <td>Heinrich Spinal Needle</td>
                                                    <td style="white-space: normal;">Spinal Needle for lumbar
                                                        puncture, size
                                                        23G, bevelled point, with stilette, luer lock fitting, 90mm
                                                        length,
                                                        sterile.</td>
                                                    <td>1 x 1</td>
                                                    <td>1 x 25</td>
                                                </tr>

                                                <!-- product four -->
                                                <tr>
                                                    <td>13704800</td>
                                                    <td>Heinrich Spinal Needle</td>
                                                    <td style="white-space: normal;">Spinal Needle for lumbar
                                                        puncture /
                                                        FNAC,size 22G bevelled point,with stilette,luer lock
                                                        fitting,90mm
                                                        length,sterile.</td>
                                                    <td>1 x 1</td>
                                                    <td>1 x 25</td>
                                                </tr>
                                                <!-- product five -->
                                                <tr>
                                                    <td>13704900</td>
                                                    <td>Heinrich Spinal Needle</td>
                                                    <td style="white-space: normal;">Spinal Needle for lumbar
                                                        puncture,size
                                                        20G bevelled point,with stilette,luer lock fitting,90mm
                                                        length,sterile.</td>
                                                    <td>1 x 1</td>
                                                    <td>1 x 25</td>
                                                </tr>

                                                <!-- product six -->
                                                <tr>
                                                    <td>13705000</td>
                                                    <td>Heinrich Spinal Needle</td>
                                                    <td style="white-space: normal;">Spinal Needle for lumbar
                                                        puncture /
                                                        myelography,size 23G,pencil point,with stilette,luer lock
                                                        fitting,90mm length,sterile.</td>
                                                    <td>1 x 1</td>
                                                    <td>1 x 25</td>
                                                </tr>
                                                <!-- product seven -->
                                                <tr>
                                                    <td>13804400</td>
                                                    <td>Heinrich Spinal Needle</td>
                                                    <td style="white-space: normal;">Pencil Point Spinal Needle,size
                                                        27G
                                                        (0.40-ID) with 88mm effective length,103mm total length,with
                                                        a
                                                        stylet & grip molded,clear transparent hub for quick & easy
                                                        visibility of CSF flashback.
                                                        Introducer needle 22G (0.75mm-ID),35mm total
                                                        length,.sterile. Each
                                                        needle set packed indiidually in a peel open pack.</td>
                                                    <td>1 x 1</td>
                                                    <td>1 x 25</td>
                                                </tr>
                                                <!-- product eight -->
                                                <tr>
                                                    <td>13804401</td>
                                                    <td>Heinrich Spinal Needle</td>
                                                    <td style="white-space: normal;">Pencil Point Spinal
                                                        Needles,with stylet
                                                        and grip moulded transparent hub for easy visualisation of
                                                        CSF back
                                                        flow facilitating accurate puncture,size (27G) 0.5mm ID x
                                                        50mm
                                                        length,without guide needle (20G).Sterile,each needle packed
                                                        individually in a peel open pack.</td>
                                                    <td>1 x 1</td>
                                                    <td>1 x 25</td>
                                                </tr>
                                                <!-- product nine -->
                                                <tr>
                                                    <td>13804402</td>
                                                    <td>Heinrich Spinal Needle</td>
                                                    <td style="white-space: normal;">Pencil Point Spinal Needle,
                                                        extra long:
                                                        size 25G
                                                        (0.5mm ID), 110mm - 130mm length, with stylet and grip
                                                        moulded
                                                        transparent hub for easy visualisation of CSF back flow
                                                        facilitating
                                                        accurate puncture. Guide Needle: 20G (0.9mm ID), 35mm - 38mm
                                                        length,
                                                        sterile. </td>
                                                    <td>1 x 1</td>
                                                    <td>1 x 25</td>
                                                </tr>

                                                <!-- product ten -->
                                                <tr>
                                                    <td>13804500</td>
                                                    <td>Heinrich Spinal Needle</td>
                                                    <td style="white-space: normal;">Pencil Point Spinal Needle,with
                                                        stylet
                                                        and grip moulded transparent hub for easy visualisation of
                                                        CSF back
                                                        flow facilitating accurate puncture,size (25G) 0.5mm x 50mm
                                                        length,
                                                        together with guide needle (20G) 0.9mm ID x 35mm-38mm
                                                        length,sterile.Each needle set packed individually in a peel
                                                        open
                                                        pack.</td>
                                                    <td>1 x 1</td>
                                                    <td>1 x 25</td>
                                                </tr>
                                                <!-- product eleven -->
                                                <tr>
                                                    <td>13804501</td>
                                                    <td>Heinrich Spinal Needle</td>
                                                    <td style="white-space: normal;">Pencil Point Spinal Needle,with
                                                        stylet
                                                        and grip moulded transparent hub for easy visualisation of
                                                        CSF back
                                                        flow facilitating accurate puncture,size (25G)0.5mm ID x
                                                        88mm
                                                        length, together with guide needle (20G) 0.9mm ID x
                                                        35mm-38mm
                                                        length,sterile.Each needle set packed individually in a peel
                                                        open
                                                        pack.</td>
                                                    <td>1 x 1</td>
                                                    <td>1 x 25</td>
                                                </tr>
                                                <!-- product twelve -->
                                                <tr>
                                                    <td>13804502</td>
                                                    <td>Heinrich Spinal Needle</td>
                                                    <td style="white-space: normal;">Pencil Point Spinal Needle,with
                                                        stylet
                                                        and grip moulded transparent hub for easy visualisation of
                                                        CSF back
                                                        flow facilitating accurate puncture,size (25G)0.5mm ID x
                                                        103mm
                                                        length, together with guide needle (20G) 0.9mm ID x
                                                        35mm-38mm
                                                        length,sterile.Each needle set packed individually in a peel
                                                        open
                                                        pack.</td>
                                                    <td>1 x 1</td>
                                                    <td>1 x 25</td>
                                                </tr>
                                                <!-- product thirteen -->
                                                <tr>
                                                    <td>13805002</td>
                                                    <td>Heinrich Spinal Needle</td>
                                                    <td style="white-space: normal;">Pencil Point Spinal Needle ,
                                                        size 22G
                                                        (0.7mm ID) 88mm/90mm length, with stylet and grip moulded
                                                        transparent hub for
                                                        easy visualisation of CSF back flow facilitating accurate
                                                        puncture.
                                                        Guide Needle (20G) 0.9mm ID x 35mm - 38mm length, sterile.
                                                    </td>
                                                    <td>1 x 1</td>
                                                    <td>1 x 25</td>
                                                </tr>
                                            </table>
                                        </div>
                                    </div>
                                </div>
                            </div>

                            <div class="row">
                                <div class="content-wrapper">
                                    <div class="row">
                                        <div class="spec-img-row">
                                            <span class="spec">Specification: </span>
                                            <a class="" href="#popup1"><img class="spec-img"
                                                    src="{{ url('img/frontend/kayak_products/endo-tubes/endo-table.png') }}"
                                                    alt=""></a>
                                            <div class="btn-wrapper">
                                                <a class="btn rounded-pill text-white px-5 py-2 pop-btn"
                                                    href="#popup1">View
                                                    Details</a>
                                            </div>
                                        </div>
                                        <div class="spec-row">
                                            <div class="inquire">
                                                <button class="btn rounded-pill text-white px-5 py-2"
                                                    data-bs-toggle="modal" data-bs-target="#inquire">Inquire
                                                    Now</button>
                                            </div>
                                        </div>

                                    </div>
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

@endif

@endsection

@push('after-scripts')



<script>
//MASK IMAGE CHANGER
var maskNumber = 1;

function masksOne() {

    maskNumber = 1;

    var element = document.getElementsByClassName("product-varient-btn")[0];
    element.classList.add("active");
    var element = document.getElementsByClassName("product-varient-btn")[1];
    element.classList.remove("active");
    document.getElementById("maskProduct").innerHTML = respiratorMasks[0].productName;
    document.getElementById("maskSpec").innerHTML = respiratorMasks[0].specification;
    document.getElementById("maskFil").innerHTML = respiratorMasks[0].filtrationRate;
    document.getElementById("maskSize").innerHTML = respiratorMasks[0].packSize;
    document.getElementById("packSize").innerHTML = respiratorMasks[0].boxSize;
    document.getElementById("cartonSize").innerHTML = respiratorMasks[0].cartonSize;
    document.getElementById("maskImg").src =
        "{{ url('img/frontend/kayak_products/respiratory-masks/breath-right/06.jpg') }}";
    document.getElementById("maskSubImgOne").src =
        "{{ url('img/frontend/kayak_products/respiratory-masks/breath-right/06.jpg') }}";
    document.getElementById("maskSubImgTwo").src =
        "{{ url('img/frontend/kayak_products/respiratory-masks/breath-right/N95 Masks2.jpg') }}";
}

function masksTwo() {

    maskNumber = 2;

    var element = document.getElementsByClassName("product-varient-btn")[1];
    element.classList.add("active");
    var element = document.getElementsByClassName("product-varient-btn")[0];
    element.classList.remove("active");
    document.getElementById("maskProduct").innerHTML = respiratorMasks[1].productName;
    document.getElementById("maskSpec").innerHTML = respiratorMasks[1].specification;
    document.getElementById("maskFil").innerHTML = respiratorMasks[1].filtrationRate;
    document.getElementById("maskSize").innerHTML = respiratorMasks[1].packSize;
    document.getElementById("packSize").innerHTML = respiratorMasks[1].boxSize;
    document.getElementById("cartonSize").innerHTML = respiratorMasks[1].cartonSize;
    document.getElementById("maskImg").src =
        "{{ url('img/frontend/kayak_products/respiratory-masks/smile/kn95-1.png') }}";
    document.getElementById("maskSubImgOne").src =
        "{{ url('img/frontend/kayak_products/respiratory-masks/smile/kn95-1.png') }}";
    document.getElementById("maskSubImgTwo").src =
        "{{ url('img/frontend/kayak_products/respiratory-masks/smile/kn95-2.png') }}";
}

function maskSubOne() {

    if (maskNumber == 1) {
        //mask one sub image changer
        document.getElementById("maskImg").src =
            "{{ url('img/frontend/kayak_products/respiratory-masks/breath-right/06.jpg') }}";
    } else {
        document.getElementById("maskImg").src =
            "{{ url('img/frontend/kayak_products/respiratory-masks/smile/kn95-1.png') }}";
    }

}

function maskSubTwo() {

    if (maskNumber == 1) {
        document.getElementById("maskImg").src =
            "{{ url('img/frontend/kayak_products/respiratory-masks/breath-right/N95 Masks2.jpg') }}";
    } else {
        document.getElementById("maskImg").src =
            "{{ url('img/frontend/kayak_products/respiratory-masks/smile/kn95-2.png') }}";
    }

}

//ENDOTRACHEAL TUBES IMAGE CHANGER
function endoSubOne() {
    document.getElementById("endoImg").src = "{{ url('img/frontend/kayak_products/endo-tubes/abercom1.jpg') }}";
}

function endoSubTwo() {
    document.getElementById("endoImg").src = "{{ url('img/frontend/kayak_products/endo-tubes/abercom3.png') }}";
}

function endoSubThree() {
    document.getElementById("endoImg").src = "{{ url('img/frontend/kayak_products/endo-tubes/abercom2.png') }}";
}


//APRON IMAGE CHANGER
var apronNumber = 1;

function apronOne() {

    apronNumber = 1;

    var element = document.getElementsByClassName("product-varient-btn-apron")[0];
    element.classList.add("active");
    var element = document.getElementsByClassName("product-varient-btn-apron")[1];
    element.classList.remove("active");

    document.getElementById("apronSR").innerHTML = surgicalAprons[0].srNumber;
    document.getElementById("apronProduct").innerHTML = surgicalAprons[0].productName;
    document.getElementById("apronSpec").innerHTML = surgicalAprons[0].specification;
    document.getElementById("apronSize").innerHTML = surgicalAprons[0].size;
    document.getElementById("apronPkSize").innerHTML = surgicalAprons[0].packSize;
    document.getElementById("apronCarton").innerHTML = surgicalAprons[0].cartonSize;
    document.getElementById("apronImg").src =
        "{{ url('img/frontend/kayak_products/surgical-aprons/surgical-apron.png') }}";
    document.getElementById("apronSubImgOne").src = " ";
    document.getElementById("apronSubImgTwo").src = " ";
    document.getElementById("apronSubImgThree").src = " ";
}

function apronTwo() {

    apronNumber = 2;

    var element = document.getElementsByClassName("product-varient-btn-apron")[1];
    element.classList.add("active");
    var element = document.getElementsByClassName("product-varient-btn-apron")[0];
    element.classList.remove("active");
    document.getElementById("apronSR").innerHTML = surgicalAprons[1].srNumber;
    document.getElementById("apronProduct").innerHTML = surgicalAprons[1].productName;
    document.getElementById("apronSpec").innerHTML = surgicalAprons[1].specification;
    document.getElementById("apronSize").innerHTML = surgicalAprons[1].size;
    document.getElementById("apronPkSize").innerHTML = surgicalAprons[1].packSize;
    document.getElementById("apronCarton").innerHTML = surgicalAprons[1].cartonSize;
    document.getElementById("apronImg").src =
    "{{ url('img/frontend/kayak_products/surgical-aprons/wear-on-one.png') }}";
    document.getElementById("apronSubImgOne").src =
        "{{ url('img/frontend/kayak_products/surgical-aprons/wear-on-one.png') }}";
    document.getElementById("apronSubImgTwo").src =
        "{{ url('img/frontend/kayak_products/surgical-aprons/wear-on-two.png') }}";
    document.getElementById("apronSubImgThree").src =
        "{{ url('img/frontend/kayak_products/surgical-aprons/wear-on-three.png') }}";
}

function apronSubOne() {

    if (apronNumber == 1) {
        document.getElementById("apronImg").src =
            "{{ url('img/frontend/kayak_products/surgical-aprons/surgical-apron.png') }}";
    } else {

        document.getElementById("apronImg").src =
            "{{ url('img/frontend/kayak_products/surgical-aprons/wear-on-one.png') }}";
    }

}

function apronSubTwo() {

    if (apronNumber == 1) {
        //apron one haven't second image
        document.getElementById("apronImg").src = " ";
    } else {
        document.getElementById("apronImg").src =
            "{{ url('img/frontend/kayak_products/surgical-aprons/wear-on-two.png') }}";
    }

}

function apronSubThree() {

    if (apronNumber == 1) {
        //apron one haven't second image
        document.getElementById("apronImg").src = " ";
    } else {
        document.getElementById("apronImg").src =
            "{{ url('img/frontend/kayak_products/surgical-aprons/wear-on-three.png') }}";
    }

}

//ROLL

function rollOne() {
    document.getElementById("rollImg").src = "{{ url('img/frontend/kayak_products/roll1.png') }}";
}

function rollTwo() {
    document.getElementById("rollImg").src = "{{ url('img/frontend/kayak_products/roll2.png') }}";
}


//SPINAL NEEDLES IMAGE CHANGER
function spinalSubOne() {
    document.getElementById("spinalImg").src = "{{ url('img/frontend/kayak_products/spinal_needles/needles.jpg') }}";
}

function spinalSubTwo() {
    document.getElementById("spinalImg").src = "{{ url('img/frontend/kayak_products/spinal_needles/needles2.jpg') }}";
}
</script>

<script>
function activeRemover() {
    var element = document.getElementById("breath-right");
    element.classList.remove("active");
}
</script>

<!-- Product Thumbnail Slider -->
<script>
$('.thumbnail').on('click', function() {
    var clicked = $(this);
    var newSelection = clicked.data('big');
    var $img = $('.primary').css("background-image", "url(" + newSelection + ")");
    clicked.parent().find('.thumbnail').removeClass('selected');
    clicked.addClass('selected');
    $('.primary').empty().append($img.hide().fadeIn('slow'));
});
</script>



<script>
$('.kayak-products .nav-link').on('click', function() {

    $('.kayak-products .nav-link').each(function() {
        if ($(this).hasClass('active')) {

            $(this).find('i').addClass('rotate');
            $(this).addClass('active-kayak');

        } else {
            $(this).find('i').removeClass('rotate');
            $(this).removeClass('active-kayak');
        }
    });
});
</script>

<script>
$("#image1").click(function() {
    $("#main-image1").attr("src", "img/frontend/kayak_products/kn95-1.png");
});
$("#image2").click(function() {
    $("#main-image1").attr("src", "img/frontend/kayak_products/kn95-2.png");
});
// $("#image3").click(function(){
//     $("#main-image1").attr("src", "img/frontend/kayak_products/kn95-1.png");
// });        
</script>
<script>
$("#image4").click(function() {
    $("#main-image2").attr("src", "img/frontend/kayak_products/abercom1.jpg");
});
$("#image5").click(function() {
    $("#main-image2").attr("src", "img/frontend/kayak_products/abercom2.png");
});
$("#image6").click(function() {
    $("#main-image2").attr("src", "img/frontend/kayak_products/abercom3.png");
});
</script>
<script>
$("#image7").click(function() {
    $("#main-image3").attr("src", "img/frontend/kayak_products/roll1.png");
});
$("#image8").click(function() {
    $("#main-image3").attr("src", "img/frontend/kayak_products/roll2.png");
});
// $("#image9").click(function(){
//     $("#main-image3").attr("src", "img/frontend/kayak_products/roll.jpg");
// });
</script>
<script>
$("#image10").click(function() {
    $("#main-image4").attr("src", "img/frontend/kayak_products/Surgical Apron1.jpg");
});
$("#image11").click(function() {
    $("#main-image4").attr("src", "img/frontend/kayak_products/Surgical Apron2.jpg");
});
$("#image12").click(function() {
    $("#main-image4").attr("src", "img/frontend/kayak_products/Surgical Apron3.jpg");
});
</script>
<script>
$("#image13").click(function() {
    $("#main-image5").attr("src", "img/frontend/kayak_products/N95 Masks1.jpg");
});
$("#image14").click(function() {
    $("#main-image5").attr("src", "img/frontend/kayak_products/N95 Masks2.jpg");
});
$("#image15").click(function() {
    $("#main-image5").attr("src", "img/frontend/kayak_products/N95 Masks3.jpg");
});
</script>
<script>
$("#image16").click(function() {
    $("#main-image6").attr("src", "img/frontend/kayak_products/Spinal needle1.jpg");
});
$("#image17").click(function() {
    $("#main-image6").attr("src", "img/frontend/kayak_products/Spinal needle2.png");
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