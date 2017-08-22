<?php include 'back_header.php'?>
<?php
	// Start the session
	session_start();
?>
<body>
<div style="margin-top:100px; margin:20px;">
    <h3>Admin Panel</h3>
    <h3>Portfolio Table</h3>
        <?php 
                include "backend_db.php";
                
                db_connect();

                if(db_connect()) {
                    $query = "SELECT * FROM portfolio_tb ORDER BY id";
                    $queryResult = mysqli_query(db_connect(), $query);

                    $numberOfRows = mysqli_num_rows($queryResult);

                    if( $numberOfRows > 0 ){
                        echo "<div class='table-responsive'>";
                        echo "<table class='table table-condensed table-striped table-hover'>";
                        echo "<tr class='info' style='width:100%;'>
                                    <th>ID</th>
                                    <th>Title</th> 
                                    <th>Client</th>
                                    <th>Img</th>
                                    <th>Content</th>
                                    <th>Testimonial</th>
                                    <th>Hero</th>
                                    <th>Summary</th>
                                    <th>Final</th>
                                    <th>Imgs</th>
                                    <th>Design</th>
                                    <th>Design</th>
                                    <th>ClientImg</th>
                                </tr>";

                        while($rowArray = mysqli_fetch_assoc($queryResult)) {	

                            $id = $rowArray["id"];
                            $title = $rowArray["title"];
                            $client = $rowArray["client"];
                            $image = $rowArray["image"];
                            $content = $rowArray["content"];
                            $testimonial = $rowArray["testimonial"];
                            $heroImage = $rowArray["hero_image"];
                            $projSummary = $rowArray["proj_summary"];
                            $finalSummary = $rowArray["final_summary"];
                            $designProcess = $rowArray["design_process"];
                            $image1 = $rowArray["image1"];
                            $image2 = $rowArray["image2"];
                            $image3 = $rowArray["image3"];
                            $design_image1= $rowArray["design_image1"];
                            $design_image2= $rowArray["design_image2"];
                            $clientImage = $rowArray["client_image"];
                            echo "<tr>";
                                echo "<td>".$id."</td>";
                                echo "<td>".$title."</td>";
                                echo "<td>".$client."</td>";
                                echo "<td><img style='width:40px; height:40px' src='".$image." '></td>";
                                echo "<td>".$content."</td>";
                                echo "<td>".$testimonial."</td>";
                                echo "<td><img style='width:60px; height:40px' src='".$heroImage." '></td>";
                                echo "<td>".$projSummary."</td>";
                                echo "<td>".$finalSummary."</td>";
                                echo "<td><img style='width:40px; height:40px margin:2px;' src='".$image1." '><img style='width:40px; height:40px margin:2px;' src='".$image2." '><img style='width:40px; height:40px margin:2px;' src='".$image3." '></td>";
                                echo "<td>".$designProcess."</td>";
                                echo "<td><img style='width:40px; height:40px' src='".$design_image1." '><img style='width:40px; height:40px' src='".$design_image2." '></td>";
                                echo "<td><img style='width:40px; height:40px' src='".$clientImage." '></td>";
                                echo "<td><a class='btn btn-info' href='_edit.php?tb=portfolio_tb&id=".$id."'>Edit</a></td>";
                                echo "<td><a class='btn btn-danger' href='_delete_process.php?id=".$id."&tb=portfolio_tb'>Delete</a></td>";
                            echo "</tr>";
                        }

                        echo "</table>";
                        echo "</div>";
                    }
                    else {
                        echo "<p>No info to display!</p>";
                    }
                }
                else {
                    echo "Connection Failed";
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

</body>
<?php include 'back_footer.php'?>