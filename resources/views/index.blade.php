<!DOCTYPE html>
<html lang="en">

<head>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
  <meta http-equiv="x-ua-compatible" content="ie=edge">
  <meta name="csrf-token" content="{{ csrf_token() }}">
  <meta name="yandex-verification" content="df12aac9d02782f4" />
  <title>Tefem</title>
  <!-- Font Awesome -->
  <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
  <!-- Bootstrap core CSS -->
  <link href="{{url('public/css/bootstrap.min.css')}}" rel="stylesheet">
  <!-- Material Design Bootstrap -->
  <link href="{{url('public/css/mdb.min.css')}}" rel="stylesheet">
  <!-- Your custom styles (optional) -->
  <link href="{{url('public/css/style.min.css')}}" rel="stylesheet">
  <link href="{{url('public/css/style.css')}}" rel="stylesheet">
  <link href="{{url('public/css/bootstrap.css')}}" rel="stylesheet" />
  <link rel="stylesheet" href="{{url('public/css/animate.css')}}">
  <link href="{{url('public/css/rotating-card.css')}}" rel="stylesheet" />
  <link href="https://netdna.bootstrapcdn.com/font-awesome/4.5.0/css/font-awesome.min.css" rel="stylesheet" />

  
</head>

<body>
  <div id="myNav" class="overlay">

  <!-- Button to close the overlay navigation -->
  <a href="javascript:void(0)" class="closebtn" onclick="closeNav()">&times;</a>

  <!-- Overlay content -->
  <div class="overlay-content">
    <a class="scroll"onclick="closeNav()"  href="#whoWe">About</a>
    <a class="scroll" onclick="closeNav()"  href="#Services">Services</a>
    <a class="scroll" onclick="closeNav()"  href="#gallery">Gallery</a>
    <a class="scroll" onclick="closeNav()"  href="{{url('/events')}}">Events</a>
    <a class="scroll" onclick="closeNav()"  href="#contact">Contact</a>
  </div>

</div>

<!-- Use any element to open/show the overlay navigation menu -->

  
  <!--Carousel Wrapper-->
  <div id="carousel-example-1z" class="carousel slide carousel-fade" data-ride="carousel">

    <!--Indicators-->
    <ol class="carousel-indicators">
      <li data-target="#carousel-example-1z" data-slide-to="0" class="active"></li>
      <li data-target="#carousel-example-1z" data-slide-to="1"></li>
      <li data-target="#carousel-example-1z" data-slide-to="2"></li>
    </ol>
    <!--/.Indicators-->


    <!--Slides-->
    <div class="carousel-inner" role="listbox">

      <!--First slide-->
      <div class="carousel-item active">
        <div id="intro" class="view parallax" style="background-image: url('{{url('public/images/attract.jpg')}}'); background-repeat: no-repeat; background-size: cover;">
  
                 <span>
        <img src="{{url('public/images/foc.png')}}" alt="Tefem" class="img-fluid wow zoomIn" data-wow-duration="2s" data-wow-delay="2s;" style="max-width: 200px; padding-left: 10px; ">
             </span>
          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->


            <div class="text-center white-text mx-5 wow fadeIn">
              <center>
                 <span onclick="openNav()">
         <span class="" style="font-size:30px;cursor:pointer; color:yellow; padding-left: 10px; color: #ff0000;" onclick="openNav()">&#9776;</span>
             </span>
              </center>
             
<div class="wow fadeIn" data-wow-duration="3s" data-wow-delay="3s;">
  
 <h2>
                <strong style="font-family: verdana;">The Female Media Network</strong>
              </h2>
            <center>
              <p class="mb-4 d-none d-md-block" style="width: 60%; font-family: verdana;">
                <strong>
                We need women at all levels, including the top, to change the 
              dynamic, reshape the conversation, to make sure women’s voices are heard and heeded, not overlooked and ignored</strong>
              </p>
            </center>

