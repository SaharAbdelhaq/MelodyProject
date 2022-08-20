const signinbtn=document.querySelector("#signinbtn");
const signupbtn=document.querySelector("#signupbtn");
const container=document.querySelector(".containeer");
const signinbtn2=document.querySelector("#signinbtn2");
const signupbtn2=document.querySelector("#signupbtn3");

signupbtn.addEventListener("click",() => {
    container.classList.add("sign-up-mode");
});

signinbtn.addEventListener("click",() => {
    container.classList.remove("sign-up-mode");
});
signupbtn2.addEventListener("click",() => {
    container.classList.add("sign-up-mode2");
});
signinbtn2.addEventListener("click",() => {
    container.classList.remove("sign-up-mode2");
});
