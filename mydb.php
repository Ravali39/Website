
<?php

$i=0;
if($_SERVER['REQUEST_METHOD']=="GET")
{
      $localhost = "localhost";
      $username = "root";
      $passwordw = "root";
      $db = "expdb";
      
$conn = mysqli_connect($localhost,$usernme,$passwordw,$db);
if(!$conn)
     {
            echo "Connection error";
      }
  else
   {
       echo "";

    }
}
?>