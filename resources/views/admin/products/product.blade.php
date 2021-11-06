@extends('admin.includes.master')
@section('title', 'Products')
@section('content')


 <div class="main-content">


            <div class="content-border m-b-30">
               <div class="page-heading">
                  <h3> Add Product </h3>
               </div>
               <div class="form-1 custom-pad1 m-b-30">
                  <form>
                     <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                           <div class="form-field2 m-b-30">
                              <select class="field-style2">
                              	<option> Select Category </option>
                              	<option> Select Category </option>
                              	<option> Select Category </option>
                              </select>
                           </div>
                        </div>
 

                        <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                           <div class="form-field2 m-b-30">
                              <select class="field-style2">
                                 <option> Select Fabric ID </option>
                                 <option> Select Fabric ID </option>
                                 <option> Select Fabric ID </option>
                                 <option> Select Fabric ID </option>
                              </select>
                           </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                           <div class="form-field2 m-b-30">
                              <input type="text" placeholder="Product Name" class="field-style2" name="">
                           </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                           <div class="form-field2 m-b-30">
                              <input type="text" placeholder="Price" class="field-style2" name="">
                           </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                           <div class="form-field2 m-b-30">
                              <select class="field-style2">
                              	<option> Select Gender </option>
                              	<option> Select Gender </option>
                              	<option> Select Gender </option>
                              	<option> Select Gender </option>
                              </select>
                           </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                           <div class="form-field2 m-b-30">
                              <select class="field-style2">
                              	<option> Choose Product Status </option>
                              	<option> Choose Product Status </option>
                              	<option> Choose Product Status </option>
                              	<option> Choose Product Status </option>
                              </select>
                           </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                           <div class="form-field2 m-b-30">
                             <input type="file" name="">
                           </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-12 col-12">
                           <button class="custom-btn2"> ADD </button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>


             <div class="content-border">
               <div class="page-heading">
                  <h3> Product </h3>
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
                                 <th class="tab-text5"> Category </th>
                                 <th class="tab-text5"> Fabric Id </th>
                                 <th class="tab-text5"> Product Name </th>
                                 <th class="tab-text5"> Image </th>
                                 <th class="tab-text5"> Price </th>
                                 <th class="tab-text5"> Gender </th>
                                 <th class="tab-text5"> Status  </th>
                                 <th class="tab-text5 text-center"> Action </th>
                                 <th class="tab-text5 text-center"> Add/View Customization </th>
                              </tr>


                           </thead>
                           <tbody>
                              <tr>
                                 <td class="tab-text4"> 111 </td>
                                 <td class="tab-text4"> Shirt </td>
                                 <td class="tab-text4"> 0001 </td>
                                 <td class="tab-text4"> Customize Shirt </td>
                                 <td class="tab-text4 tab-img1"> <img src="images/avatar-2.jpg"> </td>
                                 <td class="tab-text4"> 1000/- </td>
                                 <td class="tab-text4"> Men </td>
                                 <td class="tab-text4 col-red"> Out Of Stock </td>
                                 <td class="text-center tab-text4 text-center"> <a href="" class="edit-icon"> <i class="fa fa-pencil-alt"> </i> </a>  <a href="" class="del-icon"> <i class="fa fa-trash"> </i> </a> </td>
                                 <td class="tab-text4 text-center"> <a href="" class="edit-icon"> <i class="fa fa-eye"></i> </a>  </td>
                              </tr>

                              <tr>
                              	<td class="tab-text4"> </td>
                              	<td class="tab-text4"> </td>
                              	<td class="tab-text4"> </td>
                              	<td class="tab-text4"> </td>
                              	<td class="tab-text4"> </td>
                              	<td class="tab-text4"> </td>
                              	<td class="tab-text4"> </td>
                              	<td class="tab-text4"> </td>
                              	<td class="tab-text4 text-center"> </td>
                              	<td class="tab-text4 text-center"> </td>
                              </tr>

                              



                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>

         </div>
@endsection