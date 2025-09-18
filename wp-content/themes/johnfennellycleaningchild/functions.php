<?php
/*
 * This is the child theme for John Fennelly Cleaning theme, generated with Generate Child Theme plugin by catchthemes.
 *
 * (Please see https://developer.wordpress.org/themes/advanced-topics/child-themes/#how-to-create-a-child-theme)
 */

function project_dequeue_unnecessary_scripts()
{
	wp_dequeue_script('touch-keyboard-navigation');
}
add_action('wp_print_scripts', 'project_dequeue_unnecessary_scripts', 100);

function burlington_theme_name_scripts()
{
	// CSS Files
	wp_enqueue_style('bootstrap', get_stylesheet_directory_uri() . '/assets/css/bootstrap.min.css', array(), '1.0.0', false);
	wp_enqueue_style('flaticon', get_stylesheet_directory_uri() . '/assets/css/flaticon.css', array(), '1.0.0', false);
	wp_enqueue_style('pbminfotech-base-icons', get_stylesheet_directory_uri() . '/assets/css/pbminfotech-base-icons.css', array(), '1.0.0', false);
	wp_enqueue_style('swiper', get_stylesheet_directory_uri() . '/assets/css/swiper.min.css', array(), '1.0.0', false);
	wp_enqueue_style('aos', get_stylesheet_directory_uri() . '/assets/css/aos.css', array(), '1.0.0', false);
	wp_enqueue_style('shortcode', get_stylesheet_directory_uri() . '/assets/css/shortcode.css', array(), '1.0.0', false);
	wp_enqueue_style('base', get_stylesheet_directory_uri() . '/assets/css/base.css', array(), '1.0.0', false);
	wp_enqueue_style('style', get_stylesheet_directory_uri() . '/assets/css/style.css', array(), '1.0.0', false);
	wp_enqueue_style('responsive', get_stylesheet_directory_uri() . '/assets/css/responsive.css', array(), '1.0.0', false);
}
add_action('wp_enqueue_scripts', 'burlington_theme_name_scripts');

/*function btfitness_logo(){
add_theme_support(
'custom-logo',
array(
'height'      => 80,
'width'       => 200,
'flex-width'  => false,
'flex-height' => false,
)
);
}
add_action( 'after_setup_theme', 'btfitness_logo', 11 );*/
function btfitness_logo()
{
	add_theme_support(
		'custom-logo',
		array(
			'height'      => 1000,
			'width'       => 1000,
			'flex-width'  => false,
			'flex-height' => false,
		)
	);
}
add_action('after_setup_theme', 'btfitness_logo', 11);


if (function_exists('acf_add_options_page')) {



	acf_add_options_page(array(

		'page_title' 	=> 'Theme General Settings',

		'menu_title'	=> 'Theme Settings',

		'menu_slug' 	=> 'theme-general-settings',

		'capability'	=> 'edit_posts',

		'redirect'		=> false

	));



	acf_add_options_sub_page(array(

		'page_title' 	=> 'Theme Header Settings',

		'menu_title'	=> 'Header',

		'parent_slug'	=> 'theme-general-settings',

	));

	acf_add_options_sub_page(array(

		'page_title' 	=> 'Theme Header Settings',

		'menu_title'	=> 'slider',

		'parent_slug'	=> 'theme-general-settings',

	));

	acf_add_options_sub_page(array(

		'page_title' 	=> 'Theme Footer Settings',

		'menu_title'	=> 'Footer',

		'parent_slug'	=> 'theme-general-settings',

	));
}
add_filter('get_custom_logo', 'change_logo_class');

// Wp-login Logo
function my_login_logo()
{ ?>
	<style type="text/css">
		#login h1 a,
		.login h1 a {
			background-image: url('https://wordpress-1180784-5193990.cloudwaysapps.com/wp-content/uploads/2025/01/logo.png');
			height: 140px;
			/* Adjusted to maintain aspect ratio */
			width: 180px;
			background-size: contain;
			background-repeat: no-repeat;
			padding: auto;
			border-radius: 5%;
		}
	</style>
<?php }
add_action('login_enqueue_scripts', 'my_login_logo');
