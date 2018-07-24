<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
		<title>Strona główna</title>
	</head>
	
	<body>
		<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
		<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js" integrity="sha384-ZMP7rVo3mIykV+2+9J3UJ46jBk0WLaUAdn689aCwoqbBJiSnjAK/l8WvCWPIPm49" crossorigin="anonymous"></script>
		<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/js/bootstrap.min.js" integrity="sha384-o+RDsa0aLu++PJvFqy8fFScvbHFLtbvScb8AjopnFD+iEQ7wo/CG0xlczd+2O/em" crossorigin="anonymous"></script>
		<?php
			$link = mysqli_connect
			("127.0.0.1", "root", "kjHGIUyt","shop");
			$q = "SELECT * FROM parts";
			$result = mysqli_query ($link,$q);
		?>
		<div class="container mt-5 mb-5">
			<div class="row mt-3 mb-3">
				<?php	
					while ($product = mysqli_fetch_assoc ($result)) {
				?>
				<div class="col-sm">
					<div class="card">
						<img class='cart-img-top img-fluid' style='width=93rem' src="<?php echo $product['Zdjęcie']?>" >
						<div class="card-body">
							<h2 class="card-title">Producent: <?php echo $product['Producent']?></h2>
							<h4>	
								<p class="card-text">Nazwa: <?php echo $product['Nazwa']?></p>
							</h4>
							<h1 class="card-text" style="color:red">Cena: <?php echo $product['Cena']?></h1>
							<h6 class="card-text" style="color:green">Ilość sztuk: <?php echo $product['Ilość']?></h6
							<h5><a href="http://localhost/detail.php?id=<?php echo $product['id']?>">Link do szczegółów.</a></h5>							</div>	
					</div>
				</div>
				<?php
					}
				?>
			</div>
		</div>
	</body>
</html>