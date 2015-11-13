<?php get_header(); ?>
<section class="section-padding100">
	<div class="container-center">
		<div class="container-fluid">
			<div class="row">

			<div class="col-xs-12">
				<p class="small-heading lighter-gray condensed-bold">BLOGS</p>
				<h1 class="black-text large-heading condensed-bold">
					Technology
				</h1>
				<p class="top-buffer small-text">
					プログラミングや技術に関する最新情報、ギーク向けのテクニカルな記事、また、ブラックでまとめた記事などを配信しております。
				</p>
			</div>
			</div>
			<div class="row">
          <?php if (have_posts()) :
             while (have_posts()) :
               the_post(); ?>
				<div class="col-xs-4 top-buffer">
					<h3 class="small-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
					<div class="entry"><p>
						<?php the_excerpt(); ?>
					</p>
				</div>
					<div class="data"><?php the_time('Y/m/d'); ?></div>
					<div class="term"><?php the_terms($post->ID, 'technology'); ?></div>
				</div>
<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</section>
	<?php get_footer(); ?>
