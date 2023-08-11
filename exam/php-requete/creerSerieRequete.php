 <?php
 	if($_SERVER["REQUEST_METHOD"] == "POST") {
        if(isset($_POST["pseudo"]) && isset($_POST["idPartie"])) {
            include './bdd.php';
            $bdd = connectDB("localhost", "examen_bdd", "root", "");
            $nb = $_POST["pseudo"];
            $insertionSerieReq = "insert into serieQuestion (nbQuestion) value (:nbQuestion);";
            $insertionSerie = $bdd->prepare($insertionSerieReq);
            $insertionSerie->bindParam(':nbQuestion', $nb, PDO::PARAM_INT);
            $insertionSerie->execute();

            $idSerieReqPrep = "select max(id) from serieQuestion;";
			$idSerieReq = $bdd->prepare($idSerieReqPrep);
			$idSerieReq->execute();
            $idSerie = $idSerieReq->fetchAll(PDO::FETCH_ASSOC);
            echo $idSerie;
        }
    }

?>
			