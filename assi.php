<?php
// Reusable function to check whether
// the number is Even or Odd
function check($number){
	if($number == 0)
		return 1;
	else if($number == 1)
		return 0;
	else if($number<0)
		return check(-$number);
	else
		return check($number-2);		
}

$number = 9;
if(check($number))
	echo "$number is an Even";
else
	echo "$number is an Odd";
?>
