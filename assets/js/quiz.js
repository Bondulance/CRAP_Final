const question1 = document.getElementById("question1");
const btn = document.getElementById("submitAnswer");
const form = document.getElementById("question1form");
var inputs = document.getElementsByTagName("input");

// input control
var warning = document.getElementsByClassName("warning");
const warningNode = document.createTextNode("You must enter in an answer*");

btn.addEventListener("click", function () {
  console.log(warning);
  console.log("Button Clicked");

  if (inputs[0].checked) {
    question1.style.backgroundColor = "#E7F9C6";
  } else if (inputs[1].checked) {
    question1.style.backgroundColor = "#FFE2E2";
  } else if (inputs[2].checked) {
    question1.style.backgroundColor = "#FFE2E2";
  } else {
    warning.style.display = "block";
    warning.appendChild(warningNode);
  }
});
