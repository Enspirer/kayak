@extends('backend.layouts.app')

@section('title', __('Edit'))

@section('content')

<link rel="stylesheet" href="{{url('css/vendors.css')}}">

    <form action="{{route('admin.news.update')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                    <div class="form-group">
                            <label>Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="title" value="{{$news->title}}" required>
                        </div>
                        <div class="form-group">
                            <label>Description <span class="text-danger">*</span></label>
                            <textarea type="text" class="form-control" name="description" rows="6" required>{{$news->description}}</textarea>
                        </div> 
                        
                        <div class="form-group">
                            <label>Featured News <span class="text-danger">*</span></label>
                            <select class="form-control" name="featured_news" required>
                                <option value="1" {{ $news->is_feature == 1 ? "selected" : "" }}>Enable</option>   
                                <option value="0" {{ $news->is_feature == 0 ? "selected" : "" }}>Disable</option>                                
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Order <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="order" value="{{$news->order}}" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Status <span class="text-danger">*</span></label>
                            <select class="form-control" name="status" required>
                                <option value="Enabled" {{ $news->status == 'Enabled' ? "selected" : "" }}>Enable</option>   
                                <option value="Disabled" {{ $news->status == 'Disabled' ? "selected" : "" }}>Disable</option>                                
                            </select>
                        </div>
                        
                    </div>
                </div>
                <input type="hidden" name="hidden_id" value="{{ $news->id }}" />
                <button type="submit" class="btn btn-success pull-right">Update News</button><br>
            </div><br>
            
            <div class="col-md-6">

                <div class="card">
                    <div class="card-body">
                        <div class="" style="border-style: ridge;border-width: 3px;padding: 20px;">
                            
                            <div class="form-group">
                                <label>Feature Image
                                        <span class="text-danger">*</span>
                                    </label>
                                    <div class="input-group" data-toggle="aizuploader" data-type="image">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                        </div>
                                        <div class="form-control file-amount">Choose File</div>
                                        <input type="hidden" name="image1" value="{{ json_decode($news->images)[0]->image1 }}" class="selected-files" >
                                    </div>
                                    <div class="file-preview box sm">
                                    </div>
                                </div> 

                                <div class="form-group">
                                    <label>Image 2
                                        <!-- <span class="text-danger">*</span> -->
                                    </label>
                                    <div class="input-group" data-toggle="aizuploader" data-type="image">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                        </div>
                                        <div class="form-control file-amount">Choose File</div>
                                        <input type="hidden" name="image2" value="{{ json_decode($news->images)[1]->image2 }}" class="selected-files" >
                                    </div>
                                    <div class="file-preview box sm">
                                    </div>
                                </div> 

                                <div class="form-group">
                                    <label>Image 3
                                        <!-- <span class="text-danger">*</span> -->
                                    </label>
                                    <div class="input-group" data-toggle="aizuploader" data-type="image">
                                        <div class="input-group-prepend">
                                            <div class="input-group-text bg-soft-secondary font-weight-medium">Browse</div>
                                        </div>
                                        <div class="form-control file-amount">Choose File</div>
                                        <input type="hidden" name="image3" value="{{ json_decode($news->images)[2]->image3 }}" class="selected-files" >
                                    </div>
                                    <div class="file-preview box sm">
                                    </div>
                                </div>                                

                        </div>
                    </div>
                </div>

                
                

            </div><br>

        </div>

    </form>

    
<br><br>
@endsection
