// navbar scroll display background effect
let nav = document.querySelector(".navigation-wrap"); 
window.onscroll = function(){
    if(document.documentElement.scrollTop > 20 ){
        nav.classList.add("scroll-on");
    } 
    else{
        nav.classList.remove("scroll-on");
    }
}
 
// menu-active-on-click 

let menus = document.querySelectorAll(".menu");

menus.forEach(menu => {
    menu.addEventListener('click', (evt) => {
        // Remove the 'menu-click' class from all menu items
        menus.forEach(menu => menu.classList.remove("menu-click"));
        
        // Add the 'menu-click' class to the clicked menu item
        evt.target.classList.add("menu-click");
    });
});
console.log(menus)

// breakfast
menus[0].addEventListener("click",()=>{
    document.getElementById("lunch").style.display="none";
    document.getElementById("breakfast").style.display="block"; 
    document.getElementById("dinner").style.display="none"; 
    document.getElementById("desert").style.display="none"; 
    document.getElementById("drink").style.display="none";
})

// lunch
menus[1].addEventListener("click",()=>{
    document.getElementById("lunch").style.display="block";
    document.getElementById("breakfast").style.display="none"; 
    document.getElementById("dinner").style.display="none";
    document.getElementById("desert").style.display="none"; 
    document.getElementById("drink").style.display="none";
})

// Dinner
menus[2].addEventListener("click",()=>{
    document.getElementById("lunch").style.display="none";
    document.getElementById("breakfast").style.display="none"; 
    document.getElementById("dinner").style.display="block";
    document.getElementById("desert").style.display="none"; 
    document.getElementById("drink").style.display="none";
}) 
// deserts 

menus[3].addEventListener("click",()=>{
    document.getElementById("lunch").style.display="none";
    document.getElementById("breakfast").style.display="none"; 
    document.getElementById("dinner").style.display="none";
    document.getElementById("desert").style.display="block"; 
    document.getElementById("drink").style.display="none";
}) 

// drink 

menus[4].addEventListener("click",()=>{
    document.getElementById("lunch").style.display="none";
    document.getElementById("breakfast").style.display="none"; 
    document.getElementById("dinner").style.display="none";
    document.getElementById("desert").style.display="none"; 
    document.getElementById("drink").style.display="block";
}) 