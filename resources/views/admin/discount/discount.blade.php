@extends('admin.includes.master')
@section('title', 'Discount')
@section('content')

 <div class="main-content">


            <div class="content-border m-b-30">
               <div class="page-heading">
                  <h3> Add Discount Coupons </h3>
               </div>
               <div class="form-1 custom-pad1 m-b-30">
                  <form>
                     <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                           <div class="form-field2 m-b-30">
                              <input type="text" placeholder="Coupon Name" class="field-style2" name="">
                           </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                           <div class="form-field2 m-b-30">
                              <select class="field-style2">
                                 <option> Discount Type </option>
                                 <option> Discount Type </option>
                                 <option> Discount Type </option>
                                 <option> Discount Type </option>
                              </select>
                           </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                           <div class="form-field2 m-b-30">
                              <input type="text" placeholder="Code" class="field-style2" name="">
                           </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                           <div class="form-field2 m-b-30">
                              <input type="text" placeholder="Discount" class="field-style2" name="">
                           </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                           <div class="form-field2 m-b-30">
                              <span class="field-label1"> Start Date </span>
                              <input type="date"  class="field-style2" name="">
                           </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                           <div class="form-field2 m-b-30">
                              <span class="field-label1"> End Date </span>
                              <input type="date"  class="field-style2" name="">
                           </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                           <div class="form-field2 m-b-30">
                              <input type="text" placeholder="Min Purchase Amt" class="field-style2" name="">
                           </div>
                        </div>

                        <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                           <div class="form-field2 m-b-30">
                              <input type="text" placeholder="Max Purchase Amt" class="field-style2" name="">
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
                  <h3> Discount Coupons </h3>
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
                                 <th class="tab-text5"> Coupon Id </th>
                                 <th class="tab-text5"> Coupon Name </th>
                                 <th class="tab-text5"> Coupon Type </th>
                                 <th class="tab-text5"> Discount </th>
                                 <th class="tab-text5"> Code </th>
                                 <th class="tab-text5"> Start Date </th>
                                 <th class="tab-text5"> End Date </th>
                                 <th class="tab-text5"> Min Purchase</th>
                                 <th class="tab-text5"> Max Purchase </th>
                                 <th class="tab-text5"> Status </th>
                                 <th class="tab-text5"> Action </th>
                              </tr>


                           </thead>
                           <tbody>
                              <tr>
                                 <td class="tab-text4"> 121 </td>
                                 <td class="tab-text4"> Get 20% Off</td>
                                 <td class="tab-text4"> Fixed Amount </td>
                                 <td class="tab-text4"> 20% </td>
                                 <td class="tab-text4"> 154ghf2 </td>
                                 <td class="tab-text4"> 30/10/2020 </td>
                                 <td class="tab-text4"> 30/11/2020 </td>
                                 <td class="tab-text4"> 1500/- </td>
                                 <td class="tab-text4"> 3000/- </td>
                                 <td class="tab-text4 col-green"> Active </td>
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