        
<?php include 'back_header.php'?>
<?php
	// Start the session
	session_start();
?>
<div class="container" style="margin-top:100px">
<h3>Do you want to Log Out?</h3>
    <form action="<?php echo htmlentities( $_SERVER[ 'PHP_SELF' ] ); ?>" method="post">
        <button class="btn btn-danger" name="logOut">Log Out</button>
    </form>
</div>
<?php include 'back_footer.php'?>
<!-- logging out -->
<?php
    // Delete all session variables if user logs out
    if(isset($_POST['logOut']) OR !isset($_SESSION['username'])) {
        session_unset(); 
        session_destroy();
        echo "<script> location.replace('logIn.php')</script>";
    }
?>