<html>
<head>
<title>original student list</title>
</head>
<body>
<?php
$names=array(
"s1"=>"messi",
"s2"=>"antonela",
"s3"=>"thiago",
"s4"=>"ciro"
);
echo"<center>";
echo"<h2>Original Student List</h2>";
echo"<pre>";
print_r($names);
echo"</pre>";
asort($names);
echo"<h2>Ascending order</h2><br>";
echo"<pre>";
print_r($names);
echo"</pre>";
arsort($names);
echo"<h2>descending order</h2><br>";
echo"<pre>";
print_r($names);
echo"</pre>";
echo"</center>";
?>

