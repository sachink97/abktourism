<!doctype html>
<html lang="en">
<head>
<!-- Required meta tags -->
<meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
<!-- Bootstrap CSS -->
<link href="css/style.css" type="text/css" rel="stylesheet" />
<link href="css/bootstrap-datepicker.css" type="text/css" rel="stylesheet" />
<!-- Favicon -->
<!-- Favicon and Touch Icons -->
<link href="images/favicon.png" rel="shortcut icon" type="image/png">
<link href="images/apple-touch-icon.png" rel="apple-touch-icon">
<link href="images/apple-touch-icon-72x72.png" rel="apple-touch-icon" sizes="72x72">
<link href="images/apple-touch-icon-114x114.png" rel="apple-touch-icon" sizes="114x114">
<link href="images/apple-touch-icon-144x144.png" rel="apple-touch-icon" sizes="144x144">
<title>Welcome to A.B.K Adventure And Tourism</title>

<!--header Start-->
<?php include("includes/header.php") ?>
<!--header End--> 

<!--Main Banner -->
<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <img class="d-block w-100" src="images/home-slider-01.png" alt="First slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/home-slider-01.png" alt="Second slide">
    </div>
    <div class="carousel-item">
      <img class="d-block w-100" src="images/home-slider-01.png" alt="Third slide">
    </div>
  </div>
  <a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>
