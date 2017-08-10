<!-- php header -->
<?php include "partials/header.php"?>
    <div class="wrapper">
        <div class="section section-header">
            <div class="parallax pattern-image">
                <img src="img/portfolio-hero.jpeg" alt="hero image">
                <div class="container">
                    <div class="content row">
                        <p class="section-header-p">Featured Work</p>
                        <h1>33 Degrees</h1>
                        <p class=" section-header-p">Transforming a mobile booking product and setting the direction for an entire business offering. A really fun project which we completed very quickly.</p>
                    </div>
                </div>
            </div>
        </div>
    </div>
    <!-- rest of page content -->
    <div class="content-header-1 row">
        <div class="col-sm-12 col-md-12 col-lg-12 ">
            <h2>Our Work</h2>
        </div>
    </div>
    <!-- gallery of cards -->
    <div class='container'>
        <!-- <div class="row port-card-container">
            <div class="port-card col-md-5 col-lg-5 col-sm-12">
                <img class="img-responsive" src='img/port-img-375.jpg' alt= 'portfolio image'>
                <p class="text-muted">Client Name</p>
                <h3>Title</h3>
                <p>Transforming a mobile booking product and setting the direction for an entire business offering. A really fun project which we completed very quickly.</p>
                <hr>
                <button href="services.php" class="btn-circle"></button>
            </div>
            <div class="port-card col-md-5 col-lg-5 col-sm-12">
                <img class="img-responsive" src='img/port-img-insta-375.jpg' alt= 'portfolio image'>
                <p class="text-muted">Client Name</p>
                <h3>Title</h3>
                <p>Transforming a mobile booking product and setting the direction for an entire business offering. A really fun project which we completed very quickly.</p>
                <hr>
                <button href="services.php" class="btn-circle"></button>
            </div>
        </div> -->
    <?php 
                include "backend/db.php";
                
                db_connect();

                if(db_connect()) {
                    $query = "SELECT * FROM portfolio_tb ORDER BY id";
                    $queryResult = mysqli_query(db_connect(), $query);

                    $numberOfRows = mysqli_num_rows($queryResult);

                    if( $numberOfRows > 0 ){

                        // echo "<div class='row port-card-container'>";

                        while($rowArray = mysqli_fetch_assoc($queryResult)) {	

                            $id = $rowArray["id"];
                            $title = $rowArray["title"];
                            $client = $rowArray["client"];
                            $content = $rowArray["content"];
                            $image = $rowArray["image"];
                            $testimonial = $rowArray["testimonial"];
                            echo "
                            <div class='row port-card-container'>
                                <div class='port-card col-md-5 col-lg-5 col-sm-12'>
                                    <img class='img-responsive' src='$image' alt='portfolio image'>
                                    <p class='text-muted'>$client</p>
                                    <h3>$title</h3>
                                    <p>$content</p>
                                    <hr>
                                    <button href='portfolio_detail.php' class='btn-circle'>&rarr;</button>
                                </div>
                            <div class='port-card col-md-5 col-lg-5 col-sm-12'>
                                    <img class='img-responsive' src='$image' alt='portfolio image'>
                                    <p class='text-muted'>$client</p>
                                    <h3>$title</h3>
                                    <p>$content</p>
                                    <hr>
                                    <button href='portfolio_detail.php' class='btn-circle'>&rarr;</button>
                                </div>
                            </div>
                                ";

                        }

                        // echo "</div>";
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