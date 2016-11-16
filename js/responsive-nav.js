//by Danny Diaz-Etchevehere

//this function toggles the fullscreen mobile navigation overlay
document.getElementById("mobile-nav").style.opacity = "0"; //for some reason opacity isn't automatically set to 0.
function openNav(){
    var hamburger = document.getElementById("hamburger");
    if(document.getElementById("mobile-nav").style.opacity == "0"){
        document.getElementById("mobile-nav").style.opacity = "0.9";
        document.getElementById("barID").style.opacity = "0";
        hamburger.innerHTML = "&times;";
        hamburger.style.fontSize = "50px";
        hamburger.style.top = "3px";
    } else {

        hamburger.innerHTML = "&#9776;";
        hamburger.style.fontSize = "30px";
        hamburger.style.top = "8px";
        document.getElementById("barID").style.opacity = "1";
        document.getElementById("mobile-nav").style.opacity = "0";
    }
}

//this section is for the Home and Colophon, which don't have music to play. 
//this targets a PHP variable $audio_str in each php file.
if(document.getElementById("music-target").textContent.includes("nomusic") == false){
    document.getElementById("music").style.display = "block";
   document.getElementById("song").src = document.getElementById("music-target").textContent;
} else {
    document.getElementById("nav-this-page").style.paddingRight = "0px";
   document.getElementById("nav-this-page").style.paddingLeft = "50px";
}

//this is for the fade effect when you click on the hamburger menu
$(document).ready(function(){
     $('.hamburger-class').click(function() {
        document.getElementById("mobile-nav").style.zIndex = "21";
         $('.overlay').toggleClass('fadeOut');
    });
    $('.mobile-nav-a').click(function() {

        $('.overlay').toggleClass('fadeOut');
    });
});