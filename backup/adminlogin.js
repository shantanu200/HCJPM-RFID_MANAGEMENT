const sign_up = document.querySelector("#sign_up");
const sign_in = document.querySelector("#sign_in");
const container = document.querySelector(".container");
const sign_in_block = document.querySelector(".block");
const sign_up_block = document.querySelector('.block_signup');


sign_up.addEventListener("click",()=>{
    sign_up_block.style.display = "flex";
    sign_in_block.style.display = "none";
});

sign_in.addEventListener("click",()=>{
    sign_up_block.style.display = "none";
    sign_in_block.style.display = "flex";
})