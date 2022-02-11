const login = document.querySelector("#login");
const register = document.querySelector("#register");
const sign_up = document.querySelector(".sign_up");
const sign_in = document.querySelector(".sign_in");




register.addEventListener("click",()=>{
    sign_up.style.display = "flex";
    sign_in.style.display = "none";
  
});

login.addEventListener("click",()=>{
    sign_in.style.display = "flex";
    sign_up.style.display = "none";
});
