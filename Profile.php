<?php include ('server.php');

	if (isset($_GET['edit'])) {
		$id = $_GET['edit'];
		$update = true;
		$record = mysqli_query($db, "SELECT * FROM ratings WHERE id=$id");

		if (count($record) == 1 ) {
			$n = mysqli_fetch_array($record);
			$game = $n['game'];
			$rating= $n['rating'];
		}
	}
?>
<!DOCTYPE html>
<php>
	<head>
		<link rel="stylesheet" type="text/css" href="CSS/Site.css">
		<title>Jack&Micks</title>
		<script type="text/javascript">
		</script>
	</head>

	<body>
		<?php require_once 'server.php'; ?>

		<?php
			$db = mysqli_connect('localhost', 'root', '', 'registration');
		?>

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

		<?php 
			if (isset($_SESSION["username"])): ?> 
				<h2><?php echo $_SESSION["username"]; ?>'s Profile</h2>
		<?php endif ?>
		<hr class="line">
		
		<div id="ProfileContainer">
			<div id="ProfilePic">
				<img src="Images/RDR2C.jpeg" alt="Pict1">
			</div>
			<?php 
				$q = "SELECT * FROM ratings";
				$res = mysqli_query($db, $q);

				$q2 = "SELECT * FROM info";
				$res2 = mysqli_query($db, $q2);
				

				function pre_r( $array ) {
					echo '<pre>';
					print_r($array);
					echo '<pre>';
				}
				?>
			<div>
				<table>
					<thead>
						<tr>
							<th>Name</th>
							<th>Address</th>
							<th>Fav Game</th>
							<th colspan="2">Action</th>
						</tr>
					</thead>
				<?php 
					while ($row2 = $res2->fetch_assoc()): ?> 
						<tr>
							<td><?php echo $row2['fullname']; ?></td>
							<td><?php echo $row2['address']; ?></td>
							<td><?php echo $row2['favgame']; ?></td>
							<td>
								<a href="Profile.php?deleted=<?php echo $row2['pid']; ?>" class="del_btn">Delete</a>
							</td>
						</tr>
					<?php endwhile; ?>
				</table>
			</div>
			<form action="server.php" method="POST">
					<div class="input-group">
						<input type="hidden" name="pid" value="<?php echo $fullname; ?>">
						<label>Fullname</label>
						<input type="text" name="fullname" value="<?php echo $fullname; ?>" class="form-control" placeholder="Enter fullname...">
					</div>
					<div class="input-group">
						<label>Address</label>
						<input type="text" name="address" value="<?php echo $address; ?>" class="form-control" placeholder="Enter Address..">
					</div>
					<div class="input-group">
						<label>Fav Game</label>
						<input type="text" name="favgame" value="<?php echo $favgame; ?>" class="form-control" placeholder="Enter FavGame...">
					</div>
					<div class="input-group">
						<?php if($update2 == true): ?>
							<button type="submit" class="btn" name="Update">Update</button>
						<?php else: ?>
							<button type="submit" class="btn" name="saved">Save</button>
						<?php endif ?>
					</div>
				</form>
				<table>
					<thead>
						<tr>
							<th>My Games</th>
							<th>Rating</th>
							<th colspan="2">Action</th>
						</tr>
					</thead>
				<?php 
					while ($rows = $res->fetch_assoc()): ?> 
						<tr>
							<td><?php echo $rows['game']; ?></td>
							<td><?php echo $rows['rating']; ?></td>
							<td>
								<a href="Profile.php?edit=<?php echo $rows['id']; ?>" class="edit_btn">Edit</a>
							</td>
							<td>
								<a href="Profile.php?delete=<?php echo $rows['id']; ?>" class="del_btn">Delete</a>
							</td>
						</tr>
					<?php endwhile; ?>
				</table>
			</div>

			<div class="row justify-content-center">
				<form action="server.php" method="POST">
					<div class="input-group">
						<input type="hidden" name="id" value="<?php echo $game; ?>">
						<label>Game</label>
						<input type="text" name="game" value="<?php echo $game; ?>" class="form-control" placeholder="Enter Game Name...">
					</div>
					<div class="input-group">
						<label>Rating</label>
						<input type="text" name="rating" value="<?php echo $rating; ?>" class="form-control" placeholder="Enter Game Rating...">
					</div>
					<div class="input-group">
						<?php if($update == true): ?>
							<button type="submit" class="btn" name="Update">Update</button>
						<?php else: ?>
							<button type="submit" class="btn" name="save">Save</button>
						<?php endif ?>
					</div>
				</form>
		</div>

		<hr class="line">
		<footer>
			Site By Jack Byrne & Mikey Keddy &copy; 2018
		</footer>
		<hr class="line">

	</body>
</php>