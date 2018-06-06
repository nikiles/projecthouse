<!doctype html>
<html>
<head>
<!-- Global Site Tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-71997920-3"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-71997920-3');
</script>
<!--End Google Analytics script -->
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
<link href="css/Index.css" rel="stylesheet" type="text/css">
<link href="css/responsiveheader.css" rel="stylesheet" type="text/css">
<link href="css/footer.css" rel="stylesheet" type="text/css">
<link href="css/emailform.css" rel="stylesheet" type="text/css">
<link href="css/pastprojects.css" rel="stylesheet" type="text/css">	
<link rel="shortcut icon" href="img/Favicon.ico" type="image/x-icon">
<title>Project House</title>
</head>

<body>
<header>
	<div class="topBar">
			<div class="HeaderLogo">
				<a href="Index.php">
				<img src="img/ProjectHouselogo.png" width="279" height="296" alt=""/> </a>
			</div>
		<a href="Index.php">
		<h1> PROJECT HOUSE </h1>
		</a>
			<div class="hamburgerContainer" onclick="myFunction(this)">
				<div class="bar1"></div>
				<div class="bar2"></div>
				<div class="bar3"></div>
					<script>
						function myFunction(x) {
							x.classList.toggle("change");
							var x = document.getElementById("myTopnav");
				if (x.className === "topnav") {
					x.className += " open";
				} else {
					x.className = "topnav";
				}
							}
					</script>
			</div>
	</div>	
		<div class="topnav" id="myTopnav">
			<a href="Index.php"> Home </a>
  			<a href= "PastProjects.php">Past Projects</a>
  			<a href="contact.php">Contact Us</a>
		</div>
	
</header>

