<!--

-->

<?php

class Person{
          public $name;
          public $age;

          function __construct($name, $age){
                    $this->name = $name;
                    $this->age = $age;
}
function greet(){
          return "Hello," . $this->name;
}

}
$person1 = new Person("Anjali", 30);
echo $person1->greet();
