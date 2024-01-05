<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/assets/owl.carousel.min.css" integrity="sha512-tS3S5qG0BlhnQROyJXvNjeEM4UpMXHrQfTGmbQ1gKmelCxlSEBUaxhRBj/EFTzpbP4RVSrpEikbmdJobCvhE3g==" crossorigin="anonymous" referrerpolicy="no-referrer" />
<style>
    @import url('https://fonts.googleapis.com/css2?family=Noto+Sans+HK&display=swap');
html {
  scroll-behavior: smooth;
}
.swipper-buttons{
  margin-top: -5%;
}
.swipper-buttons button{
  align-items: center;
  margin: auto;
  display: flex;
  background-color: #21D0B3;
  padding: 5px 10px;
  font-size: 22px;
  color:white;
  border: #21D0B3 solid 1px;


}
.our-recent{
  font-size: 42px;
  font-weight: bold;
  text-align: center;
  letter-spacing: 1.5px;
}
.our-recent-paragraph{
  font-size: 20px;
  text-align: center;
  width: 80%;
  margin: auto;
}
.swipper-border{
  border: 2px #21D0B3 solid;
  width: 26%;
  margin: auto;
}
.slider {
  margin-bottom: 30px;
  position: relative;
}
.slider .owl-item.active.center .slider-card {
  transform: scale(1.15);
  opacity: 5;
  background: #ff9966; /* fallback for old browsers */
 /*  background: -webkit-linear-gradient(to bottom, #ff5e62, #ff9966); Chrome 10-25, Safari 5.1-6 */
  /*background: linear-gradient(to bottom, #ff5e62, #ff9966);  W3C, IE 10+/ Edge, Firefox 16+, Chrome 26+, Opera 12+, Safari 7+ */
  color: #fff;
}
.slider-card {
  background: #fff;
  padding: 0px 0px;
  margin: 40px -15px 90px -15px;
  border-radius: 5px;
  box-shadow: 0 15px 45px -20px rgb(0 0 0 / 73%);
  transform: scale(0.9);
  opacity: 0.5;
  transition: all 0.3s;
  
}
.slider-card img {
  border-radius: 5px 5px 0px 0px;
}
.owl-nav .owl-prev {
  position: absolute;
  top: calc(50% - 25px);
  left: 0;
  opacity: 5;
  font-size: 30px !important;
  z-index: 1;
}
.owl-nav .owl-next {
  position: absolute;
  top: calc(50% - 25px);
  right: 0;
  opacity: 1;
  font-size: 30px !important;
  z-index: 2;
}
/* .owl-dots {
  text-align: center;
}
.owl-dots .owl-dot {
  height: 10px;
  width: 10px;
  border-radius: 10px;
  background: #ccc !important;
  margin-left: 3px;
  margin-right: 3px;
  outline: none;
}
.owl-dots .owl-dot.active {
 
} */
</style>
</head>
<body>
    <section id="slider" class="pt-5">
        <div class="container">
         <h3 class="our-recent">Our Recent Work</h3>
         <div class="swipper-border"></div>
         <p class="our-recent-paragraph">Customer Experience is everything! We design & create solutions by spotting customers’
          actions, emotions, and unmet needs. We make enterprises that impact lives. </p>
            <div class="slider">
                      <div class="owl-carousel">
                          <div class="slider-card">
                              <div class="d-flex justify-content-center align-items-center mb-4">
                                  <img src="./images/Layer 37.webp" alt="" >
                              </div>
                              <!-- <h5 class="mb-0 text-center"><b>HTML CSS3 Tutorials</b></h5>
                              <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p> -->
                          </div>
                          <div class="slider-card">
                              <div class="d-flex justify-content-center align-items-center mb-4 img-div-swipper">
                                <img src="./images/Layer 37.webp" alt="" >
                              </div>
                              <!-- <h5 class="mb-0 text-center"><b>Wordpress Tutorials</b></h5>
                              <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p> -->
                          </div>
                          <div class="slider-card">
                              <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="./images/Layer 37.webp" alt="" >
                              </div>
                              <!-- <h5 class="mb-0 text-center"><b>PHP MySQL Tutorials</b></h5>
                              <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p> -->
                          </div>
                          <div class="slider-card">
                              <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="./images/Layer 37.webp" alt="" >
                              </div>
                              <!-- <h5 class="mb-0 text-center"><b>Javascript Tutorials</b></h5>
                              <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p> -->
                          </div>
                          <div class="slider-card">
                              <div class="d-flex justify-content-center align-items-center mb-4">
                                <img src="./images/Layer 37.webp" alt="" >
                              </div>
                              <!-- <h5 class="mb-0 text-center"><b>Bootstrap Tutorials</b></h5>
                              <p class="text-center p-4">Lorem ipsum dolor sit amet, consectetur adipisicing elit. Ipsam temporibus quidem magni qui doloribus quasi natus inventore nisi velit minima.</p> -->
                          </div>
                      </div>
                  </div>
                  <div class="swipper-buttons">
                    <button type="button" >See our portfolio</button>
                  </div>
        </div>
      </section>

      <script src="https://code.jquery.com/jquery-3.2.1.min.js"></script>
	<script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.2/dist/umd/popper.min.js" ></script> 
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.min.js" ></script>
	<script src="https://cdnjs.cloudflare.com/ajax/libs/OwlCarousel2/2.3.4/owl.carousel.min.js" integrity="sha512-bPs7Ae6pVvhOSiIcyUClR7/q2OAsRiovw4vAkX+zJbw3ShAeeqezq50RIIcIURq7Oa20rW2n2q+fyXBNcU9lrw==" crossorigin="anonymous" referrerpolicy="no-referrer"></script>
	<script>
    $(document).ready(function(){
        $(".owl-carousel").owlCarousel({
            loop:true,
          margin:10,
          nav:true,
          autoplay:true,
          autoplayTimeout:3000,
          autoplayHoverPause:true,
          center: true,
          navText: [
              "<i class='fa fa-angle-left'></i>",
              "<i class='fa fa-angle-right'></i>"
          ],
          responsive:{
              0:{
                  items:1
              },
              600:{
                  items:1
              },
              1000:{
                  items:3
              }
          }
        });
      });
    </script>
</body>
</html>