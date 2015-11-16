<!DOCTYPE html>
<html lang="ja">

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0, user-scalable=yes">
	<title>
		<?php
			global $page, $paged;
			if (is_search ()) :
			wp_title ( '', true, 'left' );
			echo '｜';
			else :
			wp_title ( '｜', true, 'right' );
			endif;
			bloginfo ( 'name' );
			if (is_front_page ()) :
			echo '｜';
			bloginfo ( 'description' );
			endif;
			if ($paged >= 2 || $page >= 2) :
			echo '｜' . sprintf ( '%sページ', max ( $paged, $page ) );
			endif;
		?>
	</title>
	<!-- jQuery library (served from Google) -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:700,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<script src="<?php bloginfo('template_url');?>/js/jquery-1.11.3.min.js"></script>
	<script src="<?php bloginfo('template_directory'); ?>/js/owl.carousel.min.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.carousel.min.css">
	<link rel="stylesheet" href="<?php bloginfo('template_directory'); ?>/css/owl.theme.default.min.css">
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
	<script>
		$(document).ready(function() {
			$('.owl-carousel').owlCarousel({
				loop: true,
				margin: 30,
				nav: true,
				navText: ["<i class='fa fa-chevron-left' style='padding:0 2px'></i>", "<i class='fa fa-chevron-right' style='padding:0 2px'></i>"],
				slideBy: 1,
				dots: true,
				responsive: {
					0: {
						items: 1
					},
					600: {
						items: 1
					},
				}
			})
		});
	</script>
	<?php wp_head();?>
</head>

<body <?php body_class(); ?>>
	<?php if(is_front_page()):?>
		<div class="menuwrapper" id="menuwrapper">
			<?php else:?>
				<div class="menuwrapper-lower" id="menuwrapper-lower">
					<?php endif;?>
						<div class="container-center">
							<div class="container-fluid">
								<div class="row">
									<nav class="topmenu col-xs-6 col-sm-12 col-md-12 col-lg-12">
										<a href="<?php echo home_url('/');?>">
											<span class="white-text companyname condensed-bold small-heading">Bulluck</span>
										</a>
										<?php
														wp_nav_menu(
															array(
															'container'  => '',
															'container_class' => '',
															'theme_location' => 'place_global'
															)
															)
														;?>
									</nav>
								</div>
							</div>
						</div>

				</div>
		</div>
	<div class="wrapper">
		<?php if(is_front_page()):?>
			<div class="keyvisual section-padding100 js-height">
				<div class="kv-table">
					<div class="container-fluid kv-table-cell">
						<div class="row">
							<h1 class="condensed-bold col-xs-12 col-sm-12 col-md-12 col-lg-12">Let's Bulluck.</h1>
						</div>
						<div class="row">
							<h2 class="condensed-bold top-buffer small-heading col-xs-12 col-sm-8 col-md-8 col-lg-8">BullでLuckな世界をつくる。</h2>
						</div>
						<div class="margin-t80 row">
							<p class="white-text col-xs-12 col-sm-12 col-md-12 col-lg-12">
								ブラックは、皆様の事業をより理想に近づけるために、マーケティングとテクノロジーを通じて新しい価値を提供する株式会社です。クライアントをリードし、費用対効果をひとつづつ改善していくことで、日本全体のポテンシャルを世界水準にBulluckします。
							</p>
						</div>
					</div>
				</div>
			</div>
			<?php endif;?>
