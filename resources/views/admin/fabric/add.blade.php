@extends('admin.includes.master')
@section('title', 'Add Fabric')

@section('content')
<div class="main-content">
   <div class="content-border m-b-30">
      <div class="page-heading">
         <h3> Add Fabric </h3>
      </div>
      <div class="form-1 custom-pad1 m-b-30">
         <form method="post" enctype="multipart/form-data">
            @csrf
            <div class="row">
               <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                  <div class="form-field2 m-b-30">
                     <select class="field-style2" name="category_id" id="category" required>
                        <option value=""> Select Category </option>
                        @foreach($categories as $val)
                           <option value="{{$val->id}}"> {{$val->name}} </option>
                        @endforeach
                     </select>
                  </div>
               </div>

               <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                  <div class="form-field2 m-b-30">
                     <select class="field-style2" name="sub_category_id" id="subCategory" required>
                        <option value=""> Select Sub Category </option>
                     </select>
                  </div>
               </div>

               <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                  <div class="form-field2 m-b-30">
                     <input type="text" placeholder="Fabric Name" class="field-style2" name="name" required>
                  </div>
               </div>

               <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                  <div class="form-field2 m-b-30">
                     <select class="field-style2" name="type_id" required>
                        <option value=""> Select Fabric Type </option>
                        @foreach($type as $val)
                           <option value="{{$val->id}}"> {{$val->name}} </option>
                        @endforeach
                     </select>
                  </div>
               </div>

               <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                  <div class="form-field2 m-b-30">
                     <select class="field-style2" name="material_id" required>
                        <option value=""> Select Material </option>
                        @foreach($material as $val)
                           <option value="{{$val->id}}"> {{$val->name}} </option>
                        @endforeach
                     </select>
                  </div>
               </div>

               <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                  <div class="form-field2 m-b-30">
                     <select class="field-style2" name="pattern_id" required>
                        <option value=""> Select Pattern </option>
                        @foreach($pattern as $val)
                           <option value="{{$val->id}}"> {{$val->name}} </option>
                        @endforeach
                     </select>
                  </div>
               </div>

               <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                  <div class="form-field2 m-b-30">
                     <select class="field-style2" name="color_id" required>
                        <option value=""> Select Colour </option>
                        @foreach($color as $val)
                           <option value="{{$val->id}}"> {{$val->label}} </option>
                        @endforeach
                     </select>
                  </div>
               </div>

               <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                  <div class="form-field2 m-b-30">
                     <input type="number" step="any" placeholder="Price" class="field-style2" name="price" required>
                  </div>
               </div>

               <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                  <div class="form-field2 m-b-30">
                     <input type="file" name="image" class="field-style2" required>
                  </div>
               </div>

               <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                  <button class="custom-btn2"> ADD </button>
               </div>
            </div>
         </form>
      </div>
   </div>
</div>
@endsection
@section('addScript')
   <script src="{{URL::to('/public/admin')}}/js/dev/fabric.js"> </script>
@endsection