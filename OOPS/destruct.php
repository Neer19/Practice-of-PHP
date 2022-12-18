<?php
    class Employee{
        // Properties of our Class
        public $name;
        public $salary; 

        // Constructor
        function __construct($name1, $salary1){
            $this->name = $name1;
            $this->salary = $salary1;
        }

        // Destructor
        function __destruct(){
            echo "I am destructing $this->name <br>";
        }
    }

    $Neer = new Employee("Neer", 73000);
    $Heer = new Employee("Heer", 10000);
    $Naitik = new Employee("Naitik", 56000); 

    echo "The salary of Neer is $Neer->salary <br>";
    echo "The salary of Heer is $Heer->salary <br>";
?>