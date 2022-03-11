@extends('admin.includes.master')
@section('title', 'Fabric Pattern')
@section('content')


<div class="main-content">
   <div class="content-border m-b-30">
      <div class="page-heading">
         <h3> Add Fabric Pattern </h3>
      </div>
      <div class="form-1 custom-pad1 m-b-30">
         <form method="post" action="{{route('admin.settings.fabricPattern.add')}}" enctype="multipart/form-data">
            @csrf
            <div class="row">
               <div class="col-md-5 col-lg-5 col-sm-12 col-12">
                  <div class="form-field2 m-b-30">
                     <input type="text" placeholder="Fabric Pattern" class="field-style2" name="name" required>
                  </div>
               </div>

               <div class="col-md-5 col-lg-5 col-sm-12 col-12">
                  <div class="form-field2 m-b-30">
                    <input type="file" class="field-style2" name="image">
                  </div>
               </div>

               <div class="col-md-2 col-lg-2 col-sm-12 col-12">
                  <button class="custom-btn2"> ADD </button>
               </div>
            </div>
         </form>
      </div>
   </div>

   <div class="content-border">
      <div class="page-heading">
         <h3> Fabric Patterns </h3>
      </div>
      <div class="custom-pad1 m-b-30">
         <div class="block-element m-b-30">
            <div class="table-wrapper">
               <table>
                  <thead>
                     <tr>
                        <th class="tab-text5" style="width:5%"> # </th>
                        <th class="tab-text5" style="width:15%"> Image </th>
                        <th class="tab-text5" style="width:70%"> Name </th>
                        <th class="tab-text5 text-center" style="width:10%"> Action </th>
                     </tr>


                  </thead>
                  <tbody>
                     @foreach($patterns as $key => $val)
                        <tr>
                           <td class="tab-text4">{{++$key}}</td>
                           <td class="tab-text4"> <img src="{{URL::to('/public/storage/settings/fabric/pattern/'.$val->image)}}" onerror="this.onerror=null;this.src='{{URL::to('/public/placeholder-image.png')}}';" height="40px"> </td>
                           <td class="tab-text4"> {{$val->name}} </td>
                           <td class="text-center tab-text4 text-center"> 
                              <a href="javascript:void(0)" class="edit-icon editFabricPattern" data-id="{{base64_encode($val->id)}}"> 
                                 <i class="fa fa-pencil-alt"> </i> 
                              </a>
                              &nbsp;&nbsp;  
                              <a href="javascript:void(0)" class="del-icon deleteFabricPattern" data-id="{{base64_encode($val->id)}}"> 
                                 <i class="fa fa-trash"> </i> 
                              </a> 
                           </td>
                        </tr>
                     @endforeach
                     @if(count($patterns) == 0)
                        <tr>
                           <td colspan="4">No Record Found.</td>
                        </tr>
                     @endif
                  </tbody>
               </table>
            </div>
         </div>
      </div>
   </div>
</div>

<!-- Edit Modal -->
<div id="editFabricPatternModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      
    </div>

  </div>
</div>
@endsection