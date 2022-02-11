const close = document.querySelector("#close");
const container = document.querySelector(".add_user");
const display = document.querySelector(".display");


close.addEventListener("click",()=>{
    container.style.display = "none";
});

display.addEventListener("click",()=>{
    container.style.display = "flex";
});

