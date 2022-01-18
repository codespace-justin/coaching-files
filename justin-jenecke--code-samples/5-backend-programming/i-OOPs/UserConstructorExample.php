<?php

    class UserConstructorExample {

        # ----- Properties ----- #

        # Leave all properties undefined
        public $username;
        public $password;
        public $department;
        public $hoursWorked;

        # ----- Constructor ----- #

        # Parameters/arguements have function scope and have no reference to properties of class
        # Their values are passed into properties when instantiating objects
        public function __construct($username, $password, $department, $hoursWorked) {

            $this->username = $username;
            $this->password = $password;
            $this->department = $department;
            $this->hoursWorked = $hoursWorked;

        }
        # ----- Methods ----- #

        # Adds 8 hours to $hoursWorked
        public function workFullDay() {
            $this->hoursWorked += 8;
        }

        # Allows User to set new Password
        public function changePassword($newPass) {
            
            # Change password
            $this->password = $newPass;
            //echo "Your new password: " . $this-> password . "<br><br>";
        }

        # ViewProfile method return all properties or current state of object
        public function viewProfile() {

            return  "Your Username is: " . $this->username . 
                    ", Your Password is: " . $this->password . 
                    ", You worked " . $this->hoursWorked . 
                    "h so far, and you work in the " . $this->department . " department";
        }
    }

    # Create 2 Objects and assign their properties at runtime
    $user1 = new UserConstructorExample("blake5660", "1234abcd", "Human Resources", 32);
    $user2 = new UserConstructorExample("Jojo", "p@ss!", "Administration", 8);

    $user2->workFullDay();
    echo $user2->hoursWorked;

    #line break
    echo "<br><br>"; 

    $user1-> changePassword("h@llo0Wor!d;");

    #line break
    echo "<br><br>"; 

    echo $user1-> viewProfile();
    echo "<br><br>";#line break 
    echo $user2-> viewProfile();

?>