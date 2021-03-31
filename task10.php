<?php
	echo "Hey, What's your name? (Sorry, I keep forgetting.)";
	$name=readline('');
	echo "Ok ".$name.","."how old are you?";
	$age=(int)readline('');
	if($age<16) {
	echo "You can't Drive,".$name.".";
	}
	elseif($age<=17) {
	echo "You can Drive but can't Vote,".$name.".";
	}
	elseif($age<=24) {
	echo "You can Vote but not rent a Car,".$name.".";
	}
	else {
	echo "You can do Pretty much anything,".$name.".";
	}
?>