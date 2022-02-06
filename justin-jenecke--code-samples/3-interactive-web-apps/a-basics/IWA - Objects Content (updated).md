# Object Literals

    How to declare
    Methods and properties
    Name:value pairs
    Referencing Object Properties
    Updating Object Properties
    Popular Uses cases and Info


<br><hr><br>


## Creating an Object

const codingProfile = {

    // Properties
    name: "Amanda Jacobs", // String as property
    age: 28, // Number as property
    isEmployed : true, // Boolean as property
    programmingLanguages : ["JavaScript", "React.js", "React Native"], // Array as property
    
    // Methods
    bio: function() { 
        console.log(this.name + " is " + this.age + " years old!") 
    },
    introduceSelf: function() { 
        console.log("Hi! I'm " + this.name) 
    }
};


<br><hr><br>


## Referencing properties of an Object
    
The most popular way us to reference the properties of an objectis to use dot (.) notation.
We are able to use dot notation by typing out the variable name of the object, add a dot next to
it and finally we type out the key of the property we want to reference
    

**Referencing properties outside an object (in your app)**

With standard console log we can view all the data in our object by referencing the objects variable name
console.log(codingProfile)

So with dot notation we can reference a specific property
console.log(codingProfile.name);

We can even append property values together for displaying purposes
    console.log(
        codingProfile.name + " can code in " + ", " + 
        codingProfile.programmingLanguages[0] + ", " +  
        codingProfile.programmingLanguages[1] + ", " +  
        codingProfile.programmingLanguages[2]
    );
        

**Referencing properties inside an object**

When referencing a property inside of an object we still use dot notation, except that now we can't use
a variable name, since we are inside the objects namespace. Instead what we use is the "this" keyword followed
by the standard dot notation and reference the property by its key.

    const course3 = {

        id : "22csa3iwa",
        name : "Interactive Web Apps",
        length : 10,

        // method to display course and duration
        courseInfo : function() {
            console.log("Course Name: " + this.name + "\n" + "Course Duration: " + this.length + " Weeks")
        }
    }

What "this" refers to is essentially this itstance, or this specific object's properties. It is imporant to
understand the concept of each object having its own state and unique properties, since there might be other 
variables outside your object with the same variable name, or even other Objects that have the same variable name
as the key of one of their properties.


**Alterantive referencing notation - Brackets**

We can use square brackets instead of the dot notation to refence Object properties as well, but this method is 
not as popular, nor as industry standard as dot notation. The main difference between dot and bracket notation is
that when you reference the keys of the property you have use quotations around them, since bracket notation uses String format. The choice is yours' however,
and you can use whichever notation you most prefer.
        
    // Reference a property
    console.log(codingProfile['name'])

    // Call a method
    console.log(codingProfile['introduceSelf']) ();


<br><hr><br>


## Updating and Manipulating Object Properties

Since objects have their own "state of being/existence" (or simply "state" for short) in our programs, it is important for us as programmers to be able to manange the state of said objects as they undergo changes, manipulations, updates, etc. If Objects were read-only they would not serve much purpose because, the main reason we have objects in code is essentially to map real world entities or things into code, so that we can have a programmatic reference to the real world object in our system or application. 

Here are examples of how you would update properties of an Object. The key part of updating properties is to take scope into account. If you are updating your objects properties using a method remember to use the "this" keyword as it allows you to reference properties inside that specific object. If you planning to update an object property outside of the objects scope in your main application you simply need to reference the variable name of the object.

**Dot Notation Updating Example (.)**

    // updating inside an Object method (object scope)
    this.name = "Justin";

    // updating in the app (global scope)
    codingProfile.name = "Justin";

**Bracket Notation Updating Example [""];**

    // updating inside an Object method (object scope)
    this["name"] = "Justin";

    // updating in the app (global scope)
    codingProfile["name"] = "Justin";+

**Full Code Example**

    const codingProfile = {

        // Properties
        name: "Amanda Jacobs", // String as property
        age: 28, // Number as property
        isEmployed : true, // Boolean as property
        programmingLanguages : ["JavaScript", "React.js", "React Native"], // Array as property
        
        // Methods
        bio: function() { 
            console.log(this.name + " is " + this.age + " years old!") 
        },
        introduceSelf: function() { 
            console.log("Hi! I'm " + this.name) 
        },

        changeNameDot : function() {
            // updating inside an Object method (object scope)
            this.name = "Justin";
        },
        changeNameBracket : function() {
            // updating inside an Object method (object scope)
            this["name"] = "Stefan";
        }

    };


    // updating in the app (global scope)
    codingProfile["name"] = "NewNameBracket";

    // log out the result
    console.log(codingProfile["name"])


    // updating in the app (global scope)
    codingProfile.name = "NewNameDot";
    // log out the result 
    console.log(codingProfile.name)

**End of Code**


<br><hr><br>


## Important Use Cases for objects and Associated Functionalities.

**Real World Object Apps**

Standard programmatic objects. Used to map real world entities/things into code.

* Login Sytem (Users as objects)
* Todo App (Tasks as objects)
* E-Commerce site (Shopping items as objects)
* Job Board site (job listings as objects)

**Utility Objects**

Utitlity Objects are objects that essentially have no properties and are only created to encapsulate logic/functionality/methods.
Their methods ususally take in data/properties as arguements and perform functionality with that data. 

The concept of functions, arguements, etc. will be further elaborated on in the Functions module, but for now you can think of utility objects as middlemen between two different objects, constructs, applications, etc. that essentially takes input from one construct and uses the input to update anothers data/properties

* CRUD object (create, read, update, delete elements from an array)
* Website Router object (directs the user to the correct page based on input)
* Password Generator object (could be function, but with an object you can create methods that have different generation strategies (algorithms))
* Random String Generator

**DOM Objects**

Using the DOM api you are able to map HTML Elements into JavaScript code where they will assigned the type of Object. This means that once HTML Elements are stored in variables or mapped using a DOM api method, you can use JavaScript code to reference their properties,
update their properties and use their methods/functionalities.

With DOM HTML Elements as objects you can:

* Log the whole object to the console to help with debugging (you can view all object properties from console)
    * Can be used to identify event properties
    * text inputs
    * position of element in co-ordinates
    * parent, sibling and child elements

* Dynamically modify element classes, id's, etc.
* Insert element objects inside other elemnent objects
* Add eventHandlers to the elements
    

