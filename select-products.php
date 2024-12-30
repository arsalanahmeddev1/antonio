<?php
$page_title = 'Select Product';
include('./include/head.php');
include('./include/header.php')
?>
<section class="inner-banner text-center">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-md-6">
        <h1 class="inner-banner-hd text-white">Select Product </h1>
        <div class="mt-5 mb-100 mx-auto d-flex align-items-center gap-20 diamond-wrapper diamond-light" style="max-width: 35rem;">
          <div class="diamond-border"></div>
          <img src="./assets/images/diamond-white.png" class="" alt="">
          <div class="diamond-border"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="selec-prod-sec pt-90">
  <div class="container">
    <div class="row align-items-center justify-content-center">
      <div class="col-lg-4">
        <div class="d-flex align-items-center gap-50">
          <div class="quote-card">
            <span class="fs-30"><i class="fa-solid fa-quote-left"></i></span>
            <p class="mt-15 fs-18">
              Lorem Ipsum is simply dummy text of the printing and typesetting industry. Lorem Ipsum has been the industry's standard dummy text ever since the 1500s, when an unknown printer.
            </p>
          </div>
          <div class="arrow-round"><i class="fa-solid fa-arrow-right"></i></div>
        </div>
      </div>
      <div class="col-lg-7">
        <form action="">
          <div class="select-prod-form">
            <div class="d-flex align-items-center justify-content-between mb-40">
              <div class="form-check d-flex align-items-center">
                <input class="form-check-input opacity-0" type="radio" name="flexRadioDefault" id="flexRadioDefault1">
                <label class="form-check-label d-flex align-items-center" for="flexRadioDefault1">
                  <img src="./assets/images/product-front-img-01.png" alt=""> <span>Mugs</span>
                </label>
              </div>
              <div class="border-bottom-black w-100" style="max-width: 17.8rem "></div>
              <div class="d-flex align-items-center gap-30">
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
            </div>
            <div class="d-flex align-items-center justify-content-between mb-40">
              <div class="form-check d-flex align-items-center">
                <input class="form-check-input opacity-0" type="radio" name="flexRadioDefault" id="flexRadioDefault2">
                <label class="form-check-label d-flex align-items-center" for="flexRadioDefault2">
                  <img src="./assets/images/product-front-img-01.png" alt=""> <span>Shirts</span>
                </label>
              </div>
              <div class="border-bottom-black w-100" style="max-width: 17.8rem "></div>
              <div class="d-flex align-items-center gap-30">
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
            </div>
            <div class="d-flex align-items-center justify-content-between mb-40">
              <div class="form-check d-flex align-items-center">
                <input class="form-check-input opacity-0" type="radio" name="flexRadioDefault" id="flexRadioDefault3">
                <label class="form-check-label d-flex align-items-center" for="flexRadioDefault3">
                  <img src="./assets/images/product-front-img-01.png" alt=""> <span>Caps</span>
                </label>
              </div>
              <div class="border-bottom-black w-100" style="max-width: 17.8rem "></div>
              <div class="d-flex align-items-center gap-30">
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
            </div>
            <div class="d-flex align-items-center justify-content-between">
              <div class="form-check d-flex align-items-center">
                <input class="form-check-input opacity-0" type="radio" name="flexRadioDefault" id="flexRadioDefault4">
                <label class="form-check-label d-flex align-items-center" for="flexRadioDefault4">
                  <img src="./assets/images/product-front-img-01.png" alt=""> <span>Phone Case</span>
                </label>
              </div>
              <div class="border-bottom-black w-100" style="max-width: 17.8rem "></div>
              <div class="d-flex align-items-center gap-30">
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
            </div>
          </div>
        </form>
      </div>
      <div class="col-12 d-flex justify-content-center mt-80">
        <button class="btn-black sug-submit-btn radius-60  border-0 text-text-capitalize">Order Now</button>
      </div>
    </div>
  </div>
</section>

<?php include('./include/footer.php') ?>
<?php include('./include/scripts.php') ?>