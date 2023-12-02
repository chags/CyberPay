<?php
  $template = new TEngine();
  $app = new Module();

  // <?php $template->css();
  // <?php $template->js();
  //<?php $template->component('sweetalert-notification');
   //<?php $template->component('nav');
   // <?php $template->invokeView(); 
  
?>
<!DOCTYPE html>
<html >
<head>
  
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  
  <meta name="viewport" content="width=device-width, initial-scale=1, minimum-scale=1">
  <link rel="shortcut icon" href="assets/images/pay-230x90.png" type="image/x-icon">
  <meta name="description" content="">
  
  
  <title>Home</title>
  <?php $template->css(); ?>

  
</head>
<body>
<body>
  
  <section class="menu menu1 cid-svGZR3ZApP" once="menu" id="menu1-f">
    
    <nav class="navbar navbar-dropdown navbar-fixed-top navbar-expand-lg">
        <div class="container-fluid">
            <div class="navbar-brand">
                <span class="navbar-logo">
                    <a href="#">
                        <img src="assets/images/pay-230x90.png" alt="" style="height: 4.6rem;">
                    </a>
                </span>
                
            </div>
            <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarNavAltMarkup" aria-expanded="false" aria-label="Toggle navigation">
                <div class="hamburger">
                    <span></span>
                    <span></span>
                    <span></span>
                    <span></span>
                </div>
            </button>
            <div class="collapse navbar-collapse" id="navbarSupportedContent">
                <ul class="navbar-nav nav-dropdown" data-app-modern-menu="true"><li class="nav-item"><a class="nav-link link text-warning text-primary display-7" href="index.html#header03-1">
                            Home</a></li>
                    <li class="nav-item"><a class="nav-link link text-warning text-primary display-7" href="index.html#features09-2">
                            About</a></li>
                    <li class="nav-item"><a class="nav-link link text-warning text-primary display-7" href="index.html#features04-3">Service</a></li><li class="nav-item"><a class="nav-link link text-warning text-primary display-7" href="index.html#pricing01-0">Price</a></li>
                    <li class="nav-item"><a class="nav-link link text-warning display-7" href="#">+1 (234) 567 89 01</a>
                    </li></ul>
                <div class="icons-menu">
                    <a class="iconfont-wrapper" href="#" target="_blank">
                        <span class="p-2 mbr-iconfont socicon-facebook socicon"></span>
                    </a>
                    <a class="iconfont-wrapper" href="#" target="_blank">
                        <span class="p-2 mbr-iconfont socicon-twitter socicon"></span>
                    </a>
                    
                    
                </div>
                <div class="navbar-buttons mbr-section-btn"><a class="btn btn-primary display-4" href="<?=$app->view('access', 'login'); ?>">
                        Sign up</a></div>
            </div>
        </div>
    </nav>
</section>

<section class="header3 cid-svGWZHbnpD" data-bg-video="https://vimeo.com/890496055?share=copy" id="header03-1">

    

    <div class="mbr-overlay" style="opacity: 0.7; background-color: rgb(34, 153, 170);"></div>

    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-7">
                <h1 class="mbr-section-title mbr-fonts-style mb-3 display-1"><strong>Cyber HOST&nbsp;</strong></h1>
                
                <p class="mbr-text mbr-fonts-style mb-4 display-7"><strong>Lorem ipsum dolor sit amet, consectetur
                        adipiscing elit. Phasellus cursus, lacus at fringilla lacinia, leo leo eleifend tortor, quis
                        sollicitudin mauris ipsum a elit. Duis eget tincidunt dui, non auctor mauris.</strong><br></p>
                <div class="mbr-section-btn mt-3"><a class="btn btn-lg btn-primary display-4" href="#">Read More</a> <a class="btn btn-lg btn-white display-4" href="#">Get Started</a></div>
            </div>
        </div>
    </div>
</section>

