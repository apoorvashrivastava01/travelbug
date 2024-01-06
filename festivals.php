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
        <img src="images/bannerfestivals.jpg" class="img-fluid w-100 h-75" alt="Responsive image">
    </div>
    <!-- banner image -->

    <!-- voices and culture -->
    <div class="container">
        <h1 class="h1 text-center" style="padding: 30px;"><strong>V O I C E S &nbsp; A N D &nbsp; C U L T U R E</strong></h1>
        <P class="text-left font-weight-normal">Uttarakhand's diverse terrain offers several challenging routes for mountain biking. A very popular sport in the state, there are trails for beginners and professionals alike. In fact, the annual Ultimate Mountain Terrain Biking Championship, which is said to be Asia’s longest mountain bike race, is held here and draws participants from across the world. Read a traveller's cycling experience here</P>
        <h1 class="h1 text-center" style="padding: 30px;"><strong>F E S T I V A L S</strong></h1>
    </div>
    <!-- voices and culture -->
    <!-- FESTIVALS -->
    <div class="container" style="display: flex; justify-content: center;">
        <div class="container row justify-content-between m-auto justify-content-center " style="padding-bottom: 30px;">
            <div class="col-lg-4 col-sm-6 p-3 shadow rounded"><a>
              <figure class="figure1" style="overflow: hidden!important;">
                <img src="images/CHOPTA.jpg" alt="" class="rounded img-fluid" id="img2" data-toggle="modal" data-target="#exampleModal">
              </figure></a>
              <!-- modal0 -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">ANDURI UTSAV</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <img src="images/Anduri utsav.jpg" alt="" class="img-fluid w-100 p-1" ><br>

                        <p class="text-left p-1 w-auto font-weight-bold">Anduri Utsav or the butter festival is held in Raithal in Uttarkashi district every year to thank Lord Krishna for protecting cattle from evil forces while they were grazing in the open meadows of Dayara Bugyal. Generally held between August and September,  during this festival people smear each other with butter, milk and buttermilk.<p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal0 -->
              <h2 class="h4 text-center"><strong>ANDURI UTSAV</strong></h2>
            </div>
            <div class="col-lg-4 col-sm-6 p-3 shadow rounded"><a>
              <figure class="figure1" style="overflow: hidden!important;">
                <img src="images/Bat Savitri.jpg" alt="" class="rounded img-fluid" id="img2" data-toggle="modal" data-target="#exampleModal1">
              </figure></a>
              <!-- modal0 -->
              <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">BAT SAVITRI</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <img src="images/Bat Savitri.jpg" alt="" class="img-fluid w-100 p-1" ><br>

                        <p class="text-left p-1 w-auto font-weight-bold">Bat Savitri or Vat Savitri is a festival observed by married women, who fast through the day and pray for their husband's well-being. They offer prayers to Savitri, a legendary figure in Hindu mythology, who is said to have saved her husband from death. Prayers are also offered to the bat or vat (banyan) tree.<p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal0 -->
              <h2 class="h4 text-center"><strong>BAT SAVITRI</strong></h2>
            </div>
            <div class="col-lg-4 col-sm-6 p-3 shadow rounded"><a>
              <figure class="figure1" style="overflow: hidden!important;">
                <img src="images/Bhitauli_0.jpg" alt="" class="rounded img-fluid" id="img2" data-toggle="modal" data-target="#exampleModal2">
              </figure></a>
              <!-- modal0 -->
              <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">BHITAULI</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <img src="images/Bhitauli_0.jpg" alt="" class="img-fluid w-100 p-1" ><br>

                        <p class="text-left p-1 w-auto">A festival dedicated to married women of the state, Bhitauli is celebrated in the month of March or April. During this festival, a married woman's brother, parents or any other relative visit her and bring with them sweets, fruits and new clothes. A newly married girl receives her first Bhitauli in the month of Baisakh (April-May), after which it is given each year in the month of Chaitra.<p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal0 -->
              <h2 class="h4 text-center"><strong>BHITAULI</strong></h2>
            </div>
        </div>
    </div>
    <div class="container" style="display: flex; justify-content: center;">
        <div class="container row justify-content-between m-auto justify-content-center " style="padding-bottom: 30px;">
            <div class="col-lg-4 col-sm-6 p-3 shadow rounded"><a>
              <figure class="figure1" style="overflow: hidden!important;">
                <img src="images/CHOPTA.jpg" alt="" class="rounded img-fluid" id="img2" data-toggle="modal" data-target="#exampleModal">
              </figure></a>
              <!-- modal0 -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">ANDURI UTSAV</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <img src="images/Anduri utsav.jpg" alt="" class="img-fluid w-100 p-1" ><br>

                        <p class="text-left p-1 w-auto font-weight-bold">Anduri Utsav or the butter festival is held in Raithal in Uttarkashi district every year to thank Lord Krishna for protecting cattle from evil forces while they were grazing in the open meadows of Dayara Bugyal. Generally held between August and September,  during this festival people smear each other with butter, milk and buttermilk.<p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal0 -->
              <h2 class="h4 text-center"><strong>ANDURI UTSAV</strong></h2>
            </div>
            <div class="col-lg-4 col-sm-6 p-3 shadow rounded"><a>
              <figure class="figure1" style="overflow: hidden!important;">
                <img src="images/Bat Savitri.jpg" alt="" class="rounded img-fluid" id="img2" data-toggle="modal" data-target="#exampleModal1">
              </figure></a>
              <!-- modal0 -->
              <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">BAT SAVITRI</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <img src="images/Bat Savitri.jpg" alt="" class="img-fluid w-100 p-1" ><br>

                        <p class="text-left p-1 w-auto font-weight-bold">Bat Savitri or Vat Savitri is a festival observed by married women, who fast through the day and pray for their husband's well-being. They offer prayers to Savitri, a legendary figure in Hindu mythology, who is said to have saved her husband from death. Prayers are also offered to the bat or vat (banyan) tree.<p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal0 -->
              <h2 class="h4 text-center"><strong>BAT SAVITRI</strong></h2>
            </div>
            <div class="col-lg-4 col-sm-6 p-3 shadow rounded"><a>
              <figure class="figure1" style="overflow: hidden!important;">
                <img src="images/Bhitauli_0.jpg" alt="" class="rounded img-fluid" id="img2" data-toggle="modal" data-target="#exampleModal2">
              </figure></a>
              <!-- modal0 -->
              <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">BHITAULI</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <img src="images/Bhitauli_0.jpg" alt="" class="img-fluid w-100 p-1" ><br>

                        <p class="text-left p-1 w-auto">A festival dedicated to married women of the state, Bhitauli is celebrated in the month of March or April. During this festival, a married woman's brother, parents or any other relative visit her and bring with them sweets, fruits and new clothes. A newly married girl receives her first Bhitauli in the month of Baisakh (April-May), after which it is given each year in the month of Chaitra.<p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal0 -->
              <h2 class="h4 text-center"><strong>BHITAULI</strong></h2>
            </div>
        </div>
    </div>
    <div class="container" style="display: flex; justify-content: center;">
        <div class="container row justify-content-between m-auto justify-content-center " style="padding-bottom: 30px;">
            <div class="col-lg-4 col-sm-6 p-3 shadow rounded"><a>
              <figure class="figure1" style="overflow: hidden!important;">
                <img src="images/CHOPTA.jpg" alt="" class="rounded img-fluid" id="img2" data-toggle="modal" data-target="#exampleModal">
              </figure></a>
              <!-- modal0 -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">ANDURI UTSAV</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <img src="images/Anduri utsav.jpg" alt="" class="img-fluid w-100 p-1" ><br>

                        <p class="text-left p-1 w-auto font-weight-bold">Anduri Utsav or the butter festival is held in Raithal in Uttarkashi district every year to thank Lord Krishna for protecting cattle from evil forces while they were grazing in the open meadows of Dayara Bugyal. Generally held between August and September,  during this festival people smear each other with butter, milk and buttermilk.<p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal0 -->
              <h2 class="h4 text-center"><strong>ANDURI UTSAV</strong></h2>
            </div>
            <div class="col-lg-4 col-sm-6 p-3 shadow rounded"><a>
              <figure class="figure1" style="overflow: hidden!important;">
                <img src="images/Bat Savitri.jpg" alt="" class="rounded img-fluid" id="img2" data-toggle="modal" data-target="#exampleModal1">
              </figure></a>
              <!-- modal0 -->
              <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">BAT SAVITRI</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <img src="images/Bat Savitri.jpg" alt="" class="img-fluid w-100 p-1" ><br>

                        <p class="text-left p-1 w-auto font-weight-bold">Bat Savitri or Vat Savitri is a festival observed by married women, who fast through the day and pray for their husband's well-being. They offer prayers to Savitri, a legendary figure in Hindu mythology, who is said to have saved her husband from death. Prayers are also offered to the bat or vat (banyan) tree.<p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal0 -->
              <h2 class="h4 text-center"><strong>BAT SAVITRI</strong></h2>
            </div>
            <div class="col-lg-4 col-sm-6 p-3 shadow rounded"><a>
              <figure class="figure1" style="overflow: hidden!important;">
                <img src="images/Bhitauli_0.jpg" alt="" class="rounded img-fluid" id="img2" data-toggle="modal" data-target="#exampleModal2">
              </figure></a>
              <!-- modal0 -->
              <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">BHITAULI</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <img src="images/Bhitauli_0.jpg" alt="" class="img-fluid w-100 p-1" ><br>

                        <p class="text-left p-1 w-auto">A festival dedicated to married women of the state, Bhitauli is celebrated in the month of March or April. During this festival, a married woman's brother, parents or any other relative visit her and bring with them sweets, fruits and new clothes. A newly married girl receives her first Bhitauli in the month of Baisakh (April-May), after which it is given each year in the month of Chaitra.<p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal0 -->
              <h2 class="h4 text-center"><strong>BHITAULI</strong></h2>
            </div>
        </div>
    </div>
    <div class="container" style="display: flex; justify-content: center;">
        <div class="container row justify-content-between m-auto justify-content-center " style="padding-bottom: 30px;">
            <div class="col-lg-4 col-sm-6 p-3 shadow rounded"><a>
              <figure class="figure1" style="overflow: hidden!important;">
                <img src="images/CHOPTA.jpg" alt="" class="rounded img-fluid" id="img2" data-toggle="modal" data-target="#exampleModal">
              </figure></a>
              <!-- modal0 -->
              <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">ANDURI UTSAV</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <img src="images/Anduri utsav.jpg" alt="" class="img-fluid w-100 p-1" ><br>

                        <p class="text-left p-1 w-auto font-weight-bold">Anduri Utsav or the butter festival is held in Raithal in Uttarkashi district every year to thank Lord Krishna for protecting cattle from evil forces while they were grazing in the open meadows of Dayara Bugyal. Generally held between August and September,  during this festival people smear each other with butter, milk and buttermilk.<p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal0 -->
              <h2 class="h4 text-center"><strong>ANDURI UTSAV</strong></h2>
            </div>
            <div class="col-lg-4 col-sm-6 p-3 shadow rounded"><a>
              <figure class="figure1" style="overflow: hidden!important;">
                <img src="images/Bat Savitri.jpg" alt="" class="rounded img-fluid" id="img2" data-toggle="modal" data-target="#exampleModal1">
              </figure></a>
              <!-- modal0 -->
              <div class="modal fade" id="exampleModal1" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">BAT SAVITRI</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <img src="images/Bat Savitri.jpg" alt="" class="img-fluid w-100 p-1" ><br>

                        <p class="text-left p-1 w-auto font-weight-bold">Bat Savitri or Vat Savitri is a festival observed by married women, who fast through the day and pray for their husband's well-being. They offer prayers to Savitri, a legendary figure in Hindu mythology, who is said to have saved her husband from death. Prayers are also offered to the bat or vat (banyan) tree.<p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal0 -->
              <h2 class="h4 text-center"><strong>BAT SAVITRI</strong></h2>
            </div>
            <div class="col-lg-4 col-sm-6 p-3 shadow rounded"><a>
              <figure class="figure1" style="overflow: hidden!important;">
                <img src="images/Bhitauli_0.jpg" alt="" class="rounded img-fluid" id="img2" data-toggle="modal" data-target="#exampleModal2">
              </figure></a>
              <!-- modal0 -->
              <div class="modal fade" id="exampleModal2" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">BHITAULI</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <img src="images/Bhitauli_0.jpg" alt="" class="img-fluid w-100 p-1" ><br>

                        <p class="text-left p-1 w-auto">A festival dedicated to married women of the state, Bhitauli is celebrated in the month of March or April. During this festival, a married woman's brother, parents or any other relative visit her and bring with them sweets, fruits and new clothes. A newly married girl receives her first Bhitauli in the month of Baisakh (April-May), after which it is given each year in the month of Chaitra.<p>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal0 -->
              <h2 class="h4 text-center"><strong>BHITAULI</strong></h2>
            </div>
        </div>
    </div>

    <!-- FESTIVALS -->



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