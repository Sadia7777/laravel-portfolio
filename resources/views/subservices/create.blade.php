@extends('layouts.admin')
@section('content')

<div class="container">
    <div class="row py-4">
        <div class="col-md-10 mx-auto">
            <div class="card">
              <form action="{{route('subservices.store')}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')

                <div class="card-header">
                    <h3>Add Sub Services</h3>
                </div>
                <div class="card-body">
                    <div class="row mb-1">
                        <div class="col-12 form-group">
                            <label for="">Title</label>
                            <input type="text" name="title" placeholder="Services title" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-12 form-group">
                            <label for="">Description</label>
                            <input type="text" name="description" placeholder="Services description" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-1">
                        <div class="col-12 form-group">
                            <label for="">list item</label>
                            <input type="text" name="list_item" placeholder="list item" class="form-control">
                        </div>
                    </div>
                    <div class="row mb-3"> 
                        <div class="form-group"> 
                            <label class="form-label">Service List <span class="text-danger">*</span></label> 
                                
                            <div id="listContainer"> 
                                <input type="text" name="list[]" class="form-control" placeholder="Type Service List ..." required> 
                            </div> 
                            <div class="d-flex justify-content-center mt-2"> 
                                <button id="addList" class="btn btn-primary"><i class="fa fa-solid fa-plus"></i> Add Another List</button> 
                            </div> 
                        </div> 
                    </div>
                    <div class="row mb-1">
                        <div class="col-12 form-group">
                            <label for="">Image</label>
                            <input type="file" name="image" placeholder="image" class="form-control">
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

@push('scripts') 
    <script> 
 
        $(document).ready(function () { 
            $('#addList').click(function () { 
                var inputGroup = $('<div class="input-group mb-2"></div>') 
                var newInput = $('<input type="text" name="list[]" class="form-control" placeholder="Type Service List ..." required> ') 
                var deleteInput = $('<button id="deleteList" class="btn btn-danger"><i class="fa fa-solid fa-minus"></i> Remove This List</button>') 
 
                // append or insert the input & buttonmto the inputGroup 
                inputGroup.append(newInput); 
                inputGroup.append(deleteInput); 
 
                $('#listContainer').append(inputGroup); 
 
                CancelBtn.click(function(){ 
                    inputGroup.remove(); 
                }) 
            }) 
        }) 
 
    </script> 
@endpush