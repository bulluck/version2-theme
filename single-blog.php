<?php get_header(); ?>
<section class="section-padding80">
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
				<h1 class="condensed-bold small-heading black-text"><?php the_title(); ?></h1>
				<div class="data top-buffer"><?php the_time('Y/m/d'); ?></div>
				<div class="sns-btn clearfix">
					<?php get_template_part('sns'); ?>
				</div>
				<div class="entry top-buffer"><?php the_content(); ?></div>
					<div class="pagelink clearfix">
<?php
if (get_next_post()) {
    echo '<p class="nav-previous small-text black-text top-buffer">',next_post_link('%link', '<i class="fa fa-chevron-left" style="padding-right:10px;"></i>%title'),'</p>';
}
if (get_previous_post()) {
    echo '<p class="nav-next small-text black-text top-buffer">',previous_post_link('%link', '%title<i class="fa fa-chevron-right" style="padding-left:10px;"></i>'),'</p>';
}
?>
</div>
<div class="sns-btn clearfix">
				<?php get_template_part('sns'); ?>
</div>

<?php endwhile; endif; ?>
					</article>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_template_part('follow-area'); ?>
<?php get_footer(); ?>
