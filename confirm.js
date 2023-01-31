const form = document.querySelector('#create-account-form');
const dateInput = document.querySelector('#date');
const timeInput = document.querySelector('#time');


form.addEventListener('submit', (event)=>{
    if(isFormValid()==true){
        form.submit();
     }else {
         event.preventDefault();
     }

});

function isFormValid(){
    const inputContainers = form.querySelectorAll('.input-group');
    let result = true;
    inputContainers.forEach((container)=>{
        if(container.classList.contains('error')){
            result = false;
        }
    });
    return result;
}