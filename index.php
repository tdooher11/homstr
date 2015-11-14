<!doctype html>
<?php 
require_once("library/GMaps.php");
?>
<html ng-app="storeApp">
	<?php 
		include("inc/head.php");
	?>
		<title>Homstr: Move With Confidence</title>

<body class="home blog list-view full-width footer-widgets grid" onload="initialize1()">
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
						<li id="menu-item-8" class="menu-item menu-item-type-custom menu-item-object-custom current-menu-item current_page_item menu-item-home menu-item-8"><a href="index.php">Home</a></li>
						<li id="menu-item-42" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-42"><a href="http://blog.homstr.com">Blog</a></li>
						<li id="menu-item-7" class="menu-item menu-item-type-post_type menu-item-object-page menu-item-7"><a href="aboutus.php">About Us</a></li>
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


<div id="main-content" class="main-content">
<section id="about" class="aboutT">
			<div class="container">
				<div class="row">
					<div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft">
						<header class="section-header cta-message">
							<div style="" class="fluid-width-video-wrapper"><video controls="" autoplay="" height="100%" width="100%">
  <source src="http://www.huilesmaroc.com/order.mp4" type="video/mp4">
Your browser does not support the video tag.
</video></div><h1 class="aboutTitle"><i class="fa fa-thumbs-o-up"></i> What Is Homstr? </h1>
							
								<p class="textABout"><strong>Homstr</strong> is an online community of people who share stories, opinions, and dialogue about the homes and neighborhoods they currently or previously lived in.  The goal is to give people looking for their next home a resource to obtain details about the prospective home and neighborhood that they wouldn't know without living there themselves.  We will accomplish this goal by collecting stories, opinions, and dialogue between current, past, and future residents on their homes and neighborhoods.  So what are you waiting for?  Start searching the homes you’ve lived in and share your experience!</p>
							
						</header>
						
					</div>
                    <div class="col-md-6 col-sm-6 col-xs-12 wow fadeInLeft">
							<div id="content-sidebar" class="content-sidebar widget-area" role="complementary">
	<aside id="text-4" class="widget widget_text"><h1 class="widget-title">What Do People Use Homstr For?</h1>			<div class="textwidget"><ul class="bulletLis">
	<li>Share stories to add to the untold history of the home – from remodels to a child’s first home</li>
	<li>Share their personal experience of the home to provide other users with information about the home that you wouldn’t know without living there yourself</li>
	<li>Connect with current, past, or potential neighbors to improve neighborhood cohesiveness, reconnect and understand what the neighborhood is like before they sign a lease or closing docs</li>
	<li>Keep landlords and property managers honest – who would rent from someone who never fixes things or takes your deposit without justification?</li>
	<li>Research their next home by reading reviews and joining conversations about <em>individual </em>homes – no other site offers a forum for reviews on individual homes</li>
	<li>Get up to the minute real estate trends</li>
</ul>
– no other site offers a forum for reviews on individual homes</div>
		</aside></div><!-- #content-sidebar -->
						<form name="search-form" id="searchform" action="search.php" method="get" class="col-md-12  col-sm-12 ng-pristine ng-valid">
						<div class="input-group">
							<input autocomplete="off" name="search" id="autocomplete" placeholder="Search by address, neighborhood, zip, or city" class="form-control input-lg" style="border: 2px solid rgb(88, 113, 218);" type="text">
							<span class="input-group-btn">
								<a class="btn btn-store" onclick="$('form').submit();" style="font-size: 19px; background: rgb(0, 0, 0) none repeat scroll 0% 0%; color: rgb(255, 255, 255);">Go</a>
							</span>
						</div>
					</form>
					</div>
			</div>
		</div>
</section>
<section id="search">
		<div class="container">
				<div class="row">
			<div class="col-md-3 col-sm-3 col-xs-12">
			 <ul class="social-links text-center">
                            <li><a href="https://twitter.com/MYHOMSTR" target="_blank"><i class="icon-twitter"></i></a></li>
                            <li><a href="https://www.facebook.com/MYHOMSTR/" target="_blank"><i class="icon-facebook" ></i></a></li>
                            <li><a href="https://plus.google.com/106376949611633563032" target="_blank"><i class="icon-googleplus"></i></a></li>
                            <li><a href="http://www.linkedin.com/company/homstr" target="_blank"><i class="fa fa-linkedin"></i></i></a></li>
                        </ul>
						
<?php // get_sidebar('news'); ?>
			</div>
			<div class="col-md-6 col-sm-6 col-xs-12">
			
					<?php //get_sidebar('reviews'); ?>
					<aside class="review-section">
                    <div id="disqus_thread"></div>
                </aside>
                <script type="text/javascript">
                    /* * * CONFIGURATION VARIABLES * * */
                    // Required: on line below, replace text in quotes with your forum shortname
                    var disqus_shortname = 'homstr';

                    /* * * DON'T EDIT BELOW THIS LINE * * */
                    (function () {
                        var dsq = document.createElement('script');
                        dsq.type = 'text/javascript';
                        dsq.async = true;
                        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                    })();
                </script>


                <noscript>Please enable JavaScript to view the <a href="https://disqus.com/?ref_noscript" rel="nofollow">comments powered by Disqus.</a></noscript>

					<script type="text/javascript">
                    /* * * CONFIGURATION VARIABLES * * */
                    // Required: on line below, replace text in quotes with your forum shortname
                    var disqus_shortname = 'homstr';

                    /* * * DON'T EDIT BELOW THIS LINE * * */
                    (function () {
                        var dsq = document.createElement('script');
                        dsq.type = 'text/javascript';
                        dsq.async = true;
                        dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js';
                        (document.getElementsByTagName('head')[0] || document.getElementsByTagName('body')[0]).appendChild(dsq);
                    })();
                </script>
			</div>
			<div class="col-md-3 col-sm-3 col-xs-12">
			
				<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
				<!-- Maghreb300x600 -->
				<ins class="adsbygoogle"
					 style="display:inline-block;width:300px;height:600px"
					 data-ad-client="ca-pub-6169933744013135"
					 data-ad-slot="9440081813"></ins>
				<script>
				(adsbygoogle = window.adsbygoogle || []).push({});
				</script>
			<?php //get_sidebar('ads'); ?></div>
			</div>
				</div>
		</section>

		
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