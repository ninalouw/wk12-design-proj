<?php
	// Start the session
	session_start();
?>
<!--Include our head section-->
<?php include 'back_header.php'?>

<div class="log-in-form container" style="margin-top:100px">
    <h3>Log In </h3>
	<p>Please type your username and password to log in.</p>
    <form action="<?php echo htmlentities( $_SERVER[ 'PHP_SELF' ] ); ?>" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="name" class="form-control" id="name" name="username" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
        </div>
        <button type="submit" class="btn btn-warning" name="submit">Submit</button>
    </form>
    <p>Do you want to change your password?</p>
    <button href='_change_pw.php'type="submit" class="btn btn-info" name="change_pw"><a href='_change_pw.php'>Change Password</a></button>
</div>
<!--Footer-->
<?php include 'back_footer.php'?>

<?php
    include "users_db.php";
                
    db_connect();
    // Store username in username if login was pressed
    if(isset($_POST['submit']) AND !empty($_POST['username'])) {
        $connection = db_connect();

        if(!$connection) {
            echo "Connection Failed";
        }
        else {
            // echo "<p>Connected</p>";
            $username = mysqli_real_escape_string($connection, $_POST['username']);
            $password = mysqli_real_escape_string($connection, $_POST['password']);

            $query = "SELECT * FROM users_tb 
                        WHERE password='$password' 
                        AND name='$username'";

            $queryResult = mysqli_query($connection, $query);

            $rows = mysqli_num_rows($queryResult);

            if ($rows == 1) {
                $_SESSION['username'] = $username; // Initializing Session
                echo "<script> location.replace('admin.php')</script>";
            } 
            else {
                echo "<p>Username or Password is invalid</p>";
            }
        }
    }

    // Check to see if username is entered into session
    // As if the user is logged in 
    if(isset($_SESSION['username'])) {
        header("location: admin.php");
    }
?>