<section class="features2 cid-svGYpYabkQ" id="features02-e">
    
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-12 col-md-8 col-lg-4">
                <div class="card-wrapper">
                    <span class="mbr-iconfont m-auto mobi-mbri-protect mobi-mbri" style="color: rgb(34, 153, 170); fill: rgb(34, 153, 170);"></span>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style mb-2 display-7"><a href="#" class="text-primary"><strong>Home
                                    Security</strong></a></h4>
                        
                    </div>
                </div>
            </div>
            <div class="card col-12 col-md-8 col-lg-4">
                <div class="card-wrapper">
                    <span class="mbr-iconfont m-auto mobi-mbri-letter mobi-mbri" style="color: rgb(34, 153, 170); fill: rgb(34, 153, 170);"></span>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style mb-2 display-7"><a href="#" class="text-primary"><strong>Office Security</strong></a></h4>
                        
                    </div>
                </div>
            </div>
            <div class="card col-12 col-md-8 col-lg-4">
                <div class="card-wrapper">
                    <span class="mbr-iconfont m-auto mobi-mbri-to-local-drive mobi-mbri" style="color: rgb(34, 153, 170); fill: rgb(34, 153, 170);"></span>
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style mb-2 display-7"><a href="#" class="text-primary"><strong>All Cameras</strong></a>
                        </h4>
                        
                    </div>

                </div>
            </div>
            <div class="col-12 align-center mt-5">
                <div class="mbr-section-btn mt-5"><a class="btn btn-lg btn-secondary display-4" href="#">NEW
                        SECURITY PLAN IS AVAILABLE. START NOW!</a></div>
            </div>
        </div>
    </div>
</section>

<section class="features9 cid-svGY3Q6PT6" id="features09-2">

    
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12 col-lg-6">
                <div class="card-wrapper">
                    <div class="card-box align-left">
                        <h4 class="card-title mbr-fonts-style mb-4 display-2"><strong>Cyber Pay</strong></h4>
                        <p class="mbr-text mbr-fonts-style mb-4 display-7"><strong>Lorem ipsum dolor sit amet, consectetur
                                adipiscing elit. Phasellus cursus, lacus at fringilla lacinia, leo leo eleifend tortor,
                                quis sollicitudin mauris ipsum a elit.</strong><br></p>
                        
                    </div>
                </div>
            </div>
            <div class="col-12 col-lg-6">
                <div class="item mbr-flex">
                    <div class="icon-box">
                        <span class="mbr-iconfont mobi-mbri-globe-2 mobi-mbri" style="color: rgb(34, 153, 170); fill: rgb(34, 153, 170);"></span>
                    </div>
                    <div class="text-box">
                        <h4 class="icon-title mbr-black mbr-fonts-style display-5"><strong>Host</strong></h4>
                        <h5 class="icon-text mbr-black mbr-fonts-style display-4"><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Phasellus cursus, lacus at fringilla lacinia leo eleifend.</strong></h5>
                    </div>
                </div>
                <div class="item mbr-flex">
                    <div class="icon-box">
                        <span class="mbr-iconfont mobi-mbri-update mobi-mbri" style="color: rgb(34, 153, 170); fill: rgb(34, 153, 170);"></span>
                    </div>
                    <div class="text-box">
                        <h4 class="icon-title mbr-black mbr-fonts-style display-5"><strong>Sites</strong></h4>
                        <h5 class="icon-text mbr-black mbr-fonts-style display-4"><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Phasellus cursus, lacus at fringilla lacinia leo eleifend.</strong></h5>
                    </div>
                </div>
                <div class="item mbr-flex">
                    <div class="icon-box">
                        <span class="mbr-iconfont mobi-mbri-user-2 mobi-mbri" style="color: rgb(34, 153, 170); fill: rgb(34, 153, 170);"></span>
                    </div>
                    <div class="text-box">
                        <h4 class="icon-title mbr-black mbr-fonts-style display-5"><strong>Domains</strong></h4>
                        <h5 class="icon-text mbr-black mbr-fonts-style display-4"><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Phasellus cursus, lacus at fringilla lacinia leo eleifend.</strong></h5>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="features4 cid-svGY4J6ohy" id="features04-3">
    
    
    <div class="container">
        <div class="row">
            <div class="col-12">
                <h2 class="title align-left mbr-fonts-style mb-5 display-2"><strong>Our Services</strong></h2>

            </div>
            <div class="card col-12 col-md-12 col-lg-6">
                <div class="card-wrapper">
                    <h3 class="card-number mbr-fonts-style display-5"><strong>01</strong></h3>


                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style mb-2 display-5"><strong>Home Security</strong></h4>
                        
                    </div>
                    <span class="mbr-iconfont m-auto mobi-mbri-arrow-next mobi-mbri"></span>
                </div>
            </div>
            <div class="card col-12 col-md-12 col-lg-6">
                <div class="card-wrapper">
                    <h3 class="card-number mbr-fonts-style display-5"><strong>03</strong></h3>


                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style mb-2 display-5"><strong>Office Security</strong></h4>
                        
                    </div>
                    <span class="mbr-iconfont m-auto mobi-mbri-arrow-next mobi-mbri"></span>
                </div>
            </div>
            <div class="card col-12 col-md-12 col-lg-6">
                <div class="card-wrapper">
                    <h3 class="card-number mbr-fonts-style display-5"><strong>02</strong></h3>


                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style mb-2 display-5"><strong>Cyber Security</strong></h4>
                        
                    </div>
                    <span class="mbr-iconfont m-auto mobi-mbri-arrow-next mobi-mbri"></span>
                </div>
            </div>
            <div class="card col-12 col-md-12 col-lg-6">
                <div class="card-wrapper">
                    <h3 class="card-number mbr-fonts-style display-5"><strong>04</strong></h3>


                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style mb-2 display-5"><strong>CCTV Cameras</strong></h4>
                        
                    </div>
                    <span class="mbr-iconfont m-auto mobi-mbri-arrow-next mobi-mbri"></span>
                </div>
            </div>

        </div>
    </div>
