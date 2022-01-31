// Create new vue instance
const mainApp = new Vue({

    el : "#app",

    data : {

        title : "Student List App",

        // array for v-for
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
  
        course : {
            
            name : "Frontend Frameworks",
            id : 82103340,
            free : false
        },

        // v-model prop
        scratchBoardText : " This property can be edited by the View..",

        // v-if prop
        showCourseInfo : true

    }

})