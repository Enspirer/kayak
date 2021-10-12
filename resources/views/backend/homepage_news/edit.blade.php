@extends('backend.layouts.app')

@section('title', __('Edit'))

@section('content')

<link rel="stylesheet" href="{{url('css/vendors.css')}}">


    <form action="{{route('admin.homepage_news.update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">
                            Select News 1
                            <span class="text-danger">*</span>
                        </h5>
                    </div>
                    <div class="card-body">
                    
                        <div class="form-group">
                           
                            <div class="col-md-12 mt-2">
                                <select class="form-control" name="news_1" required>
                                    <option value="" selected disabled>Select...</option>
                                    @foreach($news as $key => $new)
                                       <option value="{{$new->id}}" {{$new->id == $homepage_news->news_1 ? "selected" : "" }}>{{$new->title}}</option>
                                    @endforeach
                                </select>
                            </div>
                        </div>
                    
                    </div>
                </div>
                
            </div><br> 
            
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">
                            Select News 2
                            <span class="text-danger">*</span>
                        </h5>
                    </div>
                    <div class="card-body">
                    
                        <div class="form-group">
                           
                           <div class="col-md-12 mt-2">
                               <select class="form-control" name="news_2" required>
                                   <option value="" selected disabled>Select...</option>
                                   @foreach($news as $key => $new)
                                       <option value="{{$new->id}}" {{$new->id == $homepage_news->news_2 ? "selected" : "" }}>{{$new->title}}</option>
                                   @endforeach
                               </select>
                           </div>
                       </div>
                    
                    </div>
                </div>
                
            </div><br>             
             
        </div>
              
        <input type="hidden" name="hidden_id" value="{{$homepage_news->id}}" />
        <div class="d-flex justify-content-center mt-4">
            <button type="submit" class="btn btn-success p-3">Update</button>
        </div>

    </form>


<br><br>
@endsection