</section>

<section class="features5 cid-svH12O6SZ6" id="features05-h">
    
    
    <div class="container">
        
        <div class="row">
            <div class="item features-image col-12 col-md-6 col-lg-6">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/mbr-5.jpg" alt="">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5"><strong>Cloud Sites</strong></h5>
                        
                        
                    </div>
                    
                </div>
            </div>
            <div class="item features-image col-12 col-md-6 col-lg-6">
                <div class="item-wrapper">
                    <div class="item-img">
                        <img src="assets/images/mbr-6.jpg" alt="">
                    </div>
                    <div class="item-content">
                        <h5 class="item-title mbr-fonts-style display-5"><strong>Domains</strong></h5>
                        
                        
                    </div>
                    
                </div>
            </div>

        </div>
    </div>
</section>

<section class="pricing1 cid-tXeO8SJJIw" id="pricing01-0">
    
    


    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="title align-left mbr-fonts-style mb-5 display-2"><strong>Our Pricing</strong></h2>
            </div>

            <div class="col-12 col-md-6 align-center col-lg-4">
                <div class="plan">
                    <div class="plan-header">
                        <h6 class="plan-title mbr-fonts-style mb-3 display-7"><strong>Basic</strong></h6>
                        <div class="plan-price">
                            <p class="price mbr-fonts-style m-0 display-2"><strong>$19</strong></p>
                            <p class="price-term mbr-fonts-style mb-3 display-4"><strong>Per month</strong>
                            </p>
                        </div>
                    </div>
                    <div class="plan-body">
                        <div class="plan-list mb-4">
                            <ul class="list-group mbr-fonts-style list-group-flush display-7">
                                <li class="list-group-item">Lorem ipsum</li>
                                <li class="list-group-item">Dolor sit amet</li>
                                <li class="list-group-item">Consectetur </li>
                                <li class="list-group-item">Dipiscing elit</li>
                                <li class="list-group-item">Sed consequat</li>
                            </ul>
                        </div>
                        <div class="mbr-section-btn text-center"><a href="#" class="btn btn-lg btn-info display-4">Buy Now</a></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 align-center col-lg-4">
                <div class="plan">
                    <div class="plan-header">
                        <h6 class="plan-title mbr-fonts-style mb-3 display-7"><strong>Professional</strong></h6>
                        <div class="plan-price">
                            <p class="price mbr-fonts-style m-0 display-2"><strong>$29</strong></p>
                            <p class="price-term mbr-fonts-style mb-3 display-4"><strong>Per year</strong>
                            </p>
                        </div>
                    </div>
                    <div class="plan-body">
                        <div class="plan-list mb-4">
                            <ul class="list-group mbr-fonts-style list-group-flush display-7">
                                <li class="list-group-item">Lorem ipsum
                                </li>
                                <li class="list-group-item">Dolor sit amet
                                </li>
                                <li class="list-group-item">Consectetur
                                </li>
                                <li class="list-group-item">Dipiscing elit
                                </li>
                                <li class="list-group-item">Sed consequat</li>
                            </ul>
                        </div>
                        <div class="mbr-section-btn text-center"><a href="#" class="btn btn-lg btn-info display-4">Buy Now</a></div>
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-6 align-center col-lg-4">
                <div class="plan">
                    <div class="plan-header">
                        <h6 class="plan-title mbr-fonts-style mb-3 display-7"><strong>Ultra</strong></h6>
                        <div class="plan-price">
                            <p class="price mbr-fonts-style m-0 display-2"><strong>$399</strong></p>
                            <p class="price-term mbr-fonts-style mb-3 display-4"><strong>One time</strong>
                            </p>
                        </div>
                    </div>
                    <div class="plan-body">
                        <div class="plan-list mb-4">
                            <ul class="list-group mbr-fonts-style list-group-flush display-7">
                                <li class="list-group-item">Lorem ipsum
                                </li>
                                <li class="list-group-item">Dolor sit amet
                                </li>
                                <li class="list-group-item">Consectetur
                                </li>
                                <li class="list-group-item">Dipiscing elit
                                </li>
                                <li class="list-group-item">Sed consequat</li>
                            </ul>
                        </div>
                        <div class="mbr-section-btn text-center"><a href="#" class="btn btn-lg btn-info display-4">Buy Now</a></div>
                    </div>
                </div>
            </div>
            
        </div>
    </div>
