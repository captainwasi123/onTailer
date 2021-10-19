@extends('web.includes.master2')
@section('title', 'Add to Cart')
@section('content')
<!-- Add To Cart Section Starts Here -->
<section class="custom-sec2 pad-top-80 pad-bot-80">
   <div class="container-fluid custom-container1">
      <div class="sec-head2 m-b-40 ">
         <h3 class="abril-font col-black"> MY CART <span> (1) </span> </h3>
      </div>
      <div class="row">
         <div class="col-md-12 col-lg-9 col-sm-12 col-12">
            <div class="block-element">
               <div class="cart-single-product">
                  <div class="cart-single-image">
                     <img class="custom-image1" src="{{URL::to('/public/website')}}/images/shirt-image1.png">
                     <div class="increment-container">
                        <button data-decrease>-</button>
                        <input data-value type="text" value="1" disabled />
                        <button data-increase>+</button>
                     </div>
                  </div>
                  <div class="cart-single-text  news-font">
                     <div class="cart-product-title">
                        <div class="cart-single-name">
                           <h4> SLIM FIT STRIPED COMFORT SHIRT </h4>
                           <h6> Cotton </h6>
                           <h5> ₹ 1000/- </h5>
                        </div>
                        <div class="cart-single-date">
                           <p> Delivery By Sat Oct 24 </p>
                        </div>
                     </div>
                     <div class="cart-single-actions">
                        <a href="" class="cart-btn1"> ADD MEASUREMENT </a>
                        <a href="" class="cart-btn1"> MODIFY </a>
                        <a href="" class="cart-btn1"> SAVE FOR LATER </a>
                        <a href="" class="cart-btn1"> REMOVE </a>
                     </div>
                  </div>
               </div>
            </div>
         </div>
         <div class="col-md-12 col-lg-3 col-sm-12 col-12">
            <div class="price-details-box news-font">
               <div class="price-details-head">
                  <h3 class="col-black"> PRICE DETAILS </h3>
               </div>
               <div class="price-details-content">
                  <table class="table-2">
                     <tbody>
                        <tr>
                           <td> PRICE (1 ITEM) </td>
                           <td> <b> ₹ </b> 1000/- </td>
                        </tr>
                        <tr>
                           <td> DELIVERY CHARGES </td>
                           <td> <b> FREE </b> </td>
                        </tr>
                     </tbody>
                     <tfoot>
                        <tr>
                           <th> TOTAL AMOUNT </th>
                           <th> 1000/- </th>
                        </tr>
                     </tfoot>
                  </table>
                  <a href="" class="custom-btn5 m-t-15"> Checkout </a>
               </div>
            </div>
         </div>
      </div>
   </div>
</section>
<!-- Add To Cart Section Ends Here -->
@endsection