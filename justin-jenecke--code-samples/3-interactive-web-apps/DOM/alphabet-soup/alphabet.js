const input = document.getElementById('input');
const submit = document.getElementById('submit');
const output = document.getElementById('output');



submit.onclick = function() {

    output.innerText = 'Output: ';

    let string = input.value.split('');
    string = string.sort();
    string = string.join('');
    
    console.log(string);

    output.innerText += input.value;

}