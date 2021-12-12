<?php 
include "Connect.php";
?>
<!doctype html>
<html lang="it">
  <head>
    <!-- Required meta tags -->
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">

    <!-- Bootstrap CSS -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">

    <title>Crud Operation</title>
  </head>
  <body>
    <h1 class="text-center my-4">Crud Application PHP/MYSQL</h1>
     <div class="container my-5">
        <form method="post" action="insert.php">
                <div class="form-group">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control"  placeholder="Enter your Name" name="name" autocomplete="off">
                </div>
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" placeholder="Enter your Email" name="email" autocomplete="off">
                </div>
                <div class="form-group">
                    <label class="form-label">Mobile</label>
                    <input type="text" class="form-control" placeholder="Enter your Mobile" name="mobile" autocomplete="off">
                </div>
                <div class="form-group">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" placeholder="Enter your password" name="password" autocomplete="off">
                </div>
                <br>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
        </form>
     </div>
     
     <button class="btn btn-primary"><a href="Display.php" class="text-light">Torna al Display</a></button>

  </body>
</html>
