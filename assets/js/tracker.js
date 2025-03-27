let counter = 3;
const tracker = document.getElementById("tracker");
let trackerNode = document.createTextNode("Tries: " + counter);
tracker.appendChild(trackerNode);

function updateTries() {
    console.log("activated");
    counter -= 1;
    if (counter == 0) {
      // disables button when there are no tries left
      btn.disabled = true;
    }
  }