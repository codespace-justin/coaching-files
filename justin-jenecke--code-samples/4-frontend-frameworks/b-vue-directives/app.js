// Create new vue instance
const mainApp = new Vue({

    el : "#app",

    data : {

        title : "Student List App",

        subTitle : "This app displays a list of students registered for this course. Please use the textarea below to add any comments/remarks",

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
        scratchBoardText : "",

        // v-if prop
        showCourseInfo : true

    },
    methods : {

        addToStudentList(name) {

            this.studentList = this.studentList.push(name)
        }

    }

})