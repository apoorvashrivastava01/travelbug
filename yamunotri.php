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
        <img src="images/yamunotribanner.jpeg" class="img-fluid w-100" alt="Responsive image">
    </div>
    <!-- banner image -->
    
    
    <!-- YAMUNOTRI -->
    <div class="container-fluid" style="padding-bottom: 30px;">
      <div class="container">
        <h1 class="h1 text-center" style="padding: 30px;"><strong>Y A M U N O T R I</strong></h1>
        <p>Yamunotri is a part of Char Dham (along with Gangotri, Kedarnath and Badrinath), the four most revered Hindu pilgrimages in the Himalayas. The small mountain hamlet, with the Yamunotri Temple at its centre, attracts thousands of devotees every year and is the commencing point of the Char Dham Yatra pilgrimage (May to October), which proceeds from Yamunotri to Gangotri and finally to Kedarnath and Badrinath. Lodged in a narrow gorge, close to the source of the Yamuna, the Yamunotri Temple is dedicated to Yamuna, the second-most sacred river after the Ganges. A dip in River Yamuna is said to protect one from untimely death.  Devotees either walk or ride a palanquin or a pony to reach the temple (around 3,233 m above sea level) from Janki Chatti, a steep trek of about 3 km that takes about 3 hours.</p>

        <div class="card text-white shadow" style="padding-top: 0px!important;margin-bottom: 20px;">
          <div class="card-body justify-content-center">
            <p class="h4 text-center" style="color: black;">Kapat is open now for darshan. </p>
            <p class="h5 text-center " style="color: black;"><strong>Best Time To Visit:</strong> April to June and September to November</p>
          </div>
        </div>
        <h1 class="h1 text-center shadow-lg card" style="padding: 30px;padding-top: 30px;"><strong>I T E N A R I E S</strong></h1>
        <div class="container shadow card" style="padding-bottom: 20px;">
          <h2 class="h2 text-center" style="padding-top: 20px;margin-top: 30px;padding-bottom: 10px;">RISHIKESH – KEDARNATH – BADRINATH - RISHIKESH</h2>
          <h4 class="h4 text-center" style="padding-top: 10px;padding-bottom: 10px;">Destinations: Dehradun, Yamunotri, Gangotri, Gaumukh, Haridwar</h4>
          <h5 class="h5 text-center" style="padding-top: 10px;padding-bottom: 10px;">Distance: Approx 700 kms</h5>
          <h5 class="h5 text-center" style="padding-top: 10px;padding-bottom: 10px;">Experience: Sightseeing and religious</h5>
          <h5 class="h5 text-center" style="padding-top: 10px;padding-bottom: 10px;">For family and groups</h5>
          <h5 class="h5 text-center" style="padding-top: 10px;padding-bottom: 10px;">Budget: Approx Rs 10,000 (per person)</h5>
          <h5 class="h5 text-center" style="padding-top: 10px;padding-bottom: 10px;">You can also explore GMVN tour packages <a href="https://gmvnonline.com/viewpackages?Ptr_Id=30234">View Packages</a></h5>
          <div class="container text-center" style="padding:10px;">
                <button type="button" class="btn btn-primary" ><a href="https://www.google.com/maps/dir/Dehradun/Yamunotri/Gangotri,+Uttarakhand/Gaumukh,+Kedarnath,+Uttarakhand/Haridwar,+Uttarakhand/@30.4948833,77.9687876,9z/data=!3m1!4b1!4m32!4m31!1m5!1m1!1s0x390929c356c888af:0x4c3562c032518799!2m2!1d78.0321918!2d30.3164945!1m5!1m1!1s0x39089b593055c339:0x5ea60ea41a34bdf4!2m2!1d78.4599555!2d31.0139859!1m5!1m1!1s0x390871907388bf55:0x67172e0036db57db!2m2!1d78.9398402!2d30.9946945!1m5!1m1!1s0x390813b0ea2aa1b5:0xf92491d358716ed5!2m2!1d79.0817698!2d30.9251824!1m5!1m1!1s0x3909470eb8ee57c9:0x4e449176a640f5f3!2m2!1d78.1642478!2d29.9456906!3e2" style="text-decoration: none; color:white;">Google Map</a></button>
                <button type="button" class="btn btn-primary" ><a href="travelagents.php"  style="text-decoration: none; color:white;">Travel Agents</a></button>
          </div>
        </div>

        <!-- attractions -->
        <h1 class="h1 text-center shadow-lg card" style="padding: 30px;padding-top: 30px;margin-top: 20px;"><strong>A T T R A C T I O N S</strong></h1>
        <div class="container-fluid shadow-lg card">
          <div class="container row justify-content-center m-auto justify-content-center " style="padding-top: 30px;">
              <div class="col-lg-4 col-sm-6 p-3"><a>
                <figure class="figure1" style="overflow: hidden!important;">
                  <img src="images/y1.jpg" alt="" class="rounded img-fluid" id="img2" data-toggle="modal" data-target="#exampleModal11">
                </figure></a>
                <!-- modal11 -->
                <div class="modal fade" id="exampleModal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                  <div class="modal-dialog" role="document">
                    <div class="modal-content">
                      <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Janki Chatti</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                          <span aria-hidden="true">&times;</span>
                        </button>
                      </div>
                      <div class="modal-body">
                          <img src="images/y1.jpg" alt="" class="img-fluid w-100 p-1" ><br>

                          <p class="text-left p-1 w-auto font-weight-bold">A hamlet that comes to life during the Char Dham Yatra season (May to October), Janki Chatti is popular for its natural splendour. It is around 6 km from Yamunotri Dham and is surrounded by high mountains on all sides. Earlier, the starting point of the trek to reach Yamunotri was Hanuman Chatti (around 13 km away), but now a motorable road can take you up to Janki Chatti. GMVN Tourist Rest Housex<p>
                      </div>
                    </div>
                  </div>
                </div>
                <!-- modal11 -->
                <h4 class="text-center">JANKI CHATTI</h4>
              </div>
              <div class="col-lg-4 col-sm-6 p-3"><a>
                  <figure class="figure1" style="overflow: hidden!important;">
                    <img src="images/y2.jpg" alt="" class="rounded img-fluid" id="img2" data-toggle="modal" data-target="#exampleModal12">
                  </figure></a>
                  <!-- modal11 -->
                  <div class="modal fade" id="exampleModal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Yamunotri Temple</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <img src="images/y2.jpg" alt="" class="img-fluid w-100 p-1" ><br>

                            <p class="text-left p-1 w-auto font-weight-bold">A hamlet that comes to life during the Char Dham Yatra season (May to October), Janki Chatti is popular for its natural splendour. It is around 6 km from Yamunotri Dham and is surrounded by high mountains on all sides. Earlier, the starting point of the trek to reach Yamunotri was Hanuman Chatti (around 13 km away), but now a motorable road can take you up to Janki Chatti. GMVN Tourist Rest Housex<p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- modal11 -->
                  <h4 class="text-center">YAMUNOTRI TEMPLE</h4>
              </div>
              <div class="col-lg-4 col-sm-6 p-3"><a>
                  <figure class="figure1" style="overflow: hidden!important;">
                    <img src="images/y3.jpg" alt="" class="rounded img-fluid" id="img2" data-toggle="modal" data-target="#exampleModal13">
                  </figure></a>
                  <!-- modal13 -->
                  <div class="modal fade" id="exampleModal13" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Yamunotri Temple</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <img src="images/y3.jpg" alt="" class="img-fluid w-100 p-1" ><br>

                            <p class="text-left p-1 w-auto font-weight-bold">The Yamunotri temple is dedicated to Goddess Yamuna, who is said to be the daughter of Lord Surya (sun) and the sister of Yama (the god of death). An intricately carved idol of Goddess Yamuna in polished black ebony stands inside the temple. Sitting next to the gurgling Yamuna river, the bright yellow and vermillion coloured temple is visible from a distance, dramatically set against the steep mountain face. Two natural hot springs, Surya Kund and Gouri Kund, flank the temple. Devotees dip rice and vegetables in the springs, as a divine offering. Devotees also pray at Divya Shilla, a reddish brown rock near Surya Kund. The temple is said to have been built in 1839 AD and rebuilt in the 19th century.<p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- modal13 -->
                  <h4 class="text-center">HANUMAN CHATTI</h4>
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
                  <img src="images/y4.jpg" alt="" class="rounded img-fluid" id="img2" data-toggle="modal" data-target="#exampleModal14">
                </figure></a>
                <!-- modal13 -->
                  <div class="modal fade" id="exampleModal14" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog" role="document">
                      <div class="modal-content">
                        <div class="modal-header">
                          <h5 class="modal-title" id="exampleModalLabel">Trekking</h5>
                          <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                            <span aria-hidden="true">&times;</span>
                          </button>
                        </div>
                        <div class="modal-body">
                            <img src="images/y4.jpg" alt="" class="img-fluid w-100 p-1" ><br>

                            <p class="text-left p-1 w-auto font-weight-bold">There are several trekking routes in and around Yamunotri. The most popular is the route from Hanuman Chatti to Yamunotri, a 14-km moderate trek that takes about 5 hours to complete. The Dodi Tal trek is equally frequented.<p>
                        </div>
                      </div>
                    </div>
                  </div>
                  <!-- modal13 -->
                <h4 class="text-center">Trekking</h4>
              </div>
          </div>
        </div>
        <!-- WHAT TO DO -->

        <!-- nearby destinations -->
        <h1 class="h1 text-center shadow-lg card" style="padding: 30px;padding-top: 30px;margin-top: 20px;"><strong>N E A R B Y &nbsp; D E S T I N A T I O N S</strong></h1>
        <div class="container-fluid shadow-lg card">
          <div class="container row justify-content-center m-auto justify-content-center " style="padding-top: 30px;">
              <div class="col-lg-4 col-sm-6 p-3"><a>
                <figure class="figure1" style="overflow: hidden!important;">
                  <img src="images/y5.jpg" alt="" class="rounded img-fluid" id="img2" >
                </figure></a>
                <h4 class="text-center">Barkot</h4>
              </div>
              <div class="col-lg-4 col-sm-6 p-3"><a>
                  <figure class="figure1" style="overflow: hidden!important;">
                    <img src="images/y6.jpg" alt="" class="rounded img-fluid" id="img2" >
                  </figure></a>
                  <h4 class="text-center">Harsil</h4>
              </div>
              <div class="col-lg-4 col-sm-6 p-3"><a>
                  <figure class="figure1" style="overflow: hidden!important;">
                    <img src="images/y7.jpeg" alt="" class="rounded img-fluid" id="img2" >
                  </figure></a>
                  <h4 class="text-center">Gangotri</h4>
              </div>
          </div>
        </div>
        <!-- nearby destinations -->

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