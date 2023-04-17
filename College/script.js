let btnRed = document.querySelector('.btnRed');
btnRed.addEventListener('click', () => { 
    if(confirm('Is problem solved'))
    btnRed.classList.add('red');
});
