<html>
	<head>
		<meta charset="utf-8"/>
		<title>Quiz sur les panneaux routiers</title>
		<script type="text/javascript" src="./script/jquery-3.6.3.js"></script>
		<link rel="stylesheet" href="./style/css_examen.css">
		<link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
		<script>
			function onEnvoyerQuestion(idSerie)
			{
				var idSerie = document.getElementById("idSerie").value;
				var rep1 = document.getElementById("rep1").value;
				var rep2 = document.getElementById("rep2").value;
				var rep3 = document.getElementById("rep3").value;
				var bonneRep = document.getElementById("bonneRep").value;
				$.ajax({
					url: './PROJET/PHP/ajouterQuestion.php',
					type: 'POST',
					data: {
						idSerie: idSerie,
						rep1: rep1,
						rep2 : rep2,
						rep3 : rep3,
						bonneRep : bonneRep
					},
					success :function(response){
						console.log(response);
					}
				})						
			}		
	</script>
	</head>

	<body>
		<div id="Menu2">
			<div id="Menu2BackGround">        
				<div id="div_form">
					<h2>Série</h2>  
					<label for = "rep1">Si vous souhaitez créer une nouvelle série:</label>
					<br/><label for = "rep1">Nombre de questions:</label><input id="nbQuestion" type = "text" name="villeSocieteInp"/> 
					<br/><input type="button" value="Créer série" onclick="document.getElementById('nbQuestion').disabled=true"/>
					<h2>Question</h2>      
					<label for = "rep1">Numéro de la série:</label><input id="idSerie" type = "text" name="villeSocieteInp"/> 
					<br/><label for = "rep1">Réponse 1 :</label><input id="rep1" type = "text" name="villeSocieteInp"/> 
					<br/><label for = "rep2">Réponse 2 :</label><input id = "rep2" type = "text" name="rueSocieteInp" /> 
					<br/><label for = "rep3">Réponse 3 :</label><input id = "rep3"  name="numeroPorteInp" type = "text" maxlength="5" min = "1"/> <span class = "error">
					<br/><label for = "bonneRep">Bonne réponse (Code) : </label><input type = "text"  id = "bonneRep" name="bonneRep"/>      
					<br/><input type="button" value="Ajouter question" />      	
				</div>
			</div>        
		</div>
		<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
	</body>
</html>