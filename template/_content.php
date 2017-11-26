<div id="post-entry">
	<article id="post-<?php the_ID(); ?>" class="<?php post_class(); ?>">
	<div class="well post-list" id="post-<?php the_ID(); ?>">
<?php
	if (have_posts()):
		while (have_posts()): the_post();
?>
		<header>
			<?php the_title( sprintf('<h1 class="entry-title"><a href="%s">', esc_url(get_permalink()) ),'</a></h1'); ?>
			<div id="post-info">
				<span><i class="fa fa-user"></i> <?php the_author(); ?></span>&nbsp;&nbsp;
				<span><i class="fa fa-folder"></i> <?php the_category(); ?></span>&nbsp;&nbsp;
				<span><i class="fa fa-time"></i> <?php the_time('F j, Y'); ?></span>&nbsp;&nbsp;
				<span><i class="fa fa-comment"></i> 0 Comment</span>&nbsp;&nbsp;
			</div><br>
		</header>
	<div id="post-thubmnail" class="post-thubmnail">
		<!-- <img src="http://via.placeholder.com/750x250" class="img-responsive" alt="Image"> -->
		<?php the_post_thumbnail('large',['class'=>'img-responsive']); ?>
	</div>
			<p><?php the_content(); ?></p>
			<button class="btn btn-sm btn-success">Read More</button>
<?php		endwhile;
	endif;
?>
	</div>
	</article>
</div>