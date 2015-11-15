<?php get_header(); ?>
<section class="section-padding100">
	<div class="container-c-narrow">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">


				<?php if (have_posts()) :
                                while (have_posts()) :
                         the_post(); ?>
				<h1 class="condensed-bold small-heading"><a class="black-text" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<div class="data top-buffer"><?php the_time('Y/m/d'); ?></div>
				<?php get_template_part('sns'); ?>
				<div class="entry top-buffer"><?php the_content(); ?></div>
				<?php get_template_part('sns'); ?>
				</div>
<?php endwhile; endif; ?>
			</div>
		</div>
	</div>
</section>
	<?php get_footer(); ?>
