<html>
	<head>
		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
		<link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.1.2/css/bootstrap.min.css" integrity="sha384-Smlep5jCw/wG7hdkwQ/Z5nLIefveQRIY9nfy6xoR1uRYBtpZgI6339F5dgvm/e9B" crossorigin="anonymous">
		<title>Strona główna</title>
		<style type="text/css">
			a {
			color: green;
			text-decoration: none;
			}
			
			#blok {
				position:fixed;
				right:0;
				bottom:0;
			}
			.button {
				background-color: #4CAF50;
				color: white;
				padding: 20px;
				text-align: center;
				display: inline-block;
				font-size: 16px;
				margin: 8px 4px;
				border-radius: 50%;
			}

		</style>
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
				<span class="navbar-toggler-icon"></span>
			</button>	
		  </nav>
		</div>
		<?php
			$link = mysqli_connect
			("127.0.0.1", "root", "kjHGIUyt","shop");
			$q = "SELECT * FROM parts";
			$result = mysqli_query ($link,$q);
		?>
		<div class="container-fluid mt-5 mb-5">
			<?php
				$koniec = 0;	
				$zmiana = 0;
				while ($product = mysqli_fetch_assoc ($result)) { 
					if ($zmiana %4 === 0){ 
			?>
					<div class="row mt-3 mb-3">
						
						<?php 
							}	
						?>
						<div class = "col-sm">
							<div class="card h-100">	
								<img class='img-thumbnail' style='max-height:10rem max-width:12rem'  src="<?php echo $product['Zdjęcie']?>" >
								<div class="card-body">
									<h2 class="card-title">Producent: <?php echo $product['Producent']?></h2>
									<h4><p class="card-text">Nazwa: <?php echo $product['Nazwa']?></p></h4>
									<h1 class="card-text" style="color:red">Cena: <?php echo round (1.23*$product['Cena'], 2);?></h1>
									<h6 class="card-text" style="color:green">Ilość sztuk: <?php echo $product['Ilość']?></h6>
									<h5><a href="http://localhost/detail.php?id=<?php echo $product['id']?>"><i class="fas fa-box-open"></i>  Link do szczegółów.</a></h5>
								</div>	
							</div>
						</div>
						<?php	
							if ($koniec === 3){
								$koniec = -1;						
						?>	
					</div>
			<?php
							}
					$zmiana++;
					$koniec++;
				}
			?>		
			<div id="blok">
				<button type="button" style="font-size:48;" class="button fas fa-envelope" data-toggle="modal" data-target="#exampleModalLong">
				</button> 
			</div>	
			<div class="modal fade" id="exampleModalLong" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
				<div class="modal-dialog" role="document">
					<div class="modal-content">
						<div class="modal-header">
							<h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
							<button type="button" class="close" data-dismiss="modal" aria-label="Close">
								<span aria-hidden="true">&times;</span>
							</button>
						</div>
						<div class="modal-body">
							...
						</div>
						<div class="modal-footer">
							<button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
							<button type="button" class="btn btn-primary">Save changes</button>
						</div>
					</div>
				</div>
			</div>
		</div>
	</body>
</html>
<!-- 

 -->