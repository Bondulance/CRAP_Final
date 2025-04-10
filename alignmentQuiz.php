<!--This is my test page for quiz functionality. Please do not add code to this page-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Alignment Quiz</title>
    <link rel="stylesheet" href="./assets/css/quiz.css">
    <script src="./assets/js/alignmentQuiz.js" defer></script>
    <script src="./assets/js/tracker.js" defer></script>
</head>

<body>
    <main>

    <!-- Rachel added this to be able to merge css better -->
        <section id="quiz"> 
    <!--                                                  -->

            <h1 id="tracker"></h1>
            <div id="question1" class="question">
                <h2>1. What is the purpose of alignment?</h2>
                <p id="warning1"></p>
                <form id="question1form">
                    <input type="radio" id="oneOne" name="answer" value="dynamic">
                    <label for="one">To allow your users to find elements more easily and make your webpage more aesthetically pleasing
                    </label><br>
                    <input type="radio" id="oneTwo" name="answer" value="overlap">
                    <label for="two">To be able to keep track of code hierarchy more easily
                    </label><br>
                    <input type="radio" id="oneThree" name="answer" value="designate">
                    <label for="three">To better enable people to figure out the difference between elements on your website</label>
                </form>
            </div>

            <div id="question2" class="question">
                <h2>2. What is an example of alignment being used effectively?</h2>
                <p id="warning2"></p>
                <form id="question2form">
                    <input type="radio" id="twoOne" name="answer" value="dynamic">
                    <label for="one"> Putting your navigation a constant distance away from main website content and centered
                    </label><br>
                    <input type="radio" id="twoTwo" name="answer" value="overlap">
                    <label for="two">Using a constant color scheme throughout your website
                    </label><br>
                    <input type="radio" id="twoThree" name="answer" value="designate">
                    <label for="three">Using similar designs for each of your pages in your website</label>
                </form>
            </div>

            <div id="question3" class="question">
                <h2>3.  What is an example of poor alignment?</h2>
                <p id="warning3"></p>
                <form id="question3form">
                    <input type="radio" id="threeOne" name="answer" value="dynamic">
                    <label for="one">Squishing elements to one side of the screen
                    </label><br>
                    <input type="radio" id="threeTwo" name="answer" value="overlap">
                    <label for="two">Moving the navigation bar to different places on each page
                    </label><br>
                    <input type="radio" id="ThreeThree" name="answer" value="designate">
                    <label for="three">Having one element be diagonally adjacent to another element
                    </label>
                </form>
            </div>

            

            <button id="submitAnswer" onclick="trackerDecrement()">Submit</button>
            <button id="unselect">Unselect</button>
        </section>
    </main>
</body>

</html>