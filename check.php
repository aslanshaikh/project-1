<?php
$str = "   Apple is healthy.  ";
$delimiter = ' ';
$words = explode($delimiter, $str);
 
foreach ($words as $word) {
    echo $word;
    echo "<br>";
}

if(isset($_POST['n'])) {
	$na = $_POST['n'];
	$loo = explode(',', $na);
	array_pop($loo);
	for ($i=0; $i < count($loo); $i++) { 
		# code...
		echo $loo[$i].'  ';
	}
	echo count($loo);
	// echo $na;
}
?>
<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<title>Document</title>
</head>
<body>
	<form action="" method="post">
		<input type="text" name="n" id="i" value="vv,ww,">
		<input type="submit" value="sss">
	</form>
	<script>
		console.log(document.getElementById('i').value)
	</script>
</body>
</html>