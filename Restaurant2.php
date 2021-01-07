<?php
  session_start();
  $loc = $_POST['my_location'];


  if ($loc == 1) {
    header('location: Restaurant.php');
  }
  else if ($loc == 2) {
    header('location: Restaurant1.php');
  }
  else if ($loc == 3) {
    header('location: Restaurant2.php');
  }
  

?>


<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
  <meta charset="utf-8">
  <title>My page</title>



  <!-- Google Fonts -->
  <link href="https://fonts.googleapis.com/css?family=Poppins:300,300i,400,400i,600,600i,700,700i|Satisfy|Comic+Neue:300,300i,400,400i,700,700i" rel="stylesheet">

  <!-- Vendor CSS Files -->
  <link href="assets/vendor/bootstrap/css/bootstrap.min.css" rel="stylesheet">

    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">



  <!-- Template Main CSS File -->
<!--  <link type="text/css" rel="stylesheet" href="mypage.css">-->

  <!-- Font awesome path -->
  <link rel="stylesheet" href="path/to/font-awesome/css/font-awesome.min.css">
  <script defer src="https://use.fontawesome.com/releases/v5.0.7/js/all.js"></script>


    <style>
        body {
  font-family: "Poppins", sans-serif;
  color: #444444;
}

a {
  color: #ffb03b;
}

a:hover {
  color: #ffc56e;
  text-decoration: none;
}

h1, h2, h3, h4, h5, h6 {
  font-family: "Satisfy", sans-serif;
}

/*--------------------------------------------------------------
# Remove title icon
--------------------------------------------------------------*/


/*--------------------------------------------------------------
# Header
--------------------------------------------------------------*/
#header {
  top: 50px;
  height: 70px;
  z-index: 997;
  transition: all 0.5s;
  padding: 10px 0;
}

#header.header-scrolled {
  top: 0;
  background: rgba(26, 24, 22, 0.85);
}

@media (max-width: 992px) {
  #header {
    top: 0;
    background: rgba(26, 24, 22, 0.85);
  }
}
/*--------------------------------------------------------------
# Navigation Menu
--------------------------------------------------------------*/
/* Desktop Navigation */
.nav-menu, .nav-menu * {
  margin: 0;
  padding: 0;
  list-style: none;
}

.nav-menu > ul > li {
  position: relative;
  white-space: nowrap;
  float: left;
}

.nav-menu a {
  display: block;
  position: relative;
  color: white;
  padding: 9px 14px;
  transition: 0.3s;
  font-size: 15px;
  font-weight: 500;
  font-family: "Poppins", sans-serif;
}

.nav-menu a:hover, .nav-menu .active > a, .nav-menu li:hover > a {
  color: #ffb03b;
  text-decoration: none;
}

.nav-menu .book-a-table a {
  background: #ffb03b;
  color: #fff;
  border-radius: 50px;
  margin: 0 0 0 20px;
  padding: 10px 25px;
  text-transform: uppercase;
  font-size: 13px;
  font-weight: 500;
  letter-spacing: 1px;
  transition: 0.3s;
}

.nav-menu .book-a-table a:hover {
  background: #ffa012;
  color: #fff;
}

.nav-menu .drop-down ul {
  display: block;
  position: absolute;
  left: 0;
  top: calc(100% + 30px);
  z-index: 99;
  opacity: 0;
  visibility: hidden;
  padding: 10px 0;
  background: #fff;
  box-shadow: 0px 0px 30px rgba(127, 137, 161, 0.25);
  transition: ease all 0.3s;
}

.nav-menu .drop-down:hover > ul {
  opacity: 1;
  top: 100%;
  visibility: visible;
}

.nav-menu .drop-down li {
  min-width: 180px;
  position: relative;
}

.nav-menu .drop-down ul a {
  padding: 10px 20px;
  font-size: 14px;
  font-weight: 500;
  text-transform: none;
  color: #433f39;
}

.nav-menu .drop-down ul a:hover, .nav-menu .drop-down ul .active > a, .nav-menu .drop-down ul li:hover > a {
  color: #ffb03b;
}

