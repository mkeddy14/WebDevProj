<?php include ('server.php'); ?>
<!DOCTYPE html>
<html>
	<head>
		<link rel="stylesheet" type="text/css" href="CSS/Site.css">
		<title>Jack&Micks</title>
		<script type="text/javascript">
			var i = 0; 
			var images = [];
			var time = 3000;

			images[0] = 'Images/RDR2.jpg';
			images[1] = 'Images/Forza.jpg';
			images[2] = 'Images/BF5.jpg';
			images[3] = 'Images/Fifa.jpg';

			function changeImg(){
				document.slide.src = images[i];
				if(i < images.length - 1){
					i++;
				} else {
					i = 0;
				}

				setTimeout("changeImg()", time);
			}

			window.onload = changeImg;
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

		<div class="content">
				<?php if (isset($_SESSION['success'])): ?>
					<div class="login success">
						<p>
							<?php
								echo $_SESSION ['success'];
								unset($_SESSION['success']);
							?>
						</p>
					</div>

				<?php endif ?> 

				<?php if (isset($_SESSION["username"])): ?> 
					<p id="username">Logged In As: <strong><?php echo $_SESSION["username"]; ?></strong></p>
				<?php endif ?>
			</div>

		<form action="search.php" method="POST" style="width: 500px;">
			<input type="text" name="search" placeholder="Search" style="width: 400px;">
			<button type="submit" name="submit-search">Search</button>
		</form>

		<div id="slideContainer">
			<img name="slide" width="75%%" height="400" style="border-width:5px; border-style:double;" />
		</div>

		<h2>New Releases</h2>
		<hr class="line">

		<div id="textWithIMG">
			<img src="Images/redDead.jpeg">
			<p>Red Dead Redemption 2 is a Western-themed action-adventure game developed and published by Rockstar Games. It is a prequel to the 2010 game Red Dead Redemption, and the third entry in the Red Dead series. Set in 1899, it follows the story of outlaw Arthur Morgan, a member of the Van der Linde gang, and also details the time of a younger John Marston in the same gang and his eventual departure.Red Dead Redemption 2 was released for PlayStation 4 and Xbox One on October 26, 2018. It was universally acclaimed by critics, who praised the story, characters, open world, and considerable level of detail. The game generated $725 million in sales from its opening weekend, shipping over 17 million copies in two weeks. </p>			
		</div>

		<div id="textWithIMG">
			<p>Forza Horizon 3 is an open world racing video game developed by Playground Games and published by Microsoft Studios for Xbox One and Microsoft Windows. The game features cross-platform play between the two platforms. The game was released on 23 September 2016 for Ultimate Edition players, and 27 September 2016 for standard and Deluxe Edition players. It is the third Forza Horizon and the ninth instalment in the Forza series. As with previous Horizon games, Turn 10 Studios assisted Playground Games in the game's development. It is set in a fictional representation of Australia. Additional content has been released in the form of car packs and two world expansions, which also include additional cars. </p>
			<img src="Images/ForzaS.jpeg">
		</div>

		<div id="textWithIMG">
			<img src="Images/FifaS.jpeg">
			<p>FIFA 19 is a football simulation video game developed by EA Vancouver and EA Bucharest, as part of Electronic Arts FIFA series. Announced on 6 June 2018 for its E3 2018 press conference, it was released on 28 September 2018 for PlayStation 3, PlayStation 4, Xbox 360, Xbox One, Nintendo Switch, and Microsoft Windows.As with FIFA 18, Cristiano Ronaldo appears as the cover athlete of the regular edition, while he and Neymar appear on the Champions and Ultimate Edition packs for the game.The game features the UEFA club competitions for the first time, including the UEFA Champions League.The new commentary team of Derek Rae and Lee Dixon feature in the UEFA competitions mode.Composer Hans Zimmer and rapper Vince Staples recorded a new remix of the UEFA Champions League anthem specifically for the game.The character Alex Hunter, who first appeared in FIFA 17 returns for the third and final instalment of "The Journey", entitled, "The Journey: Champions". </p>
		</div>

			<h2>About Us</h2>
			<hr class="line">

			<div id="textWithIMG">
				<p>Morbi sit amet enim nibh. Fusce vehicula, nunc sit amet vestibulum consequat, justo augue tempor augue, sed fringilla augue erat in purus. Nam at consequat ligula, sed vehicula turpis. Cras lobortis, lorem at mollis vestibulum, augue magna aliquet augue, ut volutpat sem lectus vel elit. Orci varius natoque penatibus et magnis dis parturient montes, nascetur ridiculus mus. Donec nec justo aliquet tellus pharetra pulvinar sit amet a ligula. Integer sollicitudin, nunc ac luctus posuere, quam arcu blandit velit, at ornare nulla arcu sed massa. Sed mollis elit sed porta auctor. Vestibulum vel laoreet augue, ut ultrices urna. Cras id mi eu arcu iaculis interdum. Nullam enim nisl, lacinia ut bibendum nec, accumsan sed mi. Maecenas vel metus a nisi malesuada lacinia. Donec id eros at augue porta accumsan ut quis velit. </p>
				<img src="Images/Jack&Mick.jpg">
			</div>

			<hr class="line">
			<footer>
				Site By Jack Byrne & Mikey Keddy &copy; 2018
			</footer>
			<hr class="line">

	</body>
</html>