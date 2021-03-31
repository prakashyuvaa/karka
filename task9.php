
<?php
        echo "Weekday 1: Sunday\n";
	echo "Weekday 2: Monday\n";
	echo "Weekday 3: Tuesday\n";
	echo "Weekday 4: Wednesday\n";
	echo "Weekday 5: Thursday\n";
	echo "Weekday 6: Friday\n";
	echo "Weekday 7: Saturday\n";
	echo "Weekday 0: Saturday\n\n";
	echo "Weekday 43: error\n";
	echo "Weekday 17: error\n";
	echo "Weekday -1: error\n\n";
	
	$day=readline("enter the week day?\n");
	if($day==1){
	echo"today is sunday";
	}
	if($day==2){
	echo"today is monday";
	}
	if($day==3){
	echo"today is tuesday";
	}
	if($day==4){
	echo"today is wednessday";
	}
	if($day==5){
	echo"today is thursday";
	}
	if($day==6){
	echo"today is friday";
	}
	if($day=7){
	echo"today is saturday";
	}
	if($day==8){
	echo"today is saturday";
	}
	if($day>9){
	echo"error";
	}
	if ($day<0){
	echo"error";
	}
?>