<!--Main banner -->
<!--<section class="mt-lg-n9 mt-sm-0 pb-0 z-index-9 booking-search">
  <div class="container ">
    <div class="row shadow border-radius-3">
      <div class="col-md-12 np">
        <div class="feature-box h-100">
          <div class="tab_container">
            <input id="tab1" type="radio" name="tabs" checked>
            <label for="tab1"><i class="fas fa-utensils"></i><span>Hotels</span></label>
            <input id="tab2" type="radio" name="tabs">
            <label for="tab2"><i class="fas fa-helicopter"></i><span>Flights</span></label>
            <input id="tab3" type="radio" name="tabs">
            <label for="tab3"><i class="fas fa-car-side"></i><span>Cars</span></label>
            <input id="tab4" type="radio" name="tabs">
            <label for="tab4"><i class="fas fa-ship"></i><span>Cruises</span></label>
            <input id="tab5" type="radio" name="tabs">
            <label for="tab5"><i class="fas fa-route"></i><span>Tours</span></label>
            <section id="content1" class="tab-content">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-6 col-xs-12 padding8">
                  <div class="form-group"> <span class="fas fa-map-marker-alt"></span>
                    <input class="form-control" type="text" placeholder="City, Point of Interest or U.S. Zip Code">
                  </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 padding8">
                  <div class="form-group"> <span class="far fa-calendar-alt"></span>
                    <input class="form-control" type="text" id="datepicker" autocomplete="off" placeholder="Check-in">
                  </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 padding8">
                  <div class="form-group"> <span class="far fa-calendar-alt"></span>
                    <input class="form-control" type="text" id="datepicker-out" autocomplete="off" placeholder="Check-out">
                  </div>
                </div>
                <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12 padding8">
                  <div class="form-group">
                    <select class="custom-select select-big">
                      <option selected="">Rooms</option>
                      <option value="location1">01</option>
                      <option value="location2">02</option>
                      <option value="location3">03</option>
                      <option value="location4">04</option>
                      <option value="location5">05</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-1 col-md-6 col-sm-6 col-xs-12 padding8">
                  <div class="form-group">
                    <select class="custom-select select-big">
                      <option selected="">Guests</option>
                      <option value="location1">01</option>
                      <option value="location2">02</option>
                      <option value="location3">03</option>
                      <option value="location4">04</option>
                      <option value="location5">05</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 padding8">
                  <div class="form-group">
                    <button class="btn btn-primary btn-lg btn-grad" type="submit">Search</button>
                  </div>
                </div>
              </div>
            </section>
            <section id="content2" class="tab-content">
              <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 padding8">
                  <div class="form-group"> <span class="fas fa-map-marker-alt"></span>
                    <input class="form-control" type="text" placeholder="From : City, Airport, U.S. Zip">
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 padding8">
                  <div class="form-group"> <span class="fas fa-map-marker-alt"></span>
                    <input class="form-control" type="text" placeholder="To : City, Airport, U.S. Zip">
                  </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 padding8">
                  <div class="form-group"> <span class="far fa-calendar-alt"></span>
                    <input class="form-control" type="text" id="datepicker-1" autocomplete="off" placeholder="Departing">
                  </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 padding8">
                  <div class="form-group"> <span class="far fa-calendar-alt"></span>
                    <input class="form-control" type="text" id="datepicker-2" autocomplete="off" placeholder="Returning">
                  </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 padding8">
                  <div class="form-group">
                    <button class="btn btn-primary btn-lg btn-grad" type="submit">Search</button>
                  </div>
                </div>
              </div>
            </section>
            <section id="content3" class="tab-content">
              <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 padding8">
                  <div class="form-group"> <span class="fas fa-map-marker-alt"></span>
                    <input class="form-control" type="text" placeholder="Pick-up Location">
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 padding8">
                  <div class="form-group"> <span class="fas fa-map-marker-alt"></span>
                    <input class="form-control" type="text" placeholder="Drop-off Location">
                  </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 padding8">
                  <div class="form-group"> <span class="far fa-calendar-alt"></span>
                    <input class="form-control" type="text" id="datepicker-3" autocomplete="off" placeholder="Pick-up Date">
                  </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 padding8">
                  <div class="form-group"> <span class="far fa-calendar-alt"></span>
                    <input class="form-control" type="text" id="datepicker-4" autocomplete="off" placeholder="Drop-ff Date">
                  </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 padding8">
                  <div class="form-group">
                    <button class="btn btn-primary btn-lg btn-grad" type="submit">Search</button>
                  </div>
                </div>
              </div>
            </section>
            <section id="content4" class="tab-content">
              <div class="row">
                <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12 padding8">
                  <div class="form-group"> <span class="fas fa-map-marker-alt"></span>
                    <input class="form-control" type="text" placeholder="enter a destination or hotel name">
                  </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 padding8">
                  <div class="form-group"> <span class="far fa-calendar-alt"></span>
                    <input class="form-control" type="text" id="datepicker-5" autocomplete="off" placeholder="Departure Date">
                  </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 padding8">
                  <div class="form-group">
                    <select class="custom-select select-big">
                      <option selected="">Cruise Length</option>
                      <option value="location1">1-2 Night</option>
                      <option value="location2">2-3 Night</option>
                      <option value="location3">3-4 Night</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 padding8">
                  <div class="form-group">
                    <select class="custom-select select-big">
                      <option selected="">Cruise Line</option>
                      <option value="location1">Azamara Club Cruises</option>
                      <option value="location2">Celebrity Cruises</option>
                      <option value="location3">Cruise & Maritime</option>
                      <option value="location4">Oceania Cruises</option>
                      <option value="location5">Peter Deilmann Cruises</option>
                    </select>
                  </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 padding8">
                  <div class="form-group">
                    <button class="btn btn-primary btn-lg btn-grad" type="submit">Search</button>
                  </div>
                </div>
              </div>
            </section>
            <section id="content5" class="tab-content">
              <div class="row">
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 padding8">
                  <div class="form-group"> <span class="fas fa-map-marker-alt"></span>
                    <input class="form-control" type="text" placeholder="From : City, Airport, U.S. Zip">
                  </div>
                </div>
                <div class="col-lg-3 col-md-6 col-sm-6 col-xs-12 padding8">
                  <div class="form-group"> <span class="fas fa-map-marker-alt"></span>
                    <input class="form-control" type="text" placeholder="To : City, Airport, U.S. Zip">
                  </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 padding8">
                  <div class="form-group"> <span class="far fa-calendar-alt"></span>
                    <input class="form-control" type="text" id="datepicker-6" autocomplete="off" placeholder="Departing">
                  </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 padding8">
                  <div class="form-group"> <span class="far fa-calendar-alt"></span>
                    <input class="form-control" type="text" id="datepicker-7" autocomplete="off" placeholder="Returning">
                  </div>
                </div>
                <div class="col-lg-2 col-md-6 col-sm-6 col-xs-12 padding8">
                  <div class="form-group">
                    <button class="btn btn-primary btn-lg btn-grad" type="submit">Search</button>
                  </div>
                </div>
              </div>
              </p>
            </section>
          </div>
        </div>
      </div>
    </div>
  </div>
</section>-->
    
