@extends('layouts.admin')
@section('content')

<section>
    <div class="container">
        <div class="row pt-5 ">
           <div class="col-sm-12 mx-auto">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                    <h3>All Sub Section</h3>
                    <a href="{{route('subservices.create')}}" class="btn btn-sm btn-primary"><i class="fa fa-solid fa-plus"></i> Add Section</a>
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>image</th>
                                    <th>List Item</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($subservices as $row => $sub_item)
                                <tr>
                                    <td>{{++$row}}</td>
                                    <td>{{$sub_item->title}}</td>
                                    <td>{{$sub_item->description}}</td>
                                    <td>
                                        <img src="{{asset($sub_item->image)}}" alt="sub-item-img" width="80px">
                                    </td>
                                    <td>{{$sub_item->list_item}}</td>
                                    <td>
                                        <a href="{{route('subservices.edit', $sub_item->id)}}" class="btn btn-sm btn-success"><i class="fa fa-solid fa-edit"></i></a>
                                        <button type="button" class="btn btn-sm btn-danger" data-bs-target="#deleteModal{{$sub_item->id}}" data-bs-toggle="modal"><i class="fa fa-solid fa-trash"></i></button>
                                    </td>
                                </tr>

                                <!-- Delete Modal -->
                                @include('subservices.delete')
                                
                                @endforeach
                            </tbody>
                        </table>
                    </div>
                    <div class="card-footer"></div>
                </div>
           </div>
        </div>
    </div>
</section>

@endsection