.nav-menu .drop-down > a:after {
  content: "\ea99";
  font-family: IcoFont;
  padding-left: 5px;
}

.nav-menu .drop-down .drop-down ul {
  top: 0;
  left: calc(100% - 30px);
}

.nav-menu .drop-down .drop-down:hover > ul {
  opacity: 1;
  top: 0;
  left: 100%;
}

.nav-menu .drop-down .drop-down > a {
  padding-right: 35px;
}

.nav-menu .drop-down .drop-down > a:after {
  content: "\eaa0";
  font-family: IcoFont;
  position: absolute;
  right: 15px;
}

@media (max-width: 1366px) {
  .nav-menu .drop-down .drop-down ul {
    left: -90%;
  }
  .nav-menu .drop-down .drop-down:hover > ul {
    left: -100%;
  }
  .nav-menu .drop-down .drop-down > a:after {
    content: "\ea9d";
  }
}

/* Mobile Navigation */
.mobile-nav-toggle {
  position: fixed;
  right: 15px;
  top: 15px;
  z-index: 9998;
  border: 0;
  background: none;
  font-size: 24px;
  transition: all 0.4s;
  outline: none !important;
  line-height: 1;
  cursor: pointer;
  text-align: right;
}

.mobile-nav-toggle i {
  color: #fff;
}

.mobile-nav {
  position: fixed;
  top: 55px;
  right: 15px;
  bottom: 15px;
  left: 15px;
  z-index: 9999;
  overflow-y: auto;
  background: #fff;
  transition: ease-in-out 0.2s;
  opacity: 0;
  visibility: hidden;
  border-radius: 10px;
  padding: 10px 0;
}

.mobile-nav * {
  margin: 0;
  padding: 0;
  list-style: none;
}

.mobile-nav a {
  display: block;
  position: relative;
  color: #433f39;
  padding: 10px 20px;
  font-weight: 500;
  outline: none;
}

.mobile-nav a:hover, .mobile-nav .active > a, .mobile-nav li:hover > a {
  color: #ffb03b;
  text-decoration: none;
}

.mobile-nav .book-a-table a {
  background: #ffb03b;
  color: #fff;
  border-radius: 50px;
  margin: 0 0 0 20px;
  padding: 10px 25px;
  text-transform: uppercase;
  font-size: 13px;
  font-weight: 500;
  letter-spacing: 1px;
  transition: 0.3s;
  display: inline-block;
}

.mobile-nav .book-a-table a:hover {
  background: #ffa012;
  color: #fff;
}

.mobile-nav .drop-down > a:after {
  content: "\ea99";
  font-family: IcoFont;
  padding-left: 10px;
  position: absolute;
  right: 15px;
}

.mobile-nav .active.drop-down > a:after {
  content: "\eaa1";
}

.mobile-nav .drop-down > a {
  padding-right: 35px;
}

.mobile-nav .drop-down ul {
  display: none;
  overflow: hidden;
}

.mobile-nav .drop-down li {
  padding-left: 20px;
}

.mobile-nav-overly {
  width: 100%;
  height: 100%;
  z-index: 9997;
  top: 0;
  left: 0;
  position: fixed;
  background: rgba(39, 37, 34, 0.6);
  overflow: hidden;
  display: none;
  transition: ease-in-out 0.2s;
}

.mobile-nav-active {
  overflow: hidden;
}

.mobile-nav-active .mobile-nav {
  opacity: 1;
  visibility: visible;
}

.mobile-nav-active .mobile-nav-toggle i {
  color: #fff;
}


/*--------------------------------------------------------------
# Hero Section
--------------------------------------------------------------*/
#hero {
  width: 100%;
  height: 100vh;

  background-color: rgba(39, 37, 34, 0.8);
  overflow: hidden;
  padding: 0;
  background-size: cover;
}

#hero .carousel-item {
  width: 100%;
  height: 100vh;

  background-size: cover;
  background-position: center;
  background-repeat: no-repeat;
}

#hero .carousel-item::before {
  content: '';
  background-color: rgba(12, 11, 10, 0.5);
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
}

#hero .carousel-container {
  display: flex;
  justify-content: center;
  align-items: center;
  position: absolute;
  bottom: 0;
  top: 0;
  left: 0;
  right: 0;
}

