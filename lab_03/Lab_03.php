
<?php
/**
 * 
 * Student Name:Mohammad Reza Mirzaie
 * F/Name : Mohammad Hussain
 * Student ID:Q02000331
 * Date: 2026-08-31
 */
// TASK 1: Class Constant 
/**
 * Task 1: Create and Use a Class Constant
 */

class Library {
    // Constant declaration - value is fixed and cannot be changed
    // This is a constant because the maximum number of books a student can borrow
    // is a fixed rule set by the library policy and should never change during runtime
    const MAX_BOOKS = 3;
}

// Display the constant outside the class
echo "Task 1 Output:\n";
echo "Maximum books allowed: " . Library::MAX_BOOKS . "\n";
echo "\n";

//TASK 2: Static Property and Static Method 
/**

 * Task 2: Create a Static Property and Static Method
 */
class StudentCounter {
    // Static property - shared across all instances of the class
    public static $count = 0;
    
    // Static method - increases the count by 1
    public static function addStudent() {
        self::$count++; // self:: refers to the current class
    }
}

// Call addStudent() three times without creating an object
StudentCounter::addStudent();

StudentCounter::addStudent();
StudentCounter::addStudent();

// Display the final value
echo "Task 2 Output:\n";
echo "Total students: " . StudentCounter::$count . "\n";
echo "\n";

//TASK 3: Abstract Class and Abstract Method 
/**
 * Task 3: Create an Abstract Class and Abstract Method
 */

// Abstract class - cannot be instantiated directly
abstract class Vehicle {
    // Abstract method - must be implemented by all child classes
    abstract public function start();
}

// Car class extends Vehicle and implements start()
class Car extends Vehicle {
    public function start() {
        echo "Car engine started.\n";
    }
}

// Bike class extends Vehicle and implements start()
class Bike extends Vehicle {
    public function start() {
        echo "Bike started.\n";
    }

}

// Create objects and call start() for each
echo "Task 3 Output:\n";
$car = new Car();
$car->start();

$bike = new Bike();
$bike->start();

// OUTPUT SUMMARY 
echo "\n========================================\n";
echo "All tasks completed successfully!\n";
echo "========================================\n";
?>
