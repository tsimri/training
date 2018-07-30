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
								<h1 class="card-title">Nazwa: <?php echo $product['Nazwa']?></h1> 
								<div id="carouselExampleControls" class="carousel slide" data-ride="carousel">
									<div class="carousel-inner">
										<?php
											$licz = 0 ;
											$obraz = explode(';', $product['Zdjęcie']);
											foreach($obraz as $tab) {var_dump($tab);
												if ($licz = 1)
												{ 
													$licz++;
										?>
													<div class="carousel-item active">
														<img class="d-block w-100" src="<?php echo $tab ?>" alt="Slide">
													</div>
											<?php
												}
											?>	
												<div class="carousel-item">
													<img class="d-block w-100" src="<?php echo $tab ?>" alt="Slide">
												</div>
											<?php } ?>
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
									<li><h3><p class="card-text">Cena Brutto: <?php echo round (1.23*$product['Cena'], 2);?></p></h3></li>
									<li><h5><p class="card-text">Cena Netto: <?php echo round ($product['Cena']);?></p></h5> 
								</ul>
								<ul><a href="http://localhost/indekser.php" class="btn btn-success btn-lg active" role="button" aria-pressed="true">Koszyk</a></ul>
								<ul class="list-group list-group-flush">
									<h5><li class="list-group-item">Producent: <?php echo   $product['Producent']?></li></h5>
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
			<h1> Dane szczegółowe:</h1>
			<h4><li class="list-group-item">Stream Processors: <?php echo $product['Stream Processors']?></li></h4>
			<h4><li class="list-group-item">Base Frequency: <?php echo $product['Base Frequency']?></li></h4>
			<h4><li class="list-group-item">Boost Frequency: <?php echo $product['Boost Frequency']?></li></h4>
			<h4><li class="list-group-item">Compute Units: <?php echo $product['Compute Units']?></li></h4>
			<h4><li class="list-group-item">Memory: <?php echo $product['Memory']?></li></h4>
			<h5><li class="list-group-item">
				Opis szczegółowy<br>
				<h4>Byle co dałem żeby zapchać</h4><br>
				
				Phantom Gaming X Radeon RX VEGA 56 8G

					Engine Clock / Memory Clock
					Boost Clock: 1471 MHz / 800 MHz
					Base Clock: 1156 MHz / 800 MHz
					Video Memory
					HBM2 8GB
					Features
					Double Ball Bearings Fan Design
					High Performance Composite Vapor Chamber
					Support 8K Resolution
					Graphic Outputs: HDMI, 3 x DisplayPort
					Phantom Gaming Tweak Utility
					Temperature and Fan Speed Monitoring
					Engine / Memory Clock Tweak
					Engine / Memory Voltage Tweak

				This model may not be sold worldwide. Please contact your local dealer for the availability of this model in your region.
				AddThis Sharing Buttons
				Share to FacebookShare to TwitterShare to Google+Share to BaiduShare to VkontakteShare to More

					Overview
					Specification
					Support
					Where to Buy

				Armor Your VR Machine
				Prepare yourself well to enjoy the impressive world of Virtual Reality. Before that, you have to make sure everything is qualified, including hardware, software and drivers. Motherboard is the key to connect every critical components and ASRock’s VR Ready products are definitely the one you’re looking for. The premium quality is assured by rigorous testing during development. The sturdy components and rock-solid performance makes you completely immersive in the VR scenario. Users can be assured to experience VR enjoyments without any compatibility problems.
				THE WORLD’S NEWEST GAMING ARCHITECTURE
				FreeSync™ 2 READY
				Get ready to experience smooth brilliant HDR gaming with Vega. Enjoy vibrant HDR content while eliminating image tears and choppiness for effortlessly smooth gameplay. Low Frame-Rate Compensation, Low Latency, Plug and Play and HDR Ready.
				That’s FreeSync™ 2. FreeSync 2 - over 2x perceivable brightness and color volume over sRGB
				Support 8K Resolution
				Not only can it handles 4K graphics but also supports the next generation 8K video output for the ultimate visual experience.
				AMD Eyefinity Technology
				AMD Eyefinity technology expands the traditional limits of desktop computing by multiplying your screen area. With multiple monitors, games become more immersive, workstations become more useful and you become more productive.
				PHANTOM GAMING TWEAK
				A fast and easy tool that provides users with an abundant collection of subtle settings for professional tweaking such as FAN speed, core clocks, memory frequency and so on. Users may also choose the most optimized mode based on their needs, like OC mode, Silent mode or default mode. Phantom Gaming Tweak delivers more than enough voltage configuration options for anyone who wish to pursuit extremes.
				Radeon™ WattMan®
				Save, load and share custom Radeon™ WattMan profiles to quickly and easily optimize performance or create a personalized gaming experience
				Radeon™ Chill
				Radeon chill designed to save power, lower temperature, Radeon Chill enables high performance graphics when you battle and saves power when you explore.
				Radeon™ ReLive
				Radeon™ ReLive (ReLive) allows users to capture, stream and share gameplay videos and screenshots.
				Capturing gameplay using Radeon ReLive is easy to configure and has a minimal impact on performance, which is measured in frames per second (FPS).
				Enhanced Sync
				Enhanced sync enables low latency gameplay at virtually any framerate and a tear-free experience when your favorite game’s framerate exceeds your display’s refresh rate.1
				Unlock your VSync. Enhanced sync technology delivers a tear-free experience when framerate exceeds your display’s refresh rate at an ultra-low latency to take your E-Sports gaming to the next level.
				Radeon™ Overlay
				The all-new Radeon Overlay lets gamers take performance to the next level with the ability to monitor, record and fine tune their gameplay without ever leaving the game.
				Much like an activity tracker for your PC, Radeon™ Overlay provides one-click access to Radeon™ ReLive, Performance Monitoring, Radeon™ Chill, Frame Rate Target Control (FRTC), Radeon™ FreeSync and Color Settings.
				AMD Link
				AMD Link is a powerful mobile app built to complement Radeon™ Software Adrenalin Edition. It allows you to conveniently access gameplay performance metrics and PC system info on your smartphone and/or tablet. You can easily connect to your PC either by a QR code in Radeon Settings or manually entering the required info. It is designed with today’s socially-connected, mobile-first world in mind - and with the gamer at its center.
			</li></h5>
		</div>
	</body>
</html>