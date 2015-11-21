<!doctype html>
<?php if(!empty($_POST['email']) ){
$name = $_POST['name'];
$email = $_POST['email'];
$message = $_POST['message'];
 
$to = 'support@homstr.com';
$subject = "New message from HOMSTR- Contact Page";
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
<html ng-app="storeApp">
	<?php 
		include("inc/head.php");
	?>
	<title>Homstr | Contact Us</title>
<body class="home blog list-view full-width footer-widgets grid site" onload="initialize1()">
	<header id="masthead" class="site-header" role="banner">
		<div class="header-main">
			<h1 class="site-title"><a href="index.php" rel="home"><img src="img/logo.png" alt="Homstr"></a></h1>

			<div class="search-toggle">
				<a href="#search-container" class="screen-reader-text" aria-expanded="false" aria-controls="search-container">Search</a>
			</div>

			<nav id="primary-navigation" class="site-navigation primary-navigation" role="navigation">
				<button class="menu-toggle">Primary Menu</button>
				<a class="screen-reader-text skip-link" href="#content">Skip to content</a>
				<div class="menu-top-container">
					<ul id="primary-menu" class="nav-menu">
						<li id="menu-item-8" class="menu-item menu-item-type-custom menu-item-object-custom  menu-item-home menu-item-8"><a href="index.php">Home</a></li>
						<li id="menu-item-42" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-42"><a href="http://blog.homstr.com">Blog</a></li>
						<li id="menu-item-7" class=" menu-item menu-item-type-post_type menu-item-object-page menu-item-7"><a href="aboutus.php">About Us</a></li>
						<li id="menu-item-37" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-37"><a href="faq.php">FAQ</a></li>
						<li id="menu-item-32" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-32  current-menu-item current_page_item"><a href="contactus.php">Contact Us</a></li>
					</ul>
				</div>			
			</nav>
		</div>

		<div id="search-container" class="search-box-wrapper hide">
			<div class="search-box">
				<form name="search-form3" id="searchform3" action="search.php" method="get">
							<div class="input-group">
								<input autocomplete="off" name="search" id="autocomplete3" placeholder="Search Apartments and Homes..." class="form-control input-lg" style="border: 2px solid rgb(88, 113, 218);" type="text">
								<span class="input-group-btn">
									<a class="btn btn-store" onclick="$('form').submit();" style="font-size: 19px; background: rgb(0, 0, 0) none repeat scroll 0% 0%; color: rgb(255, 255, 255);">Go</a>
								</span>
							</div>
						
				</form>
			</div>
		</div>
	</header>

<div id="main" class="site-main">

<div id="main-content" class="main-content">
<div id="primary" class="content-area">
		<div id="content" class="site-content" role="main">

			
<article id="post-15" class="post-15 page type-page status-publish hentry">
	<header class="entry-header"><h1 class="entry-title">Contact Us</h1></header><!-- .entry-header -->
	<div id="mobilepagebody" class="entry-content">
		<div class="col-xs-12 col-sm-12 col-md-4 contact-info cta-message wow fadeInLeft">
<address><strong>Homstr</strong><br>
support@homstr.com</address>
</div>
<div class="col-xs-12 col-sm-12 col-md-8 wow fadeInUp"><div role="form" class="wpcf7" id="wpcf7-f23-p28-o1" dir="ltr">
<form action="<?php echo $_SERVER['PHP_SELF']?>" method="post" id="contact-form">
					<div class="row">
						
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
				</form></div></div>	</div><!-- .entry-content -->
</article><!-- #post-## -->

		</div><!-- #content -->
	</div><!-- #primary -->
	</div><!-- #main-content -->



		</div>
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