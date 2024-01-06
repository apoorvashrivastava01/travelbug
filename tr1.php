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
        <img src="images/Banner_Kedarnath.jpg" class="img-fluid w-100" alt="Responsive image">
    </div>
    <!-- banner image -->


    <!-- tour details -->
    <div class="container" style="padding-bottom: 20px;">
        <h2 class="h2 text-center" style="padding: 20px;">RISHIKESH – KEDARNATH – BADRINATH - RISHIKESH</h2>
        <div class="card" style="border: 2px solid black;">
            <div class="card-body text-center">
                <strong>Tour No: 1</strong><br><br>

                <strong>No. of Persons Allowed per Ticket: 1</strong><br><br>
                
                <strong>Reporting Time</strong>: One day before departure (Pre Night Sunday accommodation included)<br><br>
                
                <strong>Reporting Location:</strong> Bharat Bhoomi Tourist Complex, Shail Vihar, Rishikesh Tel: 0135-2433002<br><br>
                
                <strong>Duration:</strong> 6 Days<br><br>
                
                <strong>Frequency:</strong> Monday<br><br>
                
                <strong>Mode of Transport:</strong> Non AC 2x2 (27 Seater) Non AC Bus<br><br>
                <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#exampleModal">Book Now</button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
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
                        <button type="button" class="btn btn-primary"><a href="https://gmvnonline.com/TPBooking_PersonDetails" style="text-decoration: none; color: white;">Continue</a></button>
                        </div>
                    </div>
                    </div>
                </div>
                <!-- modal -->
            </div>
            <div class="container">
                <!-- table -->
                <table class="table table-hover">
                    <thead>
                      <tr>
                        <th scope="col">Period</th>
                        <th scope="col">Adult</th>
                        <th scope="col">Child</th>
                        <th scope="col">Sr.Citizen</th>
                      </tr>
                    </thead>
                    <tbody>
                      <tr>
                        <th scope="row">May to Jun</th>
                        <td>Rs.18200</td>
                        <td>Rs.17450</td>
                        <td>Rs.17100</td>
                      </tr>
                      <tr>
                        <th scope="row">Jul to Aug</th>
                        <td>Rs.14550</td>
                        <td>Rs.13950</td>
                        <td>Rs.13650</td>
                      </tr>
                      <tr>
                        <th scope="row">Sep to Oct</th>
                        <td>Rs.18200</td>
                        <td>Rs.17450</td>
                        <td>Rs.17100</td>
                      </tr>
                    </tbody>
                  </table>
                <!-- table -->
            </div>
            <div class="container text-center" style="padding:10px;">
                <button type="button" class="btn btn-primary" ><a href="https://www.google.com/maps/dir/Rishikesh,+Uttarakhand/Sonprayag,+Uttarakhand/Badrinath,+Uttarakhand+246422/@30.7571461,79.1534933,9.52z/data=!3m1!4b1!4m20!4m19!1m5!1m1!1s0x39093e67cf93f111:0xcc78804a6f941bfe!2m2!1d78.2676116!2d30.0869281!1m5!1m1!1s0x390847eb09d88081:0xc0dddec6a4966363!2m2!1d78.9952754!2d30.6325757!1m5!1m1!1s0x39a78e9f973108e7:0xf05a8b5e0c71473!2m2!1d79.4937634!2d30.7433085!3e0" style="text-decoration: none; color:white;">Google Map</a></button>
                <button type="button" class="btn btn-primary" ><a href="travelagents.html"  style="text-decoration: none; color:white;">Travel Agents</a></button>
            </div>
        </div>
    </div>
    <!-- tour details -->

    <!-- itenary -->
    <div class="container" style="padding-bottom: 30px;">
        <h2 class="h2 text-center" style="padding: 20px;">ITENARY</h2>
        <h2 class="h2" style="padding-top: 30px;padding-left: 10px;padding-bottom: 7px;">Day 1</h2>
        <div class="row">
            <div class="col text-center">
                <img src="/images/tr11.jpeg" class="rounded" alt="...">
            </div>
            <div class="col overflow">
                
                <h3 class="h3">RISHIKESH</h3><br>
                <p class="overflow-auto">
                06:30 AM - 01:00 PM<br>

                (After morning tea, breakfast at Kaudiyala, see the famous Raghunath temple & confluence view of Alaknanda and Bhagirathi at Devprayag)<br>

                Location Name: Rishikesh<br>

                Rishikesh is a city in India’s northern state of Uttarakhand, in the Himalayan foothills beside the Ganges River. The river is considered holy, and the city is renowned as a center for studying yoga and meditation.<br></p>
            </div>
        </div>
        <h2 class="h2" style="padding-top: 30px;padding-left: 10px;padding-bottom: 7px;">DAY 2</h2>
        <div class="row">
            <div class="col text-center">
                <img src="/images/tr12.png" class="rounded" alt="...">
            </div>
            <div class="col overflow">
                
                <h3 class="h3">RUDRAPRAYAG</h3><br>
                <p class="overflow-auto">
                06:00 AM - 07:00 AM (Morning tea at Rudraprayag)<br>

                Location Name: Rudraprayag<br>
                
                After your morning tea, head to the next destination from Rudraprayag.<br>
                
                07:00 AM - 08:00 AM (Brief halt for breakfast & arrangement of pony / doli)<br>
                
                Location Name: Gaurikund<br></p>
            </div>
        </div>
        <h2 class="h2" style="padding-top: 30px;padding-left: 10px;padding-bottom: 7px;">DAY 3</h2>
        <div class="row">
            <div class="col text-center">
                <img src="/images/tr13.png" class="rounded" alt="...">
            </div>
            <div class="col overflow">
                
                <h3 class="h3">KEDARNATH</h3><br>
                <p class="overflow-auto">
                    08:00 AM - 01:00 PM(Morning pooja / darshan & tea / breakfast)<br>

                    Location Name: Kedarnath<br>
                    
                    Kedarnath is a town in the Indian state of Uttarakhand and has gained importance because of the Kedarnath temple. It is a nagar panchayat in Rudraprayag district. <br>
                    
                    01:00 PM - 02:00 PM (Lunch halt)<br>
                    
                    Location Name: Gaurikund<br></p>
            </div>
        </div>
        <h2 class="h2" style="padding-top: 30px;padding-left: 10px;padding-bottom: 7px;">DAY 4</h2>
        <div class="row">
            <div class="col text-center">
                <img src="/images/tr14.png" class="rounded" alt="...">
            </div>
            <div class="col overflow">
                
                <h3 class="h3">JOSHIMATH</h3><br>
                <p class="overflow-auto">
                    06:30 AM - 12:00 PM (After tea / breakfast enroute)<br>

                    Location Name: Rudraprayag<br>

                    Rudraprayag is the point of confluence of rivers Alaknanda and Mandakini.<br>

                    12:00 PM - 01:00 PM (Lunch break)<br>
                    Location Name: Joshimath<br>
                    Joshimath is one of the four ‘maths’ created by Adi Shankaracharya. Joshimath is the home of Shri Badrinath during winters.<br></p>
            </div>
        </div>
        <h2 class="h2" style="padding-top: 30px;padding-left: 10px;padding-bottom: 7px;">DAY 5</h2>
        <div class="row">
            <div class="col text-center">
                <img src="/images/tr15.png" class="rounded" alt="...">
            </div>
            <div class="col overflow">
                
                <h3 class="h3">BADRINATH TEMPLE</h3><br>
                <p class="overflow-auto">
                    12:00 PM - 01:00 PM (After morning darshan / pooja, visit Mana village)<br>

                    Location Name: Badrinath Temple<br>

                    Badrinath is the most sacred dhams of India. It is located at an elevation of 3,133mts above sea level in the Chamoli district of Uttarakhand state. This Dham was established by Adi Shankaracharya in the 9th century. The deity of Badrinath temple is Lord Vishnu. The temple is situated on the right bank of the holy Alaknanda River.<br></p>
            </div>
        </div>
        <h2 class="h" style="padding-top: 30px;padding-left: 10px;padding-bottom: 7px;">DAY 6</h2>
        <div class="row">
            <div class="col text-center">
                <img src="/images/tr16.png" class="rounded" alt="...">
            </div>
            <div class="col overflow">
                <h3 class="h3">RISHIKESH</h3><br>
                <p class="overflow-auto">
                    -06:30 am - 01:00 PM (After tea / breakfast enroute)<br>

                    Location Name: Joshimath<br>

                    Joshimath is the winter seat for Lord Badri.<br>

                    01:00 PM - 02:00 PM (Lunch halt)<br>
                    Location Name:  Rishikesh<br>
                    Rishikesh is a city in India’s northern state of Uttarakhand, in the Himalayan foothills beside the Ganges River.<br>
                </p>
            </div>
        </div>
        <div class="container text-center" style="padding:30px;">
            <button type="button" class="btn btn-primary" ><a href="" style="text-decoration: none; color:white;">DOWNLOAD</a></button>
            <button type="button" class="btn btn-primary" ><a href="accomodations.html"  style="text-decoration: none; color:white;">ACCOMODATION </a></button>
        </div>
    </div>
    <!-- itenary -->

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