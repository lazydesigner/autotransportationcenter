
  <style>
    html,
    body {
      position: relative;
      height: 100%;
    }

    body {
      background: #eee;
      font-family: Helvetica Neue, Helvetica, Arial, sans-serif;
      font-size: 14px;
      color: #000;
      margin: 0;
      padding: 0;
    }

    .swiper {
      width: 100%;
      padding-top: 100px;
      padding-bottom: 50px;
    }

    .swiper-slide {
      background-position: center;
      background-size: cover;
      position: relative;
      width: 600px;
      height: 300px;
      transform: translate3d(0) !important;;
    }
    .swip-content{
        width: 100%;
        height:100%;
        background:rgba(0, 0, 0, .4);
        position: absolute;
        display:grid;
        place-items:center;
        
        z-index: 1;
        color:white;
        font-size:2rem;
    }

    .swiper-slide img {
      display: block;
      width: 100%;
      height: 100%;
      border-radius: 2.2%;
      box-shadow: #0000006b 0px 2px 10px;
    }
    .swiper-slide{
        opacity:.6!important;
        margin-bottom:2%!important;
    }
    .swiper-slide.swiper-slide-active{
        transform:scale(1.2)!important;
        opacity:1!important;
    }



    .our-recent {
      font-size: 35.44px;
      font-weight: bold;
      text-align: center;
      letter-spacing: 1.5px;
    }

    .our-recent-paragraph {
      font-size: 25px;
      text-align: center;
      width: 80%;
      margin: auto;
      margin-bottom: 75px;
      margin-top: 20px;
    }

    .swipper-border {
      border: 2px #21D0B3 solid;
      width: 26%;
      margin: auto;
    }
    .swipper-button1 .our-button {
        margin: auto;
        justify-content: center;

        display: flex;
        background-color: #21D0B3;
        color: white;
        margin-top: 50px;
        font-size: 20px;
        padding: 1% 1.5%;
        border: #21D0B3 3px solid;
    }

  </style>
</head>

<body>
  <!-- Swiper -->
  <div class="swiper mySwiper bg-white">
    <div class="swipper-content">
        <h3 class="our-recent">Our Recent Work</h3>
        <div class="swipper-border"></div>
        <p class="our-recent-paragraph">Customer Experience is everything! We design & create solutions by spotting
          customers’
          actions, emotions, and unmet needs. We make enterprises that impact lives. </p>
    </div>
    <div class="swiper-wrapper">
      <div class="swiper-slide">
        <!-- <div class="swip-content">Hello</div> -->
        <img src="./images/Layer 37.webp" />
      </div>
      <div class="swiper-slide">
        <!-- <div class="swip-content">Hello</div> -->
        <img src="./images/Layer 37.webp" />
      </div>
      <div class="swiper-slide">
        <!-- <div class="swip-content">Hello</div> -->
        <img src="./images/Layer 37.webp" />
      </div>
      <div class="swiper-slide">
        <!-- <div class="swip-content">Hello</div> -->
        <img src="./images/Layer 37.webp" />
      </div>
      <div class="swiper-slide">
        <!-- <div class="swip-content">Hello</div> -->
        <img src="./images/Layer 37.webp" />
      </div>
      <div class="swiper-slide">
        <!-- <div class="swip-content">Hello</div> -->
        <img src="./images/Layer 37.webp" />
      </div>
      <div class="swiper-slide">
        <!-- <div class="swip-content">Hello</div> -->
        <img src="./images/Layer 37.webp" />
      </div>
      <div class="swiper-slide">
        <!-- <div class="swip-content">Hello</div>  -->
        <img src="./images/Layer 37.webp" />
      </div>
    </div>
    <div class="swipper-button1"><button type="button" class="our-button">See Our Portfolio</button></div>
  </div>

  <!-- Swiper JS -->
  <script src="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.js"></script>

  <!-- Initialize Swiper -->
  <script>
    var swiper = new Swiper(".mySwiper", {
      effect: "coverflow",
      grabCursor: true,
      loop:true,
      centeredSlides: true,
      slidesPerView: "auto",
      coverflowEffect: {
        rotate: 0,
        stretch: 0,
        depth: 100,
        modifier: 1,
        slideShadows: true,
      },
      breakpoints: {
                // when window width is >= 320px
                320: {
                    slidesPerView: 1,
                    spaceBetween: 20
                },
                // when window width is >= 480px
                480: {
                    slidesPerView: 1,
                    spaceBetween: 30
                },
                // when window width is >= 640px
                640: {
                    slidesPerView: 2,
                    spaceBetween: 40
                }
            },
    });
  </script>

