<!DOCTYPE html>
<?php
$search = $_GET;
//echo $search;
?>
<html>

    <head>
        <meta charset="utf-8">
        <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1, user-scalable=0"/>
        <meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">
        <title>Residents List :: Home</title>

        <link rel="stylesheet" href="http://dev714.trigma.us/residentslist/css/style.css" type="text/css"/>
        <link rel="stylesheet" href="http://dev714.trigma.us/residentslist/css/jquery.bxslider.css" type="text/css"/>
        <link rel="stylesheet" href="http://dev714.trigma.us/residentslist/css/animate.css"/>
        <link rel="stylesheet" href="http://dev714.trigma.us/residentslist/css/developer.css"/>
        <link rel="icon" href="http://dev714.trigma.us/residentslist/images/favicon.ico" type="image/x-icon"/>
        <link href="http://dev714.trigma.us/residentslist/css/smart_tab.css" rel="stylesheet" type="text/css"></link>
        <script type="text/javascript" src="http://dev714.trigma.us/residentslist/js/jquery-1.11.2.min.js"></script>
        <script type="text/javascript" src="http://dev714.trigma.us/residentslist/js/jquery.smartTab.min.js"></script>
        <script type="text/javascript" src="http://dev714.trigma.us/residentslist/js/jquery.bxslider.js"></script>
        <script type="text/javascript">
            document.createElement('header');
            document.createElement('nav');
            document.createElement('menu');
            document.createElement('section');
            document.createElement('article');
            document.createElement('aside');
            document.createElement('footer');
        </script>
        <script src="http://dev714.trigma.us/residentslist/js/wow.js"></script>


        <script type="text/javascript">

            $(document).ready(function () {
                // Smart Tab
                $('#tabs').smartTab({autoProgress: false, stopOnFocus: true});
            });

            function showST(tab_index) {
                $('#tabs').smartTab('showTab', tab_index);
            }

            $(document).ready(function () {
                $('.bxslider4').bxSlider({
                    pagerCustom: '#bx-pager'
                });
            });

            $(document).ready(function () {
                $('.img').click(function () {
                    $('.mob-menu ul').slideToggle();
                });
            });

            $(document).ready(function () {
                $(window).scroll(function () {
                    var sT = $(this).scrollTop();
                    if (sT >= 100) {
                        $('.overlay').addClass('cambio')
                    } else {
                        $('.overlay').removeClass('cambio')
                    }
                })
            })

            wow = new WOW(
                    {
                        animateClass: 'animated',
                        offset: 100
                    }
            );
            wow.init();
        </script>
    </head>

    <body>
        <div id="container">

            <header class="inner-header">
                <div class="wraper">
                    <div class="overlay">
                        <div class="wraper">
                            <div class="logo">
                                <a href="http://dev714.trigma.us/residentslist/index.php"><img src="http://dev714.trigma.us/residentslist/images/logo.png"></a>
                            </div><!--logo close here-->

                            <div class="header-right">
                                <!-- <div class="top-links">
                                        <ul>
                                                <li><a href="#">about</a></li>
                                                    <li><a href="#">contact</a></li>
                                                    <li><a href="#">login</a></li>
                                                    <li><a href="#">register</a></li>
                                            </ul>
                                    </div><!--top-links close here-->

                                <div class="bottom-links">
                                    <ul>
                                        <li><a class="active" href="http://dev714.trigma.us/residentslist/index.php">Home</a></li>
                                        <li><a href="#">BUY </a></li>
                                        <li><a href="#">Sell</a></li>
                                        <li><a href="#">rent</a></li>
                                        <li><a href="#">mortgage</a></li>
                                    </ul>
                                    <div class="find-agent">
                                        <a href="#"> Find an agent</a>
                                    </div><!--find-agent close here-->
                                </div><!--bottom-links close here-->



                            </div><!--header-right close here-->
                        </div>
                    </div><!--header-main close here-->	



                    <div class="menu mobile">
                        <ul>
                            <li class="img"><img src="http://dev714.trigma.us/residentslist/images/mobile-menu.png">
                                <div class="mob-menu">
                                    <ul style="display: none;">
                                        <li><a href="http://dev714.trigma.us/residentslist/index.php">Home</a></li>
                                        <li><a href="#">Buy</a></li>
                                        <li><a href="#">Sell</a></li>
                                        <li><a href="#">Rent</a></li>
                                        <li><a href="#">Mortgage</a></li>
                                        <li><a href="#">Find an agent</a></li>
                                    </ul>
                                </div><!--mob-menu ends here-->
                            </li>	
                        </ul>
                    </div><!--menu-mobile close here-->

                </div><!--wraper close here-->
            </header>	


            <section>
                <div class="wraper">
                    <div class="search-inner">
                        <form action="search.php" method="get" >
                            <div class="search-main top wow fadeInDown">
                                <input type="text" name="search" value="<?php echo (isset($_GET['search']) ? (strip_tags($_GET['search'])) : ''); ?>" onblur="if (this.value == '')
                                            this.value = 'Search Apartments and Homes...';" onfocus="if (this.value == 'Search Apartments and Homes...')
                                                        this.value = '';" value="Search Apartments and Homes..." class="input-field light-border">
                                <div class="search-icon2"><a onCLick="$('form').submit();">Search</a></div><!--search-icon close here-->
                            </div><!--search-main close here-->
                        </form>
                        <div class="search-section1 top wow fadeInDown" data-wow-delay="0.5s">
                            <h1>California Home Listings</h1>
                            <aside class="inner-slider">
                                <div class="slider-bottom">
                                    <ul class="bxslider4">
                                        
                                        <li class="google-map">
                                            <?php
                                            if (urlencode(strip_tags($_GET['search'])) == 'Search+Apartments+and+Homes...') {
                                                $address = '4369 Ridgecrest Way SE, Port Orchard, WA 98366';
                                            } else {
                                                $address = $_GET['search'];
                                            }
                                            
                                            $Address = urlencode($address);
                                            $request_url = "http://maps.googleapis.com/maps/api/geocode/xml?address=".$Address."&sensor=true";
                                            $xml = simplexml_load_file($request_url) or die("url not loading");
                                            $status = $xml->status;
                                            if ($status=="OK") {
                                                $Lat = $xml->result->geometry->location->lat;
                                                $Lon = $xml->result->geometry->location->lng;
                                                $LatLng = "$Lat,$Lon";
                                            }
                                            
                                            ?>
                                            <iframe width="100%" height="416" frameborder="0" style="border:0"
                                                    src="https://www.google.com/maps/embed/v1/search?q=<?php echo (isset($_GET['search']) ? urlencode(strip_tags($address)) : ''); ?>&key=AIzaSyB9nEVCTC5rzU98EcBqnbyic_c6WUDeNDI"></iframe>
                                                                                                <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d159697.50822838958!2d0.7128624473997872!3d51.28768955883489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47df2d1873486b49%3A0x142ad7c8a749ba22!2sMagpie+Wood%2C+Maidstone%2C+Kent+ME14%2C+UK!5e0!3m2!1sen!2sin!4v1425542132661" width="100%" height="416" frameborder="0" style="border:0"></iframe>-->
                                        </li>
                                        
                                        <?php if (isset($LatLng)) { ?>
                                            <li class="google-map1">
                                            
                                                                                                    <!--                                            https://www.google.com/maps/embed/v1/streetview
                                                                                                      ?key=API_KEY
                                                                                                      &location=46.414382,10.013988
                                                                                                      &heading=210
                                                                                                      &pitch=10
                                                                                                      &fov=35-->
                                            <iframe width="100%" height="416" frameborder="0" style="border:0"
                                                src="https://www.google.com/maps/embed/v1/streetview?location=<?php echo $LatLng; ?>&heading=210&key=AIzaSyB9nEVCTC5rzU98EcBqnbyic_c6WUDeNDI"></iframe>
                                                                                                <!--<iframe src="https://www.google.com/maps/embed?pb=!1m18!1m12!1m3!1d159697.50822838958!2d0.7128624473997872!3d51.28768955883489!2m3!1f0!2f0!3f0!3m2!1i1024!2i768!4f13.1!3m3!1m2!1s0x47df2d1873486b49%3A0x142ad7c8a749ba22!2sMagpie+Wood%2C+Maidstone%2C+Kent+ME14%2C+UK!5e0!3m2!1sen!2sin!4v1425542132661" width="100%" height="416" frameborder="0" style="border:0"></iframe>-->
                                        </li>
                                        <?php } ?>
                                        <li><img src="images/1.jpg"  /> </li>
                                        <li><img src="images/2.jpg"  /></li>
                                        <li><img src="images/3.jpg" /></li>
                                        <li><img src="images/4.jpg"  /> </li>       
                                        <li><img src="images/5.jpg"  /></li>
                                        <!--<li><img src="images/6.jpg" /></li>-->
                                        <!--<li><img src="images/7.jpg" /></li>-->
                                    </ul>

                                    <div id="bx-pager">
                                        <a data-slide-index="0" href=""><img src="https://maps.googleapis.com/maps/api/staticmap?center=<?php echo (isset($address) ? urlencode(strip_tags($_GET['search'])) : ''); ?>&zoom=4&size=107x65" /></a>
                                        <?php if (isset($LatLng)) { ?>
                                        <a data-slide-index="1" href=""><img src="https://maps.googleapis.com/maps/api/streetview?location=<?php echo $LatLng; ?>&heading=210&size=107x65" /></a>
                                        <?php } ?>
                                        <a data-slide-index="2" href=""><img src="images/1-small.jpg" /></a>
                                        <a data-slide-index="3" href=""><img src="images/2-small.jpg" /></a>
                                        <a data-slide-index="4" href=""><img src="images/3-small.jpg" /></a>
                                        <a data-slide-index="5" href=""><img src="images/4-small.jpg" /></a>
                                        <a data-slide-index="6" href=""><img src="images/5-small.jpg" /></a>
                                        <!--<a data-slide-index="5" href=""><img src="images/6-small.jpg" /></a>-->
                                        <!--<a data-slide-index="6" href=""><img src="images/7-small.jpg" /></a>-->
                                        
                                    </div>


                                </div>
                            </aside>
                            <div class="clr"></div>
                            <aside class="facts">
                                <h2>Facts</h2>
                                <ul>
                                    <li>Lot: 0.35 acres</li>
                                    <li>Single Family</li>
                                    <li>Built in 1968</li>
                                    <li>Cooling: Central</li>
                                    <li>Heating: Forced air</li>
                                    <li>Last sold: Dec 2002 for $296,820</li>
                                    <li>Price/sqft: $216</li>
                                    <li>Built in 1968</li>
                                    <li>Cooling: Central</li>
                                    <li>Heating: Forced air</li>
                                </ul>
                            </aside>
                            <div class="clr"></div>
                        </div>

                        <div class="search-section1 top wow fadeInDown" data-wow-delay="0.5s">
                            <h1>Reviews</h1>
                            <!--<div id="disqus_thread"></div>
                            <script type="text/javascript">
                                /* * * CONFIGURATION VARIABLES * * */
                                var disqus_shortname = 'residentslist';
                            
                                /* * * DON'T EDIT BELOW THIS LINE * * */
                                (function() {
                                    var dsq = document.createElement('script'); dsq.type =
                            'text/javascript'; dsq.async = true;
                                    dsq.src = '//' + disqus_shortname + '.disqus.com/embed.js
                            [1]';
                                    (document.getElementsByTagName('head')[0] ||
                            document.getElementsByTagName('body')[0]).appendChild(dsq);
                                })();
                            </script>
                            <noscript>Please enable JavaScript to view the <a
                            href="https://disqus.com/?ref_noscript [2]" rel="nofollow">comments
                            powered by Disqus.</a></noscript> -->
                            <aside class="review-section">
                                <div id="disqus_thread"></div>
                            </aside>
                            <script type="text/javascript">
                                /* * * CONFIGURATION VARIABLES * * */
                                // Required: on line below, replace text in quotes with your forum shortname
                                var disqus_shortname = 'residentslist';

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

                            <!--                            <aside class="review-section">
                                                            <div id="tabs">
                                                                <div class="tab-div">
                                                                    <ul>
                                                                        <li><a href="#tabs-1"><span>Home</span></a></li>
                                                                        <li><a href="#tabs-2"><span>Neighbourhood</span></a></li>
                                                                    </ul>
                                                                </div>
                                                                <div id="tabs-1" class="tabContent" style="display:block;">
                                                                    <img src="images/disqus.jpg" class="disqus-img" />
                                                                </div>
                                                                <div id="tabs-2">
                                                                    <img src="images/disqus.jpg" />
                                                                </div>
                                                            </div>
                                                        </aside>-->
                            <aside class="ads"><img src="images/ads.jpg" class="disqus-img" /></aside>
                        </div>

                    </div>
                </div><!--wraper close here-->
            </section> 		

            <footer  class="top wow fadeInDown" data-wow-delay="0.5s">

                <section class="subfooter">
                    <div class="wraper">
                        <div class="subfootr-inner">
                            <h3>Nearby Cities</h3>
                            <ul>
                                <li><a href="#">Bainbridge Island</a></li>
                                <li><a href="#">Bremerton</a></li>
                                <li><a href="#">Hansville</a></li>
                                <li><a href="#">Kingston</a></li>
                                <li><a href="#">Olalla</a></li>
                            </ul>
                            <a href="#">More >></a>
                        </div>

                        <div class="subfootr-inner">
                            <h3>Nearby ZIP CODES</h3>
                            <ul>
                                <li><a href="#">952355</a></li>
                                <li><a href="#">567574</a></li>
                                <li><a href="#">435643</a></li>
                                <li><a href="#">343255</a></li>
                                <li><a href="#">433546</a></li>
                            </ul>
                            <a href="#">More >></a>
                        </div>

                        <div class="subfootr-inner">
                            <h3>Other PORT ORCHARD Topics</h3>
                            <ul>
                                <li><a href="#">Apartments for Rent in 98366</a></li>
                                <li><a href="#">Houses for Sale in 98366</a></li>
                                <li><a href="#">Houses for Rent in 98366</a></li>
                                <li><a href="#">98366 Real Estate </a></li>
                                <li><a href="#">Port Orchard Condos </a></li>
                            </ul>
                            <a href="#">More >></a>
                        </div>

                    </div>
                </section>

                <section class="subfooter2">
                    <div class="wraper">
                        <ul>
                            <li><a href="#">About</a></li>
                            <li>/</li>
                            <li><a href="#">Jobs</a></li>
                            <li>/</li>
                            <li><a href="#">Help</a></li>
                            <li>/</li>
                            <li><a href="#">Advertise</a></li>
                            <li>/</li>
                            <li><a href="#">Terms of use & Privacy</a></li>
                            <li>/</li>
                            <li><a href="#">Contact Us</a></li>
                        </ul>
                        <p>Copyright &copy; 2015 <a href="#">Residentslist.com.</a> All rights reserved.</p>
                    </div>
                </section>

            </footer>

        </div><!--container close here-->


    </body>
</html>