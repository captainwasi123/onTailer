@extends('admin.includes.master')
@section('title', 'Standard Measurement')

@section('content')

<div class="main-content">
            <div class="content-border">
               <div class="page-heading">
                  <h3> Measurement </h3>
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
                                 <th class="tab-text3 text-left"> # </th>
                                 <th class="tab-text3 text-left"> Name </th>
                                 <th class="tab-text3 text-left"> Gender </th>
                                 <th class="tab-text3 text-left"> Height </th>
                                 <th class="tab-text3 text-left"> Age </th>
                                 <th class="tab-text1 text-center"> Standard Size </th>
                                 <th class="tab-text1 text-center"> Action </th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td class="tab-text4"> 1 </td>
                                 <td class="tab-text4"> Xyz </td>
                                 <td class="tab-text4"> Male </td>
                                 <td class="tab-text4"> 5.5" </td>
                                 <td class="tab-text4"> 27 </td>
                                 <td class="tab-text4 text-center"> L </td>
                                 <td class="tab-text4 text-center"> <a href="" class="del-icon"> <i class="fa fa-trash"> </i> </a> </td>
                              </tr>

                              <tr>
                                 <td class="tab-text4">   </td>
                                 <td class="tab-text4">  </td>
                                 <td class="tab-text4">   </td>
                                 <td class="tab-text4">   </td>
                                 <td class="tab-text4">   </td>
                                 <td class="tab-text4 text-center">  </td>
                                 <td class="tab-text4 text-center">  </td>
                              </tr>

                              <tr>
                                 <td class="tab-text4">   </td>
                                 <td class="tab-text4">  </td>
                                 <td class="tab-text4">   </td>
                                 <td class="tab-text4">   </td>
                                 <td class="tab-text4">   </td>
                                 <td class="tab-text4 text-center">  </td>
                                 <td class="tab-text4 text-center">  </td>
                              </tr>

                              <tr>
                                 <td class="tab-text4">   </td>
                                 <td class="tab-text4">  </td>
                                 <td class="tab-text4">   </td>
                                 <td class="tab-text4">   </td>
                                 <td class="tab-text4">   </td>
                                 <td class="tab-text4 text-center">  </td>
                                 <td class="tab-text4 text-center">  </td>
                              </tr>

                              <tr>
                                 <td class="tab-text4">   </td>
                                 <td class="tab-text4">  </td>
                                 <td class="tab-text4">   </td>
                                 <td class="tab-text4">   </td>
                                 <td class="tab-text4">   </td>
                                 <td class="tab-text4 text-center">  </td>
                                 <td class="tab-text4 text-center">  </td>
                              </tr>
                               
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>
@endsection