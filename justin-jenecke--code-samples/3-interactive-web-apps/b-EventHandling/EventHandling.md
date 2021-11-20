# Basics Events and Event Handling

    These Chapter are heavily based on handling events and event types, so I reccomend have a look through the event handling
    notes, and perhaps the event handler documentation on either MDN or W3Schools.

    For more info refer to the chapters 'restructuring the DOM', and 'manipulating the DOM' in the CodeSpace LMS

## Important To Remember About Events:

    All events (click) or event attributes (onclick) return an event object where you can find out more information about the event
    eg:
        - oninput might tell what us what value (letter, number, etc.) was inserted
        - onclick might return the coordinates where exaxtly the mouse was clicked
        - etc.

    You can log the event in the console and view the information mentioned above
    Event handling is a very important detail when working with events in any presentation/UI based programming
    
## Syntax of events:

    Get HTML Element

        - const element = document.getElementById('element');

    Event Attribute

        - element.onclick = function myFunction(event) {
            console.log(event);
        }

    Event Handler (ES6)

        - element.addEventListener('click', (event) => {
            console.log(event);
        })

## Event Object Properties

    Event objects contain crucial information about the event that has take place, so in order to perform advanced functionality and DOM
    manipulation

    We use dot notation ( . ) on any object in order to get, and manipulate the the properties of an Object

    eg:
        - myObject.property;
        - event.target;
        - etc.