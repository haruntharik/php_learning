<html>
<title>Learning</title>
<body>
<?php 
$a=array("one","two","three");
echo $a[2]."<br>";

for($i=0;$i<=2;$i++){
	echo $a[$i]."<br>";
}
echo "<br><br><br>";
$b=array("pen"=>10,"pencil"=>6,"scale"=>3);
echo $b["pencil"];
foreach($b as $x=>$value){
	echo "key:".$x."value:".$value."<br>";
}
?>
</body>
</html>