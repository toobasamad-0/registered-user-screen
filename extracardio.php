<?php
$con = new mysqli("localhost","root","","fitness hub");

// Check connection
if ($con->connect_error) {
  die("Failed to connect to MySQL: " .$con->connect_error);
  exit();
}
?>

<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bootstrap 5 Carousel Slider With Thumbnail</title>
	<link href="https://fonts.googleapis.com/css2?family=Moon+Dance&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
	<!-- <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet"> -->
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css"
     integrity="sha384-Gn5384xqQ1aoWXA+058RXPxPg6fy4IWvTNh0E263XmFcJlSAwiGgFAW/dAiS6JXm" crossorigin="anonymous">
	<link href="style.css" rel="stylesheet">
    <style>
/* navbar */
.navbar-brand{
    margin-top: 4px;
    margin-left: 7px;
    font-family: "Copperplate", "Papyrus", fantasy;
}
.nav-img{
    border: 10px;
}

/* top header */
#topshead{
    padding-left: 15px;
    padding-right: 20px;
    background-color: rgb(215, 219, 226);
}
#rights{
    margin-top: 3px;
    padding: 8px 26px;

}
#lefts{
    display: flex; 
    justify-content: end;
    margin: auto;
    padding: 8px;
    margin-top: 3px;
}
#leftpane{
    margin-right: 20px;
    text-decoration:none;
    color: black;
}
#ic{
    font-size: 1.8em;
    text-decoration:none;
    color: black;
}
        .center{
          display: block;
          padding-left:120px;
          padding-right:105px;
        margin-left: auto;
        margin-right: auto;
        }
        .carousel {
  position: relative;
  border-radius: 20px;
}
.img-fluid {
    max-width: 400px;
    height: 12rem;
}
.carousel-item img {
  object-fit: cover;
}
#carousel-thumbs {
  background: rgb(170, 211, 206);
  display: block;
  margin-left:auto;
  margin-right:auto;
  bottom: 0;
  left: 0;
  padding: 0 70px;
  right: 0;
}
#carousel-thumbs video {
  border: 5px solid transparent;
  cursor: pointer;
}
#carousel-thumbs video:hover {
  border-color: rgba(255,255,255,.3);
}
#carousel-thumbs .selected video {
  border-color: primary;
}
.carousel-control-prev,
.carousel-control-next {
  width: 50px;
}
@media all and (max-width: 767px) {
  .carousel-container #carousel-thumbs video {
    border-width: 3px;
  }
}
@media all and (min-width: 576px) {
  .carousel-container #carousel-thumbs {
    /* position: absolute; */
  }
}
@media all and (max-width: 576px) {
  .carousel-container #carousel-thumbs {
    background: #ccccce;
  }
}

/* overlay window */
.openBtn {
  background: #f1f1f1;
  border: none;
  padding: 10px 15px;
  font-size: 20px;
  cursor: pointer;
}

.openBtn:hover {
  background: #bbb;
}

.overlay {
  height: 100%;
  width: 100%;
  display: none;
  position: fixed;
  overflow-y: scroll;
  z-index: 1;
  top:;
  left: 0;
  background-color: rgb(0,0,0);
  background-color: rgba(0,0,0, 0.9);
}
.overlay::-webkit-scrollbar {
  display: none;
}

.overlay-content {
  position: relative;
  top: 5%;
  width: 80%;
  text-align: center;
  margin-top: 30px;
  margin: auto;
}

.overlay .closebtn {
  position: absolute;
  top: 20px;
  right: 45px;
  font-size: 60px;
  cursor: pointer;
  color: white;
}

.overlay .closebtn:hover {
  color: #ccc;
}


.overlay button {
  float: left;
  width: 20%;
  padding: 15px;
  background: #ddd;
  font-size: 17px;
  border: none;
  cursor: pointer;
}

