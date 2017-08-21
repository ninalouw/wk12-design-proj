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

                    while($rowArray = mysqli_fetch_assoc($queryResult)) {
                            $id = $rowArray["id"];
                            $title = $rowArray["title"];
                            $client = $rowArray["client"];
                            $content = $rowArray["content"];
                            $image = ltrim($rowArray["image"], "../" );
                            $testimonial = $rowArray["testimonial"];
                            $heroImage = ltrim( $rowArray["hero_image"], "../" );
                            $projSummary = $rowArray["proj_summary"];
                            $finalSummary = $rowArray["final_summary"];
                            $image1 = ltrim($rowArray["image1"], "../" );
                            $image2 = ltrim($rowArray["image2"], "../" );
                            $image3 = ltrim($rowArray["image3"], "../" );
                            $designProcess = $rowArray["design_process"];
                            $designImage1 = ltrim($rowArray["design_image1"], "../" );
                            $designImage2 = ltrim($rowArray["design_image2"], "../" );
                            $clientImage = ltrim($rowArray["client_image"], "../" );
                            //while we have data, echo out allll the html...
                        echo '
                            <div class="services-h1">
                                <h2>'.$title.'</h2>
                            </div>

                            <div class="full-image-container">
                                <img class="img-responsive full-image" src='.$heroImage.' alt="portfolio image">
                            </div>

                            <div class="overlay-image-container">
                                <img class="img-responsive overlay-image" src="img/maple_mobile.png" alt="portfolio image">
                            </div>

                            <div>
                                <div class="row port-card-container" style="transform: translate(0px, -300px);">
                                    <div class="port-card col-md-6 col-lg-6 col-sm-6">
                                        <h3 class="text-center text-uppercase">Project Summary</h3>
                                        <p>'.$projSummary.'</p>
                                    </div>
                                </div>

                                <div class="row port-card-container" style="transform: translate(0px, -300px);">
                                    <div class="port-card col-md-6 col-lg-6 col-sm-6 padding">
                                        <h3 class="text-center text-uppercase">The Final Product</h3>
                                        <p>'.$finalSummary.'</p>
                                    </div>
                                </div>

                                <div class="row trio-image-container">
                                    <img class="col-md-4 col-lg-4 col-sm-12 trio-image img-responsive" src='.$image1.' alt="portfolio image">
                                    <img class="col-md-4 col-lg-4 col-sm-12 trio-image-middle trio-image img-responsive" src='.$image2.' alt="portfolio image">
                                    <img class="col-md-4 col-lg-4 col-sm-12 trio-image img-responsive" src='.$image3.' alt="portfolio image">
                                </div>

                                <div class="row port-card-container" style="transform: translate(0px, -200px);">
                                    <div class="port-card col-md-6 col-lg-6 col-sm-6 padding">
                                        <h3 class="text-center text-uppercase">The Design Process</h3>
                                        <p>'.$designProcess.'</p>
                                    </div>
                                </div>

                                    <!-- three final product images -->
                                <div class="row trio-image-container">
                                    <img class="col-md-6 col-lg-6 col-sm-12 design-image img-responsive" src='.$designImage1.' alt="portfolio image">
                                    <img class="col-md-6 col-lg-6 col-sm-12 design-image img-responsive" src='.$designImage2.' alt="portfolio image">
                                </div>

                                <div class="container client-container">
                                    <div class="row port-card-container" style="transform: translate(0px, -200px);">
                                        <div class="col-lg-3 col-md-3 col-sm-12">
                                            <img class="circle-img img-responsive" src="'.$clientImage.'" alt="client image">
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