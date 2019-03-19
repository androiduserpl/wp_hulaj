<!DOCTYPE html>
<html lang="pl">
<head>
	<meta charset="utf-8"/>
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?php wp_title('-', true, 'right'); ?><?php bloginfo('name'); ?></title>
	<link rel="stylesheet" href="<?php bloginfo('stylesheet_url'); ?>" type="text/css" media="screen" />
	<?php wp_enqueue_script( 'comment-reply' ); ?>
	<?php wp_head(); ?>
</head>

<body>

<header>
	<?php echo get_option('home'); ?>
	<?php bloginfo('name'); ?>
	<?php bloginfo('description'); ?>
</header>

<div class="content">  // <!--ten tag zamkniemy w footer.php-->
		<div id="content" class="site-content"> // ten tag zamkniemy w index.php