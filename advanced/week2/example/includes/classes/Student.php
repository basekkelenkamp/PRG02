<?php namespace AdvancedDemo\Demo\Persons;

/**
 * Class Student
 */
class Student extends Person
{
    public $number;
    public $classNumber;

    /**
     * Student constructor.
     * @param $name
     * @param $number
     * @param $classNumber
     */
    public function __construct($name, $number, $classNumber)
    {
        $this->name = $name;
        $this->number = $number;
        $this->classNumber = $classNumber;
    }
}
