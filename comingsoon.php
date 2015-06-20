<!DOCTYPE html>
<html lang="en">
  <head>
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1" />
	<title>Console Wars</title>
		<link href='http://fonts.googleapis.com/css?family=Open+Sans:400italic,600italic,700italic,400,600,300,700,800' rel='stylesheet' type='text/css'>
	    <link href='http://fonts.googleapis.com/css?family=Montserrat:400,700' rel='stylesheet' type='text/css'>
		<link href="css/reset.css" media="screen" rel="stylesheet">
		<link href="css/style.css" media="screen" rel="stylesheet">
	    <script type="text/javascript" src="js/jquery.min.js"></script>
</head>
<body>

    <div class="container">
        <header>
            <h1>Our website is Coming Soon</h1>
        </header>

        <section>
            <h2>WE APOLOGIZE FOR INCONVENIENCE</h2>

            <p class="details">YOU NEED TO WAIT...</p>

            <div id="counter"></div>

            <p class="details">SUBSCRIBE TO OUR NEWSLETTER</p>

            <div id="subscribe">
                <form action="" id="subscribe-form" method="post" name=
                "newsletter-form">
                    <p class="form-field"><input id="subcribe_email" name=
                    "subscribe_email" placeholder="Your email" type="email"
                    value=""></p>

                    <p class="form-submit"><input id="subscribe_submit" name=
                    "subscribe_submit" type="submit" value="Notify Me"></p>
                </form>
            </div>
        </section>

        <footer>
            <a href="" target="_blank">Copyright&copy 2014-<?php echo date("Y"); ?></a>
        </footer>
    </div>
	<script type="text/javascript" src="js/jquery.countdown.min.js"></script>
	<script>
    $(document).ready(function() {
/* Change the launch date according to the date you want to set.
Please take note that months ranges from 0-11 like an array setup. 
*/      
        var launchdate = new Date(2015, 6 - 1, 21);
        $('#counter').countdown({
            until: launchdate
        });
    })(jQuery);
	</script>
	

</body>
</html>