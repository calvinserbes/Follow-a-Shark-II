function checkAnswer(questionId) {
    const formData = new FormData(document.getElementById('quizForm'));
    const selectedAnswer = formData.get('question_' + questionId);

    fetch('../MODEL/verifier_reponses.php', {
            method: 'POST',
            body: new URLSearchParams({
                'question_id': questionId,
                'answer': selectedAnswer
            })
        })
        .then(response => response.json())
        .then(data => {
            if (data.is_correct) {
                alert('Bonne réponse momo le bg !');
            } else {
                alert('Mauvaise réponse. La bonne réponse est: ' + data.correct_answer);
            }

            const currentQcm = document.querySelector(`.qcm[data-question-index="${questionId - 1}"]`);
            const nextQcm = currentQcm.nextElementSibling;
            if (nextQcm) {
                currentQcm.style.display = 'none';
                nextQcm.style.display = 'flex';
            } else {
                alert('Quiz terminé!');
            }
        })
        .catch(error => console.error('Erreur:', error));
}