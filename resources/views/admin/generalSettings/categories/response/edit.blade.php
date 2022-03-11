<form method="post" action="{{route('admin.settings.categories.update')}}" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="catid" value="{{base64_encode($data->id)}}">
  <div class="modal-header">
    <h4 class="modal-title">Edit Category</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>
  <div class="modal-body">
    <div class="row">
      <div class="col-md-6">
        <img src="{{URL::to('/public/storage/settings/category/'.$data->image)}}" id="categoryImagePreview" onerror="this.onerror=null;this.src='{{URL::to('/public/placeholder-image.png')}}';" height="150px">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-6">
        <label>Category Image</label>
        <input type="file" name="image" class="field-style2 categoryImageEdit">
      </div>
      <div class="col-md-6">
        <label>Category Name *</label>
        <input type="text" placeholder="Category Name" class="field-style2" name="name" value="{{$data->name}}" required>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button class="btn btn-primary">Update</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</form>