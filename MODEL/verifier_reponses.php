<?php
include_once '../MODEL/config.php';

function getCorrectAnswerFromDB($questionId) {
    global $mysqli;
    $stmt = $mysqli->prepare('SELECT bonne_reponse FROM Question WHERE id = ?');
    $stmt->bind_param('i', $questionId);
    $stmt->execute();
    $result = $stmt->get_result();
    $data = $result->fetch_assoc();
    $stmt->close();
    return $data['bonne_reponse'];
}

$questionId = $_POST['question_id'];
$userAnswer = $_POST['answer'];
$correctAnswer = getCorrectAnswerFromDB($questionId);

$response = [];
if ($userAnswer == $correctAnswer) {
    $response['is_correct'] = true;
} else {
    $response['is_correct'] = false;
    $response['correct_answer'] = $correctAnswer;
}

echo json_encode($response);
?>