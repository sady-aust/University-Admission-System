<?php
session_start();
include "ExcelReader.php";
include "CandidateHscInformation.php";
include "DatabaseHandler.php";


$applicant_hsc_roll = $_POST["hscroll"];
$applicant_hsc_year = $_POST["hscyear"];
$applicant_hsc_board = $_POST["hscboard"];

$applicant_ssc_roll = $_POST["sscroll"];
$applicant_ssc_year = $_POST["sscyear"];
$applicant_ssc_board = $_POST["sscboard"];

$hscInfoFile = './uploads/files/HSC' . $applicant_hsc_year . '.xlsx';
$sscInfoFile = './uploads/files/SSC' . $applicant_ssc_year . '.xlsx';


if (isset($_POST["submit"])) {
    if (!empty($applicant_hsc_roll) && !empty($applicant_hsc_year) && !empty($applicant_hsc_board) && !empty($applicant_ssc_roll) && !empty($applicant_ssc_year) && !empty($applicant_ssc_board)) {

            $connection = createConnection();

            if (!$connection) {
                echo "Not Connected to Database";
            } else {
                $res = getApplicantSscAndHscInfo($connection, $applicant_ssc_roll, $applicant_ssc_board, $applicant_ssc_year, $applicant_hsc_roll, $applicant_hsc_board, $applicant_hsc_year);

                if (mysqli_num_rows($res) == 1) {
                    $row = mysqli_fetch_assoc($res);
                    $_SESSION["applicantId"] = $row["ApplicantId"];
                    header("location: candidatedashboard.php");
                    exit;
                }
                else{

                    //Getting HSC Information
                    $php_excel_HSC = getExcelObject($hscInfoFile);
                    $candidateHscInformationArr = getCandidateHSCInfromation($php_excel_HSC, $applicant_hsc_roll);

                    //Getting SSC Information
                    $php_excel_SSC = getExcelObject($sscInfoFile);
                    $candidateSscInformationArr = getCandidateSSCInfromation($php_excel_SSC, $applicant_ssc_roll);


                    if($candidateSscInformationArr!=null && $candidateHscInformationArr!=null) {
                        $_SESSION["HSCInformation"] = $candidateHscInformationArr;
                        $_SESSION["SSCInformation"] = $candidateSscInformationArr;

                        header("location: admissionform.php");
                                   exit;
                    }
                    else {
                        header("location: index.html");
                        exit;
                    }



                }
            }
            /*header("location: admissionform.php");
            exit;*/
        }
        else{
            header("location: index.html");
            exit;
        }
    }
    else{
        header("location: index.html");
        exit;
    }



?>