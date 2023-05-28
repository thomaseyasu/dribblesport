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
      height: 400px;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }
    .swiper-slide:hover{
        background-color: grey;
        color: #fff;
    }
    .swiper-slide > a {
        text-decoration: none;
        color: #000;
    }
    .swiper-slide > a:hover {
        color: #fff;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 120px;
      object-fit: cover;
      float: center;
      align-items: center;
      justify-content: center;
    }
    .swiper-slide h3 {

    }
  </style>
</head>

<body>
  <!-- Swiper -->
  <div class="swiper mySwiper2">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
      <a href='easyslider.php'>
        <div>

        <img class="slideimg" src='./source/image/birhanbank.jpg' />
        <h3>header one</h3>
            <p class="slidepara">Yeah. It is definitely a great answer. I will fool around with
        it some more. It was a little quirky for an image wider than taller that needed to be
        responsive, but there are lots of applications for this Yeah.</p>
        </div>
        </a>
      </div>
      <div class="swiper-slide">
      <a href='easyslider.php'>
        <div>

        <img class="slideimg" src='./source/image/birhanbank.jpg' />
        <h3>header two</h3>
        <p class="slidepara">Yeah. It is definitely a great answer. I will fool around with
        it some more. It was a little quirky for an image wider than taller that needed to be
        responsive, but there are lots of applications for this Yeah.</p>


        </div>
        </a>
      </div>
      <div class="swiper-slide">
      <a href='easyslider.php'>
        <div>

        <img class="slideimg" src='./source/image/birhanbank.jpg' />
        <h3>header three</h3>
        <p class="slidepara">Yeah. It is definitely a great answer. I will fool around with
        it some more. It was a little quirky for an image wider than taller that needed to be
        responsive, but there are lots of applications for this Yeah.</p>


        </div>
        </a>
      </div>

      <div class="swiper-slide">
      <a href='easyslider.php'>
        <div>

        <img class="slideimg" src='./source/image/birhanbank.jpg' />
        <h3>header one</h3>
            <p class="slidepara">Yeah. It is definitely a great answer. I will fool around with
        it some more. It was a little quirky for an image wider than taller that needed to be
        responsive, but there are lots of applications for this Yeah.</p>
        </div>
        </a>
      </div>
      <div class="swiper-slide">
      <a href='easyslider.php'>
        <div>

        <img class="slideimg" src='./source/image/birhanbank.jpg' />
        <h3>header two</h3>
        <p class="slidepara">Yeah. It is definitely a great answer. I will fool around with
        it some more. It was a little quirky for an image wider than taller that needed to be
         responsive, but there are lots of applications for this Yeah. </p>


        </div>
        </a>
      </div>
      <div class="swiper-slide">
      <a href='easyslider.php'>
        <div>

        <img class="slideimg" src='./source/image/birhanbank.jpg' />
        <h3>header three</h3>
        <p class="slidepara">Yeah. It is definitely a great answer. I will fool around with
        it some more. It was a little quirky for an image wider than taller that needed to be
        responsive, but there are lots of applications for this Yeah.</p>


        </div>
        </a>
      </div>

    </div>
    <div class="swiper-button-next"></div>
    <div class="swiper-button-prev"></div>
    <div class="swiper-pagination"></div>
    <div class="autoplay-progress">

    </div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@9/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper2 = new Swiper(".mySwiper2", {
      slidesPerView: 3,
      spaceBetween: 30,
      freeMode: true,
      pagination: {
        el: ".swiper-pagination",
        clickable: true,
      },
      autoplay: {
        delay: 5500,
        disableOnInteraction: false
      },
      navigation: {
        nextEl: ".swiper-button-next",
        prevEl: ".swiper-button-prev"
      },
    });
  </script>

</body>

</html>
