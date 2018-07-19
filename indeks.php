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
		<div class="col-lg text-left">

		<?php	
			while ($product = mysqli_fetch_assoc ($result)) {    // w tym miejscu mamy tak jakby pierwszą kolumne tablie
		?>     <!-- W tym miejscu konczym skrytp PHP a zaczynaymy HTML -->
                    <div class="card-body">
					<h1 style="color:red"> <img src= <?php echo $product['Zdjęcie']?>></h1>
                        <h2 class="card-title">Producent: <?php echo $product['Producent']?></h2>
                            <h4>	
                                <p class="card-text">Nazwa: <?php echo $product['Nazwa']?></p>
                            </h4>
                            <h1 class="card-text" style="color:red">Cena: <?php echo $product['Cena']?></h1>
							<h6 class="card-text" style="color:green">Ilość sztuk: <?php echo $product['Ilość']?></h6>
                    </div>
				</div>
			</div>
        <?php

        }
			?>
		<?php
			/*$q = mysqli_query($link,$q);
			echo '<ul>';
			foreach($link as $linia)
			{
				echo '<li>'.trim($linia).'</li>';	
			}
			echo '</ul>';*/
		?>	
	</body>
</html>