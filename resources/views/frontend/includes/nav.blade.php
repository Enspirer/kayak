<nav class="navbar navbar-expand-lg navbar-light main-nav fixed-top" style="background-color: #010101;">
    <div class="container p-0">

        <img src="{{ url('img/frontend/logo.png') }}" alt="" class="img-fluid me-2" style="height: 4rem;">

        <a class="navbar-brand fw-bold" href="{{ route('frontend.index') }}" style="font-family: lora; font-size:1.5625rem; line-height:0.75; letter-spacing: 2px; color: #00B9FF;">KAYAK <br> <span style="font-family: lora; font-size:0.875rem; color: #FFFFFF">SURGI PHARMA</span></a>
        
        <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

        <div class="collapse navbar-collapse" id="navbarSupportedContent">
            <ul class="navbar-nav ms-auto">
                <li class="nav-item mx-3">
                    <a class="nav-link text-white active" aria-current="page" href="{{ route('frontend.index') }}">Home</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-white" href="#">The Company</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-white" href="#">Products</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-white" href="#">News</a>
                </li>
                <li class="nav-item mx-3">
                    <a class="nav-link text-white" href="#">Contact Us</a>
                </li>
            </ul>
        </div>
    </div>
</nav>