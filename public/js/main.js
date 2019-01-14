// var harmonicas = document.getElementsByClassName('harmonica');
// for(i = 0; i < harmonicas.length; i++) {
//     harmonicas[i].onclick = function () {
//         var textarea = this.getElementsByClassName('texter')[0];
        
//         if (textarea.classList.contains('show')) {
//             console.log('hier');
//             textarea.classList.remove('show');
//         }
//         else {
//             textarea.classList.add('show');
//         }

//         console.log(textarea.classList);
//     };
// }


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
        texter.style.display = "none";
    } else {
        texter.style.display = "block";
    }
  });
} 


