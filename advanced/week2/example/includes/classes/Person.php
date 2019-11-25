<?php namespace AdvancedDemo\Demo\Persons;

/**
 * Class Person
 */
class Person
{
    public $name;
    public $birthDate;

    public function shoutName(): string
    {
        return $this->name;
    }

    public function walk(): void
    {

    }
}
