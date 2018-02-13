let words = ['Type Here...', 'Resume', 'Portfolio', 'Type Here...'],
    text = document.querySelector('.text'),
    input = document.querySelector('#typeInput'),
    count = 0;
    input.addEventListener("focus", removePH , false);

  function removePH(){
    text.style.display = "none";
    input.addEventListener("blur", function(){text.style.display = "block";});
  }

  function displayWord(word) {
    let charCount = 0,
      charInterval = setInterval(() => {
        text.textContent += word[charCount];
        charCount++;
        if (charCount >= word.length) {
          if (count < words.length) {
            setTimeout(() => {
              deleteWord(word);
            }, 200);
          }
          clearInterval(charInterval);
        }
      }, 170)
  }

  function deleteWord() {
    let deleteCount = text.textContent.length,
      deleteInterval = setInterval(() => {
        text.textContent = text.textContent.slice(0, -1);
        deleteCount--;
        if (deleteCount <= 0) {
          clearInterval(deleteInterval);
        }
      }, 100)
  }
  setTimeout(() => {
    displayInterval = setInterval(() => {
      displayWord(words[count]);
      count++;
      if(count === 4){
        clearTimeout(displayInterval);
      }else if (count >= word.length) {
        clearInterval(charInterval);
      }
    }, 2500);
  }, 2000);

  function init() {
    displayWord(words[count]);
    count++;
  }

  init();
