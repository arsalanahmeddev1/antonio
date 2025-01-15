<?php
$page_title = 'Products';
include('./include/head.php');
include('./include/header.php')
?>
<section class="inner-banner text-center">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-md-6">
        <h1 class="inner-banner-hd text-white">Products</h1>
        <div class="mt-5 mb-100 mx-auto d-flex align-items-center gap-20 diamond-wrapper diamond-light">
          <div class="diamond-border"></div>
          <img src="./assets/images/diamond-white.png" class="" alt="">
          <div class="diamond-border"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="products-sec pt-67 pb-67">
  <div class="container">
    <div class="row row-gap-60">
      <div class="col-md-4">
        <h2 class="fw-500 fs-30 mb-15">Category</h2>
        <div class="border-bottom-grey mb-19" style="max-width: 30rem;"></div>
        <ul class="category-list pl-20">
          <li><a href="javascript:;">T-Shirts</a></li>
          <li><a href="javascript:;">Caps</a></li>
          <li><a href="javascript:;">Mugs</a></li>
          <li><a href="javascript:;">Covers</a></li>
          <li><a href="javascript:;">Bags</a></li>
        </ul>
        <h3 class="fs-30 fw-500 mb-15">New Arrivals</h3>
        <div class="border-bottom-grey mb-50" style="max-width: 30rem;"></div>
        <div class="product-card h-auto card mx-0 justify-content-start">
          <div class="card-inner mb-18">
            <div class="card-front">
              <img src="./assets/images/product-front-img-01.png" alt="" loading="lazy">
            </div>
            <div class="card-back">
              <img src="./assets/images/product-back-img-01.png" alt="" loading="lazy">
            </div>
          </div>
          <div class="product-card h-auto-bottom">
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
      <div class="col-md-8">
        <div class="lg-card mb-100">
          <div class="d-flex flex-wrap justify-content-between align-items-center">
            <div class="d-flex align-items-center">
              <span class="fs-24 pr-10" style="color: #848484;">Paginate by </span>
              <select class="" name="" id="">
                <option value="1">1</option>
                <option value="2">2</option>
                <option value="3">3</option>
                <option value="4">4</option>
                <option value="5">5</option>
              </select>
            </div>
            <div class="d-flex align-items-center">
              <span class="fs-24 pr-10" style="color: #848484;">Sort by </span>
              <select class="" name="" id="">
                <option value="1">Featured</option>
                <option value="2">low price</option>
                <option value="3">new designs</option>
                <option value="4">old designs</option>
              </select>
            </div>
          </div>
        </div>
        <div class="row row-gap-60">
          <div class="col-md-6 col-lg-4 col-sm-6 col-12">
            <div class="product-card h-auto  card mxauto0 justify-content-start">
              <div class="card-inner mb-18">
                <div class="card-front">
                  <img src="./assets/images/product-front-img-01.png" alt="" loading="lazy">
                </div>
                <div class="card-back">
                  <img src="./assets/images/product-back-img-01.png" alt="" loading="lazy">
                </div>
              </div>
              <div class="product-card h-auto-bottom">
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
          <div class="col-md-6 col-lg-4 col-sm-6 col-12">
            <div class="product-card h-auto card mx-auto justify-content-start">
              <div class="card-inner mb-18">
                <div class="card-front">
                  <img src="./assets/images/product-front-img-01.png" alt="" loading="lazy">
                </div>
                <div class="card-back">
                  <img src="./assets/images/product-back-img-01.png" alt="" loading="lazy">
                </div>
              </div>
              <div class="product-card h-auto-bottom">
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
          <div class="col-md-6 col-lg-4 col-sm-6 col-12">
            <div class="product-card h-auto card mx-auto justify-content-start">
              <div class="card-inner mb-18">
                <div class="card-front">
                  <img src="./assets/images/product-front-img-01.png" alt="" loading="lazy">
                </div>
                <div class="card-back">
                  <img src="./assets/images/product-back-img-01.png" alt="" loading="lazy">
                </div>
              </div>
              <div class="product-card h-auto-bottom">
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
          <div class="col-md-6 col-lg-4 col-sm-6 col-12">
            <div class="product-card h-auto card mx-auto justify-content-start">
              <div class="card-inner mb-18">
                <div class="card-front">
                  <img src="./assets/images/product-front-img-01.png" alt="" loading="lazy">
                </div>
                <div class="card-back">
                  <img src="./assets/images/product-back-img-01.png" alt="" loading="lazy">
                </div>
              </div>
              <div class="product-card h-auto-bottom">
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
          <div class="col-md-6 col-lg-4 col-sm-6 col-12">
            <div class="product-card h-auto card mx-auto justify-content-start">
              <div class="card-inner mb-18">
                <div class="card-front">
                  <img src="./assets/images/product-front-img-01.png" alt="" loading="lazy">
                </div>
                <div class="card-back">
                  <img src="./assets/images/product-back-img-01.png" alt="" loading="lazy">
                </div>
              </div>
              <div class="product-card h-auto-bottom">
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
          <div class="col-md-6 col-lg-4 col-sm-6 col-12">
            <div class="product-card h-auto card mx-auto justify-content-start">
              <div class="card-inner mb-18">
                <div class="card-front">
                  <img src="./assets/images/product-front-img-01.png" alt="" loading="lazy">
                </div>
                <div class="card-back">
                  <img src="./assets/images/product-back-img-01.png" alt="" loading="lazy">
                </div>
              </div>
              <div class="product-card h-auto-bottom">
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
          <div class="col-12">
            <nav aria-label="Page navigation example">
              <ul class="pagination custom-pagination gap-8">
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Previous">
                    <span aria-hidden="true"><i class="fa-solid fa-chevron-left"></i></span>
                  </a>
                </li>
                <li class="page-item active"><a class="page-link" href="#">1</a></li>
                <li class="page-item"><a class="page-link" href="#">2</a></li>
                <li class="page-item"><a class="page-link" href="#">3</a></li>
                <li class="page-item">
                  <a class="page-link" href="#" aria-label="Next">
                    <span aria-hidden="true"><i class="fa-solid fa-chevron-right"></i></span>
                  </a>
                </li>
              </ul>
            </nav>
          </div>
        </div>
      </div>
      <div class="col-md-12">
        <h2 class="fs-85 fw-700 mb-5">Suggestions</h2>
        <h3 class="fs-50 fw-500 mb-60">what other products would you like</h3>
        <form action="">
          <div class="row suggestion-form">
            <div class="col-md-6 mb-30 mb-lg-0">
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
              <label for="" class="lable-field">Suggestions</label>
              <textarea name="" id="" class="textarea w-100" placeholder="Write your Suggestion"></textarea>
              <button class="btn-black sug-submit-btn w-100 border-0 mt-50" style="max-width: 33rem">Submit</button>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>

<?php include('./include/footer.php') ?>
<?php include('./include/scripts.php') ?>