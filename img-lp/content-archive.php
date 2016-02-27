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
		   </section>
		   <?php if (has_tag()) :?>
			   <?php
               the_tags('<div class="tags">', '</div><div class="tags">', '</div>');
               ?>
	   <?php endif;  ?>
	   </div>
</article>