.overlay button:hover {
  background: #bbb;
}
</style>
</head>
<body>

         <!-- NAVBAR -->
         <nav class="navbar navbar-expand-lg navbar-dark sticky-top " style="background-color: black;">
        <div class="container-fluid">
          <img class=" nav-img rounded-pill" src="logo.png" alt="logo" style="width:4%;">
          <a class="navbar-brand" href="#"><b>Fitness Hub</b></a>
          <button class="navbar-toggler" type="button" data-bs-toggle="collapse" data-bs-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
            <span class="navbar-toggler-icon"></span>
          </button>
          
          <div class="collapse navbar-collapse" id="navbarSupportedContent"></div>
            <ul class="navbar-nav ms-auto mb-2 mb-lg-0">
              <li class="nav-item">
                <a class="nav-link active" aria-current="page" href="http://localhost/project/login.php/">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/project/login.php/"><b> About</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/project/login.php/#blog"><b>Blogs</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/project/login.php/#faq"><b>FAQs</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/project/login%20form/index.php"><b>Login</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="http://localhost/project/login.php/#contact"><b>Contact Me</b></a>
              </li>
            </ul>
          </div>
        </div>
        </nav>
        

        <!-- Top header -->
        <section>
            <div class="top-header">
                <div id="topshead" class="row">
                    <div id="rights" class="col-sm-6">
                        <i id="ic" class="fas fa-user-circle"></i>
                    </div>
                    <div id="lefts" class="col-sm-6">
                        <a id="leftpane" href="#" onclick="openSearch()"><h5>Diet Plan</h5></a>
                        <a id="ic leftpane" style = "color:black;" href="cddp.png" download><i class="fas fa-download"></i></a>
                    </div>
                </div>
            </div>
        </section>


        <div id="myOverlay" class="overlay">
  <span class="closebtn" onclick="closeSearch()" title="Close Overlay">&times;</span>
  <div class="overlay-content">
    <form action="/action_page.php">
      <img src="cddp.png" alt="">
    </form>
  </div>
</div>

        <section>
            <h1 class="text-center mt-4" style="font-family: 'Moon Dance', cursive;"><dt>Cardio Exercises</dt></h1>
        </section>

<div class="container mt-4">
<div class="carousel-container position-relative row">
<div id="myCarousel" class="carousel slide border-dark rounded border-left border-right border-top" data-ride="carousel">
  <div class="carousel-inner">
    
  <div class="carousel-item active" data-slide-number="0">
      <!-- <img src="https://source.unsplash.com/Pn6iimgM-wo/1600x900/" class="d-block w-100" alt="..." data-remote="https://source.unsplash.com/Pn6iimgM-wo/" data-type="image" data-toggle="lightbox" data-gallery="example-gallery"> -->
    <div class="center">
        <div class = "boxed text-center font-weight-bold">Assisted Pushups</div>
      <video width="900" height="400" controls alt="..." data-toggle="lightbox" data-gallery="example-gallery">
    <source src="assistedpushups.mp4" type="video/mp4"> 
    </video>
    </div>
    </div>

    <div class="carousel-item" data-slide-number="1">
    <div class="center">
    <div class = "boxed text-center font-weight-bold">runches</div>
      <video width="900" height="400" controls alt="..." data-toggle="lightbox" data-gallery="example-gallery">
    <source src="crunches.mp4" type="video/mp4"> 
    </video>
    </div>
    </div>

    <div class="carousel-item" data-slide-number="2">
    <div class="center">
    <div class = "boxed text-center font-weight-bold">Deadlift</div>
      <video width="900" height="400" controls alt="..." data-toggle="lightbox" data-gallery="example-gallery">
    <source src="deadlift.mp4" type="video/mp4"> 
    </video>
    </div>
    </div>

    <div class="carousel-item" data-slide-number="3">
    <div class="center">
    <div class = "boxed text-center font-weight-bold">Decline Pushups</div>
      <video width="900" height="400" controls alt="..." data-toggle="lightbox" data-gallery="example-gallery">
    <source src="declinepushups.mp4" type="video/mp4"> 
    </video>
    </div>
    </div>

    <div class="carousel-item" data-slide-number="4">
    <div class="center">
    <div class = "boxed text-center font-weight-bold">Dumbell Curls</div>
      <video width="900" height="400" controls alt="..." data-toggle="lightbox" data-gallery="example-gallery">
    <source src="domblecurls.mp4" type="video/mp4"> 
    </video>
    </div>
    </div>

    <div class="carousel-item" data-slide-number="5">
    <div class="center">
    <div class = "boxed text-center font-weight-bold">Leg Raises</div>
      <video width="900" height="400" controls alt="..." data-toggle="lightbox" data-gallery="example-gallery">
    <source src="legraises.mp4" type="video/mp4"> 
    </video>
    </div>
    </div>

    <div class="carousel-item" data-slide-number="6">
    <div class="center">
    <div class = "boxed text-center font-weight-bold">Pushups</div>
      <video width="900" height="400" controls alt="..." data-toggle="lightbox" data-gallery="example-gallery">
    <source src="pushups.mp4" type="video/mp4"> 
    </video>
    </div>
    </div>

    <div class="carousel-item" data-slide-number="7">
    <div class="center">
    <div class = "boxed text-center font-weight-bold">Russian Twists</div>
      <video width="900" height="400" controls alt="..." data-toggle="lightbox" data-gallery="example-gallery">
    <source src="russiantwist.mp4" type="video/mp4"> 
    </video>
    </div>
    </div>

    <div class="carousel-item" data-slide-number="8">
    <div class="center">
    <div class = "boxed text-center font-weight-bold">Side Bridge</div>
      <video width="900" height="400" controls alt="..." data-toggle="lightbox" data-gallery="example-gallery">
    <source src="sidebridge.mp4" type="video/mp4"> 
    </video>
    </div>
    </div>

    <div class="carousel-item" data-slide-number="9">
    <div class="center">
    <div class = "boxed text-center font-weight-bold">Squats</div>
      <video width="900" height="400" controls alt="..." data-toggle="lightbox" data-gallery="example-gallery">
    <source src="squat.mp4" type="video/mp4"> 
    </video>
    </div>
    </div>

    <div class="carousel-item" data-slide-number="10">
    <div class="center">
    <div class = "boxed text-center font-weight-bold">Superman</div>
      <video width="900" height="400" controls alt="..." data-toggle="lightbox" data-gallery="example-gallery">
    <source src="superman.mp4" type="video/mp4"> 
    </video>
    </div>
    </div>

    <div class="carousel-item" data-slide-number="11">
    <div class="center">
    <div class = "boxed text-center font-weight-bold">Weighted Squats</div>
      <video width="900" height="400" controls alt="..." data-toggle="lightbox" data-gallery="example-gallery">
    <source src="weightedsquat.mp4" type="video/mp4"> 
    </video>
    </div>
    </div>


  </div>
