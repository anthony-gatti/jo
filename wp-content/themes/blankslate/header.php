<!DOCTYPE html>
<html <?php language_attributes(); ?>>
<head>
<meta charset="<?php bloginfo( 'charset' ); ?>" />
<meta name="viewport" content="width=device-width; initial-scale=1.0;" />
<title><?php wp_title( ' | ', true, 'right' ); ?></title>

<link rel="stylesheet" type="text/css" href="<?php echo get_stylesheet_uri(); ?>" />
<link rel="icon" type="image/gif" href="/wp-content/themes/blankslate/img/logo.gif" />
<style type=text/css>
@media only screen and (max-width : 1024px){
.scroll_to_explore {background: url("img/tiny_UI_sprite.gif");background-position: -39px -599px;
}
}
</style>
<?php wp_head(); ?>
</head>
<body <?php body_class(); ?>>


<img id="bg_logo" src="<?php bloginfo('stylesheet_directory'); ?>/img/logo.gif" alt="Josephine Leung Design" width="200" height="208">
<div id="site_wrap">

