<div style="clear: both"></div>
</div>
<div id="foot">
<a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a><?php $pages = wp_list_pages('depth=1&title_li=&echo=0');
$pages2 = preg_split('/(<li[^>]*>)/' ,$pages);foreach($pages2 as $var){ echo str_replace('</li>', '', $var);}?> <br/>
Copyright &#169; 2012  <a href="<?php bloginfo('url'); ?>"><?php bloginfo('name'); ?></a>, All trademarks are the property of the respective trademark owners. <br/>
<?php wp_footer(); ?>
<?php $header_ads_act = get_theme_option('footer_ads_act1'); if(($header_ads_act == '') || ($header_ads_act == 'No')) { ?>
<a href="http://fastestwp.com" target="_blank">Adsense Themes</a><?php } else { ?><?php echo get_theme_option('footer_ads1'); ?><?php } ?>
</div>
</div>
</body>
</html>