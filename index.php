<!-- <!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="assets/js/script.js" defer></script>
        <title>Homepage</title>
    </head>

    <body>
        <header> -->
            <?php
                $pageTitle = 'Homepage';
                include('./assets/include/navigation.inc.php');
            ?>
             <button class="burger">
                <img src="assets/pictures/menuHamburger.svg">
            </button>

            <div class="under">
                <img src="assets/pictures/home_hero.svg" alt="logo" class="logo">
                <p class="CRAP">
                    CRAP
                </p>
                <p class="CRAP2">PRINCIPLES</p>
                <h3 class="introHead">If you want to learn how to make a decent looking site, then look no further! We'll show you the ropes of good web design using the CRAP Principles.</h3>
            </div>
        </header>



        <main>
            <div>
                <h3 class="intro">If you want to learn how to make a decent looking site, then look no further! We'll show you the ropes of good web design using the CRAP Principles.</h3>
                <h1 class="topic">HERE TO LEARN?</h1>
            </div>

            <div class="reverseContent">
                <img src="assets/pictures/home_yaleArt.png" alt="Yale School of Art Homepage" class="Lfloat">
                <p>Designing a webpage can be really difficult especially if you aren't someone who fully understands
                    what makes different websites stand out from the rest. Most people could probably see that this 
                    website is unpleasant to look at.
                </p>
            </div>

            <div class="content">
                <p>
                    But you might want to understand what exactly makes a website pleasing to look at and that's 
                    where the CRAP design principles come in. They are a set of basic instructions which provide 
                    much more nuance to the discussion of what makes a website well put together or not. With a 
                    decent understanding of these principles you can organize your website to look like something 
                    people will genuinely want to use to get their information. We provide detailed looks at all four 
                    design principles with visual examples, as well as a quiz for each principle.
                </p>
                <img src="assets/pictures/home_w3schools.png" alt="w3schools create page" class="Rfloat">
            </div>
        </main>

<?php
include('./assets/include/footer.inc.php');
?>

        <!-- <footer>
            <div class="footer_links">
                <h1><a href="#">CRAP PRINCIPLES</a></h1>  Link to homepage
                <p><a href="#">Contrast</a></p>
                <p><a href="#">Repetition</a></p>
                <p><a href="#">Allignment</a></p>
                <p><a href="proximity.php">Proximity</a></p>
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
    
</html> -->