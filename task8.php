
<?php
	echo "hey, what is your name?";
	$name=readline('');
	echo "\n";
	echo "ok, ".$name.", how old are you? ";
	$age=(int)readline('');
	echo "\n";
	if($age<16){
		echo"you can't drive,".$name."you can't vote,".$name."\n";
	}
	else if($age<18){
		echo"you can't vote,".$name."you cannot rent a car,".$name."\n";
	}
	else if($age<25){
 		echo"you cannot rent a car,".$one."\n";
	}
	else{
		echo"you can do anything that's legal,".$one;
	}
?>

