function populate() {
	if (quiz.isEnded()) {
		//montrer score
		showScores();
	}
	else {
		// montrer questions

		var element = document.getElementById("question");
		element.innerHTML = quiz.getQuestionIndex().text;

		//montrer les choix

		var choices = quiz.getQuestionIndex().choices;
		for (var i = 0; i < choices.length; i++) {
			var element = document.getElementById("choice"+ i);
			element.innerHTML = choices[i];
			guess("btn" + i, choices[i]);
		}
		showProgress();
	}

};

function guess(id, guess) {
	var button = document.getElementById(id);
	button.onclick = function() {
		quiz.guess(guess);
		populate();
	}
};

function showProgress(){
	var currentQuestionNumber = quiz.questionIndex + 1;
	var element = document.getElementById("progress");
	element.innerHTML = "Question " + currentQuestionNumber + " sur " + quiz.questions.length; 
}

function showScores() {
	var gameOverHtml = "<h1>Result</h1>";
	gameOverHtml += "<h2 id='score'> Votre score: " + quiz.score + "</h2>";
	var element = document.getElementById("quiz");
	element.innerHTML = gameOverHtml;
};

var questions = [
	new Question("Que signifie SGBDR ?", ["kouakou", "yao", "kouassi", "kouame"],"kouakou"),
	new Question("Comment se nomme SANA ?", ["Binôme", "abass", "kouassi", "kouame"],"abass"),
	new Question("Comment se nomme BAMBA ?", ["Berlin", "yao", "kouassi", "oscar"],"oscar"),
	new Question("Comment se nomme SORO ?", ["Le roso", "jean-paul", "kouassi", "kouame"],"jean-paul"),
	new Question("Comment se nomme PETER ?", ["Le Z", "yao", "zamble", "kouame"],"zamble")

];

var quiz = new Quiz(questions);
populate(); 