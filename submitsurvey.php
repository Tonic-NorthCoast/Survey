<?php
  include "Database.php";

  if(isset($_POST['bntSave'])){

	$FirstName = $_POST['txtFName'];
	$LastName  = $_POST['txtLName'];
	$phoneNo = $_POST['txtContactNo'];
	$Age = $_POST['txtAge'];
	$Gender = $_POST['txtGender'];
	$Date= $_POST['txtDate'];
	$Food= $_POST['food'];
	$FD=implode(',',$Food);
	$EatOut= $_POST['eatOut'];
	$Movies= $_POST['watchMovies'];
	$TV= $_POST['watchTV'];
	$Radio= $_POST['listenRadio'];

	$Query = "INSERT INTO surveydetails (firstname, lastname, phoneNo, age, gender, date, foodType, eatOut, movies, TV, radio) 
	VALUES('$FirstName','$LastName','$phoneNo','$Age','$Gender','$Date','$FD','$EatOut','$Movies','$TV','$Radio')";
	mysqli_query($con,$Query);

	echo '<script>  alert("Survey submitted Successfully!");   </script>';
	echo "<meta http-equiv=\"refresh\" content=\"0;URL=index.php\">";
  }
	?>