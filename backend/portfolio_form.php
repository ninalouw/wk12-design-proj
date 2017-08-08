<?php include 'back_header.php'?>
<?php
	// Start the session
	session_start();
?>
<div class="container" style="margin-top:100px">
    <br>
    <br>
        <h1>Add a New Portfolio Item</h1>
        <div class="col-md-12 col-lg-12">
            <form action="<?php echo htmlentities( $_SERVER[ 'PHP_SELF' ] ); ?>" method="post">
                <div class="form-group row">
                    <div class="col-md-6 col-lg-6">
                        <label for="title">Project Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Title" name="title">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 col-lg-6">
                        <label for="client">Client Name</label>
                        <input type="text" class="form-control" id="client" placeholder="Client Name" name="client">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 col-lg-6">
                        <label for="content">Project Description</label>
                        <textarea class="form-control" rows="6" placeholder="Fill in the project description..." name="content"></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 col-lg-6">
                        <label for="image">Image</label>
                        <input type="text" class="form-control" id="image" placeholder="Image" name="image">
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 col-lg-6">
                        <label for="content">Client Testimonial</label>
                        <textarea class="form-control" rows="6" placeholder="Fill in the testimonial..." name="testimonial"></textarea>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
            <br>
        </div>
</div>
            <?php
                include "db.php";
                db_connect();
                
                if(isset($_POST['title']) && isset($_POST['content']) && isset($_POST['submit'])){

                    $connection = db_connect();
                    // $configArray = parse_ini_file("../../con/config.ini");
                    // $connection = mysqli_connect($configArray["host"], $configArray["username"], $configArray["password"], $configArray["database"] );
                    
                    if(!$connection) {
                        echo "<p class='bg-danger'>Connection Failed</p>";
                    }
                    else {
                        //set timezone
                        date_default_timezone_set("America/Vancouver");
                        //set charset
                        mysqli_set_charset($connection, "utf8");
                        //escape values from form for sql
                        $title =  mysqli_real_escape_string($connection,$_POST['title']);
                        $client =  mysqli_real_escape_string($connection,$_POST['client']);
                        $content =  mysqli_real_escape_string($connection,$_POST['content']);
                        $image =  mysqli_real_escape_string($connection,$_POST['image']);
                        $testimonial =  mysqli_real_escape_string($connection,$_POST['testimonial']);
                        //insert
                        $insert = "INSERT INTO portfolio_tb (title, client, content, image, testimonial) 
                                VALUES ('$title','$client','$content', '$image', '$testimonial')";

                        $insertResult = mysqli_query($connection, $insert);

                        if(!$insertResult){
                            echo "<p class='bg-warning'>Failed to add portfolio!</p>";
                        } else{
                            echo "<p class='bg-success'>Successfully added portfolio!</p>";
                        }
                    }
                    mysqli_close($connection);
                }
            ?>
            <?php
                // Delete all session variables if user logs out
                if(!isset($_SESSION['username'])) {
                    session_unset(); 
                    session_destroy();
                    echo "<script> location.replace('logIn.php')</script>";
                }
            ?> 
<?php include 'back_footer.php'?>