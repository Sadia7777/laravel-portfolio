@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row py-4">
        <div class="col-md-10 mx-auto">
            <div class="card">
              <form action="{{route('service.update' , $services->id)}}" method="post">
                @csrf
                @method('PUT')

                <div class="card-header">
                    <h3>Section Updated</h3>
                </div>
                <div class="card-body">
                    <div class="row mb-1">
                        <div class="col-12 form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" value="{{$services->title}}" placeholder="Hero title" class="form-control" required>
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-12 form-group">
                            <label for="">Sub Title</label>
                            <input type="text" name="sub_title" value="{{$services->sub_title}}" placeholder="Hero title" class="form-control" required>
                        </div>
                    </div>   
                    <div class="row mb-1">
                        <div class="col-12 form-group">
                            <label for="">Menu Name</label>
                            <input type="text" name="ManuName" value="{{$services->sectionId}}" placeholder="sectionId" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-12 form-group">
                            <label for="">Status <span class="text-danger">*</span></label>
                            <select name="status" class="form-control">
                                <option value="">---Select Status---</option>
                                @foreach ($status as $item)
                                    <option value="{{$item->name}}" {{$item->name == $services->status ?'selected': '' }}>{{$item->name}}</option>
                                @endforeach
                            </select>
                        </div>
                    </div>

                </div>
                <div class="card-footer">
                <a href="{{route('services.index')}}" class="button btn btn-sm btn-secondary">Chancel</a>
                <button type="submit" class="btn btn-sm btn-success">Save Change</button>
                <button type="reset" class="btn btn-sm btn-dark">Reset</button>
                </div>

              </form>
            </div>
        </div>
    </div>
</div>
@endsection