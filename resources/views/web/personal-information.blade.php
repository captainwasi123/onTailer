@extends('web.includes.master2')
@section('title', 'Measurement Profile')
@section('content')

<!-- section heading -->
  <section class="container-fluid pad-right-80 pad-left-80 pad-top-100 pad-bot-100">
    <h3 class="no-margin" style="text-align: center;">
      <span class="measurement-head news-font pad-right-30"><b>personal information</b></span>
      <span class="measurement-head1  news-font pad-left-30">my measurement</span>
    </h3>   
  </section>
<!-- section heading close -->
<style type="text/css">

</style>
<!-- section1 start -->
  <section class="container-fluid pad-right-80 pad-left-80 pad-bot-200">
    <div class="row">
      <div class="col-md-12">
        <div class="personal-info-section">
          <form action="#" method="post">
            <div class="row">
              <div class="col-md-5">
                <div>
                  <label class="form-label personal-info-label abril-font" for="inputEmail">NAME</label>
                  <label class="form-label personal-info-edit news-font" for="inputEmail" style="float: right;"><a href="">Edit</a></label>
                  <input type="email" class="form-control p-form-style1 m-t-40" id="inputEmail" placeholder="First Name" required>
                </div>                
              </div>
              <div class="col-md-2">
              </div>
              <div class="col-md-5">
                <div>
                  <input type="email" class="form-control p-form-style1 m-t-80" id="inputEmail" placeholder="Last Name" required>
                </div>                
              </div>
              <div class="col-md-5 m-t-50">
                <div>
                  <label class="form-label personal-info-label abril-font" for="inputEmail">EMAIL</label>
                  <label class="form-label personal-info-edit news-font" for="inputEmail" style="float: right;"><a href="">&nbsp;&nbsp;|&nbsp;&nbsp;Change Password</a></label>
                  <label class="form-label personal-info-edit news-font" for="inputEmail" style="float: right;"><a href="">Edit </a></label>
                   
                  <input type="email" class="form-control p-form-style1 m-t-40" id="inputEmail" placeholder="Email" required>
                </div>                
              </div>
              <div class="col-md-2">
              </div>
              <div class="col-md-5 m-t-50">
                <div>
                  <label class="form-label personal-info-label abril-font" for="inputEmail">MOBILE NUMBER</label>
                  <label class="form-label personal-info-edit news-font" for="inputEmail" style="float: right;"><a href="">Edit </a></label>
                  <input type="text" class="form-control p-form-style1 m-t-40" id="inputEmail" placeholder="Mobile Number" required>
                </div>               
              </div>

              <div class="col-md-5 m-t-50">
                <div>
                  <label class="form-label personal-info-label abril-font" for="inputEmail">ADDRESS</label>
                  <label class="form-label personal-info-edit news-font" for="inputEmail" style="float: right;"><a href="">Edit </a></label>
                  <input type="text" class="form-control p-form-style1 m-t-40" id="inputEmail" placeholder="Address" required>
                  <input type="text" class="form-control p-form-style1 m-t-40" id="inputEmail" placeholder="City" required>
                  <input type="text" class="form-control p-form-style1 m-t-40" id="inputEmail" placeholder="Pincode" required>
                </div>                
              </div>
              <div class="col-md-2">
              </div>
              <div class="col-md-5 m-t-80">
                <div>
                  <select  class="form-control p-form-style1 m-t-50">
                    <option>Country</option>
                    <option>Pakistan</option>
                  </select>
                  <select  class="form-control p-form-style1 m-t-40">
                    <option>State</option>
                    <option>Pakistan</option>
                  </select>
                </div>               
              </div>
            </div>
            <div class="personal-btn-sec pad-top-100">
                <button type="button" class="btn personal-btn1 news-font">SAVE</button>
                <button type="button" class="btn personal-btn2 news-font">CANCEL</button>
              </div>
            </div>
            
          </form>
        </div>
      </div>
    </div>  
  </section>
<!-- section1 close -->
@endsection

