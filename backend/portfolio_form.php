<?php include 'back_header.php'?>
<?php
	// Start the session
	session_start();
?>
<div class="container" style="margin-top:100px">
    <br>
    <br>
        <h3>Add a New Portfolio Item</h3>
        <div class="col-md-12 col-lg-12">
            <form action="<?php echo htmlentities( $_SERVER[ 'PHP_SELF' ] ); ?>" method="post">
                <div class="form-group row">
                    <div class="col-md-6 col-lg-6">
                        <label for="title">Project Title</label>
                        <input type="text" class="form-control" id="title" placeholder="Title" name="title" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 col-lg-6">
                        <label for="client">Client Name</label>
                        <input type="text" class="form-control" id="client" placeholder="Client Name" name="client" required>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 col-lg-6">
                        <label for="content">Short Project Description</label>
                        <textarea class="form-control" rows="6" placeholder="Fill in the project description..." name="content" required></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 col-lg-6">
                        <label for="image">Card Image</label>
                        	<select  class="form-control imageSelect" name="image" required>
                                <?php
                                    foreach(glob('../img/*[.jpg, .jpeg, .png, .PNG]') as $filename){
                                        echo "<option>" . $filename . "</option>";
                                    }
                                ?>
                            </select>
                            <div class="image-preview"></div>
                    </div>
                </div>
                <p>Portfolio Detail Section</p>
                <div class="form-group row">
                    <div class="col-md-6 col-lg-6">
                        <label for="image">Hero Image</label>
                        	<select  class="form-control imageSelect" name="hero_image" required>
                                <?php
                                    foreach(glob('../img/*[.jpg, .jpeg, .png, .PNG]') as $filename){
                                        echo "<option>" . $filename . "</option>";
                                    }
                                ?>
                            </select>
                            <div class="image-preview"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 col-lg-6">
                        <label for="content">Project Summary</label>
                        <textarea class="form-control" rows="8" placeholder="Fill in the project summary..." name="proj_summary" required></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 col-lg-6">
                        <label for="content">Final Product</label>
                        <textarea class="form-control" rows="8" placeholder="Fill in details about the final product..." name="final_summary" required></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 col-lg-6">
                        <label for="image">Featured Image 1</label>
                        	<select  class="form-control imageSelect" name="image1" required>
                                <?php
                                    foreach(glob('../img/*[.jpg, .jpeg, .png, .PNG]') as $filename){
                                        echo "<option>" . $filename . "</option>";
                                    }
                                ?>
                            </select>
                            <div class="image-preview"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 col-lg-6">
                        <label for="image">Featured Image 2</label>
                        	<select  class="form-control imageSelect" name="image2" required>
                                <?php
                                    foreach(glob('../img/*[.jpg, .jpeg, .png, .PNG]') as $filename){
                                        echo "<option>" . $filename . "</option>";
                                    }
                                ?>
                            </select>
                            <div class="image-preview"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 col-lg-6">
                        <label for="image">Featured Image 3</label>
                        	<select  class="form-control imageSelect" name="image3" required>
                                <?php
                                    foreach(glob('../img/*[.jpg, .jpeg, .png, .PNG]') as $filename){
                                        echo "<option>" . $filename . "</option>";
                                    }
                                ?>
                            </select>
                            <div class="image-preview"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 col-lg-6">
                        <label for="content">Design Process</label>
                        <textarea class="form-control" rows="8" placeholder="Fill in details about the design process..." name="design_process" required></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 col-lg-6">
                        <label for="image">Design Image 1</label>
                        	<select  class="form-control imageSelect" name="design_image1" required>
                                <?php
                                    foreach(glob('../img/*[.jpg, .jpeg, .png, .PNG]') as $filename){
                                        echo "<option>" . $filename . "</option>";
                                    }
                                ?>
                            </select>
                            <div class="image-preview"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 col-lg-6">
                        <label for="image">Design Image 2</label>
                        	<select  class="form-control imageSelect" name="design_image2" required>
                                <?php
                                    foreach(glob('../img/*[.jpg, .jpeg, .png, .PNG]') as $filename){
                                        echo "<option>" . $filename . "</option>";
                                    }
                                ?>
                            </select>
                            <div class="image-preview"></div>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 col-lg-6">
                        <label for="content">Client Testimonial</label>
                        <textarea class="form-control" rows="6" placeholder="Fill in the testimonial..." name="testimonial" required></textarea>
                    </div>
                </div>
                <div class="form-group row">
                    <div class="col-md-6 col-lg-6">
                        <label for="image">Client Image</label>
                        	<select  class="form-control imageSelect" name="client_image" required>
                                <?php
                                    foreach(glob('../img/*[.jpg, .jpeg, .png, .PNG]') as $filename){
                                        echo "<option>" . $filename . "</option>";
                                    }
                                ?>
                            </select>
                            <div class="image-preview"></div>
                    </div>
                </div>
                <button type="submit" class="btn btn-primary" name="submit">Submit</button>
            </form>
            <br>
        </div>
</div>
<?php include 'back_footer.php'?>
            <?php
                include "backend_db.php";
                db_connect();
                
                if(isset($_POST['title']) && isset($_POST['image']) && isset($_POST['content']) && isset($_POST['client']) && isset($_POST['submit'])
                    && isset($_POST['testimonial']) && isset($_POST['hero_image']) && isset($_POST['proj_summary']) && isset($_POST['final_summary']) && isset($_POST['design_process'])){

                    $connection = db_connect();
                    
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
                        $hero_image =  mysqli_real_escape_string($connection,$_POST['hero_image']);
                        $proj_summary =  mysqli_real_escape_string($connection,$_POST['proj_summary']);
                        $final_summary =  mysqli_real_escape_string($connection,$_POST['final_summary']);
                        $image1 =  mysqli_real_escape_string($connection,$_POST['image1']);
                        $image2 =  mysqli_real_escape_string($connection,$_POST['image2']);
                        $image3 =  mysqli_real_escape_string($connection,$_POST['image3']);
                        $design_process =  mysqli_real_escape_string($connection,$_POST['design_process']);
                        $design_image1 =  mysqli_real_escape_string($connection,$_POST['design_image1']);
                        $design_image2 =  mysqli_real_escape_string($connection,$_POST['design_image2']);
                        $client_image =  mysqli_real_escape_string($connection,$_POST['client_image']);
                        //insert
                        $insert = "INSERT INTO portfolio_tb (title, client, content, image, testimonial, hero_image, 
                                                            proj_summary, final_summary, image1, image2, image3, 
                                                            design_process, design_image1, design_image2, client_image) 
                                VALUES ('$title','$client','$content', '$image', '$testimonial', '$hero_image', 
                                                            '$proj_summary', '$final_summary', '$image1', '$image2', '$image3', 
                                                            '$design_process', '$design_image1', '$design_image2', '$client_image')";

                        $insertResult = mysqli_query($connection, $insert);

                        if(!$insertResult){
                            echo "<p class='bg-warning'>Failed to add portfolio!</p>";
                        } else {
                            echo "<p class='bg-success'>Successfully added portfolio!</p>";
                            echo "<script>window.location = 'admin.php';</script>";
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

