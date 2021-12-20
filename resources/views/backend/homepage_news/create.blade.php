@extends('backend.layouts.app')

@section('title', __('Create New'))

@section('content')

<link rel="stylesheet" href="{{url('css/vendors.css')}}">

    <form action="{{route('admin.homepage_news.store')}}" method="post" enctype="multipart/form-data">
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
                                        <option value="{{$new->id}}">{{$new->title}}</option>
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
                                        <option value="{{$new->id}}">{{$new->title}}</option>
                                    @endforeach
                               </select>
                           </div>
                       </div>
                    
                    </div>
                </div>
                
            </div><br>          
                          
        </div> 

        <div class="row justify-content-center">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-header">
                        <h5 class="mb-0 h6">
                            Select News 3
                            <span class="text-danger">*</span>
                        </h5>
                    </div>
                    <div class="card-body">
                    
                        <div class="form-group">
                           
                           <div class="col-md-12 mt-2">
                               <select class="form-control" name="news_3" required>
                                   <option value="" selected disabled>Select...</option>
                                   @foreach($news as $key => $new)
                                        <option value="{{$new->id}}">{{$new->title}}</option>
                                    @endforeach
                               </select>
                           </div>
                       </div>
                    
                    </div>
                </div>
                
            </div><br> 
        </div>
        
        <div class="d-flex justify-content-center mt-4">
            <button type="submit" class="btn btn-success p-3">Submit</button>
        </div>

        <br>

    </form>

    
<br><br>




@endsection
