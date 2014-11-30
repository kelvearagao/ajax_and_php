
<script src="//ajax.googleapis.com/ajax/libs/jquery/2.1.1/jquery.min.js"></script>

<script>
	$(document).ready(function() {

		var $loading = $('<div id="loading">Loading...</div>')
			.insertBefore('#dictionary');

		$(document).ajaxStart(function() {
			$loading.show();
		}).ajaxStop(function() {
			$loading.hide();
		});

		$('#letter-a a').click(function(event) {
			event.preventDefault();
			$('#dictionary').hide().load('a.html', function() {
				$(this).fadeIn();
			});
		});

		$('#letter-b a').click(function(event) {
			event.preventDefault();
			$.getJSON('b.json', function(data) {
				var html = '';
				$.each(data, function(entryIndex, entry) {
					html += '<div class="entry">';
					html += '<h3 class="term">' + entry.term + '</h3>';
					html += '<div class="part">' + entry.part + '</div>';
					html += '<div class="definition">';
					html += entry.definition;
					if (entry.quote) {
						html += '<div class="quote">';
						$.each(entry.quote, function(lineIndex, line) {
							html += '<div class="quote-line">' + line + '</div>';
						});

						if (entry.author) {
							html += '<div class="quote-author">' + entry.author + '</div>';
						}

						html += '</div>';
					}
					html += '</div>';
					html += '</div>';
				});
				$('#dictionary').html(html);
			});
		});

		$('#letter-c a').click(function(event) {
			event.preventDefault();
			$.getScript('c.js');
		});

		$('#letter-d a').click(function(event) {
			event.preventDefault();
			$.get('d.xml', function(data) {
				$('#dictionary').empty();
				$(data).find('entry').each(function() {
					var $entry = $(this);
					var html = '<div class="entry">';
					html += '<h3 class="term">' + $entry.attr('term');
					html += '</h3>';
					html += '<div class="part">' + $entry.attr('part');
					html += '</div>';
					html += '<div class="definition">';
					html += $entry.find('definition').text();
					var $quote = $entry.find('quote');
					if ($quote.length) {
						html += '<div class="quote">';
						$quote.find('line').each(function() {
						html += '<div class="quote-line">';
						html += $(this).text() + '</div>';
					});

					if ($quote.attr('author')) {
						html += '<div class="quote-author">';
						html += $quote.attr('author') + '</div>';
					}
						html += '</div>';
					}
					
					html += '</div>';
					html += '</div>';
					$('#dictionary').append($(html));
				});

			});
		});

		$('#letter-e a').click(function(event) {
			event.preventDefault();
			var requestData = {term: $(this).text()};			
			
			//$.post('e.php', requestData, function(data) {
			//	$('#dictionary').html(data);
			//});

			$('#dictionary').load('e.php', requestData);

		});

		$('#letter-f form').submit(function(event) {
			event.preventDefault();
			var formValues = $(this).serialize();
			$.get('f.php', formValues,
			function(data) {
				$('#dictionary').html(data);
			});
		});


	});
</script>

<div id="dictionary">

</div>

<div class="letters">
	<div class="letter" id="letter-a">
		<h3><a href="entries-a.html">A</a></h3>
	</div>
	<div class="letter" id="letter-b">
		<h3><a href="entries-a.html">B</a></h3>
	</div>
	<div class="letter" id="letter-c">
		<h3><a href="entries-a.html">C</a></h3>
	</div>
	<div class="letter" id="letter-d">
		<h3><a href="entries-a.html">D</a></h3>
	</div>
	<div class="letter" id="letter-e">
		<h3>E</h3>
		<ul>
			<li><a href="e.php?term=Eavesdrop">Eavesdrop</a></li>
			<li><a href="e.php?term=Edible">Edible</a></li>
			<li><a href="e.php?term=Education">Education</a></li>
			<li><a href="e.php?term=Eloquence">Eloquence</a></li>
			<li><a href="e.php?term=Elysium">Elysium</a></li>
			<li><a href="e.php?term=Emancipation">Emancipation</a></li>
			<li><a href="e.php?term=Emotion">Emotion</a></li>
			<li><a href="e.php?term=Envelope">Envelope</a></li>
			<li><a href="e.php?term=Envy">Envy</a></li>
			<li><a href="e.php?term=Epitaph">Epitaph</a></li>
			<li><a href="e.php?term=Evangelist">Evangelist</a></li>
		</ul>
	</div>
	<div class="letter" id="letter-f">
		<h3>F</h3>
		<form action="f.php">
			<input type="text" name="term" value="" id="term" />
			<input type="submit" name="search" value="search" id="search" />
		</form>
	</div>
</div>