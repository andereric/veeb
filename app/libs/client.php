<?php

require_once 'Person.php';
class Client extends Person
{
    private $status = 'basic';

    /**
     * Client constructor.
     * @param string $status
     */
    public function __construct($f, $l, $a, $s)
    {
        parent::__construct($f, $l, $a);
        $this->status = $s;
        $this->hello();
    }

    public function hello()
    {
        parent::hello();
        echo  'I am a '.$this->status.' client<br>';
    }
}