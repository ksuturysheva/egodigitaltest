<?php
/**
 * egodigitaltest functions and definitions
 *
 * @link https://developer.wordpress.org/themes/basics/theme-functions/
 *
 * @package egodigitaltest
 */

if ( ! defined( '_S_VERSION' ) ) {
	// Replace the version number of the theme on each release.
	define( '_S_VERSION', '1.0.0' );
}

/**
 * Sets up theme defaults and registers support for various WordPress features.
 *
 * Note that this function is hooked into the after_setup_theme hook, which
 * runs before the init hook. The init hook is too late for some features, such
 * as indicating support for post thumbnails.
 */
function egodigitaltest_setup() {
	/*
		* Make theme available for translation.
		* Translations can be filed in the /languages/ directory.
		* If you're building a theme based on egodigitaltest, use a find and replace
		* to change 'egodigitaltest' to the name of your theme in all the template files.
		*/
	load_theme_textdomain( 'egodigitaltest', get_template_directory() . '/languages' );

	// Add default posts and comments RSS feed links to head.
	add_theme_support( 'automatic-feed-links' );

	/*
		* Let WordPress manage the document title.
		* By adding theme support, we declare that this theme does not use a
		* hard-coded <title> tag in the document head, and expect WordPress to
		* provide it for us.
		*/
	add_theme_support( 'title-tag' );

	/*
		* Enable support for Post Thumbnails on posts and pages.
		*
		* @link https://developer.wordpress.org/themes/functionality/featured-images-post-thumbnails/
		*/
	add_theme_support( 'post-thumbnails' );

	// This theme uses wp_nav_menu() in one location.
	register_nav_menus(
		array(
			'menu-1' => esc_html__( 'Primary', 'egodigitaltest' ),
		)
	);

	/*
		* Switch default core markup for search form, comment form, and comments
		* to output valid HTML5.
		*/
	add_theme_support(
		'html5',
		array(
			'search-form',
			'comment-form',
			'comment-list',
			'gallery',
			'caption',
			'style',
			'script',
		)
	);

	// Set up the WordPress core custom background feature.
	add_theme_support(
		'custom-background',
		apply_filters(
			'egodigitaltest_custom_background_args',
			array(
				'default-color' => 'ffffff',
				'default-image' => '',
			)
		)
	);

	// Add theme support for selective refresh for widgets.
	add_theme_support( 'customize-selective-refresh-widgets' );

	/**
	 * Add support for core custom logo.
	 *
	 * @link https://codex.wordpress.org/Theme_Logo
	 */
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 250,
			'width'       => 250,
			'flex-width'  => true,
			'flex-height' => true,
		)
	);
}
add_action( 'after_setup_theme', 'egodigitaltest_setup' );

/**
 * Set the content width in pixels, based on the theme's design and stylesheet.
 *
 * Priority 0 to make it available to lower priority callbacks.
 *
 * @global int $content_width
 */
function egodigitaltest_content_width() {
	$GLOBALS['content_width'] = apply_filters( 'egodigitaltest_content_width', 640 );
}
add_action( 'after_setup_theme', 'egodigitaltest_content_width', 0 );

/**
 * Register widget area.
 *
 * @link https://developer.wordpress.org/themes/functionality/sidebars/#registering-a-sidebar
 */
function egodigitaltest_widgets_init() {
	register_sidebar(
		array(
			'name'          => esc_html__( 'Sidebar', 'egodigitaltest' ),
			'id'            => 'sidebar-1',
			'description'   => esc_html__( 'Add widgets here.', 'egodigitaltest' ),
			'before_widget' => '<section id="%1$s" class="widget %2$s">',
			'after_widget'  => '</section>',
			'before_title'  => '<h2 class="widget-title">',
			'after_title'   => '</h2>',
		)
	);
}
add_action( 'widgets_init', 'egodigitaltest_widgets_init' );

/**
 * Enqueue scripts and styles.
 */
