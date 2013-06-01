<!DOCTYPE html>
<html lang="en">
<head>
  <meta http-equiv="Content-Type" content="text/html; charset=UTF-8">
  <meta charset="utf-8">
  <!-- Title and other stuffs -->
  <title>Social Active</title>
  <meta name="viewport" content="width=device-width, initial-scale=1.0">
  <meta name="description" content="">
  <meta name="keywords" content="">
  <meta name="author" content="">

  <!-- Stylesheets -->
  <!-- Bootstrap -->
  <link href="/style/bootstrap.css" rel="stylesheet">
  <link href="/style/ui-lightness/jquery-ui-1.10.3.custom.css" rel="stylesheet">
  <!-- Font awesome icon -->
  <link rel="stylesheet" href="/style/font-awesome.css">
  <!-- Navigation menu -->
  <link rel="stylesheet" href="/style/ddlevelsmenu-base.css">
  <link rel="stylesheet" href="/style/ddlevelsmenu-topbar.css">
  <!-- cSlider -->
  <link rel="stylesheet" href="/style/slider.css">
  <!-- PrettyPhoto -->
  <link rel="stylesheet" href="/style/prettyPhoto.css">
  <!-- Custom style -->
  <link href="/style/style.css" rel="stylesheet">
  <!-- Responsive Bootstrap -->
  <link href="/style/bootstrap-responsive.css" rel="stylesheet">
  
  <!-- HTML5 Support for IE -->
  <!--[if lt IE 9]>
  <script src="js/html5shim.js"></script>
  <![endif]-->

  <!-- Favicon -->
  <link rel="shortcut icon" href="/img/favicon/favicon.png">
</head>

<body>


  <!-- Sliding panel starts-->

  <div class="slidepanel">
    <div class="container">
      <div class="row">
        <div class="span8">
          <div class="spara"> 
            <!-- Contact details -->
            <p><i class="icon-envelope-alt lightblue"></i> something@gmail.com &nbsp; 
              <i class="icon-twitter lightblue"></i> @something &nbsp; 
              <i class="icon-desktop lightblue"></i> 123-456-7890
            </p>
          </div>
        </div>
        <div class="span4">
            <div class="social">
              <!-- Social media icons. Repalce # with your profile links -->
                      <a href="#" class="bblue"><i class="icon-facebook"></i></a>
                      <a href="#" class="borange"><i class="icon-google-plus"></i></a> 
                      <a href="#" class="blightblue"><i class="icon-twitter"></i></a>
                      <a href="#" class="bviolet"><i class="icon-linkedin"></i></a>
                      <a href="#" class="bred"><i class="icon-pinterest"></i></a>
                      <a href="#" class="borange"><i class="icon-rss"></i></a>
            </div>
        </div>
      </div>
      <div class="clearfix"></div>
    </div>
  </div>

  <!-- Sliding panel ends-->

  <!-- Header starts -->

  <header>
    <div class="container">
      <div class="row">

        <div class="span3">

          <!-- Logo starts -->

          <div class="logo">

            <div class="logo-image">
              <!-- Image link -->
              <a href="index.html"><i class="icon-desktop blue"></i></a>
            </div>
            
            <div class="logo-text">
              <h1><a href="index.html">Metro<span class="lightblue">Man</span></a></h1>
              <div class="logo-meta">Cool Metro Theme</div>
            </div>

            <div class="clearfix"></div>

          </div>

          <!-- Logo ends -->

        </div>

        <div class="span9">

         <!-- Navbar starts -->

          <div class="navi pull-right">
            <div id="ddtopmenubar" class="mattblackmenu">
              <!-- Main navigation -->
              <!-- Use the background color class in anchor tag for colorful menu -->
              <ul>

                <li><a href="index.html" class="blightblue"> <i class="icon-home"></i> Home</a></li>
                <!-- Main navigation -->
                <li><a href="#" rel="ddsubmenu2" class="bred"> <i class="icon-desktop"></i> Find</a></li>
                <!-- Main navigation -->
                <li>
                  <a href="/activity" rel="ddsubmenu2" class="bviolet"> <i class="icon-tablet"></i> Host</a></li>                

                <li><a href="#" rel="ddsubmenu2" class="bgreen"> <i class="icon-comments"></i> Login</a></li>

                <li><a href="portfolio.html" class="borange"> <i class="icon-camera"></i> About</a></li>

                <li><a href="contactus.html" class="bblue"> <i class="icon-envelope-alt"></i> Contact</a></li>


              </ul>
            </div>
          </div>

          <div class="navis"></div>

          <!-- Navbar ends -->

          <div class="clearfix"></div>

        </div>

      </div>
    </div>
  </header>

  <div class="clearfix"></div>

  <!-- Header ends -->

	@section('content')
	@show


<!-- Footer -->

<!-- Below area is for twitter feed -->
<div class="foot blightblue">
  <div class="container">
    <div class="row">
      <div class="span12">
          
          <!-- Twitter icon -->
          <span class="twitter-icon text-center"><i class="icon-twitter"></i></span>
          <!-- Twitter feed -->
          <span class="tweet-foot"></span>
        
      </div>
    </div>
  </div>
