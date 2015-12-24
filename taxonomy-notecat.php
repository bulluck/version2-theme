<?php get_header(); ?>
<div class="lower-top" id="note">
<div class="section-table">
<div class="container-fluid s-table-cell">
	<div class="row">
	<div class="col-xs-12 top-buffer">
		<p class="small-heading lighter-gray condensed-bold">Note</p>
		<h1 class="large-heading condensed-bold">
			<?php

                                $term_info = get_term_by('slug', $term, 'notecat');
                                                                echo $term_info->name;
                                ?>
		</h1>
		<p class="top-buffer small-text white-text">
			に関する情報をお届けします。
		</p>
	</div>
	</div>
</div>
</div>
</div>

<section class="section-padding80">
	<div class="container-center">
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
				<div class="col-xs-12 col-sm-9 pull-right">

					          <?php if (have_posts()) :
                                 while (have_posts()) :
                                   the_post(); ?>
									<div class="col-xs-12 col-sm-4 bottom-buffer-padding">
										<div class="blog-thumbnail">
										<?php
                                        if (has_post_thumbnail()):?>
											<a href="<?php the_permalink();?>">
										<?php	the_post_thumbnail('pickup_thumbnail', array('alt' => the_title_attribute('echo=0'), 'title' => the_title_attribute('echo=0')));?>
											</a>
									<?php else: ?>
										<a href="<?php the_permalink();?>">
										<img class="worksimg" src="<?php bloginfo('template_directory');?>/images/default-thumbnail.jpg" alt="デフォルトイメージ" />
										</a>
									<?php endif; ?>
										</div>
										<div class="col-xs-12 purewhitebg blog-card-title">
											<p class="small-text"><?php the_time('Y/m/d'); ?></p>
											<h3 class="small-text font-bold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
											<div class="term"><?php the_terms($post->ID, 'note'); ?></div>
										</div>
									</div>
								<?php endwhile; endif; ?>
				</div>
				<aside class="col-xs-12 col-sm-3">
					<div class="widget-title font-bold">
						ノート記事カテゴリ
					</div>
					<ul class="side-cat-list">
						<?php wp_list_categories(array('title_li' => '', 'taxonomy' => 'notecat', 'show_count' => 1)); ?>
					</ul>

					<div class="fb-page top-buffer" data-href="https://www.facebook.com/bulluck.co.jp/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/bulluck.co.jp/"><a href="https://www.facebook.com/bulluck.co.jp/">Bulluck Co., Ltd.</a></blockquote></div></div>
					<div>
						<div class="widget-title font-bold top-buffer">
							記事カテゴリ
						</div>
						<?php get_sidebar(); ?>
					</div>
				</aside>
			</div>
		</div>
	</div>
</section>
	<?php get_footer(); ?>
