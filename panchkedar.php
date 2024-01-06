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
        <img src="images/panchkedarbanner.jpg" class="img-fluid w-100" alt="Responsive image">
    </div>
    <!-- banner image -->

    <!-- panch kedar -->
    <div class="container">
        <h1 class="h1 text-center" style="padding: 30px;"><strong>P A N C H &nbsp; K E D A R</strong></h1>
        <p style="font-weight: 500;">Strewn across the state of Uttarakhand are numerous temples dedicated to several deities of the Hindu pantheon. Located in the Garhwal region of the state are five such revered shrines where Lord Shiva is worshipped. Collectively known as Panch Kedar (panch in Hindi means five), these temples are Kedarnath, Madhmaheshwar, Tungnath, Rudranath, Kalpnath.According to mythology, there are several renditions behind the formations of these five sites. As per popular belief, during one of the ages described in the ancient Hindu scriptures, the Pandava princes (characters from the Hindu epic Mahabharata) were advised to worship Lord Shiva in Uttarakhand as penance for the bloodshed caused in the war as mentioned in the epic Mahabharata. The legend goes that Lord Shiva was hiding from the Pandavas by taking the form of a buffalo but was identified by Bhima, one of the five Pandava brothers. On being recognised, the deity disappeared and manifested himself in five different locations in the Himalayas. It is said the each of these sites is dedicated to a part of the Lord - Kedarnath (the hump of Lord Shiva), Madhmaheshwar (His belly button), Tungnath (His arms), Rudranath (His face), Kalpeshwar (His jata or hair).
        </p>
    </div>
    <!-- panch kedar -->

    <!-- explore more -->
    <div class="container">
        <h1 class="h1 text-center" style="padding: 30px;"><strong>E X P L O R E &nbsp; M O R E</strong></h1>
    </div>
    <div class="container-fluid" id="panchkedarem">
        <!-- modalinexploremore -->
        <!-- Button trigger modal -->
        <a><img class="img-fluid rounded" id="img1" style="width: 220px; padding: 7px;" src="images/panchkedarexpm1.jpg" data-toggle="modal" data-target="#exampleModal1"></a>
        <a><img class="img-fluid rounded" id="img1" style="width: 220px; padding: 7px;" src="images/panchkedarexpm2.jpg" data-toggle="modal" data-target="#exampleModal2"></a>
        <a><img class="img-fluid rounded" id="img1" style="width: 220px; padding: 7px;" src="images/panchkedarexpm3.jpg" data-toggle="modal" data-target="#exampleModal3"></a>
        <a><img class="img-fluid rounded" id="img1" style="width: 220px; padding: 7px;" src="images/panchkedarexpm4.jpg" data-toggle="modal" data-target="#exampleModal4"></a>
        <a><img class="img-fluid rounded" id="img1" style="width: 220px; padding: 7px;" src="images/panchkedarexpm5.jpg" data-toggle="modal" data-target="#exampleModal5"></a>
        <!-- Modal1 -->
        <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">KEDARNATH</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <img src="images/panchkedarexpm1.jpg" alt="Kedarnath" class="w-100">
                    <p class="mt-4 font-weight-normal">Set in a spectacular background of snow-clad peaks and forests, Kedarnath temple is situated in the Rudraprayag district of Uttarakhand and occupies a prominent position among the Panch Kedar temples. The temple houses a conical shaped Shiva lingam which is considered to be the hump of Shiva. It is located at a height of 3,584 m. The trek till Kedarnath temple begins from Gaurikund and is an around 19-km uphill trek. It trek can be finished in 6-7 hours.</p>
                </div>
            </div>
            </div>
        </div>
        <!-- Modal 1 -->
        
        <!-- Modal2 -->
        <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">TUNGNATH</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <img src="images/panchkedarexpm2.jpg" alt="Kedarnath" class="w-100">
                    <p class="mt-4 font-weight-normal">One of the highest Shiva temples in the world, Tungnath lies at a height of 3,680 m in the Rudraprayag district. Lord Shiva's arms are said to have appear here. To reach here, pilgrims need to do a moderate trek of about 4 km from Chopta. While on the way, you will be able to see peaks such as Nanda Devi, Chowkhamba and Neelkanth.</p>
                </div>
            </div>
            </div>
        </div>
        <!-- Modal 2 -->

        <!-- Modal3 -->
        <div class="modal fade" id="exampleModal3" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">RUDRANATH</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <img src="images/panchkedarexpm3.jpg" alt="Kedarnath" class="w-100">
                    <p class="mt-4 font-weight-normal">A natural rock temple, situated at 2,286 m amid alpine meadows and thick forests of rhododendrons, here Lord Shiva is worshipped as 'Neelkanth Mahadev'. It is believed that here his face came up the ground. Sacred kunds (pools) such as Surya Kund, Chandra Kund, Tara Kund and Mana Kund exist around the temple. There are many trek routes till this temple, most of which start from Gopeshwar village. A 5-km travel via road till Sagar village followed by an approximately 20-km trek brings you to this temple. A 3-km road travel till Gangolgaon followed by 17-km uphill trek is another route. Yet another route from Gopeshwar is a 13-km route till Mandal, followed by 6-km trek till Anasuya Devi temple and another 20-km to reach the Rudranath temple. There are other routes from Joshimath (45 km) and Kalpeshwar as well.</p>
                </div>
            </div>
            </div>
        </div>
        <!-- Modal 3 -->

        <!-- Modal 4 -->
        <div class="modal fade" id="exampleModal4" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">MADHMAHESHWAR</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <img src="images/panchkedarexpm4.jpg" alt="Kedarnath" class="w-100">
                    <p class="mt-4 font-weight-normal">Situated at the height of about 3,289 m, it is said that in Madhmaheshwar or Madhyamaheswar the middle or navel part of Shiva emerged. Lying in a beautiful green valley in the Mansoona village of Garhwal Himalayas, the temple is encircled by spectacular snow-covered peaks of Kedarnath, Chaukhamba and Neelkantha. The trek till Madhyamaheswar begins from Uniana, about 18 km away from Ukhimath. There is provision for accommodation after trekking for 3 km at Ransi village, and at Gaundhar village after another 6 km. It is a total of a 19-km long trek.</p>
                </div>
            </div>
            </div>
        </div>
        <!-- Modal 4 -->

        <!-- Modal 5 -->
        <div class="modal fade" id="exampleModal5" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
            <div class="modal-dialog" role="document">
            <div class="modal-content">
                <div class="modal-header">
                <h5 class="modal-title" id="exampleModalLabel">KALPESHWAR</h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
                </div>
                <div class="modal-body">
                    <img src="images/panchkedarexpm5.jpg" alt="Kedarnath" class="w-100">
                    <p class="mt-4 font-weight-normal">The last and fifth temple in the list of Panch Kedar pilgrimage circuit, Kalpeshwar is the only temple among the sacred Panch Kedar temples that remains open throughout the year. The matted hairs of Lord Shiva are worshipped inside this temple. The Panch Kedar trail ends at Kalpeshwar (Kalpnath). Motorable roads connect Sagar village to Helang (about 58 km away) from where jeeps can be availed till Urgam. A couple of kilometre-long trekking path from Urgam leads to the temple. </p>
                </div>
            </div>
            </div>
        </div>
        <!-- Modal 5 -->



        <!-- modalinexploremore -->
    </div>
    <!-- explore more -->

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