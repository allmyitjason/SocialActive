<!DOCTYPE html>
<html lang="en">
<head>

	</head>

	<body>
		    <div id="fb-root"></div>
<script>
  window.fbAsyncInit = function() {
    // init the FB JS SDK
    FB.init({
      appId      : '169060389929087',                        // App ID from the app dashboard
      channelUrl : '//localhost:8000/channel.html', // Channel file for x-domain comms
      status     : true,                                 // Check Facebook Login status
      xfbml      : true  ,  // Look for social plugins on the page
       frictionlessRequests: true                                
    });

   /* FB.ui({method: 'apprequests',
    message: 'My Great Request'
  }, requestCallback);*/



    // Additional initialization code such as adding Event Listeners goes here
  };

  function requestCallback(response) {
        // Handle callback here
      }

  // Load the SDK asynchronously
  (function(d, s, id){
     var js, fjs = d.getElementsByTagName(s)[0];
     if (d.getElementById(id)) {return;}
     js = d.createElement(s); js.id = id;
     js.src = "//connect.facebook.net/en_US/all.js";
     fjs.parentNode.insertBefore(js, fjs);
   }(document, 'script', 'facebook-jssdk'));
</script>




@section('content')
@show


	</body>
</html>