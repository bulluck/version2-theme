<?php get_header(); ?>
	<section id="contents">
		<div class="contentswrap">
			<?php if (function_exists('wp_is_mobile') && !wp_is_mobile()) :?>
				<?php get_sidebar(); ?>
			<?php endif; ?>
			<div class="posts">
				<div class="contentslist">
					<?php if (!is_category('media')): ?>
						<header class="category-header">
							<h1><?php single_tag_title(); ?></h1>
						</header>
					<?php endif; ?>
					<?php if (is_category('media')):?>
						<table class="posts-table">
								<?php $i=0;
                                $cardlist = get_posts(array(
                                    'category_name' => 'media',
                                    'posts_per_page' => 6,
                                    'orderby' => date,
                                ));
                                foreach ($cardlist as $post):
                                    setup_postdata($post);?>
											<?php switch ($i):
                    case 0 :?>
											<tr>
												<td colspan="2" rowspan="2" class="posts-table-cell">
												 <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
													 <?php if (has_tag()) :
                                                                     the_tags('<div class="tags">', '</div><div class="tags">', '</div>');
                                                                 endif;  ?>
												 <div class="posts-table-text">
												 <p class="pub-day">
													 <?php the_time('Y年n月j日') ?>
												 </p>
												 <a href="<?php the_permalink(); ?>"><?php the_excerpt();?></a>
												 </div>
											 </td>
											 <?php break; ?>
											 <?php case 1: ?>
											 <td  class="posts-table-cell">
												<a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
													<?php if (has_tag()) :
                                                                    the_tags('<div class="tags">', '</div><div class="tags">', '</div>');
                                                                endif;  ?>
												<div class="posts-table-text">
												<p class="pub-day">
													<?php the_time('Y年n月j日') ?>
												</p>
												<a href="<?php the_permalink(); ?>"><?php the_excerpt();?></a>
												</div>
											</td>
										</tr>
										<?php break; ?>
										<?php case 2: ?>
										<tr>
												<td  class="posts-table-cell">
												 <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
													 <?php if (has_tag()) :
                                                                     the_tags('<div class="tags">', '</div><div class="tags">', '</div>');
                                                                 endif;  ?>
												 <div class="posts-table-text">
												 <p class="pub-day">
													 <?php the_time('Y年n月j日') ?>
												 </p>
												 <a href="<?php the_permalink(); ?>"><?php the_excerpt();?></a>
												 </div>
											 </td>
										</tr>
										<?php break; ?>
										<?php case 3:?>
										<tr>
												<td  class="posts-table-cell">
												 <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
													 <?php if (has_tag()) :
                                                                     the_tags('<div class="tags">', '</div><div class="tags">', '</div>');
                                                                 endif;  ?>
												 <div class="posts-table-text">
												 <p class="pub-day">
													 <?php the_time('Y年n月j日') ?>
												 </p>
												 <a href="<?php the_permalink(); ?>"><?php the_excerpt();?></a>
												 </div>
											 </td>
										<?php break; ?>
										<?php case 4: ?>
												<td  class="posts-table-cell">
												 <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
																							 <?php if (has_tag()) :
                                                                     the_tags('<div class="tags">', '</div><div class="tags">', '</div>');
                                                                 endif;  ?>
												 <div class="posts-table-text">
												 <p class="pub-day">
													 <?php the_time('Y年n月j日') ?>
												 </p>
												 <a href="<?php the_permalink(); ?>"><?php the_excerpt();?></a>
												 </div>
											 </td>
										<?php break; ?>
										<?php case 5: ?>
												<td  class="posts-table-cell">
												 <a href="<?php the_permalink(); ?>"> <?php the_post_thumbnail(); ?></a>
																							 <?php if (has_tag()) :
                                                                     the_tags('<div class="tags">', '</div><div class="tags">', '</div>');
                                                                 endif;  ?>
												 <div class="posts-table-text">
												 <p class="pub-day">
													 <?php the_time('Y年n月j日') ?>
												 </p>
												 <a href="<?php the_permalink(); ?>"><?php the_excerpt();?></a>
												 </div>
											 </td>
										</tr>
									<?php break; ?>


											 <?php endswitch;?>
								<?php $i++; ?>
							<?php endforeach;
                                 wp_reset_postdata(); ?>
						</table>

					<?php endif; ?>
					<script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
							<!-- 自社レスポンシブ白 -->
							<ins class="adsbygoogle"
							style="display:block"
							data-ad-client="ca-pub-6631134636456513"
							data-ad-slot="3312513581"
							data-ad-format="auto"></ins>
						<script>
						(adsbygoogle = window.adsbygoogle || []).push({});
						</script>
					<?php
                        $count =0;
                    if (have_posts()):
                        while (have_posts()):
                            the_post();
                            $count++;
                         get_template_part('content-archive');
                         if ($count==5):?>


						   <script async src="//pagead2.googlesyndication.com/pagead/js/adsbygoogle.js"></script>
						   <!-- 自社レスポンシブ白 -->
							   <ins class="adsbygoogle"
							   style="display:block"
							   data-ad-client="ca-pub-6631134636456513"
							   data-ad-slot="3312513581"
							   data-ad-format="auto"></ins>
						   <script>
						   (adsbygoogle = window.adsbygoogle || []).push({});
						   </script>
						 <?php
                         $count =0;
                     endif;
                     endwhile;
                 endif;
                          ?>

			</div>
		<?php get_footer(); ?>
			</div>
		</div>

	</section>