<section class="Categories pt80 pb60">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-8">
        <p class="subtitle text-secondary nopadding">MOST POPULAR CITIES</p>
        <h1 class="paddtop1 font-weight lspace-sm">Popular Destination</h1>
      </div>
      <div class="col-md-4 d-lg-flex align-items-center justify-content-end"><a href="#" class="blist text-sm ml-2"> See all cities<i class="fas fa-angle-double-right ml-2"></i></a></div>
    </div>
    <div class="loop owl-carousel owl-theme">
        <div class="item">
          <img src="images/most-destination-pic-01.jpg">
        </div>
        <div class="item">
          <img src="images/most-destination-pic-02.jpg">
        </div>
        <div class="item">
           <img src="images/most-destination-pic-03.jpg">
        </div>
        <div class="item">
           <img src="images/most-destination-pic-04.jpg">
        </div>
        <div class="item">
          <img src="images/most-destination-pic-05.jpg">
        </div>
        <div class="item">
          <img src="images/most-destination-pic-06.jpg">
        </div>
        <div class="item">
          <img src="images/most-destination-pic-07.jpg">
        </div>
        <div class="item">
          <img src="images/most-destination-pic-08.jpg">
        </div>
        <div class="item">
          <img src="images/most-destination-pic-09.jpg">
        </div>
        <div class="item">
          <img src="images/most-destination-pic-10.jpg">
        </div>
        <div class="item">
          <img src="images/most-destination-pic-11.jpg">
        </div>
        <div class="item">
          <img src="images/most-destination-pic-04.jpg">
        </div>
    </div>
      
  </div>
</section>




<section class="grayBG pt80 pb80">
  <div class="container ">
    <div class="row">
      <div class="col-md-8 mx-auto text-center mb-5">
        <h2 class="title text-center">Our Services</h2>
        <p>Sorem ipsum dolor sit amet, consectetur adipisicing Suscipit votas aperiam Sorem ipsum dolor consectur adipisicing elit.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3">
        <div class="feature-box h-100 text-center px-4 py-5">
          <div class="feature-box-icon"><img class="w-25" src="images/tour/check-mark.svg" alt=""></div>
          <h3 class="feature-box-title">Paragliding Booking</h3>
          <p class="feature-box-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean condimentum, eros eu tristique dictum, neque lorem laoreet purus</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="feature-box h-100 text-center px-4 py-5">
          <div class="feature-box-icon"><img class="w-25" src="images/tour/check-mark.svg" alt=""></div>
          <h3 class="feature-box-title">Ice Skating</h3>
          <p class="feature-box-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean condimentum, eros eu tristique dictum, neque lorem laoreet purus</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="feature-box h-100 text-center all-text-white bg-grad px-4 py-5 border-radius-3">
          <div class="feature-box-icon"><img class="w-25" src="images/tour/editor.svg" alt=""></div>
          <h3 class="feature-box-title">Bungee Jumping Book</h3>
          <p class="feature-box-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean condimentum, eros eu tristique dictum, neque lorem laoreet</p>
        </div>
      </div>
      <div class="col-md-3">
        <div class="feature-box h-100 text-center px-4 py-5">
          <div class="feature-box-icon"><img class="w-25" src="images/tour/envelope.svg" alt=""></div>
          <h3 class="feature-box-title">River Rafting</h3>
          <p class="feature-box-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit. Aenean condimentum, eros eu tristique dictum, neque lorem laoreet </p>
        </div>
      </div>
    </div>
  </div>
</section>







