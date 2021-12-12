<?php
include "Connect.php";
$id = $_GET['Updateid'];

@$sql="SELECT * FROM `crud` WHERE `id`='$id'";
@$stmt = $conn->query($sql);
@$row = $stmt->fetch_assoc();
@$name = $row['name'];
@$email = $row['email'];
@$mobile = $row['mobile'];
@$password = $row['password'];

    if (isset($_POST['submit']))
    {
        
        $name = filter_var($_POST['name'], FILTER_SANITIZE_STRING);
        $email = filter_var($_POST['email'], FILTER_SANITIZE_STRING);
        $mobile = filter_var($_POST['mobile'], FILTER_SANITIZE_STRING);
        $password = filter_var($_POST['password'], FILTER_SANITIZE_STRING);
        $pass = sha1($password);
                
        @$sql="UPDATE `crud`
                 SET `id`=$id,`name`='$name',`email`='$email',`mobile`='$mobile',`password`='$pass' 
                 WHERE `id`='$id' ";
        if (@$stmt = $conn->query($sql))
        {
             echo "<p class='alert-warning my-5'>Update Successfull!</p>" ;
        }

    }
?>
<!doctype html>
<html>
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
           
        <form method="post">
                <div class="form-group">
                    <label class="form-label">Name</label>
                    <input type="text" class="form-control"  value="<?php echo $name;?>" name="name" autocomplete="off">
                </div>
                <div class="form-group">
                    <label class="form-label">Email</label>
                    <input type="email" class="form-control" value="<?php echo $email;?>" name="email" autocomplete="off">
                </div>
                <div class="form-group">
                    <label class="form-label">Mobile</label>
                    <input type="text" class="form-control" value="<?php echo $mobile;?>" name="mobile" autocomplete="off">
                </div>
                <div class="form-group">
                    <label class="form-label">Password</label>
                    <input type="password" class="form-control" value="<?php echo $password;?>" name="password" autocomplete="off">
                </div>
                <br>
                <button type="submit" class="btn btn-primary" name="submit">Update</button>
        </form>
        <br>
        <br>
       
      
        <a href="Display.php" class="btn btn-primary text-light">Torna alla Tabella</a>
        <br>
        <br>
        <a href="User.php" class="btn btn-primary text-light">Torna alla Registrazione del utente</a>

</body>
</html>

