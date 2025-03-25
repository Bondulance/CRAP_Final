const question1 = document.getElementById("question1");
const btn = document.getElementById("submitAnswer");
const unselect = document.getElementById("unselect");
const form = document.getElementById("question1form");
const tracker = document.getElementById("tracker");

var inputs = document.getElementsByTagName("input");




const wrong = "#FFE2E2";
const correct = "#E7F9C6";
// input control
var warning = document.getElementById("warning");
const warningNode = document.createTextNode("You must enter in an answer*");

counter = 0;
const trackerNode = document.createTextNode(counter + "/3 Answered")


// tracker js
tracker.appendChild(trackerNode);

btn.addEventListener("click", function () {
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
});

unselect.addEventListener("click", function() {
  console.log("Uncheck");
  inputs[0].checked = false;
  inputs[1].checked = false;
  inputs[2].checked = false;
})