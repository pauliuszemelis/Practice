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

	$target_fill = 72.5;

	$income_first = $FIRST_CLASS * $PRICE_FIRST * $FILL_FIRST;
	$income_business = $BUSINESS_CLASS * $PRICE_BUSINESS * $FILL_BUSINESS;
	$income_economy = $ECONOMY_CLASS * $PRICE_ECONOMY * $FILL_ECONOMY;

	$total_income = $income_first + $income_business + $income_economy;
	$target_income = $costs*(1+$margin);
	$profit_loss = $total_income - $target_income;
	$profit_loss_proc = round((-1*($target_income *100 / $total_income)+100), 2);

	$TOTAL_SEATS = $FIRST_CLASS+$BUSINESS_CLASS+$ECONOMY_CLASS;
	$seats_taken = $FIRST_CLASS*$FILL_FIRST+$BUSINESS_CLASS*$FILL_BUSINESS+$ECONOMY_CLASS*$FILL_ECONOMY;
	$proc_taken = $seats_taken*100/$TOTAL_SEATS;

	echo "Lėktuvo vietų skaičius: " . $TOTAL_SEATS . ", iš kurių užimta : " . round($seats_taken) . 
	" (bendras užimtumas: " . round($proc_taken, 2) . "%)<br>";


	echo "Pirmos klasės pajamos: " . $income_first . ", o užimtumas: " . $FILL_FIRST*100 . "%<br>";
	echo "Biznio klasės pajamos: " . $income_business . ", o užimtumas: " . $FILL_BUSINESS*100 . "%<br>";
	echo "Ekonominės klasės pajamos: " . $income_economy . ", o užimtumas: " . $FILL_ECONOMY*100 . "%<br>";
	echo "Gaunamos pajamos: " . $total_income . "<br>";
	echo "Siekiamos pajamos: ". $target_income . "<br>";
	echo "<b>Pelnas (-nuostoliai): " . round($profit_loss, 2) . "</b> (" . round($profit_loss_proc, 2) . "%)<br>";
	

	echo "<hr>";
	echo "<br><b><u>Siūlomas kainų koreagavimas: </u></b><br><br>";

	$price_first_after = ceil($PRICE_FIRST * (1+abs($profit_loss_proc) / 100));
	$price_business_after = ceil($PRICE_BUSINESS * (1+abs($profit_loss_proc) / 100));
	$price_economy_after = ceil($PRICE_ECONOMY * (1+abs($profit_loss_proc) / 100));

	echo "Pirmos klasės kaina: <i>" . $PRICE_FIRST . "</i> + " . abs($profit_loss_proc). "% = <b>" . $price_first_after . "</b><br>";
	echo "Biznio klasės kaina: <i>" . $PRICE_BUSINESS . "</i> + " . abs($profit_loss_proc). "% = <b>" . $price_business_after . "</b><br>";
	echo "Ekonominės klasės kaina: <i>" . $PRICE_ECONOMY . "</i> + " . abs($profit_loss_proc). "% = <b>" . $price_economy_after . "</b><br>";

	$income_first_after = $FIRST_CLASS * $price_first_after * $FILL_FIRST;
	$income_business_after = $BUSINESS_CLASS * $price_business_after * $FILL_BUSINESS;
	$income_economy_after = $ECONOMY_CLASS * $price_economy_after * $FILL_ECONOMY;

	$total_income_after = $income_first_after + $income_business_after + $income_economy_after;
	$target_income = $costs*(1+$margin);
	$profit_loss_after = $total_income_after - $target_income;
	$profit_loss_proc_after = round((-1*($target_income *100 / $total_income_after)+100), 2);

	$TOTAL_SEATS = $FIRST_CLASS+$BUSINESS_CLASS+$ECONOMY_CLASS;
	$seats_taken = $FIRST_CLASS*$FILL_FIRST+$BUSINESS_CLASS*$FILL_BUSINESS+$ECONOMY_CLASS*$FILL_ECONOMY;
	$proc_taken = $seats_taken*100/$TOTAL_SEATS;

	echo "Lėktuvo vietų skaičius: " . $TOTAL_SEATS . ", iš kurių užimta : " . round($seats_taken) . 
	" (bendras užimtumas: " . round($proc_taken, 2) . "%)<br>";


	echo "Pirmos klasės pajamos: " . $income_first_after . ", o užimtumas: " . $FILL_FIRST*100 . "%<br>";
	echo "Biznio klasės pajamos: " . $income_business_after . ", o užimtumas: " . $FILL_BUSINESS*100 . "%<br>";
	echo "Ekonominės klasės pajamos: " . $income_economy_after . ", o užimtumas: " . $FILL_ECONOMY*100 . "%<br>";
	echo "Gaunamos pajamos: " . $total_income_after . "<br>";
	echo "Siekiamos pajamos: ". $target_income . "<br>";
	echo "<b>Pelnas (-nuostoliai): " . round($profit_loss_after, 2) . "</b> (" . round($profit_loss_proc_after, 2) . "%)<br>";



	echo "<hr>";
	echo "<br><b><u>Optimalus kainų koreagavimas: </u></b><br><br>";

	$average_fill = round((($FILL_FIRST+$FILL_BUSINESS+$FILL_ECONOMY)/3*100), 2);
	
	echo "Vidutinis užimtumas pagal klasę: " . $average_fill . "%)<br>";

	$extra_surcharge_first_proc = ($FILL_FIRST*100) - $target_fill;
	$extra_surcharge_business_proc = ($FILL_BUSINESS*100) - $target_fill;
	$extra_surcharge_economy_proc = ($FILL_ECONOMY*100) - $target_fill;

	if($extra_surcharge_first_proc>0) {
		$final_price_first = ceil($PRICE_FIRST + ($PRICE_FIRST*($extra_surcharge_first_proc/100)));		
	}  
		else {
			$final_price_first = $PRICE_FIRST;
		}

	if($extra_surcharge_business_proc>0) {
	$final_price_business = ceil($PRICE_BUSINESS + ($PRICE_BUSINESS*($extra_surcharge_business_proc/100)));
		}
		else {
			$final_price_business = $PRICE_BUSINESS;
		}

	if($extra_surcharge_economy_proc>0) {
		$final_price_economy = ceil($PRICE_ECONOMY + ($PRICE_ECONOMY*($extra_surcharge_economy_proc/100)));
	}
		else {
			$final_price_economy = $PRICE_ECONOMY;
		}

	echo "Pirmos klasės kaina: <i>" . $PRICE_FIRST . "</i> + " . $extra_surcharge_first_proc . "% = <b>" . $final_price_first . "</b><br>";
	echo "Biznio klasės kaina: <i>" . $PRICE_BUSINESS . "</i> + " . $extra_surcharge_business_proc . "% = <b>" . $final_price_business . "</b><br>";
	echo "Ekonominės klasės kaina: <i>" . $PRICE_ECONOMY . "</i> + " . $extra_surcharge_economy_proc . "% = <b>" . $final_price_economy . "</b><br>";


	$income_first = $FIRST_CLASS * $final_price_first * $FILL_FIRST;
	$income_business = $BUSINESS_CLASS * $final_price_business * $FILL_BUSINESS;
	$income_economy = $ECONOMY_CLASS * $final_price_economy * $FILL_ECONOMY;

	$total_income = $income_first + $income_business + $income_economy;
	$target_income = $costs*(1+$margin);
	$profit_loss = $total_income - $target_income;
	$profit_loss_proc = round((-1*($target_income *100 / $total_income)+100), 2);

	$TOTAL_SEATS = $FIRST_CLASS+$BUSINESS_CLASS+$ECONOMY_CLASS;
	$seats_taken = $FIRST_CLASS*$FILL_FIRST+$BUSINESS_CLASS*$FILL_BUSINESS+$ECONOMY_CLASS*$FILL_ECONOMY;
	$proc_taken = $seats_taken*100/$TOTAL_SEATS;

	echo "Lėktuvo vietų skaičius: " . $TOTAL_SEATS . ", iš kurių užimta : " . round($seats_taken) . 
	" (bendras užimtumas: " . round($proc_taken, 2) . "%)<br>";


	echo "Pirmos klasės pajamos: " . $income_first . ", o užimtumas: " . $FILL_FIRST*100 . "%<br>";
	echo "Biznio klasės pajamos: " . $income_business . ", o užimtumas: " . $FILL_BUSINESS*100 . "%<br>";
	echo "Ekonominės klasės pajamos: " . $income_economy . ", o užimtumas: " . $FILL_ECONOMY*100 . "%<br>";
	echo "Gaunamos pajamos: " . $total_income . "<br>";
	echo "Siekiamos pajamos: ". $target_income . "<br>";
	echo "<b>Pelnas (-nuostoliai): " . round($profit_loss, 2) . "</b> (" . round($profit_loss_proc, 2) . "%)<br>";
	
	
	
}

?>