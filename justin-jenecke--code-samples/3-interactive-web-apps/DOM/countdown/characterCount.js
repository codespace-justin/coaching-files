
//console.log(textarea.maxLength);
//console.log(textarea.innerText.length);

const textarea = document.getElementById('area');
//let size = 0;
let size = textarea.maxLength;

//console.log(textarea.maxLength)

//textarea.oninput = function getLength() {
//}

textarea.addEventListener('input', (result) => {

    //console.log(result.data);

    if (result.data != null) {
        //size ++;
        size--;
    } else
        size++
        //size--;
    console.log(size)

    document.getElementById('charDisplay').innerText = size;

})