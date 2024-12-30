<?php
$page_title = 'Checkout';
include('./include/head.php');
include('./include/header.php')
?>
<section class="inner-banner text-center">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-md-6">
        <h1 class="inner-banner-hd text-white">Check out </h1>
        <div class="mt-5 mb-100 mx-auto d-flex align-items-center gap-20 diamond-wrapper diamond-light" style="max-width: 35rem;">
          <div class="diamond-border"></div>
          <img src="./assets/images/diamond-white.png" class="" alt="">
          <div class="diamond-border"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="checkout-sec">
  <div class="container">
    <div class="row justify-content-between ">
      <div class="col-md-12">
        <h5 class="fs-23 grey-600 text-center pt-64">Returning Customer?<a href="javascript:;" class="light-black ml-10">Click here to login</a></h5>
        <h5 class="fs-23 grey-600 text-center pt-64">Have a coupon? <a href="javascript:;" class="light-black ml-10">Click here to enter your code</a></h5>
        <ul class="secondry-nav mx-auto d-flex justify-content-between pt-120 pb-100">
          <li class="position-relative"><a class="d-flex align-items-center justify-content-between gap-20 active" href="#"><span class="d-flex align-items-center justify-content-center ">1</span> Shopping Cart</a></li>
          <li class="position-relative"><a class="d-flex align-items-center justify-content-between gap-20 active" href="#"><span class="d-flex align-items-center justify-content-center ">2</span> Payment & Delivery Options</a></li>
          <li class="position-relative"><a class="d-flex align-items-center justify-content-between gap-20" href="#"><span class="d-flex align-items-center justify-content-center ">3</span> Order Received</a></li>
        </ul>
      </div>
      <div class="col-lg-6">
        <h2 class="light-black fs-59 fw-500 mb-50">Billing details</h2>
        <form action="">
          <div class="row checkout-form">
            <div class="col-lg-6">
              <div class="field-wrap">
                <label for="" class="label-field">First name <span>*</span></label>
                <input type="text" class="input-field">
              </div>
            </div>
            <div class="col-lg-6">
              <div class="field-wrap">
                <label for="" class="label-field">Last name <span>*</span></label>
                <input type="text" class="input-field">
              </div>
            </div>
            <div class="col-lg-12">
              <div class="field-wrap">
                <label for="" class="label-field">Company name (optional) <span>*</span></label>
                <input type="text" class="input-field">
              </div>
              <div class="field-wrap">
                <label for="" class="label-field">Country / Region <span>*</span></label>
                <input type="text" class="input-field">
              </div>
              <div class="field-wrap">
                <label for="" class="label-field">Street address <span>*</span></label>
                <input type="text" class="input-field" placeholder="House number and street name">
              </div>
              <div class="field-wrap">
                <input type="text" class="input-field" placeholder="Apartment, suite, unit etc. (optional)">
              </div>
              <div class="field-wrap">
                <label for="" class="label-field">Town / City <span>*</span></label>
                <input type="text" class="input-field">
              </div>
              <div class="field-wrap">
                <label for="" class="label-field">State <span>*</span></label>
                <input type="text" class="input-field">
              </div>
              <div class="field-wrap">
                <label for="" class="label-field">ZIP Code <span>*</span></label>
                <input type="text" class="input-field">
              </div>
              <div class="field-wrap">
                <label for="" class="label-field">Phone <span>*</span></label>
                <input type="text" class="input-field">
              </div>
              <div class="field-wrap">
                <label for="" class="label-field">Email address <span>*</span></label>
                <input type="text" class="input-field">
              </div>
            </div>
          </div>
        </form>
      </div>
      <div class="col-lg-4 your-order-wrapper">
        <h2 class="light-black fs-59 fw-500 mb-50">Your order</h2>
        <div class="pl-50 mb-60">
          <div class="d-flex align-items-center justify-content-between order-wrapper">
            <span class="fw-500 fs-20 light-black">Black button down × 1</span>
            <span class="fw-500 fs-20 light-black">$19.00</span>
          </div>
          <div class="d-flex align-items-center justify-content-between order-wrapper">
            <span class="fw-500 fs-20 light-black">Subtotal</span>
            <span class="fw-500 fs-20 light-black">$19.00</span>
          </div>
          <div class="d-flex align-items-center justify-content-between order-wrapper">
            <span class="fw-500 fs-20 light-black">Shipping</span>
            <span class="fw-500 fs-20 light-black">Flat rate</span>
          </div>
          <div class="d-flex align-items-center justify-content-between order-wrapper">
            <span class="fw-500 fs-20 light-black">Total</span>
            <span class="fw-500 fs-20 light-black">$19.00</span>
          </div>
        </div>
        <h2 class="light-black fs-59 fw-500 mb-50">Payment</h2>
        <div class="pl-50">
          <form action="">
            <div class="form-check first d-flex align-items-center gap-20">
              <input class="form-check-input mt-0" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
              <label class="form-check-label fs-21 fw-500 light-black" for="flexRadioDefault1">
                Cash on delivery <span class="grey-600 fw-300 ml-22">Pay with cash upon delivery.</span>
              </label>
            </div>
            <div class="form-check d-flex align-items-center gap-20">
              <input class="form-check-input mt-0" type="radio" name="flexRadioDefault" id="flexRadioDefault2" checked>
              <label class="form-check-label fw-500 fs-22" for="flexRadioDefault2">
                PayPal <img src="./assets/images/payment-cards.png" alt=""> <span class="border-bottom pb-5">What is PayPal?</span>
              </label>
            </div>
            <button class="btn-black sug-submit-btn text-center w-100 border-0 mt-80 " style="max-width: 34.2rem; font-weight: 500;">Place order</button>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include('./include/footer.php') ?>
<?php include('./include/scripts.php') ?>