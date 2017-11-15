<?php

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
		<br><b>Pelnas: " . ($pajamos-$sanaudos-$_algoms);
	}
	function vidAlga ($zmones, $_algoms){
		echo "Dirbo žmonių: $zmones;<br>Vidutinis atlyginimas: " . $_algoms / $zmones. "<br>";
}

	calculatePrices (250000, 0.3);

function calculatePrices ($costs, $margin) {

	var FIRST_CLASS = 10;
	var BUSINESS_CLASS = 30;
	var ECONOMY_CLASS = 280;

	var PRICE_FIRST = 10000;
	var PRICE_BUSINESS = 4000;
	var PRICE_ECONOMY = 500;

	var FILL_FIRST = 1;
	var FILL_BUSINESS = 0.8;
	var FILL_ECONOMY = 0.68;




}
?>