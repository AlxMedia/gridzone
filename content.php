<?php $format = get_post_format(); ?>

<article id="post-<?php the_ID(); ?>" <?php post_class('masonry-item group'); ?>>	
	<div class="masonry-inner">
		
		<div class="entry-top">
			<a class="entry-thumbnail" href="<?php the_permalink(); ?>">
				<?php if ( has_post_thumbnail() ): ?>
					<?php the_post_thumbnail('gridzone-medium-h'); ?>
				<?php else: ?>
					<img src="<?php echo get_template_directory_uri(); ?>/img/thumb-medium.png" alt="<?php the_title_attribute(); ?>" />
				<?php endif; ?>
				<?php if ( has_post_format('video') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-play"></i></span>'; ?>
				<?php if ( has_post_format('audio') && !is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-volume-up"></i></span>'; ?>
				<?php if ( is_sticky() ) echo'<span class="thumb-icon"><i class="fas fa-star"></i></span>'; ?>
			</a>
			<div class="entry-category"><?php the_category(' '); ?></div>
		</div>
		<h2 class="entry-title">
			<a href="<?php the_permalink(); ?>" rel="bookmark"><?php the_title(); ?></a>
		</h2><!--/.entry-title-->
		
		<?php if (get_theme_mod('excerpt-length','0') != '0'): ?>
			<div class="entry-excerpt">
				<?php the_excerpt(); ?>
			</div>
		<?php endif; ?>
		
		<ul class="entry-meta group">
			<li class="entry-date"><i class="far fa-calendar"></i> <?php the_time( get_option('date_format') ); ?></li>
			<?php if ( comments_open() && ( get_theme_mod( 'comment-count', 'on' ) =='on' ) ): ?>
				<li class="entry-comments">
					<a class="entry-comments" href="<?php comments_link(); ?>"><i class="far fa-comment"></i><span><?php comments_number( '0', '1', '%' ); ?></span></a>
				</li>
			<?php endif; ?>
		</ul>
		
	</div>
</article><!--/.post-->	