</section>

<section class="video1 cid-svH0ttup6b" id="video01-g">
    
    
    <div class="align-center container">
        <div class="mbr-section-head pb-5">
            <h4 class="mbr-section-title mbr-fonts-style mb-0 display-1"><strong>high speeds</strong></h4>
            
        </div>
        <div class="row justify-content-center">
            <div class="col-12 col-lg-12">
                <div class="box">
                    <div class="mbr-media show-modal align-center" data-modal=".modalWindow">
                        <img src="assets/images/mbr-1920x1440.jpg" alt="">
                        <div class="icon-wrap">
                            <a class="text-primary" href="#"><span class="mbr-iconfont socicon-youtube socicon"></span></a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <div>
        <div class="modalWindow" style="display: none;">
            <div class="modalWindow-container">
                <div class="modalWindow-video-container">
                    <div class="modalWindow-video">
                        <iframe width="100%" height="100%" frameborder="0" allowfullscreen="1" data-src="https://vimeo.com/890496055?share=copy"></iframe>
                    </div>
                    <a class="close" role="button" data-dismiss="modal">
                        <span aria-hidden="true" class="mbr-iconfont mobi-mbri-close mobi-mbri closeModal"></span>
                        <span class="sr-only">Close</span>
                    </a>
                </div>
            </div>
        </div>
    </div>
</section>

