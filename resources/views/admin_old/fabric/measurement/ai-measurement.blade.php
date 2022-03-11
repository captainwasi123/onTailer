@extends('admin.includes.master')
@section('title', 'Ai Measurement')

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
                        <table class="table-1">
                           <thead class="custom-border1">
                              <tr>
                                 <th colspan="5" class="empty-tab"> Empty </th>
                                 <th colspan="8" class="tab-text3"> AI Algorithm Measurement </th>
                                 <th class="empty-tab"> Empty </th>
                              </tr>
                           </thead>
                           <thead>
                              <tr>
                                 <th class="tab-text1"> # </th>
                                 <th class="tab-text1"> Name </th>
                                 <th class="tab-text1"> Gender </th>
                                 <th class="tab-text1"> Height </th>
                                 <th class="tab-text1"> Age </th>
                                 <th class="tab-text2"> NECK </th>
                                 <th class="tab-text2"> SLEEVES LENGTH </th>
                                 <th class="tab-text2"> SHOULDER WIDTH </th>
                                 <th class="tab-text2"> CHEST AROUND </th>
                                 <th class="tab-text2"> STOMACH </th>
                                 <th class="tab-text2"> BICEP AROUND </th>
                                 <th class="tab-text2"> WAIST </th>
                                 <th class="tab-text2"> HIP </th>
                                 <th class="tab-text1"> Action </th>
                              </tr>
                           </thead>
                           <tbody>
                              <tr>
                                 <td> 1 </td>
                                 <td> Xyz </td>
                                 <td> Female </td>
                                 <td> 5.5" </td>
                                 <td> 27 </td>
                                 <td> 35cm </td>
                                 <td> 55cm </td>
                                 <td> 38cm </td>
                                 <td> 81cm </td>
                                 <td> 64cm </td>
                                 <td> NA </td>
                                 <td> 66cm </td>
                                 <td> 76cm</td>
                                 <td> <a href="" class="del-icon"> <i class="fa fa-trash"> </i> </a> </td>
                              </tr>
                              <tr>
                                 <td> 2 </td>
                                 <td> Xyz </td>
                                 <td> Female </td>
                                 <td> 5.5" </td>
                                 <td> 27 </td>
                                 <td> 35cm </td>
                                 <td> 55cm </td>
                                 <td> 38cm </td>
                                 <td> 81cm </td>
                                 <td> 64cm </td>
                                 <td> NA </td>
                                 <td> 66cm </td>
                                 <td> 76cm</td>
                                 <td> <a href="" class="del-icon"> <i class="fa fa-trash"> </i> </a> </td>
                              </tr>
                              <tr>
                                 <td>   </td>
                                 <td>   </td>
                                 <td>   </td>
                                 <td>   </td>
                                 <td>   </td>
                                 <td>   </td>
                                 <td>   </td>
                                 <td>   </td>
                                 <td>   </td>
                                 <td>  </td>
                                 <td>   </td>
                                 <td>   </td>
                                 <td>  </td>
                                 <td>   </td>
                              </tr>
                              <tr>
                                 <td>   </td>
                                 <td>   </td>
                                 <td>   </td>
                                 <td>   </td>
                                 <td>   </td>
                                 <td>   </td>
                                 <td>   </td>
                                 <td>   </td>
                                 <td>   </td>
                                 <td>  </td>
                                 <td>   </td>
                                 <td>   </td>
                                 <td>  </td>
                                 <td>   </td>
                              </tr>
                              <tr>
                                 <td>   </td>
                                 <td>   </td>
                                 <td>   </td>
                                 <td>   </td>
                                 <td>   </td>
                                 <td>   </td>
                                 <td>   </td>
                                 <td>   </td>
                                 <td>   </td>
                                 <td>  </td>
                                 <td>   </td>
                                 <td>   </td>
                                 <td>  </td>
                                 <td>   </td>
                              </tr>
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>
            </div>
         </div>

@endsection