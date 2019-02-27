<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
		<title>Koszyk</title>
	</head>
	<body>
		<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.2.0/css/all.css" integrity="sha384-hWVjflwFxL6sNzntih27bfxkr27PmbbK/iSvJ+a4+0owXq79v+lsFkW54bOGbiDQ" crossorigin="anonymous">
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
		<div class="pos-f-t">
			<div class="collapse" id="navbarToggleExternalContent">
				<div class="bg-dark p-4">
					<ul class="nav nav-pills nav-fill">
						<li class="nav-item">
							<a class="nav-link active;  btn-success" href="http://localhost/indeks.php">Strona główna</a>
						</li>
						<li class="nav-item">
							<a class="nav-link; text-success" href="http://localhost/indekser.php">Link</a>
						</li>
						<li class="nav-item">
							<a class="nav-link disabled" href="http://localhost/indekser.php">Nieaktywny</a>
						</li>
					</ul>
				</div>
			</div>
		  <nav class="navbar navbar-dark bg-dark">
			<button class="btn btn-outline-success" type="button" data-toggle="collapse" data-target="#navbarToggleExternalContent" aria-controls="navbarToggleExternalContent" aria-expanded="false" aria-label="Toggle navigation">
				<b>SKLEP</b>
				<span class="navbar-toggler-icon"></span>
			</button>	
		  </nav>
		</div>
			 <?php
				$servername = "localhost";
				$username = "root";
				$password = "kjHGIUyt";
				$dbname = "shop";
				$conn = new mysqli($servername, $username, $password, $dbname);
				if ($conn->connect_error) {
					die("Connection failed: " . $conn->connect_error);
				}
			?> 
		<div class="alert alert-secondary" role="alert" align="center">
			Twój koszyk jest pusty! <br>
			Wróć na <b><a href="http://localhost/indeks.php" class="alert-link">Stronę główną</a></b>.
		</div>
		<ul class="list-group">
			<li class="list-group-item">
				<form action="koszyk.php" method="post">
					<input type="text" name='ilosc' placeholder="Ilość sztuk">
					<input type="submit" value="Zatwierdź">
				</form>
				<?php 
					$usernamei ='zenek@test.pl';
					if (isset($_POST['ilosc']))
					{
						$ilosc=$_POST['ilosc'];
					}	
					else 
					{
						$ilosc=1;
					}
					
					if (isset($_POST['part_id']))
					{
						$part_id=$_POST['part_id'];
					}	
					else 
					{
						$part_id=1;
					}
				?>
				<?php 
					echo $part_id;
					?><br><?php
					echo $ilosc;
					$q = "SELECT * FROM parts WHERE part_id = {$part_id}";
					$sql = "insert into koszyk (part_id,quantity,user) values ('$part_id',$ilosc,'usernamei')";
					$link = mysqli_connect
					("127.0.0.1", "root", "kjHGIUyt","shop");
					$result = mysqli_query ($link,$q,$sql);
					$conw = mysqli_fetch_assoc ($result);
					
				?>
			</li>
			<li class="list-group-item">
			<?php 
			echo $usernamei;
			?>
			</li>
		</ul>
	</body>
</html>