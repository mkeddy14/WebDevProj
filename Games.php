<?php include ('server.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="CSS/Site.css">
		<title>Jack&Micks</title>
		<script type="text/javascript">
		</script>
	</head>

	<body>

		<header>
			<div>
				<h1 id="mainT">Jack & Mick's Game Shop</h1>
			</div>
			<hr class="line">
			<div id="navcontainer">
				<ul>
					<li><a href="index.php">Home</a></li>
					<li><a href="Games.php">Games</a></li>
					<li><a href="Profile.php">Profile</a></li>
					<li><a href="login.php?logout='1'">Log Out</a></li>	
				</ul>
			</div>
			<hr class="line">
		</header>

		<h2>Games</h2>
		<hr class="line">

		<div id="GamesContainer">
			<section class="Games">
				<a href="RDR.php"><img src="Images/RDR2C.jpeg" alt="Pict1"></a>
				<a href="RDR.php"><img src="Images/RDR2CP.jpeg" alt="Pict7"></a>
				<a href="Fifa.php"><img src="Images/FifaC.jpeg" alt="Pict3"></a>
				<a href="Fifa.php"><img src="Images/F19CP.jpg" alt="Pict5"></a>
			</section>
			<section class="Games">
				<a href="GTAV.php"><img src="Images/GTAVC.jpeg" alt="Pict6"></a>
				<a href="GTAV.php"><img src="Images/GTAVCP.jpg" alt="Pict6"></a>
				<a href="Fallout.php"><img src="Images/F76C.jpeg" alt="Pict7"></a>
				<a href="Fallout.php"><img src="Images/F76CP.jpg" alt="Pict7"></a>
			</section>
			<section class="Games">
				<a href="FarCry5.php"><img src="Images/FC5CP.jpg" alt="Pict5"></a>
				<a href="FarCry5.php"><img src="Images/FC5C.jpg" alt="Pict6"></a>
				<a href="BFV.php"><img src="Images/BF5C.jpeg" alt="Pict4"></a>
				<a href="BFV.php"><img src="Images/BF5CP.jpg" alt="Pict8"></a>
			</section>
			<section class="Games">
				<a href="GOW.php"><img src="Images/GOWCP.jpg" alt="Pict6"></a>
				<a href="Forza.php"><img src="Images/ForzaC.jpeg" alt="Pict2"></a>
				<a href="SpiderMan.php"><img src="Images/SMCP.jpeg" alt="Pict8"></a>
				<a href="Madden.php"><img src="Images/M19C.jpeg" alt="Pict8"></a>
			</section>

		</div>

		<hr class="line">
		<footer>
			Site By Jack Byrne & Mikey Keddy &copy; 2018
		</footer>
		<hr class="line">

	</body>
</html>