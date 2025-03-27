import { Question1, Question2, Question3 } from "./contrastQuiz";

const question1 = document.getElementById("question1");
const btn = document.getElementById("submitAnswer");

var inputs = document.getElementsByTagName("input");

const wrong = "#FFE2E2";
const correct = "#E7F9C6";
// input control
var warning = document.getElementById("warning");

const warningNode = document.createTextNode("You must enter in an answer*");

  let counter = 3;
  const tracker = document.getElementById("tracker");
  let trackerNode = document.createTextNode("Tries: " + counter);
  tracker.appendChild(trackerNode);


const qOne = new Question1();
const qTwo = new Question2();
const qThree = new Question3();

btn.addEventListener("click", function () {

  console.log(counter);
  console.log(warning);
  console.log("Button Clicked");
  warning.style.display = "none";

  //searches through what the user selected from the inputs.
  let givenAnswer = Array.from(inputs).find(input => inputs.checked);
 
  if (!givenAnswer) {
    // if no given answer
    warning.style.display = "block";
    if (!warning.hasChildNodes()) {
      // makes it easier to manage the text node, ensures no duplication
      warning.appendChild(warningNode);
    }
    // have to get out of if loop to validate answer below.
    return;
  }

  if (givenAnswer.value === qOne.getCorrect) {
    console.log(qOne.getCorrect)
    // using the getter from my Question1 class, bless up JS OOP, java has corrupted my mind
    question1.style.backgroundColor = correct;
  } else {
    question1.style.backgroundColor = wrong;
  }

  updateTries();

});

function updateTries() {
  console.log("activated");
  counter -= 1;
  tracker.innerText = "Tries: " + counter;
  if (counter == 0) {
    // disables button when there are no tries left
    btn.disabled = true;
  }
}


export const answers = [inputs[0], inputs[1], inputs[2]];
