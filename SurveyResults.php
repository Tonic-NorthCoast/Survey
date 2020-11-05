<?php
#Database Connection

include ("Database.php");

			
?>




<html>
  <head>
	  <title>Lifestyle Survey System</title>

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
          <a class="navbar-brand" href="index.php"><i class="fa fa-home"></i><strong style="padding-left: 5px;font-size:30px;">Lifestyle Survey System</strong></a>
        </div>

        <!-- Collect the nav links, forms, and other content for toggling -->
        <div class="collapse navbar-collapse navbar-ex1-collapse">
          <ul class="nav navbar-nav side-nav">
            <li class="active"><a href="index.php"><i class="fa fa-home"></i> Home</a></li>
            <li><a href="TakeSurvey.php"><i class="fa fa-plus-circle"></i>Fill out the survey</a></li>
            <li><a href="SurveyResults.php"><i class="fa fa-search"></i> View survey results</a></li>
            
          </ul>

        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1><strong>The statistics summary of the survey taken</strong> <small></small></h1>
            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-dashboard"></i><a href="index.php"> Home</a></li>
              <li class="active"><i class="fa fa-edit"></i> Survey Results</li>
            </ol>
            <div class="alert alert-info alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               Below is the statistics results from the lifestyle Survey taken.
            </div>
          </div>
        </div><!-- /.row -->

		<div class="row">
          <div class="col-lg-12">
            <div class="panel panel-primary">
              <div class="panel-heading">
                <h3 class="panel-title"><strong> Survey Results</strong></h3>
              </div>
              <div class="panel-body">
              
              			<div class="row">
          		<div class="col-lg-12"> 

            <form name="Form1"  action ="back.php" method="POST" role="form">
            
             <div class="table-responsive">
			<table class="table table-bordered table-hover table-striped tablesorter">
            	<tr>
                    <th>Results Type</th>
                    <th>Results values</th>
                    
                  </tr>

			<?php 
			$reset="";
 	
		
			$qr=mysqli_query($con,"SELECT * FROM surveydetails ORDER BY id ASC");
	
			$SNO=0;
			while($Rows=mysqli_fetch_array($qr))
			{
			$SNO=$SNO+1;
      }

			?>
				  
                  <tr>
                    <th>Total number of surveys:</th>
                    <td><strong><?php echo $Record; ?></strong></td>
                  </tr>

                  <tr>
                  <th>Average age:</th>
                   <td><strong><?php echo round($AgeAverage ,1); ?></strong></td>
                 </tr>
                
                 <tr>
                   <th>Oldest person who participated in survey :</th>
                   <td><strong><?php echo $OlderAge; ?></strong></td>
                 </tr>
                 
                 <tr>  
                   <th>Youngest person who participated in survey :</th>
                   <td><strong><?php echo $youngAge; ?></strong></td>
                 </tr>

                 <tr>  
                   <th>Percentage of people who like Pizza :</th>
                   <td><strong><strong><?php echo round($percentage,1); ?></strong>%</strong></td>
                 </tr>

                 <tr>  
                   <th>Percentage of people who like Pasta :</th>
                   <td><strong><?php echo round($percentage1,1); ?></strong>%</strong></td>
                 </tr>

                 <tr>  
                   <th>Percentage of people who like Pap and Wors :</th>
                   <td><strong><?php echo round($percentage_2,1); ?></strong>%</strong></td>
                 </tr>

                 <tr>  
                   <th>Percentage of people who like Chicken stir fry :</th>
                   <td><strong><?php echo round($percentage_3,1); ?></strong>%</strong></td>
                 </tr>

                 <tr>  
                   <th>Percentage of people who like Beef stir fry :</th>
                   <td><strong><?php echo round($percentage_4,1); ?></strong>%</strong></td>
                 </tr>

                 <tr>  
                   <th>Percentage of people who like Other :</th>
                   <td><strong><?php echo round($percentage_5,1); ?></strong>%</strong></td>
                 </tr>

                 <tr>  
                   <th>Average of People who like to eat out :</th>
                   <td><strong><?php echo round($Total_Eat,1); ?></strong></td>
                 </tr>


                 <tr>  
                   <th>Average of People who like to watch Movies :</th>
                   <td><strong><?php echo round($Total_movie,2); ?></strong></td>
                 </tr>


                 <tr>  
                   <th>Average of People who like to watch TV :</th>
                   <td><strong><?php echo round($Total_TV,1); ?></strong></td>
                 </tr>

                 <tr>  
                   <th>Average of People who like to listen to the radio :</th>
                   <td><strong><?php echo round($Total_Radio,1); ?></strong></td>
                 </tr>
            
            

             </table>
            <button type="submit" style="width:150px; height:50px;" class="btn btn-success" name="ntnOK">OK</button>
        
            </div>
          </div>
        </div><!-- /.row -->
         
              </form>
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
