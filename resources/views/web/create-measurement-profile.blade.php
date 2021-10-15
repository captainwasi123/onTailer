@extends('web.includes.master2')
@section('title', 'Create Measurement Profile')
@section('content')

<!-- section heading -->
  <section class="container-fluid pad-right-80 pad-left-80 pad-top-100 pad-bot-100">
    <h3 class="no-margin" style="text-align: center;">
      <span class="measurement-head news-font pad-right-30">personal information</span>
      <span class="measurement-head1  news-font pad-left-30">my measurement</span>
    </h3>   
  </section>
<!-- section heading close -->

<!-- section1 start -->
  <section class="container-fluid pad-right-80 pad-left-80 pad-top-20 pad-bot-200">
    <div class="row">
      <div class="col-lg-12 col-md-12 col-12 col-sm-12">
        <div class="measurement-section3">
          <h3 class="news-font no-margin">You Do Not Have Any Saved Measurement </h3>
          <button type="button" class="btn measurement-section3-btn add-btn news-font m-t-30">ADD MEASUREMENTS</button>
        </div>
      </div>
    </div>  
  </section>
<!-- section1 close -->
@endsection
