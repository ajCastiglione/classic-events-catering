<!doctype html>

<!--[if lt IE 7]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8 lt-ie7"><![endif]-->
<!--[if (IE 7)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9 lt-ie8"><![endif]-->
<!--[if (IE 8)&!(IEMobile)]><html <?php language_attributes(); ?> class="no-js lt-ie9"><![endif]-->
<!--[if gt IE 8]><!-->
<html <?php language_attributes(); ?> class="no-js">
<!--<![endif]-->

<head>
	<meta charset="utf-8">

	<?php // force Internet Explorer to use the latest rendering engine available ?>
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>
		<?php wp_title(''); ?>
	</title>

	<?php // mobile meta (hooray!) ?>
	<meta name="HandheldFriendly" content="True">
	<meta name="MobileOptimized" content="320">
	<meta name="viewport" content="width=device-width, initial-scale=1" />

	<?php // icons & favicons (for more: http://www.jonathantneal.com/blog/understand-the-favicon/) ?>
	<link rel="apple-touch-icon" href="<?php echo get_template_directory_uri(); ?>/library/images/apple-touch-icon.png">
	<link rel="icon" href="<?php echo get_template_directory_uri(); ?>/favicon.png">
	<!--[if IE]>
			<link rel="shortcut icon" href="<?php echo get_template_directory_uri(); ?>/favicon.ico">
		<![endif]-->
	<?php // or, set /favicon.ico for IE10 win ?>
	<link rel="apple-touch-icon" sizes="180x180" href="<?php echo site_url(); ?>/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="<?php echo site_url(); ?>/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="<?php echo site_url(); ?>/favicon-16x16.png">
	<link rel="manifest" href="<?php echo site_url(); ?>/site.webmanifest">
	<link rel="mask-icon" href="<?php echo site_url(); ?>/safari-pinned-tab.svg" color="#5bbad5">
	<meta name="msapplication-TileColor" content="#ffffff">
	<meta name="theme-color" content="#ffffff">
	
	<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>">

	<!--external stylesheets / fonts / etc...-->
	<link href="https://fonts.googleapis.com/css?family=Playfair+Display:400,700,700i" rel="stylesheet">
	<link rel="stylesheet" href="https://use.fontawesome.com/releases/v5.0.13/css/all.css" integrity="sha384-DNOHZ68U8hZfKXOrtjWvjxusGo9WQnrNx2sqG0tfsghAvtVlRW3tvkXWZh58N9jp" crossorigin="anonymous">

	<?php // wordpress head functions ?>
	<?php wp_head(); ?>
	<?php // end of wordpress head ?>

	<?php // drop Google Analytics Here ?>
	<!-- Global site tag (gtag.js) - Google Analytics -->
	<script defer async src="https://www.googletagmanager.com/gtag/js?id=UA-129380133-2"></script>
	<script defer async>
		window.dataLayer = window.dataLayer || [];
		function gtag(){dataLayer.push(arguments);}
		gtag('js', new Date());

		gtag('config', 'UA-129380133-2');
	</script>
	<?php // end analytics ?>

	<!-- Mailchimp integration -->
	<script defer async id="mcjs">!function(c,h,i,m,p){m=c.createElement(h),p=c.getElementsByTagName(h)[0],m.async=1,m.src=i,p.parentNode.insertBefore(m,p)}(document,"script","https://chimpstatic.com/mcjs-connected/js/users/4f32d351af933c23697b65500/9b65b99900056d78ce2458209.js");</script>

</head>

<body <?php body_class(); ?> itemscope itemtype="http://schema.org/WebPage">

	<div id="container">

		<header class="header" role="banner" itemscope itemtype="http://schema.org/WPHeader">

			<div id="inner-header" class="cf">

				<div class="logo-container">
					<a href="<?php echo home_url(); ?>" rel="nofollow">
						<img src="<?php echo get_template_directory_uri();?>/library/images/logo.png" id="logo" class="h1" itemscope itemtype="http://schema.org/Organization">
					</a>
				</div>

				<div class="nav-container">
					<nav role="navigation" itemscope itemtype="http://schema.org/SiteNavigationElement">
						<?php wp_nav_menu(array(
    					         'container' => false,                           // remove nav container
    					         'container_class' => 'menu cf',                 // class of container (should you choose to use it)
    					         'menu' => __( 'The Main Menu', 'bonestheme' ),  // nav name
    					         'menu_class' => 'nav top-nav cf',               // adding custom nav class
    					         'theme_location' => 'main-nav',                 // where it's located in the theme
    					         'before' => '',                                 // before the menu
        			               'after' => '',                                  // after the menu
        			               'link_before' => '',                            // before each link
        			               'link_after' => '',                             // after each link
        			               'depth' => 0,                                   // limit the depth of the nav
    					         'fallback_cb' => 'bones_main_nav_fallback'                             // fallback function (if there is one)
						)); ?>

						<?php // this is the fallback for header menu
						function bones_main_nav_fallback() {
							wp_page_menu( array(
								'show_home' => true,
								'menu_class' => 'nav top-nav cf',      // adding custom nav class
								'include'     => '',
								'exclude'     => '',
								'echo'        => true,
								'link_before' => '',                            // before each link
								'link_after' => ''                             // after each link
							) );
						}
					?>
					</nav>
				</div>

			</div>

		</header>