</div>
             

              <button onclick="window.location.href = '{{url('/register')}}';" class="btn" id="myBtn" style="background: #ff0000; border-radius: 10px; color: white; font-family: verdana;">
                Register now
                <i class="fas fa-user-friends ml-2"></i> </button>
              
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/First slide-->

      <!--Second slide-->
      <div class="carousel-item">
        <div class="view parallax" style="background-image: url('{{url('public/images/camera.jpg')}}'); background-repeat: no-repeat; background-size: cover;">
 <span>
        <img src="{{url('public/images/foc.png')}}" alt="Tefem" class="img-fluid" style="max-width: 200px; padding-left: 10px;">
             </span>
          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
           <center>
                 <span onclick="openNav()">
      <span class="" style="font-size:30px;cursor:pointer; color:yellow; padding-left: 10px; color: #ff0000;" onclick="openNav()">&#9776;</span>
             </span>
              </center>

              <h2>
                <strong>We Make Learning Fun</strong>
              </h2>

              <center>
                

              <p class="mb-4 d-none d-md-block" style="width: 60%; font-family: verdana">
                <strong>Fearlessness is like a muscle. I know from my own life that the more I exercise it the more natural it becomes to not let my fears run me</strong>

              </p>

              </center>

            <button onclick="window.location.href = '{{url('register')}}';" class="btn" id="myBtn" style="background: #ff0000; border-radius: 10px; color: white; font-family: verdana;">
                Register now
                <i class="fas fa-user-friends ml-2"></i> </button>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Second slide-->

      <!--Third slide-->
      <div class="carousel-item">
        <div class="view parallax" style="background-image: url('{{url('public/images/tefem3.jpg')}}'); background-repeat: no-repeat; background-size: cover;">

           <span>
        <img src="{{url('public/images/foc.png')}}" alt="Tefem" class="img-fluid" style=" max-width: 200px;" >
             </span>

          <!-- Mask & flexbox options-->
          <div class="mask rgba-black-light d-flex justify-content-center align-items-center">

            <!-- Content -->
            <div class="text-center white-text mx-5 wow fadeIn">
           <center>
                 <span onclick="openNav()">
        <span class="" style="font-size:30px;cursor:pointer; color:yellow; padding-left: 10px; color: #ff0000;" onclick="openNav()">&#9776;</span>
             </span>
              </center>

              <h2>
                <strong>Together we can achieve more</strong>
              </h2>

              <center>
                
                <p class="mb-4 d-none d-md-block" style="width: 60%; font-family: verdana">
                <strong>No one ever became a success without taking chances… One must be able to recognize the moment and seize it without delay. Things can only get better </strong>
              </p>


              </center>

               <button onclick="window.location.href = '{{url('register')}}';" class="btn" id="myBtn" style="background: #ff0000; border-radius: 10px; color: white; font-family: verdana;">
                Register now
                <i class="fas fa-user-friends ml-2"></i> </button>
            </div>
            <!-- Content -->

          </div>
          <!-- Mask & flexbox options-->

        </div>
      </div>
      <!--/Third slide-->

    </div>
    <!--/.Slides-->

    <!--Controls-->
    <a class="carousel-control-prev" href="#carousel-example-1z" role="button" data-slide="prev">
      <span class="carousel-control-prev-icon" aria-hidden="true"></span>
      <span class="sr-only">Previous</span>
    </a>
    <a class="carousel-control-next" href="#carousel-example-1z" role="button" data-slide="next">
      <span class="carousel-control-next-icon" aria-hidden="true"></span>
      <span class="sr-only">Next</span>
    </a>
    <!--/.Controls-->

  </div>
  <!--/.Carousel Wrapper-->


  <!--Main layout-->
  <main>
    <div class="container">

      <!--Section: Main info-->
      <section class="mt-5 wow fadeIn">

      <h6 class="title wow zoomIn" id="whoWe" data-wow-duration="2s" data-wow-duration="3s;" style="color: black; font-size: 40px;">
            Who we are
            <br>
            <small style="color: #ff0000;">The Female Media Network</small>
        </h6>

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <img src="{{url('public/images/tefem4.jpg')}}" class="img-fluid z-depth-1-half wow zoomIn" data-wow-duration="2s" data-wow-duration="3s;"
              alt="">

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4 wow zoomIn" data-wow-duration="2s" data-wow-duration="3s;">

            <!-- Main heading -->
            <h3 class="h3 mb-3" style="color:  #ff0000;">About TEFEM</h3>
            <p>The female media network <strong style="color:  #ff0000;">(TEFEM)</strong>, is a Non Governmental Organization
            setup by a team of prominent creatives, led by Eneh Mercy, photographer
            and brand identity designer, with the aim of improving the standard of 
            living of ladies through media. 
          </p>

            <p>The Female Media Network</p>
            <!-- Main heading -->

            <hr>

            <p>
              <strong>Our Vision</strong> is
              To inspire, train and develop ladies who have 
              passion for media by improving their creative 
              skills and getting them connected to platforms 
              where they can be monitored, financed and empowered, 
              thereby increasing their standard of living 
              and touching many lives. <br />
            
              <strong>Our Mission</strong>
              To reach out to a minimum of 7000 ladies in the next 4 years,
              to get to all institutes in Nigeria and beyond,
              to inspire young entrepreneurs, by organizing conferences, workshops and seminars annually.
            </p>

            <!-- CTA -->
            <a target="_blank" href="{{url('register')}}" class="btn" style="background: #ff0000; border-radius: 20px; color: white;">
                REGISTER Now
                <i class="fas fa-user-friends ml-2"></i>
              </a>

          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Main info-->

      <hr class="my-5">

