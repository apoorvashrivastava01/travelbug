<?php
session_start();

?>


<!DOCTYPE html>
<html lang="en">
<head>
  <meta charset="UTF-8">
  <meta http-equiv="X-UA-Compatible" content="IE=edge">
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <title>TravelBug</title>
  <link rel="stylesheet" href="assets/travelbug.css">
  <link rel="stylesheet" href="assets/bootstrap.min.css">
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">

  <!-- <link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/css/bootstrap.min.css" integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous"> -->
  <script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/popper.js@1.12.9/dist/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@4.0.0/dist/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>
  <script src="assets/travelbug.js"></script>  
</head>
<body>
  <nav class="navbar navbar-expand-lg navbar-dark bg-dark fixed-top" style="background-color: rgba(255, 0, 0, 0)!important; padding-top: 10px; padding-bottom: 10px">
    <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarTogglerDemo03" aria-controls="navbarTogglerDemo03" aria-expanded="false" aria-label="Toggle navigation">
      <span class="navbar-toggler-icon"></span>
    </button>
    <a class="navbar-brand font-weight-bold" href="#">TravelBug</a>
  
    <div class="collapse navbar-collapse" id="navbarTogglerDemo03">
      <ul class="navbar-nav mr-auto mt-2 mt-lg-0">
        <li class="nav-item active">
          <a class="nav-link font-weight-normal" href="#">HOME <span class="sr-only">(current)</span></a>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link font-weight-normal dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EXPLORE</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="chardham.php">CharDham</a>
            <a class="dropdown-item" href="panchkedar.php">PanchKedar</a>
            <a class="dropdown-item" href="panchbadri.php">PanchBadri</a>
            <a class="dropdown-item" href="panchprayag.php">PanchPrayag</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link font-weight-normal dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">EXPERIENCE</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="adventures.php">Adventures</a>
            <a class="dropdown-item" href="destinations.php">Destinations</a>
            <a class="dropdown-item" href="events.php">Events</a>
            <a class="dropdown-item" href="festivals.php">Festivals & Fairs</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link font-weight-normal dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">PLANS</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="accomodations.php">Accomodations</a>
            <a class="dropdown-item" href="iteneries.php">Itineraries</a>
            <a class="dropdown-item" href="trecks.php">Treks</a>
            <a class="dropdown-item" href="tourism.php">Tourism Circuits</a>
          </div>
        </li>
        <li class="nav-item dropdown">
          <a class="nav-link font-weight-normal dropdown-toggle" href="#" id="navbarDropdown" role="button" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">Trade</a>
          <div class="dropdown-menu" aria-labelledby="navbarDropdown">
            <a class="dropdown-item" href="homestay.php">Homestay Listing</a>
            <a class="dropdown-item" href="traveltrade.php">Travel Trade Listing</a>
            <a class="dropdown-item" href="homestayregistration.php">Homestay Registration</a>
            <a class="dropdown-item" href="investinuttarakhand.php">Invest In Uttarakhand Tourism</a>
          </div>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-normal" href="faq.html">FAQ</a>
        </li>
        <li class="nav-item">
          <a class="nav-link font-weight-normal" href="media.html">MEDIA</a>
        </li>
      </ul>
      <a class="btn btn-primary" href="/loginsignup/login.php" role="button">Login</a>
      <!-- <form class="form-inline my-2 my-lg-0">
        <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
        <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
      </form> -->
    </div>
  </nav>
  <div class="w-100">
    <img src="images/frontimage2.jpg" class="img-fluid" alt="Responsive image">
  </div>
  <div class="container-fluid section2">
    <h1 class="h1 text-center" style="color: white;"><strong>D I S C O V E R &nbsp; U T T A R A K H A N D</strong></h2>
    <div class="container row" style="padding-top: 30px; justify-content: space-between;" id="posts">
      <div class="col-4">
        <a href="naturesbounty.php"><img src="images/du3.jpg" alt="" class="rounded img-fluid" id="img1"></a>
      </div>
      <div class="col-4">
        <a href="adventures.php"><img src="images/du2.jpg" alt="" class="rounded img-fluid" id="img1"></a>
      </div>
      <div class="col-4">
        <a href=""><img src="images/du4.jpg" alt="" class="rounded img-fluid" id="img1"></a>
      </div>
    </div>
    <div class="container row" style="padding-top: 20px; padding-bottom: 50px;" id="posts" >
      <div class="col-4">
        <a href=""><img src="images/du5.jpg" alt="" class="rounded img-fluid" id="img1"></a>
      </div>
      <div class="col-4">
        <a href=""><img src="images/du6.jpg" alt="" class="rounded img-fluid" id="img1"></a>
      </div>
      <div class="col-4">
        <a href=""><img src="images/du7.jpg" alt="" class="rounded img-fluid" id="img1"></a>
      </div>
    </div>
  </div>
  <div class="container-fluid section3" id="demo1">
    <h1 class="h1 text-center" style="padding-top: 30px; color: white;"><strong>W H Y &nbsp; V I S I T &nbsp; U T T A R A K H A N D</strong></h1> 
  
    <!-- image crousal -->
    <div id="demo" class="container-fluid carousel slide" data-ride="carousel" style="padding: 40px;">

      <!-- Indicators -->
      <ul class="carousel-indicators">
        <li data-target="#demo" data-slide-to="0" class="active"></li>
        <li data-target="#demo" data-slide-to="1"></li>
        <li data-target="#demo" data-slide-to="2"></li>
        <li data-target="#demo" data-slide-to="3"></li>
        <li data-target="#demo" data-slide-to="4"></li>
        <li data-target="#demo" data-slide-to="5"></li>
        <li data-target="#demo" data-slide-to="6"></li>
      </ul>
    
      <!-- The slideshow -->
      <div class="carousel-inner" id="carcon">
        <div class="carousel-item active">
          <a href=""><img src="images/cr1.jpeg" alt="unesco" class="rounded img-fluid"></a>
        </div>
        <div class="carousel-item">
          <img src="images/cr2.jpeg" alt="beatles" class="rounded img-fluid">
        </div>
        <div class="carousel-item">
          <img src="images/cr3.jpeg" alt="Gods" class="rounded img-fluid">
        </div>
        <div class="carousel-item">
          <img src="images/cr4.jpeg" alt="adventure" class="rounded img-fluid">
        </div>
        <div class="carousel-item">
          <img src="images/cr5.jpeg" alt="yoga" class="rounded img-fluid">
        </div>
        <div class="carousel-item">
          <img src="images/cr6.jpeg" alt="CharDham" class="rounded img-fluid">
        </div>
        <div class="carousel-item">
          <img src="images/cr7.jpeg" alt="national" class="rounded img-fluid">
        </div>
      </div>
    
      <!-- Left and right controls -->
      <a class="carousel-control-prev" href="#demo" data-slide="prev" >
        <span class="carousel-control-prev-icon"></span>
      </a>
      <a class="carousel-control-next" href="#demo" data-slide="next">
        <span class="carousel-control-next-icon"></span>
      </a>
    
    </div>
  </div>
    <!-- image crousal -->


    <!-- social media feeds -->
    <div class="container-fluid section4">
      <h1 class="h1 text-center"><strong>S O C I A L &nbsp; M E D I A &nbsp; F E E D S</strong></h1>
      <div class="container row" id="posts">
        <div class="col-4">
          <a href=""><img src="images/sm1.jpeg" alt="" class="rounded img-fluid"></a>
        </div>
        <div class="col-4">
          <a href=""><img src="images/sm2.jpeg" alt="" class="rounded img-fluid"></a>
        </div>
        <div class="col-4">
          <a href=""><img src="images/sm3.jpeg" alt="" class="rounded img-fluid"></a>
        </div>
      </div>
      <div class="container row" id="posts" style="padding-bottom: 50px;">
        <div class="col-4">
          <a href=""><img src="images/sm4.jpeg" alt="" class="rounded img-fluid"></a>
        </div>
        <div class="col-4">
          <a href=""><img src="images/sm5.jpeg" alt="" class="rounded img-fluid"></a>
        </div>
        <div class="col-4">
          <a href=""><img src="images/sm6.jpeg" alt="" class="rounded img-fluid"></a>
        </div>
      </div>
    </div>

    <!-- social media feeds -->

    <!-- recommended video -->
    <div class="container-fluid section5">
      <h1 class="h1 text-center" style="padding-top: 30px; color: white;"><strong>R E C O M M E N D E D &nbsp; V I D E O</strong></h1>
      <div class="container embed-responsive embed-responsive-16by9 mt-5" >
        <iframe width="560" height="315" class="embed-responsive-item" src="video/rv.mp4" allowfullscreen style="padding-bottom: 70px;"></iframe>
      </div>
    </div>
    <!-- recommended video -->

    <!-- check this out -->
    <div class="container-fluid section6" >
      <h1 class="h1 text-center" style="padding-top: 40px; color: white; padding-bottom: 20px;"><strong>C H E C K &nbsp; T H I S &nbsp; O U T</strong></h1>
      <div class="row" style="justify-content: center; padding-bottom: 40px;">
        <div class="col-lg-3 col-12 p-4">
          <div class="card h-100">
            <div class="slide-item">
              <img src="images/check1.jpg" alt="checkthisout" style="width: 100%;">
            </div>
            <div class="card-body text-center">
              <h3 class="card-title title-boton font-150">Best adventures to try in Uttarakhand</h3>
              <p class="card-text"><p><strong>By- Sashi Kumari Bisht</strong></p>
              <p><strong>Uttarakhand offers several activities to keep the adventure enthusiasts busy.</strong></p></p>
              <p class="card-text text-right"><a href="https://uttarakhandtourism.gov.in/blog/best-adventures-try-uttarakhand">Read More</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-12 p-4">
          <div class="card h-100">
            <div class="slide-item">
              <img src="images/check2.jpg" alt="checkthisout" style="width: 100%;">
            </div>
            <div class="card-body text-center">
              <h3 class="card-title title-boton font-150">Kumbh  Mela: Leap of Faith</h3>
              <p class="card-text"><p><strong>By- Sashi Kumari Bisht</strong></p>
              <p><strong>What makes attending a Kumbh Mela a once-in-a-lifetime opportunity</strong></p></p>
              <p class="card-text text-right"><a href="https://uttarakhandtourism.gov.in/blog/kumbh-mela-leap-faith">Read More</a></p>
            </div>
          </div>
        </div>
        <div class="col-lg-3 col-12 p-4">
          <div class="card h-100">
            <div class="slide-item">
              <img src="images/check3.jpg" alt="checkthisout" style="width: 100%;">
            </div>
            <div class="card-body text-center">
              <h3 class="card-title title-boton font-150">Beatles magical tour of India </h3>
              <p class="card-text"><p><strong>By- Ishita Goel</strong></p>
              <p><strong>Some facts that made headlines during and after the visit Beatles to India.</strong></p></p>
              <p class="card-text text-right"><a href="https://uttarakhandtourism.gov.in/blog/beatles-magical-tour-india">Read More</a></p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- check this out -->

    <!-- footer -->
    <div class="container-fluid" style="background-color: #464646;">
        <div class="row section7" style="padding-left: 100px; padding-right: 100px;">
          <div class="col-sm" style="padding: 30px;">
            <h4 style="color: white;">About UTD</h4>
            <a href="">About Us</a>
            <a href="">Awards & Honours</a>
            <a href="">CEO’s Message</a>
            <a href="">Contact Us</a>
            <a href="">Uttarakhand Tourist Map</a>
            <a href="">Sitemap</a>
          </div>
          <div class="col-sm" style="padding: 30px;">
            <h4 style="color: white;">Departmental Info</h4>
            <a href="">Citizen Charter</a>
            <a href="">Annual Transfer</a>
            <a href="">Important Links</a>
            <a href="">Policy and Guidelines</a>
            <a href="">RTI</a>
            <a href="">Right to Service</a>
            <a href="">Tenders/EOI</a>
            <a href="">Vacancies</a>
          </div>
          <div class="col-sm" style="padding: 30px;">
            <h4 style="color: white;">Trade</h4>
            <a href="">Invest In Uttarakhand Tourism</a>
            <a href="">Apply for Veer Chandra Singh Garhwali & Pt. Deen Dayal Homestay Scheme</a>
            <a href="">Market Research and Statistics</a>
            <a href="">CBSP Training Prog. - Empanelment of Institute</a>
            <a href="">Upload Advertisement of Hunar Se Rozgar Tak (HSRT)</a>
            <a href="">Tourist Guide Training Form</a>
            <a href="">Treks of the year</a>
            <a href="">Photography & Videography Contest and Influencer Registration</a>
          </div>
        </div>
    </div>
    <div class="container" style="display: flex; justify-content: center;">
      <!-- Button trigger modal -->
      <a><img class="img-fluid" style="width: 200px; padding: 7px;" src="images/footerimage1.png" data-toggle="modal" data-target="#exampleModal0"></a>
      <a><img class="img-fluid" style="width: 200px; padding: 7px;" src="images/footerimage2.png" data-toggle="modal" data-target="#exampleModal1"></a>
      <a><img class="img-fluid" style="width: 200px; padding: 7px;" src="images/footerimage3.png" data-toggle="modal" data-target="#exampleModal2"></a>
    
      <!-- Modal0 -->
      <div class="modal fade" id="exampleModal0" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Alert!</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              This link shall take you to a page outside the UTDB website. For any query regarding the contents of the linked page, please contact the webmaster of the concerned website.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <a class="btn btn-primary" href="https://gmvnonline.com/" role="button">Confirm</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal0 -->

      <!-- Modal1 -->
      <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Alert!</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              This link shall take you to a page outside the UTDB website. For any query regarding the contents of the linked page, please contact the webmaster of the concerned website.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <a class="btn btn-primary" href="http://www.kmvn.in/" role="button">Confirm</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal1 -->

      <!-- Modal2 -->
      <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Alert!</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              This link shall take you to a page outside the UTDB website. For any query regarding the contents of the linked page, please contact the webmaster of the concerned website.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <a class="btn btn-primary" href="https://tourism.gov.in/" role="button">Confirm</a>
            </div>
          </div>
        </div>
      </div>
      <!-- Modal2 -->
    </div>
    <div class="col-12 d-flex justify-content-center text-white p-2 text-center" style="background-color: #464646;">
      Nodal Officer
      <br/>
      Mr. V.S. Chauhan (Additional Director)
      <br/>
      For suggestions & feedback related to the website, please write to infoutdb-uk@nic.in
      <br/>
      For any general queries or details, please mail us at publicityutdb@gmail.com, info.utdb@gmail.com or call 91- 135- 2559898, 2559987
      <br/>
    </div>
    <div class="container-fluid">
      <div class="row" style="background-color: #464646;">
        <div class="col-sm d-flex justify-content-center text-white p-2 text-center">
          <p class="text-white m-0">Copyright © 2022 <span>Uttarakhand Tourism Development Board.</span> - All rights reserved.</p>
        </div>
        <div class="col-sm d-flex justify-content-center text-white p-2 text-center">
          <a href="#" style="color: white; align-items: center;">Sitemap</a>
          <a href="#" style="color: white; align-items: center;">Policy</a>
          <a href="#" style="color: white; align-items: center;">Accesiblity Statement</a>
        </div>
      </div>
    </div>
    <!-- footer -->
  
</body>
</html>