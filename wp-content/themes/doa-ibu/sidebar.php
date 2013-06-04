<div id="sidebarright">
<?php if ( !function_exists('dynamic_sidebar') || !dynamic_sidebar('right Sidebar') ) : ?>	
<div class="box"><h4>Categories</h4>
<ul><?php wp_list_cats('&title_li='); ?></ul>
</div>
<?php endif; ?>	
</div>