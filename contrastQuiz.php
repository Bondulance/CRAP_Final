<!--This is my test page for quiz functionality. Please do not add code to this page-->

<?php
$pageTitle = 'Alignment Quiz';
include('./assets/include/navigation.inc.php');
?>
</header>

<main>

    <!-- Rachel added this to be able to merge css better -->
    <section id="quiz">
        <!--                                                  -->

        <h1 id="tracker"></h1>
        <div id="question1" class="question">
            <h2>1. What is the purpose of contrast?</h2>
            <p id="warning1"></p>
            <form id="question1form">
                <input type="radio" id="oneOne" name="answer" value="dynamic">
                <label for="one">Create a dynamic elements to direct the users eye</label><br>
                <input type="radio" id="oneTwo" name="answer" value="overlap">
                <label for="two">To make sure elements are not overlapping each other</label><br>
                <input type="radio" id="oneThree" name="answer" value="designate">
                <label for="three">To designate lines of text you want to stand out to the reader</label>
            </form>
        </div>

        <div id="question2" class="question">
            <h2>2. What is an example of contrast being used effectively?</h2>
            <p id="warning2"></p>
            <form id="question2form">
                <input type="radio" id="twoOne" name="answer" value="dynamic">
                <label for="one">Highlighting a small amount of text in a paragraph</label><br>
                <input type="radio" id="twoTwo" name="answer" value="overlap">
                <label for="two">Allowing for space between elements</label><br>
                <input type="radio" id="twoThree" name="answer" value="designate">
                <label for="three">Making all elements of the webpage conflict each other in style</label>
            </form>
        </div>

        <div id="question3" class="question">
            <h2>3. Why is contrast important from an accessibility standpoint?</h2>
            <p id="warning3"></p>
            <form id="question3form">
                <input type="radio" id="threeOne" name="answer" value="dynamic">
                <label for="one">It allows colorblind people to easily see the difference between elements</label><br>
                <input type="radio" id="threeTwo" name="answer" value="overlap">
                <label for="two">It makes the webpage easier on the eyes</label><br>
                <input type="radio" id="ThreeThree" name="answer" value="designate">
                <label for="three">It allows the blind to better find elements on the page</label>
            </form>
        </div>



        <button id="submitAnswer" onclick="trackerDecrement()">Submit</button>

    </section>
</main>

<?php
include('./assets/include/footer.inc.php');
?>
</body>

</html>