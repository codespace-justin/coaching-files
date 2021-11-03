
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

    getModel() {
        return this._model;
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

        `<div id="${car._model}"> 
            <span class ="carDiv">${car._model}</span>
            <span class ="carDiv">${car._year}</span>
            <span class ="carDiv">${car._cost}</span>
            <span class ="carDiv">${car.manufacturerel}</span>
            
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
