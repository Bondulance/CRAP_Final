<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="assets/js/script.js" defer></script>
        <title>Good vs Bad</title>
    </head>

    <body>
        <header>
            <!--Nav and logo thing on top-->
        </header>
        <section class="hero">
            <h1 id="goodBad_title" class="title">GOOD VS BAD</h1>
            <img class="mainPages_hero" src="assets/pictures/goodBad_hero.svg" alt="one set of boxes neatly aligned next to another set that looks scattered">
        </section>
        <main>
            <h2>[INSERT SUBHEADING HERE PLZ]</h2>
            <p>
                Welcome to a short guide on what to do, versus what not to do when it comes to creating an accessible and 
                CRAP-oriented website. We will look at two examples, one utilizing CRAP principles and the other looking 
                like crap. To start with the good, looking at the Prism page off of <a href="graphpad.com">graphpad.com</a>.
            </p>
            <p>
                The Prism page utilizes all four principles very well and we will go over each. When it comes to contrast, 
                the page has a more eye catching header with the deep purple background compared to the body with the paler
                white background. To dive deeper into the header, we also see great use of contrast with the bright orange
                buttons compared to the background, making them pop out to the user. Lastly, the headers of each section 
                are that purple color from the header, which provides good contrast to the black text in the main data and 
                the black background. It is also bolded nicely, giving much more attention to the user rather than the thinner 
                the body data. 
            </p>
            <img class="Rfloat" src="assets/pictures/goodBad_prism.png" alt="Screenshot of the Prism website">
            <p>
                Moving on to Alignment, the page is here is center-aligned with appropriate padding on each sides. A good example 
                here is in the header. Look at how the buttons align with the start of the title Prism and paragraph underneath, 
                all on the same starting edge. This is masterful use of edge alignment! Touching on Repetition, we could look at 
                the repeating styles of the navigation links at the top of the page, making it so the user knows exactly what they 
                are. That, as well as the repetition of the “Start A Free Trial” button styles, making it clear that the orange 
                button will be talking about the page’s promotions. Lastly, Proximity is well done with both the padding on the 
                sides of the page as well as the placement of all the elements. All navigation links are placed next to each other, 
                data and the graphics describing the data is next to each other, all of it is placed well, therefore good use of 
                Proximity.
            </p>
            <p>
                Now to cover what not to do. While we are going to use an extreme example, please remember to follow the upper 
                examples to create a clear and smooth user experience on your page. We will be covering the one and only, Yale 
                School of Art webpage (<a href="https://www.art.yale.edu/">https://www.art.yale.edu/</a>).
            </p>
            <img class="Lfloat" src="assets/pictures/goodBad_yaleArt.png" alt="Screenshot of Yale Art website">
            <p>
                When it comes to Contrast, you can certainly say there is a lot. Sadly in this case, there is far too much. From 
                nearly every color in the rainbow, as well as nearly every ounce of text on the page in a different style, it is 
                very difficult to read and understand anything we are seeing. As well as, the infamous repeating chair background 
                which just makes harsh lines on the pages style. For repetition, since there is so much contrast, there is actually 
                practically no repetition. Nearly nothing repeats, besides of course, the background. Moving swiftly onward to 
                Alignment, we can clearly see that the webpage does not even use half of it’s width, left-aligned with much of it’s 
                content smushed in long columns. The elements are aligned sporadically, making it hard for the user to maintain 
                focus on one. Lastly, with Proximity, it is with the case of alignment, where everything is placed very sporadically,
                and it is just difficult to really see what is what.
            </p>
            <p>
                With gone over both examples, we hope this helps see the power of using CRAP principles, and how big of a difference 
                it makes to your site.
            </p>
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