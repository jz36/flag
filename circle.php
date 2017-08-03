<html><head><title>Тестовое</title>
<style>
	p {
	    letter-spacing: 30px;
	}
	.circle{
		color: red;
	}
div.nocircle {
    width: 10px;
    height: 10px;
    background: blue;
}
div.circle {
    width: 10px;
    height: 10px;
    background: red;
}
.row div{
	display: inline-block;
}
</style>
</head>
<body><?php 
function isFill($x, $y, $r, $current_y, $current_x){
	$result = False;
	if (pow($x - $current_x, 2) + pow($y - $current_y, 2) <= pow($r, 2) - 1) $result = True;
	return $result;
}
function makeCircle($x, $y, $r){
	for ($i = 0; $i < 101; $i++){
		echo '<div class="row">';
		for ($j = 0; $j < 101; $j++){
			if (isFill($x, $y, $r, $i, $j)){
				echo '<div class="circle"></div>';
			} else {
				echo '<div class="nocircle"></div>';
			}
		}
		echo "</div>";
	}
}

makeCircle(50, 50, 20);
?></body></html>
