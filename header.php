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
<script src="<?php bloginfo('template_url');?>/js/jquery-1.11.3.min.js"></script>
<script src="<?php bloginfo('template_url');?>/js/jquery.bgswitcher.js"></script>
<link rel="stylesheet" href="<?php bloginfo('stylesheet_url');?>">
	<?php wp_head();?>
</head>

<body <?php body_class(); ?>>
