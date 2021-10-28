@extends('web.includes.master2')
@section('title', 'Order With Standard Measurement')
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
                    <th >Id</th>
                    <th >Product</th>
                    <th >Name</th>
                    <th >Gender</th>
                    <th >Height</th>
                    <th >Age</th>
                    <th >Weight</th>
                    <th >Standard Size</th>
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
                  <td>L</td>
                </tr>
              </tbody>
            </table>
        </div>
      </div>
    </div>  
  </section>

<!-- section1 close -->
@endsection