<x-app-layout>
  <style>
      /* CSS to decrease letter size after each attempt */
      .letter {
          font-size: 36px;
      }
      
      .container {
          text-align: center;
      }
  </style>
  <x-main-card>
      <div class="container">
          <h2 style="padding-top: 30px; padding-bottom:40px; font-family:'Fredoka', Courier, monospace; font-weight:bold; font-size:40px;"> <span class="colored-heading">E</span>ye-<span class="colored-heading">S</span>ight <span class="colored-heading">T</span>est</h2>
          <div id="letterContainer" style="height: 200px; align-item:center"></div>
          <input style="margin-top: 50px; margin-bottom:50px; border-radius: 5px;" type="text" id="inputField" onkeyup="checkInput()" autofocus>
          <div id="result"></div>
      </div>
  </x-main-card>

  <script>
      var letters = ['A', 'B', 'C', 'D', 'E', 'F', 'G', 'H', 'I', 'J', 'K', 'L', 'M', 'N', 'O', 'P', 'Q', 'R', 'S', 'T', 'U', 'V', 'W', 'X', 'Y', 'Z'];
      var answers = [];
      // Function to pick a random letter from the list
      function pickRandomLetter() {
          const randomIndex = Math.floor(Math.random() * letters.length);
          answers.push(letters[randomIndex])
          return letters[randomIndex];
      }
      var currentLetterIndex = 0;
      var attempts = 0;
      
      function displayNextLetter() {
          var letterContainer = document.getElementById('letterContainer');
          letterContainer.innerHTML = `<p class="letter" style="font-size: ${10 - 5/10 * currentLetterIndex}px; padding-top:30px">${pickRandomLetter()}</p>`;
      }
      
      function checkInput() {
          var inputField = document.getElementById('inputField');
          var result = document.getElementById('result');
          var input = inputField.value.trim().toUpperCase();
          
          if (input === answers[currentLetterIndex]) {
          attempts++;
          currentLetterIndex++;
          inputField.value = '';
          if(currentLetterIndex < 10){
              displayNextLetter();
          }
          }
          else {
              currentLetterIndex++;
              inputField.value = '';
              if(currentLetterIndex < 10){
              displayNextLetter();
          }
          }
          if (currentLetterIndex === 10) {
          result.innerHTML = 'Result: ' + attempts + ' out of 10';
          inputField.disabled = true;
          }
          
          
          
      }
      
      displayNextLetter();
  </script>
</x-app-layout>