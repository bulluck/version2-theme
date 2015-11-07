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
	<link href='https://fonts.googleapis.com/css?family=Open+Sans+Condensed:700,300' rel='stylesheet' type='text/css'>
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/font-awesome/4.4.0/css/font-awesome.min.css">
<script src="<?php bloginfo('template_url');?>/js/jquery-1.11.3.min.js"></script>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
	<?php wp_head();?>
</head>
<body <?php body_class(); ?>>
	<?php if(is_front_page()):?>
	<div class="menuwrapper" id="menuwrapper">
	<?php else:?>
		<div class="menuwrapper-lower" id="menuwrapper-lower">
	<?php endif;?>
		<nav class="topmenu">
		<span class="white-text companyname condensed-bold small-heading">Bulluck</span>
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
	<?php if(is_front_page()):?>
	<div class="container-fruid keyvisual section-padding100 js-height">
		<div class="kv-table">
			<div class="kv-table-cell">
				<h1 class="condensed-bold">Lorem ipsum dolor sit</h1>
				<h2 class="condensed-bold top-buffer small-heading">Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod</h2>
				<div class="margin-t80">
					<p class="white-text">
						Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam, quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
					</p>
				</div>
			</div>
		</div>
	</div>
<?php endif;?>
