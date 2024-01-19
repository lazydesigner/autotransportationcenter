<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="UTF-8">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">

  <style>
    .comtent-serve h2 {
      margin-bottom: -1%;
      font-size: 42px;
      font-weight: bold;
      margin-top: 100px;
    }

    .Industries-border {
      border-bottom: #21D0B3 3px solid;
      margin: auto;
      width: 28%;
      margin-top: 32px;
      margin-bottom: 25px;
    }

    .product1-mob {
      height: 100%;
      position: relative;
      overflow: hidden;
    }

    .specifies1-mob {
      position: absolute;
      width: 100%;
      bottom: 0px;
      box-sizing: border-box;
      transition: 1s;
      cursor: pointer;
    }


    .product1-mob:hover .specifies1-mob {
      margin-bottom: 70%;
    }

    .specifies1-mob h3 {


      font-size: 30px;
      width: 100%;
      text-align: center;
      color: white;
      font-weight: bold;
      display: flex;

    }

    .specifies1-mob .ind-button-mob {

      font-size: large;
      background-color: #21D0B3;
      color: white;
      text-align: center;
      margin-top: 20%;
      padding: 5%;


    }

    .item {
      Flex: 1;
      height: 100%;
      background-position: center;
      background-size: cover;
      background-repeat: none;
      transition: flex 0.8s ease;

      &:hover {
        flex: 4;
      }
    }

    .item h3 {
      text-align: center;
      justify-content: center;
      margin: auto;
      align-items: center;
      transition: .5s;

      &:hover {
        flex: 0;


      }

    }

    .main-serve {
      height: 100%;
      width: auto;
    }

    .main-gallery {
      height: 100%;
      width: auto;

    }

    .gallery-wrap {
      display: flex;
      margin: 0;
      flex-direction: row;
      width: 100%;
      height: 70vh;
    }

    .item-1-mob {
      background-image: url(./images/Layer\ 16.webp);
      margin-left: -1.28%;
      margin-right: 3px;
      height: 500px;
    }

    .item-2-mob {
      background-image: url(./images/Layer\ 8\ copy.webp);
      margin-right: 3px;
      height: 500px;
    }

    .item-3-mob {
      background-image: url(./images/Layer\ 8\ copy\ 2\ \(1\).webp);
      margin-right: 3px;
      height: 500px;
    }

    .item-4-mob {

      background-image: url(./images/Layer\ 18.webp);
      height: 500px;
      margin-right: 3px;
    }

    .item-5-mob {

      background-image: url(./images/learning-education-ideas-insight-intelligence-study-concept.webp);
      margin-right: -1.2%;
      height: 500px;
    }


    .social {
      position: absolute;
      right: 35px;
      bottom: 0;
    }

    img {
      display: block;
      width: 20px;
    }

    .ri-instagram-fill {
      color: black;
      text-decoration: none;
      height: 30px;
    }

    .icon {
      height: 30px;
      text-decoration: none;
      margin: auto;
    }

    .slider {
      overflow: hidden;
      width: 100%;
    }

    .slides {
      display: flex;
      transition: transform 0.5s ease-in-out;
    }

    .slide {
      min-width: 100%;
      box-sizing: border-box;
    }

    button {
      position: absolute;
      top: 50%;
      transform: translateY(-50%);
      font-size: 24px;
      background: none;
      border: none;
      cursor: pointer;
      outline: none;
    }

    .prev {
      left: 10px;
      font-size: 40px;
      color: white;
    }

    .next {
      right: 10px;
      font-size: 40px;
      color: white;
    }
  </style>
</head>

<body>

  <div class="slider">
    <div class="slides">
      <div class="slide">
        <div class="item item-1-mob">

          <div class="product1-mob">
            <div class="specifies1-mob">
              <h3>Hospital Management <br> <button type="button" class="btn text-center ind-button-mob">Know more</button>
              </h3>
            </div>
          </div>
        </div>
      </div>
      <div class="slide">
        <div class="item item-2-mob">
          <div class="product1-mob">
            <div class="specifies1-mob">
              <h3>E-Commerce <br> <button type="button" class="btn text-center ind-button-mob">Know
                  more</button> </h3>
            </div>
          </div>
        </div>
      </div>
      <div class="slide">
        <div class="item item-3-mob">
          <div class="product1-mob">
            <div class="specifies1-mob">
              <h3>Tour & Travel <br> <button type="button" class="btn text-center ind-button-mob">Know
                  more</button> </h3>


            </div>
          </div>
        </div>
      </div>
      <div class="slide">
        <div class="item item-4-mob">
          <div class="product1-mob">
            <div class="specifies1-mob">
              <h3>OTT<br> <button type="button" class="btn text-center ind-button-mob">Know more</button>
              </h3>


            </div>
          </div>
        </div>
      </div>
      <div class="slide">
        <div class="item item-5-mob">
          <div class="product1-mob">
            <div class="specifies1-mob">
              <h3>E-Learning<br> <button type="button" class="btn text-center ind-button-mob">Know
                  more</button> </h3>


            </div>
          </div>
        </div>
      </div>

      <!-- Add more slides as needed -->
    </div>
    <button class="prev" onclick="prevSlide()">❮</button>
    <button class="next" onclick="nextSlide()">❯</button>
  </div>

  <script>
    let currentSlide = 0;

    function showSlide(index) {
      const slides = document.querySelector('.slides');
      const totalSlides = document.querySelectorAll('.slide').length;

      if (index < 0) {
        currentSlide = totalSlides - 1;
      } else if (index >= totalSlides) {
        currentSlide = 0;
      } else {
        currentSlide = index;
      }

      const transformValue = -currentSlide * 100 + '%';
      slides.style.transform = 'translateX(' + transformValue + ')';
    }

    function prevSlide() {
      showSlide(currentSlide - 1);
    }

    function nextSlide() {
      showSlide(currentSlide + 1);
    }
  </script>

</body>

</html>