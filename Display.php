<!DOCTYPE html>
<html lang="it">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>CRUD Application</title>
     <!-- Bootstrap CSS -->
     <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.1.3/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-1BmE4kWBq78iYhFldvKuhfTAU6auU8tT94WrHftjDbrCEXSU1oBoqyl2QvZ6jIW3" crossorigin="anonymous">
</head>
<body>
<h1 class="text-center my-4">Crud Application PHP/MYSQL</h1>
    <div class="container">
        <button class="btn btn-primary my-5">
            <a href="User.php" class="text-light">Aggiungi Utente</a>
        </button>
    </div>
    <table class="table caption-top">
    <caption class="text-center">Lista di utenti</caption>
        <thead>
            <tr>
                <th scope="col">#</th>
                <th scope="col">Name</th>
                <th scope="col">Email</th>
                <th scope="col">Mobile</th>
                <th scope="col">Password</th>
                <th scope="col">Operazione</th>
            </tr>
        </thead>
        <tbody>
         <?php
          include "Connect.php";  
          @$sql = "SELECT `id`,`name`,`email`,`mobile`,`password` FROM `crud`";
          @$stmt = $conn->query($sql);
           while($row = $stmt->fetch_assoc()) 
           {
               @$id = $row['id'];
               @$name = $row['name'];
               @$email = $row['email'];
               @$mobile = $row['mobile'];
               @$password = $row['password'];
                echo'<tr>
                    <th scope="row">'.$id.'</th>
                    <td>'.$name.'</td>
                    <td>'.$email.'</td>
                    <td>'.$mobile.'</td>
                    <td>'.$password.'</td>
                    <td>
                    <button class="btn btn-primary">
                    <a href="Update.php?Updateid='.$id.' " class="text-light">Update</a></button>
                    <button class="btn btn-danger">
                    <a href="Delete.php?Deleteid='.$id.' " class="text-light">Delete</a></button>
                    </td>
                </tr>';
           } 
        ?>
       
     </tbody>
</table>
</body>
</html>