<section class="numbers2 cid-svGYfOiMwL" id="numbers02-a">
    
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-md-12 col-lg-12">
                <div class="card-wrapper pb-4">
                    <div class="card-box align-left">
                        <h4 class="main-title mbr-fonts-style mb-4 display-2"><strong>Our History</strong></h4>
                        
                    </div>
                </div>
            </div>
            <div class="col-12 col-md-12">
                <div class="item mbr-flex">

                    <div class="text-box">
                        <h4 class="icon-subtitle card-title mbr-black mbr-fonts-style display-2"><strong>2019</strong></h4>

                        <h4 class="icon-title card-title mbr-black mbr-fonts-style display-5"><strong>Home Security</strong></h4>
                        <h5 class="icon-text mbr-black mbr-fonts-style display-7"><strong>Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Phasellus cursus, lacus at fringilla lacinia, leo leo
                                eleifend tortor, quis sollicitudin mauris ipsum a elit. Duis eget tincidunt dui, non
                                auctor mauris.</strong><strong><br></strong></h5>
                    </div>
                    <div class="icon-box">
                        <span class="step-number mbr-fonts-style display-5">1</span>
                    </div>
                </div>
                <div class="item mbr-flex">

                    <div class="text-box">
                        <h4 class="icon-subtitle card-title mbr-black mbr-fonts-style display-2"><strong>2020</strong></h4>

                        <h4 class="icon-title card-title mbr-black mbr-fonts-style display-5"><strong>Office Security</strong></h4>
                        <h5 class="icon-text mbr-black mbr-fonts-style display-7"><strong>Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Phasellus cursus, lacus at fringilla lacinia, leo leo
                                eleifend tortor, quis sollicitudin mauris ipsum a elit. Duis eget tincidunt dui, non
                                auctor mauris.</strong></h5>
                    </div>
                    <div class="icon-box">
                        <span class="step-number mbr-fonts-style display-5">2</span>
                    </div>
                </div>
                <div class="item mbr-flex last">

                    <div class="text-box">
                        <h4 class="icon-subtitle card-title mbr-black mbr-fonts-style display-2"><strong>2021</strong></h4>

                        <h4 class="icon-title card-title mbr-black mbr-fonts-style display-5"><strong>CCTV Cameras</strong></h4>
                        <h5 class="icon-text mbr-black mbr-fonts-style display-7"><strong>Lorem ipsum dolor sit amet,
                                consectetur adipiscing elit. Phasellus cursus, lacus at fringilla lacinia, leo leo
                                eleifend tortor, quis sollicitudin mauris ipsum a elit. Duis eget tincidunt dui, non
                                auctor mauris.</strong></h5>
                    </div>
                    <div class="icon-box">
                        <span class="step-number mbr-fonts-style display-5">3</span>
                    </div>
                </div>
                
                
                
                
                
                
                
            </div>
        </div>
    </div>
</section>

<section class="content3 cid-svGYoY0jEe" id="article04-d">
    
    
    <div class="container">
        <div class="row">
            <div class="title col-md-12 col-lg-7 md-pb">
                <h3 class="mbr-section-title mbr-fonts-style align-left mb-3 display-2"><strong>Subscribe to the news!</strong>
                </h3>
                <h4 class="mbr-section-subtitle align-left mbr-fonts-style display-7"><strong>Stay on top of our most
                        &nbsp;</strong><strong>actu</strong><strong>al news!</strong></h4>
            </div>

            <div class="title col-md-12 col-lg-5">
                <div class="mbr-section-btn align-center"><a class="btn btn-lg btn-success display-7" href="">Subscribe Now!</a></div>

            </div>

        </div>
    </div>
</section>

