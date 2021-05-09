const humburgermenu= document.querySelector(".humburger-menu");
const container = document.querySelector(".container");
humburgermenu.addEventListener("click", ()=>{
    container.classList.toggle("active");
});
