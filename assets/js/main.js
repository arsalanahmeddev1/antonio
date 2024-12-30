// for lazy load in images
const images = document.querySelectorAll('img');
images.forEach(img => {
  img.setAttribute('loading', 'lazy');
});

// mobile menu
let navs = document.querySelector('.primary-nav');
let menuIcon = document.querySelectorAll('.menu-toggle');
console.log(navs, menuIcon);
menuIcon.forEach(function (e) {
  e.addEventListener('click', function () {
    navs.classList.toggle('active');
  });
});


$('.banner-slider').on('init reInit afterChange', function (event, slick, currentSlide) {
  var currentIndex = currentSlide ? currentSlide : 0;

  // Update active dot
  $('.custom-dots .dot').removeClass('active');
  $('.custom-dots .dot[data-slide="' + currentIndex + '"]').addClass('active');
});
$('.banner-slider').slick({
  infinite: true,
  slidesToShow: 1,
  slidesToScroll: 1,
  dots: true,
});
$('.custom-dots .dot').on('click', function () {
  var slideIndex = $(this).data('slide');
  $('.banner-slider').slick('slickGoTo', slideIndex);
});

// products slider
$('.products-slider').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 5,
  slidesToScroll: 1,
  arrows: true,
  prevArrow: $('.arrows-wrapper .left-arrow i'),
  nextArrow: $('.arrows-wrapper .right-arrow i'),
  responsive: [
    {
      breakpoint: 1201,
      settings: {
        slidesToShow: 3,
        infinite: true,
        arrows: true,
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 2,
      }
    },
    {
      breakpoint: 481,
      settings: {
        slidesToShow: 1,
      }
    }
  ]
});

// des slider
$('.des-slider').slick({
  infinite: true,
  slidesToShow: 6,
  slidesToScroll: 1,
  autoplay: true,
  autoplaySpeed: 0,
  speed: 3000,
  cssEase: 'linear',
  arrows: false,
  dots: false,
  responsive: [
    {
      breakpoint: 1025,
      settings: {
        slidesToShow: 5,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 4,
      }
    },
    {
      breakpoint: 481,
      settings: {
        slidesToShow: 3,
      }
    }
  ]
});

// blogs slider
$('.blogs-slider').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  prevArrow: $('.secondry-arraows-wrapper .left-arrow-02'),
  nextArrow: $('.secondry-arraows-wrapper .right-arrow-02'),
  responsive: [
    {
      breakpoint: 1025,
      settings: {
        slidesToShow: 2,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
      }
    },
    {
      breakpoint: 481,
      settings: {
        slidesToShow: 1,
      }
    }
  ]
});


// share slider
// $('.share-slider').slick({
//   dots: true,
//   infinite: false,
//   speed: 300,
//   slidesToShow: 3,
//   // centerMode: true,
//   slidesToScroll: 1,
//   prevArrow: $('.share-slider-arrows .left-arrow-03'),
//   nextArrow: $('.share-slider-arrows .right-arrow-03'),
//   responsive: [
//     {
//       breakpoint: 1025,
//       settings: {
//         slidesToShow: 2,
//         infinite: true,
//         dots: true
//       }
//     },
//     {
//       breakpoint: 600,
//       settings: {
//         slidesToShow: 1,
//       }
//     },
//     {
//       breakpoint: 481,
//       settings: {
//         slidesToShow: 1,
//       }
//     }
//   ]
// });


$('.share-slider').on('afterChange', function (event, slick, currentSlide) {
  $('.share-slider .slick-slide').css('margin-top', '0');
  const centerIndex = Math.floor(currentSlide + (slick.options.slidesToShow / 2));
  $('.share-slider .slick-slide').eq(centerIndex).css('margin-top', '100px');
});
$('.share-slider').on('init', function (event, slick) {
  const centerIndex = Math.floor(slick.currentSlide + (slick.options.slidesToShow / 2));
  $('.share-slider .slick-slide').eq(centerIndex).css('margin-top', '100px');
});
$('.share-slider').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 3,
  slidesToScroll: 1,
  prevArrow: $('.share-slider-arrows .left-arrow-03'),
  nextArrow: $('.share-slider-arrows .right-arrow-03'),
  responsive: [
    {
      breakpoint: 1025,
      settings: {
        slidesToShow: 2,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
      }
    },
    {
      breakpoint: 481,
      settings: {
        slidesToShow: 1,
      }
    }
  ]
});

// upload files 
const MAX_FILES = 5;
let uploadedFiles = [];

const uploadFile = document.querySelector('#uploadfile');
if (uploadFile) {
  uploadFile.addEventListener('change', function (event) {
    const fileListDiv = document.getElementById('fileList');
    const files = event.target.files;
    uploadedFiles = [];

    if (files.length > MAX_FILES) {
      alert(`You can only upload up to ${MAX_FILES} files.`);
      return;
    }

    for (let i = 0; i < files.length; i++) {
      uploadedFiles.push(files[i].name);
    }

    displayUploadedFiles(fileListDiv);
  })
}
// document.getElementById('uploadfile').addEventListener('change', function(event) {

// });

function displayUploadedFiles(fileListDiv) {
  if (uploadedFiles.length > 0) {
    fileListDiv.innerHTML = `<p>Uploaded Files:</p><ul>${uploadedFiles.map(name => `<li>${name}</li>`).join('')}</ul>`;
  } else {
    fileListDiv.innerHTML = '<p>No valid files currently selected for upload</p>';
  }
}


// product details js
const imgs = document.querySelectorAll('.img-select a');
if (imgs) {
  const imgBtns = [...imgs];
  let imgId = 1;

  imgBtns.forEach((imgItem) => {
    imgItem.addEventListener('click', (event) => {
      event.preventDefault();
      imgId = imgItem.dataset.id;
      slideImage();
    });
  });

  function slideImage() {
    const displayWidth = document.querySelector('.img-showcase img:first-child').clientWidth;

    document.querySelector('.img-showcase').style.transform = `translateX(${- (imgId - 1) * displayWidth}px)`;
  }
}

window.addEventListener('resize', slideImage);

$('.reviews-slider').slick({
  dots: true,
  infinite: false,
  speed: 300,
  slidesToShow: 2,
  slidesToScroll: 1,
  prevArrow: $('.share-slider-arrows .left-arrow-03'),
  nextArrow: $('.share-slider-arrows .right-arrow-03'),
  responsive: [
    {
      breakpoint: 1025,
      settings: {
        slidesToShow: 2,
        infinite: true,
        dots: true
      }
    },
    {
      breakpoint: 600,
      settings: {
        slidesToShow: 1,
      }
    },
    {
      breakpoint: 481,
      settings: {
        slidesToShow: 1,
      }
    }
  ]
});



const quantityInput = document.getElementById('quantity');
const increaseButton = document.querySelector('.increase-btn');
const decreaseButton = document.querySelector('.decrease-btn');

function updateQuantity(value) {
  quantityInput.value = value;
}

increaseButton.addEventListener('click', () => {
  let currentQuantity = parseInt(quantityInput.value);
  currentQuantity++;
  updateQuantity(currentQuantity);
});

decreaseButton.addEventListener('click', () => {
  let currentQuantity = parseInt(quantityInput.value);
  if (currentQuantity > 0) {
    currentQuantity--;
    updateQuantity(currentQuantity);
  }
});