<?php

$no1 = $_POST['no1'] ;
$no2 = $_POST['no2'] ;
$op = $_POST['operand'];


switch ($op) {
	case '+':
		$res = (float)$no1 + (float)$no2;
		echo $res;
		break;
	case '-':
		$res = (float)$no1 - (float)$no2;
        echo $res;
		break;
	case '*':
		$res = (float)$no1 * (float)$no2;
        echo $res;
		break;
	case '/':
		$res = (float)$no1 / (float)$no2;
        echo $res;
		break;

}


/*else if ($op == '-') {
	$res = $no1-$no2;

	echo $res;
}
else if ($op == '*') {
	$res = $no1*$no2;

	echo $res;
}
else if ($op == '/') {
	$res = $no1/$no2;

	echo $res;
}*/


?>