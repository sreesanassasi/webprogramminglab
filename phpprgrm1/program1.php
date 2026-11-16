<html>
<head>
<title>Indian cricket players</title>
<style>
table{
width:50%;
border-collapse:collapse;
margin:20px auto;
}
th,td{
padding:10px;
text-align:center;
border:1px solid black;
}
</style>
</head>
<body>
<h2 style="text-align:center;">List of indian cricket players</h2>
<?php
$player=array( "Virat kohli","Rohit sharma","Sachin tendulkar","MS dhoni","Kl Rahul","hardik pandya");
echo"<table>";
echo"<tr><th>S.no</th><th>player</th></tr>";
foreach($player as $s=>$player){
echo"<tr><td>".($s+1)."</td><td>".$player."</td></tr>";
}
echo"</table>";
?>
</body>
</html>