function egodigitaltest_scripts() {
	wp_enqueue_style( 'egodigitaltest-style', get_stylesheet_uri(), array(), _S_VERSION );
	wp_style_add_data( 'egodigitaltest-style', 'rtl', 'replace' );

	wp_enqueue_script( 'egodigitaltest-navigation', get_template_directory_uri() . '/js/navigation.js', array(), _S_VERSION, true );

	 wp_enqueue_style( "wp-block-library-css", get_template_directory_uri() . "/assets/css/style.css", '', '');
	if ( is_singular() && comments_open() && get_option( 'thread_comments' ) ) {
		wp_enqueue_script( 'comment-reply' );
	}
}
add_action( 'wp_enqueue_scripts', 'egodigitaltest_scripts' );
function mytheme_customize_register( $wp_customize ) {
	/*
	Добавляем секцию в настройки темы
	*/
	$wp_customize->add_section(
	// ID
		'data_site_section',
		// Arguments array
		array(
			'title'       => 'Данные сайта',
			'capability'  => 'edit_theme_options',
			'description' => "Здесь можно указать общие данные сайта"
		)
	);
/*
Добавляем поле контактных данных
*/
	$wp_customize->add_setting(
		'site_telephone',
		array(
			'default' => '',
			'type'    => 'option'
		)
	);
	$wp_customize->add_control(
		'site_telephone21_control',
		array(
			'type'     => 'text',
			'label'    => "Phone",
			'section'  => 'data_site_section',
			'settings' => 'site_telephone'
		)
	);
	

	$wp_customize->add_setting(
		'site_email',
		array(
			'default' => '',
			'type'    => 'option'
		)
	);
	$wp_customize->add_control(
		'site_email1_control',
		array(
			'type'     => 'text',
			'label'    => "Email 1",
			'section'  => 'data_site_section',
			'settings' => 'site_email'
		)
	);
	
	$wp_customize->add_setting(
		'site_email2',
		array(
			'default' => '',
			'type'    => 'option'
		)
	);
	$wp_customize->add_control(
		'site_email2_control',
		array(
			'type'     => 'text',
			'label'    => "Email 2",
			'section'  => 'data_site_section',
			'settings' => 'site_email2'
		)
	);
	$wp_customize->add_setting(
		'site_email3',
		array(
			'default' => '',
			'type'    => 'option'
		)
	);
	$wp_customize->add_control(
		'site_email3_control',
		array(
			'type'     => 'text',
			'label'    => "Email 3",
			'section'  => 'data_site_section',
			'settings' => 'site_email3'
		)
	);
	
	
}

add_action( 'customize_register', 'mytheme_customize_register' );

function woocommerce_quantity_input( $args = array(), $product = null, $echo = true ) {
 
	if ( is_null( $product ) ) {
		$product = $GLOBALS[ 'product' ];
	}
 
	// значения по умолчанию
	$defaults = array(
		'input_name' => 'quantity',
		'input_value' => '1',
		'max_value' => apply_filters( 'woocommerce_quantity_input_max', -1, $product ),
		'min_value' => apply_filters( 'woocommerce_quantity_input_min', 0, $product ),
		'step' => 1,
	);
 
	// этот фильтр-хук не убирать
	$args = apply_filters( 'woocommerce_quantity_input_args', wp_parse_args( $args, $defaults ), $product );
 
	// немного валидаций
	$args[ 'min_value' ] = max( $args[ 'min_value' ], 1 );
	$args[ 'max_value' ] = 0 < $args[ 'max_value' ] ? $args[ 'max_value' ] : 4;
 
	if ( '' !== $args['max_value'] && $args[ 'max_value' ] < $args[ 'min_value' ] ) {
		$args['max_value'] = $args[ 'min_value' ];
	}
 
	$options = '';
 
	// запускаем цикл создания выпадающего селекта
	for ( $count = $args[ 'min_value' ]; $count <= $args[ 'max_value' ]; $count = $count + $args[ 'step' ] ) {
 
		// Cart item quantity defined?
		if ( '' !== $args[ 'input_value' ] && $args[ 'input_value' ] >= 1 && $count == $args[ 'input_value' ] ) {
			$selected = 'checked';
		} else {
			$selected = '';
		}
 
		$options .= '
		
		<input class="__select__input  " id="selectName' . $count . '" type="radio" value="' . $count . '" name="' . $args[ 'input_name' ] . '" ' . $selected . '/><label class="__select__label" for="selectName' . $count . '">' . $count . '</label>';
 
	}
 
	$html = '<div class="quantity qty __select"><div class="__select__title">' . $args[ 'input_value' ] . '</div><div class="__select__content">' . $options . '</div></div>';
 
	if ( $echo ) {
		echo $html;
	} else {
		return $html;
	}
 
}
// Авто обновление корзины при добавление количества.
add_action( 'wp_footer', 'cart_update_qty_script' );
 
