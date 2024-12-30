<?php
$page_title = 'Product Details';
include('./include/head.php');
include('./include/header.php')
?>
<section class="inner-banner text-center">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-md-6">
        <h1 class="inner-banner-hd text-white">Product Name</h1>
        <div class="mt-5 mb-100 mx-auto d-flex align-items-center gap-20 diamond-wrapper diamond-light">
          <div class="diamond-border"></div>
          <img src="./assets/images/diamond-white.png" class="" alt="">
          <div class="diamond-border"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="prod-details-sec-1 pt-140 pb-150">
  <div class="container">
    <div class="row">
      <div class="col-lg-6">
        <div class="product-details-card">
          <div class="card-wrapper">
            <!-- card left -->
            <div class="product-imgs">
              <div class="img-display overflow-hidden">
                <div class="img-showcase mb-70">
                  <img src="./assets/images/product-front-img-01.png" alt="shoe image">
                  <img src="./assets/images/product-front-img-01.png" alt="shoe image">
                </div>
              </div>
              <div class="img-select justify-content-center gap-40">
                <div class="img-item">
                  <a href="#" data-id="1">
                    <img src="./assets/images/product-front-img-01.png" alt="shoe image">
                  </a>
                </div>
                <div class="border-right"></div>
                <div class="img-item">
                  <a href="#" data-id="2">
                    <img src="./assets/images/product-front-img-01.png" alt="shoe image">
                  </a>
                </div>
              </div>
            </div>
            <!-- card right -->
          </div>
        </div>
      </div>
      <div class="col-lg-6">
        <div class="product-card-details">
          <h2 class="fs-45 fw-500 mb-60 text-uppercase">Product Name</h2>
          <div class="d-flex align-items-center gap-20 mb-50">
            <div class="prod-price-wrapper">
              <h5 class="fs-50 fw-600 d-flex align-items-center"><span>$</span>13.95</h5>
            </div>
            <div>
              <span class="d-block fs-30 fw-600">Save 25%</span>
              <span class="d-block fw-500 dark-gray fs-22" style="color: #474747;">Inclusive deal of the day</span>
            </div>
          </div>
          <p class="fs-30 mb-26">
            Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer took a galley of type and scrambled it to make a type specimen book. It has survived not only five centuries
          </p>
          <form action="">
            <div class="d-flex align-items-center gap-30 mb-35">
              <select class="form-select custom-select radius-60" aria-label="Default select example">
                <option selected="">Size</option>
                <option value="1">Size</option>
                <option value="2">Size</option>
                <option value="3">Size</option>
              </select>
              <select class="form-select custom-select radius-60" aria-label="Default select example">
                <option selected="">Colors</option>
                <option value="1">Colors</option>
                <option value="2">Colors</option>
                <option value="3">Colors</option>
              </select>
            </div>
            <div class="d-flex align-items-center gap-30">
              <div class="qty-wrapper">
                <span class="fs-25 fw-600" style="color: #7D7D7D;">QTY</span>
                <select class="" aria-label="Default select example">
                  <option selected="">1</option>
                  <option value="1">1</option>
                  <option value="2">2</option>
                  <option value="3">3</option>
                </select>
              </div>
               <button class="btn-black sug-submit-btn radius-60 w-100 border-0" style="max-width: 25.5rem">Add to Cart</button>
            </div>
          </form>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="prod-details-sec-2">
  <div class="container">
    <div class="col-12">
        <h2 class="fs-45 fw-500 mb-10 dark-gray">Description</h2>
        <p class="fs-30 fw-300 mb-50">
        Dicta sunt explicabo. Nemo enim ipsam voluptatem voluptas sit odit aut fugit, sed quia consequuntur. Lorem ipsum dolor. Aquia sit amet, elitr, sed diam nonum eirmod tempor invidunt labore et dolore magna aliquyam.erat, sed diam voluptua. At vero accusam et justo duo dolores et ea rebum. Stet clitain vidunt ut labore eirmod tempor invidunt magna aliquyam.
        </p>
    </div>
  </div>
