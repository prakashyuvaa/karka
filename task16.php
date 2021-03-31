<?php
	$m="male";
	$f= "female";
	$gender=readline("What is your gender?(m/f) ");
	$name1=readline("first name:");
	$name2=readline("last name:");
	$age=readline("How old are you?");
	$status=readline("Are you married? (y/n)");
	$y= "yes";
	$n= "not";

	if ($gender=$m) {
	echo ("How old are you?");
	if ($age < 20) {
	echo ("Then I shall call you"+$name1+" "+$name2+".");
	} else if ($age >= 20) {
	echo ("Then I shall call you Mr."+$name1);
	}
	} else if ($gender=$f) {
	echo ("How old are you?");
	if ($age >= 20) {
	echo ("Are you married?(y/n)");
	if ($status=$y) {
	echo ("Then I shall call you Mrs."+$name1);
	} else if ($status=$n) {
	echo ("Then I shall call you Ms."+$name1);
	}
	} else if ($age < 20) {
	echo ("Then I shall call you"+$name1+ " " +$name2);
	}
	}

?>	