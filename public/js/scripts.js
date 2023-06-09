const loaderContainer = document.querySelector('.loader-container');

window.addEventListener('load', () => {
    
    loaderContainer.parentElement.removeChild(loaderContainer);
});

////////////////////////////////////////////////////////

dark = document.getElementById('dark');

dark.addEventListener('click', modesombre);

function modesombre() {
    let verif = localStorage.getItem('sombre');
    if (verif === 'non'){
    localStorage.setItem('sombre', 'oui');
    window.location.reload();
} else {
    localStorage.setItem('sombre', 'non');
    window.location.reload();
}
}

let mode = localStorage.getItem('sombre');

if (mode === "oui") {
    document.getElementById('dark').innerHTML = "Mode <i class='fa-regular fa-lightbulb'></i>";
    document.getElementById('footer_sombre').style.color = "white";
    document.body.style.backgroundColor = "#212121";
    document.body.style.color = "white";
    document.getElementById('header').style.backgroundColor = "#171717";
    document.getElementById('footer').style.backgroundColor = "#171717";
    document.querySelector('.temoignages1').style.color = "black";
    document.querySelector('.temoignages2').style.color = "black";
    document.querySelector('.temoignages3').style.color = "black";
    document.querySelector('.dropdown-menu').style.backgroundColor = "#171717";
    document.querySelector('.hero_espaceur').style.backgroundColor = "#171717";
    document.querySelector('.dropdown-menu').style.backgroundColor = "#171717"; 
    
}
//////////////////////////////////////////////////////////

$('#recipeCarousel').carousel({
    interval: 2100
  })
  
  $('.carousel .carousel-item').each(function(){
      var minPerSlide = 3;
      var next = $(this).next();
      if (!next.length) {
      next = $(this).siblings(':first');
      }
      next.children(':first-child').clone().appendTo($(this));
      
      for (var i=0;i<minPerSlide;i++) {
          next=next.next();
          if (!next.length) {
              next = $(this).siblings(':first');
            }
          
          next.children(':first-child').clone().appendTo($(this));
        }
  });
  

  /////////////////////////////////////

menu_responsive = document.getElementById('responsive_menu');
logo = document.getElementById('logomenu');
menu_responsive.addEventListener('click', responsive);

function responsive() {

    if(getComputedStyle(logo).display != "none"){
        logo.style.display = "none";
      } else {
        logo.style.display = "block";
      }
}