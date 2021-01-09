<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Document</title>
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0-beta1/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-giJF6kkoqNQ00vy+HMDP7azOuL0xtbfIcaT9wjKHr8RbDVddVHyTfAAsrekwKmP1" crossorigin="anonymous">
    </head>
<body>

<?php include_once 'izbornik.php' ?>

<div class="container">
<div class="mb-3">
  <label for="exampleFormControlInput1" class="form-label">Korisnički račun</label>
  <input type="email" class="form-control" id="exampleFormControlInput1" placeholder="name@example.com">
  <label for="inputPassword" class="col-sm-2 col-form-label">Lozinka</label>
  <input type="password" class="form-control" id="inputPassword">
  <a href="nadzornaploca.php">Prijava</a>
</div>

</div>



<?php include_once 'skripte.php' ?>

    
</body>
</html>