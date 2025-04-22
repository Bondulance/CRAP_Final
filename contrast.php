<?php
    $pageTitle = 'Homepage';
    include('./assets/include/navigation.inc.php');
?> 
            <section id="cont_hero" class="hero">
                <h1 class="title">CONTRAST</h1>
                <!--make part of bg-->
                <!-- <img class="mainPages_hero" src="assets/pictures/proximity_hero.svg" alt="two sets of boxes closer to their partners than the whole group"> -->
            </section>
        </header>
        
        <main id="contrast_page" class="a_page">

        <p>Contrast is the difference in design between elements often close to each other. Most commonly it refers to color, like black text on a white background, but the concept applies to any element of design. If you want something to pop out at a user, do something different compared to the rest of the page whether it be color, font, texture of an image (smooth and rounded with gradients vs. blocky and with defined edges), even word choice can be an effective contrast as a storytelling device.
        </p>
        <img src="./assets/pictures/contrast_badSite.svg" alt="Big ugly website">
        <p>Here is a really bad site which breaks many of the principles.</p>
        <p>The purpose of contrast is to make things pop out to your user. Web pages often have a lot of content, and contrast can work along with your navigation elements to allow the user's eyes to easily flow to and from each piece of information in the order you want. Often the user’s eyes will be drawn to the biggest element with the largest amount of contrast first, a large text font with dark colors against a pastel background.
        </p>
        <img src="" alt="">
        <p>As opposed to something pastel on pastel, or dark on dark.</p>
        <img src="" alt="">
        <p>These examples should give you a good idea of how a good contrast can make some text much easier to read then other text.</p>
        <p>The user will then typically go down the list of elements according to how much contrast each element has, the larger the contrast the sooner they will look at it. This is how highlighting works, your eyes are pulled to the elements that have the highest contrast.</p>
        <p class="highlight">This sentence will be very visible</p>
        <p>While this sentence will fall into the normal flow of things.</p>
        <p>This is due to the contrast between most of the text being in black with a white background while a smaller portion of text uses a different color to make it pop, notice also how the background color is pastel while the text color is much darker and more solid, making it have a high color contrast as well as the contrast between a common theme and a unique theme. This can be used to highlight important parts of your website that you might want users to read because even if they’re skipping over most of your words, the words you highlight will stick out to them.</p>
        <img src="./assets/pictures/contrast_grapeSite.svg" alt="">
        <p>Conversely, there may be times where you want an element to have a smaller amount of contrast than other elements, in which case you want to be careful not to go past the point where it becomes difficult for the user to absorb the information you wish to convey. This can be tough as each person has a different point at which they will find it difficult to understand information. Most of the time you will want to avoid this if at all possible, but if not then the best way to decrease contrast without making your content rough on the eyes is to simply decrease the text size as people can simply increase the text size or use a magnifying tool to read your text if they need to.</p>



        </main>
        <footer>
            <div class="footer_links">
                <h1><a href="#">CRAP PRINCIPLES</a></h1>  <!--Link to homepage-->
                <p><a href="#">Contrast</a></p>
                <p><a href="#">Repetition</a></p>
                <p><a href="#">Allignment</a></p>
                <p><a href="#">Proximity</a></p>
                <div class="quiz_section">
                    <div class="quiz_head">
                        <p><a href="#">Quizzes</a></p>
                        <button onclick="buttonToggle()" class="footer_arrow"><img src="assets/pictures/arrowDown_white.svg"></button>
                    </div>
                    <div id="q">
                        <p><a href="#">Contrast Quiz</a></p>
                        <p><a href="#">Repetition Quiz</a></p>
                        <p><a href="#">Allignment Quiz</a></p>
                        <p><a href="#">Proximity Quiz</a></p>
                        <p><a href="#">Good vs Bad</a></p>
                    </div>
                </div>
            </div>
            <div class="footer_end">
                <p>Copyright &copy; 2025</p>
            </div>
        </footer>
    </body>
    
</html>