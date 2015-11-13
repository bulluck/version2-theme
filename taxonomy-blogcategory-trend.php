<?php get_header(); ?>
<section class="section-padding100">
	<div class="container-c-narrow">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
          <?php if (have_posts()) :
             while (have_posts()) :
               the_post(); ?>
<h1><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
<div class="entry"><?php the_content(); ?></div>
<div class="data"><?php the_time('Y/m/d'); ?></div>
<div class="term"><?php the_terms($post->ID, 'trend'); ?></div>
<?php endwhile; endif; ?>
				</div>
			</div>
		</div>
	</div>
</section>
	<?php get_footer(); ?>
