<?php namespace AdvancedDemo\Demo\SchoolClasses;

use AdvancedDemo\Demo\Persons\Student;

/**
 * Class CMGTClass
 */
class CMGTClass implements HRClass
{
    public $name = "Advanced Group";
    public $slogan = "We rock!";
    private $students = [];
    const MAX_STUDENTS = 5;

    /**
     * @return array
     */
    public function getStudents(): array
    {
        return $this->students;
    }

    /**
     * Retrieve raw array value & pass to Student object
     *
     * @param $value
     * @throws \Exception
     */
    public function addStudent($value): void
    {
        $this->students[] = new Student($value['name'], $value['number'], $value['classNumber']);

        if ($this->getTotalStudents() > self::MAX_STUDENTS) {
            throw new \Exception("Too many students");
        }
    }

    /**
     * @return int
     */
    public function getTotalStudents(): int
    {
        return count($this->students);
    }
}
