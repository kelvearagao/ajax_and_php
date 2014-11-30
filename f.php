<?php
	$output = array();
	foreach($entries as $term => $entry)
	{
		if (strpos($term, strtoupper($_REQUEST['term'])) !== FALSE)
		{
			$output[] = build_entry($term, $entry);
		}
	}

	if (!empty($output)) {
		echo implode("\n", $output);
	} else {
		echo '<div class="entry">Sorry, no entries found for ';
		echo '<strong>' . $_REQUEST['term'] . '</strong>.';
		echo '</div>';
	}