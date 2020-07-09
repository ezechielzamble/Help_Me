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
	new Question("Dans quelles balise HTML plaçons nous le code Js ?", ["balise Js", "balise javaScript", "la balise Script", "la balise rel"],"la balise Script"),
	new Question("Comment faire appelle à une fonction nommée 'sum' ?", ["sum ()", "call function sum()", "cal sum", "aucune reponse"],"sum ()"),
	new Question("Comment creer une fonction en Js  ?", ["function f()", "fonction = f()", "function : f()", "aucune reponse"],"function f()"),
	new Question("Quel fichier peut-on utiliser pour modifier la config PHP ?", ["isset.ini", "config.ini", "php.ini", "httpd_php.config"],"php.ini"),
	new Question("Dans quelles balise HTML plaçons nous le code Js ?", ["balise Js", "balise javaScript", "la balise Script", "la balise rel"],"la balise Script"),

];

var quiz = new Quiz(questions);
populate(); 