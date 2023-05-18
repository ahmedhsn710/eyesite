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
      <div id="letterContainer" style="display:flex; justify-content:center; height: 200px; align-item:center"></div>
      <input style="margin-top: 50px; margin-bottom:50px; border-radius: 5px;" type="text" id="inputField" onkeyup="checkInput()" autofocus>
      <div id="results" class="mx-5" style="display: none;">
        <p id="resultsText" class="text-lg lh-sm"></p>
        <form method="post" action="/reports" enctype="multipart/form-data">
          @csrf
          <input type="hidden" name="test_type" id="results_test_type" value="">
          <input type="hidden" name="result" id="results_result" value="">
          <input type="hidden" name="score" id="results_score" value="">
          <button id="results_save">Save</button>
        </form>
      </div>
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
      letterContainer.innerHTML = `<p class="letter my-auto" style="font-size: ${30 - 19/10 * currentLetterIndex}px; padding-top:30px">${pickRandomLetter()}</p>`;
    }
    
    function checkInput() {
      var inputField = document.getElementById('inputField');
      var result = document.getElementById('result');
      var input = inputField.value.trim().toUpperCase();
      
      if (input === answers[currentLetterIndex]) {
      attempts++;
      currentLetterIndex++;
      inputField.value = '';
        if(currentLetterIndex < 15){
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
      if (currentLetterIndex === 15) {
        inputField.disabled = true;
        document.getElementById("results_test_type").value = "eyesight"
        let testResult = attempts / 15
        document.getElementById("results_result").value = 
            `The chance your eyesight is weak is ${Math.round(((15- attempts) * 100 / 15) * 100) / 100}%`
        document.getElementById("results_score").value = `${Math.ceil(attempts * 10 / 15)}`
        document.getElementById("results_save").click();
      }
    }
    
    displayNextLetter();
  </script>
</x-app-layout>