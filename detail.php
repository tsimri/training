<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
		<title>Detail</title>
		<style type="text/css">
			a {
			color: green;
			text-decoration: none;
			}
		</style>
	</head>
	<body>
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
				<span class="navbar-toggler-icon"></span>
			</button>	
		  </nav>
		</div>
		<?php
			$id = $_GET['id'];
			$sqlQuery = "SELECT*FROM parts WHERE id = {$id}";
			var_dump ($sqlQuery);
			$link = mysqli_connect
			("127.0.0.1", "root", "kjHGIUyt","shop");
			$q = "SELECT * FROM parts WHERE id = {$id}";
			$result = mysqli_query ($link,$q);	
			$product = mysqli_fetch_assoc ($result) ;
		?>
	<div class="container-fluid mt-5 mb-5">	
		<div class='row mt-3 mb-3'>
			<div style="width:auto; height:auto; margin:0px auto; float:left;">
				<div class="col-sm">
					<div class="card">
						<div class="card-body">
							<h2 class="card-title">Nazwa: <?php echo $product['Nazwa']?></h2> 
							<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
							    <div class="carousel-inner">
									<div class="carousel-item active">
										<img class="d-block w-100" src="<?php echo $product['Zdjęcie']?>" alt="First slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="<?php echo $product['Zdjęcie']?>" alt="Second slide">
									</div>
									<div class="carousel-item">
										<img class="d-block w-100" src="<?php echo $product['Zdjęcie']?>" alt="Third slide">
									</div>
							    </div>
								<a class="carousel-control-prev" href="#carouselExampleControls" role="button" data-slide="prev">
									<span class="carousel-control-prev-icon" aria-hidden="true"></span>
									<span class="sr-only">Previous</span>
								</a>
								<a class="carousel-control-next" href="#carouselExampleControls" role="button" data-slide="next">
									<span class="carousel-control-next-icon" aria-hidden="true"></span>
									<span class="sr-only">Next</span>
								</a>
							</div>
						</div>	
					</div>		
				</div>	
			</div>	
				<div class="col-sm">
					<div class="card">
						<div class="card-body">
							<ul>
								<li><h4><p class="card-text">Cena Brutto: <?php echo round (1.23*$product['CenaB'], 2);?></p></h4></li>
								<li><h5><p class="card-text">Cena Netto: <?php echo round (1.23*$product['Cena'], 2);?></p></h5> 
							</ul>
							<ul><a href="http://localhost/indekser.php" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Koszyk</a></ul>
							<ul class="list-group list-group-flush">
								<h5><li class="list-group-item">Producent: <?php echo   $product['Producent']?></li></h5>
								<h5><li class="list-group-item">Stream Processors: <?php echo $product['Stream Processors']?></li></h5>
								<h5><li class="list-group-item">Base Frequency: <?php echo $product['Base Frequency']?></li></h5>
								<h5><li class="list-group-item">Boost Frequency: <?php echo $product['Boost Frequency']?></li></h5>
								<h5><li class="list-group-item">Compute Units: <?php echo $product['Compute Units']?></li></h5>
								<h5><li class="list-group-item">Memory: <?php echo $product['Memory']?></li></h5>
								<h6><li class="list-group-item">Ilość: <?php echo $product['Ilość']?></li></h6>
								<h6><li class="list-group-item">Status: <?php echo $product['Status']?></li></h6>
							</ul>
						</div>	
						 <h4><div class="card-body">
							<a href="<?php echo $product['Linof']?>" target="_blank" class="card-link">Link do strony producenta</a> </h4>
						</div>
					</div>	
				</div>		
		</div>
	</div>
	</body>
</html>