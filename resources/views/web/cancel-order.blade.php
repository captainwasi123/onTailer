@extends('web.includes.master2')
@section('title', 'Cancel Order')
@section('content')

<!-- section1 start -->
<section>

  <div class="container-fluid custom-gird-website pad-top-100 pad-bot-200">
    <div class="row " >
      <div class="col-lg-9 col-md-7 col-12 col-sm-12 cancel-order" style="border: 1px solid #D9D7D7;">
        <div class="row">
          <div class="col-lg-3 col-md-7 col-12 col-sm-12">
            <div class="cancel-order-section">
              <h3 class="no-margin news-font">REASON FOR CANCELLATION</h3>
            </div>
          </div>
          <div class="col-lg-9 col-md-7 col-12 col-sm-12">
            <section class="accordion-section" aria-label="Question Accordions">
              <div class="panel-group" id="accordion" role="tablist" aria-multiselectable="true">
                <div class="panel panel-default">
                  <div class="panel-heading" role="tab" id="heading0">
                    <h3 class="panel-title">                      
                      <a class="collapsed" role="button" title="" data-toggle="collapse" data-parent="#accordion" href="#collapse0" aria-expanded="true" aria-controls="collapse0">Price For The Product Has Decreased
                      </a>
                    </h3>
                  </div>
                </div>
              </div>
            </section> 
          </div>          
        </div>
        <div class="row pad-top-40 ">
          <div class="col-lg-3 col-md-7 col-12 col-sm-12">
            <div class="cancel-order-section">
              <h3 class="no-margin news-font">COMMENTS</h3>
            </div>
          </div>
          <div class="col-lg-9 col-md-7 col-12 col-sm-12">
            <form>
              <textarea rows="4" class="news-font m-t-20 cancel-order-textarea" cols="50" placeholder=""></textarea>
              <input type="submit" name="" class="news-font m-t-40 cancel-order-btn" value="CONTINUE">
            </form>       
          </div>          
        </div>
        
      </div>
      <div class="col-lg-3 col-md-5 col-12 col-sm-12" style="">
        <div style="border: 1px solid #D9D7D7;">
        <div class="cancel-order-section1">
          <h3 class="no-margin news-font pad-left-20">ITEM DETAILS</h3>
        </div>
        <hr class="no-margin">
        <div class="row pad-top-20 pad-bot-20">
          <div class="col-lg-6 col-md-7 col-12 col-sm-12">
            <div class="cancel-order-section2 pad-left-20">
              <h2 class="no-margin news-font">SLIM FIT STRIPED COMFORT SHIRT</h2>
              <h3 class="no-margin news-font">Cotton</h3>
              <h4>₹ 1000</h4>
            </div>
          </div>
          <div class="col-lg-6 col-md-7 col-12 col-sm-12">
            <img src="{{URL::to('/public/website')}}/images/order-1.png">      
          </div>          
        </div>
        </div>   
      </div>
    </div>
  </div>
</section>
<!-- section1 close -->

@endsection