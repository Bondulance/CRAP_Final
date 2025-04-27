const q1 = document.getElementById("question1");
const q2 = document.getElementById("question2");
const q3 = document.getElementById("question3");

const q1form = document.getElementById("question1form"); 
const q2form = document.getElementById("question2form"); 
const q3form = document.getElementById("question3form"); 

const wrong = "#FFE2E2";
const correct = "#E7F9C6";

const btn = document.getElementById("submitAnswer")
var warning1 = document.getElementById("warning1");
var warning2 = document.getElementById("warning2");
var warning3 = document.getElementById("warning3");

var tracker = document.getElementById("tracker");
var counter = 3;



// Question 1 area
var q1Inputs = q1form.querySelectorAll('input[type="radio"]');
console.log(q1Inputs)


// Question 2 area
var q2Inputs = q2form.querySelectorAll('input[type="radio"]');
console.log(q2Inputs)


// Question 3 area
var q3Inputs = q3form.querySelectorAll('input[type="radio"]');
console.log(q3Inputs)

//tracker functionality

tracker.textContent = "Tries: " + counter;

btn.addEventListener("click", function() {
  let q1Answered = false;
  let q2Answered = false;
  let q3Answered = false;

  warning1.textContent = "";
  warning2.textContent = "";
  warning3.textContent = "";


  q1Inputs.forEach(input => {
    if (input.checked) q1Answered = true;
    if (q1Inputs[0].checked) {
      q1.style.backgroundColor = correct;
    } else {
      q1.style.backgroundColor = wrong;
    }
  })
  if (!q1Answered) {
    warning1.textContent = "You Must enter in an Answer.";
  }




  q2Inputs.forEach(input => {
    if (input.checked) q2Answered = true;
    if (q2Inputs[0].checked) {
      q2.style.backgroundColor = correct;
    } else {
      q2.style.backgroundColor = wrong;
    }
  })
  if (!q2Answered) {
    warning2.textContent = "You Must enter in an Answer.";
  }


  q3Inputs.forEach(input => {
    if (input.checked) q3Answered = true;
    if (q3Inputs[0].checked) {
      q3.style.backgroundColor = correct;
    } else {
      q3.style.backgroundColor = wrong;
    }
  })
  if (!q3Answered) {
    warning3.textContent = "You Must enter in an Answer.";
  }
})

function trackerDecrement() {
  let q1Answered = false;
  let q2Answered = false;
  let q3Answered = false;

  q1Inputs.forEach(input => { if (input.checked) q1Answered = true;})
  q2Inputs.forEach(input => { if (input.checked) q2Answered = true;})
  q3Inputs.forEach(input => { if (input.checked) q3Answered = true;})

  if (q1Answered && q2Answered && q3Answered) {
    console.log("Everything answered")
    counter--;
    console.log(counter)
  }
  tracker.textContent = "Tries: " + counter
  if (counter == 0) {
    btn.disabled = true;
  }
}