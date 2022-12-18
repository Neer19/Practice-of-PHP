<?php 
    echo "What is Inheritance?<br>";
    class Employee{

        public $name = "Neer";
        private $salary = 1200000;
        private $grade = 5;

        function setSalary($salary){
            $this->salary = $salary; 
        }

        function getSalary(){ 
            echo "The salary of employee is $this->name is $this->salary <br>";
        }

        function showName(){
            echo "The name of this employee is $this->name <br>";
        }
    }

    // Inheriting a new class Programmer from Employee
    class Programmer extends Employee{
        private $language = "php";

        function changeLanguage($lang){
            $this->language = $lang; 
            // echo $this->grade; --> This will throw an error because grade is private in the parent class
        }
    }

    $Heer = new Employee();
    $Heer->name = "Heer";
    $Heer->setSalary(1000);
    $Heer->getSalary();
    $Heer->showName();

    $Naitik = new Employee();
    $Naitik->name = "Naitik";
    $Naitik->setSalary(1630000000);
    $Naitik->getSalary();
    $Naitik->showName();

    $XYZ = new Programmer();
    $XYZ->name = "XYZ";
    echo $XYZ->changeLanguage("Python");
    $XYZ->getSalary();
    $XYZ->showName();

?>