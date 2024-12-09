<?php
	
	$a = NULL;
	var_dump($a);
	
	$d = date("D");
	if ($d=="Fri"){
	echo "have a nice week end";
	}
	elseif ($d == "Sun"){
		echo "have a nice sunday";
	}
	elseif ($d=="Mon"){
		echo "have a nice Monday";
	}
	elseif ($d=="Tue"){
		echo "have a nice Tuesday";
	}
	elseif ($d=="Wed"){
		echo "have a nice Wednesday";
	}
	elseif ($d=="Thu"){
		echo "have a nice Thursday";
	}
	elseif ($d=="Fri"){
		echo "have a nice Friday";
	}
	else{
		echo "have a nice day";
	}
	echo"break";
?> 

<?php
	
$today = date("D");
switch($today){
 case "Mon":
 echo "Today is Monday. Clean your house.";
 break;
 
	case "Tue":
	echo "Today is Tuesday. Buy some food.";
	break;
	
	case "Wed":
	echo "Today is Wednesday. Visit a doctor.";
	break;
	
	case "Thu":
	echo "Today is Thursday. Repair your car.";
	break; 
	
	case "Fri":
	echo "Today is Friday. Party tonight.";
	break;
	
	case "Sat":
	echo "Today is Saturday. Its movie time.";
	break;
	
	case "Sun":
	echo "Today is Sunday. Do some rest.";
	break;
	
	default:
	echo "No information available for that day.";
	break;
}
?>








?>