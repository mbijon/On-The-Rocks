<!DOCTYPE html> 
<!--[if lt IE 7 ]><html class="ie ie6" lang="en"> <![endif]--> 
<!--[if IE 7 ]><html class="ie ie7" lang="en"> <![endif]--> 
<!--[if IE 8 ]><html class="ie ie8" lang="en"> <![endif]--> 
<!--[if (gte IE 9)|!(IE)]><!--><html lang="en"> <!--<![endif]--> 
<head>
  <meta charset="<?php bloginfo( 'charset' ); ?>" />
  <meta name="description" content="<?php bloginfo( 'description', 'display' ); ?>" />
  <meta name="author" content="Jonathan E. Dean">
  <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1">
  
  <title><?php
  	/*
  	 * Print the <title> tag based on what is being viewed.
  	 */
  	global $page, $paged;
  
  	wp_title( '|', true, 'right' );
  
  	// Add the blog name.
  	bloginfo( 'name' );
  
  	// Add the blog description for the home/front page.
  	$site_description = get_bloginfo( 'description', 'display' );
  	if ( $site_description && ( is_home() || is_front_page() ) )
  		echo " | $site_description";
  
  	// Add a page number if necessary:
  	if ( $paged >= 2 || $page >= 2 )
  		echo ' | ' . sprintf( __( 'Page %s', '' ), max( $paged, $page ) );

	?></title>
	
	<link rel="stylesheet" type="text/css" media="all" href="<?php bloginfo( 'stylesheet_url' ); ?>" />
	<link rel="pingback" href="<?php bloginfo( 'pingback_url' ); ?>" />
	
	<?php
  	/* We add some JavaScript to pages with the comment form
  	 * to support sites with threaded comments (when in use).
  	 */
  	//if ( is_singular() && get_option( 'thread_comments' ) )
  	//	wp_enqueue_script( 'comment-reply' );
  
  	/* Always have wp_head() just before the closing </head>
  	 * tag of your theme, or you will break many plugins, which
  	 * generally use this hook to add elements to <head> such
  	 * as styles, scripts, and meta tags.
  	 */
  	wp_head();
	?>
</head>
<body <?php body_class(); ?>>