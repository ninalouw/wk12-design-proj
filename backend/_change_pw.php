<!--Include our head section-->
<?php include 'back_header.php'?>
<div class="log-in-form container" style="margin-top:100px">
    <h3>Change Password </h3>
	<p>Please type your username, password and your new password to update your password.</p>
    <form action="<?php echo htmlentities( $_SERVER[ 'PHP_SELF' ] ); ?>" method="post">
        <div class="form-group">
            <label for="exampleInputEmail1">Username</label>
            <input type="name" class="form-control" id="name" name="username" placeholder="Username">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="password" placeholder="Password">
        </div>
        <div class="form-group">
            <label for="exampleInputPassword1">New Password</label>
            <input type="password" class="form-control" id="exampleInputPassword1" name="new_password" placeholder="New Password">
        </div>
        <button type="submit" class="btn btn-warning" name="submit">Submit</button>
    </form>
</div>

<!--Include our footer section-->
<?php include 'back_footer.php'?>

<?php
    include "users_db.php";
                
    db_connect();
    // Store username in username if login was pressed
    if(isset($_POST['submit']) AND !empty($_POST['username']) AND !empty($_POST['password']) AND !empty($_POST['new_password'])) {
        $connection = db_connect();

        if(!$connection) {
            echo "Connection Failed";
        }
        else {
            // echo "<p>Connected</p>";
            $username = mysqli_real_escape_string($connection, $_POST['username']);
            $password = mysqli_real_escape_string($connection, $_POST['password']);
            $newPassword = mysqli_real_escape_string($connection, $_POST['new_password']);

            $query = "UPDATE users_tb 
                        SET password='$newPassword'
                        WHERE password='$password' 
                        AND name='$username'";

            $queryResult = mysqli_query($connection, $query);

            $rows = mysqli_num_rows($queryResult);

            if ($queryResult) {
                $_SESSION['username'] = $username; // Initializing Session
                echo "<p class='bg-success'>Password updated!</p>";
                echo "<script> location.replace('admin.php')</script>";
            } 
            else {
                echo "<p class='bg-danger'>Username or Password is invalid</p>";
            }
        }
    }