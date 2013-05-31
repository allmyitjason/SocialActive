<!DOCTYPE html>
<html lang="en">
<head>
	
	<!--Remove facebook crap returned with redirect url...-->
	<script type="text/javascript">
    if (window.location.hash == '#_=_') {
        window.location.hash = ''; // for older browsers, leaves a # behind
        history.pushState('', document.title, window.location.pathname); // nice and clean
        e.preventDefault(); // no page reload
    }
</script>
</head>

<body>
		
		
@section('content')
@show


</body>
</html>
