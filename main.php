<?php
$array = [  
	'01' => 'January',
	'02' => 'Febuary',
	'03' => 'March',
	'04' => 'April',
	'05' => 'May',
	'06' => 'June',
	'07' => 'July',
	'08' => 'August',
	'09' => 'September',
	'10' => 'October',
	'11' => 'November',
	'12' => ' Decemeber'
	];

?>
<html>
<head>
<title>Months of the Year</title>
</head>
<body>
<table border="1" cellspacing="5">
<?php foreach($array as $x=>$y): ?>
<tr>
 <td><?php echo ($x); ?></td>
 <td><?php echo ($y); ?></td>
</tr>
<?php endforeach; ?>
</table>
</body>
</html>


</html>
