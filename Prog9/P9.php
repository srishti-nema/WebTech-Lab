 <?php
$states = "Mississippi Alabama Texas Massachusetts Kansas";
$states1 = explode(' ', $states);
$statesArray = [];
echo "Print the array: <br>";
foreach ($states1 as $i => $value)
	print("STATES[$i] = $value<br>");
foreach ($states1 as $state){
	if(preg_match('/xas$/', ($state))){
		$statesArray[0] = $state;
	}
}
foreach ($states1 as $state){
	if(preg_match('/^K.*s$/i', ($state))){
		$statesArray[1] = $state;
	}
}
foreach ($states1 as $state){
	if(preg_match('/^M.*s$/', ($state))){
		$statesArray[2] = $state;
	}
}
foreach ($states1 as $state){
	if(preg_match('/a$/', ($state))){
		$statesArray[3] = $state;
	}
}
echo "<br>Print Resultant array: <br>";
foreach ($statesArray as $state => $value){
	print("STATES[$state] => $value<br>");
}
?>