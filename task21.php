<?php
 	$one=readline("your height in m?\n");
 	$two=readline("your mass in kg?\n");
	$BMI=$two/($one*$one);
	echo "your BMI is".$BMI;
 	if ($BMI < 18.5){
 	echo "BMI category: underweight";
	}
	if ($BMI >= 18.5 && BMI <= 24.9) {
 	echo "BMI category: normal weight";
	}
 	if ($BMI >= 25.0 && BMI <= 29.9) {
 	echo "BMI category: overweight";
 	}
 	if ($BMI >= 30.0) {
 	echo "BMI category: obese";
 	}    
   
?>