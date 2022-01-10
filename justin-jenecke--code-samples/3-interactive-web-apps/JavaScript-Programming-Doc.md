# Intro to prgramming and JavaScript

    - Author: Justin Jenecke
    - To be used by any Student/Coach/Lecturer that is part of CodeSpace
    - These notes are here to help students understand the fundamentals of programming first, and in turn help them
      write better JavaScript

## ----------------------------------------------------------------------------------------------------------------------------------

## Core Programming Concepts

## Variables: 

    - Buckets/Boxes/Placeholders for holding information or data, and they consist of 2 parts. The variable itself, and the data stored
      inside the variable

    - A variable is decalared with a name, and by default is given the value of undefined.
    - let x;
    //console.log(x) will return undefined


    - assignment or setting a variable is done using the = sign
    - this is used to assign the variable a value
    - let x = 10;
    //console.log(x) will return 10


    - In JavaScript you also get 2 types of variables: Namely *let and *const

    - Let behaves like the word variable dictates, its value can change and be manipulated, and cannot be trusted to stay constant.
        * eg: someone's age, speed a car is traveling, the current exchange rate, etc. 

    - Const is the complete opposite, hence the name const, and is used to store variables or data that will never change
        * eg: HTML components, functions, unique ID numbers, etc. 

<hr><br>

## Data Types: 

    *Number* : normal numbers ( 10, 552, 7 )

    *String* : letters, words, characters ( 'Hello World', "Justin" )

    *Boolean*: true or false

    *Null* : means that a variable has been declared with an empty value

    *Undefined* : means that a variable has not been declared or no value has been set

    *Object* : a variable that has other variables as properties

#### Note:

    - You also get a special String in JavaScript known as a 'Template String'

    - Template Strings are used together with normal Strings to inject other variables or objects into the String
    - They were introduced with ES6
    - They are by using `backticks` instead 'single' or "double" quotes
    - Can be used to inject HTML inside a String as well
    - JavaScript variables are denotated with: ${var}
    - Typical uses cases include:
        * dynamically creating a new HTML Element using JavaScript
        * dynamically injecting a name into a custom greeting message
        * Populating HTML elements such as an <ul> with variables stored in an array


Code Example: 
    
    // JS Variable
    let testText = "Hello World";

    // Template String
    document.body.innerHTML += `<div class="container" id="test"> This is a test for <i>Template Strings</i> : ${testText} </div>`;

<hr><br>

## Control Statements/Conditionals: 

    - Perform an action if a condition is met (if true, when an event happens, etc.)

    - If statement

    - If Else

    - Switch Statement

<hr><br>

## Functions:

    - Specific instructions given to an application
    - A function is defined by coding: a function *signature, and a function *body
    - Once a function is deifned, you can call it by using the functions variable, its arguements in parenthesis, and a semicolon
    - Once a function is called the instructions will be carried out

    - Signature: 

        * signature has keyword function
        * then has a variable name to function
        * then has parenthesis () where arguements can be given to function

        * eg: function addition()

    - Body: 

        * body start with open brace: {
        * body ends with closing brace: } 
        * inside the body of a function is where you place all your logic/instructions

        * eg: {
                do something;
              }

#### Code Example:

        function addition(x + y) {

            console.log(x + y);
        }

        addition(1, 3);

        //Console will print out 4

<hr><br>

## Loops: 

    - Used to repeat specific instruction a set amount of times, or untill a condition is met
        * also known as 'looping over' something 
        * functions or instructions are normally put inside of loop

    - For Loop: used to loop or repeat a certain amount of times

    - While Loop: Will keep looping or repeating while a certain condition is true

    - do while Loop: Similar to while loop, and dictates that an instruction will be carried out at least once, and will continue repeating 
      untill a certaion condition is met.

### Syntax: 

    - Refers to the actual code that you are writing and typing out.

    - Code Syntax differes from language to language

    - Syntax errors are when they are typo's in your code

    - bugs occur when you the output of an instruction or function is not what you expected.
        * eg: when write a function to print 5 numbers, but you only get 1. (silly example but you get the picture)

    - runtime errors occur when something unforseen happens in an application, and you havent written code to prevent it.
        - usually occurs with end users
        - eg: 
            * A user enters a number in a form where they name should be
            * You want subtract 2 numbers, but the user only enters 1 digit

<hr><br>

## Data Structures: 
    
Essentialy one large variable that is used hold data of types and sizes, even other variables. 
Examples include: 
    
    - Array
    - List
    - Map
    - Set
    - Stack

    - This is an over simplification, but just understand that they exist and do exactly as the name implies, they provide an efficient 
      way to store and hold your data, so that it is easy to save, retrieve or sort your data.

<hr><br>

## What is Programming

## Coding VS Programming

    - Coding is essentially anything concerned with writing code inside of some text editor or computer and having it produce a result.

    - Programming is the practice of using/writing code to provide a computer with some instructions, or programming behaviour into a 
      computer or computer system.

### Example

    - An example comparison would be the difference between HTML and JavaScript. HTML is a Markup language and is used for markup and
      building websites, but it cannot instruct your computer to perform any functionality.

    - JavaScript on the other hand is designed to do exactly that, provide a computer machine with instructions, such as asking for a 
      date of birth and giving you back your age, or building a calculator, etc.

    - These two work hand in hand to produce real software life applications that are meant to solve problems.

