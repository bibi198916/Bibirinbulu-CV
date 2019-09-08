const name = document.getElementById("name");
let email = document.getElementById("email");
const title = document.getElementById("title");
const message = document.getElementById("message");
const form = document.querySelector("form");
const success = document.querySelector(".success");

form.addEventListener("submit", formValidation);

function formValidation() {
  // e.preventDefault();
  let newEmail = email.value;
  if (
    name.value == "" ||
    email.value == "" ||
    title.value == "" ||
    message.value == ""
  ) {
    alert("Fields are empty");
  } else {
    let test = name.value.length < 4 || Number.isNaN(name.value);
    console.log(test);
    if (test) {
      alert("Name must be atleast 4 characters");
      name.style.borderBottom = `2px solid red`;
    } else {
      if (!validateEmail(newEmail)) {
        alert("wrong email format");
        email.style.borderBottom = `2px solid red`;
      } else {
        if (message.value.length < 20) {
          alert("Message must be atleast 20 characters");
          message.style.borderBottom = `2px solid red`;
        } else {
          alert("Submitted Successfully!!!");
          successBorderNotificating(name, email, title, message);
          emptyFields(name, email, title, message);
        }
      }
    }
  }
}

// Email validation
function validateEmail(element) {
  var re = /^(([^<>()\[\]\.,;:\s@\"]+(\.[^<>()\[\]\.,;:\s@\"]+)*)|(\".+\"))@(([^<>()[\]\.,;:\s@\"]+\.)+[^<>()[\]\.,;:\s@\"]{2,})$/i;
  return re.test(element);
}

// Styling the border green when successful
function successBorderNotificating(n, e, t, m) {
  n.style.borderBottom = `1px solid green`;
  e.style.borderBottom = `1px solid green`;
  t.style.borderBottom = `1px solid green`;
  m.style.borderBottom = `1px solid green`;
}

// Empty input form after success
function emptyFields(n, e, t, m) {
  n.value = "";
  e.value = "";
  t.value = "";
  m.value = "";
}

console.log("working")
