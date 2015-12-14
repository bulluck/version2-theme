<?php get_header(); ?>
<div class="lower-top" id="cafe">
<div class="section-table">
<div class="container-fluid s-table-cell">
	<div class="row">
	<div class="col-xs-12 top-buffer">
		<h1 class="large-heading condensed-bold align-center">
			カフェ
		</h1>
		<p class="top-buffer small-text white-text align-center">
			仕事もおしゃべりも。心温まる時間。
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
						<div class="col-xs-12 col-sm-12">

							<span class="small-heading lighter-gray condensed-bold">Article Categories</span>
							<h2 class="large-heading yellowtext condensed-bold">Nomad</h2>
							<p class="small-text top-buffer-padding">
								ノマドワークに適したカフェ情報をお届けします。
							</p>
												<?php query_posts(array(
                                    'post_type' => 'cafe', //カスタム投稿名
                                    'taxonomy' => 'cafecat',
                                    'term' => 'nomad',
                                    'posts_per_page' => 3 //表示件数（ -1 = 全件 ）
                                )); ?>
													<?php if (have_posts()): ?>
													<?php while (have_posts()):the_post(); ?>
																		<div class="col-xs-12 col-sm-4 top-buffer">
																			<div class="blog-thumbnail">
																				<?php if (has_post_thumbnail()):?>
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
																			</div>
																		</div>

																				<?php endwhile;
                                                                            endif; ?>
																				<?php wp_reset_query(); ?>
						</div>
					</div>
						<aside class="col-xs-12 col-sm-3">
							<div class="widget-title font-bold">
								カフェ記事カテゴリ
							</div>
							<ul class="side-cat-list">
								<?php wp_list_categories(array('title_li' => '', 'taxonomy' => 'cafecat', 'show_count' => 1)); ?>
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
