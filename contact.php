<!-- php header -->
<?php include "partials/header.php"?>

<div class="wrapper">
    <div class="section section-header">
        <div class="parallax pattern-image">
            <img src="img/contact-hero-1.jpg">
            <div class="container">
                <div class="content row">
                        <h1>Contact Us</h1>
                        <p class="section-header-p">We would love to hear from you!
                        </p>
                </div>
            </div>
        </div>
    </div>
</div> 

<div class="container contact-form">
  <form class="well form-horizontal" action=" " method="post"  id="contact_form">
      <fieldset>
      <!-- Form Name -->
      <legend>Contact Us Today!</legend>
      <div class="form-group">
        <label class="col-md-4 control-label">Name</label>  
        <div class="col-md-4 inputGroupContainer">
        <div class="input-group">
        <span class="input-group-addon"><i class="glyphicon glyphicon-user"></i></span>
        <input  name="name" placeholder="Name" class="form-control"  type="text" required>
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label">E-Mail</label>  
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-envelope"></i></span>
        <input name="email" placeholder="E-Mail Address" class="form-control"  type="text" required>
          </div>
        </div>
      </div>

      <!-- Text input-->
      <div class="form-group">
        <label class="col-md-4 control-label">Website or domain name</label>  
        <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-globe"></i></span>
        <input name="website" placeholder="Website or domain name" class="form-control" type="text">
          </div>
        </div>
      </div>

      <div class="form-group">
        <label class="col-md-4 control-label">Project Description</label>
          <div class="col-md-4 inputGroupContainer">
          <div class="input-group">
              <span class="input-group-addon"><i class="glyphicon glyphicon-pencil"></i></span>
                <textarea class="form-control" name="description" placeholder="Project Description" required></textarea>
        </div>
        </div>
      </div>
      <div class="form-group">
        <label class="col-md-4 control-label"></label>
        <div class="col-md-4">
          <button type="submit" name="submit" class="btn btn-primary" >Send <span class="glyphicon glyphicon-send"></span></button>
        </div>
      </div>

      </fieldset>
  </form>
</div>
</div><!-- /.container -->
<?php
    if(isset($_POST["submit"]) AND 
					 $_POST["email"] != "" AND 
					 $_POST["name"] != "" AND  
					 $_POST["description"] != "") {
				
				sendMail($_POST["email"], $_POST["name"], $_POST["description"]);
		}

    function sendMail($email, $name, $description) {
				$to = $email;	
				$subject = "Thanks for contacting us $name";

				$message = " <html> <head> <title>Hello from Boxspring Studios</title> </head>\n";
        $message .= "<img style='display:block; margin:auto; border-radius:50%; width:120px; height:120px' src='https://static.pexels.com/photos/2097/desk-office-pen-ruler.jpg' alt='image'>";
				$message .= "<body> <h2 style='text-align:center; color:#7b2f6f; font-size:20px;'>Hello from Boxspring Studios!</h2>\n";
        $message .= "<body> <p style='text-align:center;'>Hello $name,</p>\n";
        $message .= "<p style='text-align:center;'>Thanks for contacting the team at Boxspring Studios.</p>\n";
				$message .= "<p style='text-align:center;'>The email address that we have for you is $to.</p>\n";
				$message .= "<p style='text-align:center;'>Your project description is: $description</p>\n";
        $message .= "<p style='text-align:center;'>We will get back to you as soon as possible regarding your project.</p>\n";
        $message .= "<p style='text-align:center;'>All the best,</p>\n";
        $message .= "<p style='text-align:center;'>Harriet from Boxpsring Studios</p>\n";
				$message .= "</body> </html>";

				$headers = "MIME-Version: 1.0\r\n";
				$headers .= "Content-type:text/html;charset=UTF-8\r\n";
				$headers .= "From: hello@boxspringstudios.com\r\n";

				$didItSend = mail($to, $subject, $message, $headers);

				if ( $didItSend === true ) {   
					echo '<div class="alert alert-success" role="alert" id="success_message">Success <i class="glyphicon glyphicon-thumbs-up"></i> Thanks for contacting us '.$to.', we will get back to you shortly.</div>';   
				}
				else {  
					echo '<div class="alert alert-warning" role="alert" id="success_message">Failure <i class="glyphicon glyphicon-thumbs-down"></i> Please try again.</div>';   
				}
		}
    
?>

<!-- php footer -->
<?php include "partials/footer.php"?>