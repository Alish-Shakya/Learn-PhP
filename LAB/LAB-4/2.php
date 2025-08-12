<?php
class Employee{
    public $name;

    function __construct($name){
        $this->name = $name;
    }

    function calculateSalary(){
        return 0;
    }
}

class FullTimeEmployee extends Employee {
    function claculateSalary(){
        return 5000;
    }
}

class PartTimeEmployee extends Employee {
    function calculateSalary(){
        return 20*160;
    }
}

$emp1 = new FullTimeEmployee("Amit");
echo $emp1 -> name. " earns " .$emp1->claculateSalary(). "<br>";

$emp2 = new PartTimeEmployee("Alish");
echo $emp2 -> name. " earns " .$emp2->calculateSalary(). "<br>";
?>