<!--<section class="Categories pt80 pb60 ">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-8">
        <p class="subtitle text-secondary nopadding">Stay and eat like a local</p>
        <h1 class="paddtop1 font-weight lspace-sm">Popular Hotels</h1>
      </div>
      <div class="col-md-4 d-lg-flex align-items-center justify-content-end"><a href="#" class="blist text-sm ml-2"> See all Hotels<i class="fas fa-angle-double-right ml-2"></i></a></div>
    </div>
    <div class="row">
      <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
        <div class="listroBox">
          <figure> <a href="hotel-detailed.html" class="wishlist_bt"></a> <a href="hotel-detailed.html"><img src="images/hotels/room5.jpg" class="img-fluid" alt="" >
            <div class="read_more"><span>Read more</span></div>
            </a> </figure>
          <div class="listroBoxmain">
            <h3><a href="hotel-detailed.html">Modern, Well-Appointed Room</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
            <a class="address" href="#">Get directions</a> </div>
          <ul>
            <li>
              <p class="card-text text-muted"><span class="h4 text-primary">$80</span> / night</p>
            </li>
            <li>
              <div class="R_retings">
                <div class="list-rat-ch list-room-rati"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
        <div class="listroBox">
          <figure> <a href="hotel-detailed.html" class="wishlist_bt"></a> <a href="hotel-detailed.html"><img src="images/hotels/room1.jpg" class="img-fluid" alt="" >
            <div class="read_more"><span>Read more</span></div>
            </a> </figure>
          <div class="listroBoxmain">
            <h3><a href="hotel-detailed.html">Modern, Well-Appointed Room</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
            <a class="address" href="#">Get directions</a> </div>
          <ul>
            <li>
              <p class="card-text text-muted"><span class="h4 text-primary">$80</span> / night</p>
            </li>
            <li>
              <div class="R_retings">
                <div class="list-rat-ch list-room-rati"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
        <div class="listroBox">
          <figure> <a href="hotel-detailed.html" class="wishlist_bt"></a> <a href="hotel-detailed.html"><img src="images/hotels/room2.jpg" class="img-fluid" alt="" >
            <div class="read_more"><span>Read more</span></div>
            </a> </figure>
          <div class="listroBoxmain">
            <h3><a href="hotel-detailed.html">Modern, Well-Appointed Room</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
            <a class="address" href="#">Get directions</a> </div>
          <ul>
            <li>
              <p class="card-text text-muted"><span class="h4 text-primary">$80</span> / night</p>
            </li>
            <li>
              <div class="R_retings">
                <div class="list-rat-ch list-room-rati"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
        <div class="listroBox">
          <figure> <a href="hotel-detailed.html" class="wishlist_bt"></a> <a href="hotel-detailed.html"><img src="images/hotels/room7.jpg" class="img-fluid" alt="" >
            <div class="read_more"><span>Read more</span></div>
            </a> </figure>
          <div class="listroBoxmain">
            <h3><a href="hotel-detailed.html">Modern, Well-Appointed Room</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
            <a class="address" href="#">Get directions</a> </div>
          <ul>
            <li>
              <p class="card-text text-muted"><span class="h4 text-primary">$80</span> / night</p>
            </li>
            <li>
              <div class="R_retings">
                <div class="list-rat-ch list-room-rati"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
        <div class="listroBox">
          <figure> <a href="hotel-detailed.html" class="wishlist_bt"></a> <a href="hotel-detailed.html"><img src="images/hotels/room8.jpg" class="img-fluid" alt="" >
            <div class="read_more"><span>Read more</span></div>
            </a> </figure>
          <div class="listroBoxmain">
            <h3><a href="hotel-detailed.html">Modern, Well-Appointed Room</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
            <a class="address" href="#">Get directions</a> </div>
          <ul>
            <li>
              <p class="card-text text-muted"><span class="h4 text-primary">$80</span> / night</p>
            </li>
            <li>
              <div class="R_retings">
                <div class="list-rat-ch list-room-rati"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
      <div class="col-lg-4 col-md-6 col-sm-12 col-xs-12">
        <div class="listroBox">
          <figure> <a href="hotel-detailed.html" class="wishlist_bt"></a> <a href="hotel-detailed.html"><img src="images/hotels/room6.jpg" class="img-fluid" alt="" >
            <div class="read_more"><span>Read more</span></div>
            </a> </figure>
          <div class="listroBoxmain">
            <h3><a href="hotel-detailed.html">Modern, Well-Appointed Room</a></h3>
            <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do</p>
            <a class="address" href="#">Get directions</a> </div>
          <ul>
            <li>
              <p class="card-text text-muted"><span class="h4 text-primary">$80</span> / night</p>
            </li>
            <li>
              <div class="R_retings">
                <div class="list-rat-ch list-room-rati"> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> <i class="fa fa-star" aria-hidden="true"></i> </div>
              </div>
            </li>
          </ul>
        </div>
      </div>
    </div>
  </div>
</section>-->

<!-- =======================
	service -->
<section class="service pt80 pb80 service-home">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-8 mx-auto">
        <div class="title text-center">
          <h2>Did you know <br>A.B.K Adventure and Tourism</h2>
          <p class="mb-0">A.B.K adventure and tourism Pvt. Ltd. is an online travel platform where determination and commitment has always exceeded traveler's expectation.</p>
        </div>
      </div>
    </div>
    <div class="row">
      <div class="col-md-3 mt-30">
        <div class="featureBox icon-grad h-100">
          <div class="feature-box-icon"><i class="fas fa-route"></i></div>
          <h3 class="feature-box-title">Best Travel Agent</h3>
          <p class="feature-box-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="col-md-3 mt-30">
        <div class="featureBox icon-grad h-100">
          <div class="feature-box-icon"><i class="fab fa-avianex"></i></div>
          <h3 class="feature-box-title">Trust & Safety</h3>
          <p class="feature-box-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="col-md-3 mt-30">
        <div class="featureBox icon-grad h-100">
          <div class="feature-box-icon"><i class="fas fa-bullhorn"></i></div>
          <h3 class="feature-box-title">Best Price Guarantee</h3>
          <p class="feature-box-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
      <div class="col-md-3 mt-30">
        <div class="featureBox icon-grad h-100">
          <div class="feature-box-icon"><i class="fas fa-bullhorn"></i></div>
          <h3 class="feature-box-title">Best Price Guarantee</h3>
          <p class="feature-box-desc">Lorem ipsum dolor sit amet, consectetur adipiscing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua.</p>
        </div>
      </div>
    </div>
  </div>
