<?php $postcounter = 1; if (have_posts()) : ?>
<?php while (have_posts()) : $postcounter = $postcounter + 1; the_post(); $do_not_duplicate = $post->ID; $the_post_ids = get_the_ID(); ?>
<div class="post post-<?php echo $postCount ;?>"><?php include (TEMPLATEPATH . '/thumb.php'); ?>
<div class="posttitle"><h2><a href="<?php the_permalink() ?>" rel="bookmark" title="<?php the_title(); ?>"><?php the_title(); ?></a></h2></div>
<div class="tags"><?php the_time('l, F jS Y') ?>  &#124; <?php the_category(', ') ?></div>
<?php echo excerpt(20); ?> 
<div style="clear: both"></div></div>
<?php endwhile; ?>
<?php include (TEMPLATEPATH . '/ads.php'); ?>
<?php include (TEMPLATEPATH . '/navigator.php'); ?>	
<?php else : ?>
<div class="post"><h2>Not Found</h2>Sorry, but you are looking for something that isn't here.</div>
<?php endif; ?>