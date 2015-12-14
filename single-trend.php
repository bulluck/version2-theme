<?php get_header(); ?>
<div class="lower-top" id="blog">
<div class="section-table">
<div class="container-fluid s-table-cell">
	<div class="row">
	<div class="col-xs-12 top-buffer">
		<div class="large-heading condensed-bold align-center white-text">
			Solve it
		</div>
		<p class="top-buffer small-text white-text align-center">
			わからないことを、わかることに。
		</p>

	</div>
	</div>
</div>
</div>
		</div>
<section class="section-padding80">
	<div class="container-center purewhitebg">
		<div class="container-fluid">
			<div class="row breadcrumb-row">
				<div class="col-xs-12">
					<div class="breadcrumbs">
					    <?php if (function_exists('bcn_display')) {
    bcn_display();
}?>
					</div>
				</div>
			</div>
			<div class="row">
				<div class="col-xs-12">

					<article class="article col-xs-12 col-sm-9 pull-right">
							<?php if (have_posts()) :
                                            while (have_posts()) :
                                     the_post(); ?>
							<h1 class="font-bold small-heading black-text top-buffer-padding"><?php the_title(); ?></h1>
							<div class="data top-buffer"><?php the_time('Y/m/d'); ?></div>
							<div class="top-buffer">
							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- ブラックメディア広告 -->
							<ins class="adsbygoogle"
							style="display:block"
							data-ad-client="ca-pub-6631134636456513"
							data-ad-slot="8035892386"
							data-ad-format="auto"></ins>
							<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
							</script>
							</div>
							<div class="entry top-buffer"><?php the_content(); ?></div>
							<div class="top-buffer">

							<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- ブラックメディア広告 -->
							<ins class="adsbygoogle"
							style="display:block"
							data-ad-client="ca-pub-6631134636456513"
							data-ad-slot="8035892386"
							data-ad-format="auto"></ins>
							<script>
							(adsbygoogle = window.adsbygoogle || []).push({});
							</script>
							</div>
								<div class="pagelink clearfix">
									<?php
                                    if (get_next_post()) {
                                        echo '<p class="nav-previous small-text black-text top-buffer">',next_post_link('%link', '<i class="fa fa-chevron-left" style="padding-right:10px;"></i>%title'),'</p>';
                                    }
                                    if (get_previous_post()) {
                                        echo '<p class="nav-next small-text black-text top-buffer">',previous_post_link('%link', '%title<i class="fa fa-chevron-right" style="padding-left:10px;"></i>'),'</p>';
                                    }
                                    ?>
								</div>
								<?php endwhile; endif; ?>
					</article>
					<aside class="pull-left col-xs-12 col-sm-3 top-buffer-padding">
						<?php wp_list_categories(array('taxonomy' => 'trendcat', 'show_count' => 1)); ?>
						<div class="fb-page" data-href="https://www.facebook.com/bulluck.co.jp/" data-small-header="false" data-adapt-container-width="true" data-hide-cover="false" data-show-facepile="true"><div class="fb-xfbml-parse-ignore"><blockquote cite="https://www.facebook.com/bulluck.co.jp/"><a href="https://www.facebook.com/bulluck.co.jp/">Bulluck Co., Ltd.</a></blockquote></div></div>
					</aside>
				</div>
			</div>
		</div>
	</div>
</section>
<?php get_footer(); ?>
