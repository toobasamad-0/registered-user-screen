<?php
$con = new mysqli("localhost","root","","fitness hub");

// Check connection
if ($con->connect_error) {
  die("Failed to connect to MySQL: " .$con->connect_error);
  exit();
}
;
//echo '<script>setTimeout(() => window.open("http://localhost/project/bmi/bmi.php","_self"), 8000);</script>';
?>
<!-- <script>setTimeout(() => window.open('http://localhost/project/bmi/bmi.php',"_self"), 2000);</script> -->

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.1/dist/css/bootstrap.min.css" rel="stylesheet" 
        integrity="sha384-+0n0xVW2eSR5OomGNYDnhzAbDsOXxcvSN1TPprVMTNDbiYZCxYbOOl7+AMvyTG2x" crossorigin="anonymous">
    <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.15.3/css/all.min.css">
    <title>Document</title>
      <!-- <script scr="script.js"></script> -->
      <style>/* navbar */
.navbar-brand{
    margin-top: 4px;
    margin-left: 7px;
    font-family: Arial, Helvetica, sans-serif;
}
.nav-img{
    border: 10px;
}

/* image carousel */
.carousel-item{
  height: 600px;

}

/* carousel caption formatting */

.carousel-caption{
    width: 35%;
    margin-left: 30px;
    top: 130px;
    bottom: auto;
    transform: translate(-40%);
  }
#build{
  /* font-family: "Lucida Console", "Courier New", monospace; */
  font-family: 'Moon Dance', cursive;
   font-weight: bold; 
}
#hleft{
    font-family: Arial, Helvetica, sans-serif;
    text-align: left;
}
#f-cap{
    backdrop-filter: blur(5px);
    padding: 20px;
}
#left{
    text-align: left;
}
/* ABOUT */
:root{
  --blu: rgb(170, 211, 206);
  
}
#para{
  margin-left: 30px;
  margin-right: 30px;
  padding-top: 8px;
  font-size: 18px;
}
#about{
  padding: 20px;
  background: var(--blu);
  height: 380px;
  width: auto;
  clip-path: polygon(0 0,100% 0,100% 100%, 70% 85%, 0 100%)
}

.intro1{
    padding-top: 20px;
    padding-left: 40px;
    /* font-family: "Gill Sans", sans-serif; */
    text-align: left;
    font-weight: bold;
  }
.intro2{
    font-family: Georgia, serif;
    text-align: justify;
    text-justify: inter-word;
}
.intro{
  padding-bottom: 20px;
  /* font-family: "Gill Sans", sans-serif; */
  text-align: center;
  font-weight: bold;
}
/* DIVIDER */
hr.rounded {
  margin: auto;
  border-top: 8px solid rgb(0, 0, 0);
  border-radius: 5px;
  width: 100px;
}
/* Fitness Program */
.row {
  padding-left: 50px;
  padding-right: 50px;
  display: flex;
}

.column {
  flex: 50%;
}

@import url('https://fonts.googleapis.com/css?family=Poppins:400,500,600,700&display=swap');
@import url('https://fonts.googleapis.com/css2?family=Nunito:wght@400;800&display=swap');
  #im {
    transition: transform .2s; /* Animation */
    width: 100px;
    height: 200px;
    margin: 0 auto;
  }
  
  #im:hover {
    transform: scale(1.1); /* (150% zoom - Note: if the zoom is too large, it will go outside of the viewport) */
  }
  
.boxed{
  text-align: center;
  position: absolute;
  left: 0;
  right: 0;
  bottom: -30px;
  width: 80%;
  margin: 0 auto;
  background: rgb(255, 255, 255);
  padding: 20px;
  -webkit-box-shadow: 0 5px 15px rgb(0 0 0 / 10%);
  box-shadow: 0 5px 15px rgb(0 0 0 / 10%);
}
/* 
/* Style buttons */
.btn {
  background-color: DodgerBlue; /* Blue background */
  border: none; /* Remove borders */
  color: white; /* White text */
  padding: 12px 16px; /* Some padding */
  font-size: 20px; /* Set a font size */
  cursor: pointer; /* Mouse pointer on hover */
}
/* Darker background on mouse-over */
.btn:hover {
  /* background-color:rgb(205, 197, 211); */
  /* background: var(--blu); */
  background-color: rgb(215, 219, 226);
} 
/* fitness program heading */



.control {
  /* background-color: rgb(16, 14, 23); */
  font-family: 'Open Sans', sans-serif;
}

