<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
		<title>Detail</title>
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
					<a class="nav-link active" href="http://localhost/indeks.php">Strona główna</a>
				  </li>
				  <li class="nav-item">
					<a class="nav-link" href="http://localhost/indekser.php">Link</a>
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
		?>
		<?php
			$link = mysqli_connect
			("127.0.0.1", "root", "kjHGIUyt","shop");
			$q = "SELECT * FROM parts";
			$result = mysqli_query ($link,$q);
		?>
		<?php	
			$product = mysqli_fetch_assoc ($result) ;
		?>
			<div class="col-sm">
				<div class="card">
					<div id="carouselExampleIndicators" class="carousel slide" data-ride="carousel">
						<ol class="carousel-indicators">
							<li data-target="#carouselExampleIndicators" data-slide-to="0" class="active"></li>
							<li data-target="#carouselExampleIndicators" data-slide-to="1"></li>
						</ol>
						<div class="carousel-inner">
							<div class="carousel-item active">
								<img class="d-block w-100" src="link zdjęcia" alt="0">
							</div>
							<div class="carousel-item">
								<img class="d-block w-100" src="link zdjęcia" alt="1">
							</div>
						</div>
						<a class="carousel-control-prev" href="" role="button" data-slide="prev">
							<span class="carousel-control-prev-icon" aria-hidden="true"></span>
							<span class="sr-only">Previous</span>
						</a>
						<a class="carousel-control-next" href="" role="button" data-slide="next">
							<span class="carousel-control-next-icon" aria-hidden="true"></span>
							<span class="sr-only">Next</span>
						</a>
					</div>
					<div class="card-body">
						<h2 class="card-title">Nazwa: <?php echo $product['Nazwa']?></h2> 
						<h4><p class="card-text">Cena: <?php echo $product['Cena']?></p> </h4>
						<ul class="list-group list-group-flush">
							<li class="list-group-item">Producent: <?php echo $product['Producent']?></li>
						</ul> <h5>
					</div>
					<div class="card-body"> <h5>
						<a href="<?php echo $product['Linof']?>" target="_blank" class="card-link">Link</a> </h5>
					</div>
				</div>
			</div>
	</body>
</html>