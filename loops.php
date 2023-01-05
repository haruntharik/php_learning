<html>
<title>Loops in php</title>
<body>
<h1>while</h1>
<?php 
   $a=1;
   while($a<=5){
	   echo $a."<br>";
	   $a++;
   }
   ?><br><br>
   
   <h1>do while</h1>
<?php 
   $a=1;
   do{
	   echo $a."<br>";
	   $a++;
   }while($a<=5);
   ?><br><br>
   
   <h1>for</h1>
<?php 
   $a=1;
   for($a=1;$a<=5;$a++){
	   echo $a."<br>";
   }
   ?><br><br>
   
   <h1>for each</h1>
<?php 
    $a=array(1,2,3,4,5);
	foreach($a as $v){
		echo $v."<br>";
	}
   ?><br><br>
</body>
</html>