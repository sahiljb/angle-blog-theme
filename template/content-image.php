<div class="well post-list" id="post">
	<?php
		if (have_posts()):
			while (have_posts()): the_post();
	?>
	<div id="post-thubmnail" class="post-thubmnail">
		<!-- <img src="http://via.placeholder.com/750x250" class="img-responsive" alt="Image"> -->
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
	<?php		endwhile;
		endif;
	?>
	</div>
</div>