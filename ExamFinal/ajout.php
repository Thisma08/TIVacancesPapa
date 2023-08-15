<html>
    <?php require 'Index.html';?>
    <body>
        <div class="container">
			<form id="ajoutSerie" method="post">
				<h1 class="mb-3">Création d'une série de questions</h1>
				<div class="mb-3">
					<label for="nom" class="form-label">Nom de la série :</label>
					<input type="text" class="form-control" id="nom" name="nom">
				</div>
				<button type="submit" class="btn btn-primary">Ajouter série</button>
			</form>
		</div>
		<script>
		$(document).ready(function() {
            $.ajax({
                url : "PHP/choixSeries.php",
                type : "post",
                dataType : "json",
                success : function(series) {
                    for(serie of series) {
                        $("select[name='serie']").append("<option value=" + serie.id_serie_questions + ">" 
                            + serie.nom_serie_questions + "</option>");
                    }
                }
            });
			
            $("#ajoutSerie").submit(function() {
                var data = $(this).serialize();
                $.ajax({
                    url : "PHP/ajoutSerie.php",
                    type : "post",
                    data : data
                });
            });
			
		});
		</script>
        <div class="container">
			<form id="ajoutQuestion" method="post">
				<h2 class="mb-3">Création des questions</h2>
				<div class="mb-3">
					<label for="serie" class="form-label">Série :</label>
					<select name="serie" id="serie" class="form-select">
					</select>
				</div>
				<div class="mb-3">
					<label for="question" class="form-label">Question :</label>
					<input type="text" class="form-control" id="question" name="question" value="A quel code correspond le panneau ?" readonly> 
				</div>			
				<div class="mb-3">
					<label for="choix1" class="form-label">Choix 1 :</label>
					<select name="choix1" id="choix1" class="form-select choix">
					</select>
				</div>
				
				<div class="mb-3">
					<label for="choix2" class="form-label">Choix 2 :</label>
					<select name="choix2" id="choix2" class="form-select choix">
					</select>
				</div>
				
				<div class="mb-3">
					<label for="choix3" class="form-label">Choix 3 :</label>
					<select name="choix3" id="choix3" class="form-select choix">
					</select>
				</div>
				
				<div class="mb-3">
					<label for="reponse" class="form-label">Réponse :</label>
					<select name="reponse" id="reponse" class="form-select">
					</select>
				</div>
				<button type="submit" class="btn btn-primary">Ajouter question</button>
			</form>
		</div>
    </body>
    <script>
        $(document).ready(function() {
            $.get("code.txt", function(data) {
                var lines = data.split("\n");
                $.each(lines, function(n, elem) {
                    $(".choix").append('<option>' + elem + '</option>');
                });
            });

            $(".choix").change(function() {
                $("select[name='reponse']").empty();
                $("select[name='reponse']").append("<option>" + $("select[name='choix1']").val() + "</option>");
                $("select[name='reponse']").append("<option>" + $("select[name='choix2']").val() + "</option>");
                $("select[name='reponse']").append("<option>" + $("select[name='choix3']").val() + "</option>");
            });
						
            $("#ajoutQuestion").submit(function() {
                var data = $(this).serialize();
                $.ajax({
                    url : "PHP/ajoutQuestion.php",
                    type : "post",
                    data : data
                });
            });
        });
    </script>
</html>