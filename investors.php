<!doctype html>
<?php if(!empty($_POST['email']) ){
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
 
$to = 'support@homstr.com';
$subject = "New message from HOMSTR - Investors Page";
$message = 'FROM: '.$name.'
Email: '.$email.'
Message: '.$message;
$headers = 'From:'.$email. "\r\n";
 
if (filter_var($email, FILTER_VALIDATE_EMAIL)) { // this line checks that we have a valid email address
mail($to, $subject, $message, $headers); //This method sends the mail.
$msg=1;

}else{
	$msg=2;

}
}
require_once("library/GMaps.php");

?>
<html ng-app="storeApp">
	<head>
		<title>Homstr - Investors</title>
		<meta charset="utf-8">
		<meta name="description" content="Homstr is the online resource to find out details about a home or neighborhood that you wouldn't know without living there yourself. ">
		<meta name="author" content="HOMSTR.COM">
		<meta property="og:image"content="img/timmyp-HD-transprent.png" />
		<meta name="viewport" content="width=device-width, minimum-scale=1.0, maximum-scale=1.0, user-scalable=no">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.1/css/bootstrap.min.css">
		<link rel="stylesheet" href="css/superslides.css">
		<link rel="stylesheet" href="css/style.css">
		<link rel="stylesheet" href="css/font-awesome.min.css">
		<link rel="stylesheet" href="css/icons.css">
		<link rel="stylesheet" href="css/animate.min.css">
		<link rel="stylesheet" href="css/blue.css" class="colors">
		<link rel="shortcut icon" href="img/ico/32.png" sizes="32x32" type="image/png"/>
		<link rel="apple-touch-icon-precomposed" href="img/ico/32.png" type="image/png"/>
		<link rel="apple-touch-icon-precomposed" sizes="72x72" href="img/ico/32.png" type="image/png"/>
		<link rel="apple-touch-icon-precomposed" sizes="120x120" href="img/ico/32.png" type="image/png"/>
		<link rel="apple-touch-icon-precomposed" sizes="152x152" href="img/ico/32.png" type="image/png"/>
		<script src="https://maps.googleapis.com/maps/api/js?v=3.exp&libraries=places"></script>
<!--<iframe width="600" height="450" frameborder="0" style="border:0"
src="https://www.google.com/maps/embed/v1/search?q=chitkarauniversity&key=AIzaSyB9nEVCTC5rzU98EcBqnbyic_c6WUDeNDI"></iframe>-->
		<!--[if lt IE 9]>
			<script src="https://oss.maxcdn.com/libs/html5shiv/3.7.0/html5shiv.js"></script>
			<script src="https://oss.maxcdn.com/libs/respond.js/1.4.2/respond.min.js"></script>
		<![endif]-->
		
	</head>

	<body id="home" onload="initialize1()">
		<div id="main-nav" class="navbar navbar-inverse navbar-fixed-top" role="navigation">
			<div class="container">
				<div class="navbar-header">
					<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
						<span class="icon-bar"></span><span class="icon-bar"></span><span class="icon-bar"></span>
					</button>
					<a class="navbar-brand" href="/">
						<img id="navlogo" src="img/navlogo-green.png" alt="microstore" width="122" height="45">
					</a>

				</div>
				<div class="collapse navbar-collapse">
					<ul id="navigation" class="nav navbar-nav navbar-right text-center">
						<li><a href="/">Home</a></li>
						<li><a href="partners.php">Partners</a></li>
						<li><a href="faq.php">FAQ</a></li>
						<li><a href="aboutus.php">About Us</a></li>
						<li><a href="contactus.php">Contact Us</a></li>
					</ul>
				</div>

			</div>
		</div>


		

		<section id="contact" class="gray-bg padding-top-bottom abouttop contactus">
			<div class="container">
				<header class="section-header text-center">
					<h1><strong>Contact</strong></h1>
					<p></p>
				</header>
				<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" id="contact-form">
					<div class="row">
						<div class="col-xs-12 col-sm-12 col-md-4 contact-info cta-message wow fadeInLeft">
							<address>
								Want to invest in the Homstr team? Please fill out the form to the right and we'll contact you soon to setup a time to speak.
							</address>
						</div>	
						
						<div class="col-xs-12 col-sm-12 col-md-8 wow fadeInUp" >
							<?php 
								if (!empty($msg)){
										
										if($msg==1){
											echo "<p style='color: green;'>Your email was sent!</p>"; // success message
										}
										else{
											if($msg==2){
											echo "<p style='color: red;'>Invalid Email, please provide an correct email.</p>";	
											}
											else{
												echo "<p style='color: red;'>Your message is not sent.</p>";	
											}
										}
								}
							?>
							
							<div id="ContForm">
							<div class="form-group">
								<label class="control-label" for="contact-name">Name</label>
								<div class="controls">
									<input id="name" name="name" placeholder="Your name" class="form-control input-lg requiredField" type="text" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label" for="contact-mail">Email</label>
								<div class=" controls">
									<input id="email" name="email" placeholder="Your email" class="form-control input-lg requiredField" type="email" required>
								</div>
							</div>
							<div class="form-group">
								<label class="control-label" for="contact-message"> Message</label>
								<div class="controls">
									<textarea id="message" name="message" placeholder="Your message" class="form-control input-lg requiredField" rows="5"required ></textarea>
								</div>
							</div>
							<p>
								<input name="submit" type="submit" value="Send Message" class="btn btn-store btn-block" /></p>
							</div>	
							
						</div>
					</div>
				</form>
			</div>
		</section>
		<div class="contactfooter">
		<?php include('inc/footer.php'); ?>
		</div>
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-62333800-1', 'auto');
            ga('send', 'pageview');

        </script>
	</body>
</html>
</html>