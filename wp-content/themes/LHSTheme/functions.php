<?php 

function lsh_setup(){
	add_theme_support('post-thumbnails');
	// set_post_thumbnail_size( 100, 100 );
}

function lsh_site_header_files(){
	wp_enqueue_style('reset_css', get_theme_file_uri('reset.css'));
	wp_enqueue_style('font_awesome', '//maxcdn.bootstrapcdn.com/font-awesome/4.7.0/css/font-awesome.min.css');
	wp_enqueue_style('bootstrap', '//stackpath.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css');
	wp_enqueue_style('site_main_styles', get_stylesheet_uri());
	wp_enqueue_style('about_css', get_template_directory_uri() . '/css/about.css');
	wp_enqueue_style('header_css', get_template_directory_uri() . '/css/header.css');
	wp_enqueue_style('footer_css', get_template_directory_uri() . '/css/footer.css');
	wp_enqueue_style('pages_css', get_template_directory_uri() . '/css/pages.css');
	wp_enqueue_style('event_css', get_template_directory_uri() . '/css/event.css');

	wp_enqueue_script('jquery', '//code.jquery.com/jquery-3.3.1.slim.min.js', null, '3.3.1', true);
	wp_enqueue_script('cloudflare', '//cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.3/umd/popper.min.js', null, '1.14.3', true);
	wp_enqueue_script('bootstrapjs', '//stackpath.bootstrapcdn.com/bootstrap/4.0.0/js/bootstrap.min.js', null, '4.0.0', true);
    // wp_enqueue_script('bootstrap-min-js', get_theme_file_uri('/js/bootstrap.min.js'), null, '1.0', true);
	wp_enqueue_script('main-site-js', get_theme_file_uri('/js/scripts.js'), null, '1.0', true);

	
}

function my_filter_head() {
	remove_action('wp_head', '_admin_bar_bump_cb');
}
 
function filter_the_content_in_the_news( $content ) {
 	$maxchar = 50;
 	$end = '...';
    // Check if we're inside the main loop in a single post page. 
    if($content){

    	if (strlen($content) > $maxchar || $content == '') {
        $words = preg_split('/\s/', $content);      
        $output = '';
        $i      = 0;
        while (1) {
            $length = strlen($output)+strlen($words[$i]);
            if ($length > $maxchar) {
                break;
            } 
            else {
                $output .= " " . $words[$i];
                ++$i;
            }
        };
        $output .= $end;
    } 
    else {
        $output = $content;
    }
    return $output;
    }
}



add_filter( 'the_news_filter', 'filter_the_content_in_the_news' );
add_action('after_setup_theme', 'lsh_setup');
add_action('wp_enqueue_scripts', 'lsh_site_header_files');
add_action('get_header', 'my_filter_head');



 ?>