<form method="post" action="{{route('admin.settings.fabricType.update')}}" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="typeid" value="{{base64_encode($data->id)}}">
  <div class="modal-header">
    <h4 class="modal-title">Edit Fabric Type</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>
  <div class="modal-body">
    <div class="row">
      <div class="col-md-6">
        <img src="{{URL::to('/public/storage/settings/fabric/type/'.$data->image)}}" id="fabricTypeImagePreview" onerror="this.onerror=null;this.src='{{URL::to('/public/placeholder-image.png')}}';" height="150px">
      </div>
    </div>
    <br>
    <div class="row">
      <div class="col-md-6">
        <label>Type Image</label>
        <input type="file" name="image" class="field-style2 fabricTypeImageEdit">
      </div>
      <div class="col-md-6">
        <label>Type Name *</label>
        <input type="text" placeholder="Type Name" class="field-style2" name="name" value="{{$data->name}}" required>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button class="btn btn-primary">Update</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</form>