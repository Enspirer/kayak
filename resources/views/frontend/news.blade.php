@extends('frontend.layouts.app')

@section('title', app_name() . ' | ' . __('News'))

@push('after-styles')
    <link rel="stylesheet" href="{{ url('css/news.css') }}">
@endpush

@section('content')
    <div class="container main-news" style="margin-top: 10rem;">
        <h1 class="fw-bolder title" style="color: #00ACEE">Latest at Kayak</h1>

        @if($featured_news !=  null)
            @if(json_decode($featured_news->images)[1]->image2 == null  )
                @if(json_decode($featured_news->images)[1]->image2 == null && json_decode($featured_news->images)[2]->image3 == null)
                    <div class="row mt-4 mb-4">
                        <div class="col-12 col-md-7 mb-3 mb-md-0">
                            <img src="{{ uploaded_asset(json_decode($featured_news->images)[0]->image1) }}" alt="..." class="img-fluid w-100" style="height: 22rem; object-fit: cover;">
                        </div>
                        <div class="col-12 mt-5 col-md-5">
                            <h2 class="fw-bolder mb-2 mb-md-3">{{$featured_news->title}}</h2>
                            <p style="text-align: justify; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 12; -webkit-box-orient: vertical;">{{$featured_news->description}}</p>
                        </div>
                    </div>
                @endif
            @else
                <div class="single-news mt-4" style="margin-bottom: 4rem">
                    <h2 class="fw-bolder">{{$featured_news->title}}</h2>
                    <div class="row mt-2 mt-md-4">
                        <div class="col-12 col-md-7 mb-3 mb-md-0">
                            <img src="{{ uploaded_asset(json_decode($featured_news->images)[0]->image1) }}" alt="..." class="img-fluid w-100 main-images" style="height: 22rem; object-fit: cover;">
                        </div>
                        <div class="col-12 col-md-2 mb-2 mb-md-0">
                            <div class="row multiples">
                                <div class="col-4 col-md-12 mb-2">
                                    <img src="{{ uploaded_asset(json_decode($featured_news->images)[0]->image1) }}" alt="..." class="img-fluid w-100 other-images" style="height: 7rem; object-fit: cover;">
                                </div>
                                @if(json_decode($featured_news->images)[1]->image2 != null)
                                    <div class="col-4 col-md-12 mb-2">
                                        <img src="{{ uploaded_asset(json_decode($featured_news->images)[1]->image2) }}" alt="..." class="img-fluid w-100 other-images" style="height: 7rem; object-fit: cover;">
                                    </div>
                                @endif
                                @if(json_decode($featured_news->images)[2]->image3 != null)
                                    <div class="col-4 col-md-12 mb-2">
                                        <img src="{{ uploaded_asset(json_decode($featured_news->images)[2]->image3) }}" alt="..." class="img-fluid w-100 other-images" style="height: 7rem; object-fit: cover;">
                                    </div>
                                @endif
                            </div>
                        </div>
                        <div class="col-12 col-md-3">
                            <p style="text-align: justify; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 17; -webkit-box-orient: vertical;">{{$featured_news->description}}</p>
                        </div>
                    </div>
                </div> 
            @endif
        @endif

    </div>


    @if(count($all_news) != 0)
        <div class="container other-news" style="margin-top: 5rem; margin-bottom: 6rem">       
            @foreach($all_news as $key => $news)

                @if(json_decode($news->images)[1]->image2 == null && json_decode($news->images)[2]->image3 == null )
                    <div class="single-news" style="margin-bottom: 4rem">
                        <h2 class="fw-bolder mb-3">{{$news->title}}</h2>
                        <div class="row mt-4">
                            <div class="col-12 col-md-7 mb-3 mb-md-0">
                                <img src="{{ uploaded_asset(json_decode($news->images)[0]->image1) }}" alt="..." class="img-fluid w-100 main-image" style="height: 22rem; object-fit: cover;">
                            </div>
                            <div class="col-12 col-md-5">
                                <p style="text-align: justify; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 17; -webkit-box-orient: vertical;">{{$news->description}}</p>
                            </div>
                        </div>
                    </div>                     
                @else
                    <div class="single-news" style="margin-bottom: 4rem">
                        <h2 class="fw-bolder">{{$news->title}}</h2>
                        <div class="row mt-2 mt-md-4">
                            <div class="col-12 col-md-7 mb-3 mb-md-0">
                                <img src="{{ uploaded_asset(json_decode($news->images)[0]->image1) }}" alt="..." class="img-fluid w-100 main-image{{$news->id}} main-image" style="height: 22rem; object-fit: cover;">
                            </div>
                            <div class="col-12 col-md-2 mb-2 mb-md-0">
                                <div class="row multiple{{$news->id}}">
                                    
                                    <div class="col-4 col-md-12 mb-2">
                                        <img src="{{ uploaded_asset(json_decode($news->images)[0]->image1) }}" alt="..." class="img-fluid w-100 other-images" style="height: 7rem; object-fit: cover;">
                                    </div>
                                    @if(json_decode($news->images)[1]->image2 != null)
                                    <div class="col-4 col-md-12 mb-2">
                                        <img src="{{ uploaded_asset(json_decode($news->images)[1]->image2) }}" alt="..." class="img-fluid w-100 other-images" style="height: 7rem; object-fit: cover;">
                                    </div>
                                    @endif
                                    @if(json_decode($news->images)[2]->image3 != null)
                                    <div class="col-4 col-md-12 mb-2">
                                        <img src="{{ uploaded_asset(json_decode($news->images)[2]->image3) }}" alt="..." class="img-fluid w-100 other-images" style="height: 7rem; object-fit: cover;">
                                    </div>
                                    @endif
                                </div>
                            </div>
                            <div class="col-12 col-md-3">
                                <p style="text-align: justify; overflow: hidden; text-overflow: ellipsis; display: -webkit-box; -webkit-line-clamp: 17; -webkit-box-orient: vertical;">{{$news->description}}</p>
                            </div>
                        </div>
                    </div> 
                @endif  

            @endforeach
        </div>
    @endif    

    @if(count($all_news_count) == 0)
        @include('frontend.includes.not_found',[
            'not_found_title' => 'News Not Found',
        ])
    @endif

    
@endsection

@push('after-scripts')
    @if(count($all_news) != 0)
        @foreach($all_news as $key => $news)
        <script>        
            $('.multiple{{$news->id}} img').on('click', function() {
                let src = $(this).attr('src');

                $('.main-image{{$news->id}}').attr('src', src);
            });           
        </script>
        @endforeach
    @endif

    <script>
        $('.multiples img').on('click', function() {
            let src = $(this).attr('src');

            $('.main-images').attr('src', src);
        });
    </script>
@endpush