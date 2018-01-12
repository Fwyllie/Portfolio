 (function(){

   var input = document.querySelector('#typeInput');
   var bubble1 = document.querySelector('#userBubble1');
   var myText2 = document.querySelector("#myMessage2");
   var bubble2 = document.querySelector('#userBubble2');
   var myText3 = document.querySelector('#myMessage3');
   var answer = document.querySelectorAll(".answer");

   input.addEventListener("keyup", filterText, false);

 function filterText() {
     var filter = input.value.toUpperCase();
     var ul = document.querySelector("#response");
     var li = ul.querySelectorAll('li');

     for (i = 0; i < li.length; i++) {
        li[i].style.display = "block";

        var a = li[i].querySelectorAll(".answer")[0];

        if (a.innerHTML.toUpperCase().indexOf(filter) > -1) {
          li[i].style.display = "block";
        }else {
          li[i].style.display = "none";
        }
      }
 }

answer.forEach(function(element){
  element.addEventListener("click", populateText, false);
});

function populateText(){
  answer.forEach(function(element){
    element.removeEventListener("click", populateText, false);
  });
  bubble1.style.display = "block";
  bubble1.innerHTML = this.innerHTML;
  input.value = " ";
  bubble1.id = this.id
  var ul = document.querySelector("#response");
  var li = ul.querySelectorAll('li');
  for (i = 0; i < li.length; i++) {
      li[i].style.display = "none";
  }
  myResponse()
}

function myResponse(){
  let link2 = document.querySelector('#message2link');
  if (bubble1.id === "user1") {
    myText2.style.display = "block";
    link2.href = "resume.html";
    myText2.innerHTML = "You can click here to see my resume. You can also click the arrow in the top left of the page at any time.";
  }else if (bubble1.id === "user2") {
    myText2.style.display = "block";
    link2.href = "#section1";
    myText2.innerHTML = "Here is the link! (click here)";
  }else if (bubble1.id === "user3") {
    myText2.style.display = "block";
    link2.href = "#section2";
    myText2.innerHTML = "Sure! Click here to check it out.";
  }else if (bubble1.id === "user4") {
    myText2.style.display = "block";
    link2.href = "#section3";
    myText2.innerHTML = "Click here to shoot me an email.";
  }

  answer.forEach(function(element){
    element.addEventListener("click", userResponse2, false);
  });
}

function userResponse2(){
  answer.forEach(function(element){
    element.removeEventListener("click", userResponse2, false);
  });

  bubble2.style.display = "block";
  bubble2.innerHTML = this.innerHTML;
  input.value = " ";
  bubble2.id = this.id
  myResponse2()
}

function myResponse2(){
  let link3 = document.querySelector('#message3link');
  if (bubble2.id === "user1") {
    myText3.style.display = "block";
    link3.href = "resume.html";
    myText3.innerHTML = "You can click here to see my resume. You can also click the arrow in the top left of the page at any time.";
  }else if (bubble2.id === "user2") {
    myText3.style.display = "block";
    link3.href = "#section1";
    myText3.innerHTML = "Here is the link! (click here)";
  }else if (bubble2.id === "user3") {
    myText3.style.display = "block";
    link3.href = "#section2";
    myText3.innerHTML = "Sure! Click here to check it out.";
  }else if (bubble2.id === "user4") {
    myText3.style.display = "block";
    link3.href = "#section3";
    myText3.innerHTML = "Click here to shoot me an email.";
  }
}

 })();
