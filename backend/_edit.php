<!-- EDIT -->
<?php include 'back_header.php'?>
    <style>
    body {
        margin-top:100px;
        /* padding:50px; */
        font-family: 'Roboto', Helvetica, sans-serif;
    }
    </style>

	<body>
    <div class="container">
		<h1>Edit Your Portfolio Item </h1>
		<?php
			include "db.php";

			if(isset($_GET["id"])) {
				db_connect();

				if(db_connect()) {
					$id = mysqli_real_escape_string(db_connect(), $_GET["id"]);
					$tb = mysqli_real_escape_string(db_connect(), $_GET["tb"]);

					$query = "SELECT * FROM ".$tb." WHERE id='".$id."'";
					$queryResult = mysqli_query(db_connect(), $query);

					if($queryResult) {
                        echo "<div class='col-sm-12 col-md-12 col-lg-12'>";
						echo '<form class="form" action="_edit_process.php" method="POST">';

						while($rowArray = mysqli_fetch_assoc($queryResult)) {

							foreach($rowArray as $name=>$value) {
								if($name !== "id" && $name !== "image") {
                                    echo "<div class='form-group row'>";
                                    echo "<div class='col-sm-12 col-md-6 col-lg-6'>";
									echo '<label>'.$name.': </label><input type="text" class="form-control" name="'.$name.'" value="'.$value.'">
										<br><br>';
                                    echo "</div>";
                                    echo "</div>";
								}
								else if ($name === "image"){
									echo "<div class='form-group row'>";
                                    echo "<div class='col-sm-12 col-md-6 col-lg-6'>";
									echo '<label>'.$name.': </label>';
									echo "<select  class='form-control' id='imageSelect' name='".$name."' value='".$value."'>";
										foreach(glob('../img/*[.jpg, .jpeg, .png, .PNG]') as $filename){
											echo "<option>" . $filename . "</option>";
										}
									echo "</select>";
									echo "<br><br>";
                                    echo "</div>";
                                    echo "</div>";
								}
								else {
									echo '<input type="hidden" name="'.$name.'" value="'.$value.'">';
								}
							}
							echo '<input type="hidden" name="tb" value="'.$tb.'">';
							echo '<input type="submit" class="btn btn-primary" value="Edit">';
						}
						echo '</form>';
                        echo"</div>";
					}
				}
			}
			db_close(db_connect());
		?>
    </div>
	</body>
    <?php include 'back_footer.php'?>
</html>