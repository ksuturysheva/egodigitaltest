<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the #content div and all content after.
 *
 * @link https://developer.wordpress.org/themes/basics/template-files/#template-partials
 *
 * @package egodigitaltest
 */

?>
	</div>
	<footer class="footer">
		<div class="inner-page">
			<div class="text">Company name stands for stylish, sexy and high-quality shapewear and lingerie. Women in the United States, Canada and all around the world know they can trust our unmatched designs and superior customer service.
				<div class="social">
					<ul>
						<li><a href="/"><img src="/wp-content/themes/egodigitaltest/assets/img/instagram.svg" alt="instagram"></a></li>
						<li><a href="/"><img src="/wp-content/themes/egodigitaltest/assets/img/twitter.svg" alt="twitter"></a></li>
						<li><a href="/"><img src="/wp-content/themes/egodigitaltest/assets/img/pinterest.svg" alt="pinterest"></a></li>
						<li><a href="/"><img src="/wp-content/themes/egodigitaltest/assets/img/youtube.svg" alt="youtube"></a></li>
						<li><a href="/"><img src="/wp-content/themes/egodigitaltest/assets/img/facebook.svg" alt="facebook"></a></li>
					</ul>
				</div>
			</div>
			<div class="menu">
				<div class="title">about</div>
				<?php wp_nav_menu( [
				'theme_location'  => '',
				'menu'            => 'Footer-menu1',
				'container'       => 'div',
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => 'menu',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 0,
				'walker'          => '',
			] ); ?>
			</div>
			<div class="menu">
				<div class="title">Help & information</div>
				<?php wp_nav_menu( [
				'theme_location'  => '',
				'menu'            => 'Footer-menu2',
				'container'       => 'div',
				'container_class' => '',
				'container_id'    => '',
				'menu_class'      => 'menu',
				'menu_id'         => '',
				'echo'            => true,
				'fallback_cb'     => 'wp_page_menu',
				'before'          => '',
				'after'           => '',
				'link_before'     => '',
				'link_after'      => '',
				'items_wrap'      => '<ul id="%1$s" class="%2$s">%3$s</ul>',
				'depth'           => 0,
				'walker'          => '',
			] ); ?>
			</div>
			<div class="menu">
				<div class="title">Contact Us</div>
				<a href="tel:<?php echo  str_replace(array('(', ')', ' ', '-'), '', get_option('site_telephone')); ?>"><?php echo get_option('site_telephone'); ?></a>
				<div class="subtitle">Return & Exchange</div>
				<a href="mailto:<?php echo get_option('site_email'); ?>"><?php echo get_option('site_email'); ?></a>
				<div class="subtitle">General Questions</div>
				<a href="mailto:<?php echo get_option('site_email2'); ?>"><?php echo get_option('site_email2'); ?></a>
				<div class="subtitle">Suggestion & Comments</div>
				<a href="mailto:<?php echo get_option('site_email3'); ?>"><?php echo get_option('site_email3'); ?></a>
			</div>
		</div>
		<div class="copyright"><div class="inner-page">Company name © 2022</div></div>
	</footer>

</div>
<?php wp_footer(); ?>

</body>
</html>
