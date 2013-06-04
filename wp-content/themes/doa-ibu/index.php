<?php get_header(); ?>
<div style="clear: both"></div>
<div id="bigcontent">
<?php include (TEMPLATEPATH . '/sidebar-left.php'); ?>
<div id="content">
<div class="post"><h1><?php bloginfo('name'); ?> - <?php bloginfo('description'); ?> <?php  if ( get_query_var('paged') ) { echo ' ('; echo __('page') . ' ' . get_query_var('paged');   echo ')';  } ?></h1></div>
<?php include (TEMPLATEPATH . '/loop.php'); ?>	
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>