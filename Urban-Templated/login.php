<!DOCTYPE HTML>
<!--
	Urban by TEMPLATED
	templated.co @templatedco
	Released for free under the Creative Commons Attribution 3.0 license (templated.co/license)
-->
<html>
	<head>
		<title>Zimski zadatak</title>
		<meta charset="utf-8" />
		<meta name="viewport" content="width=device-width, initial-scale=1" />
		<link rel="stylesheet" href="assets/css/main.css" />
	</head>
	<body>

		<!-- Header -->
		<?php include_once 'zaglavlje.php'?>

		<!-- Nav -->
		<?php include_once 'izbornik.php'?>

		<!-- Banner -->
			<section id="banner">
				<div class="inner">
					<header>
						<h1>Zimski rad</h1>
						<p>Log in stranica</p>
					</header>					
				</div>
			</section>

		<!-- Main -->
			<div id="main">
			<section class="wrapper style1">
						<div class="inner">
							<!-- 1 Column -->
								<div class="flex flex-2">
									
									<div class="col col1">
										<label for="">Korisnički račun</label>
										<input type="text">
										</br>
										<label for="">Lozinka</label>
										<input type="text">
										</br>
										<button onclick="location.href='nadzornaploca.php'">Prijava</button>
									</div>
								</div>
						</div>
					</section>
			</div>

		<!-- Footer -->
			<?php include_once 'podnozje.php'; ?>

		<!-- Scripts -->
			<?php include_once 'skripte.php'; ?>

	</body>
</html>