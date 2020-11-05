<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>
<meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
<title>Lifestyle survey</title>
</head>
<?php
$ServerName="localhost";

$UserName="root";

$Password="";

$DatabaseName="lifestylesurvey_db";

$con=new mysqli($ServerName,$UserName,$Password,$DatabaseName) or die ("Connection Error");

$Count=mysqli_query($con,"SELECT * FROM surveydetails"); 
$Record=0;
 while ($Rows=mysqli_fetch_array($Count))
{
  $Record=$Record+1;
}

$food_type=mysqli_query($con,"SELECT foodType FROM surveydetails"); 

$pizza=0;
$Pasta=0;
$Pap_Wors=0;
$Chicken_SF=0;
$Beef_SF=0;
$Other=0;

 while ($rows=mysqli_fetch_array($food_type))
{
  $type = explode(",",$rows['foodType']);

  if(in_array("Pizza",$type)){

	$pizza=$pizza+1;
	$percentage = ($pizza / $Record) * 100;
	
  }
  if(in_array("Pasta",$type)){
	$Pasta=$Pasta+1;
	$percentage1 = ($Pasta / $Record) * 100;
	
  }
  if(in_array("papWors",$type)){
	$Pap_Wors=$Pap_Wors+1;
	$percentage_2 = ($Pap_Wors / $Record) * 100;
	
  }
  if(in_array("ChickenStirFry",$type)){
	$Chicken_SF=$Chicken_SF+1;
	$percentage_3 = ($Chicken_SF / $Record) * 100;
	
  }
  if(in_array("BeefStirFry",$type)){
	$Beef_SF=$Beef_SF+1;
	$percentage_4 = ($Beef_SF / $Record) * 100;
	
  }
  if(in_array("Other",$type)){
	$Other=$Other+1;
	$percentage_5 = ($Other / $Record) * 100;
	
  }
}


 $OlderAge =0;
 $maxAge = mysqli_query($con,"SELECT MAX(age) as max_Age FROM surveydetails");
 while($row = mysqli_fetch_assoc($maxAge)){
	$OlderAge = $row['max_Age'];
 }

 $youngAge =0;
 $minAge = mysqli_query($con,"SELECT MIN(age) as min_Age FROM surveydetails");
 while($row = mysqli_fetch_assoc($minAge)){
	$youngAge = $row['min_Age'];
 }

 $AgeAverage =0;
 $average = mysqli_query($con,"SELECT AVG(age) as average FROM surveydetails");
 while($row = mysqli_fetch_assoc($average)){
	$AgeAverage = $row['average'];
	
 }
#  AVERAGE FOR EATING OUT  : where Strongly_Agree=1,Agree=2 & Neutral=3;
 $EatOut_StronglyAgree=0;
 $EatOut_Agree=0;
 $EatOut_Neutral=0;
 $Total_Eat = 0;
 $Eat_Out1 = mysqli_query($con,"SELECT AVG(eatOut) as strong_agree FROM surveydetails WHERE eatOut='1'");
 $Eat_Out2 = mysqli_query($con,"SELECT AVG(eatOut) as agree FROM surveydetails WHERE eatOut='2'");
 $Eat_Out3 = mysqli_query($con,"SELECT AVG(eatOut) as neutral FROM surveydetails WHERE eatOut='3'");
 while($row = mysqli_fetch_assoc($Eat_Out1)){
		$EatOut_StronglyAgree = $row['strong_agree'];
		}
while($row = mysqli_fetch_assoc($Eat_Out2)){
		$EatOut_Agree = $row['agree'];
	 }
while($row = mysqli_fetch_assoc($Eat_Out3)){
		$EatOut_Neutral = $row['neutral'];
	 }
$Total_Eat = $EatOut_StronglyAgree + $EatOut_Agree + $EatOut_Neutral;

 #  AVERAGE FOR WATCHING TV : where Strongly_Agree=1,Agree=2 & Neutral=3;
 $movie_StronglyAgree=0;
 $movie_Agree=0;
 $movie_Neutral=0;
 $Total_movie = 0;
 $watch_movies1 = mysqli_query($con,"SELECT AVG(movies) as strong_agree1 FROM surveydetails WHERE movies='1'");
 $watch_movies2 = mysqli_query($con,"SELECT AVG(movies) as agree1 FROM surveydetails WHERE movies='2'");
 $watch_movies3 = mysqli_query($con,"SELECT AVG(movies) as neutral1 FROM surveydetails WHERE movies='3'");
 while($row = mysqli_fetch_assoc($watch_movies1)){
	$movie_StronglyAgree= $row['strong_agree1'];
 }
 while($row = mysqli_fetch_assoc($watch_movies2)){
	$movie_Agree= $row['agree1'];
 }
 while($row = mysqli_fetch_assoc($watch_movies3)){
	$movie_Neutral= $row['neutral1'];
 }
 $Total_movie = $movie_StronglyAgree + $movie_Agree + $movie_Neutral;

 #  AVERAGE FOR WATCHING TV  : where Strongly_Agree=1,Agree=2 & Neutral=3;
 $TV_StronglyAgree=0;
 $TV_Agree=0;
 $TV_Neutral=0;
 $Total_TV = 0;
 $watch_TV1 = mysqli_query($con,"SELECT AVG(TV) as strong_agree2 FROM surveydetails WHERE TV='1'");
 $watch_TV2 = mysqli_query($con,"SELECT AVG(TV) as agree2 FROM surveydetails WHERE TV='2'");
 $watch_TV3 = mysqli_query($con,"SELECT AVG(TV) as neutral2 FROM surveydetails WHERE TV='3'");
 while($row = mysqli_fetch_assoc($watch_TV1)){
	$TV_StronglyAgree= $row['strong_agree2'];
 }
 while($row = mysqli_fetch_assoc($watch_TV2)){
	$TV_Agree= $row['agree2'];
 }
 while($row = mysqli_fetch_assoc($watch_TV3)){
	$TV_Neutral= $row['neutral2'];
 }
 $Total_TV = $TV_StronglyAgree + $TV_Agree + $TV_Neutral;

#  AVERAGE FOR LISTENING TO RADIO : where Strongly_Agree=1,Agree=2 & Neutral=3;
 $Radio_StronglyAgree=0;
 $Radio_Agree=0;
 $Radio_Neutral=0;
 $Total_Radio = 0;
 $Listen_Radio1 = mysqli_query($con,"SELECT AVG(radio) as strong_agree3 FROM surveydetails WHERE radio='1'");
 $Listen_Radio2 = mysqli_query($con,"SELECT AVG(radio) as agree3 FROM surveydetails WHERE radio='2'");
 $Listen_Radio3 = mysqli_query($con,"SELECT AVG(radio) as neutral3 FROM surveydetails WHERE radio='3'");
 while($row = mysqli_fetch_assoc($Listen_Radio1)){
	$Radio_StronglyAgree= $row['strong_agree3'];
 }

 while($row = mysqli_fetch_assoc($Listen_Radio2)){
	$Radio_Agree= $row['agree3'];
 }

 while($row = mysqli_fetch_assoc($Listen_Radio3)){
	$Radio_Neutral= $row['neutral3'];
 }
 $Total_Radio = $Radio_StronglyAgree+ $Radio_Agree + $Radio_Neutral;
?>
<body>
</body>
</html>