@extends('admin.includes.master')
@section('title', 'Fabrics')

@section('content')



<div class="main-content">
   <div class="content-border">
      <div class="page-heading">
         <h3> Fabrics </h3>
         <a href="{{route('admin.fabric.add')}}" class="custom-btn2 pull-right add-btn">Add Fabric</a>
      </div>
      <div class="custom-pad1 m-b-30">
         <div class="block-element m-b-30">
            <div class="table-wrapper">
               <table>
                  <thead>
                     <tr>
                        <th class="tab-text5" style="width:8%"> Fabric Id </th>
                        <th class="tab-text5" style="width:25%"> Name </th>
                        <th class="tab-text5"> Image </th>
                        <th class="tab-text5"> Type </th>
                        <th class="tab-text5"> Material </th>
                        <th class="tab-text5"> Pattern </th>
                        <th class="tab-text5"> Color </th>
                        <th class="tab-text5"> Price  </th>
                        <th class="tab-text5"> Action </th>
                     </tr>


                  </thead>
                  <tbody>
                     @foreach($fabrics as $key => $val)
                     <tr>
                        <td class="tab-text4"> 
                           {{$val->id}} 
                        </td>
                        <td class="tab-text4"> 
                           {{$val->name}} 
                        </td>
                        <td class="tab-text4 tab-img1"> 
                           <img src="{{URL::to('/public/storage/fabric/'.$val->image)}}" onerror="this.onerror=null;this.src='{{URL::to('/public/placeholder-image.png')}}';" height="40px"> 
                        </td>
                        <td class="tab-text4"> 
                           {{@$val->type->name}}
                        </td>
                        <td class="tab-text4"> 
                           {{@$val->material->name}}
                        </td>
                        <td class="tab-text4"> 
                           {{@$val->pattern->name}}
                        </td>
                        <td class="tab-text4"> 
                           {{@$val->color->label}}
                        </td>
                        <td class="tab-text4"> 
                           {{number_format($val->price, 2)}}/- 
                        </td>
                        <td class="text-center tab-text4"> 
                           <a href="javascript:void(0)" class="edit-icon editFabric" data-id="{{base64_encode($val->id)}}"> 
                              <i class="fa fa-pencil-alt"> </i> 
                           </a>
                           &nbsp;&nbsp;  
                           <a href="javascript:void(0)" class="del-icon deleteFabric" data-id="{{base64_encode($val->id)}}"> 
                              <i class="fa fa-trash"> </i> 
                           </a>
                        </td>
                     </tr>
                     @endforeach
                     @if(count($fabrics) == 0)
                        <tr>
                           <td colspan="9">No Record Found.</td>
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
<div id="editFabricModal" class="modal fade" role="dialog">
  <div class="modal-dialog">

    <!-- Modal content-->
    <div class="modal-content">
      
    </div>

  </div>
</div>
@endsection
@section('addScript')
   <script src="{{URL::to('/public/admin')}}/js/dev/fabric.js"> </script>
@endsection