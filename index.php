<?php
/*
pitagor (4 , 3);
rectArea (4, 5);
squareArea (5);
circleArea (5);
trapezoidArea (2,3,4);
pentagonArea(10);

vidAlga(10, 27500);
pelnas(5000, 10000, 2000);

function pitagor ($a,$b) {
	
	echo "Pitagor : $a, $b answer: " . sqrt($a**2+$b**2)."<br/>";
}
////////////////////////

function rectArea ($a , $b) {

	echo "Rectangular: $a x $b area: " . $a*$b."<br>";
}

//////////////////

function squareArea ($a) {
	
	echo "Area $a square : " . $a**2 . "<br>";
}
//////////////////

function circleArea ($a) {
	
	echo "Area $a circle is: " . pi()*$a**2 . "<br>";
}

//////////////////////

function trapezoidArea ($a, $b, $h) {
	
	echo "Area of trapezoid $h, $a, $b is: " . $h*(($a+$b)/2). "<br>";
}

///////////////
function pentagonArea ($a) {
	
	echo "Area of pentagon $a is: " . (1/4)*sqrt(5*(5+2*sqrt(5)))*$a**2 . "<br>";
}

/////////////
function pelnas ($sanaudos, $pajamos, $_algoms) {
	echo "Viso algoms: $_algoms;<br>Kitos sąnaudos: $sanaudos;<br>Pajamos: $pajamos;
		<br><b>Pelnas: " . ($pajamos-$sanaudos-$_algoms) . "</b><br>";
	}
	function vidAlga ($zmones, $_algoms){
		echo "Dirbo žmonių: $zmones;<br>Vidutinis atlyginimas: " . $_algoms / $zmones. "<br>";
}*/
///////////////


	calculatePrices (250000, 0.3);

function calculatePrices ($costs, $margin) {

	$FIRST_CLASS = 10;
	$BUSINESS_CLASS = 30;
	$ECONOMY_CLASS = 280;

	$PRICE_FIRST = 10000;
	$PRICE_BUSINESS = 4000;
	$PRICE_ECONOMY = 500;

	$FILL_FIRST = 1;
	$FILL_BUSINESS = 0.8;
	$FILL_ECONOMY = 0.68;

	$income_first = $FIRST_CLASS * $PRICE_FIRST * $FILL_FIRST;
	$income_business = $BUSINESS_CLASS * $PRICE_BUSINESS * $FILL_BUSINESS;
	$income_economy = $ECONOMY_CLASS * $PRICE_ECONOMY * $FILL_ECONOMY;

	$total_income = $income_first + $income_business + $income_economy;
	$target_income = $costs*(1+$margin);
	$profit_loss = $total_income - $target_income;

	$VISO_VIETU = $FIRST_CLASS+$BUSINESS_CLASS+$ECONOMY_CLASS;
	$uzimta_vietu = $FIRST_CLASS*$FILL_FIRST+$BUSINESS_CLASS*$FILL_BUSINESS+$ECONOMY_CLASS*$FILL_ECONOMY;
	$proc_uzimta = $uzimta_vietu*100/$VISO_VIETU;

	echo "Lėktuvo vietų skaičius: " . $VISO_VIETU . ", iš kurių užimta : " . round($uzimta_vietu) . 
	" (bendras užimtumas: " . round($proc_uzimta) . "%)<br>";


	echo "Pirmos klasės pajamos: " . $income_first . ", o užimtumas: " . $FILL_FIRST*100 . "%<br>";
	echo "Biznio klasės pajamos: " . $income_business . ", o užimtumas: " . $FILL_BUSINESS*100 . "%<br>";
	echo "Ekonominės klasės pajamos: " . $income_economy . ", o užimtumas: " . $FILL_ECONOMY*100 . "%<br>";
	echo "Gaunamos pajamos: " . $total_income . "<br>";
	echo "Siekiamos pajamos: ". $target_income . "<br>";
	echo "<b>Pelnas \ -Nuostoliai: " . $profit_loss . "</b><br>";
	echo "<hr>";
	
	
}
?>