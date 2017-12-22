<?php

/*
 * @author Giovanni Battista Lenoci <gianiaz@gmail.com>
 */

class Student
{
    public $name;
    public $year;
    public $grade;

    /**
     * @param mixed $name
     */
    public function setName($name)
    {
        $this->name = $name;
    }

    /**
     * @param mixed $year
     */
    public function setYear($year)
    {
        $this->year = $year;
    }

    /**
     * @param mixed $grade
     */
    public function setGrade($grade)
    {
        $this->grade = $grade;
    }
}
