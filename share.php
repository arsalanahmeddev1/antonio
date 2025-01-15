<?php
$page_title = 'Share';
include('./include/head.php');
include('./include/header.php')
?>
<section class="inner-banner text-center">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-md-6">
        <h1 class="inner-banner-hd text-white">Share</h1>
        <div class="mt-5 mb-100 mx-auto d-flex align-items-center gap-20 diamond-wrapper diamond-light"
          style="max-width: 30rem;">
          <div class="diamond-border"></div>
          <img src="./assets/images/diamond-white.png" class="" alt="">
          <div class="diamond-border"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="share-sec-01 pt-50 pb-100">
  <div class="container">
    <h2 class="sec-hd text-uppercase text-center mb-60">Share suggestion or your funny sayings</h2>
    <div class="row align-items-center">
      <div class="col-lg-4">
        <h3 class="text-uppercase fw-800 fs-75" style="color: #2F2E2E">Few funny <br> <span class="fw-600">ones</span>
        </h3>
      </div>
      <div class="col-lg-8">
        <div class="position-relative">
          <div class="share-slider">
            <div>
              <img src="./assets/images/share-slider-img-01.png" alt="">
            </div>
            <div>
              <img src="./assets/images/share-slider-img-02.png" alt="">
            </div>
            <div>
              <img src="./assets/images/share-slider-img-03.png" alt="">
            </div>
            <div>
              <img src="./assets/images/share-slider-img-01.png" alt="">
            </div>
            <div>
              <img src="./assets/images/share-slider-img-02.png" alt="">
            </div>
          </div>
          <div class="share-slider-arrows d-flex justify-content-between align-items-center">
            <div class="left-arrow-03 position-absolute cursor-pointer">
              <i class="fa-solid fa-chevron-left"></i>
            </div>
            <div class="right-arrow-03 position-absolute cursor-pointer">
              <i class="fa-solid fa-chevron-right"></i>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="share-sec-02 pb-100">
  <div class="container">
    <div class="row">
      <h2 class="fs-75 fw-700 dark-gray text-uppercase">Share some of your gems in the world</h2>
      <h3 class="fw-500 fs-65 dark-gray text-uppercase pb-140">from your child hood work etc .. </h3>
      <div class="col-lg-6">
        <form action="">
          <div class="row suggestion-form share-sec-form">
            <div class="col-md-6">
              <div class="d-flex gap-20 align-items-end">
                <label for="" class="lable-field mb-0">Name.</label>
                <input type="text" class="input-field" placeholder="Your Name">
              </div>
            </div>
            <div class="col-md-6">
              <div class="d-flex gap-20 align-items-end">
                <label for="" class="lable-field mb-0">Email.</label>
                <input type="text" class="input-field" placeholder="Your Email">
              </div>
            </div>
            <div class="col-md-12 mt-50">
              <label for="" class="lable-field">Message .</label>
              <textarea name="" id="" class="textarea w-100" placeholder="Write your Message"></textarea>
              <div class="d-flex align-items-center justify-content-between mt-50">
                <div class="d-flex flex-column justify-content-between flex-grow-1">
                  <div class="position-relative">
                    <label for="uploadfile" class="btn-black sug-submit-btn text-center w-100 border-0 " style="max-width: 33rem;">Upload File</label>
                    <input type="file" multiple accept="*/*" maxlength="5" class="d-none" id="uploadfile">
                    <div class="upload-file-icon"><i class="fa-solid fa-upload"></i></div>
                  </div>
                  <div class="file-list" id="fileList"></div>
                </div>
                <div class="flex-grow-1 text-center">
                  <button class="fs-35 fw-600 border-0 bg-transparent border-bottom border-black border-2" type="submit">Submit</button>
                </div>
                <div class="flex-grow-1 text-center">
                  <button class="fs-35 fw-600 border-0 bg-transparent border-bottom border-black border-2">Cancel</button>
                </div>
              </div>
            </div>
        </form>
      </div>
    </div>
  </div>
</section>
<section class="share-sec-03 bg-black pt-50 pb-80">
  <div class="container">
    <h3 class="text-uppercase fw-700 fs-85 text-white pb-60">Suggestions</h3>
    <div class="col-12">
      <form action="">
        <div class="row suggestion-form sug-form-ligth">
          <div class="col-md-6">
            <div class="d-flex gap-30 align-items-end">
              <label for="" class="lable-field mb-0">Name.</label>
              <input type="text" class="input-field" placeholder="Your Name">
            </div>
          </div>
          <div class="col-md-6">
            <div class="d-flex gap-30 align-items-end">
              <label for="" class="lable-field mb-0">Email.</label>
              <input type="text" class="input-field" placeholder="Your Email">
            </div>
          </div>
          <div class="col-md-12 mt-60">
            <label for="" class="lable-field">Message .</label>
            <textarea name="" id="" class="textarea w-100" placeholder="Write your Message"></textarea>
            <button class="btn-black sug-submit-btn w-100 border-0 mt-50" style="max-width: 33rem">Submit</button>
          </div>
        </div>
      </form>
    </div>
  </div>
  <main class="share-page-marque-slider pt-80">
    <?php include('./include/marque-sec.php') ?>
  </main>
</section>
<?php include('./include/footer.php') ?>
<?php include('./include/scripts.php') ?>