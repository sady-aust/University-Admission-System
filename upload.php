<?php
$file_name = $_FILES["uploadedFile"]["name"];
$file_size = $_FILES["uploadedFile"]["size"];
$file_type = $_FILES["uploadedFile"]["type"];
$temp_storage_name = $_FILES["uploadedFile"]["tmp_name"];

$extension = strtolower(substr($file_name,strpos($file_name,".")+1));

if(isset($file_name)){
    if(!empty($file_name)){
        if($extension=="xlsx" && $file_type=="application/vnd.openxmlformats-officedocument.spreadsheetml.sheet"){
            $directory = "uploads/files/";
            if(move_uploaded_file($temp_storage_name,$directory.$file_name)){
                echo "Uploaded";
            }
            else{
                echo "File Not Uploaded";
            }

        }
    }
    else{
        echo "Please Upload a file";
    }
}
?>


