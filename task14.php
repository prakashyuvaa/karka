<?php
	echo "WELCOME TO MITCHELL'S TINY ADVENTURE!\n\n";
	echo "You are in a creepy house! Would you like to go upstairs or into the kitchen ?\n";
	$select=readline('');
	if($select=='kitchen')
	{
	echo "\n There is a long countertop with dirty dishes everywhere. off to one side there is, as you'd except, a refrigerator. You may open the refrigerator or look in a cabinet.\n";
	$first=readline('');		
	if($first=='refrigerator')
	{
	echo "\nInside the refrigerator you see food and stuff. It looks pretty nasty.\n";
	echo "Would you like to eat some of the food?(yes / no)\n";
	$second=readline('');
	if($second=='yes'){
	echo "\n Okay have your Food!\n";
	}
	else{
	echo "\n You die of starvation...  eventually.\n";
	}	
	}
	else {
	echo "\n Inside the Cabinet that have Books and News papers.\n";
	}
	}
	else {
	echo "\n Upstairs rooms are so dirty you go to the kitchen.";
	}
?>