document.addEventListener("DOMContentLoaded",()=>{

const cards=document.querySelectorAll(".card");

cards.forEach((card,index)=>{

setTimeout(()=>{

card.style.opacity="1";
card.style.transform="translateY(0)";

},index*150);

});

});

window.addEventListener("scroll",()=>{

document.querySelectorAll(".card").forEach(card=>{

const top=card.getBoundingClientRect().top;

if(top<window.innerHeight-100){

card.style.opacity="1";
card.style.transform="translateY(0)";

}

});

});

<link rel="icon" href="favicon.ico" type="image/x-icon"></link>