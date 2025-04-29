<!-- <!DOCTYPE html>
<html lang="en">

    <head>
        <meta charset="UTF-8">
        <meta name="viewport" content="width=device-width, initial-scale=1.0">
        <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
        <link rel="stylesheet" href="assets/css/FINAL_STYLES_TEST.css">
        <script src="assets/js/script.js" defer></script>
        <title>Repetition</title>
    </head>

    <body>
        <header>
            //php
             <button class="burger">
                <img src="assets/pictures/menuHamburger.svg">
            </button>

            <section id="#rep_hero" class="hero">
                <h1 class="title">REPETITION</h1>
            </section>
        </header> -->
<?php
    $pageTitle = 'Repetition';
    include('./assets/include/navigation.inc.php');
?> 
        <section id="rep_hero" class="hero">
            <h1 class="title">REPETITION</h1>
            <!--make part of bg-->
            <!-- <img class="mainPages_hero" src="assets/pictures/proximity_hero.svg" alt="two sets of boxes closer to their partners than the whole group"> -->
        </section>
        </header>


        <main class="a_page" id="rep_page">
        <h2> What is Repetition?</h2>
            <div class="content" id="leftAlign">
               
                <p>
                    Repetition is the principle of consistency within a design. Like contrast, repetition also involves 
                    using fonts, visual elements, and colors throughout the website and ensuring that these elements are 
                    consistent. This reinforces the website making it more recognizable and memorable for users. Repetition, 
                    besides supporting the overall design, helps to make the website recognizable and memorable to the user. 
                    Through the repetition of prevailing design elements, designers may display the pure essence of unity and harmony, thus leading 
                    to an enhanced user experience and a stronger website identity.
                </p>
                <img src="assets/pictures/repetition_example.svg" alt="repetition example" class="Rfloat" id="repEx">
            </div>
            <div class="content" id="leftAlign">
                <h2>The Purpose of Repetition</h2>
                <p>
                    The purpose of repetition is to establish brand identity, improve the user experience, build trust with 
                    the user, and enhance navigation through the web. Repetition establishes brand identity by providing 
                    consistency within the design, providing familiar colors, logos, and typography throughout the site. 
                    Having a sense of consistency allows the user to remember the content and brand. Moreover, repetition 
                    creates a sense of guidance for users, allowing them to navigate through the website improving overall 
                    experience and making it easier to find things that they are looking for. This holds particularly for 
                    sites with a lot of content, as repetition makes it possible for information to be presented in a way 
                    that is easy to understand. For instance, regular use of headings, font, and whitespace enables users 
                    to rapidly scan the page and find the information they are looking for. Using repetition effectively 
                    can make it convenient for users to explore the content on the page.
                </p>
            </div>

        <div class="content">
            <p>
                While repetition is vital in making a cohesive and user-friendly design, there must be a balance. Too much
                repetition makes a site look dull or uninspired and thus produces a dull or boring user experience. Designers
                should be cautious when they use repetition lest users become bored.
                An example of this is applying the same color scheme and font for every item on the page. It will lead to a
                bland and uninteresting design. But if designers apply repetition wisely, combining it with contrast and
                hierarchy amongst other design principles. They can create a lively and interesting layout.
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
            <h2>Balancing Repetition</h2>
            <p>
                Although having repetition is good for the context of the website, being too repetitive will cause users to
                find the page bland or slightly boring. It is good to keep in mind that having a consistent website is important but
                repeating elements can get tiring. In short, repetition is a powerful design element that enhances consistency,
                reinforces brand identity, and improves user experience. By repeating primary design elements, designers
                can create a consistent and memorable website that is easy to use and visually appealing. However, repetition
                must be implemented wisely and not excessively, as excessive repetition can render the design dull and unengaging.
                When done correctly, repetition can turn a website into a welcoming and visually appealing page that leaves an
                indelible mark on viewers.
            </p>
        </div>
    </main>


    <?php
    require_once("./assets/include/footer.inc.php");

    ?>