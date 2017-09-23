<?php
/**
 * Header
 *
 * @package takeoff
 */
?><!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>

<meta charset="<?php bloginfo( 'charset' ); ?>">
<meta name="viewport" content="width=device-width, initial-scale=1">
<link rel="profile" href="http://gmpg.org/xfn/11">
<meta http-equiv="X-UA-Compatible" content="IE=edge" />

<?php
/**
 * title element
 * if front page, display the blog name (usually the company name)
 * otherwise render the wp_title() and append the blog name
 */
?>
<title><?php is_front_page() ? bloginfo('name') : wp_title(' - ' . get_bloginfo('name'), true, 'right'); ?></title>

<?php wp_head(); ?>
	<!--Extra Theme Styles-->
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/style.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/fonts.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/lightSlider.min.css" />
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/animate.css" />
	<link href='http://fonts.googleapis.com/css?family=Roboto+Slab:300,400,700|Raleway:400,500,600,700' rel='stylesheet' type='text/css'>

    <!-- HTML5 Shim and Respond.js IE8 support of HTML5 elements and media queries -->
    <!-- box-navy: Respond.js doesn't work if you view the page via file:// -->
    <!--[if lt IE 9]>
      <script src="https://oss.maxcdn.com/html5shiv/3.7.2/html5shiv.min.js"></script>
      <script src="https://oss.maxcdn.com/respond/1.4.2/respond.min.js"></script>
    <![endif]-->
</head>

<body <?php body_class(); ?>>
	<!-- Preloader -->
	<div class="preloader">
		<div>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
			<span></span>
		</div>
	</div>
	<!-- //Preloader -->
	<!-- Header -->
	<header class="header" role="banner">
		<div class="wrap">
			<!-- Logo -->
			<a href="<?php echo home_url(); ?>"" title="<?php bloginfo('name'); ?>" class="logo"><img src="<?php the_field('options_logo', 'option'); ?>"></a>
			<!-- //Logo -->
			
			<!-- Primary menu -->
			<nav class="main-nav" role="navigation">
				<ul class="jetmenu" id="jetmenu">
					<li><a href="<?php echo get_permalink(ABOUT_US); ?>"><?php echo get_the_title(ABOUT_US); ?></a></li>
					<li><a href="#"><?php echo get_the_title(OUR_MENU); ?></a>
						<div class="megamenu full-width">
							<div class="wrap">
								<div class="row">
									<div class="col one-fourth">
										<a href="<?php echo get_permalink(BREAKFAST_MENU); ?>">
											<img src="<?php bloginfo('template_directory'); ?>/images/breakfast.jpg" alt="" />
											<span><?php echo get_the_title(BREAKFAST_MENU); ?></span>
										</a>
									</div>
									
									<div class="col one-fourth">
										<a href="<?php echo get_permalink(MAIN_MENU); ?>">
											<img src="<?php bloginfo('template_directory'); ?>/images/main-menu.jpg" alt="" />
											<span><?php echo get_the_title(MAIN_MENU); ?></span>
										</a>
									</div>
									
									<div class="col one-fourth">
										<a href="<?php echo get_permalink(DINNER_MENU); ?>">
											<img src="<?php bloginfo('template_directory'); ?>/images/dinner.jpg" alt="" />
											<span><?php echo get_the_title(DINNER_MENU); ?></span>
										</a>
									</div>
									
									<div class="col one-fourth">
										<a href="<?php echo get_permalink(PIZZA_MENU); ?>">
											<img src="<?php bloginfo('template_directory'); ?>/images/pizza.jpg" alt="" />
											<span><?php echo get_the_title(PIZZA_MENU); ?></span>
										</a>
									</div>
								</div>
							</div>
						</div>
					</li>
					<li><a href="<?php echo get_permalink(SPECIALS); ?>"><?php echo get_the_title(SPECIALS); ?></a></li>
					<li><a href="<?php echo get_permalink(VISIT); ?>"><?php echo get_the_title(VISIT); ?></a></li>
				</ul>
			</nav>
			<!-- //Primary menu -->
		</div>
	</header>
	<!-- //Header -->

