<form method="post" action="{{route('admin.fabric.update')}}" enctype="multipart/form-data">
  @csrf
  <input type="hidden" name="fabricid" value="{{base64_encode($fabric->id)}}">
  <div class="modal-header">
    <h4 class="modal-title">Edit Fabric</h4>
    <button type="button" class="close" data-dismiss="modal">&times;</button>
  </div>
  <div class="modal-body">
    <div class="row">
      <div class="col-md-6 col-lg-6 col-sm-6 col-12">
        <div class="form-field2 m-b-30">
          <label>Category</label>
           <select class="field-style2" name="category_id" id="category" required>
              <option value=""> Select Category </option>
              @foreach($categories as $val)
                 <option value="{{$val->id}}"
                    {{$val->id == $fabric->category_id ? 'selected' : ''}}
                  > {{$val->name}} </option>
              @endforeach
           </select>
        </div>
      </div>

      <div class="col-md-6 col-lg-6 col-sm-6 col-12">
        <div class="form-field2 m-b-30">
          <label>Sub Category</label>
           <select class="field-style2" name="sub_category_id" id="subCategory" required>
              <option value=""> Select Sub Category </option>
              @foreach($subCategories as $val)
                 <option value="{{$val->id}}"
                    {{$val->id == $fabric->sub_category_id ? 'selected' : ''}}
                  > {{$val->name}} </option>
              @endforeach
           </select>
        </div>
      </div>

      <div class="col-md-6 col-lg-6 col-sm-6 col-12">
        <div class="form-field2 m-b-30">
          <label>Fabric Name</label>
           <input type="text" placeholder="Fabric Name" value="{{$fabric->name}}" class="field-style2" name="name" required>
        </div>
      </div>

      <div class="col-md-6 col-lg-6 col-sm-6 col-12">
        <div class="form-field2 m-b-30">
          <label>Fabric Type</label>
           <select class="field-style2" name="type_id" required>
              <option value=""> Select Fabric Type </option>
              @foreach($type as $val)
                 <option value="{{$val->id}}"
                    {{$val->id == $fabric->type_id ? 'selected' : ''}}
                  > {{$val->name}} </option>
              @endforeach
           </select>
        </div>
      </div>

      <div class="col-md-6 col-lg-6 col-sm-6 col-12">
        <div class="form-field2 m-b-30">
          <label>Material</label>
           <select class="field-style2" name="material_id" required>
              <option value=""> Select Material </option>
              @foreach($material as $val)
                 <option value="{{$val->id}}"
                    {{$val->id == $fabric->material_id ? 'selected' : ''}}
                  > {{$val->name}} </option>
              @endforeach
           </select>
        </div>
      </div>

      <div class="col-md-6 col-lg-6 col-sm-6 col-12">
        <div class="form-field2 m-b-30">
          <label>Pattern</label>
           <select class="field-style2" name="pattern_id" required>
              <option value=""> Select Pattern </option>
              @foreach($pattern as $val)
                 <option value="{{$val->id}}"
                    {{$val->id == $fabric->pattern_id ? 'selected' : ''}}
                  > {{$val->name}} </option>
              @endforeach
           </select>
        </div>
      </div>

      <div class="col-md-6 col-lg-6 col-sm-6 col-12">
        <div class="form-field2 m-b-30">
          <label>Colour</label>
           <select class="field-style2" name="color_id" required>
              <option value=""> Select Colour </option>
              @foreach($color as $val)
                 <option value="{{$val->id}}"
                    {{$val->id == $fabric->color_id ? 'selected' : ''}}
                  > {{$val->label}} </option>
              @endforeach
           </select>
        </div>
      </div>

      <div class="col-md-6 col-lg-6 col-sm-6 col-12">
        <div class="form-field2 m-b-30">
          <label>Price</label>
           <input type="number" step="any" placeholder="Price" value="{{$fabric->price}}" class="field-style2" name="price" required>
        </div>
      </div>

      <div class="col-md-12 col-lg-12 col-sm-12 col-12">
        <div class="form-field2 m-b-30">
          <label>Fabric Image</label>
           <input type="file" name="image" class="field-style2 fabricImageEdit">
        </div>
      </div>
      <div class="col-md-6">
        <img src="{{URL::to('/public/storage/fabric/'.$fabric->image)}}" id="fabricImagePreview" onerror="this.onerror=null;this.src='{{URL::to('/public/placeholder-image.png')}}';" height="150px">
      </div>
    </div>
  </div>
  <div class="modal-footer">
    <button class="btn btn-primary">Update</button>
    <button type="button" class="btn btn-default" data-dismiss="modal">Close</button>
  </div>
</form>