function cart_update_qty_script() {
    if (is_cart()) :
    ?>
    <script>
    	const selectSingle = document.querySelector('.__select');
		const selectSingle_title = selectSingle.querySelector('.__select__title');
		const selectSingle_labels = selectSingle.querySelectorAll('.__select__label');

		// Toggle menu
		jQuery('div.woocommerce').on('click', '.__select__title', function(){
             if ('active' === jQuery(this).parent('.__select').attr('data-state')) {
			jQuery(this).parent('.__select').attr('data-state', '');
		  } else {
		    jQuery(this).parent('.__select').attr('data-state', 'active');
		  }
        });
		

		// Close when click to option 
		jQuery('div.woocommerce').on('click', '.__select__label', function(){
		  
		    jQuery(this).parent('.__select__content').prev('.__select__title').html(jQuery(this).html());
		    jQuery(this).parents('.__select').attr('data-state', '');
		  });
		
        jQuery('div.woocommerce').on('click', '.qty .__select__label', function(){
            jQuery("[name='update_cart']").removeAttr("disabled").trigger("click");
        });
    </script>
    <?php
    endif;
}

function true_breadcrumbs(){
 
	// получаем номер текущей страницы
	$page_num = ( get_query_var( 'paged' ) ) ? get_query_var( 'paged' ) : 1;
 
	$separator = ' <span>-</span> '; //  разделяем обычным слэшем, но можете чем угодно другим
 
	// если главная страница сайта
	if( is_front_page() ){
 
		if( $page_num > 1 ) {
			echo '<a href="' . site_url() . '">Home</a>' . $separator . $page_num . '';
		} else {
			echo 'Вы находитесь на главной странице';
		}
 
	} else { // не главная
 
		echo '<a href="' . site_url() . '">Home</a>' . $separator;
 
 
		if( is_single() ){ // записи
 
			the_category( ', ' ); echo $separator; the_title();
 
		} 
		elseif( is_tax( $taxonomy_name ) ) {
			$current_term = get_queried_object();
			// если родительский элемент таксономии существует
			if( $current_term->parent ) {
				echo get_term_parents_list( $current_term->parent, $taxonomy_name, array( 'separator' => $separator ) ) . $separator;
			}
			single_term_title();
		}

		elseif ( is_page() ){ // страницы WordPress 
 
			the_title();
 
		} elseif ( is_category() ) {
 
			single_cat_title();
 
		} elseif( is_tag() ) {
 
			single_tag_title();
 
		} elseif ( is_day() ) { // архивы (по дням)
 
			echo '<a href="' . get_year_link( get_the_time( 'Y' ) ) . '">' . get_the_time( 'Y' ) . '</a>' . $separator;
			echo '<a href="' . get_month_link( get_the_time( 'Y' ), get_the_time( 'm' ) ) . '">' . get_the_time( 'F' ) . '</a>' . $separator;
			echo get_the_time('d');
 
		} elseif ( is_month() ) { // архивы (по месяцам)
 
			echo '<a href="' . get_year_link( get_the_time( 'Y' ) ) . '">' . get_the_time( 'Y' ) . '</a>' . $separator;
			echo get_the_time('F');
 
		} elseif ( is_year() ) { // архивы (по годам)
 
			echo get_the_time( 'Y' );
 
		} elseif ( is_author() ) { // архивы по авторам
 
			global $author;
			$userdata = get_userdata( $author );
			echo ' ' . $userdata->display_name;
 
		} elseif ( is_404() ) { // если страницы не существует
 
			echo 'Page 404';
 
		}
 
		if ( $page_num > 1 ) { // номер текущей страницы
			echo ' (' . $page_num . '';
		}
 
	}
 
}

add_action( 'after_setup_theme', 'woocommerce_support' );
function woocommerce_support() {
add_theme_support( 'woocommerce' );
}
/**
 * Implement the Custom Header feature.
 */
require get_template_directory() . '/inc/custom-header.php';

/**
 * Custom template tags for this theme.
 */
require get_template_directory() . '/inc/template-tags.php';

/**
 * Functions which enhance the theme by hooking into WordPress.
 */
require get_template_directory() . '/inc/template-functions.php';

/**
 * Customizer additions.
 */
require get_template_directory() . '/inc/customizer.php';

/**
 * Load Jetpack compatibility file.
 */
if ( defined( 'JETPACK__VERSION' ) ) {
	require get_template_directory() . '/inc/jetpack.php';
}

