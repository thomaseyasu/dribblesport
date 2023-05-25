<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8" />
  <title>Swiper demo</title>
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1, maximum-scale=1" />
  <!-- Link Swiper CSS -->
  <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.css" />

  <!-- Demo styles -->
  <style>


    .swiper {
      width: 100%;
    }

    .swiper-slide {
      //text-align: center;
      font-size: 16px;
      padding: 0px;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 140px;
      object-fit: cover;
      float: center;
      align-items: center;
      justify-content: center;
    }
  </style>
</head>

<body>
  <!-- Swiper -->
  <div class="swiper mySwiper" data-options="autoplay: 1000; step: 1; mode: carousel; speed: 4000;">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div>

        <img class="slideimg" src='./source/image/birhanbank.jpg' />
        <h3>header one
        </h3>
            <p class="slidepara">Yeah. It is definitely a great answer. I will fool around with
        it some more. It was a little quirky an image wider than taller that needed to be
        responsive, but there are lots of applications this Yeah. It is definitely a great answer.
        I will fool around with it some more. It was a little quirky an image wider than taller that
        needed to be responsive, but there are lots of applications this
        </p>

        </div>
      </div>
      <div class="swiper-slide">
        <div>

        <img class="slideimg" src='./source/image/birhanbank.jpg' />
        <h3>header two</h3>
        <p class="slidepara">Yeah. It is definitely a great answer. I will fool around with
        it some more. It was a little quirky for an image wider than taller that needed to be
        responsive, but there are lots of applications for this Yeah. It is definitely a great answer.
        I will fool around with it some more. It was a little quirky for an image wider than taller that
        needed to be responsive, but there are lots of applications for this</p>


        </div>
      </div>
      <div class="swiper-slide">
        <div>

        <img class="slideimg" src='./source/image/birhanbank.jpg' />
        <h3>header three</h3>
        <p class="slidepara">Yeah. It is definitely a great answer. I will fool around with
        it some more. It was a little quirky for an image wider than taller that needed to be
        responsive, but there are lots of applications for this Yeah. It is definitely a great answer.
        I will fool around with it some more. It was a little quirky for an image wider than taller that
        needed to be responsive, but there are lots of applications for this</p>


        </div>
      </div>

      <div class="swiper-slide">
        <div>

        <img class="slideimg" src='./source/image/birhanbank.jpg' />
        <h3>header one
        </h3>
            <p class="slidepara">Yeah. It is definitely a great answer. I will fool around with
        it some more. It was a little quirky an image wider than taller that needed to be
        responsive, but there are lots of applications this Yeah. It is definitely a great answer.
        I will fool around with it some more. It was a little quirky an image wider than taller that
        needed to be responsive, but there are lots of applications this
        </p>

        </div>
      </div>
      <div class="swiper-slide">
        <div>

        <img class="slideimg" src='./source/image/birhanbank.jpg' />
        <h3>header two</h3>
        <p class="slidepara">Yeah. It is definitely a great answer. I will fool around with
        it some more. It was a little quirky for an image wider than taller that needed to be
        responsive, but there are lots of applications for this Yeah. It is definitely a great answer.
        I will fool around with it some more. It was a little quirky for an image wider than taller that
        needed to be responsive, but there are lots of applications for this</p>


        </div>
      </div>
      <div class="swiper-slide">
        <div>

        <img class="slideimg" src='./source/image/birhanbank.jpg' />
        <h3>header three</h3>
        <p class="slidepara">Yeah. It is definitely a great answer. I will fool around with
        it some more. It was a little quirky for an image wider than taller that needed to be
        responsive, but there are lots of applications for this Yeah. It is definitely a great answer.
        I will fool around with it some more. It was a little quirky for an image wider than taller that
        needed to be responsive, but there are lots of applications for this</p>


        </div>
      </div>

    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
    <div class="autoplay-progress">
      <svg viewBox="0 0 0 0">
        <circle cx="24" cy="24" r="20"></circle>
      </svg>
      <span></span>
    </div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      freeMode: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
    });
  </script>
  <script>
    const progressCircle = document.querySelector(".autoplay-progress svg");
    const progressContent = document.querySelector(".autoplay-progress span");
    var swiper = new Swiper(".mySwiper", {
      slidesPerView: 1,
      spaceBetween: 30,
      centeredSlides: true,
      autoplay: {
        delay: 2500,
        disableOnInteraction: false
      },
      pagination: {
        el: ".swiper-pagination",
        clickable: true
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      },
      on: {
        autoplayTimeLeft(s, time, progress) {
          progressCircle.style.setProperty("--progress", 1 - progress);
          //progressContent.textContent = `${Math.ceil(time / 1000)}s`;
        }
      }
    });
  </script>
</body>

</html>