#flips {
  position: relative;
  height: 300px;
  width: 900px;
  padding-top: 20px;
  /* top: 1400px; */
  left: calc(50% - 570px);
  display: flex;
}

.cards {
  /* display: flex; */
  height: 280px;
  width: 300px;
  background-color: rgb(23, 20, 29);
  border-radius: 20px;
  box-shadow: -1rem 0 3rem rgb(0, 0, 0);
  margin-left: -50px;
  transition: 0.4s ease-out;
  position: relative;
  left: 0px;
}
#card1{
  margin-right: 30px;
}
#card2{
  margin-right: 30px;
}
#card3{
  margin-right: 30px;
}
.cards:not(:first-child) {
    margin-left: 15px;
}
.cards:hover {
  transform: translateY(-20px);
  transition: 0.4s ease-out;
}
.cards:hover ~ .card {
  position: relative;
  left: 50px;
  transition: 0.4s ease-out;
}
.title {
  color: white;
  font-weight: 300;
  position: absolute;
  left: 20px;
  top: 15px;
}

#imag{
    width: 100%;
    height: 100%;
    /* border-top-right-radius: 20px;
    border-top-left-radius: 20px; */
    border-radius: 20px;
}
.ok{
  /* padding-top: 4px; */
  display: flex;
  justify-content: center;
  margin: 2em;
}


.flip-card {
  background-color: transparent;
  width: 290px;
  height: 220px;
  perspective: 1000px;
}

.flip-card-inner {
  position: relative;
  width: 100%;
  height: 100%;
  text-align: center;
  transition: transform 0.6s;
  transform-style: preserve-3d;
  box-shadow: 0 4px 8px 0 rgba(0,0,0,0.2);
}

.flip-card:hover .flip-card-inner {
  transform: rotateY(180deg);
}

.flip-card-front, .flip-card-back {
  position: absolute;
  border-radius: 20px;
  width: 100%;
  height: 100%;
  -webkit-backface-visibility: hidden;
  backface-visibility: hidden;
}

.flip-card-front {
  background-color: rgb(250, 250, 250);
  color: black;
}

.flip-card-back {
  /* background-color:rgb(205, 197, 211);; */
  background-color: rgb(215, 219, 226);
  color: white;
  transform: rotateY(180deg);
}

/* flipcard text */
.fliphead{
  padding-top: 25px;
  font-family: cursive;
  font-size: 40px;
  color: navy;
  text-align: center;
  font-weight: bold;
}

.fliptext{
  padding-top: 10px;
  font-family: Georgia, serif;
  color: navy;
  font-weight: bold;
  font-size: 20px;
  text-align: center;
}
.fliptex{
  font-family: Georgia, serif;
  color: navy;
  font-size: 17px;
  text-align: center;
}

/* FAQs Styling */
#faq {
  border: 25px  rgb(10, 35, 68) solid;
  border-radius: 10px;
  font-family: "rubik", sans-serif;
}
#head1 {
  text-align: center;
  font-size: 28px;
}
.accordion {
  width: 800px;
  margin: 20px auto;
  color: black;
  background-color: white;
  padding: 45px 45px;
}
.accordion .container {
  position: relative;
  margin: 10px 10px;
}
.accordion .label {
  position: relative;
  padding: 3px 0;
  font-size: 18px;
  color: black;
  cursor: pointer;
}
.accordion .label::before {
  content: "+";
  color: black;
  position: absolute;
  /* top: 30%; */
  right: -5px;
  font-size: 30px;
  transform: translateX(-50%);
}
.accordion .content {
  position: relative;
  background: white;
  height: 0;
  padding-right: 20px;
  font-size: 15px;
  text-align: justify;
  /* width: 780px; */
  width: auto;
  overflow: hidden;
  transition: 0.55;
}
.accordion hr {
  width: 100;
  margin-left: 0;
  border: 1px solid grey;
}
.accordion .container.active .content {
  height: 100px;
}
.accordion  .active .label::before {
  content: "-";
  font-size: 30px;
}

/* Blogs Grids */
.item1 {
  padding: 20px;
  grid-area: head;
  background: rgb(215, 219, 226);
  border: black 2px solid;
  border-radius: 10px;
}
.item2 {
  padding: 20px;
  grid-area: main;
  background: rgb(215, 219, 226);
  border: black 2px solid;
  border-radius: 10px;
}
.item3 {
  padding: 20px;
  grid-area: side;
  background: rgb(215, 219, 226);
  border: black 2px solid;
  border-radius: 10px;
}

