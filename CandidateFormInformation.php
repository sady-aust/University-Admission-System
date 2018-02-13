<?php
session_start();
include "DatabaseHandler.php";
$buttonTyped = $_POST["userbtn"];

if (strcmp($buttonTyped, "Cancel") == 0) {

    header("location: index.html");
    exit;
} else if (strcmp($buttonTyped, "Preview") == 0) {
    //  echo "Preview";
    $student_name = $_POST["name"];
    $mothersname = $_POST["mothersname"];
    $fathersname = $_POST["fathersname"];
    $dateofbirth = $_POST["dob"];
    $gender = $_POST["gender"];
    $phone = $_POST["phone"];
    $email = $_POST["email"];
    $bloodgroup = $_POST["bloodgroup"];
    $mediumOfQsPaper = $_POST["medium"];

    $isTribal = $_POST["tribal"];
    $tribalarea = $_POST["tribalarea"];

    $guardianName = $_POST["guardianname"];
    $guardianphone = $_POST["guardianPhone"];
    $relation = $_POST["relation"];
    $guardianEmail = $_POST["guardianemail"];

    $division = $_POST["division"];
    $district = $_POST["district"];
    $thana = $_POST["thana"];
    $address = $_POST["address"];


    $isSameAsPresentAddress = "NO";

    if(isset($_POST['isSameAddress'])){
        $isSameAsPresentAddress = $_POST['isSameAddress'];
    }

    $Pdivision = $_POST["Pdivision"];
    $Pdistrict = $_POST["Pdistrict"];
    $Pthana = $_POST["Pthana"];
    $Paddress = $_POST["Paddress"];

    $sscRoll = $_POST["sscroll"];
    $sscBoard = $_POST["sscboard"];
    $sscInstitute = $_POST["sscInstitue"];
    $sscRegNo = $_POST["sscregNo"];
    $sscPassingYear = $_POST["sscpassingYear"];
    $sscGPA = $_POST["sscGPA"];

    $hscRoll = $_POST["hscroll"];
    $hscBoard = $_POST["hscboard"];
    $hscRegNo = $_POST["hscRegNo"];
    $hscPassingYear = $_POST["hscpassingYear"];
    $hscGPA = $_POST["hscGPA"];
    $physicsGrade = $_POST["physicsGrade"];
    $chemistryGrade = $_POST["chemistrygrade"];
    $mathGrade = $_POST["mathgrade"];
    $engGrade = $_POST["enggrade"];
    $totalGrade = $_POST["totalgrade"];

    $photo_name = $_FILES["photo"]["name"];
    $photo_size = $_FILES["photo"]["size"];
    $photo_type = $_FILES["photo"]["type"];

    //signature
    $signature_name = $_FILES["signature"]["name"];
    $signature_size = $_FILES["signature"]["size"];
    $signature_type = $_FILES["signature"]["type"];

    $signature_temp_storage_name = $_FILES["signature"]["tmp_name"];
    $photo_temp_storage_name = $_FILES["photo"]["tmp_name"];

    $photoextension = strtolower(substr($photo_name,strpos($photo_name,".")+1));
    $signatureextension = strtolower(substr($signature_name,strpos($signature_name,".")+1));

    $connection = createConnection();


   if($connection){
      $generalres= insertIntogenerelInforamtionTable($connection,$student_name,$gender,$phone,$dateofbirth,$fathersname,$mothersname,$email,$isTribal,$mediumOfQsPaper,$tribalarea);
     $applicantId = mysqli_insert_id($connection);

       $picandsignres= null;
       $parmanentres = null;
       $presentres = null;

    $guardianres= insertGurdianInformation($connection,$applicantId,$guardianName,$relation,$guardianphone,$guardianEmail);
    $hscres= insertIntoHscInforamtionTable($connection,$applicantId,$hscRoll,$hscRegNo,$hscBoard,$hscGPA,$hscPassingYear,$physicsGrade,$chemistryGrade,$mathGrade,$engGrade,$totalGrade);
    $sscres= insertIntoSSCInforamtionTable($connection,$applicantId,$sscRoll,$sscRegNo,$sscBoard,$sscGPA,$sscInstitute,$sscPassingYear);

       $presentres =insertPresetntAddress($connection,$applicantId,$division,$district,$thana,$address);


     if(strcmp($isSameAsPresentAddress,"YES")==0){
         $parmanentres=insertParmamentAddress($connection,$applicantId,$division,$district,$thana,$address);
     }
     else{
         $parmanentres= insertParmamentAddress($connection,$applicantId,$Pdivision,$Pdistrict,$Pthana,$Paddress);
     }

        if(isset($photo_name)){
            if(!empty($photo_name)){
                if($photoextension=="png" || $photoextension=="jpeg"){
                    $directory = "photo/";
                    move_uploaded_file($photo_temp_storage_name,$directory.$applicantId.".".$photoextension);

                }
            }
        }

        if(isset($signature_name)){
            if(!empty($signature_name)){
                if($signatureextension=="png" || $signatureextension=="jpeg"){
                    $sigDirectory = "signature/";
                    move_uploaded_file($signature_temp_storage_name,$sigDirectory.$applicantId.".".$signatureextension);

                }
            }
        }

       $picandsignres =  insertIntoPicAndSignTable($connection,$applicantId.".".$photoextension,$applicantId.".".$signatureextension,$applicantId);
      $applicantres = applicationComplete($connection,$applicantId);

      if($generalres!= null && $picandsignres!=null & $parmanentres!=null && $parmanentres!=null && $presentres!=null && $guardianres!=null && $hscres!=null && $picandsignres!=null && $applicantres!=null ){
          $_SESSION["applicantId"] = $applicantId;

          header("location: candidatedashboard.php");
          exit;
      }

    }
   // echo  $photo_type;


  //  echo $photo_name." ".$photo_size." ".$photo_size;

    //   echo $name." ".$mothersname." ".$fathersname." ".$dateofbirth." ".$gender." ".$phone." ".$email." ".$bloodgroup;
    // echo $_FILES["uploadedFile"];



}


?>