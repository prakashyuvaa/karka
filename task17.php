<?php


	echo ("WELCOME TO THE BANK OF MITCHELL.");
	$entry=readline("ENTER YOUR PIN: ");

	while ($entry != 12345 )
	{
	echo ("\nINCORRECT PIN. TRY AGAIN.");
	echo ("ENTER YOUR PIN: ");
	}
	echo("\nPIN ACCEPTED. YOU NOW HAVE ACCESS TO YOUR ACCOUNT.");

?>