<section>

<div class="container">

<h2 id="Services" class="title" style="color: black; font-size: 40px; wow zoomIn" data-wow-duration="2s" data-wow-duration="3s;">
            What we offer
            <br>
            <small style="color: #ff0000;">The Female Media Network</small>
        </h2>

  <div class="row">
   <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-duration="2s" data-wow-duration="3s;">
             <div class="card-container manual-flip">
                <div class="card">
                    <div class="front">
                        <div class="cover">
                            <img src="{{url('public/images/abc.jpg')}}"/>
                        </div>
                        <div class="user">
                            <img class="img-circle" src="{{url('public/images/124.jpg')}}"/>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h3 class="name">Learn</h3>
                                <p class="profession font-weight-bold">Graphics</p>
                                <p class="text-center">"You will be familiar with the <br>fundamentals of design and  <br> how design works"</p>
                            </div>
                            <div class="footer">
                                <button class="btn-simple" onclick="rotateCard(this)" style="color:red; border: none; background-color: transparent;">
                                    <i class="fa fa-mail-forward"></i> See more
                                </button>
                            </div>
                        </div>
                    </div> <!-- end front panel -->
                    <div class="back">
                        <div class="header">
                            <h5 class="motto red-text">"The Female Media Network"</h5>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h4 class="text-center">How you will be trained</h4>
                                <p class="text-center">You will be engaged in a 6weeks accelaration program with intensive learning</p>

                                <div class="stats-container">
                                    <div class="stats">
                                        <h4>3</h4>
                                        <p>
                                            Tutors
                                        </p>
                                    </div>
                                    <div class="stats">
                                        <h4>500+</h4>
                                        <p>
                                            Followers
                                        </p>
                                    </div>
                                    <div class="stats">
                                        <h4>4</h4>
                                        <p>
                                            Projects 
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="footer">
                            <button class="btn btn-simple" rel="tooltip" title="Flip Card" onclick="rotateCard(this)">
                                <i class="fa fa-reply"></i> Back
                            </button>
                        </div>
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
            </div> <!-- end card-container -->
        </div> <!-- end col sm 3 -->

