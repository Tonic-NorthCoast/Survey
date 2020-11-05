<?php
  include "Database.php";
  ?>

<html>
  <head>
	  <title>Lifestyle survey</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    
  </head>

  <body>

    <div id="wrapper">

      <!-- Sidebar -->
      <nav class="navbar navbar-inverse navbar-fixed-top" role="navigation">
        <!-- Brand and toggle get grouped for better mobile display -->
        <div class="navbar-header">
          <button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-ex1-collapse">
            <span class="sr-only">Toggle navigation</span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
            <span class="icon-bar"></span>
          </button>
          <a class="navbar-brand" href="index.php"><i class="fa fa-home"></i><strong style="padding-left: 5px;font-size:30px;">Lifestyle survey system</strong></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="TakeSurvey.php"><i class="fa fa-plus-circle"></i> Fill Out survey </a></li>
            <li><a href="SurveyResults.php"><i class="fa fa-search"></i> View survey results</a></li>
          </ul>

        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1><strong>Take the survey below </strong><small></small></h1>
            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-dashboard"></i><a href="index.php"> Home</a></li>
              <li class="active"><i class="fa fa-edit"></i> Fill out the survey</li>
            </ol>
            <div class="alert alert-info alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
              To complete the survey in the system, please populate all the fields and click on Submit.<br />
              Fields marked with * are all mandatory.
            </div>
          </div>
        </div><!-- /.row -->

		<div class="row">
          <div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><strong>Fill out the survey</strong></h3>
              </div>
              <div class="panel-body">
              
              			<div class="row">
          		<div class="col-lg-12"> 

            <form name="Form1" action="submitsurvey.php" method="POST" role="form">
            
         	  <div class="form-group">
                <label>First name: <font color="red">*</font></label>
                <input class="form-control" style="width:265px; height:40px;" placeholder="Enter First Name" name="txtFName" required=required>
              </div>
              
              <div class="form-group">
                <label>Last name: <font color="red">*</font></label>
                <input class="form-control" style="width:265px; height:40px;" placeholder="Enter Last Name" name="txtLName">
              </div>
              
               <div class="form-group">
                <label>Phone No: <font color="red">*</font></label>
                <input class="form-control" style="width:265px; height:40px;" placeholder="0710123457" maxlength = "10" name="txtContactNo" required=required>
              </div>
  
              <div class="form-group">
                <label>Age: <font color="red">*</font></label>
                <input class="form-control" style="width:265px; height:40px;" type="number" placeholder="Enter your age"  maxlength = "3" name="txtAge" required=required min="5" max="120">
              </div>

              <div class="form-group">
                <label>Gender: <font color="red">*</font></label>
                <select  class="form-control" style="width:265px; height:40px;" id="gender" name="txtGender" required=required>
                  <option value="">--select--</option>
                  <option value="male">Male</option>
                  <option value="female">Female</option>
                </select>
              </div>

              <div class="form-group">
                <label>Today's Date: <font color="red">*</font></label>
                <input  type	="date" style="width:265px; height:40px;" class="form-control"  name="txtDate">
              </div>
              <br />
               <div class="check-boxes" required>
              <h4><strong>What is your favourite food? (You can choose more than 1 answer below :)</strong></h4>

                <input type="checkbox" style="" id="food" name="food[]" value="Pizza">
                <label for="choice1"> Pizza</label><br>

                <input type="checkbox" id="food" name="food[]" value="Pasta">
                <label for="choice2"> Pasta</label><br>

                <input type="checkbox" id="food" name="food[]" value="papWors">
                <label for="choice3"> Pap and Wors</label><br>

                <input type="checkbox" id="food" name="food[]" value="ChickenStirFry">
                <label for="choice4"> Chicken stir fry</label><br>

                <input type="checkbox" id="food" name="food[]" value="BeefStirFry">
                <label for="choice5"> Beef Stir Fry</label><br>

                <input type="checkbox" id="food" name="food[]" value="Other">
                <label for="choice6"> Other</label><br><br><br>
                </div>
                
                <h4><strong>On a scale of 1 to 5 indicate whether you strongly agree to strongly disagree</strong></h4>
              <div class="table-responsive">
		          	<table class="table table-bordered table-hover table-striped tablesorter">
               	<tr style="">
                    <th style="width:215px;"></th>
                    <th>Strongly Agree (1)</th>
                    <th>Agree (2)</th>
                    <th>Neutral (3)</th>
                    <th>Disagree (4)</th>
                    <th>Strongly disagree (5)</th>
                  </tr>

                  <tr>
	                  <th>I like to eat Out<br/></th>
                    <td><input style="margin-bottom:32px " type="radio" id="sagree" name="eatOut" value="1"> </td>
                    <th><input style="margin-bottom:28px " type="radio" id="agree" name="eatOut" value="2"></th>
                    <th><input style="margin-bottom:30px " type="radio" id="neutral" name="eatOut" value="3"> </th>
                    <th><input style="margin-bottom:30px " type="radio" id="disagree" name="eatOut" value="4"><br/></th>
                    <th><input style="margin-bottom:30px " type="radio" id="sdisagree" name="eatOut" value="5"><br/></th>
                  </tr> 
                  <tr>
	                  <th>I like to watch Movies<br/></th>
                    <td><input style="margin-bottom:32px " type="radio" id="sagree" name="watchMovies" value="1"> </td>
                    <th><input style="margin-bottom:28px " type="radio" id="agree" name="watchMovies" value="2"></th>
                    <th><input style="margin-bottom:30px " type="radio" id="neutral" name="watchMovies" value="3"> </th>
                    <th><input style="margin-bottom:30px " type="radio" id="disagree" name="watchMovies" value="4"><br/></th>
                    <th><input style="margin-bottom:30px " type="radio" id="sdisagree" name="watchMovies" value="5"><br/></th>
                  </tr> 
                  <tr>
	                  <th>I like to watch TV<br/></th>
                    <td><input style="margin-bottom:32px " type="radio" id="sagree" name="watchTV" value="1"> </td>
                    <th><input style="margin-bottom:28px " type="radio" id="agree" name="watchTV" value="2"></th>
                    <th><input style="margin-bottom:30px " type="radio" id="neutral" name="watchTV" value="3"> </th>
                    <th><input style="margin-bottom:30px " type="radio" id="disagree" name="watchTV" value="4"><br/></th>
                    <th><input style="margin-bottom:30px " type="radio" id="sdisagree" name="watchTV" value="5"><br/></th>>
                  </tr> 
                  <tr>
	                  <th>I like to listen to the Radio<br/></th>
                    <td><input style="margin-bottom:32px " type="radio" id="sagree" name="listenRadio" value="1"> </td>
                    <th><input style="margin-bottom:28px " type="radio" id="agree" name="listenRadio" value="2"></th>
                    <th><input style="margin-bottom:30px " type="radio" id="neutral" name="listenRadio" value="3"> </th>
                    <th><input style="margin-bottom:30px " type="radio" id="disagree" name="listenRadio" value="4"><br/></th>
                    <th><input style="margin-bottom:30px " type="radio" id="sdisagree" name="listenRadio" value="5"><br/></th>
                  </tr> 
               </table>
              </div>
              <br/>


              <button type="submit"  onclick="myFunction()" style="width:255px; height:50px;" class="btn btn-success" name="bntSave">Submit Survey</button>
                         
              </form>
              </div>
              </div>
              
                
              </div>
            </div>
          </div>
        </div><!-- /.row -->


              
      </div><!-- /#page-wrapper -->

    </div><!-- /#wrapper -->

    <!-- JavaScript -->
    <script src="js/jquery-1.10.2.js"></script>
    <script src="js/bootstrap.js"></script>


    <!-- Page Specific Plugins -->

    <script src="js/morris/chart-data-morris.js"></script>
    <script src="js/tablesorter/jquery.tablesorter.js"></script>

    <script src="js/tablesorter/tables.js"></script>
    
  </body>
</html>
