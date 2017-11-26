<div class="well post-list" id="post">
	<div id="post-thubmnail" class="post-thubmnail">
		<!-- <img src="http://via.placeholder.com/750x250" class="img-responsive" alt="Image"> -->
		<?php the_post_thumbnail('large',['class'=>'img-responsive']); ?>
	</div>
	<div id="post-entry">
		<?php
			if (have_posts()):
				while (have_posts()): the_post();
		?>
			<h1><a href="<?php get_peramalink(); ?>"><?php the_title(); ?></a></h1>
			<div id="post-info">
				<span><i class="fa fa-user"></i> <?php the_author(); ?></span>&nbsp;&nbsp;
				<span><i class="fa fa-folder"></i> <?php the_category(); ?></span>&nbsp;&nbsp;
				<span><i class="fa fa-time"></i> <?php the_time('F j, Y'); ?></span>&nbsp;&nbsp;
				<span><i class="fa fa-comment"></i> 0 Comment</span>&nbsp;&nbsp;
			</div><br>
			<p><?php the_content(); ?></p>
			<button class="btn btn-sm btn-success">Read More <i class="fa fa-angle-right"></i></button>
		<?php		endwhile;
			endif;
		?>
	</div>
</div>