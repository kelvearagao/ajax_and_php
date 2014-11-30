
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
	$(document).ready(function() {

		$('#consulta').click(function(event) {
			event.preventDefault();

			$.getJSON('banco.php', function(data) {
					
					var html = '';

					
					$.each(data, function(index, entry) {
						html += entry.id + ' ';
						html += entry.email + ' ';
						html += entry.nome + '<br/>';
					});

					$('#resultado').html(html);
			});
		});

	});
</script>

<h1>Resultado</h1>
<a href="#" id="consulta">Realizar consulta</a>

<div id="resultado">

</div>