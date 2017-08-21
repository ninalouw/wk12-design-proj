<?php error_reporting(0); ?>
<?php
	// Start the session
	session_start();
?>
<!DOCTYPE html>
<html lang="en">
  <head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <!-- The above 3 meta tags *must* come first in the head; any other head content must come *after* these tags -->
    <title>Box Spring Studios</title>
    <!-- Bootstrap -->
   <link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
    <link href="../css/bootstrap.min.css" rel="stylesheet">
    <link href="../css/styles.css" rel="stylesheet">
    <style>
        body, h1, h3, p, table {
            font-family:'Roboto', Helvetica, sans-serif !important;
        }
    </style>
  </head>
        <nav class="navbar navbar-fixed-top navbar-mobile navbar-default" role="navigation" style="background-color:#adf; margin-bottom:50px;">
        <div class="container">
            <!-- Brand and toggle get grouped for better mobile display -->
            <div class="navbar-header">
            <button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#bs-example-navbar-collapse-1" aria-expanded="false">
                <span class="sr-only">Toggle navigation</span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
                <span class="icon-bar"></span>
            </button>
            <a class="navbar-brand" href="admin.php">Box Spring Admin Panel</a>
            </div>

            <!-- Collect the nav links, forms, and other content for toggling -->
            <div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
            <ul class="nav navbar-nav navbar-right">
                <li><a class="navbar-li-a" href="logIn.php">Log In</a></li>
                <li><a class="navbar-li-a" href="logOut.php">Log Out</a></li>
                <li><a class="navbar-li-a" href="portfolio_form.php">Add New Portfolio</a></li>
                <li class="text-muted text-capitalize"><a class='navbar-li-a'>Welcome, <?php echo $_SESSION['username'] ?></a></li>
            </ul>
            </div>
        </div>
        </nav>