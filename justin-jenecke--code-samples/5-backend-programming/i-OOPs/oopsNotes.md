# Object Orientated Programming in PHP

Index:

    1. What is OOP
    2. Classes
    3. Properties and Methods
    4. Constructor
    5. Access Modifiers
    6. Getters and Setters
    7. Inheritence
    8. Overriding Properties and Methods of a Superclass
    9. Static

<br>
<hr>
<br>

## 1. What is Object Orientated Programming:

OOP is a programming methodology or style which is focused on structuring your code based on Objects and Classes which encapuslate data, behaviour, etc. as opposed to structuring your code around functions running procedurely (top to bottom).
Allows you to reuse certain behaviour/functionality wherever an object is created. When using an OOP approach your codebase/projects are a lot easier to maintain, and a lot easier to read and debug. Best suited for medium to large scale applications.

Objects - Modules which encapsulate data, properties, functionality, etc. into one single unit.

Classes - Blueprints or templates for creating objects. They essentially dictate properties of an object, and behaviour/functionality of an object. They can also be used to model real world entities in code (eg: Car). They are essentially used to model your objects.

<br>
<hr>
<br>

## 2. Classes

<ul>Main functions for classes are as mentioned earlier:</ul>
    
    * Model real world objects into code (eg: House, Car, Person, etc.)

    * They control what an object has or what an object "looks" like (Properties). They are also known as members or instance variables.

    * And the also control how objects behave (Methods/functionality). Methods are simply functions that are inside the scope of a class

<ul>Using the example of a User in a syste, lets look at these 2 main points:</ul>
    
    * An example property could be usersname, password, id number, department, etc.

    * Methods could be the functionality to log in to the system, view ther profile, change their passsword, etc.

<ul>Basic Example:</ul>

    class UserExample {

        # ----- Properties ----- #

        public $username = "blake5660";
        public $password = "1234abcd!";
        public $department = "Human Resources";
        public $hoursWorked = 32;

        # ----- Methods ----- #

        # Adds 8 hours to $hoursWorked
        public function workFullDay() {
            $this->hoursWorked += 8;
        }

        public function viewProfile() {

            return  $this->username . " - " . $this->password . " - " . $this->hoursWorked . " - " . $this->department;
        }
    }

<br>
<hr>
<br>

## 3. Objects