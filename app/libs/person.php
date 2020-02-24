<?php


class Person
{
    private $firstName = '';
    private $lastName = '';
    private $age = 0;

    /**
     * Person constructor.
     * @param string $firstName
     * @param string $lastName
     * @param int $age
     */
    public function __construct($f, $l, $a)
    {
        $this->firstName = $f;
        $this->lastName = $l;
        $this->age = $a;
    }


    public function hello(){
        echo 'Hello, i am '.$this->firstName.' '.$this->lastName.'.<br>';
    }
}