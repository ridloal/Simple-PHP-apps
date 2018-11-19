<?php 
session_start(); 
?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>MITLA Menu</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>

    <?php require_once("header.php"); ?>

	
    <div class="container" style="margin-top: 100px; margin-bottom: 100px;">
      <div class="row">
        <div class="col-md-6 col-md-offset-3">
          <div class="login-panel panel panel-default">
            <div class="panel-heading">Search Film</div>
            <div class="panel-body">
              <hr>
              <a href="login.php" class="btn btn-primary form-control">Login</a>
              <hr>            
              <a href="user_settings.php" class="btn btn-primary form-control">User Settings</a>            
              <hr>
              <a href="search_film.php" class="btn btn-primary form-control">Search Film</a>
              <hr>            
            </div>
          </div>
        </div><!-- /.col-->
      </div><!-- /.row -->
    </div>


	  <?php require_once("footer.php"); ?>

    <!-- jQuery (necessary for Bootstrap's JavaScript plugins) -->
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.12.4/jquery.min.js"></script>
    <!-- Include all compiled plugins (below), or include individual files as needed -->
    <script src="js/bootstrap.min.js"></script>
    <script src="js/validator.js"></script>    
  </body>
</html>