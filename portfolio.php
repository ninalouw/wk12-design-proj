<!-- php header -->
<?php include "partials/header.php"?>
    <div class="wrapper">
        <div class="section section-header">
            <div class="parallax pattern-image">
                <img class="hero-img" src="img/new-work-hero.jpg" alt="hero image">
                <div class="container">
                    <div class="content row">
                        <p class="section-header-p">Featured Work</p>
                        <h1>33 Degrees</h1>
                        <p class=" section-header-p">Transforming a mobile booking product and setting the direction for an entire business offering.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- Heading -->
    <div class="content-header-1 row">
        <div class="col-sm-12 col-md-12 col-lg-12 ">
            <h2>Our Work</h2>
        </div>
    </div>
    <!-- gallery of cards -->
    <div class='container'>
    <?php 
                include "backend/db.php";
                
                db_connect();

                if(db_connect()) {
                    $query = "SELECT * FROM portfolio_tb ORDER BY id";
                    $queryResult = mysqli_query(db_connect(), $query);

                    $numberOfRows = mysqli_num_rows($queryResult);

                    if( $numberOfRows > 0 ){

                        echo "<div class='row port-card-container'>";

                        while($rowArray = mysqli_fetch_assoc($queryResult)) {	

                            $id = $rowArray["id"];
                            $title = $rowArray["title"];
                            $client = $rowArray["client"];
                            $content = $rowArray["content"];
                            $unformattedImage = $rowArray["image"];
                            //image has ../, remove it
                            $image = ltrim( $unformattedImage, "../" );
                            $testimonial = $rowArray["testimonial"];

                            echo "
                                <div class='port-card col-md-5 col-lg-5 col-sm-12'>
                                    <input type='hidden' name='".$id."' value='".$id."'>
                                    <img class='img-responsive' src='$image' alt='portfolio image'>
                                    <p class='text-muted'>$client</p>
                                    <h3>$title</h3>
                                    <p>$content</p>
                                    <hr>
                                    <span class='text-muted'><button href='portfolio_detail.php?tb=portfolio_tb&id=".$id."' class='btn-circle active'><a href='portfolio_detail.php?tb=portfolio_tb&id=".$id."'>&rarr;</a></button>View</span>
                                </div>
                                ";

                        }

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
    <div class="center">
        <button href="services.php" class="btn-quote">Get a Quote</button>
    </div>
</div>
    <!-- php footer -->
<?php include "partials/footer.php"?>