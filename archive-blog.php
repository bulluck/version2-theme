<?php get_header(); ?>
	<section id="contents" class="section-padding100">
		<div class="container-center">
			<div class="container-fluid">
				<div class="row">
					<div class="col-xs-12 col-sm-12 col-md-12 col-lg-12">
							<h1 class="condensed-bold black-text"><?php echo esc_html(get_post_type_object(get_post_type())->label); ?></h1>
					</div>
				</div>


						<?php if (have_posts()) :
                            while (have_posts()) :
                                the_post(); ?>
							<div class="col-xs-12 col-sm-4 col-md-4 col-lg-4">
							<h2 class="black-text small-heading"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h2>
								<div class="data"><?php the_time('Y/m/d'); ?></div>
							<div class="entry"><?php the_excerpt(); ?></div>
							</div>

							<?php endwhile; endif; ?>
			</div>
			</div>
			</div>
		</div>
		</div>
	</section>
		<?php get_footer(); ?>
