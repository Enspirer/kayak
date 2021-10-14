<div class="fixed-top">
    <div class="container-fluid py-2 top-nav" style="background-color: white;">
        <div class="container">
            <div class="row justify-content-between">
                <div class="col-12 text-center col-md-6 text-md-left">
                    <p>Email : info@kayak.com</p>
                </div>

                <div class="col-12 text-center col-md-6 text-md-right">
                    <p>Tel : +94 11 22 22944</p>
                </div>
            </div>
        </div>
    </div>




    <nav class="navbar navbar-expand-lg navbar-dark main-nav" style="background-color: #010101;">
        <div class="container p-0">

            <a href=""><img src="{{ url('img/frontend/logo.png') }}" alt="" class="img-fluid me-2" style="height: 3.3rem;"></a>

            <!-- <a class="navbar-brand fw-bold" href="{{ route('frontend.index') }}" style="font-family: lora; font-size:1.5625rem; line-height:0.75; letter-spacing: 2px; color: #00B9FF;">KAYAK <br> <span style="font-family: lora; font-size:0.875rem; color: #FFFFFF">SURGI PHARMA</span></a> -->
            
            <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation"><span class="navbar-toggler-icon"></span></button>

            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav ms-auto">
                    <li class="nav-item mx-3">
                        <a class="nav-link text-white {{ Request::segment(1) == null ? 'active' : null }}" href="{{ route('frontend.index') }}" aria-current="page" href="{{ route('frontend.index') }}">Home</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-white {{ Request::segment(1) == 'about-us' ? 'active' : null }}" href="{{ route('frontend.about_us') }}">About Us</a>
                    </li>
                    <li class="nav-item dropdown mx-3">
                        <a class="nav-link dropdown-toggle text-white {{ Request::segment(1) == 'other-products' ? 'active' : (Request::segment(1) == 'kayak-products' ? 'active' : null) }}" href="#" id="navbarDropdown" role="button" data-bs-toggle="dropdown" aria-expanded="false" disabled>
                            Products
                        </a>
                    
                        <ul class="dropdown-menu px-0" aria-labelledby="navbarDropdown">
                            <li><a class="dropdown-item py-2" href="{{ route('frontend.kayak_products') }}">Kayak Products</a></li>
                            <li><a class="dropdown-item py-2" href="{{ route('frontend.other_products') }}">Other Products</a></li>
                        </ul>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-white {{ Request::segment(1) == 'news' ? 'active' : null }}" href="{{ route('frontend.news') }}">News</a>
                    </li>
                    <li class="nav-item mx-3">
                        <a class="nav-link text-white {{ Request::segment(1) == 'contact-us' ? 'active' : null }}" href="{{ route('frontend.contact_us') }}">Contact Us</a>
                    </li>
                </ul>
            </div>
        </div>
    </nav>
</div>


@push('after-scripts')
  <script>
      $('.dropdown').hover(function() {
          $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeIn(100);
      }, function() {
          $(this).find('.dropdown-menu').stop(true, true).delay(100).fadeOut(100);
      }); 
  </script>

@endpush