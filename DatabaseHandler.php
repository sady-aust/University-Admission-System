<?php
//HSC TABLE COLUMNS
$HSCTABLE = "hsc";
$HSCTABLEINFOID = "InfoId";
$HSCTABLEAPPLICANTID = "ApplicantId";
$HSCROLL = "ROLL";
$HSCREGNO = "RegNo";
$HSCBOARD = "Board";
$HSCGPA = "GPA";
$HSCPASSINGYEAR = "PassingYear";
$HSCPHYSICSGPA = "Physics";
$HSCCHEMISTRY = "Chemistry";
$HSCMATH = "Mathematics";
$HSCENGLISH = "English";
$HSCTOTAL = "Total";

//SSC TABLE COLUMNS
$SSCTABLE = "ssc";
$SSCINFOID = "InfoId";
$SSCAPPLICANTID = "ApplicantId";
$SSCROLL = "ROLL";
$SSCREGNO = "RegNo";
$SSCBOARD = "Board";
$SSCGPA = "GPA";
$SSCINSTITUTE = "Institute";
$SSCPASSINGYEAR = "PassingYear";

//General Information Table
$GeneralInfotable = "GeneralInformation";
$NAME = "Name";
$GENERELTABLEAPPLICANTID = "ApplicantId";
$GENDER = "Gender";
$PHONENO = "PhoneNo";
$DATEOFBIRTH = "DateOfBirth";
$FATHERSNAME = "FathersName";
$MOTHERSNAME = "MothersName";
$EMAIL = "Email";
$ISTRIBAL = "IsTribal";
$TRIBALDIsTRICT = "TribalDistrict";
$MEDIUMOFQSPAPER = "MediumOfQuestionPaper";
$TRANSACTION = "TransectionId";

//GuardianInformationTable
$guardianTable = "guardianinformation";
$GENERELTABLEAPPLICANTID = "ApplicantId";
$GUARDIANNAME = "GuardianName";
$RELATION = "Relation";
$MOBILE = "Mobile";
$EMAIL = "Email";


//HSC Information Table
$HSCTABLE = "hsc";
$ROLL = "ROLL";
$REGNO = "RegNo";
$BOARD = "Board";
$GPA = "GPA";
$INSTITUTE = "Institute";
$PASSINGYEAR = "PassingYear";
$PHYSICS = "Physics";
$CHEMISTRY = "Chemistry";
$MATH = "Mathematics";
$ENGLISH = "English";
$TOTAL = "Total";

//Parmanant Address Table
$parmanentAddressTable = "parmanentaddress";
$PDIVISION = "Division";
$PDISTRICT = "District";
$PTHANA = "Thana";
$PADDRESS = "Address";

//PresentAddress Table
$presentAddressTable = "presentaddress";
$DIVISION = "Division";
$DISTRICT = "District";
$THANA = "Thana";
$ADDRESS = "Address";

//SSC TABLE
$SSCTABLE = "ssc";
$SSCROLL = "ROLL";
$SSCREGNO = "RegNo";
$SSCBOARD = "Board";
$SSCGPA = "GPA";
$SSCINSTITUTE = "Institute";
$SSCPASSINGYEAR = "PassingYear";

//PIC AND SIGN TABLE
$PICANDSIGNTABLENAME = "picandsign";
$PIC = "Pic";
$SIGNATURE = "signature";

//Application Status Table
$APPLICATIONSTATSUTABLE = "applicationstatus";
$APPLICATIONFORM = "ApplicationForm";
$PAYMENT = "Payment";
$APPLICATIONRECEIVED = "ApplicationReceived";
$ADMITCARD = "AdmitCard";
$ADMISSIONRESULT = "Result";

function createConnection()
{
    $host = "localhost";
    $user = "root";

    $databaseName = "universityadmissionsystem";
    $connection = mysqli_connect($host, $user, "", $databaseName);

    return $connection;
}

