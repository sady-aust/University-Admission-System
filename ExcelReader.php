<?php
require_once "Classes/PHPExcel/IOFactory.php";;

/*$inputFileName = './uploads/files/HSC18.xlsx';
$excelObject = PHPExcel_IOFactory::load($inputFileName);
echo $excelObject->getSheetCount();*/

function getExcelObject($fileLocation)
{
    $excelObject = PHPExcel_IOFactory::load($fileLocation);
    return $excelObject;
}

function getCandidateHSCInfromation(PHPExcel $excelObject, $hscRoll)
{
    $candidateHscInformation = array();
    $isFound = false;

    $numberOfSheet = $excelObject->getSheetCount();

    for ($i = 0; $i < $numberOfSheet; $i++) {
        $sheetArray = $excelObject->getSheet($i)->toArray(null);

        for ($row = 1; $row < count($sheetArray); $row++) {


            //echo $sheetArray[$row][$column]."    ";

            if ($sheetArray[$row][0] == $hscRoll) {

                for ($column = 0; $column < count($sheetArray[$row]); $column++) {
//                       $candidateHscInformation[$sheetArray[0][$column]][] =$sheetArray[$row][$column];
                    $candidateHscInformation[$sheetArray[0][$column]] = $sheetArray[$row][$column];
                }
                $isFound = true;
                break;
            }


        }

        if ($isFound) {
            break;
        }
    }

    if ($isFound) {
        return $candidateHscInformation;
    } else {
        return null;
    }

}

function getCandidateSSCInfromation(PHPExcel $excelObject, $sscRoll)
{
    $candidateSscInformation = array();
    $isFound = false;

    $numberOfSheet = $excelObject->getSheetCount();

    for ($i = 0; $i < $numberOfSheet; $i++) {
        $sheetArray = $excelObject->getSheet($i)->toArray(null);

        for ($row = 1; $row < count($sheetArray); $row++) {


            //echo $sheetArray[$row][$column]."    ";

            if ($sheetArray[$row][0] == $sscRoll) {

                for ($column = 0; $column < count($sheetArray[$row]); $column++) {
//                       $candidateHscInformation[$sheetArray[0][$column]][] =$sheetArray[$row][$column];
                    $candidateSscInformation[$sheetArray[0][$column]] = $sheetArray[$row][$column];
                }
                $isFound = true;
                break;
            }


        }

        if ($isFound) {
            break;
        }
    }

    if ($isFound) {
        return $candidateSscInformation;
    } else {
        return null;
    }

}

?>