<div class="col-md-4 col-sm-6 wow zoomIn" data-wow-duration="2s" data-wow-duration="3s;">
             <div class="card-container manual-flip">
                <div class="card">
                    <div class="front">
                        <div class="cover">
                            <img src="{{url('public/images/camera-coffee.jpg')}}"/>
                        </div>
                        <div class="user">
                            <img class="img-circle" src="{{url('public/images/accounting.jpg')}}"/>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h3 class="name">Learn</h3>
                                <p class="profession font-weight-bold">Content Development</p>
                                <p class="text-center">"Every business needs good <br> and quality content in <br> other to succeed"</p>
                            </div>
                            <div class="footer">
                                <button class="btn-simple" onclick="rotateCard(this)" style="color:red; border: none; background-color: transparent;">
                                    <i class="fa fa-mail-forward"></i> See more
                                </button>
                            </div>
                        </div>
                    </div> <!-- end front panel -->
                    <div class="back">
                        <div class="header">
                            <h5 class="motto red-text">"The Female Media Network"</h5>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h4 class="text-center">How you will be trained</h4>
                                <p class="text-center">You will be engaged in a 6weeks accelaration program with intensive learning/p>

                                <div class="stats-container">
                                    <div class="stats">
                                        <h4>2</h4>
                                        <p>
                                          Tutors
                                        </p>
                                    </div>
                                    <div class="stats">
                                        <h4>500+</h4>
                                        <p>
                                            Followers
                                        </p>
                                    </div>
                                    <div class="stats">
                                        <h4>2</h4>
                                        <p>
                                            Projects
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="footer">
                            <button class="btn btn-simple" rel="tooltip" title="Flip Card" onclick="rotateCard(this)">
                                <i class="fa fa-reply"></i> Back
                            </button> 
                            
                        </div>
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
            </div> <!-- end card-container -->
        </div> <!-- end col sm 3 -->

        <div class="col-md-4 col-sm-6 wow zoomIn" data-wow-duration="2s" data-wow-duration="3s;">
             <div class="card-container manual-flip">
                <div class="card">
                    <div class="front">
                        <div class="cover">
                            <img src="{{url('public/images/blur.jpg')}}"/>
                        </div>
                        <div class="user">
                            <img class="img-circle" src="{{url('public/images/123.jpg')}}"/>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h3 class="name">Learn</h3>
                                <p class="profession font-weight-bold">Photography</p>
                                <p class="text-center">"Capturing beautiful <br>moments pays alot At Tefem  <br>we will teach what works"</p>
                            </div>
                            <div class="footer">
                                <button class="btn-simple" onclick="rotateCard(this)" style="color:red; border: none; background-color: transparent;">
                                    <i class="fa fa-mail-forward"></i> See more
                                </button>
                            </div>
                        </div>
                    </div> <!-- end front panel -->
                    <div class="back">
                        <div class="header">
                            <h5 class="motto red-text">"THE Female Media Network"</h5>
                        </div>
                        <div class="content">
                            <div class="main">
                                <h4 class="text-center">How you will be trained</h4>
                                <p class="text-center">You will be engaged in a 6weeks accelaration program with intensive learning</p>

                                <div class="stats-container">
                                    <div class="stats">
                                        <h4>5</h4>
                                        <p>
                                            Tutors
                                        </p>
                                    </div>
                                    <div class="stats">
                                        <h4>500+</h4>
                                        <p>
                                            Following
                                        </p>
                                    </div>
                                    <div class="stats">
                                        <h4>4</h4>
                                        <p>
                                            Projects
                                        </p>
                                    </div>
                                </div>

                            </div>
                        </div>
                        <div class="footer">
                            <button class="btn btn-simple" rel="tooltip" title="Flip Card" onclick="rotateCard(this)">
                                <i class="fa fa-reply"></i> Back
                            </button>
                        </div>
                    </div> <!-- end back panel -->
                </div> <!-- end card -->
            </div> <!-- end card-container -->
        </div> <!-- end col sm 3 -->

      </div>
    </div>
</section>



<hr>

<br>
<section>


<div class="container">

  <h5 id="gallery" class="title black-text wow zoomIn" data-wow-duration="2s" data-wow-duration="3s;">
            Beautiful moments
        
        </h5>
  <div class="row">
  
<div class="col-md-4 mb-1">
  <center>
              <img class="img-circle wow zoomIn" data-wow-duration="2s" data-wow-duration="3s;" src="{{url('public/images/enehmercy.jpeg')}}" style="border-radius: 80px;" />
            </center>
            
            <h4 class="my-4 red-text text wow zoomIn" data-wow-duration="2s" data-wow-duration="3s;" style="text-align: center;">Meet Eneh Mercy</h4>
            <p class="black-text wow zoomIn" data-wow-duration="2s" data-wow-duration="3s;" style="padding-left: 10px; text-align: center; border-left: 1px solid red; border-radius: 10px; ">A photographer, visual designer, brand influencer and founder of the female media network. She has a vision of epowering over 7000+ ladies. This network was born out of her strong desire to improve the standard of living of the girl child. </p>
        </div>

        <div class="col-md-8">


