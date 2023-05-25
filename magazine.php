
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
      height: 100%;
    }

    .swiper-slide {
      text-align: center;
      font-size: 18px;
      background: #fff;
      display: flex;
      justify-content: center;
      align-items: center;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      object-fit: cover;
    }
  </style>
</head>

<body>
<div class="header">
    <h1>Magazine News</h1>
</div>

<div class="containerrr">
    <div class="swiper mySwiper" style="width: 60%">
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <div>

        <img class="slideimg" src='./source/image/birhanbank.jpg' />
        <h3>header one</h3>
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
    <div class="magazinerightside" data-options="orientation: horizontal; speed: 2400; autoplay: 1000; items: 1;">
    <img class="row" src="./source/image/birhanbank.jpg" style="width: 100%; height: 120px; align-items: center; justify-content: center;"/>

        <div class="newsdata">
                <img class="newsimage row-2" src="./source/image/1.jpg" style="width: 100%"/>
                <div class="newsword row-1">
                    <h3 class="heading">news one</h3>
                    <p class="para">Images are not technically inserted into a web page; images are linked to web pages. The img tag creates a holding space for the referenced image.</p>
                </div>
        </div>
        <div class="newsdata">
                <img class="newsimage row-2" src="./source/image/1.jpg" style="width: 100%"/>
                <div class="newsword row-1">
                    <h3 class="heading">news one</h3>
                    <p class="para">Images are not technically inserted into a web page; images are linked to web pages. The img tag creates a holding space for the referenced image.</p>
                </div>
        </div>
        <div class="newsdata">
                <img class="newsimage row-2" src="./source/image/1.jpg" style="width: 100%"/>
                <div class="newsword row-1">
                    <h3 class="heading">news one</h3>
                    <p class="para">Images are not technically inserted into a web page; images are linked to web pages. The img tag creates a holding space for the referenced image.</p>
                </div>
        </div>
        <div class="newsdata">
                <img class="newsimage row-2" src="./source/image/1.jpg" style="width: 100%"/>
                <div class="newsword row-1">
                    <h3 class="heading">news one</h3>
                    <p class="para">Images are not technically inserted into a web page; images are linked to web pages. The img tag creates a holding space for the referenced image.</p>
                </div>
        </div>
        <div class="newsdata">
                <img class="newsimage row-2" src="./source/image/1.jpg" style="width: 100%"/>
                <div class="newsword row-1">
                    <h3 class="heading">news one</h3>
                    <p class="para">Images are not technically inserted into a web page; images are linked to web pages. The img tag creates a holding space for the referenced image.</p>
                </div>
        </div>

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
      slidesPerView: 3,
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