<?php if (is_page('lp')):?>
<?php get_header('top'); ?>
<?php else:?>
<?php get_header(); ?>
<?php endif;?>
<?php if (is_page('contact')):?>
	<section id="contents" class="contents-wrapper whitebg">
<?php else: ?>
	<section id="contents" class="contents-wrapper">
<?php endif; ?>
<?php if (is_page('lp')) :?>
	<?php get_template_part('lp'); ?>
<?php else: ?>
	<?php
    if (have_posts()):
                        while (have_posts()):
                                the_post();
    get_template_part('content');
    endwhile;
    endif; ?>
<?php endif; ?>
	</section>
	<?php get_footer();?>
