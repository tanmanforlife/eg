<!doctype html>

<!--[if lt IE 7]> <html class="no-js lt-ie9 lt-ie8 lt-ie7" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 7]>    <html class="no-js lt-ie9 lt-ie8" <?php language_attributes(); ?>> <![endif]-->
<!--[if IE 8]>    <html class="no-js lt-ie9" <?php language_attributes(); ?>> <![endif]-->
<!--[if gt IE 8]><!--> <html <?php language_attributes(); ?>> <!--<![endif]-->

	<head>
        <?php if (is_page( 10048 )) { ?>
            <!-- Google Analytics Content Experiment code -->
            <script>function utmx_section(){}function utmx(){}(function(){var
            k='23105665-4',d=document,l=d.location,c=d.cookie;
            if(l.search.indexOf('utm_expid='+k)>0)return;
            function f(n){if(c){var i=c.indexOf(n+'=');if(i>-1){var j=c.
            indexOf(';',i);return escape(c.substring(i+n.length+1,j<0?c.
            length:j))}}}var x=f('__utmx'),xx=f('__utmxx'),h=l.hash;d.write(
            '<sc'+'ript src="'+'http'+(l.protocol=='https:'?'s://ssl':
            '://www')+'.google-analytics.com/ga_exp.js?'+'utmxkey='+k+
            '&utmx='+(x?x:'')+'&utmxx='+(xx?xx:'')+'&utmxtime='+new Date().
            valueOf()+(h?'&utmxhash='+escape(h.substr(1)):'')+
            '" type="text/javascript" charset="utf-8"><\/sc'+'ript>')})();
            </script><script>utmx('url','A/B');</script>
            <!-- End of Google Analytics Content Experiment code -->
        <?php } ?>
        
		<meta charset="utf-8">

		<title><?php wp_title(''); ?></title>

		<!-- Google Chrome Frame for IE -->
		<meta http-equiv="X-UA-Compatible" content="IE=edge,chrome=1">

		<!-- mobile meta -->
		<meta name="HandheldFriendly" content="True">
		<meta name="MobileOptimized" content="320">
		<meta name="viewport" content="width=device-width, initial-scale=1.0"/>

		<!-- icons & favicons -->
		<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-icon-touch.png">
		<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
		<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
		<meta name="msapplication-TileColor" content="#f01d4f">
		<meta name="msapplication-TileImage" content="<?php echo get_template_directory_uri(); ?>/library/images/win8-tile-icon.png">

  	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

		<?php wp_head(); ?>

		<!-- Drop Google Analytics here -->
        <!-- USING INSIGHTS PLUGIN, so disabling manual GA install here

        -->
		<!-- end analytics -->

		<!-- fb general website tracking pixel -->
		<script>(function() {
		  var _fbq = window._fbq || (window._fbq = []);
		  if (!_fbq.loaded) {
		    var fbds = document.createElement('script');
		    fbds.async = true;
		    fbds.src = '//connect.facebook.net/en_US/fbds.js';
		    var s = document.getElementsByTagName('script')[0];
		    s.parentNode.insertBefore(fbds, s);
		    _fbq.loaded = true;
		  }
		})();
		window._fbq = window._fbq || [];
		window._fbq.push(['track', '6025534179931', {'value':'0.01','currency':'USD'}]);
		</script>
		<noscript><img height="1" width="1" alt="" style="display:none" src="https://www.facebook.com/tr?ev=6025534179931&amp;cd[value]=0.01&amp;cd[currency]=USD&amp;noscript=1" /></noscript>
		<!-- end fb tracking -->


		<script type="text/javascript" src="https://gumroad.com/js/gumroad.js"></script>
	</head>
	<body <?php body_class(); ?>>

	<div class="off-canvas-wrap" data-offcanvas>
		<div class="inner-wrap">
			<div id="container">

				<div class="ajax-loader"></div>
			
				<header class="header" role="banner">


						
						 <?php get_template_part( 'partials/nav', 'offcanvas-sales' ); ?>



				</header> <!-- end header -->