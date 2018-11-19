<?php session_start(); ?>

<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>MITLA Login</title>

    <!-- Bootstrap -->
    <link href="css/bootstrap.min.css" rel="stylesheet">

  </head>
  <body>

  	<?php 
  	if (isset($_SESSION['id'])) {
  		$id = $_SESSION['id']; 
  		$password = $_SESSION['password']; 
  	}else{
  		$id = ""; 
  		$password = "";
  	}
  	?>	


  	<div id="myModal" class="modal fade" role="dialog">
        <div class="modal-dialog">

            <!-- Modal content-->
            <div class="modal-content">
                <div class="modal-header">
                    <button type="button" class="close" data-dismiss="modal">&times;</button>
                    <h4 class="modal-title" align="center" style="background-color: black; color: white;">Login Message</h4>
                </div>
                <div class="modal-body">
                	<?php if ($_SESSION['status'] == "success"): ?>
                    	<p align="center">Login Success</p>
                    <?php else: ?>
                    	<p align="center">Invalid login ID / Password</p>
                	<?php endif ?>
                </div>
                <div class="modal-footer">
                    <center><button type="button" class="btn btn-primary" data-dismiss="modal">Close</button></center>
                </div>
            </div>

        </div>
    </div>

  	<?php require_once("header.php"); ?>

	<div class="container" style="margin-top: 100px;">
		<div class="row">
			<div class="col-md-4 col-md-offset-4">
				<div class="login-panel panel panel-default">
					<div class="panel-heading" align="center">Log in</div>
					<div class="panel-body">
						<form action="act.php?code=login" method="POST" data-toggle="validator" role="form">
							<fieldset>
								<div class="form-group">
									<input class="form-control" placeholder="Login ID" name="id" id="flogin" type="" autofocus="" required minlength="8" maxlength="16" pattern="^[-._A-z0-9]{1,}$" value="<?=$id;?>">
									<div class="help-block with-errors"></div>
								</div>
								<div class="form-group">
									<input class="form-control" placeholder="Password" name="password" id="fpassword" type="password" required minlength="8" maxlength="16" value="<?=$password;?>">
									<div class="help-block with-errors"></div>
								</div>
								<button type="submit" class="btn btn-primary form-control">Login</button></fieldset>
						</form>
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

    <?php if (isset($_SESSION['status'])): ?>
    	<script type="text/javascript">
    	     $(window).load(function(){
    	         $('#myModal').modal('show');
    	      });
    	</script>	
    <?php 
    unset($_SESSION['status']);
	  endif ?>

  </body>
</html>