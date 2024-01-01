const wrapper = document.getElementById("login-signup-wrapper");
const loginText = document.querySelector(".title-text .login");
const loginForm = document.querySelector("form#login-form");
const loginBtn = document.querySelector("label.login");
const signupBtn = document.querySelector("label.signup");
const signupLink = document.querySelector("form .signup-link button");

signupBtn.onclick = slideToSignupForm;
loginBtn.onclick = slideToLoginForm;
signupLink.onclick = slideToSignupForm;

function slideToLoginForm() {
  wrapper.classList.remove("signup-visible");
}
function slideToSignupForm() {
  wrapper.classList.add("signup-visible");
}
