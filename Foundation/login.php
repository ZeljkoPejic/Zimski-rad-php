<?php include_once 'konfiguracija.php'; ?>
<!doctype html>
<html class="no-js" lang="en" dir="ltr">
  <head>
  <meta charset="utf-8">
    <meta http-equiv="x-ua-compatible" content="ie=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Log in</title>
    <link rel="stylesheet" href="css/foundation.css">
    <link rel="stylesheet" href="css/app.css">
  </head>
  <body>

<!-- izbornik -->
<?php include_once 'izbornik.php'; ?>
<!-- izbornik -->

<!-- pocetak tijelo -->
<div class="grid-container">
    <div class="grid-x grid-padding-x">
      <div class="medium-4 cell">
        <label>Korisnički račun:
          <input type="text" placeholder="Račun">
        </label>
        <label>Lozinka:
          <input type="text" placeholder="Lozinka">
        </label>
        <a href="nadzornaploca.php">Prijava</a>
      </div>
    </div>
  </div>
<!-- kraj tijelo -->

<!-- pocetak podnozje -->
<?php include_once 'podnozje.php'; ?>
<!-- kraj podnozje -->

<!-- skripte -->
<?php include_once 'skripte.php'; ?>
<!-- skripte -->


  </body>
  </html>