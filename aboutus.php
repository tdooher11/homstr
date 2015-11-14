<!doctype html>
<?php 
require_once("library/GMaps.php");
?>
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
	<div class="entry-content">
		<p>In 2013 one of our founders was searching for an apartment to rent and moved into what he thought was the perfect home in the perfect neighborhood. From the ad, the home and neighborhood had everything he wanted: blocks from the beach, parks very nearby, several shops and restaurants within walking distance from the home, and in a place with practically no crime. He viewed the apartment for rent and thought it was perfect so he quickly signed a lease and moved in two weeks later. Once living in the new home he quickly found out several things that he wished he would have known before he signed the lease. For instance, the garbage truck came at 6 am four days a week to service the buildings and businesses nearby. The “cafe” next door was actually a very busy bar that spilled out into the street at least five nights a week until three a.m. Even though the building has a parking garage, he wasn’t aware that the parking wasn’t monitored and would fill up most days; meaning, trying to find a place to park on the street with groceries and a toddler to get inside and a parking ticket if he didn’t get the chance to move his car within two hours. What he learned after he moved in about the home would have prevented him from living there altogether. After this experience he told himself never again and began looking for a resource online that would provide him with information about his next home that he wouldn’t know without living there first. There wasn’t anything. All the information about individual homes was just the same sales oriented bullet points from real estate professionals and property managers everywhere he looked. Determined to never let this happen to anyone again the concept for Homstr was conceived.</p>
<p>With the help of a group of passionate developers and a few private investors, Homstr was born. You can share a story about their past and present homes or neighborhoods – maybe find out who those handprints belong to in your driveway. You can review an individual property or neighborhood – sharing your experience helps other members of the Homstr community with their decision picking their next home. Start a conversation with other members of the Homstr community – maybe even get the opportunity to become acquainted with your future neighbors before you move in.</p>
<p>The goal of Homstr is to eventually provide a unique data source that gives details about the home and neighborhoods that you can’t get anywhere else, or, without living there yourself. We at Homstr believe that, in time, people will approach their decision picking their next home much differently than we do today. Simply put: You wouldn’t purchase a car without the Carfax, so why would you ever pick a place to live without first checking Homstr? We are very excited to recover the untold history of homes and neighborhoods as told by past &amp; present residents. Please don’t hesitate to contact us with any suggestions, feature request, questions, or even words of encouragement as we build this online community together.</p>	</div><!-- .entry-content -->
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