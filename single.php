<?php get_header(); ?>

<div class="container">
	<div class="row">
		<div class="col-sm-8">
			<?php //get_template_part('template/content'); ?>
			<?php
				if (have_posts()):
					while (have_posts()): the_post();
			?>
				<div class="well post-list" id="post">
					<div id="post-thubmnail" class="post-thubmnail">
						<img src="http://via.placeholder.com/750x250" class="img-responsive" alt="Image">
						<?php the_post_thumbnail('large',['class'=>'img-responsive']); ?>
					</div>
					<div id="post-entry">
							<h1><?php the_title(); ?></h1>
							<div id="post-info">
								<span><i class="fa fa-user"></i> <?php the_author(); ?></span>&nbsp;&nbsp;
								<span><i class="fa fa-folder"></i> <?php the_category(); ?></span>&nbsp;&nbsp;
								<span><i class="fa fa-time"></i> <?php the_time('F j, Y'); ?></span>&nbsp;&nbsp;
								<span><i class="fa fa-comment"></i> 0 Comment</span>&nbsp;&nbsp;
							</div><br>
							<p><?php the_content(); ?></p>
					</div>
					<div class="share">
						<h2>Share This Post</h2>
						<span><i class="fa fa-print"></i></span>
						<span><i class="fa fa-envelope"></i></span>
						<span class="i fa fa-facebook"></span>
						<span class="i fa fa-twitter"></span>
						<span class="i fa fa-linkedin"></span>
						<span class="i fa fa-google-plus"></span>
						<span class="i fa fa-reddit"></span>
					</div>
				</div>
			<?php		endwhile;
				endif;
			?>
		</div>
		<div class="col-sm-4">
			<?php get_sidebar(); ?>
		</div>
	</div>
</div>

<?php get_footer(); ?>