#hero .carousel-content {
  text-align: center;
}

#hero h2 {
  color: #fff;
  margin-bottom: 30px;
  font-size: 48px;
  font-weight: 700;
}

#hero h2 span {
  color: #ffb03b;
}

#hero p {
  width: 80%;
  -webkit-animation-delay: 0.4s;
  animation-delay: 0.4s;
  margin: 0 auto 30px auto;
  color: #fff;
}

#hero .carousel-inner .carousel-item {
  transition-property: opacity;
  background-position: center top;
}

#hero .carousel-inner .carousel-item,
#hero .carousel-inner .active.carousel-item-left,
#hero .carousel-inner .active.carousel-item-right {
  opacity: 0;
}

#hero .carousel-inner .active,
#hero .carousel-inner .carousel-item-next.carousel-item-left,
#hero .carousel-inner .carousel-item-prev.carousel-item-right {
  opacity: 1;
  transition: 0.5s;
}

#hero .carousel-inner .carousel-item-next,
#hero .carousel-inner .carousel-item-prev,
#hero .carousel-inner .active.carousel-item-left,
#hero .carousel-inner .active.carousel-item-right {
  left: 0;
  transform: translate3d(0, 0, 0);
}

#hero .carousel-control-prev, #hero .carousel-control-next {
  width: 10%;
  opacity: 1;
}

#hero .carousel-control-next-icon, #hero .carousel-control-prev-icon {
  background: none;
  font-size: 36px;
  line-height: 1;
  width: auto;
  height: auto;
  background: rgba(255, 255, 255, 0.1);
  border-radius: 50px;
  padding: 10px;
  transition: 0.3s;
  color: rgba(255, 255, 255, 0.5);
}

#hero .carousel-control-next-icon:hover, #hero .carousel-control-prev-icon:hover {
  background: rgba(255, 255, 255, 0.2);
  color: rgba(255, 255, 255, 0.8);
}

#hero .carousel-indicators li {
  cursor: pointer;
}

#hero .btn-menu, #hero .btn-book {
  font-weight: 600;
  font-size: 13px;
  letter-spacing: 1px;
  text-transform: uppercase;
  display: inline-block;
  padding: 12px 30px;
  border-radius: 50px;
  transition: 0.5s;
  line-height: 1;
  margin: 0 10px;
  -webkit-animation-delay: 0.8s;
  animation-delay: 0.8s;
  color: #fff;
  border: 2px solid #ffb03b;
}

#hero .btn-menu:hover, #hero .btn-book:hover {
  background: #ffb03b;
  color: #fff;
}

@media (max-width: 768px) {
  #hero h2 {
    font-size: 28px;
  }
}

@media (min-width: 1024px) {
  #hero p {
    width: 50%;
  }
  #hero .carousel-control-prev, #hero .carousel-control-next {
    width: 5%;
  }
}
/*--------------------------------------------------------------
# Sections General
--------------------------------------------------------------*/
section {
  padding: 30px 0;
}

.section-bg {
  background-color: white;
}

.section-title {
  text-align: center;
  padding-bottom: 30px;
}

.section-title h2 {
  margin: 15px 0 0 0;
  font-size: 32px;
  font-weight: 700;
  color: #5f5950;
}

.section-title h2 span {
  color: #ffb03b;
}

.section-title p {
  margin: 15px auto 0 auto;
  font-weight: 300;
}

@media (min-width: 1024px) {
  .section-title p {
    width: 50%;
  }
}

/*--------------------------------------------------------------
# About
--------------------------------------------------------------*/

.about {
  background: #fffaf3;

}

.about .content {
  padding: 0 80px;

}

.about .content h3 {
  font-weight: 400;
  font-size: 34px;
  color: #5f5950;

}

.about .content h4 {
  font-size: 20px;
  font-weight: 700;
  margin-top: 5px;
}

.about .content p {
  font-size: 15px;
  color: #848484;
}

.about .content ul {
  list-style: none;
  padding: 0;
}

.about .content ul li + li {
  margin-top: 15px;
}

