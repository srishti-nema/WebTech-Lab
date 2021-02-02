<?php
$a = array(array(1,2,3),array(4,5,6),array(7,8,9));
$b = array(array(7,8,9),array(4,5,6),array(1,2,3));
$m = count($a);
$n = count($a[2]);
$p = count($b);
$q = count($b[2]);
echo "The first matrix is:"."<br/>";
for($row = 0; $row<$m; $row++){
	for($col = 0; $col<$n; $col++){
		echo "".$a[$row][$col]." ";
	}
	echo "<br/>";
}
echo "The second matrix is:"."<br/>";
for($row = 0; $row<$p; $row++){
	for($col = 0; $col<$q; $col++){
		echo "".$b[$row][$col]." ";
	}
	echo "<br/>";
}
echo "The transpose of first matrix is:"."<br/>";
for($row = 0; $row<$m; $row++){
	for($col = 0; $col<$n; $col++){
		echo "".$a[$col][$row]." ";
	}
	echo "<br/>";
}
if(($m===$p) and ($n===$q)){
echo "The sum of two matrices is:"."<br/>";	
for($row = 0; $row<3; $row++){
	for($col = 0; $col<3; $col++){
		echo "".$a[$row][$col]+$b[$row][$col]." ";
	}
	echo "<br/>";
}
}
if($n===$p){
$product = array();
for($row = 0; $row<$m ; $row++){
	for($col = 0; $col<$q; $col++){
		$product[$row][$col] = 0;
		for($k = 0; $k<$n; $k++){
			$product[$row][$col] += $a[$row][$k] * $b[$k][$col]; 
		}
	}
}
echo "The product of two matrices is:"."<br/>";
for($row = 0; $row<$m; $row++){
	for($col = 0; $col<$q; $col++){
		echo "".$product[$row][$col]." ";
	}
	echo "<br/>";
}
}
?>
