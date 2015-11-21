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

	<!-- <link rel="stylesheet" href="<?php bloginfo('template_url');?>/css/normalize.min.css"> -->
	<link href='https://fonts.googleapis.com/css?family=Roboto+Condensed:700,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
	<script src="<?php bloginfo('template_url');?>/js/jquery-1.11.3.min.js"></script>
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/bootstrap.min.css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/layout.css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/common.css" media="screen" title="no title" charset="utf-8">
	<link rel="stylesheet" href="<?php bloginfo('template_directory');?>/css/nav-lp.css" media="screen" title="no title" charset="utf-8">



	<?php wp_head();?>
</head>
<body <?php body_class(); ?> id="body-top">
	<p id="page-top">
		<a href="#wrap">PAGE TOP</a>
	</p>
		<div class="wrapnormal" style="padding:0">
			<div class="kvbox">
					<div class="heading">


						<div class="menuwrapper-lower" id="menuwrapper-lower">
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
				<div class="kvbn">
					<?php if (function_exists('wp_is_mobile') && !wp_is_mobile()) :?>
									<span class="consulspan">経営コンサルタントによる</span>
										<div class="kvbntext">

                      <h3>
												<span class="kvspanstrong">90%</span>以上のお客様の売上を<span class="kvspanstrong">3ヶ月</span>で<span class="kvspanstrong">3倍</span>にした
                      </h3>
											<h3><span class="kvtexth3">「</span><span class="kvtexth3 kvstrong">受注率</span><span class="kvtexth3">にコミットする」</span></h3><h3 class="kvtexth3">Webサイト/LP制作</h3>
                    </div>
				<?php elseif (function_exists('wp_is_mobile') && wp_is_mobile()) :?>
					<div class="kvbntext_sp">
						<h3>
							<span class="kvspanstrong">90%</span>以上のお客様の売上を<span class="kvspanstrong">3ヶ月</span>で<span class="kvspanstrong">3倍</span>にした
						</h3>
						<h3><span class="kvtexth3">「</span><span class="kvtexth3 kvstrong">受注率</span><span class="kvtexth3">にコミットする」</span></h3><h3 class="kvtexth3">Webサイト/LP制作</h3>
                    </div>
				<?php endif; ?>
				<?php if(!wp_is_mobile()):?>
					<a href="http://bulluck.co.jp/contact/" target="_blank">
							<img alt="" src="http://bulluck.co.jp/version2/wp-content/uploads/2015/11/bullexitbtn.png" >
					</a>
				<?php else:?>
					<a href="http://bulluck.co.jp/contact/" target="_blank">
						<img alt="" src="http://bulluck.co.jp/version2/wp-content/uploads/2015/11/bullexitbtn.png">
					</a>
				<?php endif;?>

				</div>
			</div>
		</div>
