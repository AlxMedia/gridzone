<?php $meta = get_post_custom($post->ID); ?>

<?php if ( has_post_format( 'audio' ) ): // Audio ?>
	
	<div class="post-format">	
		<?php 
			if ( isset($meta['_audio_url'][0]) && !empty($meta['_audio_url'][0]) ) {
				global $wp_embed;
				$audio = $wp_embed->run_shortcode('[embed]'.esc_attr($meta['_audio_url'][0]).'[/embed]');
				echo $audio;
			}
		?>	
	</div>
	
<?php endif; ?>

<?php if ( has_post_format( 'gallery' ) ): // Gallery ?>
	
	<div class="post-format">
		<?php $images = gridzone_post_images(); if ( !empty($images) ): ?>
		<div class="slick-image-slide-wrapper">
			<div class="slick-image-slide-nav"></div>
			<div class="slick-image-slide" id="slide-<?php the_ID(); ?>">
				<?php foreach ( $images as $image ): ?>
					<div>
						<?php $imageid = wp_get_attachment_image_src($image->ID,'gridzone-large-h'); ?>
						<img src="<?php echo esc_attr( $imageid[0] ); ?>" alt="<?php echo esc_attr( $image->post_title ); ?>">
						
						<?php if ( $image->post_excerpt ): ?>
							<div class="image-caption"><?php echo $image->post_excerpt; ?></div>
						<?php endif; ?>
					</div>
				<?php endforeach; ?>
			</div>
			<div class="slick-image-slide-dots"></div>
		</div>
		<?php endif; ?>
	</div>
	
<?php endif; ?>

<?php if ( has_post_format( 'image' ) ): // Image ?>

	<div class="post-format">
		<div class="image-container">
			<?php if ( has_post_thumbnail() ) {	
				the_post_thumbnail('gridzone-large-h'); 
				$caption = get_post(get_post_thumbnail_id())->post_excerpt;
				if ( isset($caption) && $caption ) echo '<div class="image-caption">'.$caption.'</div>';
			} ?>
		</div>
	</div>
	
<?php endif; ?>

<?php if ( has_post_format( 'video' ) ): // Video ?>

	<div class="post-format">	
		<?php 
			if ( isset($meta['_video_url'][0]) && !empty($meta['_video_url'][0]) ) {
				global $wp_embed;
				$video = $wp_embed->run_shortcode('[embed]'.esc_attr($meta['_video_url'][0]).'[/embed]');
				echo $video;
			}
		?>	
	</div>
	
<?php endif; ?>

<?php if ( has_post_format( 'quote' ) ): // Quote ?>
	
<?php endif; ?>

<?php if ( has_post_format( 'chat' ) ): // Chat ?>

<?php endif; ?>

<?php if ( has_post_format( 'link' ) ): // Link ?>

<?php endif; ?>