</section>
<!-- =======================
	service -->

<section class="Categories pt80 pb60 Categories-home">
  <div class="container">
    <div class="row mb-5">
      <div class="col-md-8">
        <p class="subtitle text-secondary nopadding">Stay and eat like a local</p>
        <h1 class="paddtop1 font-weight lspace-sm">Top Tours</h1>
      </div>
      <div class="col-md-4 d-lg-flex align-items-center justify-content-end"><a href="#" class="blist text-sm ml-2"> See all Cruises<i class="fas fa-angle-double-right ml-2"></i></a></div>
    </div>
    <div class="row">
      <div class="swiper-container guides-slider-home-cruises"> 
        <!-- Additional required wrapper-->
        <div class="swiper-wrapper"> 
          <!-- Slides-->
          
          <div class="swiper-slide h-auto px-2">
            <div class="listing-item ">
              <article class="TravelGo-category-listing fl-wrap">
                <div class="TravelGo-category-img"> <a href="hotel-detailed.html"><img src="images/1.jpg" alt=""></a>
                  <div class="TravelGo-category-opt">
                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                    <div class="rate-class-name">
                      <div class="score"><strong>Very Good</strong>27 Reviews </div>
                      <span>5.0</span> </div>
                  </div>
                </div>
                <div class="TravelGo-category-content fl-wrap title-sin_item">
                  <div class="TravelGo-category-content-title fl-wrap">
                    <div class="TravelGo-category-content-title-item">
                      <h3 class="title-sin_map"><a href="hotel-detailed.html">Asia & African Cruise</a></h3>
                      <div class="TravelGo-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> 27th Brooklyn New York, USA</a> <span>$ 200</span> </div>
                    </div>
                  </div>
                  <p>Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                  <ul class="facilities-list fl-wrap">
                    <li><i class="fas fa-wifi"></i><span>Free WiFi</span></li>
                    <li><i class="fas fa-parking"></i><span>Parking</span></li>
                    <li><i class="fas fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
                    <li><i class="fas fa-utensils"></i><span> Restaurant</span></li>
                  </ul>
                  <div class="TravelGo-category-footer fl-wrap">
                    <div class="TravelGo-category-price btn-grad"><span>2 days 3 nights</span></div>
                    <div class="TravelGo-opt-list"> <a href="#" class="single-map-item"><i class="fas fa-map-marker-alt"></i><span class="TravelGo-opt-tooltip">On the map</span></a> <a href="#" class="TravelGo-js-favorite"><i class="fas fa-heart"></i><span class="TravelGo-opt-tooltip">Save</span></a> <a href="#" class="TravelGo-js-booking"><i class="fas fa-retweet"></i><span class="TravelGo-opt-tooltip">Find Directions</span></a> </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
          <div class="swiper-slide h-auto px-2">
            <div class="listing-item ">
              <article class="TravelGo-category-listing fl-wrap">
                <div class="TravelGo-category-img"> <a href="hotel-detailed.html"><img src="images/2.jpg" alt=""></a>
                  <div class="TravelGo-category-opt">
                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                    <div class="rate-class-name">
                      <div class="score"><strong>Very Good</strong>27 Reviews </div>
                      <span>5.0</span> </div>
                  </div>
                </div>
                <div class="TravelGo-category-content fl-wrap title-sin_item">
                  <div class="TravelGo-category-content-title fl-wrap">
                    <div class="TravelGo-category-content-title-item">
                      <h3 class="title-sin_map"><a href="hotel-detailed.html">Asia & African Cruise</a></h3>
                      <div class="TravelGo-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> 27th Brooklyn New York, USA</a> <span>$ 200</span> </div>
                    </div>
                  </div>
                  <p>Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                  <ul class="facilities-list fl-wrap">
                    <li><i class="fas fa-wifi"></i><span>Free WiFi</span></li>
                    <li><i class="fas fa-parking"></i><span>Parking</span></li>
                    <li><i class="fas fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
                    <li><i class="fas fa-utensils"></i><span> Restaurant</span></li>
                  </ul>
                  <div class="TravelGo-category-footer fl-wrap">
                    <div class="TravelGo-category-price btn-grad"><span>2 days 3 nights</span></div>
                    <div class="TravelGo-opt-list"> <a href="#" class="single-map-item"><i class="fas fa-map-marker-alt"></i><span class="TravelGo-opt-tooltip">On the map</span></a> <a href="#" class="TravelGo-js-favorite"><i class="fas fa-heart"></i><span class="TravelGo-opt-tooltip">Save</span></a> <a href="#" class="TravelGo-js-booking"><i class="fas fa-retweet"></i><span class="TravelGo-opt-tooltip">Find Directions</span></a> </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
          <div class="swiper-slide h-auto px-2">
            <div class="listing-item ">
              <article class="TravelGo-category-listing fl-wrap">
                <div class="TravelGo-category-img"> <a href="hotel-detailed.html"><img src="images/3.jpg" alt=""></a>
                  <div class="TravelGo-category-opt">
                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                    <div class="rate-class-name">
                      <div class="score"><strong>Very Good</strong>27 Reviews </div>
                      <span>5.0</span> </div>
                  </div>
                </div>
                <div class="TravelGo-category-content fl-wrap title-sin_item">
                  <div class="TravelGo-category-content-title fl-wrap">
                    <div class="TravelGo-category-content-title-item">
                      <h3 class="title-sin_map"><a href="hotel-detailed.html">Asia & African Cruise</a></h3>
                      <div class="TravelGo-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> 27th Brooklyn New York, USA</a> <span>$ 200</span> </div>
                    </div>
                  </div>
                  <p>Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                  <ul class="facilities-list fl-wrap">
                    <li><i class="fas fa-wifi"></i><span>Free WiFi</span></li>
                    <li><i class="fas fa-parking"></i><span>Parking</span></li>
                    <li><i class="fas fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
                    <li><i class="fas fa-utensils"></i><span> Restaurant</span></li>
                  </ul>
                  <div class="TravelGo-category-footer fl-wrap">
                    <div class="TravelGo-category-price btn-grad"><span>2 days 3 nights</span></div>
                    <div class="TravelGo-opt-list"> <a href="#" class="single-map-item"><i class="fas fa-map-marker-alt"></i><span class="TravelGo-opt-tooltip">On the map</span></a> <a href="#" class="TravelGo-js-favorite"><i class="fas fa-heart"></i><span class="TravelGo-opt-tooltip">Save</span></a> <a href="#" class="TravelGo-js-booking"><i class="fas fa-retweet"></i><span class="TravelGo-opt-tooltip">Find Directions</span></a> </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
          <div class="swiper-slide h-auto px-2">
            <div class="listing-item ">
              <article class="TravelGo-category-listing fl-wrap">
                <div class="TravelGo-category-img"> <a href="hotel-detailed.html"><img src="images/4.jpg" alt=""></a>
                  <div class="TravelGo-category-opt">
                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                    <div class="rate-class-name">
                      <div class="score"><strong>Very Good</strong>27 Reviews </div>
                      <span>5.0</span> </div>
                  </div>
                </div>
                <div class="TravelGo-category-content fl-wrap title-sin_item">
                  <div class="TravelGo-category-content-title fl-wrap">
                    <div class="TravelGo-category-content-title-item">
                      <h3 class="title-sin_map"><a href="hotel-detailed.html">Asia & African Cruise</a></h3>
                      <div class="TravelGo-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> 27th Brooklyn New York, USA</a> <span>$ 200</span> </div>
                    </div>
                  </div>
                  <p>Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                  <ul class="facilities-list fl-wrap">
                    <li><i class="fas fa-wifi"></i><span>Free WiFi</span></li>
                    <li><i class="fas fa-parking"></i><span>Parking</span></li>
                    <li><i class="fas fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
                    <li><i class="fas fa-utensils"></i><span> Restaurant</span></li>
                  </ul>
                  <div class="TravelGo-category-footer fl-wrap">
                    <div class="TravelGo-category-price btn-grad"><span>2 days 3 nights</span></div>
                    <div class="TravelGo-opt-list"> <a href="#" class="single-map-item"><i class="fas fa-map-marker-alt"></i><span class="TravelGo-opt-tooltip">On the map</span></a> <a href="#" class="TravelGo-js-favorite"><i class="fas fa-heart"></i><span class="TravelGo-opt-tooltip">Save</span></a> <a href="#" class="TravelGo-js-booking"><i class="fas fa-retweet"></i><span class="TravelGo-opt-tooltip">Find Directions</span></a> </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
          <div class="swiper-slide h-auto px-2">
            <div class="listing-item ">
              <article class="TravelGo-category-listing fl-wrap">
                <div class="TravelGo-category-img"> <a href="hotel-detailed.html"><img src="images/5.jpg" alt=""></a>
                  <div class="TravelGo-category-opt">
                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                    <div class="rate-class-name">
                      <div class="score"><strong>Very Good</strong>27 Reviews </div>
                      <span>5.0</span> </div>
                  </div>
                </div>
                <div class="TravelGo-category-content fl-wrap title-sin_item">
                  <div class="TravelGo-category-content-title fl-wrap">
                    <div class="TravelGo-category-content-title-item">
                      <h3 class="title-sin_map"><a href="hotel-detailed.html">Asia & African Cruise</a></h3>
                      <div class="TravelGo-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> 27th Brooklyn New York, USA</a> <span>$ 200</span> </div>
                    </div>
                  </div>
                  <p>Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                  <ul class="facilities-list fl-wrap">
                    <li><i class="fas fa-wifi"></i><span>Free WiFi</span></li>
                    <li><i class="fas fa-parking"></i><span>Parking</span></li>
                    <li><i class="fas fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
                    <li><i class="fas fa-utensils"></i><span> Restaurant</span></li>
                  </ul>
                  <div class="TravelGo-category-footer fl-wrap">
                    <div class="TravelGo-category-price btn-grad"><span>2 days 3 nights</span></div>
                    <div class="TravelGo-opt-list"> <a href="#" class="single-map-item"><i class="fas fa-map-marker-alt"></i><span class="TravelGo-opt-tooltip">On the map</span></a> <a href="#" class="TravelGo-js-favorite"><i class="fas fa-heart"></i><span class="TravelGo-opt-tooltip">Save</span></a> <a href="#" class="TravelGo-js-booking"><i class="fas fa-retweet"></i><span class="TravelGo-opt-tooltip">Find Directions</span></a> </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
          <div class="swiper-slide h-auto px-2">
            <div class="listing-item ">
              <article class="TravelGo-category-listing fl-wrap">
                <div class="TravelGo-category-img"> <a href="hotel-detailed.html"><img src="images/6.jpg" alt=""></a>
                  <div class="TravelGo-category-opt">
                    <div class="listing-rating card-popup-rainingvis" data-starrating2="5"><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i><i class="fa fa-star"></i></div>
                    <div class="rate-class-name">
                      <div class="score"><strong>Very Good</strong>27 Reviews </div>
                      <span>5.0</span> </div>
                  </div>
                </div>
                <div class="TravelGo-category-content fl-wrap title-sin_item">
                  <div class="TravelGo-category-content-title fl-wrap">
                    <div class="TravelGo-category-content-title-item">
                      <h3 class="title-sin_map"><a href="hotel-detailed.html">Asia & African Cruise</a></h3>
                      <div class="TravelGo-category-location fl-wrap"><a href="#" class="map-item"><i class="fas fa-map-marker-alt"></i> 27th Brooklyn New York, USA</a> <span>$ 200</span> </div>
                    </div>
                  </div>
                  <p>Sed interdum metus at nisi tempor laoreet. Integer gravida orci a justo sodales.</p>
                  <ul class="facilities-list fl-wrap">
                    <li><i class="fas fa-wifi"></i><span>Free WiFi</span></li>
                    <li><i class="fas fa-parking"></i><span>Parking</span></li>
                    <li><i class="fas fa-smoking-ban"></i><span>Non-smoking Rooms</span></li>
                    <li><i class="fas fa-utensils"></i><span> Restaurant</span></li>
                  </ul>
                  <div class="TravelGo-category-footer fl-wrap">
                    <div class="TravelGo-category-price btn-grad"><span>2 days 3 nights</span></div>
                    <div class="TravelGo-opt-list"> <a href="#" class="single-map-item"><i class="fas fa-map-marker-alt"></i><span class="TravelGo-opt-tooltip">On the map</span></a> <a href="#" class="TravelGo-js-favorite"><i class="fas fa-heart"></i><span class="TravelGo-opt-tooltip">Save</span></a> <a href="#" class="TravelGo-js-booking"><i class="fas fa-retweet"></i><span class="TravelGo-opt-tooltip">Find Directions</span></a> </div>
                  </div>
                </div>
              </article>
            </div>
          </div>
        </div>
        <div class="swiper-pagination d-md-none"> </div>
      </div>
    </div>
  </div>
