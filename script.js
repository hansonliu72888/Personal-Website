$(document).ready(function() {
  document.getElementById("clickWork").addEventListener('click', function(e) {
    if(e.target.id == "clickSuperHairPieces"){
      e.preventDefault();
      location.href = "https://hansonzhliu.com/superhairpieces";
    }
    else if(e.target.id == "clickDayTrips"){
      e.preventDefault();
      location.href = "https://hansonzhliu.com/daytrips";
    }
    else if(e.target.id == "clickTrashAttack"){
      e.preventDefault();
      location.href = "https://hansonzhliu.com/trashattack";
    }
  });
  const hamburger = document.querySelector(".header-hamburger");
  const hamburgerDropdown = document.querySelector(".header-hamburger-dropdown");
  hamburger.addEventListener("click", mobileMenu);
  function mobileMenu() {
      hamburger.classList.toggle("active");
      hamburgerDropdown.classList.toggle("active");
  }
});



