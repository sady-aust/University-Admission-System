<?php
session_start();
include "DatabseConnection.php";
 $file_name = $_FILES["uploadedFile"]["name"];
 $file_size = $_FILES["uploadedFile"]["size"];
 $file_type = $_FILES["uploadedFile"]["type"];

 $temp_storage_name = $_FILES["uploadedFile"]["tmp_name"];



 //Upload Table
$TABLENAME = "upload";

//Upload Table COLUMNS
$ADMIN_ID = "AdminId";
$UPLOAD_DATE = "UploadDate";
$FILE_NAME = "FileName";
$COMMENT = "Comment";
$UPLOADSECTION = "UploadSection";


 $extension = strtolower(substr($file_name,strpos($file_name,".")+1));
 if(isset($file_name)){
     if(!empty($file_name)){
         if($extension=="xlsx" && $file_type =="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"){
             $directory = "uploads/files/";
             if(move_uploaded_file($temp_storage_name,$directory.$file_name)){
                 echo "Uploaded";

                 //Inserting this Event In Upload Table
                 $conenction = createConnection();

                 if(!$conenction){
                    echo "There Is an Error ".mysqli_connect_error();
                 }
                 else{
                     $comment = $_POST["comment"];
                     $adminid =  $_SESSION["adminId"];
                     $uploadDate = date("Y-m-d");
                     $section = "FILE";

                     $INSERTINGEVENTQUERY = "INSERT INTO ".$TABLENAME."(".$ADMIN_ID.",".$UPLOAD_DATE.",".$FILE_NAME.",".$COMMENT.",".$UPLOADSECTION.")
                                             VALUES ("."'".$adminid."',"."'".$uploadDate."',"."'".$file_name."',"."'".$comment."','".$section."')";
                      $result = mysqli_query($conenction,$INSERTINGEVENTQUERY);

                      if($result>0){
                          header("Location: upload.php");
                          exit;
                      }
                 }

             }
             else{
                 echo "Not Uploaded";
             }
         }
     }
 }


 ?>

