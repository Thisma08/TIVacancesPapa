<html>
<head>
	<meta charset='utf-8'/>
	<title>Table admin</title>	
	<link href="./style/css_examen.css" rel="stylesheet"/>
	<script type="text/javascript" src="./SCRIPT/jquery-3.6.3.js"></script>
	<script type="text/javascript" src="./SCRIPT/jquery-ui-1.13.2/jquery-ui.js"></script>
	<link rel="stylesheet" media="screen" type="text/css" href="./PROJET/SCRIPT/jquery-ui-1.13.2/jquery-ui.css" />
	<script type="text/javascript">
		$(document).ready(function () {
			$.ajax({
				url: './PROJET/PHP/afficheQuestion.php',
				method: 'GET',
				dataType: 'json',
				success: function(data) {
			  		var tableHtml = '<table id = "afficheTab">';
			  		tableHtml += '<thead>' + 
					'<tr><th>IDQuestion</th>' +
					'<th>rep1</th>' + 
					'<th>rep2</th>' +
					'<th>rep3</th>' +
					'<th>bonneRep</th></tr>'
					'</thead>';
			  		tableHtml += '<tbody>';
					$.each(data, function(index, question) {
						tableHtml += '<tr>';
						tableHtml += '<td>' + question.idQuestion + '</td>';
						tableHtml += '<td>' + question.reponse1 + '</td>';
						tableHtml += '<td>' + question.reponse2 + '</td>';
						tableHtml += '<td>' + question.reponse3 + '</td>';
						tableHtml += '<td>' + question.bonneRep + '</td>';						
						tableHtml += '</tr>';
					});
					tableHtml += '</tbody>';
					tableHtml += '</table>';
			  		$('#container').html(tableHtml);
				},
				error: function() {
					console.log('Une erreur s\'est produite lors de la récupération des données.');
				}
		  	});		  
		});
	</script>
</head>

<body>
	<div id="container">
	</div>
</body>
</html>