<!-- Container for the image gallery -->
<div class="container1 wow zoomIn" data-wow-duration="2s" data-wow-duration="3s;">

  <!-- Full-width images with number text -->
  <div class="mySlides">
    <div class="numbertext">1 / 6</div>
      <img src="{{url('public/images/family2.jpg')}}" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">2 / 6</div>
      <img src="{{url('public/images/family1.jpg')}}" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">3 / 6</div>
      <img src="{{url('public/images/tefem3.jpg')}}" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">4 / 6</div>
      <img src="{{url('public/images/family3.jpg')}}" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">5 / 6</div>
      <img src="{{url('public/images/tefem1.jpg')}}" style="width:100%">
  </div>

  <div class="mySlides">
    <div class="numbertext">6 / 6</div>
      <img src="{{url('public/images/tefem2.jpg')}}" style="width:100%">
  </div>

  <!-- Next and previous buttons -->
  <a class="prev" onclick="plusSlides(-1)">&#10094;</a>
  <a class="next" onclick="plusSlides(1)">&#10095;</a>

  <!-- Image text -->
  <div class="caption-container">
    <p id="caption1"></p>
  </div>

  <!-- Thumbnail images -->
  <div class="row1">
    <div class="column">
      <img class="demo cursor" src="{{url('public/images/family2.jpg')}}" style="width:100%; height: 40px;" onclick="currentSlide(1)" alt="Always happy">
    </div>
    <div class="column"> 
      <img class="demo cursor" src="{{url('public/images/family1.jpg')}}" style="width:100%; height: 40px;" onclick="currentSlide(2)" alt="Satisfaction">
    </div>
    <div class="column">
      <img class="demo cursor" src="{{url('public/images/tefem3.jpg')}}" style="width:100%; height: 40px;" onclick="currentSlide(3)" alt="Encouragement">
    </div>
    <div class="column">
      <img class="demo cursor" src="{{url('public/images/family3.jpg')}}" style="width:100%; height: 40px;" onclick="currentSlide(4)" alt="Impacting">
    </div>
    <div class="column">
      <img class="demo cursor" src="{{url('public/images/tefem2.jpg')}}" style="width:100%; height: 40px;" onclick="currentSlide(5)" alt="Encouragement">
    </div> 
    <div class="column">
      <img class="demo cursor" src="{{url('public/images/tefem2.jpg')}}" style="width:100%; height: 40px;" onclick="currentSlide(6)" alt="Much Joy">
    </div>
  </div>
</div>


        </div>

      </div>
    </div>


</section>

<section>


<hr>

<br>
<div class="container">

  <h5 class="title black-text  wow zoomIn" data-wow-duration="2s" data-wow-duration="3s;">
            More Reviews
        
        </h5>

  <div class="row">

    <div class="col-md-7 wow zoomIn mb-4" data-wow-duration="2s" data-wow-duration="3s;">

      <!-- Slideshow container -->
<div class="slideshow-container" style="background: url('{{url('public/images/img_lights_wide.jpg')}}');">

  <!-- Full-width slides/quotes -->
  <div class="mySlides1 white-text">
    <q>I'm a member of the female media
      network, The team has made me realize that life takes 
    processes for progress, it made me look way beyond my age
  and obstacles. It also gave me an amazing company of ladies
  Be part of it!</q>
    <p class="author white-text">- Blessed</p>
  </div>

  <div class="mySlides1 white-text">
    <q>I am a member of the female media network, I've Always
      loved media and admire pros when it comes to design and 
      this platfor gave me the opportunity to start up the process
      of becoming an admired media lady
    </q>
    <p class="author white-text">- Winner</p>
  </div>

  <div class="mySlides1 white-text">
    <q>I am a member of the female media network, The 
      platform has motivated me to move ahead despite many 
      obstacles of life, by the constant sacrifice, consistence
      and steadfastness of the team
    </q>
    <p class="author white-text">- Chizzy</p>
  </div>

  <!-- Next/prev buttons -->
  <a class="prev1" onclick="plusSlidesx(-1)">&#10094;</a>
  <a class="next1" onclick="plusSlidesx(1)">&#10095;</a>
