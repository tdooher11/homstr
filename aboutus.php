<!doctype html>

<html ng-app="storeApp">
	<?php 
		include("inc/head.php");
	?>
	<title>Homstr | About Us</title>

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
						<li id="menu-item-7" class="current-menu-item menu-item menu-item-type-post_type menu-item-object-page menu-item-7 current_page_item"><a href="aboutus.php">About Us</a></li>
						<li id="menu-item-37" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-37"><a href="faq.php">FAQ</a></li>
						<li id="menu-item-32" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-32"><a href="contactus.php">Contact Us</a></li>
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

			
<article id="post-2" class="post-2 page type-page status-publish hentry">
	<header class="entry-header"><h1 class="entry-title">What Is Homstr?</h1></header><!-- .entry-header -->
	<div id="mobilepagebody" class="entry-content">
<p>Founded in 2015 and based in Seattle, WA, Homstr.com is a resource for people to share their opinions of their current and past homes & neighborhoods.

	<p>Using Homstr.com is easy!  Homstr.com allows its community to share stories, opinions, ideas about homes and even connect with neighbors.</p>
        <ul>
        <li type="disc">Remodel a home? Share that project on Homstr.com to increase your home's value</li>
	    <li type="disc">Have a terrible experience with a landlord?  Use Homstr.com to keep landlords and property managers honest!</li>
        <li type="disc">Want a community garden in your neighborhood?  Make it happen by organizing neighbors on Homstr.com!</li>
        <li type="disc">Want to know who is living in the area before you move in?  Connect with residents who have posted reviews near your new home!</li>
        </ul>
	The list of ways to use Homstr.com could go on and on, but we think you get the idea.  For more entertaining content and even some occassional valuable information, please visit our <a href="http://blog.homstr.com"> blog </a>.
		<br><br>
	Please <a href="/contactus.php"> contact us </a> with inquiries, suggestions, comments, requests, or just for the type of encouragement our parents have long since grown tired of giving the Homstr Team.
		<br><br>
	Cheers,
		<br><br>
	The Homstr.com Team
</article><!-- #post-## -->

		</div><!-- #content -->
	</div><!-- #primary -->
	</div><!-- #main-content -->



		</div>
		<?php include('inc/footer.php'); ?></div><!-- #main-content -->
        <script>
            (function(i,s,o,g,r,a,m){i['GoogleAnalyticsObject']=r;i[r]=i[r]||function(){
                (i[r].q=i[r].q||[]).push(arguments)},i[r].l=1*new Date();a=s.createElement(o),
                m=s.getElementsByTagName(o)[0];a.async=1;a.src=g;m.parentNode.insertBefore(a,m)
            })(window,document,'script','//www.google-analytics.com/analytics.js','ga');

            ga('create', 'UA-62333800-1', 'auto');
            ga('send', 'pageview');

        </script>
        <!-- Go to www.addthis.com/dashboard to customize your tools -->
        <!-- Go to www.addthis.com/dashboard to customize your tools -->


	</body>
</html>