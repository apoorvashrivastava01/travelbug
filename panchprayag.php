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
        <img src="images/panchBadribanner.jpg" class="img-fluid w-100" alt="Responsive image">
    </div>
    <!-- banner image -->

    <!-- panch prayag -->
    <div class="container">
        <h1 class="h1 text-center" style="padding-top: 40px; font-weight: 600; padding-bottom: 30px;" ><strong>P A N C H &nbsp; P R A Y A G</strong></h1>
        <p style="font-weight: 500;">Five revered sites in Uttarakhand where five rivers merge into River Alaknanda to ultimately form the holy River Ganges (Ganga) is called Panch Prayag (in Hindi, 'panch' means five and 'prayag' means confluence). One of the most sacred Indian rivers, Ganges is worshipped as the life-giving goddess and its waters are used in religious rituals. These five places, in descending order of river convergence, are Vishnuprayag, Nandaprayag, Karnaprayag, Rudraprayag and Devprayag. Devotees from across the country visit the sites as it is believed that taking a dip in the water in these five spots cleanses the soul and advances them a step closer to moksha.
        </p>
        <p style="font-weight: 500;">According to Hindu mythology, when Goddess Ganga began her descent to Earth, her force was formidable. To temper her force, she was said to have been split into 12 channels that flow to reunite completely after Devprayag (where rivers Alaknanda and Bhagirathi meet) to become River Ganga again.
        </p>
    </div>
    <div class="container">
        <h2 class="h2 text-center" style="padding-top: 40px; font-weight: 600; padding-bottom: 30px;" ><strong>1. VISHNUPRAYAG</strong></h2>
        <p style="font-weight: 500;">Formed by the confluence of the impetuous Vishnu Ganga (known after this point as Alaknanda) and the Dhauliganga river, Vishnuprayag (1372 m) has an ancient temple called Vishnu Kund. It is said that the sage Narad worshipped Lord Vishnu at this sanctified spot. Visitors will find the Kagbhusandi Lake bewitching with its emerald green depths giving it a still surface, while on the banks, blossoms evoke the colors of nature in all her glory. The lake can also be approached from Vishnuprayag beside Bhundhar village near Ghangaria.</p>
    </div>
    <div class="container">
        <h2 class="h2 text-center" style="padding-top: 40px; font-weight: 600; padding-bottom: 30px;" ><strong>2. NANDAPRAYAG</strong></h2>
        <p style="font-weight: 500;">The next confluence happens in Nandaprayag where Rivers Alaknanda and Nandakini meet. There are several legends associated with this site. According to one, it is believed that a pious and honest king named Nanda performed a yajana or fire ritual here to please the gods and seek their blessings. Another legend goes to say that Nandaprayag derived its name from Nanda, the foster father of Lord Krishna. The famous Gopalji temple is also situated here.</p>
    </div>
    <div class="container">
        <h2 class="h2 text-center" style="padding-top: 40px; font-weight: 600; padding-bottom: 30px;" ><strong>3. KARNAPRAYAG</strong></h2>
        <p style="font-weight: 500;">Karnaprayag is located on the way to Badrinath and is the site of  the confluence of two holy rivers Alaknanda and Pindar. It is said that Karna of Mahabharata meditated here for many years to acquire the impregnable shield, which made him a formidable warrior on the battlefield. Swami Vivekananda is also known to have meditated here with his disciples. It is the sub-divisional headquarter of district Chamoli. Roads from here go to Almora, Nainital and Jim Corbett National Park.</p>
    </div>
    <div class="container">
        <h2 class="h2 text-center" style="padding-top: 40px; font-weight: 600; padding-bottom: 30px;" ><strong>4. RUDRAPRAYAG</strong></h2>
        <p style="font-weight: 500;">Named after Lord Shiva (Rudra), Rudraprayag is a small pilgrim town located on the holy confluence of river Alaknanda and Mandakini and is venerated as one of the five sacred confluences or the 'Panch Prayag'. The meeting of the Mandakini and Alaknanda rivers has a unique beauty of its own and appears as two sisters embracing each other. It is believed that to master the mysteries of music, Narad Muni worshipped Lord Shiva, who appeared in his Rudra Avtaar (incarnation) to bless Narad.</p>
        <p style="font-weight: 500;">The Shiva and Jagdamba temples are of great religious importance. Till recently, Rudraprayag was a part of district Chamoli and Tehri. In 1997, the Kedarnath Valley and parts of district Tehri and Pauri were conjoined to form Rudraprayag as a new district. It is the junction for visiting Badrinath and Kedarnath Dham.</p>
        <p style="font-weight: 500;">There are several temples worth visiting in Rudraprayag, one of the most prominent being the Koteshwar Mahadev Temple on the shores of the Alaknanda river. Covered in lush foliage, this beautiful cave-temple is dedicated to Lord Shiva, who is believed to have stopped and meditated here.</p>
    </div>
    <div class="container">
        <h2 class="h2 text-center" style="padding-top: 40px; font-weight: 600; padding-bottom: 30px;" ><strong>5. DEVPRAYAG</strong></h2>
        <p style="font-weight: 500;">The last prayag or confluence, Devprayag (850 m) is a pilgrimage town in the Tehri Garhwal district of Uttarakhand. Alaknanda and Bhagirathi rivers merge to form the holy River Ganga at Devprayag. The small town is situated on the route from Rishikesh to Badrinath.</p>
        <p style="font-weight: 500;">Devprayag literally means 'holy confluence'. It is an extremely important religious site for Hindus. Ganga, the biggest and the holiest river in India, starts its journey to the plains and further towards Bay of Bengal from Devprayag.</p>
        <p style="font-weight: 500;">The entire town was destroyed in 1803 by an earthquake but the heritage structures of Devprayag were restored soon and the ancient charm of the holy town has been retained.</p>
    </div>
    <!-- panch prayag -->
    <div class="container">
        <h1 class="h1 text-center" style="padding-top: 40px; font-weight: 600; padding-bottom: 30px;" ><strong>G E T &nbsp; D I R E C T I O N S</strong></h1>
    </div>

    <!-- map -->
    <div id="map-container-google-1" class="z-depth-1-half map-container container-fluid" style="height: 500px; width: 600px;">
        <iframe src="https://maps.google.com/maps?q=27.439645364085113, 80.50561628123411&t=k&z=13&ie=UTF8&iwloc=&output=embed" frameborder="0"
          style="border:0" allowfullscreen></iframe>
    </div>
    <!-- map -->

    <!-- how to reach -->
    <div class="container-fluid" style="padding-left: 200px; padding-right: 200px; padding-bottom: 50px;">
        <h1 class="h1 text-center" style="padding-top: 40px; font-weight: 600; padding-bottom: 30px;" ><strong>H O W &nbsp; T O &nbsp; R E A C H</strong></h1>
        <div class="row">
            <div class="col-lg-4 col-12 p-3">
                <div class="card">
                    <img src="images/Flight_Image.jpg" alt="" class="img-fluid card-img-top">
                    <div class="card-body" style="padding-bottom: 80px;">
                        <h4 class="card-title">By Flight</h4>
                        <p class="card-text">The nearest airport is Jolly Grant, Dehradun, 239 km</p>
                    </div>
                    <a href="https://www.google.com/flights?hl=en#flt=/m/0dlv0..2019-01-13*./m/0dlv0.2019-01-17;c:INR;e:1;ls:1w;sd:0;t:h" class="text-left" style="padding: 10px; padding-left: 22px;">View air Schedule</a>
                </div>
            </div>
            <div class="col-lg-4 col-12 p-3">
                <div class="card">
                    <img src="images/Train_Image.jpg" alt="" class="img-fluid card-img-top">
                    <div class="card-body" style="padding-bottom: 80px;">
                        <h4 class="card-title">By Train</h4>
                        <p class="card-text" >The nearest railway station is Rishikesh.</p>
                    </div>
                    <a href="https://www.irctc.co.in/nget/train-search" class="text-left" style="padding: 10px; padding-left: 22px;">View air Schedule</a>
                </div>
            </div>
            <div class="col-lg-4 col-12 p-3">
                <div class="card">
                    <img src="images/Bus_Image.jpg" alt="" class="img-fluid card-img-top">
                    <div class="card-body" style="padding-bottom: 33px;">
                        <h4 class="card-title">By Bus</h4>
                        <p class="card-text">All five Prayags are well connected by road with Rishikesh, Kotdwar, Dehradun, Haridwar and other important hill stations of Garhwal and Kumaon hills.</p>
                    </div>
                    <a href="http://www.utconline.uk.gov.in/" class="text-left" style="padding: 10px; padding-left: 22px;">View air Schedule</a>
                </div>
            </div>
        </div>
        
    </div>

    
    <!-- how to reach -->







    <!-- footer -->
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
    <!-- footer -->
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