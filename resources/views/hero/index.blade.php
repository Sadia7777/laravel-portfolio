@extends('layouts.admin')
@section('content')

<section>
    <div class="container">
        <div class="row pt-5 ">
           <div class="col-sm-12 mx-auto">
                <div class="card">
                    <div class="card-header d-flex justify-content-between align-items-center">
                        @if (!$hero)
                        <h3>All Section</h3>
                        <a href="{{route('hero.create')}}" class="btn btn-sm btn-primary"><i class="fa fa-solid fa-plus"></i> Add Section</a>
                        @endif
                    </div>
                    <div class="card-body">
                        <table class="table table-striped">
                            <thead>
                                <tr>
                                    <th>ID</th>
                                    <th>Title</th>
                                    <th>Description</th>
                                    <th>Image</th>
                                    <th>Status</th>
                                    <th>MenuName</th>
                                    <th>Action</th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach ($heros as  $hero)
                                <tr>
                                    <td>{{$hero->id}}</td>
                                    <td>{{$hero->title}}</td>
                                    <td>{{$hero->description}}</td>
                                    <td>
                                        <img src="{{asset($hero->image)}}" alt="hero-image" style="width:80px;">
                                    </td>
                                    <td>{{$hero->status}}</td>
                                    <td>{{$hero->sectionId}}</td>
                                    <td>
                                        <a href="{{route('hero.edit', $hero->id )}}" class="btn btn-sm btn-success"><i class="fa fa-solid fa-edit"></i></a>
                                        <button type="button" class="btn btn-sm btn-danger" data-bs-target="#deleteModal{{$hero->id}}" data-bs-toggle="modal"><i class="fa fa-solid fa-trash"></i></button>
                                    </td>
                                </tr>

                                <!-- Delete Modal -->
                                @include('hero.delete')
                                
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