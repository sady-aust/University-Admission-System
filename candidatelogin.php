<?php


$applicant_hsc_roll = $_POST["hscroll"];
$applicant_hsc_year = $_POST["hscyear"];
$applicant_hsc_board = $_POST["hscboard"];

$applicant_ssc_roll = $_POST["sscroll"];
$applicant_ssc_year = $_POST["sscboard"];
$applicant_ssc_board = $_POST["sscyear"];

if(isset($_POST["submit"])){
    if(!empty($applicant_hsc_roll) && !empty($applicant_hsc_year) && !empty($applicant_hsc_board) && !empty($applicant_ssc_roll) && !empty($applicant_ssc_year) && !empty($applicant_ssc_board)){
        echo $applicant_hsc_roll;
    }
}


?>