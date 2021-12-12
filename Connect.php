<?php
try
{
  @$conn = new mysqli("localhost","root","","crudoperation");
  if ($conn){
   // header("Location: display.min.php");
   }
}
catch(mysqli_sql_exception $e)
{
  echo "ERROR: ".$e->getMessage();
}
