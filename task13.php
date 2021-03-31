<?php
	echo "TWO QUESTIONS!\n";
	echo "Think of an object, and I'll try to guess it.\n";
	$a="animal";
	$v="vegetable";
	$m="mineral";

	$qus1=readline("Question 1) Is it animal, vegetable, or mineral?\n");
	$yes="yes";
	$no="no";
	if ($qus1==$a){
	$qus2=readline("Question 2) Is it bigger than a breadbox?\n");
	if ($qus2==$yes){
	echo "My guess you are thinking a moose\n";
	echo "I would ask you if I'm right, but I don't actually care.";
	} 
	else if ($qus2==$no){
	echo "My guess is you are thinking a squirrel\n";
	echo "I would ask you if I'm right, but I don't actually care";
	}
	else{
	echo "Not an answer!";
	}
	} 
	else if ($qus1==$v) {
	$qus2=readline("Question 2) Is it bigger than a breadbox?\n");
	if ($qus2==$yes){ 
	echo "My guess is you are thinking a watermelon\n";
	echo "I would ask you if I'm right, but I don't actually care";
	}
	else if ($qus2==$no){
	echo "My guess is that you are thinking of a carrot\n";
	echo "I would ask you if I'm right, but I don't actually care";
	}
	else{
	echo "Not an answer!";
	}
	} else if ($qus1==$m){
	$qus2=readline("Question 2) Is it bigger than a breadbox?");
	if ($qus2==$yes) {
	echo "My guess is that you are thinking of a Camaro\n";
	echo "I would ask you if I'm right, but I don't actually care";
	}
	else if($qus2==$no){
	echo "My guess is that you are thinking of a paper clip\n";
	echo "I would ask you if I'm right, but I don't actually care";
	}
	else {
	echo "Not an answer!";
	}
	} 

?>