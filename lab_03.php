<?php

// Name: Gulabuddin 
// LastName :"Ghawsi"



// Task 1 solution code

class Library {

    # This value is constant because the maximum number of books does not change.
    const MAX_BOOKS = 3;

}

echo "Maximum books allowed: " . Library::MAX_BOOKS;

echo "<br><br>";


// Task 2 solution code

class StudentCounter {

    public static $count = 0;

    public static function addStudent() {
        self::$count++;
    }

}

StudentCounter::addStudent();
StudentCounter::addStudent();
StudentCounter::addStudent();

echo "Total students: " . StudentCounter::$count;

echo "<br><br>";


# Task 3 solution code 

abstract class Vehicle {

    abstract public function start();
}
class Car extends Vehicle {

    public function start() {
        echo "Car engine started.";
    }

}
class Bike extends Vehicle {

    public function start() {
        echo "Bike started.";
    }

}

$car = new Car();
$bike = new Bike();

$car->start();

echo "<br>";

$bike->start();

?>