<?php get_header(); ?>
	<section id="contents">
		<div class="contentswrap">
			<?php if (function_exists('wp_is_mobile') && !wp_is_mobile()) :?>
				<?php get_sidebar(); ?>
			<?php endif; ?>
			<div class="posts">
				<div class="contentslist">
						<header class="category-header">
							<h1><?php single_tag_title(); ?></h1>
						</header>
					<?php
                    if (have_posts()):
                        while (have_posts()):
                            the_post();
                         get_template_part('content-archive');
                                             endwhile;
                                         endif;?>
			</div>
			</div>
		</div>
	</section>
		<?php get_footer(); ?>
