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
      <?php
      include "Connect.php";

        if (isset($_GET['Deleteid'])){
          $id = $_GET['Deleteid'];
          $sql ="DELETE FROM `crud` WHERE `id`='$id'";
          if($stmt = $conn->query($sql))
          {
              echo "<p class='text-center alert-warning'>Deleted Success! </p>";
              // header("LOcation: Display.php");
          }else{
              echo $conn->error;
              die;
          }
        }

      ?>

      <a href="Display.php" class="btn btn-primary text-light">Torna alla Tabella</a>
      <br>
      <a href="User.php" class="btn btn-primary text-light">Torna alla Registrazione del utente</a>
</body>
</html>

