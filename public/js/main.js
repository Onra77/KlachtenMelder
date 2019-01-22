var acc = document.getElementsByClassName("harmonica");
var i;

for (i = 0; i < acc.length; i++) {
  acc[i].addEventListener("click", function() {
    /* Toggle between adding and removing the "active" class,
    to highlight the button that controls the panel */
    this.classList.toggle("active");
  


    /* Toggle between hiding and showing the active text */
    var texter = this.nextElementSibling;
    if (texter.style.display === "block") {
        (texter.style.display = "none")
          panel.slideDown("slow");
      } else {
        texter.style.display = "block";
        
    }
  });
} 

