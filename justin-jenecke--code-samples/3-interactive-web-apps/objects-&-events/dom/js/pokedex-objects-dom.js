function logic() {

    // First thing to do is get input from user
    let inputName = document.getElementById("name");
    let inputType = document.getElementById("type");
    let inputRegion = document.getElementById("region");


    // Check to see if inputs are not empty
    if (inputName != null  &&  inputType != null  &&  inputRegion != null) {

        // Will only give objects
        console.log( inputName + " - " + inputType + " - " + inputRegion + " region") // remove once you have clear understanding

        // Get String values of variables
        inputName = inputName.value;
        inputType = inputType.value;
        inputRegion = inputRegion.value;

        // Can log them since they are now pure Strings
        console.log( inputName + " - " + inputType + " - " + inputRegion + " region") // remove once you have clear understanding

    } else {

        alert("Input fields cannot be empty, please fill in all fields in to capture Pokemon information.")
    }

/*-----------------------------------------------
 * Add your solution code here
 *---------------------------------------------*/

    /* --- Part 1 : Create pokemon data Object --- */
   
        // Create pokemon object here (const pokemon) using user input Strings
        const pokemon = {
            name : inputName,
            type : inputType,
            region : inputRegion
        };
        
        console.log( pokemon);


        // Create a span element (const pokemonData) and put the pokemon objects properties inside of it
        const pokemonData = document.createElement("span");
        pokemonData.innerHTML = pokemon.name + " - " + pokemon.type + " - " + pokemon.region;
        console.log( pokemonData);


    /* --- Part 2 : Creating other DOM Objects --- */
        
        // Create HTML li element here (const pokedexEntry)
        const pokedexEntry = document.createElement("li");


        // Give pokedexEntry (li) a new CSS class equal to the "type" property of the pokemon object
        pokedexEntry.classList += inputType;
        console.log( pokedexEntry);


        // Creating a preview button (using a Template Literal)
        // this code is for an html form that will Google search the name of the pokemon
        const previewButton = `
            <form action="http://google.com/search" target="_blank">
                <input name="q" hidden value="${inputName}">
                <input type="submit">
            </form>
        `;

    
    /* --- Part 3 : Add things into the DOM --- */

        // Firstly append pokemonData to the innerHTML of pokedexEntry
        pokedexEntry.appendChild(pokemonData);
        console.log( pokedexEntry)

        // Secondly append the previewButton to innerHTML of pokedexEntry
        pokedexEntry.innerHTML += previewButton;
        console.log( pokedexEntry)

        // Lastly we will get the ul List element that is meant to contain all pokedex entries
        // The we will append pokedexEntry to the innerHTML of the pokedexEntries ul element
        const pokedexEntriesList = document.getElementById("pokedex-entries");
        pokedexEntriesList.appendChild(pokedexEntry)

/*-----------------------------------------------
 * Solution must be above this comment
 *---------------------------------------------*/
}


/*/ ---- OPTIONAL ---- /*/

/** Question 1
 * 
 * Create CSS rules for every type options selector so that the 
 * type classes without any rules with have styles applied to them as well
 */

/** Question 2 
 * 
 * Create an Array called pokedexMemory and add the object you create on line 29 to this array
 * and Log this Array out to the console after your pokedexEntry component has been succesfully added to the DOM
 * The list of item in browser should be exactly the same as the ones in the console
*/