<?php get_header(); ?>
<div style="clear: both"></div>
<div id="bigcontent">
<?php include (TEMPLATEPATH . '/sidebar-left.php'); ?>
<div id="content">
<?php if (have_posts()) :?><?php $postCount=0; ?><?php while (have_posts()) : the_post();?><?php $postCount++;?>
<div class="post post-<?php echo $postCount ;?>"><div id="breadchumb">
<?php if (function_exists('breadcrumbs')) breadcrumbs(); ?>  </div>
<div class="posttitle"><h1><?php the_title(); ?></h1></div>
<div class="tags"><?php the_time('l, F jS Y.') ?>  &#124; <?php the_category(', ') ?></div>
<?php the_content(); ?>	
<?php include (TEMPLATEPATH . '/ads.php'); ?>
<?php if (function_exists('the_related')) the_related(); ?>
<div style="clear: both"></div>
<?php edit_post_link('Edit', '', ''); ?> Cat : <?php the_category(', ') ?>,  <?php the_tags('tags: ',', ',''); ?></div>
<?php endwhile; ?>
<?php if ( comments_open() ) : ?><div class="post"><h2> Comment For <?php the_title(); ?> </h2>
<div id="fbcomments"><div id="fb-root"></div><script src="http://connect.facebook.net/en_US/all.js#xfbml=1"></script><fb:comments href="<?php the_permalink(); ?>" width="432"></fb:comments></div></div>
<?php endif; ?>
<?php else : ?>
<div class="post"><h2>Not Found</h2>Sorry, but you are looking for something that isn't here.</div>
<?php endif; ?>
</div>
<?php get_sidebar(); ?>
<?php get_footer(); ?>