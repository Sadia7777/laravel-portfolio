@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row py-4">
        <div class="col-md-10 mx-auto">
            <div class="card">
              <form action="{{route('hero.update', $hero->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('PUT')

                <div class="card-header">
                    <h3>Update Section</h3>
                </div>
                <div class="card-body">
                    <div class="row mb-1">
                        <div class="col-12 form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" value="{{$hero->title}}" placeholder="Hero title" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-12 form-group">
                            <label for="">Description <span class="text-danger">*</span></label>
                            <input type="text" name="description" value="{{$hero->description}}" placeholder="Hero description" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-12 form-group">
                            <label for="">Image</label>
                            <img id="NewImageDisplay" src="{{asset($hero->image)}}" alt="" style="width:80px;" class="mb-1">
                            <input type="file" name="image" oninput="NewImageDisplay.src=window.URL.createObjectURL(this.files[0])" placeholder="Image" class="form-control">
                            <input type="hidden" name="oldFile" value="{{$hero->image}}">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-12 form-group">
                            <label for="">Section Id</label>
                            <input type="text" name="link1" value="{{$hero->sectionId}}" placeholder="sectionId" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-12 form-group">
                            <label for="">Status <span class="text-danger">*</span></label>
                            <select name="status" class="form-control">
                                <option value="">---Select Status---</option>
                                @foreach ($status as $item)
                                    <option value="{{$item->name}}" {{$item->name == $hero->status ?'selected': '' }}>{{$item->name}}</option>
                                @endforeach
                                
                            </select>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                <a href="{{route('hero.index')}}" class="button btn btn-sm btn-secondary">Chancel</a>
                <button type="submit" class="btn btn-sm btn-success">Save Change</button>
                <button type="reset" class="btn btn-sm btn-dark">Reset</button>
                </div>

              </form>
            </div>
        </div>
    </div>
</div>
@endsection