<?php
	$questions = null;
	if($_SERVER["REQUEST_METHOD"] == "GET") {
		include './bdd.php';
		$bdd = connectDB("localhost", "examen_bdd", "root", "");
		$requeteQuestionPrep = "select * from question;";
		$requeteQuestion = $bdd->prepare($requeteQuestionPrep);
		$requeteQuestion->execute();		
		$questions = $requeteQuestion->fetchAll(PDO::FETCH_ASSOC);
		$jsonQuestions = json_encode($questions);
		header('Content-Type: application/json');
		echo $jsonQuestions;
	}
?>