</section>




<section class="bg-light pt80 pb60 solutions">
  <div class="container">
    <div class="row">
      <div class="col-md-8 mx-auto text-center mb-5">
        <h2 class="title text-center">Why Choose Us</h2>
        <p>Sorem ipsum dolor sit amet, consectetur adipisicing Suscipit votas aperiam Sorem ipsum dolor consectur adipisicing elit.</p>
      </div>
    </div>
    <div class="row">
      <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
        <div class="shadow-hover h-100 bg-white px-5 pt-0 pb-5 text-center up-on-hover"> <span class="alt-font text-light-gray display-2 font-italic opacity-2">01</span> <span class="d-block mb-4"><i class="fas fa-road display-2 text-grad"></i></span> <a class="h5" href="#">Rail Booking</a> </div>
      </div>
      <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
        <div class="shadow-hover h-100 bg-white px-5 pt-0 pb-5 text-center up-on-hover"> <span class="alt-font text-light-gray display-2 font-italic opacity-2">02</span> <span class="d-block mb-4"><i class="fas fa-utensils display-2 text-grad"></i></span> <a class="h5" href="#">Hotel Booking</a> </div>
      </div>
      <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
        <div class="shadow-hover h-100 bg-white px-5 pt-0 pb-5 text-center up-on-hover"> <span class="alt-font text-light-gray display-2 font-italic opacity-2">03</span> <span class="d-block mb-4"><i class="fas fa-ticket-alt display-2 text-grad"></i></span> <a class="h5" href="#">Ticket Booking</a> </div>
      </div>
      <div class="col-sm-6 col-lg-3 mb-4 mb-lg-0">
        <div class="shadow-hover h-100 bg-white px-5 pt-0 pb-5 text-center up-on-hover"> <span class="alt-font text-light-gray display-2 font-italic opacity-2">04</span> <span class="d-block mb-4"><i class="fas fa-child display-2 text-grad"></i></span> <a class="h5" href="#">Amazing Tour</a> </div>
      </div>
    </div>
  </div>