</div>

<!-- Dots/bullets/indicators -->
<div class="dot-container" style="background: black;">
  <span class="dot" onclick="currentSlidex(1)"></span> 
  <span class="dot" onclick="currentSlidex(2)"></span> 
  <span class="dot" onclick="currentSlidex(3)"></span> 
</div>


    </div>


    <div class="col-md-5">

<video controls poster="{{url('public/images/family1.jpg')}}">
  <source src="{{url('public/tefem.mp4')}}" type="video/mp4">

</video>

    </div>

  </div>

  </div>

</div>
  

</section>
  
<section>
  
  <br>
  <br>

<section id="OurStatistics">
  <div class="container-fluid" style="background: url('{{url('public/images/locker.jpg')}}'); padding: 50px;">
    <h5 class="title white-text">
            Statistics
        
        </h5>
  
        <div class="row">


            <!--Grid column-->
            <div class="col-md-3 mb-1 ">
                <center>
                  

                  <h1 class="count3 white-text wow zoomIn" data-wow-duration="2s" data-wow-delay="3s;" data-from="0" data-to="25" data-time="3000" ></h1>

              </center>
                <h4 class="text-center white-text" style="color:#031430; border-left: 1px solid red; border-radius: 10px;" >Total facilators who are experinced in different selected fields</h4>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-3 mb-1"> 
              <center>

                
                  <h1 class="count1 white-text font-weight-bold wow zoomIn" data-wow-duration="2s" data-wow-delay="3s;" data-from="0" data-to="60" data-time="3000"></h1>
              </center>
                <h4 class="text-center white-text" style="color:#031430;  border-left: 1px solid red; border-radius: 10px;">Women already trained in  different using industry standards</h4>

            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-3 mb-1">
              <center>
                
                <h1 class="count4 white-text font-weight-bold wow zoomIn" data-wow-duration="2s" data-wow-delay="3s;" data-from="0" data-to="4" data-time="3000"></h1>
            </center>
                <h4 class="text-center white-text" style="color:#031430;  border-left: 1px solid red; border-radius: 10px;">different countries currently in partnership and sponsorship </h4>
            </div>
            <!--Grid column-->

            <!--Grid column-->
            <div class="col-md-3 mb-1">
              <center>

              <h1 class="count-up white-text font-weight-bold wow zoomIn" data-wow-duration="2s" data-wow-delay="3s;" data-from="0" data-to="50000" data-time="3000"></h1>
            </center>
                <h4 class="text-center white-text" style="color:#031430;  border-left: 1px solid red; border-radius: 10px;">Women to be trained accross africa in different fields</h4>
            </div>
            <!--Grid column-->

        </div>
      </div>
<br>
<br>


</section>

<section>
  

<div class="container">

  <div class="row">
    

 <div class="col-lg-5 col-md-4">

  <div id="contact" class="alert alert-success wow zoomIn" data-wow-duration="2s" data-wow-duration="3s;" role="alert" style="border-left: 3px solid red;">
  We'd love to hear from you :)
</div>
 <!-- Form contact -->
  <form method="post" action="send_mail.php" class="p-5">
    <div class="md-form form-sm"> <i class="fa fa-user prefix grey-text" ></i>
      <input type="text" id="form3" name="first_name" class="form-control form-control-sm" required>
      <label for="form3">Your name</label>
    </div>
    <div class="md-form form-sm"> <i class="fa fa-envelope prefix grey-text"></i>
      <input type="text" id="form2" name="email_address" class="form-control form-control-sm" required>
      <label for="form2">Your email</label>
    </div>
    <div class="md-form form-sm"> <i class="fa fa-tag prefix grey-text"></i>
      <input type="text" id="form32" name="comments" class="form-control form-control-sm" required>
      <label for="form34">Subject</label>
    </div>
    <div class="md-form form-sm"> <i class="fa fa-pencil prefix grey-text"></i>
      <textarea type="text" id="form8" name="your_message" class="md-textarea form-control form-control-sm" rows="4" required></textarea>
      <label for="form8">Your message</label>
    </div>
    <div class="text-center mt-4 wow zoomIn" data-wow-duration="2s" data-wow-duration="3s;">
      <button class="btn" style="background-color: #ff0000; color: white;">Send request <i class="fas fa-arrow-circle-right"></i></button>
    </div>
  </form>
  <!-- Form contact -->


    </div>

