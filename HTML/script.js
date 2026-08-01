// Smooth Scroll
document.querySelectorAll('nav a').forEach(link => {
    link.addEventListener('click', function (e) {

        const target = this.getAttribute('href');

        if (target.startsWith("#")) {
            e.preventDefault();

            document.querySelector(target).scrollIntoView({
                behavior: "smooth"
            });
        }

    });
});

// Header Background on Scroll
window.addEventListener("scroll", () => {

    const header = document.querySelector("header");

    if (window.scrollY > 50) {
        header.style.background = "#000";
        header.style.transition = "0.3s";
    } else {
        header.style.background = "#111";
    }

});

// Scroll Animation
const cards = document.querySelectorAll(".card");

function revealCards() {

    const trigger = window.innerHeight - 100;

    cards.forEach(card => {

        const top = card.getBoundingClientRect().top;

        if (top < trigger) {
            card.style.opacity = "1";
            card.style.transform = "translateY(0)";
        }

    });

}

cards.forEach(card => {
    card.style.opacity = "0";
    card.style.transform = "translateY(60px)";
    card.style.transition = "0.6s ease";
});

window.addEventListener("scroll", revealCards);
window.addEventListener("load", revealCards);

// Hero Button Animation
const heroBtn = document.querySelector(".hero-btn");

if(heroBtn){
    heroBtn.addEventListener("mouseover", () => {
        heroBtn.style.boxShadow = "0 0 25px #00e5ff";
    });

    heroBtn.addEventListener("mouseout", () => {
        heroBtn.style.boxShadow = "none";
    });
}

// Welcome Message
console.log("Welcome to SK GOPI VFX Website");

const form=document.querySelector("form");

form.addEventListener("submit",function(e){

alert("Order Submitted Successfully!");

});

const inputs=document.querySelectorAll("input");

inputs.forEach(input=>{

input.addEventListener("focus",()=>{

input.style.border="2px solid #00e5ff";

});

input.addEventListener("blur",()=>{

input.style.border="none";

});

});

<link rel="icon" href="favicon.ico" type="image/x-icon"></link>