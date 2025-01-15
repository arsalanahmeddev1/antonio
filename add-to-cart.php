<?php
$page_title = 'Add to cart';
include('./include/head.php');
include('./include/header.php')
?>
<section class="inner-banner text-center">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-md-6">
        <h1 class="inner-banner-hd text-white">Add to cart</h1>
        <div class="mt-5 mb-100 mx-auto d-flex align-items-center gap-20 diamond-wrapper diamond-light">
          <div class="diamond-border"></div>
          <img src="./assets/images/diamond-white.png" class="" alt="">
          <div class="diamond-border"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="cart-sec pt-80">
  <div class="container">
    <div class="row">
      <div class="col-md-12">
        <ul class="secondry-nav mx-auto d-flex justify-content-between pb-100">
          <li class="position-relative"><a class="d-flex align-items-center justify-content-between gap-20 active" href="#"><span class="d-flex align-items-center justify-content-center ">1</span> Shopping Cart</a></li>
          <li class="position-relative"><a class="d-flex align-items-center justify-content-between gap-20" href="#"><span class="d-flex align-items-center justify-content-center ">2</span> Payment & Delivery Options</a></li>
          <li class="position-relative"><a class="d-flex align-items-center justify-content-between gap-20" href="#"><span class="d-flex align-items-center justify-content-center ">3</span> Order Received</a></li>
        </ul>
        <table class="table cart-table mb-90">
          <thead>
            <tr>
              <th scope="col">Product</th>
              <th scope="col">Price</th>
              <th scope="col">Quantity</th>
              <th scope="col">Subtotal</th>
              <th scope="col">Remove</th>
            </tr>
          </thead>
          <tbody>
            <tr>
              <td>
                <div class="d-flex align-items-center gap-20">
                  <div class="product-img-wrapper">
                    <img src="./assets/images/product-front-img-01.png" alt="">
                  </div>
                  <span class="fs-24 fw-500">Product Name</span>
                </div>
              </td>
              <td><span class="fs-24 fw-300">$13.95</span></td>
              <td>
                <div class="quantity-wrapper d-flex justify-content-between align-items-center">
                  <input type="number" class="fs-21 quantity" id="quantity" value="0" min="0" />
                  <div class="d-flex flex-column ">
                    <button class="border-0 bg-transparent increase-btn"><i class="fa-solid fa-angle-up"></i></button>
                    <button class="border-0 bg-transparent decrease-btn"><i class="fa-solid fa-angle-down"></i></button>
                  </div>
                </div>
              </td>
              <td>
                <span class="fs-24 fw-500">$19.00</span>
              </td>
              <td>
                <button class="prodctu-remove-btn border-0 bg-transparent"><i class="fa-solid fa-xmark"></i></button>
              </td>
            </tr>
          </tbody>
        </table>
        <div class="row justify-content-between">
          <div class="col-lg-6 mb-16 mb-lg-0">
            <div class="coupen-wrapper d-flex justify-content-between align-items-center position-relative">
              <img src="./assets/images/coupen.svg" class="coupen-img position-absolute translate-middle-y top-50" alt="">
              <input type="number" class="fs-18 border-0" placeholder="Coupon Code">
              <button class="border-0 bg-transparent">Apply Coupon</button>
            </div>
          </div>
          <div class="col-lg-6">
            <div class="d-flex align-items-center gap-50 justify-content-end">
              <a href="" class="fw-500 fs-20 light-black">Continue Shopping</a>
              <button class="btn-black sug-submit-btn radius-60 w-100 border-0" style="max-width: 23.6rem; font-weight: 500;">Update Cart</button>
            </div>
          </div>
          <div class="col-lg-6 ms-auto mt-90">
            <div class="cart-totals-wrapper">
              <h4 class="light-black fs-30 fw-500 mb-32">Cart totals</h4>
              <table class="cart-totals-table w-100 mb-55">
                <tbody>
                  <tr>
                    <td>
                    Subtotal
                    </td>
                    <td>$19.00</td>
                  </tr>
                  <tr>
                    <td>
                    Shipping
                    </td>
                    <td>
                      <div>Flat rate</div>
                      <div>Shipping to <span class="fw-700">NY</span>.</div>
                      <div>Change address</div>
                    </td>
                  </tr>
                  <tr>
                    <td>
                    Total
                    </td>
                    <td>$19.00</td>
                  </tr>
                </tbody>
              </table>
              <div class="d-flex text-center">
              <a href="./checkout.php" class="btn-black sug-submit-btn radius-60 w-100 border-0" style="font-weight: 500;">Proceed to checkout</a>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include('./include/footer.php') ?>
<?php include('./include/scripts.php') ?>