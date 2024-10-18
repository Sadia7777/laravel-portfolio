@extends('layouts.admin')
@section('content')

<section>
    <div class="container">
        <div class="row pt-5 ">
           <div class="col-sm-12 mx-auto">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                 @if (!$service)
                    <h3>All Section</h3>
                    <a href="{{route('service.create')}}" class="btn btn-sm btn-primary"><i class="fa fa-solid fa-plus"></i> Add Section</a>
                 @endif
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>SL</th>
                                    <th>Title</th>
                                    <th>Sub Title</th>
                                    <th>Status</th>
                                    <th>MenuName</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($services as $row => $item)
                                <tr>
                                    <td>{{++$row}}</td>
                                    <td>{{$item->title}}</td>
                                    <td>{{$item->sub_title}}</td>
                                    <td>{{$item->sectionId}}</td>
                                    <td>{{$item->status}}</td>
                                    <td>
                                        <a href="{{route('service.edit', $item->id)}}" class="btn btn-sm btn-success"><i class="fa fa-solid fa-edit"></i></a>
                                        <button type="button" class="btn btn-sm btn-danger" data-bs-target=".modal" data-bs-toggle="modal"><i class="fa fa-solid fa-trash"></i></button>
                                    </td>
                                </tr>

                                <!-- Delete Modal -->
                                @include('services.delete')
                                
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