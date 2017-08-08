<?php include 'back_header.php'?>
<?php
	// Start the session
	session_start();
?>
<body>
<div class="container" style="margin-top:100px">
    <h1>Admin Panel</h1>
    <h3>Portfolio Table</h3>
        <?php 
                include "db.php";
                
                db_connect();

                if(db_connect()) {
                    $query = "SELECT * FROM portfolio_tb ORDER BY id";
                    $queryResult = mysqli_query(db_connect(), $query);

                    $numberOfRows = mysqli_num_rows($queryResult);

                    if( $numberOfRows > 0 ){

                        echo "<table class='table table-striped table-hover'>";
                        echo "<tr class='info'>
                                    <th>ID</th>
                                    <th>Title</th> 
                                    <th>Client</th>
                                    <th>Content</th>
                                    <th>Testimonial</th>
                                </tr>";

                        while($rowArray = mysqli_fetch_assoc($queryResult)) {	

                            $id = $rowArray["id"];
                            $title = $rowArray["title"];
                            $client = $rowArray["client"];
                            $content = $rowArray["content"];
                            $testimonial = $rowArray["testimonial"];
                            echo "<tr>";
                                echo "<td>".$id."</td>";
                                echo "<td>".$title."</td>";
                                echo "<td>".$client."</td>";
                                echo "<td>".$content."</td>";
                                echo "<td>".$testimonial."</td>";
                                echo "<td><button class='btn btn-info' href='edit.php?tb=portfolio_tb&id=".$id."'>Edit</button></td>";
                                echo "<td><button class='btn btn-danger' href='_delete_process.php?id=".$id."&tb=portfolio_tb'>Delete</button></td>";
                            echo "</tr>";
                        }

                        echo "</table>";
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