<?php
	if($_SERVER["REQUEST_METHOD"] == "POST") {
		if(isset($_POST["la"]) && isset($_POST["ln"]) && isset($_POST["idPartie"])) {
			include './bdd.php';
			$idSerie = $_POST["idSerie"];
			$rep1 = $_POST["rep1"];
			$rep2 = $_POST["rep2"];
			$rep3 = $_POST["rep3"];
			$bonneRep = $_POST["bonneRep"];
            $idSerie = "select max(id) from serieQuestion;"
            $bdd = connectDB("localhost", "examen_bdd", "root", "");

			$addQuestionPrep = "insert into question (reponse1, reponse2, reponse3, bonneRep,idSerie) value (:rep1,:rep2,:rep3,:bonneRep, :id)";
			$addQuestion = $bdd->prepare($addQuestionPrep);
			$addQuestion->bindParam(':rep1', $rep1, PDO::PARAM_STR);
			$addQuestion->bindParam(':rep2', $rep2, PDO::PARAM_STR);
			$addQuestion->bindParam(':rep3', $rep3, PDO::PARAM_STR);
            $addQuestion->bindParam(':bonneRep', $bonneRep, PDO::PARAM_STR);
            $addQuestion->bindParam(':id', $idSerie, PDO::PARAM_INT);
			$addQuestion->execute();

            
		}
	}
?>