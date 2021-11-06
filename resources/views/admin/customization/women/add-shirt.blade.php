@extends('admin.includes.master')
@section('title', 'Womens Add shirt')

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
                                          <label> <input type="checkbox"  name=""> Stand-Up </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> Rounded </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> Classic Narrow </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> Classic 2 Buttons </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> Classic Collar </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> Button Down </label>
                                       </div>
                                    </div>
                                    <div class="sec-head1">
                                       <h5 class="col-black"> Cuffs </h5>
                                    </div>
                                    <div class="checkboxes-parent1">
                                       <div>
                                          <label> <input type="checkbox"  name=""> French Simple </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> Classic Cuff </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> 3 Buttons </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> 2 Buttons </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> Two-Button Rounded </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> One-Button Rounded </label>
                                       </div>
                                       
                                    </div>
                                    <div class="sec-head1">
                                       <h5 class="col-black"> Sleeves </h5>
                                    </div>
                                    <div class="checkboxes-parent1 checkboxes-parent2">
                                       <div>
                                          <label> <input type="checkbox"  name=""> Short </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> Long </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> Bracelet </label>
                                       </div>
                                    
                                    </div>
                                    <div class="sec-head1">
                                       <h5 class="col-black"> Chest Placket </h5>
                                    </div>
                                    <div class="checkboxes-parent1">
                                       <div>
                                          <label> <input type="checkbox"  name=""> No Pocket</label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> 1 Pocket </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> 2 Pocket </label>
                                       </div>
                                       
                                    </div>
                                    <div class="sec-head1">
                                       <h5 class="col-black"> Fit </h5>
                                    </div>
                                    <div class="checkboxes-parent1">
                                       <div>
                                          <label> <input type="checkbox"  name=""> Standard Fit </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> Slim Fit </label>
                                       </div>
                                    </div>


                                    <div class="sec-head1">
                                       <h5 class="col-black"> Shoulder Straps </h5>
                                    </div>
                                    <div class="checkboxes-parent1">
                                       <div>
                                          <label> <input type="checkbox"  name=""> With Straps </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> Without Straps </label>
                                       </div>
                                    </div>


                                    <div class="sec-head1">
                                       <h5 class="col-black"> Fastening </h5>
                                    </div>
                                    <div class="checkboxes-parent1">
                                       <div>
                                          <label> <input type="checkbox"  name=""> Hidden Buttons </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> Standard </label>
                                       </div>
                                       <div>
                                          <label> <input type="checkbox"  name=""> Halfway Buttons </label>
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
                                    <td class="tab-text4"> Stand-Up </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>  

                                 <tr>
                                    <td class="tab-text4 text-center">  002 </td>
                                    <td class="tab-text4"> Rounded </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>  


                                 <tr>
                                    <td class="tab-text4 text-center">  003 </td>
                                    <td class="tab-text4"> Classic Narrow </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>  

                                 <tr>
                                    <td class="tab-text4 text-center">  004 </td>
                                    <td class="tab-text4"> Classic 2 Buttons </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>  

                                 <tr>
                                    <td class="tab-text4 text-center">  005 </td>
                                    <td class="tab-text4"> Classic </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>  

                                 <tr>
                                    <td class="tab-text4 text-center">  006 </td>
                                    <td class="tab-text4"> Button Down </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>  

                                 <tr>
                                    <td class="tab-text4 text-center">  007 </td>
                                    <td class="tab-text4"> French Simple </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>  

                                 <tr>
                                    <td class="tab-text4 text-center">  008 </td>
                                    <td class="tab-text4"> Classic </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>  

                                 <tr>
                                    <td class="tab-text4 text-center">  009 </td>
                                    <td class="tab-text4"> 3 Buttons </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>  

                                 <tr>
                                    <td class="tab-text4 text-center">  010 </td>
                                    <td class="tab-text4"> 2 Buttons </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>  

                                 <tr>
                                    <td class="tab-text4 text-center">  011 </td>
                                    <td class="tab-text4"> Two-Button Rounded </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>  

                                 <tr>
                                    <td class="tab-text4 text-center">  012 </td>
                                    <td class="tab-text4"> One-Button Rounded </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>  

                                 <tr>
                                    <td class="tab-text4 text-center">  013 </td>
                                    <td class="tab-text4"> Short </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>  

                                 <tr>
                                    <td class="tab-text4 text-center">  014 </td>
                                    <td class="tab-text4"> Long </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>  

                                 <tr>
                                    <td class="tab-text4 text-center">  015 </td>
                                    <td class="tab-text4"> Bracelet </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>  

                                 <tr>
                                    <td class="tab-text4 text-center">  016 </td>
                                    <td class="tab-text4"> No Pocket </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>  

                                 <tr>
                                    <td class="tab-text4 text-center">  017 </td>
                                    <td class="tab-text4"> 1 Pocket </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>  

                                 <tr>
                                    <td class="tab-text4 text-center">  018 </td>
                                    <td class="tab-text4"> 2 Pockets </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>  

                                 <tr>
                                    <td class="tab-text4 text-center">  019 </td>
                                    <td class="tab-text4"> Standard Fit </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>  

                                 <tr>
                                    <td class="tab-text4 text-center">  020 </td>
                                    <td class="tab-text4"> Slim Fit </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>  

                                 <tr>
                                    <td class="tab-text4 text-center">  021 </td>
                                    <td class="tab-text4"> With Straps </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>  

                                 <tr>
                                    <td class="tab-text4 text-center">  022 </td>
                                    <td class="tab-text4"> Without Straps </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>  

                                 <tr>
                                    <td class="tab-text4 text-center">  023 </td>
                                    <td class="tab-text4"> Hidden Buttons </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>  

                                 <tr>
                                    <td class="tab-text4 text-center">  024 </td>
                                    <td class="tab-text4"> Standard </td>
                                    <td class="tab-text4 text-center"> <input type="file" name=""> </td>
                                 </tr>  

                                 <tr>
                                    <td class="tab-text4 text-center">  025 </td>
                                    <td class="tab-text4"> Halfway Buttons </td>
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