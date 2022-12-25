let comercial = window.document.getElementById('comercial');

function entrou() //onmouseenter
{
    comercial.style.backgroundColor = 'black';
    comercial.style.color = 'white';
}

function saiu() //onmouseout
{
    comercial.style.backgroundColor = 'lightgray';
    comercial.style.color = 'black';
}