</div>

<!-- Carousel Navigation -->
<div id="carousel-thumbs" class="carousel slide " data-ride="carousel">
  <div class="carousel-inner">
    <div class="carousel-item active">
      <div class="row mx-0">
        <div id="carousel-selector-0" class="thumb col-4 col-sm-2 px-1 py-2 selected" data-target="#myCarousel" data-slide-to="0">
          <video src="assistedpushups.mp4" class="img-fluid" alt="..."></video>
        </div>
        <div id="carousel-selector-1" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="1">
        <video src="crunches.mp4" class="img-fluid" alt="..."></video>
        </div>
        <div id="carousel-selector-2" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="2">
        <video src="deadlift.mp4" class="img-fluid" alt="..."></video>
        </div>
        <div id="carousel-selector-3" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="3">
        <video src="declinepushups.mp4" class="img-fluid" alt="..."></video>
        </div>
        <div id="carousel-selector-4" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="4">
        <video src="domblecurls.mp4" class="img-fluid" alt="..."></video>
        </div>
        <div id="carousel-selector-5" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="5">
        <video src="legraises.mp4" class="img-fluid" alt="..."></video>
        </div>
      </div>
    </div>
    <div class="carousel-item">
      <div class="row mx-0">
        <div id="carousel-selector-6" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="6">
        <video src="pushups.mp4" class="img-fluid" alt="..."></video>
        </div>
        <div id="carousel-selector-7" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="7">
        <video src="russiantwist.mp4" class="img-fluid" alt="..."></video>
        </div>
        <div id="carousel-selector-8" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="8">
        <video src="sidebridge.mp4" class="img-fluid" alt="..."></video>
        </div>
        <div id="carousel-selector-9" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="9">
        <video src="squat.mp4" class="img-fluid" alt="..."></video>
        </div>
        <div id="carousel-selector-10" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="10">
        <video src="superman.mp4" class="img-fluid" alt="..."></video>
        </div>
        <div id="carousel-selector-11" class="thumb col-4 col-sm-2 px-1 py-2" data-target="#myCarousel" data-slide-to="11">
        <video src="weightedsquat.mp4" class="img-fluid" alt="..."></video>
        </div>
        <div class="col-2 px-1 py-2"></div>
        <div class="col-2 px-1 py-2"></div>
      </div>
    </div>
  </div>
  <a class="carousel-control-prev" href="#carousel-thumbs" role="button" data-slide="prev">
    <span class="carousel-control-prev-icon" aria-hidden="true"></span>
    <span class="sr-only">Previous</span>
  </a>
  <a class="carousel-control-next" href="#carousel-thumbs" role="button" data-slide="next">
    <span class="carousel-control-next-icon" aria-hidden="true"></span>
    <span class="sr-only">Next</span>
  </a>
