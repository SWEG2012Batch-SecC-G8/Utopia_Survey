document.getElementById("fullname").innerText = $firstname + " " + lastname;
// document.getElementById("photo").src="C:\Users\hp\Picturesp.pgn";
document.getElementById("email").innerText = $eamilv;
document.getElementById("phonenum").innerText = $phonenumber;
document.getElementById("bdate").innerText = $birthdate;
document.getElementById("job").innerText = $job;
document.getElementById("gender").innerText = $gender;
const container = document.getElementById('cont');
const showProfile = document.getElementById('show');
container.style.cssText = `
          display: block;
          visibility:visible;
          `;
showProfile.style.cssText = `
          display: none;
          visibility:hidden;
          `;
//location.href="../pages/page 3.html";