<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head profile="http://gmpg.org/xfn/11">
<meta http-equiv="Content-Type" content="<?php bloginfo('html_type'); ?>; charset=<?php bloginfo('charset'); ?>" />
<title> <?php if ( is_home() ) { ?><?php bloginfo('name'); ?> - <?php bloginfo('description'); } else 
{ ?><?php  wp_title(''); ?> - <?php bloginfo('name'); } ?></title>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
<link rel="alternate" type="application/rss+xml" title="<?php bloginfo('name'); ?> RSS Feed" href="<?php bloginfo('rss2_url'); ?>" />
<link rel="pingback" href="<?php bloginfo('pingback_url'); ?>" />
<link rel="Shortcut Icon" href="<?php bloginfo('stylesheet_directory');?>/images/favicon.ico" type="image/x-icon" />
<?php wp_head(); ?>
<script type="text/javascript">
 <!--
    if (top.location!= self.location) {
      top.location = self.location.href
    }
  //-->
</script>
</head>
<body <?php body_class(''); ?>> 
<div id="wrap">
<div id="header">
<div id="header-left">
<a href="<?php bloginfo('url'); ?>"><?php $header_image = get_header_image();
if ( ! empty( $header_image ) ) : ?><img src="<?php header_image(); ?>" width="<?php echo HEADER_IMAGE_WIDTH; ?>" height="<?php echo HEADER_IMAGE_HEIGHT; ?>" alt="<?php bloginfo('name'); ?>" title="<?php bloginfo('name'); ?>"/></a><?php else : ?><div class="logo"><?php bloginfo('name'); ?></a></div><div style="clear: both"></div><div class="desc"><?php bloginfo('description'); ?></div><?php endif;?>
</div>
<div id="header-right">	
<form method="get" id="search" action="<?php bloginfo('url'); ?>/">
<input id="search-box" type="text" value="Search ... " onfocus="if
(this.value==this.defaultValue) this.value='';" name="s" size="20" />
<input id="search-button" type="submit" value="Search" />
</form>
</div>
</div>
<?php wp_nav_menu( array( 'theme_location' => 'main-menu', 'menu_class' => 'dropdown', 'container_id' => 'navwrap', 'fallback_cb' => '', ) ); ?>
<div style="clear: both"></div>
<div id="topads-left">
<?php $header_ads_act = get_theme_option('home_ads_act1'); if(($header_ads_act == '') || ($header_ads_act == 'No')) { ?><?php } else { ?><?php echo get_theme_option('home_ads1'); ?><?php } ?>
</div>
<div id="topads-right">	<a href="https://twitter.com/<?php  echo get_theme_option('twitter'); ?>" target="_blank">
<img src="<?php bloginfo('stylesheet_directory');?>/images/twet.png" border="0px" height="33"  width="168" alt="<?php bloginfo('description');?>"/></a>
<a href="http://facebook.com/<?php  echo get_theme_option('facebook'); ?>" target="_blank"><img src="<?php bloginfo('stylesheet_directory');?>/images/fb.png" border="0px" height="33"  width="168" alt="<?php bloginfo('description');?>"/></a></div>
