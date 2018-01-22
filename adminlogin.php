<?php

session_start();

$host = "localhost";
$user = "root";

$databaseName = "universityadmissionsystem";
$tableName = "admin";

//Table Colamns Name
$ADMINID = "adminId";
$ADMINNAME = "Name";
$PASSWORD = "Password";
$EMAIL = "Email";
$USERNAME = "UserName";

$connection = mysqli_connect($host,$user,"",$databaseName);

if(!$connection){
    echo "There is an error ".mysqli_connect_error();

}
else{
   if(isset($_POST["Login"])){
       $adminUserName = $_POST["username"];
       $adminPasswrod = $_POST["password"];
       if(!empty($adminUserName) && !empty($adminPasswrod)){
           $selectQuery = "SELECT * FROM ".$tableName." WHERE UserName="."'".$adminUserName."'"."AND Password="."'".$adminPasswrod."'";
           $result = mysqli_query($connection,$selectQuery);
           $row = mysqli_fetch_assoc($result);
          // echo $row[$ADMINID]." ".$row[$ADMINNAME]." ".$row[$USERNAME]." ".$row[$EMAIL];
           $_SESSION["adminId"] = $row[$ADMINID];
           $_SESSION["adminName"] = $row[$ADMINNAME];
           $_SESSION["username"] = $row[$USERNAME];
           $_SESSION["email"] = $row[$EMAIL];

            header("location: adminpannel.php");
            exit;
       }
       else{

       }
   }
}


?>