<div class="col-md-6 responsive-map wow zoomIn" data-wow-duration="2s" data-wow-duration="3s;">
  
<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d63543.0965462737!2d6.991166253464282!3d5.500966928783827!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x104259980202a4a1%3A0x2b97fd8924660eb1!2sOwerri!5e0!3m2!1sen!2sng!4v1567441205512!5m2!1sen!2sng" width="650" height="500" frameborder="0" style="border:0;" allowfullscreen=""></iframe>

</div>

  </div>

</div>


</section>
      
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4" style="background: #330000;">

    
    <div class="container">
      <div class="row" style="padding: 20px;">
        
<div class="col-md-4 wow zoomIn" data-wow-duration="2s" data-wow-duration="3s;">

<img src="{{url('public/images/foc.png')}}" class="img-fluid" style="max-width: 140px;">

      </div>

      <div class="col-md-4 wow zoomIn" data-wow-duration="2s" data-wow-duration="3s;">

        <h5 style="padding-top: 10px;">Subscribe to our Newsletter!</h5>

        <form class="input-group" style="padding-top: 20px;">
              <input type="text" class="form-control form-control-sm" placeholder="Your email"
            aria-label="Your email" aria-describedby="basic-addon2">
          <div class="input-group-append">
            <button class="btn btn-sm btn-outline-white my-0" type="button">Sign up</button>
          </div>
        </form>

      </div>

      <div class="col-md-4" style="padding-top: 20px;">
                <button onclick="window.location.href = ' https://paystack.com/pay/tefem';" class="" style="padding:10px; height: 60px; background-color: red; font-family: verdana; border: none; border-radius: 10px; font-size: 15px; color: white;">Sponsor/Partner <br /> with us</button>
        
              </div>

    </div>

    <hr class="my-4 wow zoomIn" data-wow-duration="2s" data-wow-duration="3s;">

    <!-- Social icons -->
    <div class="pb-4">
      <a href="https://www.facebook.com/" target="_blank">
        <i class="fab fa-facebook-f mr-3"></i>
      </a>

      <a href="https://twitter.com/" target="_blank">
        <i class="fab fa-twitter mr-3"></i>
      </a>

      <a href="https://www.youtube.com/" target="_blank">
        <i class="fab fa-youtube mr-3"></i>
      </a>

      <a href="https://plus.google.com/" target="_blank">
        <i class="fab fa-google-plus-g mr-3"></i>
      </a>

      <a href="https://dribbble.com/" target="_blank">
        <i class="fab fa-dribbble mr-3"></i>
      </a>

      <a href="https://pinterest.com/" target="_blank">
        <i class="fab fa-pinterest mr-3"></i>
      </a>

    </div>
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3 wow zoomIn" data-wow-duration="2s" data-wow-duration="3s" style="border-top: 1px solid white;">
      © 2019 Copyright:
      <a href="https://tefemnetwork.com" target="_blank"> tefemnetwork.com</a> <br />
    </div>
    <div class="text-center d-block  text-white "><img src="https://uzucorp.com/uzu.jpg" class="rounded-circle uzu" alt="uzucorp.com" height="40px" width="40px">      Rapidly developed by <a href="https://uzucorp.com/">Uzucorp</a> </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="{{url('public/js/jquery-3.4.1.min.js')}}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{url('public/js/popper.min.js')}}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{url('public/js/bootstrap.min.js')}}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{url('public/js/mdb.min.js')}}"></script>
  <script type="text/javascript" src="{{url('public/js/tefem.js')}}"></script>

  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>

  <script type="text/javascript">
    
    function rotateCard(btn){
        var $card = $(btn).closest('.card-container');
        console.log($card);
        if($card.hasClass('hover')){
            $card.removeClass('hover');
        } else {
            $card.addClass('hover');
        }
    }


</script>

<script type="text/javascript">
  


</script>
</body>

</html>
