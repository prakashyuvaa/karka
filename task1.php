
<?php
#p1.
$subject1="english3";
$subject2="precalculus";
$subject3="Music Theory";
$subject4="Biotechnology";
$subject5="Principles of Technology";
$subject6="Latin 2";
$subject7="AP US History";
$subject8="Business Computer Information Systems";

$teacher1="Ms.Lapan";
$teacher2="Mrs.Gideon";
$teacher3="Mr. Davis";
$teacher4="Ms. Palmer";
$teacher5="Ms. Garcia";
$teacher6="Mrs.Barnett";
$teacher7="Ms. Johnnessen"; 
$teacher8="Mr. James";

$subject1= str_pad($subject1,37, " ",STR_PAD_LEFT);
$teacher1= str_pad($teacher1,16, " ",STR_PAD_LEFT);

$subject2= str_pad($subject2,37, " ",STR_PAD_LEFT);
$teacher2= str_pad($teacher2,16, " ",STR_PAD_LEFT);

$subject3= str_pad($subject3,37, " ",STR_PAD_LEFT);
$teacher3= str_pad($teacher3,16, " ",STR_PAD_LEFT);

$subject4= str_pad($subject4,37, " ",STR_PAD_LEFT);
$teacher4= str_pad($teacher4,16, " ",STR_PAD_LEFT);

$subject5=str_pad($subject5,37, " ",STR_PAD_LEFT);
$teacher5= str_pad($teacher5,16, " ",STR_PAD_LEFT);

$subject6= str_pad($subject6,37, " ",STR_PAD_LEFT);
$teacher6= str_pad($teacher6,16, " ",STR_PAD_LEFT);

$subject7= str_pad($subject7,37, " ",STR_PAD_LEFT);
$teacher7= str_pad($teacher7,16, " ",STR_PAD_LEFT);

$subject8= str_pad($subject8,37, " ",STR_PAD_LEFT);
$teacher8= str_pad($teacher8,16, " ",STR_PAD_LEFT);

echo "+--------------------------------------------------------+","\n";
echo "|1|".$subject1."|".$teacher1."|\n";
echo "|2|".$subject2."|".$teacher2."|\n";
echo "|3|".$subject3."|".$teacher3."|\n";
echo "|4|".$subject4."|".$teacher4."|\n";
echo "|5|".$subject5."|".$teacher5."|\n";
echo "|6|".$subject6."|".$teacher6."|\n";
echo "|7|".$subject7."|".$teacher7."|\n";
echo "|8|".$subject8."|".$teacher8."|\n";
echo "+--------------------------------------------------------+","\n";



?>