const navbarToggle = document.querySelector(".nav-toggle");
navbarToggle.addEventListener("click",()=>{
    console.log("opening navbar");
    hideSection();
    openNavbar();
    document.body.classList.toggle("hide-scrolling")
});

function hideSection(){
    document.querySelector("section.active").classList.toggle("fade-out");
}
function openNavbar(){
    document.querySelector(".header").classList.toggle("active");
}

document.addEventListener("click", (e)=>{
   if(e.target.classList.contains("link-item") && e.target.hash !== ""){
       document.querySelector(".overlay").classList.add("active");
       navbarToggle.classList.add("hide");
       if(e.target.classList.contains("nav-item")){
           openNavbar();
       }else{hideSection();document.body.classList.add("hide-scrolling");}
       setTimeout(()=>{
           document.querySelector("section.active").classList.remove("active","fade-out");
           document.querySelector(e.target.hash).classList.add("active");
           window.scrollTo(0,0);
           document.body.classList.remove("hide-scrolling");
           navbarToggle.classList.remove("hide");
           document.querySelector(".overlay").classList.remove("active")
       },500);
   } 
});

const tabContainer = document.querySelector(".about-tabs"),
aboutSection = document.querySelector(".about-section");

tabContainer.addEventListener("click", (e)=>{
    console.log(e.target);
    if(e.target.classList.contains("tab-item") && !e.target.classList.contains("active")){
        tabContainer.querySelector(".active").classList.remove("active");
        e.target.classList.add("active");
        const target = e.target.getAttribute("data-target");
        aboutSection.querySelector(".tab-content.active").classList.remove("active");
        aboutSection.querySelector(target).classList.add("active");
    }
});

/* popup portfolio */
document.addEventListener("click",(e)=>{
    if(e.target.classList.contains("view-project-btn")){
        console.log("view project");
        togglePopup();
        document.querySelector(".popup-portfolio").scrollTo(0,0);
        portfolioItemdetails(e.target.parentElement);
    }
});
function togglePopup(){
    document.querySelector(".popup-portfolio").classList.toggle("open");
    document.body.classList.toggle("hide-scrolling");
    document.querySelector(".main").classList.toggle("fade-out");
}
document.querySelector(".pp-close").addEventListener("click", togglePopup);
document.querySelector(".pp-close1").addEventListener("click", togglePopup);
document.addEventListener("click",(e)=>{
    if(e.target.classList.contains("pp-inner")){
        togglePopup();
    }
});

function portfolioItemdetails(portfolioItem){
    document.querySelector(".pp-thumbnail img").src =
    portfolioItem.querySelector(".portfolio-thumbnail img").src;
    document.querySelector(".pp-header h3").innerHTML =
    portfolioItem.querySelector(".portfolio-item-title").innerHTML;
    document.querySelector(".pp-body").innerHTML =
    portfolioItem.querySelector(".portfolio-item-detail").innerHTML;
}