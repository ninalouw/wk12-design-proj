<?php include 'back_header.php'?>
<?php
	// DELETE
	include "backend_db.php";

	db_connect();

	if(db_connect()) {
		if(isset($_GET["id"])) {

			$id = mysqli_real_escape_string(db_connect(), $_GET['id']);
			$tb = mysqli_real_escape_string(db_connect(), $_GET['tb']);

			$delete = "DELETE FROM ".$tb." WHERE id='".$id."'";
			$deleteResult = mysqli_query(db_connect(), $delete);

			if($deleteResult) {
                echo"<p class='bg-success'>Delete successful!</p>";
                echo "<script>window.location = 'admin.php';</script>";
				echo"<p class='bg-success'>Delete successful!</p>";
			}
			else {
                echo"<p class='bg-warning'>Delete failed!</p>";
			}
		}
		db_close(db_connect());
	}
?>
<?php include 'back_footer.php'?>