const body = document.querySelector(".body");
const close = document.querySelector("#close");
const container_table = document.querySelector(".container_table");
const container_add = document.querySelector(".container_add");
const container = document.querySelector(".add_user");
const display = document.querySelector(".display");
const header = document.querySelector(".header");
const tb_wrap = document.querySelector(".tb_wrap");

close.addEventListener("click",()=>{
    container_add.style.display = "none";
    container.style.display = "none";
    container_table.style.display = "flex";
    // header.style.display = "flex";
    // tb_wrap.style.display = "flex";
});

display.addEventListener("click",()=>{
    container_add.style.display = "flex";
    container.style.display = "flex";
    container_table.style.display = "none";
    // header.style.display = "none";
    // tb_wrap.style.display = "none";
});

