<?php

session_start();
include "DatabseConnection.php";

$host = "localhost";
$user = "root";

$databaseName = "universityadmissionsystem";
$tableName = "admin";

//Table Colamns Name
$ADMINID = "AdminId";
$ADMINNAME = "Name";
$PASSWORD = "Password";
$EMAIL = "Email";
$USERNAME = "UserName";

$connection = createConnection();

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

           if(strcmp($adminUserName,$row[$USERNAME])==0 && strcmp($adminPasswrod,$row[$PASSWORD])==0) {

               $_SESSION["adminId"] = $row[$ADMINID];
               $_SESSION["adminName"] = $row[$ADMINNAME];
               $_SESSION["username"] = $row[$USERNAME];
               $_SESSION["email"] = $row[$EMAIL];

               header("location: adminpannel.php");
               exit;
           }
           else{
               header("location: index.html");
               exit;
           }
       }
       else{

       }
   }
}


?>