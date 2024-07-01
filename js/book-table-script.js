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

function validateForm() {
    let name = document.getElementById("name").value;
    let email = document.getElementById("email").value;
    let phone = document.getElementById("phone").value;
    let date = document.getElementById("date").value;
    let time = document.getElementById("time").value;
    let person = document.getElementById("person").value;

  

    if (name === "") {
        document.getElementById("name-error").innerText = "Your name is required";
        return false;
    } else {
        document.getElementById("name-error").innerText = "";
    }

    if (email === "") {
        document.getElementById("email-error").innerText = "Your email is required";
        return false;
    } else {
        document.getElementById("email-error").innerText = "";
    }

    if (phone === "") {
        document.getElementById("phone-error").innerText = "Your phone is required";
        return false;
    } else {
        document.getElementById("phone-error").innerText = "";
    }

    if (date === "") {
        document.getElementById("date-error").innerText = "Date is required";
        return false;
    } else {
        document.getElementById("date-error").innerText = "";
    }

    if (time === "") {
        document.getElementById("time-error").innerText = "Time is required";
        return false;
    } else {
        document.getElementById("time-error").innerText = "";
    }

    if (person === "") {
        document.getElementById("person-error").innerText = "Number of persons is required";
        return false;
    } else {
        document.getElementById("person-error").innerText = "";
    }

   
}