// const form = document.getElementById('form');


// const email = document.getElementById('email');

// const reset = document.getElementById('resseter');

// form.addEventListener('submit', e => {
//     e.preventDefault();

//     validateInputs();
// });


// const setError = (element, message) => {
//     const inputControl = element.parentElement;
//     const errorDisplay = inputControl.querySelector('.error');

//     errorDisplay.innerText = message;
//     inputControl.classList.add('error');
//     inputControl.classList.remove('success')
// }

// const setSuccess = element => {
//     const inputControl = element.parentElement;
//     const errorDisplay = inputControl.querySelector('.error');
//     const passDisp = inputControl.querySelector('.pass');
//     const submitterDisp = inputControl.querySelector('.submitter');
//     const resseterDisp = inputControl.querySelector('.resseter');
//     passDisp.style.cssText = `
//   display: block;
//   visibility:visible;
// `;
// resseterDisp.style.cssText = `
// display: block;
// visibility:visible;
// `;
// submitterDisp.style.cssText = `
// display: none;
// visibility:hidden;
// `;
//     errorDisplay.innerText = '';
//     inputControl.classList.add('success');
//     inputControl.classList.remove('error');
// };


// const isValidEmail = email => {
//     const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
//     return re.test(String(email).toLowerCase());
// }

// const validateInputs = () => {


//     const emailValue = email.value.trim();

//     dealwithEmail(emailValue);
//     const password1 = document.getElementById('password1');
//     const passwordValue = password1.value.trim();

//     if(passwordValue === '') {
//         setError(password1, 'Password is required');
//     } else if (passwordValue.length < 8 ) {
//         setError(password1, 'Password must be at least 8 character.')
//     } else {
//         setSuccess(password1);

//     }

// }


// reset.addEventListener('click', e => {
//     e.preventDefault();

//     const emailValue = email.value.trim();
//     const passwordValue = document.getElementById('password1').value.trim();
//    if( passwordValue !=' ' && passwordValue.length>8){
//       setpassWord();

//       //  const dataobj=JSON.parse( localStorage.getItem(emailValue));
//       //  dataobj.password=passwordValue;
//       //  dataobj.password2=passwordValue;
//       //  const store =  JSON.stringify(dataobj);
//       //  localStorage.setItem(emailValue,store);
//       // // setpassWord(emailValue,passwordValue);
//       //  location.href = "profile1.html";
//    }else{
//      setError(document.getElementById('password1'), 'password length must be greater than 8');

// }
// });


// function dealwithEmail(emailValue){
//   const keys=Object.keys(localStorage);
//     const change = keys.includes(emailValue);
//   if(emailValue == '') {
//       setError(email, 'Email is required');
//   } else if (!isValidEmail(emailValue)) {
//       setError(email, 'Provide a valid email address');
//   }else if(change) {
//        setSuccess(email);
//        // setpassWord(emailValue,passwordValue);

// }else{
//     setError(email, 'Email Doesnt exist')
// }

// }


// function setpassWord(){
//     const emailValue = email.value.trim();
//     const passwordValue = document.getElementById('password1').value.trim();

//     const dataobj=JSON.parse( localStorage.getItem(emailValue));

//     dataobj.password=passwordValue;
//     dataobj.password2=passwordValue;
//     const store =  JSON.stringify(dataobj);


//     localStorage.setItem(emailValue,store);
//     location.href = "profile1.html";



// }