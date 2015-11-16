<?php get_header(); ?>
<section class="section-padding100">
	<div class="container-c-narrow">
		<div class="container-fluid">
			<div class="row">
				<div class="col-xs-12">
					<div class="breadcrumbs bottom-buffer-padding">
					    <?php if (function_exists('bcn_display')) {
    bcn_display();
}?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">
					<article class="article">
				<?php if (have_posts()) :
                                while (have_posts()) :
                         the_post(); ?>
				<h1 class="condensed-bold small-heading"><a class="black-text" href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h1>
				<div class="data top-buffer"><?php the_time('Y/m/d'); ?></div>
				<?php get_template_part('sns'); ?>
				<div class="entry top-buffer"><?php the_content(); ?></div>
				<div class="nav-below top-buffer">
					<div class="pagelink">
<?php
if (get_next_post()) {
    echo '<p class="nav-previous">',next_post_link('次の記事：%link', '%title'),'</p>';
}
if (get_previous_post()) {
    echo '<p class="nav-next">',previous_post_link('前の記事：%link', '%title'),'</p>';
}
?>
</div>
        </div><!-- /.nav-below -->
				<?php get_template_part('sns'); ?>
<?php endwhile; endif; ?>
					</article>
				</div>
			</div>
		</div>
	</div>
</section>
	<?php get_footer(); ?>
