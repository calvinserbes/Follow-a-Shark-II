<?php 
session_start();

    include_once '../MODEL/quiz.php';
    $quizz = htmlspecialchars(readQuiz(1));  
    $questions = readQuestions(1);

    $questionsWithReponses = [];
    foreach ($questions as $question) {
        $questionId = $question['id'];
        $reponses = readReponse($questionId);
        $question['reponses'] = $reponses;
        $questionsWithReponses[] = $question;
    }
?>
<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Quiz</title>
    <link rel="stylesheet" href="styles/all.css">
    <link rel="stylesheet" href="styles/quiz.css">
    <?php include_once "assets/fonts/font.php";?>
</head>

<body>
    <?php include_once 'navigation.php'; ?>

    <div class="quiz">

        <div class="quiz_container">
            <h3 class="quiz_name"><?php echo $quizz; ?></h3>
            <form id="quizForm" action="verifier_reponses.php" method="post">

                <?php foreach ($questionsWithReponses as $index => $question) { ?>
                    <div class="qcm" data-question-index="<?php echo $index; ?>" style="<?php echo ($index !== 0) ? 'display:none;' : ''; ?>">
                        <p class="question"><?php echo htmlspecialchars($question['question_label']); ?></p>
                            <?php foreach ($question['reponses'] as $rIndex => $reponse) { ?>
                                <div class="rep">
                                    <label for="q<?php echo $question['id']; ?>_r<?php echo $rIndex; ?>">
                                        <input type="radio" id="q<?php echo $question['id']; ?>_r<?php echo $rIndex; ?>"
                                            name="question_<?php echo $question['id']; ?>"
                                            value="<?php echo htmlspecialchars($reponse[0]); ?>">
                                            <?php echo htmlspecialchars($reponse[0]);?>
                                            <div class="check"></div>
                                    </label>
                                </div>
                            <?php } ?>

                        <button type="button" onclick="checkAnswer(<?php echo $question['id']; ?>)">
                            Envoyer
                        </button>
                    </div>
                <?php } ?>

            </form>
        </div>
    </div>

    <script src="script/mobileMenu.js"></script>
    <script src="script/checkAnswer.js"></script>

</body>

</html>