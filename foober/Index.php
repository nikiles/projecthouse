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
		  <p>Project House is a cross-cultural, multi-disciplinary, transnational community. We are everywhere we can be, questioning everything we can, imagineering our way beyond the broken status quo. We are teachers and learners. We are dreamers and doers. We tackle challenges by building solutions, one step at a time.</p>
                  <img src="img/WorldEmpower.png">
		  <p>Join us for a week or more, in person or from afar; contribute and learn with our amazing team! Each week we focus on a particular problem -- dysfunctional technology, remote working challenges, or social sustainability issues. Your group will brainstorm solutions to the problem, then work towards a self-determined set of deliverables to evaluate your solution. Deliverables can be: a website, an application, mockups, a video, a prototype, a market study, a crowd-funding campaign, a business plan.</p>
		  <p>At Project House, you will:</p>
		  <ul>
		    <li>Leverage your existing expertise.
		    <li>Acquire new skills appropriate to the task at hand.
		    <li>Collaborate with amazing people on an impactful project.
		    <li>Prepare yourself for a self-driven and/or location-independent lifestyle.
		  </ul>
		  <p>Maybe your a designer and you'd like to learn a little bit about coding? Maybe your a coder and want to learn a little bit about marketing? Skills needed include: brainstorming, leadership, communication, collaboration, research, arts, crafts, graphic design, 3d modelling, marketing, website developing, software, hardware. Out-of-the-box thinking is a huge plus.</p>

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
