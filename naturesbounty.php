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
        <img src="images/nb1.jpg" class="img-fluid w-100 h-50" alt="Responsive image">
    </div>
    <!-- banner image -->
    
    <!-- natures bounty -->
    <div class="container-fluid" style="padding-bottom: 30px;">
      <div class="container">
        <h1 class="h1 text-center shadow-lg card" style="padding: 30px;padding-top: 30px;margin-top:30px;"><strong>N A T U R E'S &nbsp; B O U N T Y</strong></h1>
        <div class="container shadow-lg card">
        <p class="m-3" style="color: black;">Untouched nature in all its splendour is what Uttarakhand offers visitors. The state has been blessed with gorgeous natural beauty. The fact that almost 45.43 per cent of its geographical area has a dense forest cover, makes it all the more remarkable. The state is host to the mighty Himalayas, which guarantee a rich growth of flora and fauna, a pleasant climate and a peaceful and serene environment. The many glaciers here are sources of some of the major rivers of India, including the Ganga and the Yamuna. Snow-covered mountain peaks, like Nanda Devi, Badrinath, and Kamet, offer stunning views, while oak, rhododendron, deodar, and pine forests leave one in awe.</p></div>
      </div>
    </div>
    <!-- natures bounty -->

    <!-- lakes -->
    <div class="container-fluid" style="background-image: url(images/nb8.jpg);padding-top: 30px;background-repeat: no-repeat;">
      <div class="container">
        <h1 class="h1 text-center shadow-lg card" style="padding: 30px;padding-top: 30px;margin-top:40px;"><strong>L A K E S</strong></h1>
        <div class="container row justify-content-center m-auto justify-content-center " style="padding-top: 30px;">
            <div class="col-lg-4 col-sm-6 p-3"><a>
              <figure class="figure1" style="overflow: hidden!important;">
                <img src="images/nb2.jpg" alt="" class="rounded img-fluid shadow-lg card" id="img2" data-toggle="modal" data-target="#exampleModal11">
              </figure></a>
              <!-- modal1 -->
              <div class="modal fade" id="exampleModal11" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Assan Barrage</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <img src="images/nb2.jpg" alt="" class="img-fluid w-100 p-1" ><br>
                        <div class="container">
                        <p class="text-left p-1 w-auto">Assan Barrage is a pristine blue-green lake, located about 40 km from Dehradun. This man-made lake is a birder’s paradise that lies at the confluence of Yamuna and Assan rivers. Almost 53 species of birds can be seen, including red-crested poacher, mallard, coot, pintail, common teal, tufted duck, etc. A bird-watching safari is a must while visiting here. The lake offers splendid boating opportunities. The best time to visit is in October, November, February and March. Assan Barrage is also called Dhalipur Lake.</p></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal1 -->
              <h2 class="h4 text-center card" style="padding: 6px;"><strong>Assan Barrage</strong></h2>
            </div>
            <div class="col-lg-4 col-sm-6 p-3"><a>
              <figure class="figure1" style="overflow: hidden!important;">
                <img src="images/nb3.jpg" alt="" class="rounded img-fluid shadow-lg card" id="img2" data-toggle="modal" data-target="#exampleModal12">
              </figure></a>
              <!-- modal2 -->
              <div class="modal fade" id="exampleModal12" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Bhimtal</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <img src="images/nb3.jpg" alt="" class="img-fluid w-100 p-1" ><br>
                        <div class="container">
                        <p class="text-left p-1 w-auto">Bhimtal is a quaint town, located around 20 km from the hill station of Nainital. It is best known for the Bhimtal lake, which is a glistening emerald pool surrounded by stunning hills and dense forests. Spread over a vast area, Bhimtal Lake is home to diverse aquatic fauna. In winters, it is visited by migratory birds. One of the best ways to explore the lake is by boating. Nal-Damyanti Tal is a serene spot near Bhimtal that is ideal for picnics. Bhimtal is pleasant throughout the year.</p></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal2 -->
              <h2 class="h4 text-center card" style="padding: 6px;"><strong>Bhimtal</strong></h2>
            </div>
            <div class="col-lg-4 col-sm-6 p-3"><a>
              <figure class="figure1" style="overflow: hidden!important;">
                <img src="images/nb4.jpg" alt="" class="rounded img-fluid shadow-lg card" id="img2" data-toggle="modal" data-target="#exampleModal13">
              </figure></a>
              <!-- modal3 -->
              <div class="modal fade" id="exampleModal13" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Naukuchia Tal</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <img src="images/nb4.jpg" alt="" class="img-fluid w-100 p-1" ><br>
                        <div class="container">
                        <p class="text-left p-1 w-auto">One of the most beautiful lakes in Uttarakhand, Naukuchiatal is located in the foothills of Kumaon, at a height of 1,219 m. This nine-cornered lake is only 20 km from Nainital. It is fed by an underwater spring, and surrounded by dense forests of oak. Naukuchiatal shelters abundant and diverse aquatic life and offers tourists a chance to experience nature at its most serene.  
                        </p></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal3 -->
              <h2 class="h4 text-center card" style="padding: 6px;"><strong>Naukuchia Tal</strong></h2>
            </div>
            <div class="col-lg-4 col-sm-6 p-3"><a>
              <figure class="figure1" style="overflow: hidden!important;">
                <img src="images/nb5.jpg" alt="" class="rounded img-fluid shadow-lg card" id="img2" data-toggle="modal" data-target="#exampleModal14">
              </figure></a>
              <!-- modal4 -->
              <div class="modal fade" id="exampleModal14" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Hemkund Lake</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <img src="images/nb5.jpg" alt="" class="img-fluid w-100 p-1" ><br>
                        <div class="container">
                        <p class="text-left p-1 w-auto">The pristine Hemkund Lake lies surrounded by seven snow-clad peaks, and nourished by glaciers from Saptrishi peaks and Hathi Parvat. Hemkund Lake lies at a height of 4329 m and is believed to be a pilgrimage site for the Sikhs, along with Gurudwara Hemkund Sahib. A small stream called Himganga emerges from this lake. The best time to visit here is from June to October.</p></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal4 -->
              <h2 class="h4 text-center card" style="padding: 6px;"><strong>Hemkund Lake</strong></h2>
            </div>
            <div class="col-lg-4 col-sm-6 p-3"><a>
              <figure class="figure1" style="overflow: hidden!important;">
                <img src="images/nb6.jpg" alt="" class="rounded img-fluid shadow-lg card" id="img2" data-toggle="modal" data-target="#exampleModal15">
              </figure></a>
              <!-- modal5 -->
              <div class="modal fade" id="exampleModal15" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Naini Lake</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <img src="images/nb6.jpg" alt="" class="img-fluid w-100 p-1" ><br>
                        <div class="container">
                        <p class="text-left p-1 w-auto">Naini Lake or Nainital Lake is one of the most important lakes in the Kumaon region. This lunar-shaped freshwater lake was formed from a depression in Nainital due to tectonic movements. It is nourished by fresh streams from the high reaches of the Himalayas. Naini Lake is surrounded by three mountain peaks - Naini Peak on the north-west; Tiffin Top on the south-west; snow-capped peaks on the north. Naini Lake is a tourist hotspot and is one of the best places to enjoy boating. From sail boats and paddle boats to yachts, there is a lot on offer here. The lake is fringed by great accommodation facilities and makes for a great birding spot.</p></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal5 -->
              <h2 class="h4 text-center card" style="padding: 6px;"><strong>Naini Lake</strong></h2>
            </div>
            <div class="col-lg-4 col-sm-6 p-3"><a>
              <figure class="figure1" style="overflow: hidden!important;">
                <img src="images/nb7.jpg" alt="" class="rounded img-fluid shadow-lg card" id="img2" data-toggle="modal" data-target="#exampleModal16">
              </figure></a>
              <!-- modal6 -->
              <div class="modal fade" id="exampleModal16" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Tehri Garhwal</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <img src="images/nb7.jpg" alt="" class="img-fluid w-100 p-1" ><br>
                        <div class="container">
                        <p class="text-left p-1 w-auto">Tehri Garhwal is perched at a height of 770 m above sea level. It is known for the popular Tehri Dam, a hydro-electric project centered near Tehri Town. The dam is located on the Bhagirathi river and is said to be the fifth-highest in the world. The nearby Tehri Lake is said to be one of the largest man-made lakes in Asia. Today, the lake is best known for adventure tourism. Visitors can enjoy jet skiing, hot air balloon rides, boating, zorbing, paragliding, hotdog ride, bandwagon boat ride, banana boat ride, etc.</p></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal6 -->
              <h2 class="h4 text-center card" style="padding: 6px;"><strong>Tehri Garhwal</strong></h2>
            </div>
        </div>
      </div>
    </div>
    <!-- lakes -->

    <!-- MOUNTAIN AND GLACIERS -->
    <div class="container-fluid" style="padding-bottom: 30px;background-image: url(images/nb9.jpg);padding-top: 30px;background-repeat: no-repeat;">
      <div class="container">
        <h1 class="h1 text-center shadow-lg card" style="padding: 30px;padding-top: 30px;margin-top:40px;"><strong>M O  U N T A I N &nbsp; A N D &nbsp; G L A C I E R S</strong></h1>
        <div class="container row justify-content-center m-auto justify-content-center " style="padding-top: 30px;">
            <div class="col-lg-4 col-sm-6 p-3"><a>
              <figure class="figure1" style="overflow: hidden!important;">
                <img src="images/nb10.jpg" alt="" class="rounded img-fluid shadow-lg card" id="img2" data-toggle="modal" data-target="#exampleModal21">
              </figure></a>
              <!-- modal1 -->
              <div class="modal fade" id="exampleModal21" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Bhagirathi Peak</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <img src="images/nb10.jpg" alt="" class="img-fluid w-100 p-1" ><br>
                        <div class="container">
                        <p class="text-left p-1 w-auto">Bhagirathi Peak can be found in the Garhwal Himalayas. It is a group of three peaks, Bhagirathi I (6,856 m), Bhagirathi II (6,512 m), and Bhagirathi III (6,454 m). The highest of these peaks dominates the valley to Gaumukh, which marks the end of the Gangotri Glacier and the origin of the Ganga river. The base camp for mountain expeditions to Bhagirathi is Nandanvan, a beautiful meadow dotted with alpine flora. The best time for expeditions is in the months of May, June and September.</p></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal1 -->
              <h2 class="h4 text-center card" style="padding: 6px;"><strong>Bhagirathi Peak</strong></h2>
            </div>
            <div class="col-lg-4 col-sm-6 p-3"><a>
              <figure class="figure1" style="overflow: hidden!important;">
                <img src="images/nb11.jpg" alt="" class="rounded img-fluid shadow-lg card" id="img2" data-toggle="modal" data-target="#exampleModal22">
              </figure></a>
              <!-- modal2 -->
              <div class="modal fade" id="exampleModal22" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Chandrashila peak</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <img src="images/nb11.jpg" alt="" class="img-fluid w-100 p-1" ><br>
                        <div class="container">
                        <p class="text-left p-1 w-auto">At around 4,000 m, the Chandrashila peak is the summit of the Chandranath Parvat on which the Tungnath temple is located. Chandrashila, literally meaning moon rock, is a majestic peak that offers a stunning panoramic view of the Himalayas, including Nanda Devi, Bandarpunch, Chaukhamba, and Kedar peak. According to legend, Chandrashila is the place where Lord Rama meditated after defeating Ravana. Another lore says that Moon-god or Chandra spent time here in penance. The simple stone temple is atop the peak is dedicated to Goddess Ganga. Chandrashila peak is a steep 1.5 km trek from Tungnath temple, which is around 3.5 km away from Chopta. It's a popular trekking route.</p></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal2 -->
              <h2 class="h4 text-center card" style="padding: 6px;"><strong>Chandrashila peak</strong></h2>
            </div>
            <div class="col-lg-4 col-sm-6 p-3"><a>
              <figure class="figure1" style="overflow: hidden!important;">
                <img src="images/nb12.jpg" alt="" class="rounded img-fluid shadow-lg card" id="img2" data-toggle="modal" data-target="#exampleModal23">
              </figure></a>
              <!-- modal3 -->
              <div class="modal fade" id="exampleModal23" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Chaukhamba</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <img src="images/nb12.jpg" alt="" class="img-fluid w-100 p-1" ><br>
                        <div class="container">
                        <p class="text-left p-1 w-auto">Located in the Garhwal Himalayas, Chaukhamba is one of the main mountain massifs in the Gangotri cluster. Roughly translated, it means four pillars, which point to its four majestic peaks. The highest peak, Chaukhamba I, lies on top of the Gangotri Glacier, at a height of 7,138 m. The other three peaks rise to a height of 7,088 m, 6,995 m, and 6,854 m, respectively. The best time for mountaineering expeditions is in June, July, August, and September.</p></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal3 -->
              <h2 class="h4 text-center card" style="padding: 6px;"><strong>Chaukhamba</strong></h2>
            </div>
        </div>
      </div>
    </div>
    <!-- mountains and glaciers -->

    <!-- UNESCO HERITAGE SITE -->
    <div class="container-fluid" style="padding-bottom: 30px;">
      <div class="container">
        <h1 class="h1 text-center shadow-lg card" style="padding: 30px;padding-top: 30px;margin-top:40px;"><strong>U N E S C O &nbsp; H E R I T  A G E &nbsp; S I T E</strong></h1>
        <div class="container row justify-content-center m-auto justify-content-center " style="padding-top: 30px;">
            <div class="col-lg-4 col-sm-6 p-3"><a>
              <figure class="figure1" style="overflow: hidden!important;">
                <img src="images/nb13.jpg" alt="" class="rounded img-fluid shadow-lg card" id="img2" data-toggle="modal" data-target="#exampleModal31">
              </figure></a>
              <!-- modal1 -->
              <div class="modal fade" id="exampleModal31" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                  <div class="modal-content">
                    <div class="modal-header">
                      <h5 class="modal-title" id="exampleModalLabel">Valley of Flowers</h5>
                      <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                      </button>
                    </div>
                    <div class="modal-body">
                        <img src="images/nb13.jpg" alt="" class="img-fluid w-100 p-1" ><br>
                        <div class="container">
                        <p class="text-left p-1 w-auto">The UNESCO World Heritage Site of Valley of Flowers lies against the backdrop of the majestic Zanskar range. It resembles an artist’s canvas and is flooded with colourful hues. It is surrounded by snow-clad mountains and glaciers, and lies at the conversion point of the Zanskar and the Eastern and the Western Himalayas. The valley comes alive in the months of August and September when thousands of flowers bloom. The best way to explore the valley is via trekking. Cascading waterfalls, sparkling streams, and flowery meadows make the challenging trek rewarding.</p></div>
                    </div>
                  </div>
                </div>
              </div>
              <!-- modal1 -->
              <h2 class="h4 text-center" ><strong>Valley of Flowers</strong></h2>
            </div>
        </div>
      </div>
    </div>
    <!-- UNESCO HERITAGE SITE -->

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