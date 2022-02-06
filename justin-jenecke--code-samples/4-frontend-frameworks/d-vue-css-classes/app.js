// Create new vue instance
const mainApp = new Vue({

    el : "#app",

    data : {

        title : "Student List App",

        subTitle : "This app displays a list of students registered for this course. Please use the textarea below to add any comments/remarks",

    // -- Updates for dynamic css class assigning
    
        /**
         * For us to be able to manage the state of our students we need to first convert them into objects.
         * This way we can track whether they still studying, or complete with their studies and in turn 
         * dynamically apply a css rule to element the property is binded to.
         * 
         * There is an alternative way that we could achieve this dynamic styling by using mostly vanilla js and the DOM 
         * api, but since we are using Vue it makes a lot more sense utilize its power, as opposed to sticking with what we
         * already know.
         *   
         **/

        studentList : [
            {
                name : "Lola Faulkner",
                studying : true
            },
            {
                name : "Vaughn Kirby",
                studying : true
            },
            {
                name : "Oswaldo Meyers",
                studying : true
            },
            {
                name : "Bruno Mcbride",
                studying : true
            },
            {
                name : "Maia Reed",
                studying : true
            },
            {
                name : "Nathanael Acosta",
                studying : true
            },
            {
                name : "Brylee Hawkins",
                studying : true
            },
            {
                name : "Corey Vance",
                studying : true
            }
        ],

        /**
         *  remember, now that we have updated the properties in our Vue objects Model, we need update how we present 
         *  and referenc them in our Vue objects View
         */
    

    // Updates for dynamic css class assigning -- //
  
        course : {
            
            name : "Frontend Frameworks",
            id : 82103340,
            free : false
        },

        scratchBoardText : "",

        showCourseInfo : true,

        newStudent : ""

    },
    methods : {


        addToStudentList(newName) {

            let newStudent = {
                name : newName,
                studying : true
            }

            this.studentList.push(newStudent)
        },

        displayStudents() {
            this.showCourseInfo = !this.showCourseInfo
        },

        // Code for dynamic class styling
        modifyStudyingProp(student) {

            student.studying = !student.studying
        }

    }

})