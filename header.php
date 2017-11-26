<!DOCTYPE html>
<html <?php language_attributes(); ?>>
	<head>
		<meta charset="<?php bloginfo('charset'); ?>">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title><?php bloginfo('name'); ?><?php wp_title('|'); ?></title>
		<?php wp_head(); ?>
</head>
<?php 
	if (is_front_page()):
		$angelblog_class = 'angelblog-home angelblog';
	elseif(is_home()):
		$angelblog_class = 'angelblog-blog angelblog';
	else:
		$angelblog_class = 'angelblog';
	endif;
?>
<body <?php body_class( $angelblog_class ); ?>>
<img src="<?php header_image(); ?>" >
<!-- height="<?php //echo get_custom_header()->height; ?>" width="<?php //echo get_custom_header()->width; ?>" background="repeat" -->
<header>
	<div class="container">
		<div class="pull-right" id="ad">
			<img src="http://via.placeholder.com/600x80" class="img-responsive" alt="Image">
		</div>
		<div id="logo">
			<img src="http://via.placeholder.com/300x80" class="img-responsive" alt="Image">
		</div>
	</div>
	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<!-- Brand and toggle get grouped for better mobile display -->
			<div class="navbar-header">
				<button type="button" class="navbar-toggle" data-toggle="collapse" data-target=".navbar-collapse">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
			</div>
			<div class="collapse navbar-collapse">
			<?php 
				wp_nav_menu(array(
					'theme_location'=>'primary',
					'container'=>false,
					'menu_class'=>'nav navbar-nav'
					)
				);
			?>
			</div>
			<!-- Collect the nav links, forms, and other content for toggling 
			<div class="collapse navbar-collapse">
				<ul class="nav navbar-nav">
					<li class="active"><a href="index.html"><i class="fa fa-home"></i> Home</a></li>
					<li><a href="#">About Us</a></li>
					<li><a href="#">Contact Us</a></li>
				</ul>
			</div>--><!-- /.navbar-collapse -->
		</div>
	</nav>
</header>
