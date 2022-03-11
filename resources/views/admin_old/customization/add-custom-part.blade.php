@extends('admin.includes.master')
@section('title', 'Add Customization')

@section('content')


<div class="main-content">
            <div class="content-border">
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
                           <button class="custom-btn1"> Add Customizations  </button>	
                        </div>
                        <div class="col-md-12 col-lg-12 col-sm-12 col-12">
                           <button class="custom-btn2"> ADD </button>
                        </div>
                     </div>
                  </form>
               </div>
            </div>
         </div>

@endsection