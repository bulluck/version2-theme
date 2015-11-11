		<div class="container-center">

			<header class="entry-header container-fluid">
				<div class="row">

				<h1 class="black-text condensed-bold small-heading top-buffer-padding bottom-buffer-padding col-xs-12 col-sm-6">
					<?php if (is_parent_slug() == 'about-us' || is_parent_slug() == 'service'): ?>
						<?php
                                $parent_id = $post->post_parent;
                                    echo get_the_title($parent_id);
                                ?>
					<?php else: ?>
					<?php the_title(); ?>
				<?php endif; ?>
				</h1>
				<?php if (is_page('about-us')||is_parent_slug() == 'about-us'): ?>
					<div class="col-sm-6 top-buffer-padding bottom-buffer-padding">
					<?php
                    wp_nav_menu(
                        array(
                        'container'  => 'div',
                        'container_class' => 'child-menu',
                        'theme_location' => 'place_global2'
                        )
                        )
                    ;?>
					</div>
					<?php elseif (is_page('service')||is_parent_slug() == 'service'): ?>
						<div class="col-sm-6 top-buffer-padding bottom-buffer-padding">
						<?php
                                            wp_nav_menu(
                                                    array(
                                                    'container'  => 'div',
                                                    'container_class' => 'child-menu',
                                                    'theme_location' => 'place_global3'
                                                    )
                                                    )
                                            ;?>
						</div>
									<?php endif; ?>
				</div>

			</header>
		</div>
			<div>
				<?php the_content(); ?>
			</div>
