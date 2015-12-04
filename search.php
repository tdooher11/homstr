<?
ob_start (); // Buffer output
?>
    <!doctype html>
    <html>
        <?php
        include("inc/head.php");
        ?>
    <title>
        <!--TITLE-->
    </title>
    <script type="text/javascript" src="http://w.sharethis.com/button/buttons.js"></script>
    <script type="text/javascript">stLight.options({publisher: "e89f9ca1-437b-4162-a604-6e9046fdfaac", doNotHash: false, doNotCopy: false, hashAddressBar: false});</script>
    <script type="text/javascript">(function(d, t, e, m){
            window.RW_Async_Init = function(){

                RW.init({
                    huid: "223054",
                    uid: "dbf6031365873c36e6acae469b71f7f5",
                    source: "website",
                    options: {
                        "size": "medium",
                        "style": "oxygen"
                    }
                });
                RW.render();
            };
            // Append Rating-Widget JavaScript library.
            var rw, s = d.getElementsByTagName(e)[0], id = "rw-js",
                l = d.location, ck = "Y" + t.getFullYear() +
                    "M" + t.getMonth() + "D" + t.getDate(), p = l.protocol,
                f = ((l.search.indexOf("DBG=") > -1) ? "" : ".min"),
                a = ("https:" == p ? "secure." + m + "js/" : "js." + m);
            if (d.getElementById(id)) return;
            rw = d.createElement(e);
            rw.id = id; rw.async = true; rw.type = "text/javascript";
            rw.src = p + "//" + a + "external" + f + ".js?ck=" + ck;
            s.parentNode.insertBefore(rw, s);
        }(document, new Date(), "script", "rating-widget.com/"));
    </script>
    <script>    //initialize google map
        var map;
        var panorama;
        var lat;
        var lng;
        var urlNew;
        var latlng = new google.maps.LatLng(40.729884, -73.990988);

        function initialize() {

            geocoder = new google.maps.Geocoder();

            var addressurlencoded;

            // Set up the map
            var mapOptions = {
                zoom: 19,
                mapTypeId: google.maps.MapTypeId.SATELLITE,
                streetViewControl: true
            };

            var address = document.getElementById('address').innerHTML;

            geocoder.geocode( { 'address': address}, function(results, status) {
                if (status == google.maps.GeocoderStatus.OK) {
                    map.setCenter(results[0].geometry.location);
                    lat=results[0].geometry.location.lat;
                    lng=results[0].geometry.location.lng;
                    address = results[0].formatted_address;
                    var currenturl = document.URL;
                    if (!window.location.origin) {
                        window.location.origin = window.location.protocol + "//" + window.location.hostname + (window.location.port ? ':' + window.location.port: '');
                    }
                    var base_url = window.location.origin;
                    console.log("address: " + address);
                    console.log("base url: " + base_url);
                    console.log("document url: " + currenturl);
                    console.log("base url plus encoded address: "+base_url+'/search.php?search='+encodeURI(address));
                    latlng = results[0].geometry.location;

                    panorama = map.getStreetView();
                    panorama.setPosition(latlng);
                    panorama.setVisible(true);
                    panorama.setOptions({
                        addressControl: true,
                        'addressControlOptions': {
                            'position': google.maps.ControlPosition.TOP_RIGHT
                        }
                    });
                    panorama.setPov(/** @type {google.maps.StreetViewPov} */({
                        heading: 265,
                        pitch: 0
                    }));

                    //document.title=address;
                    $('#mainaddress').text(address);
                    urlNew=base_url+'/search.php?search='+encodeURI(address);
                    urlNew=decodeURIComponent(urlNew);
                    urlNew=urlNew.replace(/\s/g, '');
                    currenturl=decodeURIComponent(currenturl);
                    currenturl=currenturl.replace(/\s/g, '');
                    if(currenturl!=urlNew){
                        document.location.href='/search.php?search='+address;
                    }

                    var marker = new google.maps.Marker({
                        map: map,
                        position: results[0].geometry.location
                    });
                } else {
                    alert('Geocode was not successful for the following reason: ' + status);
                }
            });

            map = new google.maps.Map(document.getElementById('map-canvas'),
                mapOptions);

            // Setup the markers on the map
            var marker = new google.maps.Marker({
                position: latlng,
                map: map
            });
        }

        function toggleStreetView() {
            var toggle = panorama.getVisible();
            if (toggle == false) {
                panorama.setVisible(true);
            } else {
                panorama.setVisible(false);
            }
        }

        google.maps.event.addDomListener(window, 'load', initialize);

    </script>
    <body class="home blog list-view full-width footer-widgets grid site" onload="initialize1()">
    <?php
    include("inc/navbar.php");
    ?>
    <div id="main" class="site-main">
        <div id="main-content" class="main-content">
            <section id="primary" class="content-area">
                <section id="hero" class="light-typo " style="margin-top: 50px; margin-bottom: 10px;">
                    <div class="container">
                        <div class="row">
                            <div class="col-lg-1 col-md-1  col-sm-1 col-xs-12 wow fadeInUp address">
                                <?php
                                $matchAddress	=	$_GET['search'];
                                echo '<div id="address">'.$matchAddress.'</div>';
                                echo '<div id="geocodedaddress"></div>';
                                ?>
                            </div>
                        </div>
                    </div>
                </section>
                <section class="gray-bg ng-scope">
                    <div class="container mapview">
                        <div class="col-md-8 col-sm-8 col-xs-12 reviewSec">
                            <div class="search-inner">
                                <div class="search-section1 top wow fadeInDown">
                                    <aside class="inner-slider">
                                        <div id="map-canvas" style="height: 400px;"></div>
                                    </aside>
                                    <div class="clr"></div>
                                </div>
                                <br/>
                                <h1 id="mainaddress"></h1>
                                <span class='st_facebook_large' displayText='Facebook'></span>
                                <span class='st_twitter_large' displayText='Tweet'></span>
                                <span class='st_googleplus_large' displayText='Google +'></span>
                                <span class='st_email_large' displayText='Email'></span>
                                <div class="search-section2 top wow fadeInDown">
                                    <h1>
                                        Reviews
                                        <div class="rw-ui-container"></div>
                                    </h1>
                                    <aside class="review-section">
                                        <div id="disqus_thread"></div>
                                    </aside>
                                    <script type="text/javascript">
                                        /* * * CONFIGURATION VARIABLES * * */
                                        // Required: on line below, replace text in quotes with your forum shortname
                                        var disqus_shortname;
                                        if (!window.location.origin) {
                                            window.location.origin = window.location.protocol + "//" + window.location.hostname + (window.location.port ? ':' + window.location.port: '');
                                        }
                                        var base_url = window.location.origin;
                                        console.log(base_url);
                                        if (base_url == 'http://www.homstr.com'){
                                            disqus_shortname = 'homstr';
                                        }else{
                                            disqus_shortname = 'homstrdev';
                                        }
                                        console.log(disqus_shortname);

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
                            </div>
                        </div>
                        <div class="col-md-4 col-sm-4 col-xs-12 sideBar">
                            <div id="content-sidebar" class="content-sidebar widget-area" role="complementary">
                                <aside id="text-5" class="widget widget_text">
                                    <h1 class="widget-title">What Do People Use Homstr For?</h1>
                                    <div class="textwidget">
                                        <ul class="bulletLis">
                                            <li>Share stories to add to the untold history of the home – from remodels to a child’s first home</li>
                                            <li>Share their personal experience of the home to provide other users with information about the home that you wouldn’t know without living there yourself</li>
                                            <li>Connect with current, past, or potential neighbors to improve neighborhood cohesiveness, reconnect and understand what the neighborhood is like before they sign a lease or closing docs</li>
                                            <li>Keep landlords and property managers honest – who would rent from someone who never fixes things or takes your deposit without justification?</li>
                                            <li>Research their next home by reading reviews and joining conversations about <em>individual </em>homes – no other site offers a forum for reviews on individual homes</li>
                                            <li>Get up to the minute real estate trends</li>
                                        </ul>
                                    </div>
                                </aside>
                            </div>
                            <div class="ads">
                                <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
                                <!-- Maghreb300x600 -->
                                <ins class="adsbygoogle"
                                     style="display:inline-block;width:300px;height:600px"
                                     data-ad-client="ca-pub-6169933744013135"
                                     data-ad-slot="9440081813"></ins>
                                <script>
                                    (adsbygoogle = window.adsbygoogle || []).push({});
                                </script>
                            </div>
                        </div>
                    </div>
                    <!--wraper close here-->
                </section>
            </section>
            <!-- #primary -->
        </div>
        <!-- #main-content -->
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
    </body>
</html>
<?
$pageContents = ob_get_contents (); // Get all the page's HTML into a string
ob_end_clean (); // Wipe the buffer

// Replace <!--TITLE--> with $pageTitle variable contents, and print the HTML
echo str_replace ('<!--TITLE-->', $matchAddress, $pageContents);
?>