<?php
header('Content-Type: text/plain');

//@note: __constructor, private, protected, public

/**
 * Class Student
 */
class Student
{
    /*
     * public
     * protected
     * private
     * parent::
     * __construct(...$args)
     * :: za pozivanje static metode i propertija 
     * 
     */
    
    
    public $university = 'J.J. Strossmayer';
    public $name;

    public function __construct($name)
    {
        $this->name = $name;
    }

    public function echoName()
    {
        echo $this->name . "\n";
    }

}

$student1 = new Student('Mujo');
var_dump($student1);

$student2 = new Student('Pero');
var_dump($student2);
$student2->echoName();

//echo student1->name;


/**
 * Class FeritStudent
 */
class FeritStudent extends Student
{
    public $faculty = 'FERIT';

    public function echoFaculty()
    {
        echo $this->faculty . ', ' . $this->university . "\n";
    }

}

$student3 = new FeritStudent('Hrvoje');
$student3->echoFaculty();
var_dump($student3);


//make echoName() private, protected, override, call parent::