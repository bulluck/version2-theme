<article <?php post_class(); ?>>
		<div class="mediathumbnail">
			<?php the_post_thumbnail('large_thumbnail', array('alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0')));?>
		</div>
		<div class="contentsmain">
				   <a href="<?php the_permalink(); ?>" style="font-size:1.5rem;text-decoration:none;">
				  		<?php the_title(); ?>
				  </a>

		   <section class="entry-content">
			   	<?php the_excerpt(); ?>
				<div class="pubtime">
				   <time pubdate="pubdate" datetime="<?php the_time('Y-m-d'); ?>" class="entry-date">
				   		<?php the_time(get_option('date_format')); ?>
				   </time>

				</div>
				<div class="viewcnt">
				<img class="viewsicon" alt="" src="<?php bloginfo('template_url');?>/images/views.png">
						<span class="viewspan"><?php if (function_exists('wpp_get_views')) {
    echo wpp_get_views(get_the_ID());
} ?> views</span>
				</div>
		   </section>
		   <?php if (has_tag()) :?>
			   <?php
               the_tags('<div class="tags">', '</div><div class="tags">', '</div>');
               ?>
		   <p class="tagname">
			タグ：
		   </p>
	   <?php endif;  ?>
	   </div>
</article>
