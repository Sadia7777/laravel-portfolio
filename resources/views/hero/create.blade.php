@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row py-4">
        <div class="col-md-10 mx-auto">
            <div class="card">
              <form action="{{route('hero.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')

                <div class="card-header">
                    <h3>Add Section</h3>
                </div>
                <div class="card-body">
                    <div class="row mb-1">
                        <div class="col-12 form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" placeholder="Hero title" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-12 form-group">
                            <label for="">Description</label>
                            <input type="text" name="description" placeholder="Hero description" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-12 form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" placeholder="Image" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-12 form-group">
                            <label for="">Section Id</label>
                            <input type="text" name="link1"  placeholder="sectionId" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-12 form-group">
                            <label for="">Status <span class="text-danger">*</span></label>
                            <select name="status" class="form-control">
                                <option value="">---Select Status---</option>
                                @foreach ($status as $item)
                                    <option value="{{$item->name}}">{{$item->name}}</option>
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