</section>
<section class="prod-details-sec-3 pb-80">
  <div class="container">
    <div class="col-md-12">
      <h2 class="dark-gray fs-45 fw-500 text-center mb-44">Reviews</h2>
      <div class="reviews-slider">
        <div class="d-flex gap-30">
          <div class="profile-img-wrapper">
            <img src="./assets/images/profile-img-01.png" alt="">
          </div>
          <div class="reivews-slider-content">
            <p class="fs-22 pb-20">
            Lorem ipsum dolor sit amet consectetur. In dolor pellentesque gravida lorem amet nullam a. Dolor consectetur justo fusce ut dictum malesuada nulla gravida. In id sodales amet.
            </p>
            <ul class="d-flex align-items-center gap-5 stars-ratings mb-20">
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
            </ul>
            <h4 class="fw-700 fs-22 pb-15">Jessica Alba</h4>
            <div class="border-bottom-black"></div>
          </div>
        </div>
        <div class="d-flex gap-30">
          <div class="profile-img-wrapper">
            <img src="./assets/images/profile-img-01.png" alt="">
          </div>
          <div class="reivews-slider-content">
            <p class="fs-22 pb-20">
            Lorem ipsum dolor sit amet consectetur. In dolor pellentesque gravida lorem amet nullam a. Dolor consectetur justo fusce ut dictum malesuada nulla gravida. In id sodales amet.
            </p>
            <ul class="d-flex align-items-center gap-5 stars-ratings mb-20">
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
            </ul>
            <h4 class="fw-700 fs-22 pb-15">Jessica Alba</h4>
            <div class="border-bottom-black"></div>
          </div>
        </div>
        <div class="d-flex gap-30">
          <div class="profile-img-wrapper">
            <img src="./assets/images/profile-img-01.png" alt="">
          </div>
          <div class="reivews-slider-content">
            <p class="fs-22 pb-20">
            Lorem ipsum dolor sit amet consectetur. In dolor pellentesque gravida lorem amet nullam a. Dolor consectetur justo fusce ut dictum malesuada nulla gravida. In id sodales amet.
            </p>
            <ul class="d-flex align-items-center gap-5 stars-ratings mb-20">
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
            </ul>
            <h4 class="fw-700 fs-22 pb-15">Jessica Alba</h4>
            <div class="border-bottom-black"></div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include('./include/marque-sec.php') ?>
<section class="sec-recent-products pb-150 pt-114">
  <div class="container">
    <h2 class="sec-hd text-uppercase text-center">recent Products</h2>
    <div class="mt-5 mb-80 pb-80 mx-auto d-flex align-items-center gap-20 diamond-wrapper">
      <div class="diamond-border"></div>
      <img src="./assets/images/diamond.png" class="" alt="">
      <div class="diamond-border"></div>
    </div>
    <div class="row row-xl-cols-5 row-gap-20 align-items-center">
      <div class="col-6 col-md-4 col-lg-4 col-xl ">
        <div class="product-card card">
          <div class="card-inner mb-18">
            <div class="card-front">
              <img src="./assets/images/product-front-img-01.png" alt="" loading="lazy">
            </div>
            <div class="card-back">
              <img src="./assets/images/product-back-img-01.png" alt="" loading="lazy">
            </div>
          </div>
          <div class="product-card-bottom">
            <h5 class="fw-500 fs-16 mb-7">Lorem ipsum dolor</h5>
            <ul class="stars-ratings d-flex align-items-center justify-content-center gap-3 mb-11">
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
            </ul>
            <button class="btn-2 primary-btn">Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-4 col-xl ">
        <div class="product-card card">
          <div class="card-inner mb-18">
            <div class="card-front">
              <img src="./assets/images/product-front-img-01.png" alt="" loading="lazy">
            </div>
            <div class="card-back">
              <img src="./assets/images/product-back-img-01.png" alt="" loading="lazy">
            </div>
          </div>
          <div class="product-card-bottom">
            <h5 class="fw-500 fs-16 mb-7">Lorem ipsum dolor</h5>
            <ul class="stars-ratings d-flex align-items-center justify-content-center gap-3 mb-11">
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
            </ul>
            <button class="btn-2 primary-btn">Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-4 col-xl ">
        <div class="product-card card">
          <div class="card-inner mb-18">
            <div class="card-front">
              <img src="./assets/images/product-front-img-01.png" alt="" loading="lazy">
            </div>
            <div class="card-back">
              <img src="./assets/images/product-back-img-01.png" alt="" loading="lazy">
            </div>
          </div>
          <div class="product-card-bottom">
            <h5 class="fw-500 fs-16 mb-7">Lorem ipsum dolor</h5>
            <ul class="stars-ratings d-flex align-items-center justify-content-center gap-3 mb-11">
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
            </ul>
            <button class="btn-2 primary-btn">Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-4 col-xl ">
        <div class="product-card card">
          <div class="card-inner mb-18">
            <div class="card-front">
              <img src="./assets/images/product-front-img-01.png" alt="" loading="lazy">
            </div>
            <div class="card-back">
              <img src="./assets/images/product-back-img-01.png" alt="" loading="lazy">
            </div>
          </div>
          <div class="product-card-bottom">
            <h5 class="fw-500 fs-16 mb-7">Lorem ipsum dolor</h5>
            <ul class="stars-ratings d-flex align-items-center justify-content-center gap-3 mb-11">
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
            </ul>
            <button class="btn-2 primary-btn">Add to Cart</button>
          </div>
        </div>
      </div>
      <div class="col-6 col-md-4 col-lg-4 col-xl ">
        <div class="product-card card">
          <div class="card-inner mb-18">
            <div class="card-front">
              <img src="./assets/images/product-front-img-01.png" alt="" loading="lazy">
            </div>
            <div class="card-back">
              <img src="./assets/images/product-back-img-01.png" alt="" loading="lazy">
            </div>
          </div>
          <div class="product-card-bottom">
            <h5 class="fw-500 fs-16 mb-7">Lorem ipsum dolor</h5>
            <ul class="stars-ratings d-flex align-items-center justify-content-center gap-3 mb-11">
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
              <li><i class="fa-solid fa-star"></i></li>
            </ul>
            <button class="btn-2 primary-btn">Add to Cart</button>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<?php include('./include/footer.php') ?>
<?php include('./include/scripts.php') ?>