<?php

	    echo '<pre>';
	    echo 'Resposta<br>';
	    //print_r($_POST['dataArray']);
	    print_r(array_diff(array(1,2,3,4) , $_POST['dataArray']));
	    echo '</pre>';

?>