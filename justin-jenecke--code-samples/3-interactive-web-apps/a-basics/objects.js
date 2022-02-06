
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

// ----- Referencing properties of an Object -----//

    /*
    The most popular way us to reference the properties of an objectis to use dot (.) notation.
    We are able to use dot notation by typing out the variable name of the object, add a dot next to
    it and finally we type out the key of the property we want to reference
    */


    // --- Referencing properties outside an object (in your app) --- //

        // With standard console log we can view all the data in our object by referencing the objects variable name
        console.log(codingProfile)

        // So with dot notation we can reference a specific property
        console.log(codingProfile.name);

        // We can even append property values together for displaying purposes
        console.log(
            codingProfile.name + " can code in " + ", " + 
            codingProfile.programmingLanguages[0] + ", " +  
            codingProfile.programmingLanguages[1] + ", " +  
            codingProfile.programmingLanguages[2]
        );
        

    // --- Referencing properties inside an object --- //

        // When referencing a property inside of an object we still use dot notation, except that now we can't use
        // a variable name, since we are inside the objects namespace. Instead what we use is the "this" keyword followed
        // by the standard dot notation and reference the property by its key.

        const course3 = {

            id : "22csa3iwa",
            name : "Interactive Web Apps",
            length : 10,

            // method to display course and duration
            courseInfo : function() {
                console.log("Course Name: " + this.name + "\n" + "Course Duration: " + this.length + " Weeks")
            }
        }

        // What "this" refers to is essentially this itstance, or this specific object's properties. It is imporant to
        // understand the concept of each object having its own state and unique properties, since there might be other 
        // variables outside your object with the same variable name, or even other Objects that have the same variable name
        // as the key of one of their properties.

    // --- Alterantive referencing notation - Brackets --- //

        // We can use square brackets instead of the dot notation to refence Object properties as well, but this method is 
        // not as popular, nor as industry standard as dot notation. The main difference between dot and bracket notation is
        // that when you reference the keys of the property you have use quotations around them.
        
        // Reference a property
        console.log(codingProfile['name'])

        // Call a method
        console.log(codingProfile['introduceSelf']) ();
        
        //The choice is yours' however and you can use whichever notation you most prefer.