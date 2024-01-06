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
    <!-- header/navbar -->
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
          <a class="btn btn-primary" href="login.html" role="button">Login</a>
          <!-- <form class="form-inline my-2 my-lg-0">
            <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search">
            <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Search</button>
          </form> -->
        </div>
      </nav>
    <!-- header/navbar -->
    
    <!-- banner image -->
    <div class="img-fluid">
        <img src="images/kedarnathbanner.jpg" class="img-fluid w-100" alt="Responsive image">
    </div>
    <!-- banner image -->
    
    
    <!-- YAMUNOTRI -->
    <div class="container-fluid" style="padding-bottom: 30px;">
      <div class="container">
        <h1 class="h1 text-center" style="padding: 15px;margin-top: 20px;margin-bottom: 20px;"><strong>K E D A R N A T H</strong></h1>
        <p class="" style="margin-top: 20px;margin-bottom: 30px;">One of the most revered temple destinations of India, Kedarnath town is nestled in the mighty Garhwal Himalayas. The town, built around the revered Kedarnath temple, is located at an altitude of 3,580 m, near Chorabari glacier, which is the source of the Mandakini river. Dedicated to Lord Shiva, the ancient temple has exquisite architecture and is built of extremely large but evenly shaped grey stone slabs. A conical rock formation inside the temple is worshipped as Lord Shiva in his “Sadashiva” form.  The Kedarnath temple, dedicated to Lord Shiva, is a part of Char Dham pilgrimage circuit, and is one of the 12 Jyotirlingas of Lord Shiva in India. Behind the Kedarnath temple, stand the Kedarnath peak, Kedar Dome and other Himalayan peaks.</p>

        <p class="" style="margin-top: 20px;margin-bottom: 30px;">The historical name of this region is "Kedar Khand" and legend says, the Pandavas from the epic Mahabharata, after having defeated the Kauravas, felt guilty of having killed so many people and sought the blessings of Lord Shiva for redemption. The Lord eluded them repeatedly and took refuge at Kedarnath in the form of a bull. The Lord dived into the ground, leaving his hump on the surface at Kedarnath. The remaining portions of Lord Shiva appeared at four other places and are worshipped there as his manifestations. The arms of the Lord appeared at Tungnath, the face at Rudranath, the belly at Madmaheshwar and his locks (hair) at Kalpeshwar. The Kedarnath and four above mentioned shrines make the revered Panch Kedar pilgrimage circuit.</p>

        <div class="text-white" style="padding-top: 0px!important;margin-top: 20px;margin-bottom: 30px;">
          <div class="card-body justify-content-center">
            <p class="h4 text-center" style="color: black;">Kapat is open now for darshan. </p>
            <p class="h5 text-center " style="color: black;"><strong>Best Time To Visit:</strong> The ideal time to visit Badrinath Temple is from May to October.<BR> The temple is closed from October/ November, and is reopened around April.</p>
          </div>
        </div>
        <h1 class="h1 text-center shadow-lg card" style="padding: 30px;padding-top: 30px;"><strong>I T E N A R I E S</strong></h1>
        <div class="container shadow card" style="padding-bottom: 20px;">
          <h2 class="h2 text-center" style="padding-top: 20px;margin-top: 30px;padding-bottom: 10px;">CHAR DHAM YATRA</h2>
          <h4 class="h4 text-center" style="padding-top: 10px;padding-bottom: 10px;">Destinations: Haridwar, Yamunotri, Gangotri, Kedarnath, Badrinath</h4>
          <h5 class="h5 text-center" style="padding-top: 10px;padding-bottom: 10px;">Duration: 10 days, 10 nights</h5>
          <h5 class="h5 text-center" style="padding-top: 10px;padding-bottom: 10px;">Distance: Over 1,500 kms from Haridwar; For Family and Group Travel</h5>
          <h5 class="h5 text-center" style="padding-top: 10px;padding-bottom: 10px;">Experiences: Trekking</h5>
          <h5 class="h5 text-center" style="padding-top: 10px;padding-bottom: 10px;">Budget: Approximately between INR 18,000 and 25,000 (per person)</h5>
          <div class="container text-center" style="padding:10px;">
                <button type="button" class="btn btn-primary" ><a href="https://www.google.com/maps/dir/delhi/Haridwar,+Uttarakhand/Barkot,+Uttarakhand+249141/Yamunotri,+Yamnotri+Range,+Uttarakhand+249141/Uttarkashi,+Uttarakhand/Gangotri,+Uttarakhand+249135/Guptkashi,+Uttarakhand+246439/Kedarnath,+Uttarakhand+246445/Badrinath,+Uttarakhand+246422/Rudraprayag,+Uttarakhand+246171/@29.8727042,77.2182421,8z/data=!3m1!4b1!4m62!4m61!1m5!1m1!1s0x390cfd5b347eb62d:0x37205b715389640!2m2!1d77.1024902!2d28.7040592!1m5!1m1!1s0x3909470eb8ee57c9:0x4e449176a640f5f3!2m2!1d78.1642478!2d29.9456906!1m5!1m1!1s0x3908bbff103db101:0x41b1a0ecb9af8513!2m2!1d78.2091613!2d30.8096653!1m5!1m1!1s0x39089b593055c339:0x5ea60ea41a34bdf4!2m2!1d78.4599555!2d31.0139859!1m5!1m1!1s0x3908ed2ff38e31ef:0x7fdeebfe93c9add1!2m2!1d78.4354042!2d30.7268307!1m5!1m1!1s0x390871907388bf55:0x67172e0036db57db!2m2!1d78.9398402!2d30.9946945!1m5!1m1!1s0x390834276aeb1ac7:0x3754eb3cb2189aaf!2m2!1d79.0777138!2d30.5229102!1m5!1m1!1s0x39083ee051e628b1:0x167ce4efaf440f1e!2m2!1d79.0668943!2d30.7346267!1m5!1m1!1s0x39a78e9f973108e7:0xf05a8b5e0c71473!2m2!1d79.4937634!2d30.7433085!1m5!1m1!1s0x3909b7aea36f26f1:0x9eb43bf27ef18d47!2m2!1d78.9811407!2d30.2844141!3e2" style="text-decoration: none; color:white;">Google Map</a></button>
                <button type="button" class="btn btn-primary" ><a href="travelagents.php"  style="text-decoration: none; color:white;">Travel Agents</a></button>
          </div>
        </div>

        <!-- attractions -->
        <h1 class="h1 text-center shadow-lg card" style="padding: 30px;padding-top: 30px;margin-top: 20px;"><strong>A T T R A C T I O N S</strong></h1>
        <div class="container-fluid shadow-lg card">
          <div class="container row justify-content-center m-auto justify-content-center " style="padding-top: 30px;">
              <div class="col-lg-4 col-sm-6 p-3"><a href="bunjeejumping.html">
                <figure class="figure1" style="overflow: hidden!important;">
                  <img src="images/kedar1.jpg" alt="" class="rounded img-fluid" id="img2" >
                </figure></a>
                <h4 class="text-center">Mount Kedarnath</h4>
              </div>
              <div class="col-lg-4 col-sm-6 p-3"><a href="junglesafari.html">
                  <figure class="figure1" style="overflow: hidden!important;">
                    <img src="images/kedar2.jpg" alt="" class="rounded img-fluid" id="img2" >
                  </figure></a>
                  <h4 class="text-center">Kedar Dome</h4>
              </div>
              <div class="col-lg-4 col-sm-6 p-3"><a href="mountainbiking.html">
                  <figure class="figure1" style="overflow: hidden!important;">
                    <img src="images/kedar3.jpg" alt="" class="rounded img-fluid" id="img2" >
                  </figure></a>
                  <h4 class="text-center">Wildlife Sanctuary</h4>
              </div>
          </div>
        </div>
        <!-- attractions -->

        <!-- WHAT TO DO -->
        <h1 class="h1 text-center shadow-lg card" style="padding: 30px;padding-top: 30px;margin-top: 20px;"><strong>W H A T &nbsp; T O &nbsp; D O</strong></h1>
        <div class="container-fluid shadow-lg card">
          <div class="container row justify-content-center m-auto justify-content-center " style="padding-top: 30px;">
              <div class="col-lg-4 col-sm-6 p-3"><a>
                <figure class="figure1" style="overflow: hidden!important;">
                  <img src="images/kedar4.jpg" alt="" class="rounded img-fluid" id="img2" data-toggle="modal" data-target="#exampleModal11">
                </figure></a>
                <!-- modal0 -->
                <div class="modal fade" id="exampleModal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">TREKKING</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          <img src="images/kedar4.jpg" alt="" class="img-fluid w-100 p-1" ><br>

                          <p class="text-left p-1 w-auto font-weight-bold">The Kedarnath trek located within the Kedarnath Wildlife Sanctuary, a 16-km route from Gaurikund to Kedarnath temple, is the most popular here. The trail meanders through forest-covered mountains, glaciers and is criss-crossed by numerous waterfalls. It is a medium to steep trek. There are fixed timings for the trek; 4 am to 1.30 pm, to coincide with the time slots of the sanctuary. The 800-m uphill trek from Kedarnath to Bhairavnath Temple or Bhairon Baba Mandir also falls on this route and offers magnificent views of the Kedarnath Temple and the verdant Kedarnath Valley. From Kedarnath, one can also trek to Chandrashila, a summit located 32 km away.<p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- modal0 -->
                <h4 class="text-center">Trekking</h4>
              </div>
              <div class="col-lg-4 col-sm-6 p-3"><a >
                <figure class="figure1" style="overflow: hidden!important;">
                  <img src="images/kedar5.jpg" alt="" class="rounded img-fluid" id="img2" data-toggle="modal" data-target="#exampleModal12">
                </figure></a>
                <!-- modal0 -->
                <div class="modal fade" id="exampleModal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">CAMPING</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          <img src="images/kedar5.jpg" alt="" class="img-fluid w-100 p-1" ><br>

                          <p class="text-left p-1 w-auto font-weight-bold">One can also enjoy the natural beauty of the region by setting up tents near Kedarnath town. Experience the divine surroundings with the towering Kedarnath peak looming large and star-filled sky during night.<p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- modal0 -->
                <h4 class="text-center">Camping</h4>
              </div>
              <div class="col-lg-4 col-sm-6 p-3"><a>
                <figure class="figure1" style="overflow: hidden!important;">
                  <img src="images/kedar7.jpg" alt="" class="rounded img-fluid" id="img2" data-toggle="modal" data-target="#exampleModal13">
                </figure></a>
                <!-- modal0 -->
                <div class="modal fade" id="exampleModal13" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Rock Climbing</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          <img src="images/kedar7.jpg" alt="" class="img-fluid w-100 p-1" ><br>

                          <p class="text-left p-1 w-auto font-weight-bold">The Kedarnath peak and Kedarnath Dome both offer great rock climbing opportunities with rocks, ice walls, crevasses, etc, attracting professional climbers. Both peaks have relatively easy routes on their northwest sides. The east face of Kedar Dome is more challenging to climb<p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- modal0 -->
                <h4 class="text-center">Rock Climbing</h4>
              </div>
          </div>
        </div>
        <!-- WHAT TO DO -->

        <!-- nearby destinations -->
        <h1 class="h1 text-center shadow-lg card" style="padding: 30px;padding-top: 30px;margin-top: 20px;"><strong>N E A R B Y &nbsp; D E S T I N A T I O N S</strong></h1>
        <div class="container-fluid shadow-lg card">
          <div class="container row justify-content-center m-auto justify-content-center " style="padding-top: 30px;">
              <div class="col-lg-4 col-sm-6 p-3"><a href="junglesafari.html">
                  <figure class="figure1" style="overflow: hidden!important;">
                    <img src="images/kedar8.jpg" alt="" class="rounded img-fluid" id="img2" >
                  </figure></a>
                  <h4 class="text-center">Gupt Kashi</h4>
              </div>
              <div class="col-lg-4 col-sm-6 p-3"><a href="junglesafari.html">
                  <figure class="figure1" style="overflow: hidden!important;">
                    <img src="images/kedar9.jpg" alt="" class="rounded img-fluid" id="img2" >
                  </figure></a>
                  <h4 class="text-center">Chopta</h4>
              </div>
              <div class="col-lg-4 col-sm-6 p-3"><a href="junglesafari.html">
                  <figure class="figure1" style="overflow: hidden!important;">
                    <img src="images/kedar10.jpeg" alt="" class="rounded img-fluid" id="img2" >
                  </figure></a>
                  <h4 class="text-center">Gangotri</h4>
              </div>
              
          </div>
        </div>
        <!-- nearby destinations -->


        <!-- famous places -->
        <h1 class="h1 text-center shadow-lg card" style="padding: 30px;padding-top: 30px;margin-top: 20px;"><strong>F A M O U S &nbsp; P L A C E S &nbsp; N E A R B Y</strong></h1>
        <div class="container-fluid shadow-lg card">
          <div class="container row justify-content-center m-auto justify-content-center " style="padding-top: 30px;">
              <div class="col-lg-4 col-sm-6 p-3"><a>
                  <figure class="figure1" style="overflow: hidden!important;">
                    <img src="images/kedar11.jpg" alt="" class="rounded img-fluid" id="img2" >
                  </figure></a>
                  <h4 class="text-center">Triyuginarayan Temple</h4>
              </div>
              <div class="col-lg-4 col-sm-6 p-3"><a>
                  <figure class="figure1" style="overflow: hidden!important;">
                    <img src="images/kedar12.jpg" alt="" class="rounded img-fluid" id="img2" >
                  </figure></a>
                  <h4 class="text-center">Kalimat Almora</h4>
              </div>
              <div class="col-lg-4 col-sm-6 p-3"><a>
                  <figure class="figure1" style="overflow: hidden!important;">
                    <img src="images/kedar13.jpg" alt="" class="rounded img-fluid" id="img2" >
                  </figure></a>
                  <h4 class="text-center">Madmaheshwar</h4>
              </div>
              
          </div>
        </div>
        <!-- famous places -->

      </div>
    </div>
    <!-- YAMUNOTRI -->


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