@extends('admin.includes.master')
@section('title', 'Men Add Shirt')

@section('content')


<div class="main-content">

            <div class="content-border m-b-30">
               <div class="page-heading">
                  <h3> Add Custom Parts </h3>
               </div>
               <div class="form-1 custom-pad1 m-b-30">
                  <form>
                     <div class="row">
                        <div class="col-md-6 col-lg-6 col-sm-6 col-12">
                           <div class="form-field2 m-b-30">
                              <select class="field-style2">
                                 <option> Product Id </option>
                                 <option> Product Id </option>
                                 <option> Product Id </option>
                              </select>
                           </div>
                        </div>
                        <div class="col-md-6 col-lg-6 col-sm-6 col-12 m-b-30">
                           <div class="btn-group">
                              <button class="btn btn-lg dropdown-toggle custom-btn1" type="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                              Add Customizations
                              </button>
                              <div class="dropdown-menu keep-open dropdown-2">
                                 <i class="fa fa-caret-up tri-icon"> </i>
                                 <div class="custom-dropdown1">


                                    <div class="sec-head1">
                                       <h5 class="col-black"> Collar </h5>
                                    </div>
                                    <div class="checkboxes-parent1">
                                       <div>
                                          <label> <input type="checkbox"  name=""> Wing Collar </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> Stand-Up Collar </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> Wide Cutaway </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> Kent Collar </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> Bottom Down </label>
                                       </div>
                                    </div>



                                    <div class="sec-head1">
                                       <h5 class="col-black"> Cuffs </h5>
                                    </div>
                                    <div class="checkboxes-parent1">
                                       <div>
                                          <label> <input type="checkbox"  name=""> Double Square French Cuff </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> Rounded 1 Button </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> Single Cuff 2 Button </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> Single Cuff 2 Button </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> Two Buttom Cut </label>
                                       </div>
                                    </div>



                                    <div class="sec-head1">
                                       <h5 class="col-black"> Sleeves </h5>
                                    </div>
                                    <div class="checkboxes-parent1">
                                       <div>
                                          <label> <input type="checkbox"  name=""> Long Sleeves </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> Short Sleeves </label>
                                       </div>
                                    </div>


                                    <div class="sec-head1">
                                       <h5 class="col-black"> Pocket </h5>
                                    </div>
                                    <div class="checkboxes-parent1">
                                       <div>
                                          <label> <input type="checkbox"  name=""> Standard Pocket </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> No Pocket </label>
                                       </div>
                                      
                                    </div>



                                    <div class="sec-head1">
                                       <h5 class="col-black"> Fit </h5>
                                    </div>
                                    <div class="checkboxes-parent1">
                                       <div>
                                          <label> <input type="checkbox"  name=""> Normal Fit </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> Slim Fit </label>
                                       </div>
                                    </div>


                                    <div class="sec-head1">
                                       <h5 class="col-black"> Placket </h5>
                                    </div>
                                    <div class="checkboxes-parent1">
                                       <div>
                                          <label> <input type="checkbox"  name=""> Covered Placket </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> No Placket </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> Front Placket </label>
                                       </div>
                                    </div>

                                    <div class="sec-head1">
                                       <h5 class="col-black"> Bottom Cut </h5>
                                    </div>
                                    <div class="checkboxes-parent1">
                                       <div>
                                          <label> <input type="checkbox"  name=""> Classica Bottom Cut </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> Modern Bottom Cut </label>
                                       </div>
                                    </div>

                                 </div>
                              </div>
                           </div>
                        </div>
                     </div>
                     <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                        <button type="button" class="custom-btn2 trigger-btn1"> ADD </button>
                     </div>
                       </form>
               </div>
            </div>




              <div class="content-border trigger-sec1">
               <div class="page-heading">
                  <h3> Add Images </h3>
               </div>
               <div class="block-element custom-pad1 m-b-30">
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
                  <div class="block-element">
                     <form>
                        <div class="table-wrapper">
                           <table >
                              <thead>
                                 <tr>
                                    <th class="tab-text5 text-center"> Id </th>
                                    <th class="tab-text5"> Custom Part </th>
                                    <th class="tab-text5 text-center"> Image </th>
                                 </tr>
                              </thead>
                              <tbody>
                                 <tr>
                                    <td class="tab-text4 text-center">  001 </td>
                                    <td class="tab-text4"> Wing Collar </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>
                                 <tr>
                                    <td class="tab-text4 text-center">  002 </td>
                                    <td class="tab-text4"> Stand-Up Collar </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>
                                 <tr>
                                    <td class="tab-text4 text-center">  003 </td>
                                    <td class="tab-text4"> Wide Cutaway </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>
                                 <tr>
                                    <td class="tab-text4 text-center">  004 </td>
                                    <td class="tab-text4"> Kent Collar </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>
                                 <tr>
                                    <td class="tab-text4 text-center">  005 </td>
                                    <td class="tab-text4"> Bottom Down </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>
                                 <tr>
                                    <td class="tab-text4 text-center">  006 </td>
                                    <td class="tab-text4"> Double Square French Cuff </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>
                                 <tr>
                                    <td class="tab-text4 text-center">  007 </td>
                                    <td class="tab-text4"> Rounded 1 Button </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>
                                 <tr>
                                    <td class="tab-text4 text-center">  008 </td>
                                    <td class="tab-text4"> Two Bottom Cut </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>
                                 <tr>
                                    <td class="tab-text4 text-center">  009 </td>
                                    <td class="tab-text4"> Single Cuff 2 Button </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>
                                 <tr>
                                    <td class="tab-text4 text-center">  010 </td>
                                    <td class="tab-text4"> Single Cuff 2 Button </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>
                                 <tr>
                                    <td class="tab-text4 text-center">  011 </td>
                                    <td class="tab-text4"> Long Sleeves </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>
                                 <tr>
                                    <td class="tab-text4 text-center">  012 </td>
                                    <td class="tab-text4"> Short Sleeves </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>
                                 <tr>
                                    <td class="tab-text4 text-center">  013 </td>
                                    <td class="tab-text4"> Standard Pocket </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>
                                 <tr>
                                    <td class="tab-text4 text-center">  014 </td>
                                    <td class="tab-text4"> No Pocket </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>
                                 <tr>
                                    <td class="tab-text4 text-center">  015 </td>
                                    <td class="tab-text4"> Normal Fit </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>
                                 <tr>
                                    <td class="tab-text4 text-center">  016 </td>
                                    <td class="tab-text4"> Slim Fit </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>
                                 <tr>
                                    <td class="tab-text4 text-center">  017 </td>
                                    <td class="tab-text4"> Covered Placket </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>
                                 <tr>
                                    <td class="tab-text4 text-center">  018 </td>
                                    <td class="tab-text4"> No Packet </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>
                                 <tr>
                                    <td class="tab-text4 text-center">  019 </td>
                                    <td class="tab-text4"> Front Placket </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>
                                 <tr>
                                    <td class="tab-text4 text-center">  020 </td>
                                    <td class="tab-text4"> Classic Bottom Out </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>
                                 <tr>
                                    <td class="tab-text4 text-center">  021 </td>
                                    <td class="tab-text4"> Modern Bottom Out </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>
                              </tbody>
                           </table>
                        </div>
                        <div class="block-element m-t-20 text-right mob-text-left">   
                           <button class="custom-btn2"> ADD CUSTOMIZATION  </button>   
                        </div>
                     </form>
                  </div>
               </div>
            </div>

         </div>

@endsection