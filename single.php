<?php get_header(); ?>
	<section id="contents">
		<?php if(have_posts()):
			while (have_posts()):
				the_post();
			 get_template_part('content');
		 endwhile;
	 endif;
			  ?>
	</section>
	<?php get_footer(); ?>
