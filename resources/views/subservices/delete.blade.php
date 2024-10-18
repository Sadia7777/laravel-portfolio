<div class="modal" id="deleteModal{{$sub_item->id}}">
    <div class="modal-dialog">
        <div class="modal-content">
            <form action="{{route('subservices.delete' ,$sub_item->id)}}" method="post" enctype="multipart/form-data">
                @csrf
                @method('POST')

                <div class="modal-header">
                    <h5 class="modal-title">Delete the services section</h5>
                    <button type="button" data-bs-dismiss="modal" class="btn btn-close"></button>
                </div>
                <div class="modal-body">
                    <p class="lead">are you sure? do you want to delete this item</p>
                    <!-- <input type="hidden" name="filePath" value="{{$sub_item->image}}"> -->
                     <input type="text" value="{{$sub_item->id}}">
                    
                </div>
                <div class="modal-footer">
                    <button type="submit" class="btn btn-success">Yes</button>
                    <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">No</button>
                </div>
            </form>
        </div>
    </div>
</div>