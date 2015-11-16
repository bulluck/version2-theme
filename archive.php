<?php get_header(); ?>
						<header class="category-header">
							<h1>あ</h1>
						</header>
					<?php
                    if (have_posts()):
                        while (have_posts()):
                            the_post();
                         get_template_part('content-archive');
                                             endwhile;
                                         endif;?>
		<?php get_footer(); ?>
