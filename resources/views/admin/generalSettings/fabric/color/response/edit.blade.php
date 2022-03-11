<form method="post" action="{{route('admin.settings.fabricColor.update')}}" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="colorid" value="{{base64_encode($data->id)}}">
  <div class="modal-header">
    <h4 class="modal-title">Edit Fabric Color</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>
  <div class="modal-body">
    <div class="row">
      <div class="col-md-6">
        <img src="{{URL::to('/public/storage/settings/fabric/color/'.$data->image)}}" id="fabricColorImagePreview" onerror="this.onerror=null;this.src='{{URL::to('/public/placeholder-image.png')}}';" height="150px">
        <br><br>
        <label>Color Image</label>
        <input type="file" name="image" class="field-style2 fabricColorImageEdit">
      </div>
      <div class="col-md-6">
        <label>Color Label *</label>
        <input type="text" placeholder="Color Label" class="field-style2" name="label" value="{{$data->label}}" required>
        <br><br>
        <label>Color HashCode *</label>
        <input type="text" placeholder="HashCode (e.g. #000000)" class="field-style2" name="hashcode" value="{{$data->hashcode}}" required>
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button class="btn btn-primary">Update</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</form>