const form = document.getElementById('form');

const password = document.getElementById('password');
const email = document.getElementById('email');


form.addEventListener('submit', e => {
    e.preventDefault();

    validateInputs();
});

const setError = (element, message) => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = message;
    inputControl.classList.add('error');
    inputControl.classList.remove('success')
}

const setSuccess = element => {
    const inputControl = element.parentElement;
    const errorDisplay = inputControl.querySelector('.error');

    errorDisplay.innerText = '';
    inputControl.classList.add('success');
    inputControl.classList.remove('error');
};


const isValidEmail = email => {
    const re = /^(([^<>()[\]\\.,;:\s@"]+(\.[^<>()[\]\\.,;:\s@"]+)*)|(".+"))@((\[[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\.[0-9]{1,3}\])|(([a-zA-Z\-0-9]+\.)+[a-zA-Z]{2,}))$/;
    return re.test(String(email).toLowerCase());
}

const validateInputs = () => {

    const emailValue = email.value.trim();
    const passwordValue = password.value.trim();


    if (emailValue === '') {
        setError(email, 'Email is required');
    } else if (!isValidEmail(emailValue)) {
        setError(email, 'Provide a valid email address');
    } else {
        setSuccess(email);
    }

    if (passwordValue === '') {
        setError(password, 'Password is required');
    } else if (passwordValue.length < 8) {
        setError(password, 'Password must be at least 8 character.')
    } else {
        setSuccess(password);
    }

    gotopage(passwordValue, emailValue);
    //authenticate(passwordValue, emailValue);

};

function gotopage(passwordValue, emailValue) {
    if (passwordValue != '' && passwordValue.length >= 8 && emailValue != '' && isValidEmail(emailValue)) {
        var src = "../php/login_authenticate.php?email=" + emailValue + "&password=" + passwordValue;
        location.href = src;
    }

};

// function authenticate(passwordValue, emailValue) {
//     // console.log(Object.keys(localStorage));

//     const dataobj = JSON.parse(localStorage.getItem(emailValue));
//     console.log(dataobj);
//     fetchedPassword = dataobj.password;
//     if (fetchedPassword == passwordValue && fetchedPassword != '') {
//         location.href = "../pages/page 3.html";

//     } else {
//         setError(password, 'incorrect email or password');
//     }
// }