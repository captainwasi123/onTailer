@extends('web.includes.master2')
@section('title', 'Measurement Profile')
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
  <section class="container-fluid pad-right-80 pad-left-80 pad-bot-200">
    <div class="row">
      <div class="col-md-12">
        <div class="measurement-section2">
          <div class="row">
            <div class="col-md-1 no-pad">
              <img src="{{URL::to('/public/website')}}/images/measurement-1.jpg">
            </div>
            <div class="col-md-8 no-pad">
              <div class="measurement-section-3">
                <h2 class="abril-font no-margin">NAME</h2>
                <h3 class="news-font no-margin"><b>AI ALGORITHM -</b> BODY MEASUREMENT</h3>
              </div>
              
            </div>
            <div class="col-md-3">
              <div class="measurement-btn pad-top-20">
                <button type="button" class="btn view-btn measurement-section2-btn news-font">VIEW</button>
                <button type="button" class="btn delete-btn measurement-section2-btn news-font">DELETE</button>
              </div>
            </div>
          </div>
        </div>
      </div>
      <div class="col-md-12 pad-top-20">
        <div class="measurement-section2">
          <div class="row">
            <div class="col-md-1 pad">
              <img src="{{URL::to('/public/website')}}/images/measurement-2.jpg">
            </div>
            <div class="col-md-8 pad">
              <div class="measurement-section-3">
                <h2 class="abril-font no-margin">NAME</h2>
                <h3 class="news-font no-margin"><b>MANUAL INPUT -</b> BODY MEASUREMENT</h3>
              </div>              
            </div>
            <div class="col-md-3">
              <div class="measurement-btn pad-top-20">
                <button type="button" class="btn view-btn measurement-section2-btn news-font">VIEW</button>
                <button type="button" class="btn delete-btn measurement-section2-btn news-font">DELETE</button>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>  
  </section>
<!-- section1 close -->
@endsection