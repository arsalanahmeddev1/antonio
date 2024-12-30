<?php
$page_title = 'Contact';
include('./include/head.php');
include('./include/header.php')
?>
<section class="inner-banner text-center">
  <div class="container">
    <div class="row justify-content-center align-items-center">
      <div class="col-md-6">
        <h1 class="inner-banner-hd text-white">Contact</h1>
        <div class="mt-5 mb-100 mx-auto d-flex align-items-center gap-20 diamond-wrapper diamond-light">
          <div class="diamond-border"></div>
          <img src="./assets/images/diamond-white.png" class="" alt="">
          <div class="diamond-border"></div>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="map-sec pt-55 pb-77">
  <div class="container">
    <iframe
      src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d3023.9368645675327!2d-74.00446462354226!3d40.71940633716142!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c25989866d5c39%3A0x6aef34bbdb232187!2sCanal%20St%2C%20New%20York%2C%20NY%2C%20USA!5e0!3m2!1sen!2s!4v1734121792228!5m2!1sen!2s"
      width="100%" height="450" style="border:0;" allowfullscreen="" loading="lazy"
      referrerpolicy="no-referrer-when-downgrade"></iframe>
  </div>
</section>
<section class="sec-contact pb-78">
  <div class="container">
    <div class="row row-gap-20 align-items-stretch justify-content-center">
      <div class="col-lg-4 col-md-6">
        <div class="contact-card">
          <div class="sm-box d-flex justify-content-center align-items-center mb-30">
            <span class="phone-icon icons text-white "><i class="fa-solid fa-phone"></i></span>
          </div>
          <h5 class="mb-30 fw-500 fs-33">Phone</h5>
          <span class="fs-20 d-block mb-5">
            <strong>Toll-Free :</strong>
            <a href="tel:0123-456-789" class="text-black">0123-456-789</a>
          </span>
          <span class="fs-20">
            <strong>Fax :</strong>
            <a href="tel:0123-456-789" class="text-black">0123-456-789</a>
          </span>

        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="contact-card">
          <div class="sm-box d-flex justify-content-center align-items-center mb-30">
            <span class="phone-icon icons text-white "><i class="fa-solid fa-envelope"></i></span>
          </div>
          <h5 class="mb-30 fw-500 fs-33">Email</h5>
          <span class="fs-20 d-block mb-5">
            <a href="mailto:mail@example.com" class="text-black">mail@example.com</a>
          </span>
          <span class="fs-20">
            <a href="mailto:support@example.com" class="text-black">support@example.com</a>
          </span>

        </div>
      </div>
      <div class="col-lg-4 col-md-6">
        <div class="contact-card">
          <div class="sm-box d-flex justify-content-center align-items-center mb-30">
            <span class="phone-icon icons text-white "><i class="fa-solid fa-paper-plane"></i></span>
          </div>
          <h5 class="mb-30 fw-500 fs-33">Address</h5>
          <span class="fs-20 d-block mb-5">
            <a href="javascript:;" class="text-black">Address Goes Here</a>
          </span>
        </div>
      </div>
    </div>
  </div>
</section>
<section class="sec-get-in-touch">
  <div class="container">
    <h2 class="text-black fs-55 fw-700 mb-24 text-center">Get In Touch</h2>
    <p class="text-black fs-17 mb-57 text-center mx-auto" style="max-width: 61.3rem">Lorem ipsum dolor sit amet consectetuer adipiscing elit. Aenean commodo ligula
      eget dolor. dolor sit amet consectetuer adipiscing elit.</p>
    <div class="row justify-content-center">
      <div class="col-md-5">
        <form action="">
          <div class="contact-form">
            <div class="row">
              <div class="col-md-6">
                <div class="field-wrap">
                  <label for="" class="lable-field">Name</label>
                  <input type="text" class="input-field" placeholder="Your Name">
                </div>
              </div>
              <div class="col-md-6">
                <div class="field-wrap">
                  <label for="" class="lable-field">Email</label>
                  <input type="text" class="input-field" placeholder="Your Email">
                </div>
              </div>
              <div class="col-12">
                <div class="field-wrap">
                  <label for="" class="lable-field">Subject</label>
                  <input type="text" class="input-field" placeholder="Subject">
                </div>
                <div class="field-wrap">
                  <label for="" class="lable-field">Message</label>
                  <textarea name="" id="" class="input-field textarea"></textarea>
                </div>
                <button class="btn-black w-100 border-0" type="submit">Send Message</button>
              </div>
            </div>
          </div>
        </form>
      </div>
    </div>
  </div>
</section>
<?php include('./include/footer.php') ?>
<?php include('./include/scripts.php') ?>