<?php
    $pageTitle = 'Proximity | CRAP PRINCIPLES';
    include('./assets/include/navigation.inc.php');
?> 
        <section id="prox_hero" class="hero">
            <h1 class="title">PROXIMITY</h1>
        </section>
        </header>
        
        <main class="a_page" id="prox_page">
            <h2>What is Proximity?</h2>
            <p>
                In web design, proximity is the idea that items closely associated with each other 
                should be physically closer to each other, and farther apart if they aren’t. This makes 
                it much quicker and easier for users to see the relationships between elements and makes 
                sections more defined which can lead to better site retention.
            </p>
            <h2>How Do We Use It?</h2>
            <p>
                In the example below, you can see that all the elements are spaced evenly from each other, 
                however, it is difficult to intuit which block of text goes with which picture by sight alone. While you 
                can pray that your users would assume that the text above goes with the image below, you should 
                absolutely not count on that. It’s much safer to assume users will misunderstand everything on 
                your site unless it’s explicitly stated or shown.
            </p>
            <img src="assets/pictures/proximity_none.svg" alt="All elements are evenly spaced out">
            <p>
                If we rearrange the page so that there’s more empty space (also known as whitespace or 
                negative space) between each title and image pair, then it’s much easier to see what goes 
                with what.
            </p>
            <img src="assets/pictures/proximity_whiteSpace.svg" alt="The dog pictures and dog names are grouped together">
            <p>
                Alternatively, we can also put the image-title pairs into small containers (or cards) and 
                change the background color of them so that it’s visually distinct from its surroundings.
            </p>
            <img src="assets/pictures/proximity_card.svg" alt="The dog pictures and dog names are placed over a grey rectangle">
            <h2>But Beware!</h2>
            <p>
                Beware of using too much proximity, it can easily make everything look disjointed, confusing and unpolished. 
                Also, making a user scroll a lot just to get to the next section isn’t great design.
            </p>
            <p>
                If you’ll look at this example, you can see that this site looks odd to say the least.
            </p>
            <img src="assets/pictures/proximity_genericSite.svg" alt="Site with too much white space in the middle">
            <p>
                The spacing makes it look as if someone just couldn’t code it properly rather than an intentional design. 
                Due to the amateur look, someone may be hesitant or apprehensive to continue navigating the site or might click off 
                as soon as it loads.
            </p>
        </main>
        <?php
            include('./assets/include/footer.inc.php');
        ?>
    </body>
    
</html>