.btns {
  background-color: rgb(187, 201, 228); /*Blue background*/
  border: none; /* Remove borders */
  padding: 6px 16px; /* Some padding */
  border-radius: 15px;
  font-size: 15px; /* Set a font size */
  cursor: pointer; /* Mouse pointer on hover */
}
/* Darker background on mouse-over */
.btns:hover {
  background-color:rgb(215, 219, 226);
  border: 1px black solid;
} 

#grids{
  display: grid;
  grid-gap: 20px;
  grid-template-columns: 2fr 1fr 2fr 2fr;
  /* grid-template-rows: 200px 200px 200px; */
  grid-auto-rows: minmax(200px, auto);
	grid-template-areas:
    "side side head head"
    "side side main main";
}
#img-blog{
    width: 70%;
    height: 220px;
    display: block;
    margin-left: auto;
    margin-right: auto;
    /* padding: 15px; */
    border-radius: 20px;
    margin-bottom: 10px;
    box-shadow: 5px 5px 10px;
}


/* contact me  */

.icons {
  margin-top: 2.3em;
  display: flex;
  justify-content: center;
}
a:hover {
  cursor: pointer;
}
.icons i {
  opacity: 0.7;
  margin-left: 1.3em;
  font-size: 1.8em;
  transition: 0.2S;
  padding: 0.65em;
  border-radius: 50%;
  /* place-items: center; */
  background: rgb(187, 201, 228);
  box-shadow: -11px -11px 25px rgba(255, 255, 255, 0.35),11px 13px 25px rgba( 165,181, 208, 0.738227);
}
.icons i:hover {
  opacity: 1;
  border-radius: 50%;
  background: rgb(212, 219, 232);
  transform: scale(1.1);
  mix-blend-mode: normal;
  box-shadow: -11px -11px 22px rgba(255,
  255, 255, 0.524448),
  11px 13px 22px rgba( 166, 181, 208,
  0.929496),
  inset -11px -11px 28px rgba(255,
  255,255, 0.692936),
  inset 11px 11px 28px rgba( 166, 181,
  208, 0.856261);
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
                <a class="nav-link active" aria-current="page" href="#home">Home</a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#about"><b> About</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#blog"><b>Blogs</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#faq"><b>FAQs</b></a>
              </li>
              <li class="nav-item">
              <a class="nav-link" href="http://localhost/project/login%20form/index.php" target="_self"> <b>Login</b></a>
              </li>
              <li class="nav-item">
                <a class="nav-link" href="#contact"><b>Contact Me</b></a>
              </li>
            </ul>
          </div>
        </div>
        </nav>


        <!-- Image Carousel -->
        <div id="home" class="carousel slide" data-bs-ride="carousel">
          <!-- Indicators/dots -->
          <div class="carousel-indicators">
          <button type="button" data-bs-target="#demo" data-bs-slide-to="0" class="active"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="1"></button>
          <button type="button" data-bs-target="#demo" data-bs-slide-to="2"></button>
          </div>
      
          <!-- The slideshow/carousel -->
          <div class="carousel-inner">
          <div class="carousel-item active">
              <img src="main.jpg" alt="gym_2" class="d-block w-100 ">
              <div class="carousel-caption d-none d-md-block">
                <div class="container" id="f-cap">
                  <h1 id="build">Build Your Body Strong</h1>
                  <h5>“Physical fitness is the first requisite of happiness.” </h5>
                  <p>– Joseph Pilates</p>
                </div>
                  
              </div> 
          </div>
          <div class="carousel-item">
              <img src="food.jpg" alt="food_2" class="d-block w-100 ">
              <div class="carousel-caption d-none d-md-block">
                <div class="container" id="f-cap">
                  <h4 id="hleft"><b>Healthy Soul</b> </h4>
                  <h5 id="left">- Drink Water Before Anything Else </h5>
                  <h5 id="left">- Get Enough Sleep</h5>
                  <h5 id="left">- Wake Up Early</h5>
                  <h5 id="left">- Workout Daily</h5>
                </div>
                </div>
          </div>  
          <div class="carousel-item ">
              <img src="good.jpg" alt="gym_1" class="d-block w-100">
          </div>       
          
          </div>   
  
          <!-- Left and right controls/icons -->
          <button class="carousel-control-prev" type="button" data-bs-target="#demo" data-bs-slide="prev">
          <span class="glyphicon glyphicon-chevron-left "></span>    
          </button>
          <button class="carousel-control-next" type="button" data-bs-target="#demo" data-bs-slide="next">
          <span class="glyphicon glyphicon-chevron-right"></span>  
          </button>
      </div>

      <!-- ABOUT SECTION -->
      <section id="about">
        <div></div>
      <div class="intro1 container"><h1>Welcome to Fitness Hub</h1></div>
      <div class="intro2 container"><p id="para"> Fitness Hub is a premium website that allows users to get fitness and food advice. 
        It also lets users log activities, making it an ideal one-stop shop for fitness and dieting.  There are also integrated
         apps that you can use as part of your workout. Fitness website goes into some new areas 
        that we haven’t previously seen on this list. Examples include entire sections on specialty health diets, like
         diets or celiac, paleo and gluten-free diets. It also features entire sections on anti-inflammatory eating 
         and foods. Losing weight and getting into shape is hard. Thankfully, all of these websites can give you sound
          advice and a ton of information that can help you accomplish your fitness goals. The fitness websites that 
          keep customers coming back have some of the best web design techniques around for establishing their client 
          base and recruiting new members.
        </p></div>
</section>

        <!-- divider -->
        <div>
          <hr class="rounded mt-5">
        </div>

        <!-- Fitness Programs -->
        <section id="card" class="container p-4">
          <!-- cards -->
          <div class="intro container"><h1> Fitness Programs</h1></div>
          <div class="row">
              <div class="col-sm col-md-4">
                  <div class="card">
                      <img id="im" src="cardmen.jpg" alt="body_building" style="width:100%">
                      <div class="boxed border border-black">
                        <!-- if necessary -->
                        <a href="http://localhost/project/body%20building/body.php" target="_self" class="btn"><b>Body Building </b> 
                        <i class="fas fa-angle-double-right hvr-icon"></i></a>
                        </div>
                    </div>
                  </div>
      
              <div class="col-sm col-md-4">
                  <div class="card">
                      <img id="im" src="weightloss.jpg" alt="weight_loss" style="width:100%">
                      <div class="boxed border border-black">
                        <!-- <button class="btn"><b>Weight Loss </b><i class="fas fa-angle-double-right"></i></button>  -->
                        <a href="http://localhost/project/weight%20loss/weight.php" target="_self" class="btn"><b> Weight Loss </b> 
                        <i class="fas fa-angle-double-right hvr-icon"></i></a>
                        </div>
                    </div>
                  </div>
      
              <div class="col-sm col-md-4">
                  <div class="card">
                      <img id="im" src="cardwomen.jpg" alt="Cardio" style="width:100%" >
                      <div class="boxed border border-black">
                        <!-- <span><button class="btn"><b>Cardio </b><i class="fas fa-angle-double-right"></i></button></span>  -->
                        <a href="http://localhost/project/cardio/cardio.php" target="_self" class="btn"><b> Cardio </b> 
                        <i class="fas fa-angle-double-right hvr-icon"></i></a>
                        </div>
                    </div>
              </div>
          </div>
        </section>
          
        <!-- divider -->
        <div>
          <hr class="rounded mt-5">
        </div>

        <!-- INSTRUCTOR SECTION -->
      <section class="container">
      <div class="intro1 container mb-3"><h1>Instructors</h1></div>
      <div class="control" > 
        <div id="flips" class="container">
            <div id="card1" class="cards">
            <div class="ok">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                <img id="imag" src="bb-tr.jpg" alt="">
              </div>
              <div class="flip-card-back">
                <h1 class="fliphead" >Chris David</h1>
                <p class="fliptext">-Body Building Trainer</p>
                <!-- <p class="fliptex">Certified trainer to implement exercise -->
                  <!-- programs and motivate clients to reach their personal goals.</p> -->
              </div>
            </div>
          </div>
        
            </div>
          </div>
        
          <div id="card2" class="cards">
            <div class="ok">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                <img id="imag" src="wl-tr.jpg" alt="">
              </div>
              <div class="flip-card-back">
                <h1 class="fliphead">Emma Paul</h1>
                <p class="fliptext">-Weight Loss <br> Trainer</p>
                <!-- <p class="fliptex">Certified trainer to implement exercise
                   programs and motivate clients to reach their personal goals.</p> -->
              </div>
            </div>
          </div>
            </div> 
          </div>
        
          <div id="card3" class="cards">
            <div class="ok">
              <div class="flip-card">
                <div class="flip-card-inner">
                  <div class="flip-card-front">
                <img id="imag" src="cardio-tr.jpg" alt="">
              </div>
              <div class="flip-card-back">
                <h1 class="fliphead">John Doe</h1>
                <p class="fliptext">-Cardio <br> Trainer</p>
                <!-- <p class="fliptex">Certified trainer to implement exercise
                  programs and motivate clients to reach their personal goals.</p> -->
              </div>
            </div>
          </div>
            </div>
          </div>
        </div>
      </div>
      </section>


        <!-- divider -->
        <div >
          <hr class="rounded mt-5">
        </div>


        <!-- BLOGS PART -->
        <section class="container" id="blog">
          <div class="intro1 container"><h1>Blogs</h1></div>

          <div id="grids" class="grid-container mt-5">
            <div class="item1">
              <h2>ACE Insights Blog</h2>
              <h6>The American Council on Exercise’s blog has fitness articles on a variety of topics such as yoga, 
                strength training, and exercises for beginners. Articles are backed by guidelines and recommendations from the 
                American Council on Exercise.</h6>
              <!-- <p><a href="https://www.acefitness.org/education-and-resources/professional/expert-articles/"><b>Read more </b><i class="fas fa-angle-double-right hvr-icon"></i></a></p> -->
              <button class="btns"><a style="text-decoration: none;  color: navy;" href="https://www.acefitness.org/education-and-resources/professional/expert-articles/"><b>Read more </b><i class="fas fa-angle-double-right hvr-icon"></i></a></button>


            </div>
            <div class="item2">
              <h2>Eating Healthy Food</h2>
              <h6>Brittany Mullins, a holistic nutritionist, runs this site and shares healthy recipe creations focused
                 on whole foods. She also features articles on wellness and workouts. Learn about foods you should eat more of, foods to avoid, and the scientific reasoning behind everything the site teaches you.</h6>
              <button class="btns"><a style="text-decoration: none;  color: navy;" href="eatingbirdfood.com"> <b>Read more </b><i class="fas fa-angle-double-right hvr-icon"></i></a></button>


            </div>
            <div class="item3">
              <h2>Sleep Junkies</h2>
              <img id="img-blog" src="sleepjunk.jpg" alt="">
              <h6>High-quality sleep is essential to relieve stress and improve mental health. Sleep Junkies teaches users 
                how to improve sleep with research-backed articles and insights on how other wellness issues, such as anxiety
                , interact with sleep.</h6>
              <button class="btns"><a style="text-decoration: none; color: navy;" href="https://sleepjunkies.com/"><b>Read more </b><i class="fas fa-angle-double-right hvr-icon"></i></a></button>

            </div>
          </div>


        </section>
        


        <div>
          <hr class="rounded mt-5">
        </div>

        <!-- FAQ SECTION -->
        <section>
          <div class="intro1 container"><h1>Frequently Asked Questions (FAQs)</h1></div>
          <div>
            <div class="accordion-body">
              <div id="faq" class="accordion">
                <div>
                <h1 id="head1">Frequently Asked Questions</h1>
                <hr>
                <div class="container">
                  <div class="label">Who is codewithrandom</div>
                  <div class="content">My name is ankit ,i am 1st year student of bca and
          working on providing free content in frontend development and have a aim of providing
          most premium frontend development course free in 2022 March .</div>
                </div>
                <hr>
                <div class="container">
                  <div class="label">Who is codewithrandom</div>
                  <div class="content">My name is ankit ,i am 1st year student of bca and
          working on providing free content in frontend development and have a aim of providing
          most premium frontend development course free in 2022 March .</div>
                </div>
                <hr>
                <div class="container">
                  <div class="label">Who is codewithrandom</div>
                  <div class="content">My name is ankit ,i am 1st year student of bca and
          working on providing free content in frontend development and have a aim of providing
          most premium frontend development course free in 2022 March .</div>
                </div>
          </div>
            </div>
          </div>
          <!-- paste 2 more time -->
          </div>
        </section>

        <div>
          <hr class="rounded mt-4">
        </div>

        <!-- CONTACT ME -->
        <section class="container" id="contact">
        <div class="intro1 container"><h1>Contact Me</h1></div>
        <div id="cont" class=" mt-4 ">        
            
              <div class="icons">
                <a>
                  <h6><i class="fas fa-phone mb-4"></i>            0311-8330264</h6>
                </a>
                <a>
                  <h6><i class="fas fa-envelope mb-4"></i>            toobasamad2019@gmail.com</h6>
                </a>
            </div>
      
           </div>
        </section>



        <footer>
          <div class="text-center bg-dark text-light p-3">
              Copyrights &copy; Fitness Hub. All rights reserved.
          </div>
      </footer>


    <script>// FAQs

        const accordion = document.getElementsByClassName('container');
        for (i=0; i<accordion.length; i++) {
          accordion[i].addEventListener('click', function () {
          this.classList.toggle('active')
        })
}
</script>
</body>
</html>