</section>




<!--<section class="pricing pricing-center whiteBG pb60">
  <div class="container">
    <div class="row">
      <div class="col-12 col-lg-8 mx-auto mb-5">
        <div class="title text-center">
          <h2> Pricing Packages</h2>
          <p>Lorem ipsum dolor sit amet, consectetur adipisicing Suscipit votas aperiam Sorem ipsum dolor consectur adipisicing elit.</p>
        </div>
      </div>
    </div>
    <div class="row"> 
      
      <div class="col-md-4">
        <div class="pricing-box h-100">
          <h5>Honeymoon Package</h5>
          <div class="plan-price"> <span class="price text-grad"> <sup class="text-grad">$</sup>20 </span> / Day </div>
          <p>4 nights in  Honeymoon Suite.<br>
            Private luxury airport transfer.<br>
            Daily breakfast your suite.</p>
          <a class="btn btn-outline-light mt-4" href="#!">Order now!</a> </div>
      </div>
      
      <div class="col-md-4 ">
        <div class="pricing-box h-100 shadow no-border box">
          <div class="ribbon"><span>POPULAR</span></div>
          <h5>Family Package</h5>
          <div class="plan-price"> <span class="price text-grad"> <sup class="text-grad">$</sup>50 </span> / Day </div>
          <p>4 nights in  Honeymoon Suite.<br>
            Private luxury airport transfer.<br>
            Daily breakfast your suite.</p>
          <a class="btn btn-grad mt-4" href="#!">Order now!</a> </div>
      </div>
     
      <div class="col-md-4">
        <div class="pricing-box h-100">
          <h5>All Inclusive</h5>
          <div class="plan-price"> <span class="price text-grad"> <sup class="text-grad">$</sup>99 </span> / Day </div>
          <p>4 nights in  Honeymoon Suite.<br>
            Private luxury airport transfer.<br>
            Daily breakfast your suite.</p>
          <a class="btn btn-outline-light mt-4" href="#!">Order now!</a> </div>
      </div>
    </div>
  </div>
</section>-->



<!--footer  -->
<?php include("includes/footer.php") ?>
<!-- footer  --> 

<!-- Optional JavaScript --> 
<!-- jQuery first, then Popper.js, then Bootstrap JS --> 
<script src="js/jquery.min.js" type="text/javascript"></script> 
<script src="js/popper.min.js" type="text/javascript"></script> 
<script src="js/bootstrap.min.js" type="text/javascript"></script> 
<script src="js/functions.js" type="text/javascript"></script> 
<script src="js/owl.carousel.min.js" type="text/javascript"></script> 
<script src="js/slick.js" type="text/javascript"></script> 
<script src="js/swiper.min.js" type="text/javascript"></script> 
<script src="js/main.js" type="text/javascript"></script> 
<script src="js/jquery.fancybox.min.js" type="text/javascript"></script> 
<script src="js/bootstrap-datepicker.min.js" type="text/javascript"></script> 
<script src="js/jquery-ui.min.js" type="text/javascript"></script>
</body>

</html>