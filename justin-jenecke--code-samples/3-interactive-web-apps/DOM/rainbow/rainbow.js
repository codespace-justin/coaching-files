
// Element onclick attribute: object.onclick = function(){myScript};
// Add event listener to element: object.addEventListener("click", myScript);
/*
document.getElementById('red').onclick = function(){
    
    //Change color using JavaScript
    document.getElementById('red').style.backgroundColor = 'red';

};
*/



// Storing element in Id and adding event listener

const blueDiv = document.getElementById('blue');

blueDiv.onclick = function() {

    let color = blueDiv.id;

    blueDiv.style.backgroundColor = color;
    blueDiv.innerText = color;
    blueDiv.style.color = 'white';

}



//Trying to loop through Element Collection
/*
const divs = document.getElementsByClassName('container');

divs.forEach( function(div) {
    div.onclick = function colorChange() {

        const color = div.id;
        console.log(color);

    }
});
*/



// Convert HTMLElementCollection to array

const divs = document.getElementsByClassName('container');

Array.from(divs).forEach( function(div) {

    div.onclick = function() {

        const bgColor = div.id;
        div.style.backgroundColor = bgColor;
        div.innerText = div.id;
    
    }
})
