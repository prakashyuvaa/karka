<?php
	echo "I'm thinking of a number between 1-100. You have 7 guesses.\n";
	$i=1;
	while ($i<=7)
	{
	echo "Guess # ".$i." : ";
	$num=readline('');
	if($num==84)
	{
	echo "\nYou guessed it!  What are the odds?!?!!\n";	
	}
	elseif($num<84)
	{
	echo "\nSorry, you are too low.\n";
	}
	else
	{
	echo "\nSorry, that guess is too high.\n";
	}
	if($i==7)
	{
	echo "\n\n!!!Sorry, you didn't guess it in 7 tries. you lose.!!!";
	}
	}
?>