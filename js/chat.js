 (function(){

   var input = document.querySelector('#typeInput');
   input.addEventListener("keyup", myFunction, false);

   function myFunction() {
     //console.log('YES');
     var filter = input.value.toUpperCase();
     var ul = document.querySelector("#response");
     var li = ul.querySelectorAll('li');

      for (i = 0; i < li.length; i++) {
        li[i].style.display = "none";

      var a = li[i].querySelectorAll(".answer")[0];

        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
          li[i].style.display = "block";
        }else {
          li[i].style.display = "none";
       }
   }

 };

var bubble1 = document.querySelector('#userBubble1');
var bubble2 = document.querySelector('#userBubble1');
var answer = document.querySelectorAll(".answer");

answer.forEach(function(element){
  element.addEventListener("click", populateText, false);
});

function populateText(){
  console.log("Response sent");
  //var activeText = p.querySelector("#userBubble1");
  bubble1.style.display = "block";
  bubble1.innerHTML = this.innerHTML;
  input.value = " ";

  var ul = document.querySelector("#response");
  var li = ul.querySelectorAll('li');

  for (i = 0; i < li.length; i++) {
      li[i].style.display = "none";
  }
}









 })();
