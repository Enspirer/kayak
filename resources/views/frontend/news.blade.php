@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('labels.frontend.contact.box_title'))

@push('after-styles')
    <link rel="stylesheet" href="{{ url('css/news.css') }}">
@endpush

@section('content')
    <div class="container main-news" style="margin-top: 10rem;">
        <h1 class="fw-bolder title" style="color: #00ACEE">Latest Events at Kayak</h1>

        <div class="row mt-4">
            <div class="col-12 col-md-7 mb-3 mb-md-0">
                <img src="{{ url('img/frontend/news/1.png') }}" alt="..." class="img-fluid w-100" style="height: 22rem; object-fit: cover;">
            </div>
            <div class="col-12 col-md-5">
                <h2 class="fw-bolder mb-2 mb-md-3">Breast Cancer in the era of Covid-19</h2>
                <p style="text-align: justify; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 12; -webkit-box-orient: vertical;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi asperiores dolores recusandae consequuntur voluptate earum ea animi tempora voluptatibus quae modi ducimus consectetur, tenetur quos aliquid rem repellat eveniet suscipit sit atque, voluptatem deserunt. Labore odit iure excepturi maxime at asperiores voluptates exercitationem non nihil alias dignissimos, accusantium modi nam a corrupti, qui eligendi numquam earum nemo tenetur aliquid similique possimus cum voluptas. Earum tenetur doloribus aliquam omnis officia libero amet rerum, enim error aspernatur reprehenderit, consectetur veritatis? Ipsam magni numquam, necessitatibus eos dicta a ex quod voluptate quo debitis perferendis mollitia unde quos. Delectus voluptatibus culpa officiis eius quis sit numquam officia, illum eligendi quasi autem quam distinctio enim tempora repellendus sequi neque fugit nesciunt non molestiae error architecto nam accusamus? Expedita laborum, eaque inventore nihil alias soluta molestias doloremque voluptas, minus harum dolorum autem doloribus? Quis corrupti molestiae sit! Delectus, recusandae provident sed pariatur facere ut rerum at?</p>
            </div>
        </div>
    </div>


    <div class="container other-news" style="margin-top: 6rem; margin-bottom: 6rem">
        <div class="single-news" style="margin-bottom: 4rem">
            <h2 class="fw-bolder">Breast Cancer in the era of Covid-19</h2>
            <div class="row mt-2 mt-md-4">
                <div class="col-12 col-md-7 mb-3 mb-md-0">
                    <img src="{{ url('img/frontend/news/3.png') }}" alt="..." class="img-fluid w-100 main-image" style="height: 22rem; object-fit: cover;">
                </div>
                <div class="col-12 col-md-2 mb-2 mb-md-0">
                    <div class="row multiple">
                        <div class="col-4 col-md-12 mb-2">
                            <img src="{{ url('img/frontend/news/3.png') }}" alt="..." class="img-fluid w-100" style="height: 7rem; object-fit: cover;">
                        </div>
                        <div class="col-4 col-md-12 mb-2">
                            <img src="{{ url('img/frontend/news/1.png') }}" alt="..." class="img-fluid w-100" style="height: 7rem; object-fit: cover;">
                        </div>
                        <div class="col-4 col-md-12 mb-2">
                            <img src="{{ url('img/frontend/news/3.png') }}" alt="..." class="img-fluid w-100" style="height: 7rem; object-fit: cover;">
                        </div>
                    </div>
                </div>
                <div class="col-12 col-md-3">
                    <p style="text-align: justify; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 17; -webkit-box-orient: vertical;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi asperiores dolores recusandae consequuntur voluptate earum ea animi tempora voluptatibus quae modi ducimus consectetur, tenetur quos aliquid rem repellat eveniet suscipit sit atque, voluptatem deserunt. Labore odit iure excepturi maxime at asperiores voluptates exercitationem non nihil alias dignissimos, accusantium modi nam a corrupti, qui eligendi numquam earum nemo tenetur aliquid similique possimus cum voluptas. Earum tenetur doloribus aliquam omnis officia libero amet rerum, enim error aspernatur reprehenderit, consectetur veritatis? Ipsam magni numquam, necessitatibus eos dicta a ex quod voluptate quo debitis perferendis mollitia unde quos. Delectus voluptatibus culpa officiis eius quis sit numquam officia, illum eligendi quasi autem quam distinctio enim tempora repellendus sequi neque fugit nesciunt non molestiae error architecto nam accusamus? Expedita laborum, eaque inventore nihil alias soluta molestias doloremque voluptas, minus harum dolorum autem doloribus? Quis corrupti molestiae sit! Delectus, recusandae provident sed pariatur facere ut rerum at?</p>
                </div>
            </div>
        </div>

        <div class="single-news" style="margin-bottom: 4rem">
            <h2 class="fw-bolder mb-3">Breast Cancer in the era of Covid-19</h2>
            <div class="row mt-4">
                <div class="col-12 col-md-7 mb-3 mb-md-0">
                    <img src="{{ url('img/frontend/news/3.png') }}" alt="..." class="img-fluid w-100" style="height: 22rem; object-fit: cover;">
                </div>
                <div class="col-12 col-md-5">
                    <p style="text-align: justify; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 17; -webkit-box-orient: vertical;">Lorem ipsum dolor sit amet consectetur adipisicing elit. Commodi asperiores dolores recusandae consequuntur voluptate earum ea animi tempora voluptatibus quae modi ducimus consectetur, tenetur quos aliquid rem repellat eveniet suscipit sit atque, voluptatem deserunt. Labore odit iure excepturi maxime at asperiores voluptates exercitationem non nihil alias dignissimos, accusantium modi nam a corrupti, qui eligendi numquam earum nemo tenetur aliquid similique possimus cum voluptas. Earum tenetur doloribus aliquam omnis officia libero amet rerum, enim error aspernatur reprehenderit, consectetur veritatis? Ipsam magni numquam, necessitatibus eos dicta a ex quod voluptate quo debitis perferendis mollitia unde quos. Delectus voluptatibus culpa officiis eius quis sit numquam officia, illum eligendi quasi autem quam distinctio enim tempora repellendus sequi neque fugit nesciunt non molestiae error architecto nam accusamus? Expedita laborum, eaque inventore nihil alias soluta molestias doloremque voluptas, minus harum dolorum autem doloribus? Quis corrupti molestiae sit! Delectus, recusandae provident sed pariatur facere ut rerum at?</p>
                </div>
            </div>
        </div>
    </div>
    
@endsection

@push('after-scripts')
    <script>
        $('.multiple img').on('click', function() {
            let src = $(this).attr('src');

            $('.main-image').attr('src', src);
        });
    </script>
@endpush