<section class="progress-bars1 cid-svGYlRKF17" id="progress01-c">

    

    
    <div class="container">
        <div class="row">
            <div class="col-md-12 col-lg-6 text-elements pb-4 md-pb">
                <h3 class="mbr-section-subtitle mbr-fonts-style align-left mb-3 display-7"><strong>
                        About Us</strong></h3>
                <h4 class="section-content-title pb-3 align-left mbr-fonts-style display-2"><strong>Secure Features</strong></h4>
                <p class="section-content-text align-left mbr-fonts-style display-7"><strong>
                        Lorem ipsum dolor sit amet, consectetur adipiscing elitdo eiusmod temporeum dicant partem
                        scripserit.</strong></p>
            </div>
            <div class="progress_elements col-md-12 col-lg-6 pt-4">
                <div class="progress1 pb-5">
                    <div class="title-wrap">
                        <div class="progressbar-title mbr-fonts-style display-7">
                            <p><strong>Home Security</strong><br>
                            </p>
                        </div>
                        <div class="progress_value mbr-fonts-style display-7">
                            <div class="progressbar-number">
                            </div>
                            <span>%</span>
                        </div>
                    </div>
                    <progress class="progress progress-primary " max="100" value="92">
                    </progress>
                </div>

                <div class="progress2 pb-5">
                    <div class="title-wrap">
                        <div class="progressbar-title mbr-fonts-style display-7">
                            <p><strong>Office Security</strong><br></p>
                        </div>
                        <div class="progress_value mbr-fonts-style display-7">
                            <div class="progressbar-number">
                            </div>
                            <span>%</span>
                        </div>
                    </div>
                    <progress class="progress progress-primary" max="100" value="71">
                    </progress>
                </div>

                <div class="progress3 pb-5">
                    <div class="title-wrap">
                        <div class="progressbar-title mbr-fonts-style display-7">
                            <p><strong>CCTV Cameras</strong><br></p>
                        </div>
                        <div class="progress_value mbr-fonts-style display-7">
                            <div class="progressbar-number">
                            </div>
                            <span>%</span>
                        </div>
                    </div>
                    <progress class="progress progress-primary" max="100" value="53">
                    </progress>
                </div>
                
                
            </div>
        </div>
    </div>
</section>

<section class="team2 cid-svGY7IsFgK" id="team02-4">
    
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="col-12">
                <h2 class="title align-left mbr-fonts-style mb-5 display-2"><strong>Our Team</strong></h2>

            </div>
            <div class="card col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <img src="assets/images/team1.jpg" alt="">
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style mb-2 display-5"><strong>James Ford</strong></h4>
                        <h5 class="card-text mbr-fonts-style display-7"><strong>General Director</strong></h5>
                    </div>




                </div>
            </div>
            <div class="card col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <img src="assets/images/team2.jpg" alt="">
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style mb-2 display-5"><strong>Ann Brown</strong></h4>
                        <h5 class="card-text mbr-fonts-style display-7"><strong>Manager</strong></h5>
                    </div>

                </div>
            </div>
            <div class="card col-12 col-md-6 col-lg-4">
                <div class="card-wrapper">
                    <img src="assets/images/team3.jpg" alt="">
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style mb-2 display-5"><strong>Ben Jason</strong></h4>
                        <h5 class="card-text mbr-fonts-style display-7"><strong>Developer</strong></h5>
                    </div>

                </div>
            </div>


        </div>
    </div>
</section>

<section class="testimonails2 carousel slide testimonials-slider cid-svGY9WQfO6" data-interval="false" id="testimonials02-5">

    
    
    <div class="text-center container">
        <h3 class="mb-4 mbr-fonts-style display-2">
            <strong>What Our Users Say</strong>
        </h3>
        <div class="carousel slide" role="listbox" data-pause="true" data-keyboard="false" data-ride="carousel" data-interval="8000">
            <div class="carousel-inner">
                

                
            <div class="carousel-item">
                    <div class="user col-md-8">
                        <div class="user_image">
                            <img src="assets/images/team3.jpg">
                        </div>
                        <div class="user_text mb-3">
                            <p class="mbr-fonts-style display-7">
                                <strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu laoreet odio.
                                    Aenean eget lorem pellentesque, imperdiet ex convallis, iaculis justo. Etiam ac
                                    purus purus. Vivamus vel lacus non diam gravida efficitur. Proin elementum velit vel
                                    mauris euismod consectetur. Nunc neque libero, pulvinar et odio eu, vestibulum
                                    iaculis tortor.</strong><br></p>
                        </div>
                        <div class="user_name mbr-fonts-style mb-2 display-7">
                            <strong>Jonh Manson</strong>
                        </div>
                        
                    </div>
                </div><div class="carousel-item">
                    <div class="user col-md-8">
                        <div class="user_image">
                            <img src="assets/images/team2.jpg">
                        </div>
                        <div class="user_text mb-3">
                            <p class="mbr-fonts-style display-7">
                                <strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit. Vivamus eu laoreet odio.
                                    Aenean eget lorem pellentesque, imperdiet ex convallis, iaculis justo. Etiam ac
                                    purus purus. Vivamus vel lacus non diam gravida efficitur. Proin elementum velit vel
                                    mauris euismod consectetur. Nunc neque libero, pulvinar et odio eu, vestibulum
                                    iaculis tortor.</strong><br></p>
                        </div>
                        <div class="user_name mbr-fonts-style mb-2 display-7">
                            <strong>Alexa Brown</strong>
                        </div>
                        
                    </div>
                </div></div>

            <div class="carousel-controls">
                <a class="carousel-control-prev" role="button" data-slide="prev">
                    <span aria-hidden="true" class="mobi-mbri mobi-mbri-arrow-prev mbr-iconfont"></span>
                    <span class="sr-only">Previous</span>
                </a>

                <a class="carousel-control-next" role="button" data-slide="next">
                    <span aria-hidden="true" class="mobi-mbri mobi-mbri-arrow-next mbr-iconfont"></span>
                    <span class="sr-only">Next</span>
                </a>
            </div>
        </div>
    </div>
