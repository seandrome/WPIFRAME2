<?php get_header(); ?>
<div style="clear: both"></div>
<div id="bigcontent">

<?php include (TEMPLATEPATH . '/sidebar-left.php'); ?>
<div id="content"><div class="post"><div id="breadchumb"><?php if (function_exists('breadcrumbs')) breadcrumbs(); ?></div>
<h1><?php echo wp_specialchars($s, 1);; ?></h1></div>
<?php echo spp(get_search_query());?>
<?php include (TEMPLATEPATH . '/loop.php'); ?>	
<div style="clear: both"></div>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>