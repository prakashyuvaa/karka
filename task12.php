<?php
	$quiz=readline('Are you ready for a quiz(yes/no)? ');
	if($quiz=="yes")
	     {
		echo "Okay, here it comes!\n";
		echo "Q1) what is the capital of Alaska?\n";
		echo "        1)Melbourne\n        2)Anchorage\n        3)Juneau\n";
		$ans=(int)readline('');
		if($ans==3)
		{
		echo "That's right!";
		$count=0;
		$count=$count+1;
		}
		else
		{
		echo "Sorry, you entered the wrong answer!\n";
		}
		echo "Q2) Can you store the value Cat in a variable of type int?\n";		
		echo "        1)yes\n        2)no\n";
		$ans_2=(int)readline('');
		if($ans_2==2)
		{
		echo "That's right!!\n";
		$count=0;
		$count=$count+1;
		}
		else
		{
		echo "Sorry, Cat is a string. ints can only store numbers\n";	
		}
		echo "Q3) What is the result of 9+6/3?\n";
		echo "        1)5\n        2)11\n        3)15/3\n";
		$ans_3=(int)readline('');
		if($ans_3==2)
		{
		echo "That's right!\n";
		$count=$count+1;		
		}
		else
		{
		echo "Sorry, you entered the wrong answer!\n";
		}
		if($count==0)
		{
		echo "Overall, you got 0 out of 3 correct.";
		}
		else
		{
		echo "Overall, you got ".$count." out of 3 correct.";
		}
	     }
	        else
	        {
		echo "you will try next time!";
	        }

?>