</section>

<section class="contacts6 cid-svGYbGfssB" id="contacts06-6">

    

    

    <div class="container">
        <div class="row align-items-center justify-content-center">
            <div class="text-content col-12 col-md-6">
                <h2 class="mbr-section-title mbr-fonts-style pb-3 display-2">
                    <strong>Follow Us</strong>
                </h2>
                <p class="mbr-text mbr-fonts-style display-7"><strong>Lorem ipsum dolor
                        sit amet, consectetur adipiscing elit. Vivamus eu laoreet odio. Aenean eget lorem pellentesque,
                        imperdiet ex convallis, iaculis justo.</strong><br></p>
            </div>
            <div class="icons d-flex align-items-center col-12 col-md-6 justify-content-end mt-md-0 mt-2 flex-wrap">
                <a href="https://twitter.com/mobirise" target="_blank">
                    <span class="mbr-iconfont mbr-iconfont-social socicon-twitter socicon" style="color: rgb(34, 153, 170); fill: rgb(34, 153, 170);"></span>
                </a>
                <a href="https://www.facebook.com/pages/Mobirise/1616226671953247" target="_blank">
                    <span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon" style="color: rgb(34, 153, 170); fill: rgb(34, 153, 170);"></span>
                </a>
                <a href="https://www.youtube.com/c/mobirise" target="_blank">
                    <span class="mbr-iconfont mbr-iconfont-social socicon-youtube socicon" style="color: rgb(34, 153, 170); fill: rgb(34, 153, 170);"></span>
                </a>
                
                
                
                
                
                
                
            </div>
        </div>
    </div>

</section>

<section class="contacts3 cid-svGYcN3ewh" id="contacts03-7">
    
    
    <div class="container">
        <div class="row justify-content-center">
            <div class="card col-12 col-md-10 col-lg-6">
                <div class="card-wrapper">

                    <div class="card-box">
                        <h3 class="card-title mbr-fonts-style mb-2 display-5"><strong>Cyber Pay</strong></h3>
                        <h4 class="card-text mbr-fonts-style display-4"><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Phasellus cursus tortor, quis sollicitudin
                                mauris ipsum a elit. </strong><br><br><strong>South Carolina 3531 Camden Place 54</strong></h4>

                        <h4 class="card-phone mbr-fonts-style display-5"><strong>+1 (234) 567 89 01</strong></h4>

                    </div>
                    <div class="icon-wrapper mbr-flex">
                        <span class="mbr-iconfont mobi-mbri-globe-2 mobi-mbri" style="color: rgb(34, 153, 170); fill: rgb(34, 153, 170);"></span>
                        <span class="mbr-iconfont mobi-mbri-map-pin mobi-mbri" style="color: rgb(34, 153, 170); fill: rgb(34, 153, 170);"></span>
                        <span class="mbr-iconfont mobi-mbri-phone mobi-mbri" style="color: rgb(34, 153, 170); fill: rgb(34, 153, 170);"></span>
                    </div>
                </div>
            </div>
            <div class="card col-12 col-md-10 col-lg-6">
                <div class="card-wrapper">
                    <div class="card-box">
                        <h4 class="card-title mbr-fonts-style mb-2 display-5"><strong>Customer Service</strong></h4>
                        <h5 class="card-text mbr-fonts-style display-4"><strong>Lorem ipsum dolor sit amet, consectetur adipiscing elit.
                                Phasellus cursus tortor, quis sollicitudin mauris ipsum a elit.&nbsp;<br><br></strong>
                            <div><strong>South Carolina 3531 Camden Place 58</strong></div>
                        </h5>
                        <h4 class="card-phone mbr-fonts-style display-5"><strong>+1 (234) 567 89 01</strong></h4>
                    </div>

                    <div class="icon-wrapper mbr-flex">
                        <span class="mbr-iconfont mobi-mbri-globe-2 mobi-mbri" style="color: rgb(34, 153, 170); fill: rgb(34, 153, 170);"></span>
                        <span class="mbr-iconfont mobi-mbri-map-pin mobi-mbri" style="color: rgb(34, 153, 170); fill: rgb(34, 153, 170);"></span>
                        <span class="mbr-iconfont mobi-mbri-phone mobi-mbri" style="color: rgb(34, 153, 170); fill: rgb(34, 153, 170);"></span>
                    </div>

                </div>
            </div>


        </div>
    </div>
