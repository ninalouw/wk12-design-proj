<!-- php header -->
<?php include "partials/header.php"?>
<!--Portfolio detail heading -->
    <!-- Use php to make page dynamic -->
    <?php
        include "backend/db.php";

        if(isset($_GET["id"])) {
            db_connect();

            if(db_connect()) {
                $id = mysqli_real_escape_string(db_connect(), $_GET["id"]);
                $tb = mysqli_real_escape_string(db_connect(), $_GET["tb"]);

                $query = "SELECT * FROM ".$tb." WHERE id='".$id."'";
                $queryResult = mysqli_query(db_connect(), $query);

                if($queryResult) {
                    // echo "<div class='col-sm-12 col-md-12 col-lg-12'>";


                    while($rowArray = mysqli_fetch_assoc($queryResult)) {
                            $id = $rowArray["id"];
                            $title = $rowArray["title"];
                            $client = $rowArray["client"];
                            $content = $rowArray["content"];
                            $unformattedImage = $rowArray["image"];
                            //image has ../, remove it
                            $image = ltrim( $unformattedImage, "../" );
                            $testimonial = $rowArray["testimonial"];

                            //while we have data, echo out allll the html...
                        echo '
                            <div class="services-h1">
                                <h1>'.$title.'</h1>
                            </div>

                            <div class="full-image-container">
                                <img class="img-responsive full-image" src="img/pot-luck-hero.jpg" alt="portfolio image">
                            </div>

                            <div class="overlay-image-container">
                                <img class="img-responsive overlay-image" src="img/maple_mobile.png" alt="portfolio image">
                            </div>

                            <div>
                                <div class="row port-card-container" style="transform: translate(0px, -300px);">
                                    <div class="port-card col-md-6 col-lg-6 col-sm-6">
                                        <h3 class="text-center text-uppercase">Project Summary</h3>
                                        <p>'.$content.'</p>
                                    </div>
                                </div>

                                <div class="row port-card-container" style="transform: translate(0px, -300px);">
                                    <div class="port-card col-md-6 col-lg-6 col-sm-6 padding">
                                        <h3 class="text-center text-uppercase">The Final Product</h3>
                                        <p>'.$content.'</p>
                                    </div>
                                </div>

                                <div class="row trio-image-container">
                                    <img class="col-md-4 col-lg-4 col-sm-12 trio-image img-responsive" src='.$image.' alt="portfolio image">
                                    <img class="col-md-4 col-lg-4 col-sm-12 trio-image-middle trio-image img-responsive" src="img/pot-luck-300.jpg" alt="portfolio image">
                                    <img class="col-md-4 col-lg-4 col-sm-12 trio-image img-responsive" src="img/pot-luck-300-2.jpg" alt="portfolio image">
                                </div>

                                <div class="row port-card-container" style="transform: translate(0px, -200px);">
                                    <div class="port-card col-md-6 col-lg-6 col-sm-6 padding">
                                        <h3 class="text-center text-uppercase">The Design Process</h3>
                                        <p>Transforming a mobile booking product and setting the direction for an entire business offering.
                                                A really fun project which we completed very quickly.Transforming a mobile booking product and setting the direction for an entire business offering.
                                                A really fun project which we completed very quickly.Transforming a mobile booking product and setting the direction for an entire business offering.
                                                A really fun project which we completed very quickly.Transforming a mobile booking product and setting the direction for an entire business offering.
                                                A really fun project which we completed very quickly.
                                        </p>
                                    </div>
                                </div>

                                    <!-- three final product images -->
                                <div class="row trio-image-container">
                                    <img class="col-md-6 col-lg-6 col-sm-12 trio-image img-responsive" src="img/pot-luck-300-3.jpg" alt="portfolio image">
                                    <img class="col-md-6 col-lg-6 col-sm-12 trio-image img-responsive" src="img/pot-luck-300-2.jpg" alt="portfolio image">
                                </div>

                                <div class="container client-container">
                                    <div class="row port-card-container" style="transform: translate(0px, -200px);">
                                        <div class="col-lg-3 col-md-3 col-sm-12">
                                            <img class="circle-img img-responsive" src="'.$image.'" alt="client image">
                                        </div>
                                        <div class="port-card col-md-9 col-lg-9 col-sm-12">
                                            <h3 class="text-center text-uppercase">Client Testimonial</h3>
                                            <p class="text-muted">'.$client.'</p>
                                            <p>'.$testimonial.'</p>
                                        </div>
                                    </div>
                                </div>
                            </div>
                        ';
                        
                    }

                }
            }
        }
        db_close(db_connect());
    ?>



    <!-- php footer -->
<?php include "partials/footer.php"?>