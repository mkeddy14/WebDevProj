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

		<h2>Search Results</h2>
		<hr class="line">
		
		<div id="resultContainer">
			<?php 
				if (isset($_POST['submit-search'])) {
					$search = mysqli_real_escape_string($db, $_POST['search']);
					$sql = "SELECT * FROM games WHERE name LIKE '%$search%' OR console LIKE '%$search%' OR year LIKE '%$search%'";
					$result = mysqli_query($db, $sql);
					$queryResult = mysqli_num_rows($result);

					if ($queryResult > 0) {
						while ($row = mysqli_fetch_assoc($result)) {
							echo "
							<p class='results'> GAME: ".$row['name'].",  CONSOLE: ".$row['console'].",  YEAR: ".$row['year']."</p>
							";
						}		
					} else {
						echo "SORRY! There are no matches for your search";
					}
				}
			?>
		</div>
		
		<hr class="line">
		<footer>
			Site By Jack Byrne & Mikey Keddy &copy; 2018
		</footer>
		<hr class="line">

	</body>
</html>