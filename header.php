<?php
/**
 * The header for our theme
 *
 * This is the template that displays all of the <head> section and everything up until <div id="content">
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package egodigitaltest
 */

?>
<!doctype html>
<html <?php language_attributes(); ?>>
<head>
	<meta charset="<?php bloginfo( 'charset' ); ?>">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<link rel="profile" href="https://gmpg.org/xfn/11">

	<?php wp_head(); ?>
</head>

<body <?php body_class(); ?>>
<?php wp_body_open(); ?>
	<div class="wrapper">
	<div class="content">
	<header class="site-header">
		<div class="top-header">
			<div class="inner-page">
				<div class="center-block">FREE U.S. SHIPPING 90-DAY RETURNS</div>
				<div class="right-block">
					<label class="switch">
						<span class="span-lang">He</span>
	  					<input type="checkbox">
	  					<span class="slider round"></span>
	  					<span class="span-lang">En</span>
					</label> 
				</div>
			</div>
		</div>
		<div class="bottom-header">
			<div class="inner-page">
				<div class="logo"><a href="/">COMPANY NAME</a></div>
				<div class="menu">
					<ul>
						<li><a href="/">WOMEN</a></li>
						<li><a href="/">MEN</a></li>
					</ul>
				</div>	
				<div class="search">
					<form method="get" name="searchform" id="searchform" action="<?php bloginfo('siteurl')?>">
						<input type="text" placeholder="Search" name="s" id="s" value="<?php echo wp_specialchars($s, 1); ?>"/>
						<input id="btnSearch" type="submit" name="submit" value="<?php _e(''); ?>" />
					</form>
				</div>
				<div class="icons">
					<ul>
						<li><a href="/my-account/"><img src="/wp-content/themes/egodigitaltest/assets/img/Account.svg" alt="Account"></a></li>
						<li><a href="/wishlist/"><img src="/wp-content/themes/egodigitaltest/assets/img/Favorites.svg" alt="Favorites"></a></li>
						<li><a href="/cart/"><img src="/wp-content/themes/egodigitaltest/assets/img/Bag.svg" alt="Cart"></a></li>
					</ul>
				</div>
			</div>
		</div>	
	
	</header><!-- #masthead -->
	<div class="category">
		<div class="inner-page">
			<ul>
				<li class="red"><a href="/">% SALE</a></li>
				<li class="new"><a href="/">🔥 New</a></li>
				<li class="one"><a href="/">👙 Bras</a></li>
				<li class="two"><a href="/">🏖️ Swimsuits</a></li>
				<li class="three"><a href="/">🛌 Sleepwear</a></li>
				<li class="four"><a href="/">👙 Underwear</a></li>
				<li class="five"><a href="/">👄 Sexy Lingerine</a></li>
				<li class="six"><a href="/">👸🏻 Women’s Branding</a></li>
			</ul>
		</div>
	</div>
	<div class="breadcrumbs">
		<div class="inner-page">	
			
			<?php true_breadcrumbs(); ?>
		</div>
	</div>