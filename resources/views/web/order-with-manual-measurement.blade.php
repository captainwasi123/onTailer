@extends('web.includes.master2')
@section('title', 'Order With Manual Measurement')
@section('content')

<!-- section heading -->
  <section>
    <div class="container-fluid custom-gird-website pad-top-100">
      <div class="about-section1 pad-bot-40">
        <h1 class="abril-font no-margin">YOUR MEASUREMENT</h1>
      </div>
    </div>    
  </section>
<!-- section heading close -->

<!-- section1 start -->
  <section>
    <div class="container-fluid custom-gird-website pad-bot-200">
      <div class="row">
        <div class="col-lg-12 col-md-12 col-12 col-sm-12 table-responsive">
            <table class="datatable table-striped table-bordered ai-table"> 
              <thead>
                  <tr>
                    <th rowspan="2">Id</th>
                    <th rowspan="2">Product</th>
                    <th rowspan="2">Name</th>
                    <th rowspan="2">Gender</th>
                    <th rowspan="2">Height</th>
                    <th rowspan="2">Age</th>
                    <th rowspan="2">Weight</th>
                    <th colspan="10">Manual Input Measurement</th>
                  </tr>
                  <tr>
                    <th class="ai-table-s">NECK</th>
                    <th class="ai-table-s">CHEST</th>
                    <th class="ai-table-s">WAIST</th>
                    <th class="ai-table-s">SEAT</th>
                    <th class="ai-table-s">SHIRT LENGTH</th>
                    <th class="ai-table-s">SHOULDER WIDTH</th>
                    <th class="ai-table-s">ARM LENGTH</th>
                    <th class="ai-table-s">WRIST</th>
                    <th class="ai-table-s">INSEAM</th>                    
                    <th class="ai-table-s">HIP</th>
                  </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td width="15%">
                    <div class="order-management-section1 pad-top-10 pad-left-10">
                      <img src="{{URL::to('/public/website')}}/images/order-1.png">
                      <h4 class="no-margin news-font">Cotton</h4>
                      <h3 class="news-font no-margin">SLIM FIT STRIPED COMFORT SHIRT</h3>
                      <h2 class="news-font no-margin"><b>₹ 1000/-</b></h2>
                    </div>                    
                  </td>
                  <td>XYZ</td>
                  <td>Female</td>
                  <td>5.5"</td>
                  <td>25</td>
                  <td>50Kg</td>
                  <td>35cm</td>
                  <td>55cm</td>
                  <td>38cm</td>
                  <td>55cm</td>
                  <td>66cm</td>
                  <td>81cm</td>
                  <td>64cm</td>
                  <td>55cm</td>
                  <td>66cm</td>
                  <td>76cm</td>
                </tr>
              </tbody>
            </table>
        </div>
      </div>
    </div>  
  </section>

<!-- section1 close -->
@endsection