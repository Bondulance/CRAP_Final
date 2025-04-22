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
            <h2>1. What is the purpose of proximity?</h2>
            <p id="warning1"></p>
            <form id="question1form">
                <input type="radio" id="oneOne" name="answer" value="dynamic">
                <label for="one">To organize related elements close together in order to create visual connection
                </label><br>
                <input type="radio" id="oneTwo" name="answer" value="overlap">
                <label for="two">To ensure all elements are spaced equally across the layout
                </label><br>
                <input type="radio" id="oneThree" name="answer" value="designate">
                <label for="three">To randomly place elements onto the page without any logical organization
                </label>
            </form>
        </div>

        <div id="question2" class="question">
            <h2>2. What is an example of proximity being used effectively?</h2>
            <p id="warning2"></p>
            <form id="question2form">
                <input type="radio" id="twoOne" name="answer" value="dynamic">
                <label for="one">  Keeping important elements like navigation located in the same spot throughout pages
                </label><br>
                <input type="radio" id="twoTwo" name="answer" value="overlap">
                <label for="two">Making every single page from the same template so that each page looks the same
                </label><br>
                <input type="radio" id="twoThree" name="answer" value="designate">
                <label for="three">Creating a new color scheme for each web page to keep things fresh and interesting</label>
            </form>
        </div>

        <div id="question3" class="question">
            <h2>3. Why is proximity important from an
                accessibility standpoint?</h2>
            <p id="warning3"></p>
            <form id="question3form">
                <input type="radio" id="threeOne" name="answer" value="dynamic">
                <label for="one">It allows people to more easily find important information on your page
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

    </section>
</main>

<?php
include('./assets/include/footer.inc.php');
?>
</body>

</html>