<?php
  include "Database.php";
  ?> 
<html>
  <head>
	  <title>Lifestyle survey system</title>

    <!-- Bootstrap core CSS -->
    <link href="css/bootstrap.css" rel="stylesheet">

    <!-- Add custom CSS here -->
    <link href="css/sb-admin.css" rel="stylesheet">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.min.css">
    <link rel="stylesheet" href="font-awesome/css/font-awesome.css">

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
        <div class="collapse navbar-collapse navbar-ex1-collapse" style="padding-bottom: 5px;">
          <ul class="nav navbar-nav side-nav"><br />
            <li class="active"><a href="home.php"><i class="fa fa-home"></i><strong style="padding-left: 5px;">Home</strong></a></li>
            <li><a href="TakeSurvey.php"><i class="fa fa-plus-circle"></i><strong style=""> Fill out survey </strong></a></li>
            <li><a href="SurveyResults.php"><i class="fa fa-search"></i><strong> View survey results</strong></a></li>
              </ul>
            </li>
          </ul>

        </div><!-- /.navbar-collapse -->
      </nav>

      <div id="page-wrapper">

        <div class="row">
          <div class="col-lg-12">
            <h1><strong>Dashboard</strong> <small style="color:slateblue;"></small></h1>
            <ol class="breadcrumb">
              <li class="active"><i class="fa fa-dashboard"></i> Dashboard</li>
            </ol>
            <div class="alert alert-success alert-dismissable">
              <button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
               Welcome to Lifestyle survey.This a Dashboard that allows you to explore the survey system.
            </div>
          </div>
        </div><!-- /.row -->

        <div class="row">
          <div class="col-lg-3">
            <div class="panel panel-info">
              <div class="panel-heading">
                <div class="row">
                  <div class="col-xs-10">
                    <i class="fa fa-user fa-5x"></i>
                  </div>
                  <div class="col-xs-9 text-right">
                    <p style="padding-right: 10px" class="announcement-heading"><?php echo $Record; ?></p>
                    <p style="padding-right:10px;" class="announcement-text" style=""><strong>People Taken Survey</strong></p>
                  </div>
                </div>
              </div>
              <a href="TakeSurvey.php">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                    <b style="color:hsla(9, 100%, 64%, 0.6);">Fill Out Survey</b>
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a><br />
              <a href="SurveyResults.php">
                <div class="panel-footer announcement-bottom">
                  <div class="row">
                    <div class="col-xs-6">
                    <strong style="color:rgb(109, 156, 141);">View survey results</strong>
                    </div>
                    <div class="col-xs-6 text-right">
                      <i class="fa fa-arrow-circle-right"></i>
                    </div>
                  </div>
                </div>
              </a><br />

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