.about .content ul li {
  position: relative;
  padding-left: 26px;
}

.about .content ul i {
  font-size: 20px;
  color: #ffb03b;
  position: absolute;
  left: 0;
  top: 2px;
}

.about .content p:last-child {
  margin-bottom: 0;
}

.about .video-box {
  background-size: cover;
  background-repeat: no-repeat;
  background-position: center center;
  min-height: 400px;
  position: relative;
}

.about .play-btn {
  width: 94px;
  height: 94px;
  background: radial-gradient(#ffb03b 50%, rgba(255, 176, 59, 0.4) 52%);
  border-radius: 50%;
  display: block;
  position: absolute;
  left: calc(50% - 47px);
  top: calc(50% - 47px);
  overflow: hidden;
}

.about .play-btn::after {
  content: '';
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-40%) translateY(-50%);
  width: 0;
  height: 0;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  z-index: 100;
  transition: all 400ms cubic-bezier(0.55, 0.055, 0.675, 0.19);
}

.about .play-btn::before {
  content: '';
  position: absolute;
  width: 120px;
  height: 120px;
  -webkit-animation-delay: 0s;
  animation-delay: 0s;
  -webkit-animation: pulsate-btn 2s;
  animation: pulsate-btn 2s;
  -webkit-animation-direction: forwards;
  animation-direction: forwards;
  -webkit-animation-iteration-count: infinite;
  animation-iteration-count: infinite;
  -webkit-animation-timing-function: steps;
  animation-timing-function: steps;
  opacity: 1;
  border-radius: 50%;
  border: 5px solid rgba(255, 176, 59, 0.7);
  top: -15%;
  left: -15%;
  background: rgba(198, 16, 0, 0);
}

.about .play-btn:hover::after {
  border-left: 15px solid #ffb03b;
  transform: scale(20);
}

.about .play-btn:hover::before {
  content: '';
  position: absolute;
  left: 50%;
  top: 50%;
  transform: translateX(-40%) translateY(-50%);
  width: 0;
  height: 0;
  border: none;
  border-top: 10px solid transparent;
  border-bottom: 10px solid transparent;
  border-left: 15px solid #fff;
  z-index: 200;
  -webkit-animation: none;
  animation: none;
  border-radius: 0;
}

@media (max-width: 1024px) {
  .about .content, .about .accordion-list {
    padding-left: 0;
    padding-right: 0;
  }
}

@media (max-width: 992px) {
  .about .content {
    padding-top: 30px;
  }
  .about .accordion-list {
    padding-bottom: 30px;
  }
}

@-webkit-keyframes pulsate-btn {
  0% {
    transform: scale(0.6, 0.6);
    opacity: 1;
  }
  100% {
    transform: scale(1, 1);
    opacity: 0;
  }
}

@keyframes pulsate-btn {
  0% {
    transform: scale(0.6, 0.6);
    opacity: 1;
  }
  100% {
    transform: scale(1, 1);
    opacity: 0;
  }
}

/*--------------------------------------------------------------
# Events
--------------------------------------------------------------*/
.events {
  background: url(..img/events-bg.jpg) center center no-repeat;
  background-size: cover;
  position: relative;

}

.events::before {
  content: '';
  background-color: rgba(12, 11, 10, 0.8);
  position: absolute;
  top: 0;
  right: 0;
  left: 0;
  bottom: 0;
}

.events .section-title h2 {
  color: #fff;
}

.events .container {
  position: relative;
  padding: 0;
}

@media (min-width: 1024px) {
  .events {
    background-attachment: fixed;
  }
}

.events .events-carousel {
  background: rgba(255, 255, 255, 0.08);
  padding: 0px;
}

.events .event-item {
  color: #fff;
}

.events .event-item h3 {
  font-weight: 600;
  font-size: 26px;
  color: #ffb03b;
}




/* Another programs code */
/* line 1, ../../Arafath/CL/December/231. Travel-02/HTML/scss/_popular_place.scss */
.popular_places_area {
  padding-top: 142px;
  padding-bottom: 150px;
  background: #F7FAFD;
}

