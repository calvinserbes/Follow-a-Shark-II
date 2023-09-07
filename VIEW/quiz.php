<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="styles/all.css">
    <link rel="stylesheet" href="styles/quiz.css">
</head>

<body>
    <?php include_once '../debug.php';?>
    <?php 
        include_once '../CONTROLS/quiz.php';
        $quizz = readQuiz(1);
        $question = readQuestions(1);
    ?>

    <?php include_once 'navigation.php';?>

    <div class="quiz" style='margin-top: 300px;'>

        <div class="quiz_container">

            <h3 class="quiz_name"><?php echo $quizz;?></h3>

            <?php for ($i = 0; $i < count($question); $i++)
                    { $reponse = readReponse($i + 1);
                ?>
            <div class="qcm">
                <p class="question"><?php echo $question[$i][0];?></p>
                <?php for ($j = 0; $j < count($reponse); $j++){ ?>
                <a class="reponse"><?php echo $reponse[$j][0]; ?></a>
                <?php }; ?>
            </div>
            <?php }; ?>

        </div>
    </div>

    <script>
    let nav = document.querySelector('.navigation');
    nav.classList.add('nav_shop');
    </script>
</body>

</html>