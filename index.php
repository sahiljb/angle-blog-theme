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
							<?php the_title( sprintf( '<h1><a href="%s">', esc_html(get_permalink())),'</a></h1>'); ?>
							<div id="post-info">
								<span><i class="fa fa-user"></i> Sahil Buddhadev</span>&nbsp;&nbsp;
								<span><i class="fa fa-folder"></i> <?php the_category(' '); ?></span>&nbsp;&nbsp;
								<span><i class="fa fa-time"></i> <?php the_time('F j, Y'); ?></span>&nbsp;&nbsp;
								<span><i class="fa fa-comment"></i> 0 Comment</span>&nbsp;&nbsp;
							</div><br>
							<p><?php the_content(); ?></p>
							<a class="btn btn-sm btn-success" href="<?php echo get_permalink(); ?>">Read More  <i class="fa fa-angle-right"></i></a>
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