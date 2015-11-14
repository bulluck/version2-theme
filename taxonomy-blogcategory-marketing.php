<?php get_header(); ?>
<div class="lower-top" id="marketing">
<div class="section-table">
<div class="container-fluid s-table-cell">
	<div class="row">
	<div class="col-xs-12 top-buffer">
		<p class="small-heading lighter-gray condensed-bold">BLOGS</p>
		<h1 class="large-heading condensed-bold">
			Marketing
		</h1>
		<p class="top-buffer small-text white-text">
			マーケティングに関する最新情報、テクニックなどのキュレーション、また、ブラックでまとめた記事などを配信しております。
		</p>
	</div>
	</div>
</div>
</div>
		</div>
<section class="section-padding80">
	<div class="container-center">
		<div class="container-fluid">
			<div class="row">
          <?php if (have_posts()) :
             while (have_posts()) :
               the_post(); ?>
				<div class="col-xs-12 col-sm-4 top-buffer">
					<div class="blog-thumbnail">
					<?php
                    if (has_post_thumbnail()):?>
					<?php	the_post_thumbnail('pickup_thumbnail', array('alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0')));?>
				<?php else: ?>
					<img src="<?php bloginfo('template_directory');?>/images/thumbnail.svg" alt="thumbnail" />
				<?php endif; ?>
					</div>
					<div class="col-xs-12 purewhitebg parent-relative archive-card">
						<span class="tagred white-text condensed-bold child-absolute">Marketing</span>
						<h3 class="small-text top-buffer condensed-bold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
						<p class="small-text lighter-gray"><?php the_time('Y/m/d'); ?></p>
						<p class="small-text blog-top-buffer">
							<?php the_excerpt(); ?>
						</p>
						<div class="term"><?php the_terms($post->ID, 'marketing'); ?></div>
					</div>
				</div>
<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</section>
	<?php get_footer(); ?>
