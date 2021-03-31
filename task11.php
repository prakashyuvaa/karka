<?php
	$earth= readline("please enter your current earth weight?");
	echo "i have information for the following plannets","\n";
	echo "1.venus    2.mars     3.jupiter","\n";
	echo "4.saturn   5.uranus   6.neptune","\n";
	$visit= readline("which planet are you visiting?")."\n";
	if($visit==1){
	$venus = $earth*0.78;
	echo "your weight would be ".$venus." pounds on the planet";
	}
	else if($visit==2){
	$mars = $earth*0.39;
	echo "your weight would be ".$mars." pounds on the planet";
	}
  	else if($visit==3){
	$jupiter = $earth*2.65;
	echo "your weight would be ".$jupiter." pounds on the planet";
	}
	else if($visit==4){
	$saturn = $earth*1.17;
	echo "your weight would be ".$saturn." pounds on the planet";
	}
	else if($visit==5){
	$uranus = $earth*1.05;
	echo "your weight would be ".$uranus." pounds on the planet";
	}
	else if($visit==6){
	$neptune =$earth*1.23;
	echo "your weight would be ".$neptune." pounds on the planet";
	}
	else{
	echo "sorry, this is invalid";
	
}

?>
