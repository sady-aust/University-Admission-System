<?php
/**
 * Created by PhpStorm.
 * User: User
 * Date: 1/23/2018
 * Time: 8:09 PM
 */

class CandidateHscInformation
{
    private $hscRoll;
    private $registrationno;
    private $name;

    private $board;
    private $group;
    private $type;

    private $result;
    private $gpa;


    private $fathersName;
    private $mothersname;
    private $dateOfBirth;

    private $institute;

    private $bangla;
    private $engilsh;
    private $math;

    private $physics;
    private $chemistry;
    private $biology;

    private $ict;



    /**
     * CandidateHscInformation constructor.
     * @param $hscRoll
     * @param $registrationno
     * @param $name
     * @param $board
     * @param $group
     * @param $type
     * @param $result
     * @param $gpa
     * @param $fathersName
     * @param $mothersname
     * @param $dateOfBirth
     * @param $institute
     * @param $bangla
     * @param $engilsh
     * @param $math
     * @param $physics
     * @param $chemistry
     * @param $biology
     * @param $ict
     */
    public function __construct($hscRoll, $registrationno, $name, $board, $group, $type, $result, $gpa, $fathersName, $mothersname, $dateOfBirth, $institute, $bangla, $engilsh, $math, $physics, $chemistry, $biology, $ict)
    {
        $this->hscRoll = $hscRoll;
        $this->registrationno = $registrationno;
        $this->name = $name;
        $this->board = $board;
        $this->group = $group;
        $this->type = $type;
        $this->result = $result;
        $this->gpa = $gpa;
        $this->fathersName = $fathersName;
        $this->mothersname = $mothersname;
        $this->dateOfBirth = $dateOfBirth;
        $this->institute = $institute;
        $this->bangla = $bangla;
        $this->engilsh = $engilsh;
        $this->math = $math;
        $this->physics = $physics;
        $this->chemistry = $chemistry;
        $this->biology = $biology;
        $this->ict = $ict;
    }

    /**
     * @return mixed
     */
    public function getHscRoll()
    {
        return $this->hscRoll;
    }

    /**
     * @param mixed $hscRoll
     */
    public function setHscRoll($hscRoll)
    {
        $this->hscRoll = $hscRoll;
    }

    /**
     * @return mixed
     */
    public function getRegistrationno()
    {
        return $this->registrationno;
    }

    /**
     * @param mixed $registrationno
     */
    public function setRegistrationno($registrationno)
    {
        $this->registrationno = $registrationno;
    }

    /**
     * @return mixed
     */
    public function getName()
    {
        return $this->name;
    }

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @return mixed
     */
    public function getBoard()
    {
        return $this->board;
    }

    /**
     * @param mixed $board
     */
    public function setBoard($board)
    {
        $this->board = $board;
    }

    /**
     * @return mixed
     */
    public function getGroup()
    {
        return $this->group;
    }

    /**
     * @param mixed $group
     */
    public function setGroup($group)
    {
        $this->group = $group;
    }

    /**
     * @return mixed
     */
    public function getType()
    {
        return $this->type;
    }

    /**
     * @param mixed $type
     */
    public function setType($type)
    {
        $this->type = $type;
    }

    /**
     * @return mixed
     */
    public function getResult()
    {
        return $this->result;
    }

    /**
     * @param mixed $result
     */
    public function setResult($result)
    {
        $this->result = $result;
    }

    /**
     * @return mixed
     */
    public function getGpa()
    {
        return $this->gpa;
    }

    /**
     * @param mixed $gpa
     */
    public function setGpa($gpa)
    {
        $this->gpa = $gpa;
    }

    /**
     * @return mixed
     */
    public function getFathersName()
    {
        return $this->fathersName;
    }

    /**
     * @param mixed $fathersName
     */
    public function setFathersName($fathersName)
    {
        $this->fathersName = $fathersName;
    }

    /**
     * @return mixed
     */
    public function getMothersname()
    {
        return $this->mothersname;
    }

    /**
     * @param mixed $mothersname
     */
    public function setMothersname($mothersname)
    {
        $this->mothersname = $mothersname;
    }

    /**
     * @return mixed
     */
    public function getDateOfBirth()
    {
        return $this->dateOfBirth;
    }

    /**
     * @param mixed $dateOfBirth
     */
    public function setDateOfBirth($dateOfBirth)
    {
        $this->dateOfBirth = $dateOfBirth;
    }

    /**
     * @return mixed
     */
    public function getInstitute()
    {
        return $this->institute;
    }

    /**
     * @param mixed $institute
     */
    public function setInstitute($institute)
    {
        $this->institute = $institute;
    }

    /**
     * @return mixed
     */
    public function getBangla()
    {
        return $this->bangla;
    }

    /**
     * @param mixed $bangla
     */
    public function setBangla($bangla)
    {
        $this->bangla = $bangla;
    }

    /**
     * @return mixed
     */
    public function getEngilsh()
    {
        return $this->engilsh;
    }

    /**
     * @param mixed $engilsh
     */
    public function setEngilsh($engilsh)
    {
        $this->engilsh = $engilsh;
    }

    /**
     * @return mixed
     */
    public function getMath()
    {
        return $this->math;
    }

    /**
     * @param mixed $math
     */
    public function setMath($math)
    {
        $this->math = $math;
    }

    /**
     * @return mixed
     */
    public function getPhysics()
    {
        return $this->physics;
    }

    /**
     * @param mixed $physics
     */
    public function setPhysics($physics)
    {
        $this->physics = $physics;
    }

    /**
     * @return mixed
     */
    public function getChemistry()
    {
        return $this->chemistry;
    }

    /**
     * @param mixed $chemistry
     */
    public function setChemistry($chemistry)
    {
        $this->chemistry = $chemistry;
    }

    /**
     * @return mixed
     */
    public function getBiology()
    {
        return $this->biology;
    }

    /**
     * @param mixed $biology
     */
    public function setBiology($biology)
    {
        $this->biology = $biology;
    }

    /**
     * @return mixed
     */
    public function getIct()
    {
        return $this->ict;
    }

    /**
     * @param mixed $ict
     */
    public function setIct($ict)
    {
        $this->ict = $ict;
    }




}