<html>
    <head>
        <meta charset="utf-8"/>
        <title>Quiz sur les panneaux routiers</title>	
        <script type="text/javascript" src="./script/jquery-3.6.3.js"></script>	
        <link rel="stylesheet" href="./style/css_examen.css">
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-EVSTQN3/azprG1Anm3QDgpJLIm9Nao0Yz1ztcQTwFspd3yD65VohhpuuCOmLASjC" crossorigin="anonymous">

        <script type="text/javascript">
            $(document).on('click', '#launcherSerie', function() {
                var nombre = $("#nbQuestion").val();
                $.ajax({
                    url: './php-requete/creerSerieRequete.php',
                    type: 'POST',
                    data: {
                        nbQuestion : nombre
                    },	      
                    success:function(response){
                        $idSerie = response;     
                    }
                });           
            });
        </script>
    </head>

    <body>	
        <div id="Menu2">
            <div id="Menu2BackGround">
                <div id="Menu2Bienvenue">Nombre de quetions</div>

                <div id="Menu2Lancer">
                    <br/><label for = "rep1">Nombre de questions :</label><input id="nbQuestion" type = "text"/> 
                    <input type="button" value="Continuer" id="launcherSerie" onclick="document.location.href='./creerSerieRequete?idSerie=<?php echo $idSerie; ?>'"/>
                </div>                  
            </div>
        </div>
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.2/dist/js/bootstrap.bundle.min.js" integrity="sha384-MrcW6ZMFYlzcLA8Nl+NtUVF0sA7MsXsP1UyJoMp4YLEuNSfAP+JcXn/tWtIaxVXM" crossorigin="anonymous"></script>
    </body>
</html>