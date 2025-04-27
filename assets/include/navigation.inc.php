<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="./assets/css/FINAL_STYLES_TEST.CSS">
    <script src="./assets/js/nav.js" defer></script>
    <script src="./assets/js/footer.js" defer></script>
    <script src="./assets/js/proximityQuiz.js" defer></script>

    <title><?php echo $pageTitle ?></title>
</head>

<body>
    <header>
        <h1 class="navh1"><a href="index.php" class="navh1">CRAP PRINCIPLES</a></h1>
        <nav>
            <section>
                <!-- <a href="./Contrast.html">Contrast</a>
                <a href="./Repetition.html">Repetition</a>
                <a href="./Alignment.html">Alignment</a>
                <a href="./Proximity.html">Proximity</a>
                <button class="dropbtn" onclick="">Quizzes ^</button> -->
                <div id="links">
                    <a href="contrast.php">Contrast</a>
                    <a href="repetition.php">Repetition</a>
                    <a href="alignment.php">Alignment</a>
                    <a href="proximity.php">Proximity</a>
                    <a href="goodBad.php">Good vs Bad</a>
                </div>
                
                <button id="web_btn" onclick="navButtonToggle()" class="arrow"><a href="#">Quizzes</a><img src="assets/pictures/arrowDown_white.svg"></button>
            </section>
            <div id="dropdown">
                <div class="dropcont">
                    <!-- <section class="navtext">
                        <h2>Quizzes!</h2>
                        <p>
                            If you feel up to it, why not take
                            a few quick quizzes to test your knowledge?
                        </p>
                    </section> -->
                    <section id="mobileDrop">
                    <!-- <section class="navlinks">
                        <a id="m" href="contrast.php">Contrast</a>
                        <a id="m"  href="repetition.php">Repetition</a>
                        <a id="m"  href="alignment.php">Alignment</a>
                        <a id="m"  href="proximity.php">Proximity</a>
                        <a id="m"  href="goodBad.php">Good vs Bad</a>
                    </section> -->
                        <section class="navlinks">
                            <a href="contrastQuiz.php">Contrast Quiz</a>
                            <a href="repetitionQuiz.php">Repetition Quiz</a>
                            <a href="alignmentQuiz.php">Alignment Quiz</a>
                            <a href="proximityQuiz.php">Proximity Quiz</a>
                        </section>
                    </section>
                    </section>
                </div>
            </div>
        </nav>