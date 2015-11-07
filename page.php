<?php get_header(); ?>
<?php if (is_page('contact')):?>
	<section id="contents" class="contents-wrapper whitebg">
<?php else: ?>
	<section id="contents" class="contents-wrapper">
<?php endif; ?>
	<?php
    if (have_posts()):
                        while (have_posts()):
                                the_post();
    get_template_part('content');
    endwhile;
    endif; ?>

	</section>
	<?php get_footer();?>
