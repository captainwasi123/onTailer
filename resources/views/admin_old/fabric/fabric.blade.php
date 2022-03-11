@extends('admin.includes.master')
@section('title', 'Fabric')

@section('content')



<div class="main-content">


            <div class="content-border m-b-30">
               <div class="page-heading">
                  <h3> Add Fabric </h3>
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
                                 <option> Select Sub Category </option>
                                 <option> Select Sub Category </option>
                                 <option> Select Sub Category </option>
                              </select>
                           </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                           <div class="form-field2 m-b-30">
                              <input type="text" placeholder="Fabric Name" class="field-style2" name="">
                           </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                           <div class="form-field2 m-b-30">
                              <select class="field-style2">
                                 <option> Select Fabric Type </option>
                                 <option> Select Fabric Type </option>
                                 <option> Select Fabric Type </option>
                              </select>
                           </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                           <div class="form-field2 m-b-30">
                              <select class="field-style2">
                                 <option> Select Material </option>
                                 <option> Select Material </option>
                                 <option> Select Material </option>
                              </select>
                           </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                           <div class="form-field2 m-b-30">
                              <select class="field-style2">
                                 <option> Select Pattern </option>
                                 <option> Select Pattern </option>
                                 <option> Select Pattern </option>
                              </select>
                           </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                           <div class="form-field2 m-b-30">
                              <select class="field-style2">
                                 <option> Select Colour </option>
                                 <option> Select Colour </option>
                                 <option> Select Colour </option>
                              </select>
                           </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                           <div class="form-field2 m-b-30">
                              <input type="text" placeholder="Price" class="field-style2" name="">
                           </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                           <div class="form-field2 m-b-30">
                              <input type="file" name="">
                           </div>
                        </div>
 
                        <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                           <button class="custom-btn2"> ADD </button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>


             <div class="content-border">
               <div class="page-heading">
                  <h3> Fabric </h3>
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
                                 <th class="tab-text5"> Fabric Id </th>
                                 <th class="tab-text5"> Name </th>
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
                              <tr>
                                 <td class="tab-text4"> 111 </td>
                                 <td class="tab-text4"> Zaraha </td>
                                 <td class="tab-text4 tab-img1"> <img src="images/color-block1.jpg"> </td>
                                 <td class="tab-text4"> Poplin </td>
                                 <td class="tab-text4"> Cotton </td>
                                 <td class="tab-text4"> Plain </td>
                                 <td class="tab-text4">  </td>
                                 <td class="tab-text4"> 500/- </td>
                                 <td class="text-center tab-text4"> <a href="" class="edit-icon"> <i class="fa fa-pencil-alt"> </i> </a>  <a href="" class="del-icon"> <i class="fa fa-trash"> </i> </a> </td>
                              </tr>

                              <tr>
                                 <td class="tab-text4">   </td>
                                 <td class="tab-text4">  </td>
                                 <td class="tab-text4">   </td>
                                 <td class="tab-text4">   </td>
                                 <td class="tab-text4">   </td>
                                 <td class="tab-text4">   </td>
                                 <td class="tab-text4">   </td>
                                 <td class="tab-text4">   </td>
                                 <td class="tab-text4">   </td>
                              </tr>
                              <tr>
                                 <td class="tab-text4">   </td>
                                 <td class="tab-text4">  </td>
                                 <td class="tab-text4">   </td>
                                 <td class="tab-text4">   </td>
                                 <td class="tab-text4">   </td>
                                 <td class="tab-text4">   </td>
                                 <td class="tab-text4">   </td>
                                 <td class="tab-text4">   </td>
                                 <td class="tab-text4">   </td>
                              </tr>




                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>

         </div>
@endsection