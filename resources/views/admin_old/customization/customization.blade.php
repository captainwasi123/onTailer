@extends('admin.includes.master')
@section('title', 'Customization')

@section('content')

<div class="main-content">

            <div class="content-border">
               <div class="page-heading">
                  <h3> Customization </h3>
               </div>
               <div class="custom-pad1 m-b-30">
                  <div class="row">
                     <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                        <select class="filter-btn1 m-b-20">
                           <option> Show All </option>
                           <option> Show All </option>
                           <option> Show All </option>
                           <option> Show All </option>
                        </select>
                     </div>
                     <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                        <div class="search-form m-b-20">
                           <form>
                              <input type="text" placeholder="Search" name="">  
                              <button> <i class="fa fa-search"> </i> </button>
                           </form>
                        </div>
                     </div>
                  </div>
                  <div class="block-element m-b-30">
                     <div class="table-wrapper">
                        <table>
                           <thead>
                              <tr>
                                 <th class="tab-text5"> Product Id </th>
                                 <th class="tab-text5"> Product Name </th>
                                 <th class="tab-text5"> Gender </th>
                                 <th class="tab-text5"> Category </th>
                                 <th class="tab-text5 text-center"> View Selected Customization </th>
                                 <th class="tab-text5 text-center"> Action </th>
                              </tr>


                           </thead>
                           <tbody>
                              <tr>
                              	<td class="tab-text4"> 121 </td>
                              	<td class="tab-text4"> Customize Shirt </td>
                              	<td class="tab-text4"> Male </td>
                              	<td class="tab-text4"> Shirt </td>
                              	<td class="text-center tab-text4"> <a href="" class="view-icon"> <i class="fa fa-eye"> </i> </a> </td>
                              	<td class="text-center tab-text4"> <a href="" class="del-icon"> <i class="fa fa-trash"> </i> </a> </td>
                              </tr>

                              <tr>
                              	<td class="tab-text4"> 122 </td>
                              	<td class="tab-text4"> Customize Blazer </td>
                              	<td class="tab-text4"> Female </td>
                              	<td class="tab-text4"> Blazer </td>
                              	<td class="text-center tab-text4"> <a href="" class="view-icon"> <i class="fa fa-eye"> </i> </a> </td>
                              	<td class="text-center tab-text4"> <a href="" class="del-icon"> <i class="fa fa-trash"> </i> </a> </td>
                              </tr>

                              <tr>
                              	<td class="tab-text4"> 123 </td>
                              	<td class="tab-text4"> Customize Trouser </td>
                              	<td class="tab-text4"> Male </td>
                              	<td class="tab-text4"> Trouser </td>
                              	<td class="text-center tab-text4"> <a href="" class="view-icon"> <i class="fa fa-eye"> </i> </a> </td>
                              	<td class="text-center tab-text4"> <a href="" class="del-icon"> <i class="fa fa-trash"> </i> </a> </td>
                              </tr>

                              <tr>
                              	<td class="tab-text4"> 124 </td>
                              	<td class="tab-text4"> Customize Shirt </td>
                              	<td class="tab-text4"> Female </td>
                              	<td class="tab-text4"> Shirt </td>
                              	<td class="text-center tab-text4"> <a href="" class="view-icon"> <i class="fa fa-eye"> </i> </a> </td>
                              	<td class="text-center tab-text4"> <a href="" class="del-icon"> <i class="fa fa-trash"> </i> </a> </td>
                              </tr>



                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>

@endsection