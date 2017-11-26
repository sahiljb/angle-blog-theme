<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-12 text-center">
			<div class="jumbotron">
				<div class="container">
					<h1>404! Page Not Found!</h1>
					<p>Sorry! The page your are finding is not available, please try something!</p>
					<p>
					<?php get_search_form(); ?>
					</p>
				</div>
			</div>
		</div>
	</div>
	<div class="row">
		<div class="col-sm-4">
			<?php the_widget('WP_Widget_Recent_Posts'); ?>	
		</div>
		<div class="col-sm-4">
			<div class="widget">
				<h2 class="widgettitle">Categories</h2>
				<ul>
					<?php wp_list_categories(array(
						'orderby' 		=> 'count',
						'order'				=> 'DESC',
						'show_count'	=> 1,
						'title_li'		=> '',
						'number'			=> 5
					) ); ?>
				</ul>
			</div>
		</div>
		<div class="col-sm-4">
			<?php the_widget('WP_Widget_Archives', 'dropdown=1', "after_title=</h2>$arhive_content"); ?>
		</div>
	</div>
	</div>

<?php get_footer(); ?>