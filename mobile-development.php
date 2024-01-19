<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Mobile App Development</title>
    <link rel="preconnect" href="https://fonts.googleapis.com">
    <link rel="preconnect" href="https://fonts.gstatic.com" crossorigin>
    <link href="https://fonts.googleapis.com/css2?family=Inter:wght@500&family=Lora&display=swaprel=" stylesheet>
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/js/bootstrap.bundle.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-alpha1/dist/js/bootstrap.bundle.min.js" defer></script>
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/6.5.1/css/all.min.css" />
    <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/swiper@11/swiper-bundle.min.css" />
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/remixicon/4.1.0/remixicon.css"
        integrity="sha512-dUOcWaHA4sUKJgO7lxAQ0ugZiWjiDraYNeNJeRKGOIpEq4vroj1DpKcS3jP0K4Js4v6bXk31AAxAxaYt3Oi9xw=="
        crossorigin="anonymous" referrerpolicy="no-referrer" />

    <link href="csss/main.css" rel="stylesheet" defer>
    <style>
        .mobile-header {
            background: url(./images/pxfuel.com\ copy\ 3.webp);
            height: 50vh;
            width: 100%;
        }

        .head-content {
            width: 100%;
            height: 100%;
            margin: auto;
            padding-top: 4%;
            padding-left: 10%;
        }

        .head-content h2 {
            -webkit-text-stroke: 1px black;
            font-size: 50px;
            font-weight: 700;
            letter-spacing: 1.5px;
            margin-bottom: -.5%;

        }

        .head-content h4 {
            -webkit-text-stroke: .5px rgba(0, 0, 0, 0.838);
            font-size: 50px;
            color: #21D0B3;
            font-weight: lighter;
            outline: black 1px;
            letter-spacing: 1.5px;
            margin-bottom: -.5%;

        }

        .head-content {
            font-size: 18px;
            color: white;
            font-weight: lighter;
            letter-spacing: .5px;

        }

        .title {
            display: flex;
            margin-left: 7%;
            gap: 5px;
            margin-top: 20px;
        }

        .title p {
            font-size: 20px;
            color: #012442;
        }

        .title p:hover {
            font-weight: 600;
            color: #011527;
        }

        .mobile-service {
            margin-left: 6%;
            font-size: 50px;
            letter-spacing: 1px;
            font-weight: 600;
            margin-bottom: 45px;
        }

        .mobile-card {
            border: #d8d8d8 .5px solid;
            padding: 5% 5%;
            width: 100%;
        }

        .mobile-card-2 {
            padding: 5% 5%;
            width: 100%;
        }

        .row {
            width: 90%;
            margin: auto;
        }

        .mobile-card-icon {
            font-size: 35px;
            color: #8c8c94;
        }

        .mobile-card-h2 {
            font-size: 25px;
            font-weight: 600;


        }

        .mobile-card-p {
            margin-top: 2%;
            color: #999999;
        }

        .seconde-section {
            background-image: url(./images/net\ copy.webp);
            background-size: cover;
            height: auto;
            margin-top: 5%;
            width: 100%;
        }

        .seconde-sec-h2 {
            font-size: 38px;
            color: white;
            font-weight: bold;
            letter-spacing: 1.5px;
            line-height: 45px;

        }

        .seconde-sec-p {
            color: white;
            width: 70%;
        }

        .seconde-sec-content-1 {
            width: 60%;
            margin-top: 9%;
            margin-right: -10%;

        }

        .seconde-sec-border {
            border-width: 2px;
            border-style: solid;
            border-image: linear-gradient(to right, #21d0b3, #12caf3) 1;
            border-radius: 10%;
            width: 20%;
            margin-top: 1%;
            margin-bottom: 1%;
        }

        .rect-images-sec-1 {
            display: flex;
            margin-top: -5%;
        }

        .rect-images-sec-2 {
            display: flex;
            margin-top: 5%;
            margin-bottom: -6%;
            margin-left: -6%;
        }

        .rect-img-1 img {
            width: 240px;
            height: 210px;

        }

        .rect-img-2 img {
            width: 240px;
            height: 210px;
        }

        .third-card-div {
            background-color: #14141c;
        }

        .dark-cards {
            /* background-color: #202028; */
        }

        .dark-cards:hover {
            background-color: #202028;
        }

        .mobile-dev-border {
            border: #202028 2px solid;
            padding: 2%;
        }

        .mobile-card-2-h2 {
            font-size: 25px;
            font-weight: 600;
            color: white;
            line-height: 25px;
        }

        .mobile-card-2-p {
            color: white;
            margin-top: 2%;
        }

        .mobile-content-service {
            margin: auto;
            text-align: center;
            color: white;
            padding-top: 70px;
            padding-bottom: 50px;
        }

        .mobile-content-service h2 {
            font-size: 40px;
            font-weight: bold;
        }

        .mobile-content-service span {
            font-size: 30px;
            font-weight: 400;
        }

        .faq-sec-first {
            background: url(./images/Layer\ 93.webp) center center no-repeat;
            background-size: cover;


        }

        .faq-content-div {
            margin: auto;

            text-align: center;
        }

        .faq-content-div h3 {
            color: white;
            font-size: 50px;
            margin-left: -22%;
            margin-bottom: 4%;


        }

        .faq-border {
            border-width: 1.5px;
            border-style: solid;
            border-image: linear-gradient(to right, #21d0b3, #12caf3) 1;
            border-radius: 10%;
            width: 30%;
            margin-top: 2%;
            margin-bottom: 2%;
            text-align: center;
            margin-left: 25%;
        }

        .faq-content p {
            color: white;
            font-size: 20px;
            width: 80%;

            margin-top: 5%;
        }

        .faq-main-div {

            background-color: #14141c;
            padding-left: 5%;
            margin-right: -5%;
            padding-right: 5%;
            padding-top: 1%;
            padding-bottom: 2%;
            width: 55%;

        }

        .faq-div {
            width: auto;
            top: 0;
            background-color: #14141c;

        }

        /* Add your own styles here */
        .faq-section {
            max-width: 600px;
            margin: 0 auto;
            color: white;
        }

        .faq-question {
            cursor: pointer;
            background-color: #202028;
            padding: 20px 10px;
            margin: 0px 0;
            position: relative;
            font-size: 20px;
        }

        .faq-answer {
            display: none;
            background-color: #202028;
            padding-left: 2%;
            border-left: 2px solid;
            padding-bottom: 4%;
            padding-right: 2%;
            border-image: linear-gradient(to right, #21d0b3, #12caf3) 1;

        }

        .arrow-btn {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            transition: transform 0.3s ease;
        }

        .arrow-btn {
            transform: translatey(-50%) rotate(90deg);
            font-size: 40px;
        }

        .faq-question.opened .arrow-btn {
            transform: translateY(-50%) rotate(180deg);
        }

        .faq-question.opened {
            border-image: linear-gradient(to right, #21d0b3, #12caf3) 1;
            border-left: 2px solid;
        }


        .faq-2 {
            margin: auto;
            text-align: center;
            padding-top: 5%;
            background-color: white;
        }

        .faq-2 h3 {
            margin: auto;
            text-align: center;
            font-size: 50px;
            font-weight: bold;
        }

        .faq-section-2 {

            padding-right: 0;
        }


        .faq-question-2 {
            cursor: pointer;
            background-color: #f8f8f8;
            padding: 20px 5px;
            margin: 0px 0;
            position: relative;
            font-size: 20px;
            border-radius: 15px;
        }

        .faq-answer-2 {
            display: none;
            background-color: #f8f8f8;
            border-radius: 15px;
            padding-top: 2%;
            padding-bottom: 2%;
            padding-left: 6%;
            padding-right: 6%;


        }

        .arrow-btn-2 {
            position: absolute;
            top: 50%;
            right: 10px;
            transform: translateY(-50%);
            transition: transform 0.3s ease;
        }

        .arrow-btn-2 {
            transform: translatey(-50%) rotate(180deg);
            font-size: 30px;
        }

        .faq-question-2.opened .arrow-btn-2 {
            transform: translateY(-50%) rotate(90deg);
            border-radius: 0x;
        }

        .magic-box-div {

            width: 100%;
            display: flex;
        
            justify-content: center;
            background: url(./images/map.jpg);
            background-size: cover;
            padding-top: 20%;
            padding-bottom: 20%;


        }

        .magic-box {
            position: relative;
            background-color:red;
            height:180px;
            width: 240px;
            border: white 1px solid;
            border-radius: 20px;
        
        }
        .magic-box::after{
            content: "";
        clip-path: polygon(100% 49%, 0 0, 0 100%);
        background-color:red;
        border-top: #21D0B3 3px solid;
        width: 20px;
        height: 45px;
        z-index: 1;
        position: absolute;
        right: -20px;
        top: 60px;
    
        }

        .maigc-content {
            position: absolute;
            top: 10%;
            justify-content: center;
            align-items: center;
            text-align: center;
        }
        

        .maigc-content p {
            font-size: 25px;
            font-weight: bold;
            color: white;
            margin-bottom: -2%;
        }

        .maigc-content span {
            color: white;
        }


        .magic-box img {

            /* height: 150px;
            width: 250px; */

        }
    </style>
</head>

<body>
    <?php include "./navbar.php"?>
    <div class="container-fluid mobile-header">
        <div class="head-content">
            <h2 style="color:#fff;">MOBILE APP </h2>
            <h4>DEVELOPMENT COMPANY</h4>
            <p>Drive profitable growth with our innovation-led mobile app development<br>
                services that meets business objectives with simplified user experience.</p>
        </div>
    </div>
    <div class="title">
        <p>
            Home
        </p>
        <p>
            / Service /
        </p>
        <p>
            Mobile App Development
        </p>
    </div>
    <div class="container-fluid ">
        <h2 class="mobile-service">Services</h2>
        <div class="row">
            <div class="col-sm-12 col-xs-12 col-lg-4 col-md-4">
                <div class="the-card-2">
                    <div class="mobile-card">
                        <div class="mobile-card-icon"><i class="fa-brands fa-apple"></i></div>
                        <div class="mobile-card-h2">iOS App Development</div>
                        <div class="mobile-card-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis,
                            temporibus velit incidunt illum expedita harum veniam vitae, provident magni eius sequi a
                            nam
                        </div>

                    </div>
                </div>

            </div>
            <div class="col-sm-12 col-xs-12 col-lg-4 col-md-4">
                <div class="mobile-card">
                    <div class="mobile-card-icon"><i class="fa-brands fa-android"></i></div>
                    <div class="mobile-card-h2">Android App Development</div>
                    <div class="mobile-card-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro debitis
                        tempore vel maiores fuga unde ducimus eveniet consequuntur aperiam vitae magnam, </div>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-lg-4 col-md-4">
                <div class="mobile-card">
                    <div class="mobile-card-icon"><i class="fa-brands fa-apple"></i></div>
                    <div class="mobile-card-h2">Flutter App Development</div>
                    <div class="mobile-card-p">Lorem ipsum dolor sit, amet consectetur adipisicing elit. Esse corporis
                        necessitatibus asperiores repellat quo maiores consequatur dolore, eaque obcaecati un
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-lg-4 col-md-4 mt-3">
                <div class="mobile-card">
                    <div class="mobile-card-icon"><i class="fa-brands fa-react"></i></div>
                    <div class="mobile-card-h2">React Native App Development</div>
                    <div class="mobile-card-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis,
                        temporibus velit incidunt illum expedita harum veniam vitae,
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-lg-4 col-md-4 mt-3">
                <div class="mobile-card">
                    <div class="mobile-card-icon"><i class="fa-brands fa-android"></i></div>
                    <div class="mobile-card-h2">MVP Development</div>
                    <div class="mobile-card-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Porro debitis
                        tempore vel maiores fuga unde ducimus eveniet consequuntur aperiam vitae magnam, <br> </div>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-lg-4 col-md-4 mt-3">
                <div class="mobile-card">
                    <div class="mobile-card-icon"><i class="fa-brands fa-apple"></i></div>
                    <div class="mobile-card-h2">Progressive Web App (PWA) Development</div>
                    <div class="mobile-card-p">Lorem ipsum dolor sit amet consectetur, adipisicing elit. Dolores
                        facilis, praesentium nihil accusantium ratione doloribus incidunt
                    </div>
                </div>
            </div>

        </div>
    </div>

    <div class="seconde-section">
        <div class="row">
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 seconde-sec-content-1 ">
                <div class="seconde-sec-h2">INTEGRATING TECHNOLOGIES THAT DELIVER BRAND EXPERIENCES</div>
                <div class="seconde-sec-border"></div>
                <div class="seconde-sec-p">Our app developers work in lockstep with creative thinkers to
                    deliver tech-ahead solutions that enhance brand interaction
                    and improve omnichannel ROI</div>
            </div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12 seconde-sec-content-2 ">
                <div class="row">
                    <div class="rect-images-sec-1">
                        <div class="rect-img-1">
                            <img src="./images/Layer 78 (1).webp">
                        </div>
                        <div class="rect-img-2">
                            <img src="./images/Layer 76 (1).webp">
                        </div>
                    </div>
                    <div class="rect-images-sec-2">
                        <div class="rect-img-1">
                            <img src="./images/Layer 75 (1).webp">
                        </div>
                        <div class="rect-img-2">
                            <img src="./images/Layer 77 (1).webp">
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>

    <div class="magic-box-div">
        <div class="magic-box">
           
            <div class="maigc-content">
                <p>STEP 1</p><span>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </span>
            </div>

        </div>
        <div class="magic-box ">
           
            <div class="maigc-content">
                <p>STEP 2</p><span>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </span>
            </div>
        </div>
        <div class="magic-box ">
           
            <div class="maigc-content">
                <p>STEP 3</p><span>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </span>
            </div>
        </div>
        <div class="magic-box ">
            <div class="maigc-content">
                <p>STEP 4</p><span>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </span>
            </div>
        </div>
        <div class="magic-box">
            <div class="maigc-content">
                <p>STEP 5</p><span>
                    Lorem ipsum dolor sit amet, consectetur adipisicing elit.
                </span>
            </div>
        </div>
    </div>

    </div>

    <div class="container-fluid  third-card-div">
        <div class="mobile-content-service">
            <h2>Why Macwiq <span>is Your Best Choice<br>
                    For</span> Mobile Development?</h2>
        </div>
        <div class="row">
            <div class="col-sm-12 col-xs-12 col-lg-4 col-md-4">
                <div class="mobile-dev-border">
                    <div class="mobile-card-2 dark-cards">
                        <div class="mobile-card-icon"><i class="fa-solid fa-id-badge"></i></div>
                        <div class="mobile-card-2-h2">Qualified App Developers</div>
                        <div class="mobile-card-2-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis,
                            temporibus velit incidunt illum expedita harum veniam vitae, provident magni eius sequi a
                            nam
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-lg-4 col-md-4">
                <div class="mobile-dev-border">
                    <div class="mobile-card-2 dark-cards">
                        <div class="mobile-card-icon"><i class="fa-solid fa-id-badge"></i></div>
                        <div class="mobile-card-2-h2">Client-centric Approach</div>
                        <div class="mobile-card-2-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis,
                            temporibus velit incidunt illum expedita harum veniam vitae, provident magni eius sequi a
                            nam
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-lg-4 col-md-4">
                <div class="mobile-dev-border">
                    <div class="mobile-card-2 dark-cards">
                        <div class="mobile-card-icon"><i class="fa-solid fa-id-badge"></i></div>
                        <div class="mobile-card-2-h2">Best UX/UI Experts</div>
                        <div class="mobile-card-2-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis,
                            temporibus velit incidunt illum expedita harum veniam vitae, provident magni eius sequi a
                            nam
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-lg-4 col-md-4 mt-3 mb-4">
                <div class="mobile-dev-border">
                    <div class="mobile-card-2 dark-cards">
                        <div class="mobile-card-icon"><i class="fa-solid fa-id-badge"></i></div>
                        <div class="mobile-card-2-h2">Dedicated Teams</div>
                        <div class="mobile-card-2-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis,
                            temporibus velit incidunt illum expedita harum veniam vitae, provident magni eius sequi a
                            nam
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-lg-4 col-md-4 mt-3">
                <div class="mobile-dev-border">
                    <div class="mobile-card-2 dark-cards">
                        <div class="mobile-card-icon"><i class="fa-solid fa-id-badge"></i></div>
                        <div class="mobile-card-2-h2">Agile Development Process</div>
                        <div class="mobile-card-2-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis,
                            temporibus velit incidunt illum expedita harum veniam
                        </div>
                    </div>
                </div>
            </div>
            <div class="col-sm-12 col-xs-12 col-lg-4 col-md-4 mt-3">
                <div class="mobile-dev-border">
                    <div class="mobile-card-2 dark-cards">
                        <div class="mobile-card-icon"><i class="fa-solid fa-id-badge"></i></div>
                        <div class="mobile-card-2-h2">Quality & Security</div>
                        <div class="mobile-card-2-p">Lorem ipsum dolor sit amet consectetur adipisicing elit. Omnis,
                            temporibus velit incidunt illum expedita harum veniam vitae, provident magni eius sequi a
                            nam
                        </div>
                    </div>
                </div>
            </div>

        </div>
    </div>

    <?php include "./swipper-mob.php" ?>

    <div class="faq-sec-first">
        <div class="row">
            <div class="col-sm-12 col-xs-12 col-lg-6 col-md-6 faq-content-div">
                <div class="faq-content">
                    <h3>Mobile Apps Can Be<br>
                        Game-Changing </h3>
                    <div class="faq-border"></div>
                    <p>Our industry-focused app helps your
                        business to become successful and gain
                        access to varied benefits.</p>
                </div>

            </div>
            <div class="col-sm-12 col-xs-12 col-lg-6 col-md-6 faq-main-div">


                <div class="faq-div">
                    <!-- <img src="./images/Untitled design (69).webp" alt=""> -->
                    <div class="faq-section mt-3">
                        <div class="faq-question">
                            Effective Customer Connect
                            <div class="arrow-btn"><span>&#8250;</span></div>
                        </div>
                        <div class="faq-answer">Mobile apps eliminate website loading time which directly influences the
                            bounce rate and work as the most suitable point of contact with end-users.</div>

                        <div class="faq-question mt-3">
                            Raise Conversion Rates
                            <div class="arrow-btn"><span>&#8250;</span></div>
                        </div>
                        <div class="faq-answer">Mobile Apps are the most convenient and effective way to grab users’
                            attention. It can yield up to 2x conversion rate as compared to other marketing platforms.
                        </div>
                        <div class="faq-question mt-3">
                            Brilliant Marketing Channel
                            <div class="arrow-btn"><span>&#8250;</span></div>
                        </div>
                        <div class="faq-answer">Mobile apps are equipped with personalized features, custom engagement
                            activities, and content, which promote brand recognition.</div>
                        <div class="faq-question mt-3">
                            Round-the-Clock Accessibility
                            <div class="arrow-btn"><span>&#8250;</span></div>
                        </div>
                        <div class="faq-answer">Apps are easier to access for the user on their respective device over a
                            website and provide personalized messages and notifications. Moreover, the PWA apps can even
                            be used offline.</div>
                        <div class="faq-question mt-3">
                            Maximum User Engagement
                            <div class="arrow-btn"><span>&#8250;</span></div>
                        </div>
                        <div class="faq-answer">Mobile apps are highly effective in brand building, user engagement, and
                            offer multiple benefits because of its easy accessibility for users on varied devices and
                            browsers.</div>
                    </div>
                </div>

            </div>
        </div>

    </div>
    <div class="faq-2">
        <h3>Frequently Asked Questions</h3>
        <div class="row mt-5">
            <div class="col-sm-12 col-lg-6 col-md-6  col-xs-12 faq-section-2">
                <div class="faq-question-2">
                    What Mobile app development services do you offer
                    <div class="arrow-btn-2"><span>&#8593;</span></div>
                </div>
                <div class="faq-answer-2">Mobile apps eliminate website loading time which directly influences the
                    bounce rate and work as the most suitable point of contact with end-users.</div>
            </div>
            <div class="col-sm-12 col-lg-6 col-md-6  col-xs-12">
                <div class="faq-question-2">
                    What Software development services do you offer
                    <div class="arrow-btn-2"><span>&#8593;</span></div>
                </div>
                <div class="faq-answer-2">Mobile apps eliminate website loading time which directly influences the
                    bounce rate and work as the most suitable point of contact with end-users.</div>

            </div>
            <div class="col-sm-12 col-lg-6 col-md-6  col-xs-12  faq-section-2 mt-3">
                <div class="faq-question-2">
                    What Mobile app development services do you offer
                    <div class="arrow-btn-2"><span>&#8593;</span></div>
                </div>
                <div class="faq-answer-2">Mobile apps eliminate website loading time which directly influences the
                    bounce rate and work as the most suitable point of contact with end-users.</div>
            </div>
            <div class="col-sm-12 col-lg-6 col-md-6  col-xs-12 mt-3">
                <div class="faq-question-2">
                    What Software development services do you offer
                    <div class="arrow-btn-2"><span>&#8593;</span></div>
                </div>
                <div class="faq-answer-2">Mobile apps eliminate website loading time which directly influences the
                    bounce rate and work as the most suitable point of contact with end-users.</div>

            </div>
            <div class="col-sm-12 col-lg-6 col-md-6  col-xs-12  faq-section-2 mt-3">
                <div class="faq-question-2">
                    What Mobile app development services do you offer
                    <div class="arrow-btn-2"><span>&#8593;</span></div>
                </div>
                <div class="faq-answer-2">Mobile apps eliminate website loading time which directly influences the
                    bounce rate and work as the most suitable point of contact with end-users.</div>
            </div>
            <div class="col-sm-12 col-lg-6 col-md-6  col-xs-12 mt-3">
                <div class="faq-question-2">
                    What Software development services do you offer
                    <div class="arrow-btn-2"><span>&#8593;</span></div>
                </div>
                <div class="faq-answer-2">Mobile apps eliminate website loading time which directly influences the
                    bounce rate and work as the most suitable point of contact with end-users.</div>

            </div>
            <div class="col-sm-12 col-lg-6 col-md-6  col-xs-12  faq-section-2 mt-3">
                <div class="faq-question-2">
                    What Mobile app development services do you offer
                    <div class="arrow-btn-2"><span>&#8593;</span></div>
                </div>
                <div class="faq-answer-2">Mobile apps eliminate website loading time which directly influences the
                    bounce rate and work as the most suitable point of contact with end-users.</div>
            </div>
            <div class="col-sm-12 col-lg-6 col-md-6  col-xs-12 mt-3">
                <div class="faq-question-2">
                    What Software development services do you offer
                    <div class="arrow-btn-2"><span>&#8593;</span></div>
                </div>
                <div class="faq-answer-2">Mobile apps eliminate website loading time which directly influences the
                    bounce rate and work as the most suitable point of contact with end-users.</div>

            </div>
        </div>

    </div>


    <!---form-->
    <div class="container-fluid form-main-div" style="padding-top: 0%!important; padding-bottom: 0!important;">
        <div class="row  form-div">
            <div class="form-border" style="margin-bottom: 0!important;"></div>
            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <div class="content-form-div">
                    <h2>Do you have a project in mind ?<br>
                        Talk to the experts.</h2>
                    <form class="form-input">
                        <div class="first-input-box">
                            <input type="text" class="form-name" id="yourname" placeholder="Your Name">
                            <input type="email" class="form-Mobile" id="exampleInputEmail1" placeholder="Mobile Number">

                        </div>
                        <div class="first-input-box">
                            <input type="text" class="form-Email" id="yourname" placeholder="Email">
                            <input type="email" class="form-Budget" id="exampleInputEmail1" placeholder="Budget">

                        </div>
                        <div class="third-input-box">
                            <input type="text" class="form-About" id="yourname" placeholder="About Project">

                        </div>
                        <!-- <button class="g-recaptcha" data-sitekey="6LdnIUcpAAAAAORbE04jT3zJKlLRPbVZCq4_bJXS" data-callback='onSubmit' data-action='submit'>Submit</button> -->
                        <button type="button" class=" form-submit">Submit</button>
                    </form>
                </div>
            </div>


            <div class="col-md-6 col-lg-6 col-sm-12 col-xs-12">
                <div class="side-image-footer">
                    <img src="./images/Consulting.webp">
                    <div class="side-conetent">
                        <h4>Get in Touch</h4>
                        <p>
                            We’d love to resolve your queries with
                            personalized assistance.
                        </p>
                        <div class="icon-image-div">

                            <div class="icon-image"><i class="ri-mail-line"></i>
                            </div>
                            <div>
                                <div class="icone-side-content">
                                    <p>Chat with us</p>
                                    <span>contact@macwiq.com</span>
                                </div>

                            </div>


                        </div>
                        <div class="icon-image-div  ">

                            <div class="icon-image"><i class="ri-phone-line"></i>
                            </div>
                            <div>
                                <div class="icone-side-content">
                                    <p>Lets discuss via call</p>
                                    <span>+1-234-567-8910</span>
                                </div>

                            </div>


                        </div>
                        <div class="icon-image-div ">

                            <div class="icon-image"><i class="ri-skype-line"></i>
                            </div>
                            <div>
                                <div class="icone-side-content">
                                    <p>Say Hello! on Skype</p>
                                    <span>vikassharma</span>
                                </div>

                            </div>



                        </div>
                        <div class="icon-down">
                            <div class="second-icon-div">
                                <div class="seconde-image">
                                    <i class="ri-facebook-circle-fill"></i>
                                </div>

                                <div class="seconde-image">
                                    <i class="ri-linkedin-fill"></i>
                                </div>
                                <div class="seconde-image">
                                    <i class="ri-instagram-line"></i>
                                </div>
                                <div class="seconde-image">
                                    <i class="ri-twitter-x-fill"></i>
                                </div>
                                <div class="seconde-image">
                                    <i class="ri-youtube-fill"></i>
                                </div>
                                <div class="seconde-image">
                                    <i class="ri-whatsapp-line"></i>
                                </div>


                            </div>
                        </div>

                    </div>

                </div>
            </div>
        </div>

    </div>

    <div class="container-fluid main-footer">
        <div class="main-form">
            <img src="./images/3-2 (1).webp">

        </div>
        <div class=" text-center text-white location">
            <h3>
                Our Locations
            </h3>
        </div>
        <div class="imagebox">
            <div class="first-img-box text-center">
                <div class="mian-image-div">


                    <div class="country-images ">
                        <img src="./images/hq-india-svg.webp">
                    </div>
                </div>
                <div class="heading-main">
                    HQ INDIA

                </div>
                <div class="paragraph-main">

                    H-106, Sector-63, Noida-201301
                </div>

            </div>
            <div class="first-img-box text-center">
                <div class="mian-image-div">


                    <div class="country-images">
                        <img src="./images/hq-usa-svg.webp">


                    </div>
                </div>
                <div class="heading-main">
                    US

                </div>
                <div class="paragraph-main">
                    123, 345, Lorim Ipsum,
                    Lorim Ipsum
                </div>

            </div>
            <div class="first-img-box text-center">
                <div class="mian-image-div">


                    <div class="country-images">
                        <img src="./images/hq-canada copy.webp">


                    </div>
                </div>
                <div class="heading-main">
                    CANADA
                </div>
                <div class="paragraph-main">
                    123, 345, Lorim Ipsum,
                    Lorim Ipsum
                </div>

            </div>


        </div>

        <div class="lower-box ">

            <div class="lower-icon">
                <h3>
                    Helping you overcome your technology challenges</h3>
            </div>
            <div class="footer-btn">
                <button type="button" class="btn ">Discover More</button>

            </div>


        </div>
        <div class="footer-row-div">
            <div class="first-footer-box">
                <img src="./images/Vector Smart Object copy 5.webp" alt="">
                <p>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Ut elit tellus, luctus nec ullamcorper
                    mattis, pulvinar dapibus leo.</p>
                <ul class="footer-icons">
                    <li></li>
                    <li></li>
                    <li></li>
                    <li></li>
                </ul>

            </div>
            <div class="seconde-footer-box">
                <h6>Quick Links</h6>
                <ul class="footer-icons-2">
                    <li>About Us</li>
                    <li>Meet our team</li>
                    <li>Blogs</li>
                    <li>Our projects</li>
                    <li>Contact Us</li>
                </ul>
            </div>
            <div class="third-footer-box">
                <h6>Contact</h6>
                <ul class="footer-icons-2">
                    <li>+1 (800) 220-0275</li>
                    <li>contact@macwiq.com</li>
                    <li>30 N Gould ST STE R Sherridan,
                        WY 82801</li>

                </ul>
            </div>
            <div class="fourth-footer-box">
                <iframe
                    src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d79384.58173465701!2d-0.15654167745757946!3d51.55414974348658!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47d8a00baf21de75%3A0x52963a5addd52a99!2sLondon%2C%20UK!5e0!3m2!1sen!2sin!4v1704214149017!5m2!1sen!2sin"
                    width="600" height="450" style="border:0;" allowfullscreen="" loading="lazy"
                    referrerpolicy="no-referrer-when-downgrade"></iframe>
            </div>

        </div>
    </div>


    </div>
    <div class="last-footer ">
        <p>Copyright &copy; 2021 MacWiQ All rights</p>
        <p>Desgined by PK Solution.com</p>

    </div>
    <script>
        // JavaScript code to handle the FAQ interactions
        document.addEventListener("DOMContentLoaded", function () {
            const faqQuestions = document.querySelectorAll('.faq-question');

            faqQuestions.forEach(question => {
                question.addEventListener('click', () => {
                    // Close all other answers before opening the clicked one
                    faqQuestions.forEach(q => {
                        if (q !== question) {
                            q.classList.remove('opened');
                            q.nextElementSibling.style.display = 'none';
                        }
                    });

                    // Toggle the display of the clicked question's answer
                    const answer = question.nextElementSibling;
                    answer.style.display = (answer.style.display === 'none' || answer.style.display === '') ? 'block' : 'none';

                    // Toggle the opened class for arrow rotation
                    question.classList.toggle('opened');
                });
            });
        });

        document.addEventListener("DOMContentLoaded", function () {
            const faqQuestions = document.querySelectorAll('.faq-question-2');

            faqQuestions.forEach(question => {
                question.addEventListener('click', () => {
                    // Close all other answers before opening the clicked one
                    faqQuestions.forEach(q => {
                        if (q !== question) {
                            q.classList.remove('opened');
                            q.nextElementSibling.style.display = 'none';
                        }
                    });

                    // Toggle the display of the clicked question's answer
                    const answer = question.nextElementSibling;
                    answer.style.display = (answer.style.display === 'none' || answer.style.display === '') ? 'block' : 'none';

                    // Toggle the opened class for arrow rotation
                    question.classList.toggle('opened');
                });
            });
        });
    </script>
</body>

</html>