@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row py-4">
        <div class="col-md-10 mx-auto">
            <div class="card">
              <form action="{{route('subservices.update' , $subservice->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="card-header">
                    <h3>Sub Section Updated</h3>
                </div>
                <div class="card-body">
                    <div class="row mb-1">
                        <div class="col-12 form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" value="{{$subservice->title}}" placeholder="Hero title" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-12 form-group">
                            <label for="">Description</label>
                            <input type="text" name="description" value="{{$subservice->description}}" placeholder="Description" class="form-control" required>
                        </div>
                    </div>  
                    <div class="row mb-1">
                        <div class="col-12 form-group">
                            <label for="">Image</label>
                            <img src="{{asset($subservice->image)}}" id="NewImageDisplay" alt="NewImageDisplay" width="80px" class="mb-1">
                            <input type="file" name="image" value="{{$subservice->image}}" oninput="NewImageDisplay.src=window.URL.createObjectURL(this.files[0])" placeholder="Image" class="form-control">
                            <input name="oldFile" value="{{$subservice->image}}">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-12 form-group">
                            <label for="">list item</label>
                            <input type="text" name="list_item" value="{{$subservice->list_item}}" placeholder="List Item" class="form-control">
                        </div>
                    </div>
                </div>
                <div class="card-footer">
                <a href="{{route('subservices.index')}}" class="button btn btn-sm btn-secondary">Chancel</a>
                <button type="submit" class="btn btn-sm btn-success">Save Change</button>
                <button type="reset" class="btn btn-sm btn-dark">Reset</button>
                </div>

              </form>
            </div>
        </div>
    </div>
</div>
@endsection