<!doctype html>
<html>
<head>
<meta charset="UTF-8">
<link href="https://fonts.googleapis.com/css?family=Dosis" rel="stylesheet">
<link href="css/Index.css" rel="stylesheet" type="text/css">
<link href="css/responsiveheader.css" rel="stylesheet" type="text/css">
<link href="css/footer.css" rel="stylesheet" type="text/css">
<link href="css/emailform.css" rel="stylesheet" type="text/css">	
<title>Project House</title>
</head>

<body>
<?php include("inc/responsiveheader.php") ?>
	<main>
	<div class="shortSummary">
		  <h1>Empower Yourself. Empower Others. </h1>

		  <p>Project House is a community of experts around the world building a network of resources.  These empower people to build great and socially impactful products. </p>
		
		<img src="img/WorldEmpower.png">

		  <p>The goal of Project House is to empower the individual. Society has been taught that education cannot happen outside of the classroom and without a trained teacher. Project House hopes to show that anyone can be their own teacher, and that in this age of the internet any resourceful active mind can accomplish their goals. </p>
	</div>
		<a href="PastProjects.php">
			<input type="submit" value="SEE SOME PROJECTS" name="subscribe" class="button">
		</a>
	<div class="shortSummary">	
	  <h1>Stay in the Know with Emails</h1>
	  <p>Would you like to know about how we are growing and what workshops are coming up? Sign up for our email updates!</p>
		
		<?php include("inc/emailform.php") ?>
	</div>
		

		
	</main>
	<?php include("inc/footer.php") ?>
</body>
</html>