</div>  

<footer>
  <div class="container">
    <div class="row">


      <div class="widgets">

        <div class="span3">
          <div class="fwidget">
            
            <h4>Contact</h4>

                  <p>Nullam justo nunc, dignissim at convallis posuere, sodales eu orci. </p>
                  <hr />
                  <i class="icon-home"></i> &nbsp; 123, Some Area. Los Angeles, CA, 54321.
                  <hr />
                  <i class="icon-phone"></i> &nbsp; +239-3823-3434
                  <hr />
                  <i class="icon-envelope-alt"></i> &nbsp; <a href="mailto:#">someone@company.com</a>
                  <hr />
                    <div class="social">
                      <a href="#" class="bblue"><i class="icon-facebook"></i></a>
                      <a href="#" class="borange"><i class="icon-google-plus"></i></a> 
                      <a href="#" class="blightblue"><i class="icon-twitter"></i></a>
                      <a href="#" class="bviolet"><i class="icon-linkedin"></i></a>
                      <a href="#" class="bred"><i class="icon-pinterest"></i></a>
                      <a href="#" class="borange"><i class="icon-rss"></i></a>
                    </div>

          </div>
        </div>

        <div class="span3">
          <div class="fwidget">
            <h4>Categories</h4>
            <ul>
              <li><a href="#">Condimentum - Condimentum gravida</a></li>
              <li><a href="#">Etiam at - Condimentum gravida</a></li>
              <li><a href="#">Fusce vel - Condimentum gravida</a></li>
              <li><a href="#">Vivamus - Condimentum gravida</a></li>
              <li><a href="#">Pellentesque - Condimentum gravida</a></li>
              <li><a href="#">Fusce vel - Condimentum gravida</a></li>
            </ul>
          </div>
        </div>        

        <div class="span3">
          <div class="fwidget">
            
            <h4>Subscribe</h4>
            <p>Duis leo risus, condimentum ut posuere ac, vehicula luctus nunc.  Quisque rhoncus, a sodales enim arcu quis turpis.</p>
            <p>Enter you email to Subscribe</p>
            
            <form class="form-inline">
              <div class="input-append row-fluid">
                <input type="text" class="span8" placeholder="Subscribe">
                <button type="submit" class="btn btn-danger">Subscribe</button>
              </div>
            </form>

          </div>
        </div>

        <div class="span3">
          <div class="fwidget">
            <h4>Recent Posts</h4>
            <ul>
              <li><a href="#">Sed eu leo orci, condimentum gravida metus</a></li>
              <li><a href="#">Etiam at nulla ipsum, in rhoncus purus</a></li>
              <li><a href="#">Fusce vel magna faucibus felis dapibus facilisis</a></li>
              <li><a href="#">Vivamus scelerisque dui in massa</a></li>
              <li><a href="#">Pellentesque eget adipiscing dui semper</a></li>
            </ul>
          </div>
        </div>

      </div>

      <div class="span12">
          <div class="copy">
                <p>Copyright &copy; <a href="#">Your Site</a> - <a href="index.html">Home</a> | <a href="aboutus.html">About Us</a> | <a href="faq.html">FAQ</a> | <a href="contactus.html">Contact Us</a></p>
          </div>
      </div>

    </div>
  <div class="clearfix"></div>
  </div>
</footer> 

<!-- JS -->
<script src="/js/jquery.js"></script> <!-- jQuery -->
<script src="/js/bootstrap.js"></script> <!-- Bootstrap -->
<script src="/js/jquery-ui-1.10.3.custom.min.js"></script>
<script src="/js/jquery.prettyPhoto.js"></script> <!-- prettyPhoto -->
<script src="/js/jquery.isotope.js"></script> <!-- isotope -->
<script src="/js/ddlevelsmenu.js"></script> <!-- Navigation menu -->
<script src="/js/jquery.cslider.js"></script> <!-- jQuery cSlider -->
<script src="/js/modernizr.custom.28468.js"></script> <!-- Extra script for cslider -->
<script src="/js/jquery.tweet.js"></script> <!-- jQuery Tweet -->
<script src="/js/filter.js"></script> <!-- Support -->
<script src="/js/custom.js"></script> <!-- Custom JS -->

<!--Remove facebook crap returned with redirect url...-->
	<script type="text/javascript">
    if (window.location.hash == '#_=_') {
        window.location.hash = ''; // for older browsers, leaves a # behind
        history.pushState('', document.title, window.location.pathname); // nice and clean
        e.preventDefault(); // no page reload
    }

    $( document ).ready(function() {
      @section('jQuery')
      @show
    });

</script>

  <div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    // init the FB JS SDK
    FB.init({
      appId      : '169060389929087',                        // App ID from the app dashboard
      channelUrl : '//localhost:8000/channel.html', // Channel file for x-domain comms
      status     : true,                                 // Check Facebook Login status
      xfbml      : true    // Look for social plugins on the page                            
    });

   /* FB.ui({method: 'apprequests',
    message: 'My Great Request'
  }, requestCallback);*/



    // Additional initialization code such as adding Event Listeners goes here
  };


  // Load the SDK asynchronously
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/all.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>

</body>
</html>




		


