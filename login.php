<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Quicksand" />
<title>Potato Place Isochat</title>
	<h1>Welcome to the Potato Place's Isochat, <?php echo $_POST["username"]; ?>!</h1>
</head>
<body>
	<p>We regret to say that the Isochat is not yet ready. Please be patient!</p>
	<button>Launch Isochat</button>
</body>
</html>
<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.2.1/jquery.min.js"></script>
<script>
$(document).ready(function(){
	$("button").click(function(){
		$("button").hide();
	});
});
</script>
<style>
button {
	color: #32CD32;
	}
</style>
