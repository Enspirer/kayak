@extends('backend.layouts.app')

@section('title', __('Create New'))

@section('content')

<link rel="stylesheet" href="{{url('css/vendors.css')}}">

    <form action="{{route('admin.news.store')}}" method="post" enctype="multipart/form-data">
        {{csrf_field()}}
        <div class="row">
            <div class="col-md-6">
                <div class="card">
                    <div class="card-body">
                        <div class="form-group">
                            <label>Title <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="title" required>
                        </div>
                        <div class="form-group">
                            <label>Description <span class="text-danger">*</span></label>
                            <textarea type="text" class="form-control" name="description" rows="6" required></textarea>
                        </div> 
                        
                        <div class="form-group">
                            <label>Featured News <span class="text-danger">*</span></label>
                            <select class="form-control" name="featured_news" required>
                                <option value="1">Enable</option>   
                                <option value="0" selected>Disable</option>                                
                            </select>
                        </div>

                        <div class="form-group">
                            <label>Order <span class="text-danger">*</span></label>
                            <input type="text" class="form-control" name="order" required>
                        </div>
                        
                        <div class="form-group">
                            <label>Status <span class="text-danger">*</span></label>
                            <select class="form-control" name="status" required>
                                <option value="Enabled">Enable</option>   
                                <option value="Disabled">Disable</option>                                
                            </select>
                        </div>
                        
                    </div>
                </div>
                
                <button type="submit" class="btn btn-success pull-right">Create New</button><br>
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
                                    <input type="hidden" name="image1" class="selected-files" >
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
                                    <input type="hidden" name="image2" class="selected-files" >
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
                                    <input type="hidden" name="image3" class="selected-files" >
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
