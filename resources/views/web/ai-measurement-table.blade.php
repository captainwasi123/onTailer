@extends('web.includes.master2')
@section('title', 'AI Measurement Table')
@section('content')

<!-- section heading -->
  <section class="container-fluid pad-right-80 pad-left-80 pad-top-100">
    <div class="about-section1 pad-bot-40">
      <h1 class="abril-font no-margin">YOUR MANAGEMENT</h1>
    </div>    
  </section>
<!-- section heading close -->

<!-- section1 start -->
  <section class="container-fluid pad-right-80 pad-left-80 pad-bot-200">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12 col-sm-12">
          <table class="datatable table-striped table-bordered ai-table"> 
            <thead>
                <tr>
                  <th rowspan="2">name</th>
                  <th rowspan="2"> gender</th>
                  <th rowspan="2">height</th>
                  <th rowspan="2">weight</th>
                  <th rowspan="2">age</th>
                  <th colspan="6">aI algorithm</th>
                  <th rowspan="2">action</th>
                </tr>
                <tr>
                  <th class="ai-table-s">neck</th>
                  <th class="ai-table-s">sleeves length</th>
                  <th class="ai-table-s">shoulder width</th>
                  <th class="ai-table-s">chest around</th>
                  <th class="ai-table-s">stomach</th>
                  <th class="ai-table-s">bicep around</th>
                </tr>
            </thead>
            <tbody>
              <tr>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td></td>
                <td><button class="btn edit-btn-table news-font">EDIT</button></td>
              </tr>
            </tbody>
          </table>
      </div>
    </div>  
  </section>
<!-- section1 close -->
@endsection