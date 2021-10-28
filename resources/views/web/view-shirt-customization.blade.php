@extends('web.includes.master2')
@section('title', 'Order With Manual Measurement')
@section('content')

<!-- section heading -->
  <section>
    <div class="container-fluid custom-gird-website pad-top-100">
      <div class="about-section1 pad-bot-40">
        <h1 class="abril-font no-margin">YOUR SELECTED CUSTOMIZATIONS</h1>
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
                    <th rowspan="2">#</th>
                    <th rowspan="2">Product</th>
                    <th rowspan="2">Catagory</th>
                    <th colspan="7">Custom Parts</th>
                  </tr>
                  <tr>
                    <th class="ai-table-s">COLLAR</th>
                    <th class="ai-table-s">CUFFS</th>
                    <th class="ai-table-s">SLEEVES</th>
                    <th class="ai-table-s">CHEST POCKET</th>
                    <th class="ai-table-s">FIT</th>
                    <th class="ai-table-s">PLACKET</th>
                    <th class="ai-table-s">BOTTOM CUT</th>
                  </tr>
              </thead>
              <tbody>
                <tr>
                  <td>1</td>
                  <td>Custom Shirt</td>
                  <td>Shirt</td>
                  <td>Kent Collar</td>
                  <td>Single Cuff 2 Button</td>
                  <td>Long</td>
                  <td>No Pocket</td>
                  <td>Slim Fit</td>
                  <td>No Placket</td>
                  <td>Modern</td>
                </tr>
                <tr>
                  <td>1</td>
                  <td>Custom Shirt</td>
                  <td>Shirt</td>
                  <td>Kent Collar</td>
                  <td>Single Cuff 2 Button</td>
                  <td>Long</td>
                  <td>No Pocket</td>
                  <td>Slim 
                  Fit</td>
                  <td>No Placket</td>
                  <td>Modern</td>
                </tr>
              </tbody>
            </table>
        </div>
      </div>
    </div>  
  </section>

<!-- section1 close -->
@endsection