</div>

</div> <!-- /row -->
</div> <!-- /container -->
</body>
</html>

<script src="https://code.jquery.com/jquery-3.2.1.slim.min.js" integrity="sha384-KJ3o2DKtIkvYIK3UENzmM7KCkRr/rE9/Qpg6aAZGJwFDMVNA/GpGFF93hXpG5KkN" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.12.9/umd/popper.min.js" integrity="sha384-ApNbgh9B+Y1QKtv3Rn7W3mgPxhU9K/ScQsAP7hUibX39j7fakFPskvXusvfa0b4Q" crossorigin="anonymous"></script>
<script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js" integrity="sha384-JZR6Spejh4U02d8jOt6vLEHfe/JQGiRRSQQxSfFWpi1MquVdAyjUar5+76PVCmYl" crossorigin="anonymous"></script>

<script>

function openSearch() {
  document.getElementById("myOverlay").style.display = "block";
}

function closeSearch() {
  document.getElementById("myOverlay").style.display = "none";
}
    $('#myCarousel').carousel({
  interval: false
});
$('#carousel-thumbs').carousel({
  interval: false
});

// handles the carousel thumbnails
// https://stackoverflow.com/questions/25752187/bootstrap-carousel-with-thumbnails-multiple-carousel
$('[id^=carousel-selector-]').click(function() {
  var id_selector = $(this).attr('id');
  var id = parseInt( id_selector.substr(id_selector.lastIndexOf('-') + 1) );
  $('#myCarousel').carousel(id);
});
// Only display 3 items in nav on mobile.
if ($(window).width() < 575) {
  $('#carousel-thumbs .row div:nth-child(4)').each(function() {
    var rowBoundary = $(this);
    $('<div class="row mx-0">').insertAfter(rowBoundary.parent()).append(rowBoundary.nextAll().addBack());
  });
  $('#carousel-thumbs .carousel-item .row:nth-child(even)').each(function() {
    var boundary = $(this);
    $('<div class="carousel-item">').insertAfter(boundary.parent()).append(boundary.nextAll().addBack());
  });
}
// Hide slide arrows if too few items.
if ($('#carousel-thumbs .carousel-item').length < 2) {
  $('#carousel-thumbs [class^=carousel-control-]').remove();
  $('.machine-carousel-container #carousel-thumbs').css('padding','0 5px');
}
// when the carousel slides, auto update
$('#myCarousel').on('slide.bs.carousel', function(e) {
  var id = parseInt( $(e.relatedTarget).attr('data-slide-number') );
  $('[id^=carousel-selector-]').removeClass('selected');
  $('[id=carousel-selector-'+id+']').addClass('selected');
});
// when user swipes, go next or previous
$('#myCarousel').swipe({
  fallbackToMouseEvents: true,
  swipeLeft: function(e) {
    $('#myCarousel').carousel('next');
  },
  swipeRight: function(e) {
    $('#myCarousel').carousel('prev');
  },
  allowPageScroll: 'vertical',
  preventDefaultEvents: false,
  threshold: 75
});
/*
$(document).on('click', '[data-toggle="lightbox"]', function(event) {
  event.preventDefault();
  $(this).ekkoLightbox();
});
*/

$('#myCarousel .carousel-item img').on('click', function(e) {
  var src = $(e.target).attr('data-remote');
  if (src) $(this).ekkoLightbox();
});
</script>