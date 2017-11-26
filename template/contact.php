<?php
/*
	Template Name: Contact Page
*/
get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<div class="well post-list" id="post">
				<div id="post-entry">
					<?php
						if (have_posts()):
							while (have_posts()): the_post();
					?>
						<h1><?php the_title(); ?></h1><br>
						<p><?php the_content(); ?></p>
					<?php		endwhile;
						endif;
					?>
				</div>
			</div>
		</div>
		<div class="col-sm-4">
			<?php get_sidebar(); ?>
		</div>
	</div>

</div>

<?php get_footer(); ?>