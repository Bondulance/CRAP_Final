// import { Question1, Question2, Question3 } from "./contrastQuiz";

const question1 = document.getElementById("question1");
const btn = document.getElementById("submitAnswer");
const unselect = document.getElementById("unselect");
const form = document.getElementById("question1form");

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
// tracker js

btn.addEventListener("click", function () {
  console.log(counter);
  console.log(warning);
  console.log("Button Clicked");
  warning.style.display = "none";

  if (inputs[0].checked) {
    question1.style.backgroundColor = correct;
  } else if (inputs[1].checked) {
    question1.style.backgroundColor = wrong;
  } else if (inputs[2].checked) {
    question1.style.backgroundColor = wrong;
  } else {
    warning.style.display = "block";
    warning.appendChild(warningNode);
  }
  tracker.innerText = "Tries: " + counter;

  // console.log(Question1);
  // console.log(Question2);
  // console.log(Question3);
});

unselect.addEventListener("click", function () {
  console.log("Uncheck");
  inputs[0].checked = false;
  inputs[1].checked = false;
  inputs[2].checked = false;
});

function updateTries() {
  console.log("activated");
  counter -= 1;
  if (counter == 0) {
    // disables button when there are no tries left
    btn.disabled = true;
  }
}
