@extends('admin.includes.master')
@section('title', 'Womens Add blazer')

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
                                       <h5 class="col-black"> Style & Buttons </h5>
                                    </div>
                                    <div class="checkboxes-parent1">
                                       <div>
                                          <label> <input type="checkbox"  name=""> Single-Breasted 1 Buttons </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> Single-Breasted 2 Buttons </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> Single-Breasted 3 Buttons </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> Single-Breasted 4 Buttons </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> Without Lapel 2 Buttons </label>
                                       </div>
                                    </div>
                                    <div class="sec-head1">
                                       <h5 class="col-black"> Lapel Style</h5>
                                    </div>
                                    <div class="checkboxes-parent1 checkboxes-parent2">
                                       <div>
                                          <label> <input type="checkbox"  name=""> Shawl </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> Peak </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> Notch </label>
                                       </div>
                                    </div>
                                    <div class="sec-head1">
                                       <h5 class="col-black"> Hemline </h5>
                                    </div>
                                    <div class="checkboxes-parent1 checkboxes-parent2">
                                       <div>
                                          <label> <input type="checkbox"  name=""> Straight </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> Rounded </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> Cutaway </label>
                                       </div>
                                    </div>
                                    <div class="sec-head1">
                                       <h5 class="col-black"> Pocket </h5>
                                    </div>
                                    <div class="checkboxes-parent1">
                                       <div>
                                          <label> <input type="checkbox"  name=""> Slanted Flap </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> Double-Welted </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> With Flap </label>
                                       </div>
                                    </div>
                                    <div class="sec-head1">
                                       <h5 class="col-black"> Vents </h5>
                                    </div>
                                    <div class="checkboxes-parent1">
                                       <div>
                                          <label> <input type="checkbox"  name=""> Side Vents </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> Center Vents </label>
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
                                    <td class="tab-text4"> Single Breasted 1 Buttons </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>
                                 <tr>
                                    <td class="tab-text4 text-center">  002 </td>
                                    <td class="tab-text4"> Single Breasted 2 Buttons </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>
                                 <tr>
                                    <td class="tab-text4 text-center">  003 </td>
                                    <td class="tab-text4"> Single Breasted 3 Buttons </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>
                                 <tr>
                                    <td class="tab-text4 text-center">  004 </td>
                                    <td class="tab-text4"> Single Breasted 4 Buttons </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>
                                 <tr>
                                    <td class="tab-text4 text-center">  005 </td>
                                    <td class="tab-text4"> Without Lapel 2 Buttons </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>
                                 <tr>
                                    <td class="tab-text4 text-center">  006 </td>
                                    <td class="tab-text4"> Shawl </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>
                                 <tr>
                                    <td class="tab-text4 text-center">  007 </td>
                                    <td class="tab-text4"> Peak </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>
                                 <tr>
                                    <td class="tab-text4 text-center">  008 </td>
                                    <td class="tab-text4"> Notch </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>
                                 <tr>
                                    <td class="tab-text4 text-center">  009 </td>
                                    <td class="tab-text4"> Straight </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>
                                 <tr>
                                    <td class="tab-text4 text-center">  010 </td>
                                    <td class="tab-text4"> Rounded </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>
                                 <tr>
                                    <td class="tab-text4 text-center">  011 </td>
                                    <td class="tab-text4"> Cutaway </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>
                                 <tr>
                                    <td class="tab-text4 text-center">  012 </td>
                                    <td class="tab-text4"> With Flap </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>
                                 <tr>
                                    <td class="tab-text4 text-center">  013 </td>
                                    <td class="tab-text4"> Slanted Flap </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>
                                 <tr>
                                    <td class="tab-text4 text-center">  014 </td>
                                    <td class="tab-text4"> Double Welted </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>
                                 <tr>
                                    <td class="tab-text4 text-center">  015 </td>
                                    <td class="tab-text4"> Side Vents </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>
                                 <tr>
                                    <td class="tab-text4 text-center">  016 </td>
                                    <td class="tab-text4"> Center Vent </td>
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