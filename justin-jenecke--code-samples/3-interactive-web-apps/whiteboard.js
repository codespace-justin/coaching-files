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