@media (max-width: 767px) {
  /* line 1, ../../Arafath/CL/December/231. Travel-02/HTML/scss/_popular_place.scss */
  .popular_places_area {
    padding-top: 60px;
    padding-bottom: 60px;
  }
}

/* line 9, ../../Arafath/CL/December/231. Travel-02/HTML/scss/_popular_place.scss */
.popular_places_area .single_place {
  background: #fff;
  -webkit-border-radius: 5px;
  -moz-border-radius: 5px;
  border-radius: 5px;
  overflow: hidden;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
  margin-bottom: 30px;
}

/* line 15, ../../Arafath/CL/December/231. Travel-02/HTML/scss/_popular_place.scss */
.popular_places_area .single_place .thumb {
  position: relative;
  overflow: hidden;
}

/* line 18, ../../Arafath/CL/December/231. Travel-02/HTML/scss/_popular_place.scss */
.popular_places_area .single_place .thumb img {
  width: 100%;
}

/* line 21, ../../Arafath/CL/December/231. Travel-02/HTML/scss/_popular_place.scss */
.popular_places_area .single_place .thumb .prise {
  position: absolute;
  background: #1EC6B6;
  padding: 7px 18px 4px 18px;
  display: inline-block;
  top: 20px;
  left: 20px;
  -webkit-border-radius: 18px;
  -moz-border-radius: 18px;
  border-radius: 18px;
  color: #fff;
  font-size: 16px;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}

/* line 34, ../../Arafath/CL/December/231. Travel-02/HTML/scss/_popular_place.scss */
.popular_places_area .single_place .place_info {
  padding: 27px 20px 25px 20px;
}

/* line 36, ../../Arafath/CL/December/231. Travel-02/HTML/scss/_popular_place.scss */
.popular_places_area .single_place .place_info h3 {
  font-size: 22px;
  font-weight: 400;
  color: #040E27;
  margin-bottom: 0;
  -webkit-transition: 0.3s;
  -moz-transition: 0.3s;
  -o-transition: 0.3s;
  transition: 0.3s;
}

/* line 43, ../../Arafath/CL/December/231. Travel-02/HTML/scss/_popular_place.scss */
.popular_places_area .single_place .place_info p {
  font-size: 14px;
  font-weight: 400;
  color: #7A838B;
  margin-top: 2px;
  margin-bottom: 7px;
}

/* line 52, ../../Arafath/CL/December/231. Travel-02/HTML/scss/_popular_place.scss */
.popular_places_area .single_place .place_info .rating_days span i {
  font-size: 12px;
  color: #FDAE5C;
}


/* line 56, ../../Arafath/CL/December/231. Travel-02/HTML/scss/_popular_place.scss */
.popular_places_area .single_place .place_info .rating_days span a {
  font-size: 14px;
  color: #7A838B;
  margin-left: 5px;
}

/* line 62, ../../Arafath/CL/December/231. Travel-02/HTML/scss/_popular_place.scss */
.popular_places_area .single_place .place_info .rating_days .days {
  font-size: 14px;
  font-weight: 400;
  color: #7A838B;
}

/* line 66, ../../Arafath/CL/December/231. Travel-02/HTML/scss/_popular_place.scss */
.popular_places_area .single_place .place_info .rating_days .days i {
  margin-right: 8px;
}

/* line 69, ../../Arafath/CL/December/231. Travel-02/HTML/scss/_popular_place.scss */
.popular_places_area .single_place .place_info .rating_days .days a {
  font-size: 14px;
  color: #7A838B;
}

/* line 76, ../../Arafath/CL/December/231. Travel-02/HTML/scss/_popular_place.scss */
.popular_places_area .single_place:hover {
  -webkit-box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
  -moz-box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
  box-shadow: 0 10px 20px rgba(0, 0, 0, 0.05);
}

/* line 79, ../../Arafath/CL/December/231. Travel-02/HTML/scss/_popular_place.scss */
.popular_places_area .single_place:hover .place_info h3 {
  color: #FF4A52;
}


    </style>









</head>

