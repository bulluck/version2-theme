			<header class="entry-header container-center">
				<h1 class="black-text condensed-bold small-heading top-buffer-pudding bottom-buffer-pudding"><?php the_title(); ?></h1>
			</header>
			<div>
				<?php if (is_page('contact')) {
    get_template_part('contact');
} else {
    the_content();
}; ?>
			</div>
