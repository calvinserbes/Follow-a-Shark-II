<?php
include_once '../MODEL/config.php';

function readQuiz($quizId) {
    global $mysqli;
    $stmt = $mysqli->prepare('SELECT title FROM Quiz WHERE id = ?');
    $stmt->bind_param('i', $quizId);
    $stmt->execute();
    $result = $stmt->get_result();
    
    $quizData = $result->fetch_assoc();
    $stmt->close();
    
    return $quizData['title'];
}

function readQuestions($quizId) {
    global $mysqli;
    $stmt = $mysqli->prepare('SELECT id, question_label FROM Question WHERE quiz_id = ?');
    $stmt->bind_param('i', $quizId);
    $stmt->execute();
    $result = $stmt->get_result();

    $quizData = $result->fetch_all(MYSQLI_ASSOC);
    $stmt->close();

    return $quizData;
}

function readReponse($questionId) {
    global $mysqli;
    $stmt = $mysqli->prepare('SELECT label FROM Reponse WHERE question_id = ?');
    $stmt->bind_param('i', $questionId);
    $stmt->execute();
    $result = $stmt->get_result();

    $reponseData = $result->fetch_all();
    $stmt->close();

    return $reponseData;
}
?>