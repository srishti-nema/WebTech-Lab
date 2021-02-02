<?php
/*print '<h3> REFRESH PAGE </h3>';
$name = "counter.txt";
$file = fopen($name, "r");
$hits = fscanf($file, "%d");
fclose($file);
$hits[0]++;
$file = fopen($name, "w");
fprintf($file, "%d", $hits[0]);
fclose($file);
print 'Total number of visitors:'.$hits[0];
*/
	echo "<h1> REFRESH PAGE </h1>" ;
	$file = 'count.txt' ;
	$c = file_get_contents($file) ;
	file_put_contents($file, $c+1);
	echo "The number of users visited : ".$c ;
?>
