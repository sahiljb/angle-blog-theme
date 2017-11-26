<footer id="footer" class="bg-primary">
	<div class="center">
		<div class="navbar">
			<div class="container">
				<?php 
					wp_nav_menu(array(
						'theme_location'=>'footermenu',
						'container'=>false,
						'menu_class'=>'nav navbar-nav'
						)
					);
				?>
			</div>
		</div>
	</div>
	<div class="container">
		<div class="social-icon pull-right">
			<div>
				<i class="fa fa-facebook"></i>
				<i class="fa fa-twitter"></i>
				<i class="fa fa-google-plus"></i>
			</div>
		</div>
		<p>&copy; 2017. All Rights Reserved.</p>
	</div>
</footer>
<?php //wp_nav_menu(array('theme_location'=>'footermenu')); ?>
<?php wp_footer(); ?>
</body>
</html>