</section>

<section class="map1 cid-svGYderUVq" id="contacts01-8">
    
    
    <div class="container">
        
        <div class="google-map"><iframe frameborder="0" style="border:0" src="https://www.google.com/maps/embed?pb=!1m14!1m8!1m3!1d6045.3003145248895!2d-73.9884657!3d40.7477229!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x89c259a9ac1f1b85%3A0x7e33d1c0e7af3be4!2zMzUwIDV0aCBBdmUsIE5ldyBZb3JrLCBOWSAxMDExOCwg0KHQqNCQ!5e0!3m2!1sru!2sru!4v1689597362021!5m2!1sen!2sen" allowfullscreen=""></iframe></div>
    </div>
</section>

<section class="footer2 cid-svMGZ7Ygy3" once="footers" id="footer02-i">
    
    
    <div class="container">
        <div class="media-container-row">
            <div class="col-12 col-md-12 col-lg-12">
                <p class="mbr-text align-right links mbr-fonts-style display-7"><strong><a href="#" class="text-warning">Home</a>&nbsp; &nbsp;&nbsp;<a href="#" class="text-warning">About</a>&nbsp;&nbsp;&nbsp; <a href="#" class="text-warning">Terms</a>&nbsp; &nbsp;&nbsp;<a href="#" class="text-warning">Careers</a>&nbsp; &nbsp;&nbsp;<a href="#" class="text-warning">Contact</a></strong>
                </p>
            </div>
        </div>
        <div class="footer-lower">
            <div class="media-container-row">
                <div class="col-md-12">
                    <hr>
                </div>
            </div>
            <div class="media-container-row">
                <div class="col-md-6 copyright">
                    <p class="mbr-text mbr-fonts-style display-7"><strong>
                            © Copyright 2025 CyberPay - All Rights Reserved
                        </strong></p>
                </div>
                <div class="col-md-6">
                    <div class="social-list align-right">
                        <div class="soc-item">

                            <a href="#"><span class="mbr-iconfont mbr-iconfont-social socicon-twitter socicon"></span></a>

                        </div>
                        <div class="soc-item">

                            <a href="#"><span class="mbr-iconfont mbr-iconfont-social socicon-facebook socicon"></span></a>

                        </div>
                        <div class="soc-item">

                            <a href="#"><span class="mbr-iconfont mbr-iconfont-social socicon-youtube socicon"></span></a>

                        </div>
                        <div class="soc-item">
                            <a href="#" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-instagram socicon"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="#" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-behance socicon"></span>
                            </a>
                        </div>
                        <div class="soc-item">
                            <a href="#" target="_blank">
                                <span class="mbr-iconfont mbr-iconfont-social socicon-vimeo socicon"></span>
                            </a>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</section>

<?php $template->js(); ?>
  
</body>
</html>