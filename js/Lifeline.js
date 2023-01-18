const form = document.getElementById('form');
const fname = document.getElementById('fname');
const lname = document.getElementById('lname');
const email = document.getElementById('email');
const consult = document.getElementById('consult');

form.addEventListener('Submit', (e)=>{
    e.preventDefault();

    checkInput();
});

function checkInput() {
    //getting input values
  const fnameValue= fname.value.trim();
  const  lnameValue=lname.value.trim();
  const emailValue=email.value.trim();
  const consultValue= consult.value.trim();
}
if (fname===''){
    setErrorFor(fname,"First name cannot be null");
} else {
    setSuccessFor(fname);
}

function setErrorFor(input, message)
{
    const formControl = input.parentElement;
    const small = formControl.querySelector('small');

    small.innerText = message;
    formControl.className = 'form-control error';
}