function getApplicantSscAndHscInfo($connection, $sscroll, $sscboard, $sscpassingYear, $hscroll, $hscboard, $hscpassingYear)
{
    global $HSCTABLE, $HSCTABLEAPPLICANTID, $HSCROLL, $HSCREGNO, $HSCBOARD, $HSCGPA, $HSCPASSINGYEAR, $HSCPHYSICSGPA, $HSCCHEMISTRY, $HSCMATH, $HSCENGLISH, $HSCTOTAL;
    global $SSCTABLE, $SSCINFOID, $SSCAPPLICANTID, $SSCROLL, $SSCREGNO, $SSCBOARD, $SSCGPA, $SSCINSTITUTE, $SSCPASSINGYEAR;
    //SELECT ApplicantId FROM hsc WHERE ROLL='105678' AND Board = 'Dhaka' AND PassingYear= '2018' AND EXISTS(SELECT ApplicantId FROM ssc WHERE ROLL = '104078' AND Board = 'Dhaka' AND PassingYear = '2016');
    $query = "SELECT " . $HSCTABLEAPPLICANTID . " FROM " . $HSCTABLE . " WHERE " . $HSCROLL . " = '" . $hscroll . "' AND " . $HSCBOARD . " = '" . $hscboard . "' AND " . $HSCPASSINGYEAR . " = '" . $hscpassingYear . "' AND EXISTS" . "(SELECT " . $SSCAPPLICANTID . " FROM " . $SSCTABLE . " WHERE " . $SSCROLL . " = '" . $sscroll . "' AND " . $SSCBOARD . " ='" . $sscboard . "' AND " . $SSCPASSINGYEAR . " = '" . $sscpassingYear . "')";

    $result = mysqli_query($connection, $query);
    return $result;
}

function insertIntogenerelInforamtionTable($connection, $name, $gender, $phone, $dateofbirth, $fathersname, $mothersname, $email, $isTribal, $mediumOfQsPaper, $tribalarea)
{
    global $GeneralInfotable, $NAME, $GENDER, $PHONENO, $DATEOFBIRTH, $FATHERSNAME, $MOTHERSNAME, $EMAIL, $ISTRIBAL, $TRIBALDIsTRICT, $MEDIUMOFQSPAPER;
    $INSERTGENERALINFORMATIONQUERY = "INSERT INTO " . $GeneralInfotable . " (" . $NAME . "," . $GENDER . "," . $PHONENO . "," . $DATEOFBIRTH . "," . $FATHERSNAME . "," . $MOTHERSNAME . "," . $EMAIL . "," . $ISTRIBAL . "," . $TRIBALDIsTRICT . "," .
        $MEDIUMOFQSPAPER . ") VALUES ('" . $name . "','" . $gender . "','" . $phone . "','" . $dateofbirth . "','" . $fathersname . "','" . $mothersname . "','" . $email . "','" . $isTribal . "','" . $tribalarea . "','" .
        $mediumOfQsPaper . "')";

  //  echo $INSERTGENERALINFORMATIONQUERY;
   $result = mysqli_query($connection, $INSERTGENERALINFORMATIONQUERY);
   return $result;
}

function insertGurdianInformation($connection, $last_inserted_id, $guerdianName, $relation, $mobile, $email)
{
    global $guardianTable, $GENERELTABLEAPPLICANTID, $GUARDIANNAME, $RELATION, $MOBILE, $EMAIL;
    $INSERTGUARDIANINFORMATIONQUERY = "INSERT INTO " . $guardianTable . " (" . $GENERELTABLEAPPLICANTID . "," . $GUARDIANNAME . "," . $RELATION . "," . $MOBILE . "," . $EMAIL . ") VALUES ('" . $last_inserted_id . "','" . $guerdianName . "','" . $relation . "','" .
        $mobile . "','" . $email . "')";

    $result = mysqli_query($connection, $INSERTGUARDIANINFORMATIONQUERY);
    return $result;
}

