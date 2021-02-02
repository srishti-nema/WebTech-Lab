<!DOCTYPE HTML>
<html>
<head>
<style>
table ,th ,td{
border : black solid 1px;
border-collapse: collapse;
background-color : lightblue;
}
table{
margin :auto;
width :33%
}
</style>
</head>
<body>
<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "studentdb";
$conn = mysqli_connect($servername ,$username,$password ,$dbname) or die(mysqli_connect_error());

$sql = "SELECT * FROM STUDENT";
$result  = mysqli_query($conn,$sql);
if(mysqli_num_rowS($result)>0){

$a = [];

echo "<table>";
echo "<caption><h3>record before sorting : </h3></caption>";
echo "<tr><th>USN</th><th>NAME</th><th>ADDRESS</th></tr><br/>";
for($i = 0; $i < mysqli_num_rowS($result); $i++){
$row = mysqli_fetch_assoc($result);
echo "<tr><td>".$row["USN"]."</td><td>".$row["Name"]."</td><td>".$row["Address"]."</td></tr><br/>";
$a[$i] = $row["USN"];
} 
echo "</table>";

for($i = 0; $i < mysqli_num_rowS($result)-1; $i++){
for($j = $i+1; $j < mysqli_num_rowS($result); $j++){
	if($a[$j] < $a[$i])
	{
		$temp = $a[$i];
		$a[$i] = $a[$j];
		$a[$j]= $temp;
	}
}
}


$b=[];
$c=[];

$sql = "SELECT * FROM STUDENT";
$result  = mysqli_query($conn,$sql);
while($row = mysqli_fetch_assoc($result))
{
for($i = 0; $i < mysqli_num_rowS($result); $i++){
if($row["USN"] ==$a[$i]){
$b[$i] = $row["Name"];
$c[$i] = $row["Address"];
}
}
}


echo "<table>";
echo "<caption><h3>record after sorting : </h3></caption>";
echo "<tr><th>USN</th><th>NAME</th><th>ADDRESS</th></tr>";
for($i = 0; $i < mysqli_num_rowS($result); $i++){

echo "<tr><td>".$a[$i]."</td><td>".$b[$i]."</td><td>".$c[$i]."</td></tr>";
} 
echo "</table>";
}
else 
echo "there are no rows in student table";


?>
</body>
</html>