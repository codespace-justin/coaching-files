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


#### <ul>Main functions for classes are as mentioned earlier:</ul>
    
    * Model real world objects into code (eg: House, Car, Person, etc.)

    * They control what an object has or what an object "looks" like (Properties). They are also known as members or instance variables.

    * And the also control how objects behave (Methods/functionality). Methods are simply functions that are inside the scope of a class



#### <ul>Using the example of a User in a syste, lets look at these 2 main points:</ul>
    
    * An example property could be usersname, password, id number, department, etc.

    * Methods could be the functionality to log in to the system, view ther profile, change their passsword, etc.

    * You can use these 2 functions to either return all the properties of a class, or the methods of a class.
        - get_class_vars("ClassName");
        - get_class_methods("ClassName");

#### <ul>THIS keyword</ul>

    * Special keyword used to refer to properties inside each individual instance of a Class (Object).

    * $this keyword example use: 

        class EgObject {
        
            public $name = "Coder";
        
            public function sayName() {
                return $this-> name;
            }
        }
        
        $object = new EgObject();

        echo $object->sayName(); # Output: Coder.


#### <ul>Basic Example:</ul>

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

#### What are objects?

    * An object is known as an instance of a Class

    * They are created using the new keyword, followed by the classs name, and finally parenthesis ().
        eg: new Object();

    * You can select properties of a value directly using the -> notation
        eg: $object-> username; # Will return value defined in Class

#### Constructor

    * A constructor is a method that is built into classes, and is called anytime a class in instantiated (object is made).

    * When calling a constructor the arguements or parameters are injected inside obhect using the parenthesis
        eg: new UserExample("coder777", "sult0n!M#n9o!", "IT Department", 0);

    * Normally used in conjuntion with private properties, with constructor being used to set the values of the properties during instantiation.

<br>
<hr>
<br>