function insertIntoHscInforamtionTable($connection, $last_inserted_id, $hscRoll, $hscRegNo, $hscBoard, $hscGPA, $hscPassingYear, $physicsGrade, $chemistryGrade, $mathGrade, $engGrade, $totalGrade)
{
    global $HSCTABLE, $GENERELTABLEAPPLICANTID, $ROLL, $REGNO, $BOARD, $GPA, $PASSINGYEAR, $PHYSICS, $CHEMISTRY, $MATH, $ENGLISH, $TOTAL;
    $INSERTHSCINFORMATIONQUERY = "INSERT INTO " . $HSCTABLE . " (" . $GENERELTABLEAPPLICANTID . "," . $ROLL . "," . $REGNO . "," . $BOARD . "," . $GPA . "," . $PASSINGYEAR . "," . $PHYSICS . "," . $CHEMISTRY . "," . $MATH . "," .
        $ENGLISH . "," . $TOTAL . ") VALUES ('" . $last_inserted_id . "','" . $hscRoll . "','" . $hscRegNo . "','" . $hscBoard . "','" . $hscGPA . "','" . $hscPassingYear . "','" . $physicsGrade . "','" . $chemistryGrade . "','" . $mathGrade . "','" . $engGrade . "','" .
        $totalGrade . "')";
    $result = mysqli_query($connection, $INSERTHSCINFORMATIONQUERY);
    return $result;
}

function insertParmamentAddress($connection, $last_inserted_id, $Pdivision, $Pdistrict, $Pthana, $Paddress)
{
    global $parmanentAddressTable, $GENERELTABLEAPPLICANTID, $PDIVISION, $PDISTRICT, $PTHANA, $PADDRESS;
    $INSERTPARMANENTADDRESSQUERY = "INSERT INTO " . $parmanentAddressTable . " (" . $GENERELTABLEAPPLICANTID . "," . $PDIVISION . "," . $PDISTRICT . "," . $PTHANA . "," . $PADDRESS . ") VALUES ('" . $last_inserted_id . "','" . $Pdivision . "','" . $Pdistrict . "','" .
        $Pthana . "','" . $Paddress . "')";

    $result = mysqli_query($connection, $INSERTPARMANENTADDRESSQUERY);
    return $result;
}

function insertPresetntAddress($connection, $last_inserted_id, $division, $district, $thana, $address)
{
    global $presentAddressTable, $GENERELTABLEAPPLICANTID, $DIVISION, $DISTRICT, $THANA, $ADDRESS;
    $INSERTPRESENTADDRESSQUERY = "INSERT INTO " . $presentAddressTable . " (" . $GENERELTABLEAPPLICANTID . "," . $DIVISION . "," . $DISTRICT . "," . $THANA . "," . $ADDRESS . ") VALUES ('" . $last_inserted_id . "','" . $division . "','" . $district . "','" .
        $thana . "','" . $address . "')";
    $result = mysqli_query($connection, $INSERTPRESENTADDRESSQUERY);
    return $result;
}

function insertIntoSSCInforamtionTable($connection, $last_inserted_id, $sscRoll, $sscRegNo, $sscBoard, $sscGPA, $sscInstitute, $sscPassingYear)
{
    global $SSCTABLE, $GENERELTABLEAPPLICANTID, $SSCROLL, $SSCREGNO, $SSCBOARD, $SSCGPA, $SSCINSTITUTE, $SSCPASSINGYEAR;
    $INSERTSSCINFORMATIONQUERY = "INSERT INTO " . $SSCTABLE . " (" . $GENERELTABLEAPPLICANTID . "," . $SSCROLL . "," . $SSCREGNO . "," . $SSCBOARD . "," . $SSCGPA . "," . $SSCINSTITUTE . "," . $SSCPASSINGYEAR . ") VALUES 
            ('" . $last_inserted_id . "','" . $sscRoll . "','" . $sscRegNo . "','" . $sscBoard . "','" . $sscGPA . "','" . $sscInstitute . "','" . $sscPassingYear . "')";

    $result = mysqli_query($connection, $INSERTSSCINFORMATIONQUERY);
    return $result;
}

