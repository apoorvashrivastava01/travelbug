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
              <a class="nav-link font-weight-normal" href="index.php">HOME <span class="sr-only">(current)</span></a>
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
        <img src="images/chardhambanner.jpg" class="img-fluid w-100" alt="Responsive image">
    </div>
    <!-- banner image -->

    <!-- section1 -->
    <div class="container-fluid">
      <div class="container">
        <h1 class="h1 text-center" style="padding: 30px;"><strong>C H A R &nbsp; D H A M</strong></h1>
        <p>Uttarakhand, also known as Devbhoomi or the Land of Gods, is home to numerous temples and welcomes devotees all year round. Among the countless religious sites and circuits that devotees visit in Uttarakhand, one of the most prominent is the Char Dham Yatra. This Yatra or pilgrimage is a tour of four holy sites - Yamunotri, Gangotri, Kedarnath and Badrinath – nestled high up in the Himalayas. In Hindi, 'char' means four and 'dham' refers to religious destinations.</p>

        <p>The high-altitude shrines remain shut for around six months every year, opening in summers (April or May) and closing with the onset of winter (October or November). It is believed that one should complete the Char Dham Yatra in a clockwise direction. Hence, the pilgrimage starts from Yamunotri, proceeds towards Gangotri, onto Kedarnath, and finally ends at Badrinath. The journey can be completed by road or by air (helicopter services are available). Some devotees even do a Do Dham Yatra or a pilgrimage to two shrines - Kedarnath and Badrinath.</p>
            
        <p>The Yamunotri temple, lodged in a narrow gorge close to the source of River Yamuna (the second-most sacred Indian river after River Ganga) in Uttarkashi district, is dedicated to Goddess Yamuna. The district of Uttarkashi is also home to Gangotri dedicated to Goddess Ganga, the most sacred of all Indian rivers. Located in the Rudraprayag district lies Kedarnath, dedicated to Lord Shiva. Badrinath, home to the sacred Badrinarayan Temple, is dedicated to Lord Vishnu. The Char Dham Yatra is as divine as it is arduous but fulfills the soul!</p>
        <h1 class="h1 text-center" style="padding: 30px;"><strong>E X P L O R E &nbsp; M O R E</strong></h1>
      </div>
    </div>
    <div class="container-fluid pl-5 pr-5 text-center align-content-center" id="chardhamsec1">
        <div class="row" style="margin: auto;">
            <div class="col-3" style="margin: auto;padding: 20px;">
                <a href="yamunotri.php"><img src="images/ch1.jpg" alt="" class="rounded img-fluid" id="img1"><h4 class="h4">Yamunotri</h4></a>
            </div>
            <div class="col-3" style="margin: auto;padding: 20px;">
                <a href="gangotri.php"><img src="images/ch2.jpeg" alt="" class="rounded img-fluid" id="img1"><h4 class="h4">Gangotri</h4></a>
            </div>
            <div class="col-3" style="margin: auto;padding: 20px;">
                <a href="badrinath.php"><img src="images/ch3.jpeg" alt="" class="rounded img-fluid" id="img1"><h4 class="h4">Badrinath</h4></a>
            </div>
            <div class="col-3" style="margin: auto;padding: 20px;">
                <a href="kedarnath.php"><img src="images/ch4.jpeg" alt="" class="rounded img-fluid" id="img1"><h4 class="h4">Kedarnath</h4></a>
            </div>
        </div>
    </div>
    <!-- EXPLORE MORE -->
    <!-- CHAR DHAM NEED TO KNOW -->
    <div class="container">
      <h1 class="h1 text-center" style="padding: 30px;"><strong>C H A R &nbsp; D H A M &nbsp; N E E D S &nbsp; T O &nbsp; K N O W</strong></h1>
      <h3 class="h3 text-center" style="padding: 30px;"><strong>PACKAGES</strong></h3>
      <!-- packages -->
      <div class="container">
          <div class="row" style="margin: auto; padding: 15px;">
            <div class="col border" style="margin-right: 7px">
              <p class="mx-auto font-weight-bold " style="padding-left: 20px; padding-top: 5px;">TOUR NO. 01</p>
              <p style="padding-left: 20px; ">RISHIKESH – KEDARNATH – BADRINATH - RISHIKESH</p>
            </div>
            <div class="col border">
              <p class="mx-auto font-weight-bold " style="padding-left: 20px; padding-top: 5px;">TOUR NO. 02</p>
              <p style="padding-left: 20px; ">HARIDWAR – KEDARNATH – BADRINATH - HARIDWAR</p>
            </div>
          </div>
          <div class="row" style="margin: auto; padding: 15px;">
            <div class="col border" style="margin-right: 7px">
              <p class="mx-auto font-weight-bold " style="padding-left: 20px; padding-top: 5px;">TOUR NO. 03</p>
              <p style="padding-left: 20px; ">HARIDWAR – YAMUNOTRI – GANGOTRI – KEDARNATH - BADRINATH-HARIDWAR</p>
            </div>
            <div class="col border">
              <p class="mx-auto font-weight-bold " style="padding-left: 20px; padding-top: 5px;">TOUR NO. 04</p>
              <p style="padding-left: 20px; ">RISHIKESH – YAMUNOTRI – GANGOTRI – KEDARNATH – BADRINATH-RISHIKESH</p>
            </div>
          </div>
          <div class="row" style="margin: auto; padding: 15px;">
            <div class="col border" style="margin-right: 7px">
              <p class="mx-auto font-weight-bold " style="padding-left: 20px; padding-top: 5px;">TOUR NO. 05</p>
              <p style="padding-left: 20px; ">DEHRADUN–YAMUNOTRI–GANGOTRI–KEDARNATH-BADRINATH-HARIDWAR</p>
            </div>
            <div class="col border">
              <p class="mx-auto font-weight-bold " style="padding-left: 20px; padding-top: 5px;">TOUR NO. 06</p>
              <p style="padding-left: 20px; ">DELHI – YAMUNOTRI – GANGOTRI – KEDARNATH - BADRINATH-HARIDWAR</p>
            </div>
          </div>
          <div class="row" style="margin: auto; padding: 15px;">
            <div class="col border" style="margin-right: 7px">
              <p class="mx-auto font-weight-bold " style="padding-left: 20px; padding-top: 5px;">TOUR NO. 07</p>
              <p style="padding-left: 20px; ">DEHRADUN – YAMUNOTRI-GANGOTRI-GAUMUKH- HARIDWAR</p>
            </div>
            <div class="col border">
              <p class="mx-auto font-weight-bold " style="padding-left: 20px; padding-top: 5px;">TOUR NO. 08</p>
              <p style="padding-left: 20px; ">RISHIKESH – KEDARNATH – BADRINATH-RISHIKESH</p>
            </div>
          </div>
          <div class="row" style="margin: auto; padding: 15px;">
            <div class="col border" style="margin-right: 7px">
              <p class="mx-auto font-weight-bold " style="padding-left: 20px; padding-top: 5px;">TOUR NO. 09</p>
              <p style="padding-left: 20px; ">HARDWAR – KEDARNATH – BADRINATH - HARIDWAR</p>
            </div>
            <div class="col border">
              <p class="mx-auto font-weight-bold " style="padding-left: 20px; padding-top: 5px;">TOUR NO. 010</p>
              <p style="padding-left: 20px; ">RISHIKESH – YAMUNOTRI – GANGOTRI – KEDARNATH – BADRINATH-RISHIKESH</p>
            </div>
          </div>
          <div class="row" style="margin: auto; padding: 15px;">
            <div class="col border" style="margin-right: 7px">
              <p class="mx-auto font-weight-bold " style="padding-left: 20px; padding-top: 5px;">TOUR NO. 11</p>
              <p style="padding-left: 20px; ">HARIDWAR – YAMUNOTRI – GANGOTRI – KEDARNATH – BADRINATH - HARIDWAR</p>
            </div>
            <div class="col border">
              <p class="mx-auto font-weight-bold " style="padding-left: 20px; padding-top: 5px;">TOUR NO. 12</p>
              <p style="padding-left: 20px; ">RISHIKESH – VALLEY OF FLOWERS – HEMKUND LOKPAL – BADRINATH-RISHIKESH</p>
            </div>
          </div>
          <div class="row" style="margin: auto; padding: 15px;">
            <div class="col border" style="margin-right: 7px">
              <p class="mx-auto font-weight-bold " style="padding-left: 20px; padding-top: 5px;">TOUR NO. 13</p>
              <p style="padding-left: 20px; ">RISHIKESH – KEDARNATH – BADRINATH - RISHIKESH</p>
            </div>
            <div class="col border">
              <p class="mx-auto font-weight-bold " style="padding-left: 20px; padding-top: 5px;">TOUR NO. 14</p>
              <p style="padding-left: 20px; ">RISHIKESH - YAMUNOTRI – GANGOTRI – KEDARNATH – BADRINATH - RISHIKESH</p>
            </div>
          </div>
      </div>
      <!-- packages -->

      <!-- Advance reservations are available at following offices -->
      <h3 class="h3 text-center" style="padding: 30px;"><strong>Advance reservations are available at following offices</strong></h3>
      <div class="container" >
        <div class="row">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Delhi Uttarakhand Tourism</h5>
                <p class="card-text">Garhwal Mandal Vikas Nigam Ltd. 102- Indraprakash Building, Barakhamba Road, New Delhi 110001</p>
                <p class="card-text font-weight-bold">Tel. : 011-23350481, 23326620</p>
                <p class="card-text font-weight-bold">Fax : 011-23327713</p>
                <p class="card-text font-weight-bold">Email : delhi@gmvnl.in</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Haridwar Uttarakhand Tourism</h5>
                <p class="card-text">PRO GMVN Ltd.Haridwar. Rahi Motel,Near Bus Satand,Haridwar-249408.</p>
                <p class="card-text font-weight-bold">Tel : 01334-228686</p>
                <p class="card-text font-weight-bold">Mob. : 09568006661</p>
                <p class="card-text font-weight-bold">Fax : 01334-226430</p>
              </div>
            </div>
          </div>
        </div>
        <div class="row" style="padding: 15px;">
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Hyderabad Uttarakhand Tourism</h5>
                <p class="card-text">172, GC Ground Floor Bal Yogi Tourist Bhawan pp. Greenlang Guest House Begum Pet, Hyderabad-500016 A.P.</p>
                <p class="card-text font-weight-bold">Tel. : 040-23409945</p>
                <p class="card-text font-weight-bold">Mob : 09493982645</p>
                <p class="card-text font-weight-bold">Email : gmvnhyderabad@gmail.com,</p>
              </div>
            </div>
          </div>
          <div class="col-sm-6">
            <div class="card">
              <div class="card-body">
                <h5 class="card-title">Mumbai Uttarakhand Toursim</h5>
                <p class="card-text">Garhwal Mandal Vikas Nigam Ltd.,Mumbai, Near AC Market, Tardeo Main Road, Mumbai Central 400 034</p>
                <p class="card-text font-weight-bold">Mob. : 022 - 23524013</p>
                <p class="card-text font-weight-bold">Fax : 022 - 23526054</p>
                <p class="card-text font-weight-bold">Email : mumbai@gmvnl.in</p>
              </div>
            </div>
          </div>
        </div>
      </div>
      <!-- Advance reservations are available at following offices -->
    </div>

    <!-- other information -->
    <div class="container" style="padding-bottom: 30px;">
      <h3 class="h3 text-center" style="padding: 30px;"><strong>Other Information</strong></h3>
      <div class="row" style="margin: auto; padding: 15px;">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Tourist Helpline Number</h5>
              <p class="card-text">Ph : 1364 (For other states: +91- 135-1364</p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Char Dham Yatra Control Room</h5>
              <p class="card-text">Ph : 0135 – 2559898, 2552627, 0135–3520100</p>
            </div>
          </div>
        </div>
      </div>
      <div class="row" style="margin: auto; padding: 10px;">
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">For Char Dham Yatra package enquiries, contact<br>
                Mr. S.P.S Rawat</h5>
              <p class="card-text">AGM, Garhwal Mandal Vikas Nigam (Yatra Office)<br>
                Ph. : + 91 9568006626
                </p>
            </div>
          </div>
        </div>
        <div class="col-sm-6">
          <div class="card">
            <div class="card-body">
              <h5 class="card-title">Official in-charge of Char Dham Yatra<br>
                Mr. Kamal Kishor Joshi</h5>
              <p class="card-text">PRO, Uttarakhand Tourism Development Board<br>
                Email : controlroomutdb@gmail.com
                </p>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- other information -->

    <!-- REGISTRATIONS & OTHERS -->
    <div class="container" style="padding-bottom: 30px;">
      <h3 class="h3 text-center" style="padding: 30px;"><strong>R E G I S T R A T I O N S &nbsp; A N D  &nbsp; O T H E R S</strong></h3>
      <button type="button" class="btn btn-primary btn-lg btn-block" data-toggle="modal" data-target="#exampleModal">Dos and Donts for Vehicle Owners & Drivers for Chardham Yatra - 2022</button>
      <!-- Modal -->
      <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
        <div class="modal-dialog" role="document">
          <div class="modal-content">
            <div class="modal-header">
              <h5 class="modal-title" id="exampleModalLabel">Alert!!!</h5>
              <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                <span aria-hidden="true">&times;</span>
              </button>
            </div>
            <div class="modal-body">
              This link shall take you to a page outside the UTDB website. For any query regarding the contents of the linked page, please contact the webmaster of the concerned website.
            </div>
            <div class="modal-footer">
              <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
              <button type="button" class="btn btn-primary" ><a href="https://www.transport.uk.gov.in/" style="color: white; text-decoration: none;">Confirm</a></button>
            </div>
          </div>
        </div>
      </div>
    </div>
    <!-- REGISTRATIONS & OTHERS -->

    <!-- CHAR DHAM NEED TO KNOW -->

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