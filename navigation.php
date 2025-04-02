<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link href="https://fonts.googleapis.com/css2?family=Inter:ital,opsz,wght@0,14..32,100..900;1,14..32,100..900&display=swap" rel="stylesheet">
    <link rel="stylesheet" href="assets/css/nav.css">
    <script src="./assets/js/nav.js" defer></script>
    <title><?php echo $pageTitle?></title>
</head>
<body>
    <header>
        <h1>CRAP PRINCIPLES</h1>
        <nav>
            <section>
                <!-- <a href="./Contrast.html">Contrast</a>
                <a href="./Repetition.html">Repetition</a>
                <a href="./Alignment.html">Alignment</a>
                <a href="./Proximity.html">Proximity</a>
                <button class="dropbtn" onclick="">Quizzes ^</button> -->
                <a href="#">Contrast</a>
                <a href="#">Repetition</a>
                <a href="#">Alignment</a>
                <a href="#">Proximity</a>
                <button onclick="buttonToggle()" class="arrow"><a href="#">Quizzes</a><img src="assets/pictures/arrowDown_white.svg"></button>
            </section>
            <div id="dropdown">
                <div class="dropcont">
                    <section class="navtext">
                        <h2>Quizzes!</h2>
                        <p>
                            If you feel up to it, why not take
                            a few quick quizzes to test your knowledge?
                        </p>
                    </section>
                    <section class="navlinks">
                        <a href="./ContrastQuiz.html">Contrast Quiz</a>
                        <a href="./RepetitionQuiz.html">Repetition Quiz</a>
                        <a href="./AlignmentQuiz.html">Alignment Quiz</a>
                        <a href="./ProximityQuiz.html">Proximity Quiz</a>
                    </section>
                </div>
            </div>
        </nav>
    </header>