<!doctype html>
<html lang="{{ str_replace('_', '-', app()->getLocale()) }}">
    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1">

        <title>ECWA Wuse 2 - Abuja</title>

        <!-- Font Awesome -->
          <link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.8.2/css/all.css">
          <!-- Bootstrap core CSS -->
          <link href="{{ asset('css/app.css') }}" rel="stylesheet">
          <!-- Material Design Bootstrap -->
          <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
          <!-- Your custom styles (optional) -->
          <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">
          <style type="text/css">
            html,
            body,
            header,
            .carousel {
              height: 60vh;
            }

            @media (max-width: 740px) {

              html,
              body,
              header,
              .carousel {
                height: 100vh;
              }
            }

            @media (min-width: 800px) and (max-width: 850px) {

              html,
              body,
              header,
              .carousel {
                height: 100vh;
              }
            }

            @media (min-width: 800px) and (max-width: 850px) {
              .navbar:not(.top-nav-collapse) {
                background: #929FBA !important;
              }
            }

          </style>
    </head>
    <body>
        <header>

    <!-- Navbar -->
    <nav class="navbar fixed-top navbar-expand-lg navbar-dark scrolling-navbar">
      <div class="container">

        <!-- Brand -->
        <a class="navbar-brand" href="">
          <strong>ECWA Wuse 2</strong>
        </a>

        <!-- Collapse -->
        <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent"
          aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
          <span class="navbar-toggler-icon"></span>
        </button>

        <!-- Links -->
        <div class="collapse navbar-collapse" id="navbarSupportedContent">

          <!-- Left -->
          <ul class="navbar-nav mr-auto">
            <li class="nav-item active">
              <a class="nav-link" href="#">Home
                
              </a>
            </li>
           <!--  <li class="nav-item">
              <a class="nav-link" href="/image-gallery">Gallery</a>
            </li> -->
            <li class="nav-item">
              <a href="" class="nav-link">Audio Messages</a>
            </li>
            <li class="nav-item submenu dropdown">
              <a class="nav-link dropdown-toggle" href="#departments" target="" data-toggle="dropdown" role="button" aria-haspopup="true"
                 aria-expanded="false">Departments</a>
              <ul class="dropdown-menu">
                <li class="nav-item"><a href="">Men's Fellowship</a></li>
                <li class="nav-item"><a href="">Women's Fellowship</a></li>
                <li class="nav-item"><a href="">Church Choir</a></li>
                <li class="nav-item"><a href="">Praise Family Band</a></li>
                <li class="nav-item"><a href="">Beloved Sisters</a></li>
                <li class="nav-item"><a href="">Shalom Sisters</a></li>
                <li class="nav-item"><a href="">Evangelism Team</a></li>
                <li class="nav-item"><a href="">Youth Fellowship</a></li>
                <li class="nav-item"><a href="">Santuary Keepers</a></li>
                <li class="nav-item"><a href="">Security</a></li>
                <li class="nav-item"><a href="">Media & Sound</a></li>
                <li class="nav-item"><a href="">Children's Department</a></li>
              </ul>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="#about">About us</a>
            </li>
            <li class="nav-item">
              <a class="nav-link" href="{{ asset ('YouthChurch/index.html') }}" target="_blank">CBW</a>
            </li>
          </ul>

          <!-- Right -->
          <ul class="navbar-nav nav-flex-icons">
            
            <li class="nav-item">
              <a href="" class="nav-link border border-light rounded"
                target="_blank">
                Connect Form
              </a>
            </li>
          </ul>

        </div>

      </div>
    </nav>
    <!-- Navbar -->

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
          <div class="view" style="background-image: url('../../img/slides/c-179.jpg'); background-repeat: no-repeat; background-size: cover;">

            

          </div>
        </div>
        <!--/First slide-->

        <!--Second slide-->
        <div class="carousel-item">
          <div class="view" style="background-image: url('../../img/slides/c-19.jpg'); background-repeat: no-repeat; background-size: cover;">

         

          </div>
        </div>
        <!--/Second slide-->

        <!--Third slide-->
        <div class="carousel-item">
          <div class="view" style="background-image: url('../../img/slides/c-174.jpg'); background-repeat: no-repeat; background-size: cover;">

           

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

  </header>

  <!--Main layout-->
  <main>
    <div class="container">

      <!--Section: Main info-->
      <section class="mt-5 wow fadeIn">

        <!--Grid row-->
        <div class="row">

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <img src="{{asset ('img/pst.jpg')}} " class="img-fluid z-depth-1-half"
              alt="" caption="Senior Reverend">

          </div>
          <!--Grid column-->

          <!--Grid column-->
          <div class="col-md-6 mb-4">

            <!-- Main heading -->
            <h3 class="h3 mb-3">Welcome To ECWA Wuse 2</h3>
            <p>I want to extend a very warm welcome to you. Whether you are just having a look or are searching out for a place of worship, we're delighted to have you here.</p>
            <p>As a group of God's people, we care about you and your family and we're here not only to feed you spiritually, but to help in any way we can. We love doing it and it's why we exist.</p>
            <!-- Main heading -->

            <hr>

            <p>
              I want to encourage you to fill out our connect forms that you'll find on this page, so you would know what is going on and the events coming up in the next few months.
            </p>
            <p>Also if you've got a specific prayer request, please take the courage to write it down on that same form (There's space for it).</p>
            <p>Enjoy the rest of your day, and God bless you.</p>

            <!-- CTA -->
            <a target="_blank" href="https://mdbootstrap.com/docs/jquery/getting-started/download/" class="btn btn-grey btn-md">Connect form
              <i class="fas fa-download ml-1"></i>
            </a>
          </div>
          <!--Grid column-->

        </div>
        <!--Grid row-->

      </section>
      <!--Section: Main info-->

      <hr class="my-5">

      <!--Section: Main features & Quick Start-->
      <section id="#about">

        <h3 class="h3 text-center mb-5">About Us</h3>

        <!--Grid row-->
        <div class="row wow fadeIn">

          <!--Grid column-->
          <div class="col-lg-6 col-md-12 px-4">

            <!--First row-->
            <div class="row">
              <div class="col-1 mr-3">
                <i class="fas fa-church fa-2x indigo-text"></i>
              </div>
              <div class="col-10">
                <h5 class="feature-title">Envangelical Church Winning All</h5>
                <p class="grey-text">Firstly, we're all about Jesus Christ. We believe that Jesus was who he said he was, the son of God who came and died for our sins. So, if this is your first time in Church, we hope that you get to know Him as we do, because He's truly what life is all about for us!</p>
              </div>
            </div>
            <!--/First row-->

            <div style="height:30px"></div>

            <!--Second row-->
            <div class="row">
              <div class="col-1 mr-3">
                <i class="fas fa-users fa-2x blue-text"></i>
              </div>
              <div class="col-10">
                <h5 class="feature-title">People</h5>
                <p class="grey-text">Secondly, we're all about people. Every person who walks through our doors or social channels/website is important to us, so if you ever feel like just another number, we're doing something wrong and you can tell Pastors about it.
                  
                </p>
              </div>
            </div>
            <!--/Second row-->

            <div style="height:30px"></div>

            <!--Third row-->
            <div class="row">
              <div class="col-1 mr-3">
                <i class="fas fa-heart fa-2x cyan-text"></i>
              </div>
              <div class="col-10">
                <h5 class="feature-title">Relationships</h5>
                <p class="grey-text">Thirdly, we are all about relationships. We hope to cultivate and grow meaninful and positive relationships between another, but also go further by getting and growing in relationship with God.
                Christianity is all about a person, and less about a set of rules. That means that we exist to be in a relationship with someone, that's Jesus, and merely not to obey a religion.</p>
              </div>
            </div>
            <!--/Third row-->

          </div>
          <!--/Grid column-->

          <!--Grid column-->
          <div class="col-lg-6 col-md-12">

            <p class="h5 text-center mb-4"></p>
            <img src="{{asset ('img/logo.jpeg') }}">
            <div class="embed-responsive embed-responsive-16by9">
              
            </div>
          </div>
          <!--/Grid column-->

        </div>
        <!--/Grid row-->

      </section>
      <!--Section: Main features & Quick Start-->

      <hr class="my-5">


      <!--Section: More-->
      <section id="#departments">

        <h2 class="my-5 h3 text-center">Departments</h2>

        <!--First row-->
        <div class="row features-small mt-5 wow fadeIn">

          <!--Grid column-->
          <div class="col-xl-3 col-lg-6">
            <!--Grid row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-child fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2 pl-3">
                <h5 class="feature-title font-bold mb-1">Youth Fellowship</h5>
                <p class="grey-text mt-2">
                  Serving in our youth, burning for Christ.
                </p>
              </div>
            </div>
            <!--/Grid row-->
          </div>
          <!--/Grid column-->

          <!--Grid column-->
          <div class="col-xl-3 col-lg-6">
            <!--Grid row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-broom fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-bold mb-1">Santuary Keepers</h5>
                <p class="grey-text mt-2">
                  Beautifying the place of worship for our Lord.
                </p>
              </div>
            </div>
            <!--/Grid row-->
          </div>
          <!--/Grid column-->

          <!--Grid column-->
          <div class="col-xl-3 col-lg-6">
            <!--Grid row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-life-ring fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-bold mb-1">Shalom Sisters</h5>
                <p class="grey-text mt-2">
                  Relying on God, the Creator of us all
                </p>
              </div>
            </div>
            <!--/Grid row-->
          </div>
          <!--/Grid column-->

          <!--Grid column-->
          <div class="col-xl-3 col-lg-6">
            <!--Grid row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-bold fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-bold mb-1">Beloved Sisters</h5>
                <p class="grey-text mt-2">
                  Staying hopeful, believing in God.
                </p>
              </div>
            </div>
            <!--/Grid row-->
          </div>
          <!--/Grid column-->

        </div>
        <!--/First row-->

        <!--Second row-->
        <div class="row features-small mt-4 wow fadeIn">

          <!--Grid column-->
          <div class="col-xl-3 col-lg-6">
            <!--Grid row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-female fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-bold mb-1">Women Fellowship</h5>
                <p class="grey-text mt-2">Building the Mothers, supporting the men.</p>
              </div>
            </div>
            <!--/Grid row-->
          </div>
          <!--/Grid column-->

          <!--Grid column-->
          <div class="col-xl-3 col-lg-6">
            <!--Grid row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-male fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-bold mb-1">Men's Fellowship</h5>
                <p class="grey-text mt-2">Growing as leaders, taking care of the family.
                </p>
              </div>
            </div>
            <!--/Grid row-->
          </div>
          <!--/Grid column-->

          <!--Grid column-->
          <div class="col-xl-3 col-lg-6">
            <!--Grid row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-microphone fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-bold mb-1">Choir</h5>
                <p class="grey-text mt-2">
                  Worshiping the Father, with our all.
                </p>
              </div>
            </div>
            <!--/Grid row-->
          </div>
          <!--/Grid column-->

          <!--Grid column-->
          <div class="col-xl-3 col-lg-6">
            <!--Grid row-->
            <div class="row">
              <div class="col-2">
                <i class="fas fa-lock fa-2x mb-1 indigo-text" aria-hidden="true"></i>
              </div>
              <div class="col-10 mb-2">
                <h5 class="feature-title font-bold mb-1">Security</h5>
                <p class="grey-text mt-2">Protecting God's people as a service to our God.</p>
              </div>
            </div>
            <!--/Grid row-->
          </div>
          <!--/Grid column-->

        </div>
        <!--/Second row-->

      </section>
      <!--Section: More-->

    </div>
  </main>
  <!--Main layout-->

  <!--Footer-->
  <footer class="page-footer text-center font-small mt-4 wow fadeIn">

    <!--Call to action-->
    <div class="pt-4">
      <a class="btn btn-outline-white" href="https://" target="_blank"
        role="button">Connect Form
        <i class="fas fa-download ml-2"></i>
      </a>
      <a class="btn btn-grey" href="/login" target="_blank" role="button">Admin <i class="fas fa-cog ml-2"></i> </a>
      
    </div>
    <!--/.Call to action-->

    

    <!-- Social icons -->
    
    <!-- Social icons -->

    <!--Copyright-->
    <div class="footer-copyright py-3">
      © 2019 Copyright:
      <a href="https://kabelikoncepts.io" target="_blank">  Kabeli Koncepts</a>
    </div>
    <!--/.Copyright-->

  </footer>
  <!--/.Footer-->

  <!-- SCRIPTS -->
  <!-- JQuery -->
  <script type="text/javascript" src="{{ asset ('js/jquery-3.4.1.min.js') }}"></script>
  <!-- Bootstrap tooltips -->
  <script type="text/javascript" src="{{ asset ('js/popper.min.js') }}"></script>
  <!-- Bootstrap core JavaScript -->
  <script type="text/javascript" src="{{ asset ('js/app.js') }}"></script>
  <!-- MDB core JavaScript -->
  <script type="text/javascript" src="{{ asset ('js/mdb.min.js') }}"></script>
  <!-- Initializations -->
  <script type="text/javascript">
    // Animations initialization
    new WOW().init();

  </script>
    </body>
</html>
