<?php
    $pageTitle = 'Alignment | CRAP PRINCIPLES';
    include('./assets/include/navigation.inc.php');
?>
            <section id="alignment_hero" class="hero">
                <h1 class="title">ALIGNMENT</h1>
                <!--make part of bg-->
                <!-- <img class="mainPages_hero" src="assets/pictures/proximity_hero.svg" alt="two sets of boxes closer to their partners than the whole group"> -->
            </section>
        </header>
        
        <main class="a_page" id="alignment_page">
            <h2>What is alignment?</h2>
            <p>The principle of alignment describes the structure and balance of the webpage. Alignment ensures that the organization of all the elements in the webpage remain consistent and in a flawless form. Without alignment, your webpage will look messy, and responsive development is near impossible.</p>
            <h2>What can it be used for?</h2>
            <p>While alignment might seem like a one trick pony, it has many hidden benefits. Alignment can give a sense of direction on the webpage, helping users navigate much easier. It helps get rid of clutter and in turn organizes your data, making your page more consistent. To dive deeper, there are two main types of alignment; edge alignment and center alignment.</p>
            <p>Edge alignment is used to naturally position all elements based off of their outer edges. For example, two square images with a different width, but on the same row, would be edge aligned. </p>
            <img src="assets/pictures/alignment_edge.svg" alt="Edge aligned boxes">
            <p>The other type of alignment, center alignment, places all elements so they line up with each other based off of their center axes.</p>
            <img src="assets/pictures/alignment_center.svg" alt="Center aligned boxes">
            <h2>Alignment can be tricky...</h2>
            <p>Alignment is the hardest to get right of all the other CRAP principles. The reasons behind this? The pesky human eyes. We tend to find even the smallest of inconsistencies, meaning every pixel must be perfectly aligned! Designing must be taken with great care and attention to detail to ensure a clean, refined website is brought out.</p>
            <p>To give examples of bad alignment, check out these examples:</p>
            <img src="assets/pictures/alignment_bad.svg" alt="Poor alignment example">
            <p>Looking at the dark 3 rectangles at the top, we see that the leftmost rectangle is drastically higher than the other two. It also lacks margins on the sides and makes for a very lopsided and almost uncomfortable look at the webpage. </p>
            <p>The second layer is not as harsh of a outlier, yet the bottom right square does not end where the top rectangle does, causing an imbalance in the alignment and overall design.</p>
            <p>Moving forward to good alignment, let's look at this example. </p>
            <img src="assets/pictures/alignment_good.svg" alt="Good alignment example">
            <p>The three dark rectangles are center aligned, have equal spacing between themselves, and are all the same size. The design is very even, and makes for an inoffensive, common, but good look and balance to the webpage. </p>
            <p>Going down to our second Layer, while they are not the same size, they take up the same width, are center aligned, and provide some interesting contrast in the page design.</p>
            
            <h2>Tips for aligning</h2>
            <p>Lastly, the best ways to solve the challenge of alignment. Of course, designing will take a lot of the hard workload off, but when it comes to your CSS, invest some time into learning flexbox and grid. Flexbox is a fantastic tool that helps with alignment, offering utility for making columns, rows, and centering with ease. Grid operates slightly differently, but still makes creating columns and rows quite easy.</p>



        </main>
        <!-- <footer>
            <div class="footer_links">
                <h1><a href="#">CRAP PRINCIPLES</a></h1>
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
        </footer> -->
        <?php
            include('./assets/include/footer.inc.php');
        ?>
    </body>
    
</html>