<?php
include_once '../MODEL/config.php';

// récupère le title dans la table Quiz avec l'id du Quiz
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

// récupère le label des question dans la table Question avec l'id du Quiz en cours
function readQuestions($quizId) {
    global $mysqli;
    $stmt = $mysqli->prepare('SELECT question_label FROM Question WHERE quiz_id = ?');
    $stmt->bind_param('i', $quizId);
    $stmt->execute();
    $result = $stmt->get_result();

    $quizData = $result->fetch_all();
    
    $stmt->close();

    return $quizData;
}

// recupère le label des réponse dans la table Reponse avec l'id de la table Question 
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