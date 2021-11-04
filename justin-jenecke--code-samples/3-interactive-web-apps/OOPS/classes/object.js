
// example of tv as class
class Car {

    //Constructor
    constructor (model, manufacturer, year, cost) {

        //Attributes
        this._model = model;
        this._manufacturer = manufacturer;
        this._year = year;
        this._cost = cost;
    }

    //Getters:

    get getModel() {return this._model;}

    get getManufacturer() {return this._manufacturer;}

    get getYear() {return this._year;}
    
    get getCost() {return this._cost;}

    //Setters:

    set setModel(model) {
        if (typeof model === 'string')
            this._model = model;
        else    
            console.log('Model must be a String');
    }

    //Ternary operator for setter : works the same as normal if statement
    set setManufacturer(manufacturer) {
        typeof manufacturer === 'string' ? this._manufacturer = manufacturer : console.log('must be string');
    }

    set setYear(year) {
        if (typeof year === 'number')
            this._year = year;
        else    
            console.log('Year must be a number');
    }

    set setCost(cost) {
        if (typeof cost === 'number')
            this._cost = cost;
        else   
            console.log('Cost must be a number');
    }

}//end of class


// Objects of the Car class

const person = {
    name : 'justin',
    job : 'coach'
}



const myCar = new Car ('Fiesta', 'Ford', 2010, 100);
const car2 = new Car ('X16', 'Ford', 2018, 100);
const car3 = new Car ('Focus', 'Ford', 2010, 100);
const car4 = new Car ('Golf', 'VW', 2020, 100);


const showRoom = [myCar, car2, car3, car4];

for (let index = 0; index < showRoom.length; index++) {
    
    console.log(showRoom[index]);
    
}

const entryPoint = document.getElementById('elem');
const newElem = document.createElement('div');

showRoom.forEach(car => {

    entryPoint.innerHTML +=

        //JavaScript template string to create HTML Element with JS variables
        `<div id="${car.getModel}"> 
            <span class ="carDiv">${car.getModel}</span>
            <span class ="carDiv">${car.getYear}</span>
            <span class ="carDiv">${car.getCost}</span>
            <span class ="carDiv">${car.getManufacturer}</span>
            
        </div>`

});


/*
create.addEventListener('click', () => {

})
*/
/*
create.onclick = () => {
  
    const inputData = Array.from(document.getElementsByClassName('form'));

    inputData.forEach(element => {

    });
}*/
/*
time.oninput = () => {
    console.log('you typed')
}*/
