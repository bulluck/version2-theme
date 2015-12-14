<?php get_header(); ?>
<div class="lower-top" id="blog">
<div class="section-table">
<div class="container-fluid s-table-cell">
	<div class="row">
	<div class="col-xs-12 top-buffer">
		<h1 class="large-heading condensed-bold align-center">
			BLOG
		</h1>
		<p class="top-buffer small-text white-text align-center">
			Bulluck + BLOG = Bullog. いつでもブラックな情報を。
		</p>

	</div>
	</div>
</div>
</div>
		</div>
<section class="margin-t80">
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
				<div class="col-xs-12">
					<span class="small-heading lighter-gray condensed-bold">Article Categories</span>
					<a href="<?php echo home_url('/');?>cafe/">
						<h2 class="large-heading redtext condensed-bold">Cafe</h2>
					</a>
					<p class="small-text top-buffer-padding">
						カフェに関するお役立ち情報をお届けします。
						<a class="redtext" href="<?php echo home_url('/');?>cafe/">カフェに関する記事を読む<i class="fa fa-chevron-right" style="padding-left:10px;"></i></a>
					</p>
				</div>
			</div>
			<div class="row">

										<?php query_posts(array(
                            'post_type' => 'cafe', //カスタム投稿名
                            'taxonomy' => 'cafecat',
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
													<div class="col-xs-12 purewhitebg parent-relative archive-card">
														<a class="tagyellow-link" href="<?php echo home_url('/');?>cafe/">
															<span class="tagyellow white-text condensed-bold child-absolute">Cafe</span>
														</a>
														<h3 class="small-text top-buffer condensed-bold"><a href="<?php the_permalink(); ?>"><?php the_title(); ?></a></h3>
														<p class="small-text lighter-gray"><?php the_time('Y/m/d'); ?></p>
														<p class="small-text blog-top-buffer">
															<?php the_excerpt(); ?>
														</p>
													</div>
												</div>

											<?php endwhile;
                                        endif; ?>
											<?php wp_reset_query(); ?>
										</div>
									</div>
								</div>
</section>

<?php get_template_part('follow-area'); ?>

	<?php get_footer(); ?>
