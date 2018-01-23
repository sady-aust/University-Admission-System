<?php
session_start();
include "ExcelReader.php";
include "CandidateHscInformation.php";


$applicant_hsc_roll = $_POST["hscroll"];
$applicant_hsc_year = $_POST["hscyear"];
$applicant_hsc_board = $_POST["hscboard"];

$applicant_ssc_roll = $_POST["sscroll"];
$applicant_ssc_year = $_POST["sscyear"];
$applicant_ssc_board = $_POST["sscboard"];

$hscInfoFile = './uploads/files/HSC'.$applicant_hsc_year.'.xlsx';
$sscInfoFile = './uploads/files/SSC'.$applicant_ssc_year.'.xlsx';


if(isset($_POST["submit"])){
  if(!empty($applicant_hsc_roll) && !empty($applicant_hsc_year) && !empty($applicant_hsc_board) && !empty($applicant_ssc_roll) && !empty($applicant_ssc_year) && !empty($applicant_ssc_board)){

      //Getting HSC Information
      $php_excel_HSC = getExcelObject($hscInfoFile);
      $candidateHscInformationArr = getCandidateHSCInfromation($php_excel_HSC,$applicant_hsc_roll);

      //Getting SSC Information
      $php_excel_SSC = getExcelObject($sscInfoFile);
      $candidateSscInformationArr = getCandidateSSCInfromation($php_excel_SSC,$applicant_ssc_roll);

      if($candidateHscInformationArr!=null && $candidateSscInformationArr!=null) {

          $_SESSION["HSCInformation"] = $candidateHscInformationArr;
          $_SESSION["SSCInformation"] = $candidateSscInformationArr;

          header("location: admissionform.php");
          exit;
      }
      else{
          header("location: index.html");
          exit();
      }
     /* $candidateHscInformation = new CandidateHscInformation($candidateHscInformationArr["Roll No"],$candidateHscInformationArr["Registration No"],$candidateHscInformationArr["Name"],$candidateHscInformationArr["Board"],
          $candidateHscInformationArr["Group"],$candidateHscInformationArr["Type"],$candidateHscInformationArr["Result"],$candidateHscInformationArr["GPA"],$candidateHscInformationArr["Father's Name"],
          $candidateHscInformationArr["Mother's Name"],$candidateHscInformationArr["Date of Birth"],$candidateHscInformationArr["Institute"],$candidateHscInformationArr["BANGLA"],$candidateHscInformationArr["ENGLISH"],
          $candidateHscInformationArr["PHYSICS"],$candidateHscInformationArr["CHEMISTRY"],$candidateHscInformationArr["MATHEMATICS"],$candidateHscInformationArr["BIOLOGY"],$candidateHscInformationArr["ICT"]);

      echo $candidateHscInformation->getBangla();
      echo $candidateHscInformation->getHscRoll();*/
     // echo $candidateHscInformationArr["Roll No"];
  }
}


?>