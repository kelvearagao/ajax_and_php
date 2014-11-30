<?php
	$entries = array(
		'EAVESDROP' => array(
			'part' => 'v.i.',
			'definition' => 'Secretly to overhear a catalogue of the
			crimes and vices of another or yourself.',
			'quote' => array(
				'A lady with one of her ears applied',
				'To an open keyhole heard, inside,',
				'Two female gossips in converse free &mdash;',
				'The subject engaging them was she.',
				'"I think," said one, "and my husband thinks',
				'That she\'s a prying, inquisitive minx!"',
				'As soon as no more of it she could hear',
				'The lady, indignant, removed her ear.',
				'"I will not stay," she said, with a pout,',
				'"To hear my character lied about!"',
		),
		'author' => 'Gopete Sherany',
		),
		'EDIBLE' => array(
			'part' => 'adj.',
			'definition' => 'Good to eat, and wholesome to digest, as
			a worm to a toad, a toad to a snake, a snake to a pig,
			a pig to a man, and a man to a worm.',
		),
		// and so on
	);

	// ###########################################################################

	if (isset($entries[strtoupper($_REQUEST['term'])])) {
		$term = strtoupper($_REQUEST['term']);
		$entry = $entries[$term];
		echo build_entry($term, $entry);
	} else {
		echo '<div>Sorry, your term was not found.</div>';
	}
	
	function build_entry($term, $entry) {
		$html = '<div class="entry">';
		$html .= '<h3 class="term">';
		$html .= $term;
		$html .= '</h3>';
		$html .= '<div class="part">';
		$html .= $entry['part'];
		$html .= '</div>';
		$html .= '<div class="definition">';
		$html .= $entry['definition'];
		
		if (isset($entry['quote'])) {
			foreach ($entry['quote'] as $line) {
				$html .= '<div class="quote-line">'. $line .'</div>';
			}
			if (isset($entry['author'])) {
				$html .= '<div class="quote-author">'.
				$entry['author'] .'</div>';
			}
		}
		
		$html .= '</div>';
		$html .= '</div>';
		
		return $html;
	}
?>