<body>
  <header id="header" class="fixed-top d-flex align-items-center header-scrolled">
    <div class="container d-flex align-items-center">
      <nav class="nav-menu d-none d-lg-block">
        <ul>
          <li class="active"><a href="index.php">Home</a></li>
          <li><a href="login.php">signout</a></li>
        </ul>
      </nav><!-- .nav-menu -->

    </div>
  </header><!-- End Header -->
  

  <main id="main" style="margin-top: -10vh;">
    
    <!-- ======= Events Section ======= -->
    <section id="events" class="events">
    
      <div class="popular_places_area">
      
      <div class="container">
      

        <form action="#" method="post">
          <div class="dropdown" style="text-align: center; color: white;">
          <label for="exampleInputEmail1">Current location : </label> &nbsp; 
            <select name="my_location" class="btn btn-secondary dropdown-toggle" id="dropdownMenuLink">
              <option class="dropdown-item" disabled="disabled">Select</option>
              <option class="dropdown-item" name="mysore" value="3">Mysore</option>
              <option class="dropdown-item" name="udupi" value="1"> Udupi</option>
              <option class="dropdown-item" name="mangalore" value="2">Mangalore</option>
              
            </select>
            <button type="submit" class="btn btn-primary">Search</button>
          </div>
        </form>


        <div class="section-title">
          <h2>Near By <span>Restaurants</span> </h2>
        </div>
        

          <div class="row">

              <div class="col-lg-4 col-md-6">
                  <div class="single_place">
                      <div class="thumb">
                          <img src="https://images.unsplash.com/photo-1481833761820-0509d3217039?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                      </div>
                      <div class="place_info">
                          <h3>Grand Mercure Hotel</h3>
                          <p>Mysore</p>
                          <div class="rating_days d-flex justify-content-between">
                              <span class="d-flex justify-content-center align-items-center">
                                   <i class="fa fa-star" style="color: #FDAE5C;"></i>
                                   <i class="fa fa-star" style="color: #FDAE5C;"></i>
                                   <i class="fa fa-star" style="color: #FDAE5C;"></i>
                                   <i class="fa fa-star" style="color: #FDAE5C;"></i>
                                   <i class="fa fa-star" style="color: #FDAE5C;"></i>
                              </span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="single_place">
                      <div class="thumb">
                          <img src="https://images.unsplash.com/photo-1471253794676-0f039a6aae9d?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                      </div>
                      <div class="place_info">
                          <h3>Hotel Ruchi The Prince</h3>
                          <p>Mysore</p>
                          <div class="rating_days d-flex justify-content-between">
                              <span class="d-flex justify-content-center align-items-center">
                                   <i class="fa fa-star" style="color: #FDAE5C;"></i>
                                   <i class="fa fa-star" style="color: #FDAE5C;"></i>
                                   <i class="fa fa-star" style="color: #FDAE5C;"></i>
                                   <i class="fa fa-star" style="color: #FDAE5C;"></i>
                                   <i class="fa fa-star" style="color: #FDAE5C;"></i>
                              </span>
                          </div>
                      </div>
                  </div>
              </div>
              <div class="col-lg-4 col-md-6">
                  <div class="single_place">
                      <div class="thumb">
                          <img src="https://images.unsplash.com/photo-1573668200361-62e141908294?ixlib=rb-1.2.1&ixid=eyJhcHBfaWQiOjEyMDd9&auto=format&fit=crop&w=500&q=60" alt="">
                      </div>
                      <div class="place_info">
                          <h3>Aishwarya Residency</h3>
                          <p>Mysore</p>
                          <div class="rating_days d-flex justify-content-between">
                              <span class="d-flex justify-content-center align-items-center">
                                   <i class="fa fa-star" style="color: #FDAE5C;"></i>
                                   <i class="fa fa-star" style="color: #FDAE5C;"></i>
                                   <i class="fa fa-star" style="color: #FDAE5C;"></i>
                                   <i class="fa fa-star" style="color: #FDAE5C;"></i>
                                   <i class="fa fa-star" style="color: #FDAE5C;"></i>
                              </span>
                          </div>
                      </div>
                  </div>
              </div>

		  </div>
		  
		  
		</div>
		
        </div>

    </section><!-- End Events Section -->

  </main>




</body>

</html>
