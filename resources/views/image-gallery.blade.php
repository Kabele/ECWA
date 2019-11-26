<!DOCTYPE html>
<html>
<head>
    <title>Gallery</title>
    
          <!-- Bootstrap core CSS -->
          <link href="{{ asset('css/app.css') }}" rel="stylesheet">
          <!-- Material Design Bootstrap -->
          <link href="{{ asset('css/mdb.min.css') }}" rel="stylesheet">
          <!-- Your custom styles (optional) -->
          <link href="{{ asset('css/style.min.css') }}" rel="stylesheet">


    <style type="text/css">
    .gallery
    {
        display: inline-block;
        margin-top: 20px;
    }
    .close-icon{
    	border-radius: 50%;
        position: absolute;
        right: 5px;
        top: -10px;
        padding: 5px 8px;
    }
    .form-image-upload{
        background: #e8e8e8 none repeat scroll 0 0;
        padding: 15px;
    }
    </style>
</head>
<body>
<!-- Nav begins -->

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
            <li class="nav-item">
              <a class="nav-link" href="#">Home
                
              </a>
            </li>
            <li class="nav-item">
              <a class="nav-link active" href="/image-gallery">Gallery</a>
            </li>
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

    <!-- nav ends -->
<br><br><br><br><br>
<div class="container">



    <div class="row">
    <div class='list-group gallery'>


            @if($images->count())
                @foreach($images as $image)
                <div class='col-sm-4 col-xs-6 col-md-3 col-lg-3'>
                    <a class="thumbnail fancybox" rel="ligthbox" href="/images/{{ $image->image }}">
                        <img class="img-responsive" alt="" src="/images/{{ $image->image }}" />
                        <!-- <div class='text-center'>
                            <small class='text-muted'>{{ $image->title }}</small>
                        </div>  --><!-- text-center / end -->
                    </a>
                    <!-- <form action="{{ url('image-gallery',$image->id) }}" method="POST">
                    <input type="hidden" name="_method" value="delete">
                    {!! csrf_field() !!}
                    <button type="submit" class="close-icon btn btn-danger"><i class="glyphicon glyphicon-remove"></i></button>
                    </form> -->
                </div> <!-- col-6 / end -->
                @endforeach
            @endif


        </div> <!-- list-group / end -->
    </div> <!-- row / end -->
</div> <!-- container / end -->

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

</body>


<script type="text/javascript">
    $(document).ready(function(){
        $(".fancybox").fancybox({
            openEffect: "none",
            closeEffect: "none"
        });
    });
</script>

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

</html>