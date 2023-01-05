<html>
<title>Learning</title>
<body>
<h1>read a file</h1>
<?php 
  $myfile=fopen("file.txt","r") or die("UNABLE TO OPEN MY FILE");
  echo fread($myfile,filesize("file.txt"));
  fclose($myfile);
?><br><br>


<h1>read first line of string</h1>
<?php 
  $myfile=fopen("file.txt","r") or die("UNABLE TO OPEN MY FILE");
  echo fgets($myfile);
  fclose($myfile);
?><br><br>

<h1>read all string in a file</h1>
<?php 
  $myfile=fopen("file.txt","r") or die("UNABLE TO OPEN MY FILE");
  while(!(feof($myfile))){
	  echo fgets($myfile)."<br>";
  }
  fclose($myfile);
?><br><br>

<h1>read all characters in  file one by one</h1>
<?php 
  $myfile=fopen("file.txt","r") or die("UNABLE TO OPEN MY FILE");
  while(!(feof($myfile))){
	  echo fgetc($myfile)."<br>";
  }
  fclose($myfile);
?><br><br>
</body>
</html>