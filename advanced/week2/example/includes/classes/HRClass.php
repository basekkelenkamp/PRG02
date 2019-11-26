<?php namespace AdvancedDemo\Demo\SchoolClasses;

/**
 * Interface HRClass
 */
interface HRClass
{
    /**
     * @param $studentRawList
     */
    public function addStudent($studentRawList): void;

    /**
     * @return array
     */
    public function getStudents(): array;
}
