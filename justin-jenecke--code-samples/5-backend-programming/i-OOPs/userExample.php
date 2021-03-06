<?php

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

        # Allows User to set new Password
        public function changePassword($newPass) {
            
            echo "Previous password: " . $this-> password . "<br>";
            # Change password
            $this->password = $newPass;
            echo "Your new password: " . $this-> password . "<br><br>";
        }

        # ViewProfile method return all properties or current state of object
        public function viewProfile() {

            return  "Your Username is: " . $this->username . 
                    ", Your Password is: " . $this->password . 
                    ", You worked " . $this->hoursWorked . 
                    "h so far, and you work in the " . $this->department . " department";
        }
    }

    # Instantiate a new UserExample object.
    $user1 = new UserExample();

    # Testing workFullDay() Method
    $user1->workFullDay();
    echo $user1->hoursWorked;

    #line break
    echo "<br><br>"; 

    # Change the password
    $user1-> changePassword("h@llo0Wor!d;");

    #line break
    echo "<br><br>"; 

    # Test viewProfile() method
    echo $user1-> viewProfile();

?>