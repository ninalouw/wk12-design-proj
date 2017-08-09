<?php include 'back_header.php'?>
<?php
	// EDIT PROCESS
	include "db.php";

	db_connect();

	if(db_connect()) {
		if(isset($_POST["id"])) {

			var_dump($_POST);

			$update = "UPDATE ".$_POST["tb"]." SET ";
			foreach($_POST as $name=>$value) {
				if($name !== "id" AND $name !== "tb") {
					$update .= $name."='".$value."', ";
				}
			}
			$update = rtrim($update, ", ");
			$update .= " WHERE id='".mysqli_real_escape_string(db_connect(), $_POST['id'])."'";

			$updateResult = mysqli_query(db_connect(), $update);

			if($updateResult) {
                 echo"<p class='bg-success'>Update successful!</p>";
				echo "<script>window.location='admin.php';</script>";
			}
			else {
				echo"<p class='bg-warning'>Update failed!</p>";
			}
		}
		db_close(db_connect());
	}
?>
<?php include 'back_footer.php'?>