function insertIntoPicAndSignTable($connection,$picanme,$signName,$applicantid)
{
    global $PICANDSIGNTABLENAME, $PIC, $SIGNATURE, $GENERELTABLEAPPLICANTID;
    $QUERY = "INSERT INTO " . $PICANDSIGNTABLENAME . " (" . $GENERELTABLEAPPLICANTID . "," . $PIC . "," . $SIGNATURE . ") VALUES ('" . $applicantid . "','" . $picanme . "','" . $signName . "')";
    $result = mysqli_query($connection, $QUERY);
    return $result;
}

function applicationComplete ($connection,$applicantId){
    global $APPLICATIONSTATSUTABLE, $GENERELTABLEAPPLICANTID,$APPLICATIONFORM;
    $query = "INSERT INTO ".$APPLICATIONSTATSUTABLE."(".$GENERELTABLEAPPLICANTID.",".$APPLICATIONFORM.") VALUES ('".$applicantId."','YES') ";
    $result = mysqli_query($connection, $query);
    return $result;
}

function getGeneralInforamtion($connection,$applicantId){
    global $GeneralInfotable, $NAME, $GENDER, $PHONENO, $DATEOFBIRTH, $FATHERSNAME, $MOTHERSNAME, $EMAIL, $ISTRIBAL, $TRIBALDIsTRICT, $MEDIUMOFQSPAPER,$GENERELTABLEAPPLICANTID;
    //SELECT ApplicantId,Name,FathersName,MothersName,DateOfBirth,ApplicationFormStatus FROM generalinformation WHERE ApplicantId = '1043'
    $SELECTQUERY = "SELECT * FROM ".$GeneralInfotable." WHERE ".$GENERELTABLEAPPLICANTID." = '".$applicantId."'";
   // echo $SELECTQUERY;
    $result = mysqli_query($connection, $SELECTQUERY);
    return $result;
}

function getApplicationStatus($connection,$applicantId){
    global $APPLICATIONSTATSUTABLE, $GENERELTABLEAPPLICANTID,$APPLICATIONFORM,$PAYMENT,$APPLICATIONRECEIVED,$ADMITCARD,$ADMISSIONRESULT;
    $QUERY = "SELECT * FROM ".$APPLICATIONSTATSUTABLE." WHERE ".$GENERELTABLEAPPLICANTID." = '".$applicantId."'";
    $result = mysqli_query($connection, $QUERY);
    return $result;
}

function insertTransaction($connection,$applicantId,$transaction){
    global $GeneralInfotable, $GENERELTABLEAPPLICANTID, $GENDER, $PHONENO, $DATEOFBIRTH, $FATHERSNAME, $MOTHERSNAME, $EMAIL, $ISTRIBAL, $TRIBALDIsTRICT, $TRANSACTION;
//UPDATE `generalinformation` SET `TransectionId` = '1025' WHERE `generalinformation`.`ApplicantId` = 1043;
    $QUERY = "UPDATE  ".$GeneralInfotable." SET ".$TRANSACTION." = '".$transaction."' WHERE ".$GENERELTABLEAPPLICANTID." = '".$applicantId."'";
    $result = mysqli_query($connection, $QUERY);
    return $result;
}

function getTotalApply($connection){
    global $APPLICATIONSTATSUTABLE, $GENERELTABLEAPPLICANTID,$APPLICATIONFORM,$PAYMENT,$APPLICATIONRECEIVED,$ADMITCARD,$ADMISSIONRESULT;
    $query = "SELECT * FROM ".$APPLICATIONSTATSUTABLE." WHERE ".$APPLICATIONFORM." = 'YES' AND ".$PAYMENT." = 'YES'";
    $result = mysqli_query($connection, $query);
    return $result;
}

function getpaymentpending($connection){
    global $APPLICATIONSTATSUTABLE, $GENERELTABLEAPPLICANTID,$APPLICATIONFORM,$PAYMENT,$APPLICATIONRECEIVED,$ADMITCARD,$ADMISSIONRESULT;
    $QUERY = "SELECT * FROM ".$APPLICATIONSTATSUTABLE." WHERE ".$APPLICATIONFORM." = 'YES' AND ".$PAYMENT." IS NULL";
   // echo $QUERY;
    $result = mysqli_query($connection, $QUERY);
    return $result;
}