<!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/style.css">
        <script src="assets/js/script.js" defer></script>
        <title>Repetition</title>
    </head>

    <body>
        <header>
            <?php
                $pageTitle = 'Repetition';
                include('./assets/include/navigation.inc.php');
            ?>
             <button class="burger">
                <img src="assets/pictures/menuHamburger.svg">
            </button>

            <div id="rep_hero" class="hero">
                <h1 class="title">REPETITION</h1>
            </div>
        </header>

        <main>
            <div class="content" id="leftAlign">
                <p>
                    Repetition is the principle of consistency within the design. Like contrast, repetition also involves 
                    using fonts, visual elements, and colors throughout the website and ensuring that these elements are 
                    consistent. This reinforces the website making it more recognizable and memorable for users. Repetition, 
                    besides supporting the overall design, helps to make the website recognizable and memorable to the user. 
                    Through the repetition of prevailing design elements, designers may attain unity and harmony, thus leading 
                    to an enhanced user experience and a stronger website identity.
                </p>
                <img src="assets/pictures/repetition_example.svg" alt="repetition example" class="Rfloat" id="repEx">
            </div>
            <div class="content" id="leftAlign">
                <p>
                    The purpose of Repetition is to establish brand identity, improve the user experience, build trust with 
                    the user, and enhance navigation through the web. Repetition establishes brand identity by providing 
                    consistency within the design, providing familiar colors, logos, and typography throughout the site. 
                    Having a sense of consistency allows the user to remember the content and brand. Moreover, repetition 
                    creates a sense of guidance for users, allowing them to navigate through the website improving overall 
                    experience and makes it easier to find things that they are looking for. This holds particularly for 
                    sites with much content, as repetition makes it possible for information to be presented in a way 
                    that is easy to understand. For instance, regular use of headings, font, and whitespace enables users 
                    to rapidly scan the page and find the information they are looking for. Having good use of repetition 
                    can make it convenient for users to explore the content on the page.
                </p>
            </div>

            <div class="content">
                <p>
                    While repetition is vital in making a cohesive and user-friendly design, there must be a balance. Too much 
                    repetition makes a site look dull or uninspired and thus produces a dull or boring user experience. Designers 
                    should be cautious when they use repetition so that the users will not become bored with too much similarity. 
                    One such case is when they apply the same color scheme and font for every item on the page. It will lead to a 
                    bland and uninteresting design. But designers should apply repetition wisely, combining it with contrast and 
                    hierarchy amongst other design principles to create a lively and interesting layout.
                </p>
            </div>

            <img src="assets/pictures/repetition_bad.svg" alt="Repetition used wrong" class="centerImg">

            <div class="content">
                <p>
                    To avoid too much repetition, the designers can vary slightly in their design without compromising on overall 
                    consistency. For example, they can use different shades of the same color or interchange two complementary fonts 
                    to add visual interest without sending the cohesive look off track. Moreover, including whitespace and adjusting 
                    the size or position of items can break up the sameness and balance out the design.
                </p>
            </div>
            
            <img src="assets/pictures/repetition_good.svg" alt="Repetition used right">
            
            <div class="content">
                <p>
                    Although having Repetition is good for the context of the website, being too repetitive would cause users to 
                    find the page bland or slightly boring. Keeping in mind that having a consistent website is important but 
                    repeating can get tiring. In short, repetition is a powerful design element that enhances consistency, 
                    reinforces brand identity, and improves user experience. By repeating primary design elements, designers 
                    can create a consistent and memorable website that is easy to use and visually appealing. However, repetition 
                    must be executed wisely and not excessively, as excessive repetition can render the design dull and unengaging. 
                    When done correctly, repetition can turn a website into a welcoming and visually appealing page that leaves an 
                    indelible mark on viewers.
                </p>
            </div>
        </main>

<!-- <?php
// include('./footer.php');
?>  -->

        <footer>
            <div class="footer_links">
                <h1><a href="#">CRAP PRINCIPLES</a></h1>  <!--Link to homepage-->
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
    
</html>