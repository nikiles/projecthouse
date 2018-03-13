<header>
	<div class="topBar">
			<div class="HeaderLogo">
				<a href="Index.php">
				<img src="img/ProjectHouselogo.png" width="279" height="296" alt=""/> </a>
			</div>
		<h1> PROJECT HOUSE </h1>
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

