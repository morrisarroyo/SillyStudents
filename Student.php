<?php

/**
 * Description of Student
 *
 * @author Jim, Morris Arroyo
 */
class Student
{
    /*
     * Constructs a student without any information.
     */
    function __construct()
    {
        $this->surname = '';
        $this->first_name = '';
        $this->emails = array();
        $this->grades = array();
    }

    /*
     * Adds an email to student's list of emails.
     * @param string    $which    indicates email type, can be numbered
     * @param string    $address  email address to be added
     */
    function add_email($which, $address) {
        $this->emails[$which] = $address;
    }

    /*
     * Adds a grade to student's list of grades.
     * @param int  $grade  grade to be added
     */
    function add_grade($grade) {
        $this->grades[] = $grade;
    }

    /*
     * Calculates student's grade average.
     * @return float  student's grade average
     */
    function average() {
        $total = 0;
        foreach ($this->grades as $value)
            $total += $value;
        return $total / count($this->grades);
    }

    /*
     * Returns student's information formatted for a browser.
     * @return string  student's formatted information
     */
    function toString() {
        $result = $this->first_name . ' ' . $this->surname;
        $result .= ' ('. $this->average(). ")\n";
        foreach($this->emails as $which=>$what)
            $result .= $which . ': ' . $what . "\n";
        $result .= "\n";
        return '<pre>' . $result . '</pre>';
    }
}