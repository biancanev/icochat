<!DOCTYPE html>
<html>
<head>
<link rel="stylesheet" type="text/css" href="//fonts.googleapis.com/css?family=Quicksand" />
<title>Potato Place Isochat</title>
	<h1>Welcome to the Potato Place's Isochat, <i><strong><?php echo $_POST["username"]; ?></strong></i>!</h1>
</head>
<body>
	<p>We regret to say that the Isochat is not yet ready. Please be patient!</p>
	<form action="chat-application.php" method="get" id="form1">
    <input type="submit" value="Launch the Isochat!" id="launch"></input>
    </form>
    
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
#launch {
	background-color: #32CD32;
	color: #FFFFFF;
	border-color: #228B22;
	width: 120e;
	height: 30e;
	}
</style>
