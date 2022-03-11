<form method="post" action="{{route('admin.settings.subCategories.update')}}" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="catid" value="{{base64_encode($data->id)}}">
  <div class="modal-header">
    <h4 class="modal-title">Edit Sub Category</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>
  <div class="modal-body">
    <div class="row">
      <div class="col-md-6">
        <img src="{{URL::to('/public/storage/settings/subCategory/'.$data->image)}}" id="subCategoryImagePreview" onerror="this.onerror=null;this.src='{{URL::to('/public/placeholder-image.png')}}';" height="150px">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-6">
        <label>Sub Category Image</label>
        <input type="file" name="image" class="field-style2 subCategoryImageEdit">
      </div>
      <div class="col-md-6">
        <label>Category *</label>
           <select class="field-style2" name="category_id" required>
              @foreach($categories as $val)
                <option value="{{$val->id}}"
                  {{$data->category_id == $val->id ? 'selected' : ''}}
                >{{$val->name}}</option>
              @endforeach
           </select>
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-12">
        <label>Category Name *</label>
        <input type="text" placeholder="Sub Category Name" class="field-style2" name="name" value="{{$data->name}}" required>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button class="btn btn-primary">Update</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</form>