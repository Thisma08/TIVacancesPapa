<?php session_start(); ?>
<html>
<head>
	<meta charset="utf-8"/>
	<title>Quiz sur les panneaux routiers</title>
	<script type="text/javascript" src="./script/jquery-3.6.3.js"></script>	
	<link rel="stylesheet" href="./style/css_examen.css">
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">
    <script type="text/javascript">
        $(document).on('click', '#launcherSerie', function() {
            $.ajax({
				url: './php-requete/creerSerie.php',
				type: 'POST',
				dataType:'json',    
				success:function(response){
					var idSerie = response
				}
    	    });		
        });
    </script>
</head>

<body>	
	<div id="Menu2">
		<div id="Menu2BackGround">				
			<div id="Menu2Lancer">
				<input type="button" value="Créer une série" id="launcherSerie" onclick="document.location.href='./creerQuestion.php'"/>
			</div>

			<div id="Menu2Lancer">
				<input type="button" value="Consulter questions" id="launcher" onclick="document.location.href='./avantAffichage.html'"/>
			</div>

			<div id="toFill"></div>
		</div>
	</div>
	<script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
</body>
</html>