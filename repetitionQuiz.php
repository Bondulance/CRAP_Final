<!--This is my test page for quiz functionality. Please do not add code to this page-->

<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Repetition Quiz</title>
    <link rel="stylesheet" href="./assets/css/quiz.css">
    <script src="./assets/js/repetitionQuiz.js" defer></script>
    <script src="./assets/js/tracker.js" defer></script>
</head>

<body>
    <main>

    <!-- Rachel added this to be able to merge css better -->
        <section id="quiz"> 
    <!--                                                  -->

            <h1 id="tracker"></h1>
            <div id="question1" class="question">
                <h2>1. What is the purpose of repetition?</h2>
                <p id="warning1"></p>
                <form id="question1form">
                    <input type="radio" id="oneOne" name="answer" value="dynamic">
                    <label for="one">To create a theme by which the user can recognize your brand and more easily navigate through your website
                    </label><br>
                    <input type="radio" id="oneTwo" name="answer" value="overlap">
                    <label for="two">To allow specific parts of your website to stand out to the user through the use of opposing colors
                    </label><br>
                    <input type="radio" id="oneThree" name="answer" value="designate">
                    <label for="three">To allow the user to better understand your content through the consistent use of short and meaningful sentences</label>
                </form>
            </div>

            <div id="question2" class="question">
                <h2>2. What is an example of repetition being used effectively?</h2>
                <p id="warning2"></p>
                <form id="question2form">
                    <input type="radio" id="twoOne" name="answer" value="dynamic">
                    <label for="one"> Keeping important elements like navigation located in the same spot throughout pages
                    </label><br>
                    <input type="radio" id="twoTwo" name="answer" value="overlap">
                    <label for="two">Making every single page from the same template so that each page looks the same
                    </label><br>
                    <input type="radio" id="twoThree" name="answer" value="designate">
                    <label for="three">Creating a new color scheme for each web page to keep things fresh and interesting</label>
                </form>
            </div>

            <div id="question3" class="question">
                <h2>3.  Why is repetition important from an accessibility standpoint?</h2>
                <p id="warning3"></p>
                <form id="question3form">
                    <input type="radio" id="threeOne" name="answer" value="dynamic">
                    <label for="one"> It allows people to more easily find important information on your page
                    </label><br>
                    <input type="radio" id="threeTwo" name="answer" value="overlap">
                    <label for="two">It allows the colorblind to more easily tell the difference between elements on your page
                    </label><br>
                    <input type="radio" id="ThreeThree" name="answer" value="designate">
                    <label for="three">It enables people without the ability to use a mouse to more easily navigate your website
                    </label>
                </form>
            </div>

            

            <button id="submitAnswer" onclick="trackerDecrement()">Submit</button>
            <button id="unselect">Unselect</button>
        </section>
    </main>
</body>

</html>