<?php

	echo "this is test";
	echo "<BR>";
	echo '<BR>';
	echo "this is test";
	echo "this is test";
	$cc = [[1,2,3],[1]];
	foreach($cc as $key => $item)
	{
		$item['aa'] = 111;
	}
//	echo ROOT_PATH;
	var_dump($cc);
	echo "<br>";
	var_dump($cc);


?>