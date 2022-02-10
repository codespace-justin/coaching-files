// Create new vue instance
const mainApp = new Vue({

    el : "#app",

    data : {

        title : "Student List App",

        subTitle : "This app displays a list of students registered for this course. Please use the textarea below to add any comments/remarks",

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

        scratchBoardText : "",

        showCourseInfo : true,

    // -- Code for methods example

        // bind this property to input
        newStudent : ""

    // code for methods example -- //

    },
    methods : {

    // -- Code for methods example

        // When add button is click this method is called
        addToStudentList(name) {

            this.studentList.push(name)
        },
        
        // When display students button is clicked this method is called
        displayStudents() {
            this.showCourseInfo = !this.showCourseInfo
        }

    // Code for methods example -- //

    }

})
