<?php get_header(); ?>
<div class="lower-top" id="technology">
<div class="section-table">
<div class="container-fluid s-table-cell">
	<div class="row">
	<div class="col-xs-12">
		<p class="small-heading lighter-gray condensed-bold">BLOGS</p>
		<h1 class="large-heading condensed-bold">
			Technology
		</h1>
		<p class="top-buffer small-text white-text">
			プログラミングや技術に関する最新情報、ギーク向けのテクニカルな記事、また、ブラックでまとめた記事などを配信しております。
		</p>
	</div>
	</div>
</div>
</div>
		</div>
<section class="section-padding100">
	<div class="container-center">
		<div class="container-fluid">
			<div class="row">
          <?php if (have_posts()) :
             while (have_posts()) :
               the_post(); ?>
				<div class="col-xs-4 top-buffer">
					<div class="blog-thumbnail">
					<?php
                    if (has_post_thumbnail()):?>
					<?php	the_post_thumbnail('pickup_thumbnail', array('alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0')));?>
				<?php else: ?>
					<img src="<?php bloginfo('template_directory');?>/images/thumbnail.svg" alt="thumbnail" />
				<?php endif; ?>
					</div>
					<h3 class="small-heading top-buffer"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<div class="data top-buffer-padding"><?php the_time('Y/m/d'); ?></div>
					<div class="entry top-buffer-padding">
						<p class="small-text">
						<?php the_excerpt(); ?>
					</p>
				</div>
					<div class="term"><?php the_terms($post->ID, 'technology'); ?></div>
				</div>
<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</section>
	<?php get_footer(); ?>
