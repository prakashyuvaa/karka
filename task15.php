<?php
	echo ("Think of something and I'll try to guess it!\n");
	$in="inside";
	$out="outside";
	$both="both";
	$yes="yes";
	$no="no";
	$alive="alive";
	$qus1=readline("Question 1) Does it stay inside or outside or both?\n");
	$qus2=readline("Question 2) Is it a living thing?");

	if($qus1==$in) && ($qus2==$yes) {
	echo ("You must be thinking of a houseplant?!");
	}
	if($qus1==$in) && ($qus2==$no){
	echo ("you must be thinking of shower curtain?!");
	}
	if($qus1==$out) && ($qus2==$yes) {
	echo ("Then what else could you be thinking of a bison?!");
	}
	if($qus1==$out) && ($qus2==$no) {
	echo ("Then what else could you be thinking of a billboard?!");
	}
	if($qus1==$both) && ($qus2==$yes) {
	echo ("Then you must be thinking of a dog?!");
	}
	if($qus1==$both) && ($qus2==$no) {
	echo ("Then what else could you be thinking a cell phone?\n");
	}


?>