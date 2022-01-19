
# Variables and Data types:

<hr>
<br>

## Variables: 
---------------

#### <i>What are Variables?</i>

Buckets/Boxes/Placeholders for holding information or data, and they consist of 2 parts. The variable itself, and the data stored
inside the variable

A variable is decalared with a name, and by default is given the value of undefined. This essentially creates an empty
box inside the computer's memory.
Example: 

    let x;
    //console.log(x) will return undefined

Assignment or setting a variable is used to assign the variable a value, or to put a value inside the box.
This done by using the = sign.
Example:

    let x = 10;
    //console.log(x) will return 10

#### <i>Types of Variables</i>

In JavaScript you also get 2 types of variables: Namely *let and *const

let behaves like the word variable dictates, its value can change and be manipulated, and cannot be trusted to stay constant.
eg:
- someone's age, 
- speed a car is traveling, 
- the current exchange rate, 
- etc. 

Const is the complete opposite, hence the name const, and is used to store Constant variables or data that will never change.
eg: 
- HTML components,
- functions,
- unique ID numbers, 
- PI,
- etc.
     

<hr>
<br>

## Data Types:

When assigning values to variables there is one important thing to consider, and that is datatypes

A Datatype or Primitive datatype, is essentially information about the data/value inside the variable that explains how it is used, what it is etc.

*Number* : 
    - normal numbers : 10, 552, 7
    - used in mathematical functions

*String* : 
    - letters, words, characters : 'Hello World', "Justin" 
    - usually used to dispplay content
    - can be used for searching keywords

*Boolean*: true or false
    - used in determining state
    - whether something is visible or not
    - used to determine someone has access to something or not

*Null* : 
    - means that a variable has been declared with an empty value
    - also normally used to define state
    - example would be if someone fills in an application form does not have any work experience
        * on the application system the value will be recorded as null
        * this is because applicant work experience must be recorded even if the applicant doesn't have any

*Undefined* : 
    - means that a variable has not been declared or no value has been set
    - a way to differentiate this from null is to think that null means the box is open, but you put nothing in it on purpose
    - undefined means you either made an empty box, or the box you are looking for doesnt exist.

#### Object: 

Objects are very important data types and are the main building blocks of building business apps
They have to main aspects to them:
        * behaviour
        * properties
    

#### Template Strings:

You also get a special String in JavaScript known as a 'Template String'

Template Strings are used together with normal Strings to inject other variables or objects into the String, they were introduced with ES6 (2015), and use the `backticks` instead 'single' or "double" quotes.

Can be used to inject HTML inside a String, as well JavaScript variables. JS variables are denotated with: ${var}

Typical uses cases include:

* dynamically creating a new HTML Element using JavaScript
* dynamically injecting a name into a custom greeting message
* Populating HTML elements such as an <ul> with variables stored in an array


Code Example: 
    
    // JS Variable
    let testText = "Hello World";

    // Template String
    document.body.innerHTML += `<div class="container" id="test"> This is a test for <i>Template Strings</i> : ${testText} </div>`