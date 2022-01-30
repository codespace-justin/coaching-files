// Create new vue instance
const mainApp = new Vue({

    // el as key 
    // id of component as value
    el : "#app",

    // all data/static properties used in application are declared here
    data : {

        // data types:

        // String
        title : "Student List App",
        
        // Array
        studentList : [
            "Lola Faulkner",
            "Vaughn Kirby",
            "Oswaldo Meyers",
            "Bruno Mcbride",
            "Maia Reed",
            "Nathanael Acosta",
            "Brylee Hawkins",
            "Corey Vance"
        ],
        
        // object
        course : {
            
            name : "Frontend Frameworks",
            // number
            id : 82103340,
            //boolean
            free : false
        }
    }

})