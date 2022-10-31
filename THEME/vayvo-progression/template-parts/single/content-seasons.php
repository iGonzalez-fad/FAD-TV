<li class="progression-studios-episode-list-item">
			<div class="progression-episode-list-flex">
				
				<div class="progression-studios-episode-image-container">
					<div class="progression-episode-list-left-margin">

						<?php if(get_post_meta($post->ID, 'progression_studios_episode_video_embed', true) && get_theme_mod( 'progression_studios_episode_link', 'default') == 'default' ): ?>
							<div class="episode-video-list-embed-video">
								<?php 
								$embed_video_code = get_post_meta($post->ID, 'progression_studios_episode_video_embed', true);
								echo apply_filters('progression_studios_video_content_filter',  $embed_video_code ); ?>
								
							</div>
						<?php else: ?>
	
							<?php if(get_post_meta($post->ID, 'progression_studios_episode_image', true) ): ?>
							<?php if ( get_theme_mod( 'progression_studios_episode_link') == 'post_link') : ?>
								<a href="<?php the_permalink(); ?>">
							<?php else: ?>
							<a href="#season-episode-lightbox-<?php echo esc_html(get_the_ID()); ?>" class="afterglow">
							<?php endif; ?>
							<div class="progression-episode-list-image-container">
							<img src="<?php	
							$image_url = get_post_meta($post->ID, 'progression_studios_episode_image', true) ;
							echo esc_url( $image_url);
							?>" alt="<?php the_title(); ?>">
								<div class="progression-episode-list-overlay-play"><i class="fa fa-play"></i></div>
						      </div><!-- close .progression-episode-list-image-container -->
							</a>
							
							
							
							<?php if(get_post_meta($post->ID, 'progression_studios_episode_video_mp4', true) ): ?>
				            <div style="display:none;">
				 	           <video id="season-episode-lightbox-<?php echo esc_html(get_the_ID()); ?>" <?php if(get_post_meta($post->ID, 'progression_studios_episode_vimeo_video', true) ): ?>poster="<?php echo esc_url( get_post_meta($post->ID, 'progression_studios_episode_video_poster', true) )?>"<?php endif; ?> <?php if( get_post_meta($post->ID, 'progression_studios_custom_dimension', true) == 'on' ): ?>width="<?php echo esc_attr( get_post_meta($post->ID, 'progression_studios_video_width', true)); ?>" height="<?php echo esc_attr( get_post_meta($post->ID, 'progression_studios_video_height', true)); ?>"<?php else: ?>width="960" height="540"<?php endif; ?>><source src="<?php echo esc_url( get_post_meta($post->ID, 'progression_studios_episode_video_mp4', true) )?>" type="video/mp4"></video>
				            </div>
							<?php endif; ?>
							
							
							<?php if(get_post_meta($post->ID, 'progression_studios_episode_vimeo_video', true) ): ?>
				            <div style="display:none;">
				 	           <video id="season-episode-lightbox-<?php echo esc_html(get_the_ID()); ?>" <?php if( get_post_meta($post->ID, 'progression_studios_custom_dimension', true) == 'on' ): ?>width="<?php echo esc_attr( get_post_meta($post->ID, 'progression_studios_video_width', true)); ?>" height="<?php echo esc_attr( get_post_meta($post->ID, 'progression_studios_video_height', true)); ?>"<?php else: ?>width="960" height="540"<?php endif; ?> data-vimeo-id="<?php echo esc_attr( get_post_meta($post->ID, 'progression_studios_episode_vimeo_video', true)); ?>"></video>
				            </div>
							<?php endif; ?>
							
							<?php if(get_post_meta($post->ID, 'progression_studios_episode_youtube_video', true) ): ?>
				            <div style="display:none;">
				 	           <video id="season-episode-lightbox-<?php echo esc_html(get_the_ID()); ?>" <?php if( get_post_meta($post->ID, 'progression_studios_custom_dimension', true) == 'on' ): ?>width="<?php echo esc_attr( get_post_meta($post->ID, 'progression_studios_video_width', true)); ?>" height="<?php echo esc_attr( get_post_meta($post->ID, 'progression_studios_video_height', true)); ?>"<?php else: ?>width="960" height="540"<?php endif; ?> data-youtube-id="<?php echo esc_attr( get_post_meta($post->ID, 'progression_studios_episode_youtube_video', true)); ?>"></video>
				            </div>
							<?php endif; ?>
							
							
							<?php endif; ?>
							
						<?php endif; ?>
						
					</div><!-- close .progression-episode-list-left-margin -->
				</div><!-- close  .progression-studios-episode-image-container -->

				<div class="progression-studios-episode-right-container">
						<div class="progression-episode-list-right-margin">
							<?php if( get_post_meta($post->ID, 'progression_studios_episode_video_mp4', true) || get_post_meta($post->ID, 'progression_studios_episode_vimeo_video', true) || get_post_meta($post->ID, 'progression_studios_episode_youtube_video', true)  ): ?>
								<?php if ( get_theme_mod( 'progression_studios_episode_link') == 'post_link') : ?>
									<a href="<?php the_permalink(); ?>">
								<?php else: ?>
								<a href="#season-episode-lightbox-<?php echo esc_html(get_the_ID()); ?>" class="afterglow">
								<?php endif; ?>
							<?php endif; ?>
							<h2 class="progression-episode-list-title"><?php the_title(); ?></h2>
							<?php if( get_post_meta($post->ID, 'progression_studios_episode_video_mp4', true) || get_post_meta($post->ID, 'progression_studios_episode_vimeo_video', true) || get_post_meta($post->ID, 'progression_studios_episode_youtube_video', true)  ): ?>
							</a>
							<?php endif; ?>
							<ul class="progression-studios-episode-list-meta">
								<?php if( get_post_meta($post->ID, 'progression_studios_episode_release_date', true) ) : ?><li class="progression-episode-list-meta-release-date"><?php  $episode_video_release_date = get_post_meta($post->ID, 'progression_studios_episode_release_date', true) ; echo esc_attr(date_i18n(get_option('date_format'), strtotime($episode_video_release_date) )); ?></li><?php endif; ?>
								<?php if( get_post_meta($post->ID, 'progression_studios_episode_media_duration_meta', true)) : ?><li class="progression-episode-list-meta-duration"><?php echo esc_attr( get_post_meta($post->ID, 'progression_studios_episode_media_duration_meta', true) )?></li><?php endif; ?>
							</ul>
							
							<?php if(get_post_meta($post->ID, 'progression_studios_description', true) ): ?><div class="progression-episode-list-short-description"><?php echo wp_kses (( get_post_meta($post->ID, 'progression_studios_description', true) ), true)?></div><?php endif; ?>
						</div><!-- close .progression-episode-list-right-margin -->
				</div><!-- close  .progression-studios-episode-right-container -->
		
		<div class="clearfix-pro"></div>
		</div><!-- close .progression-episode-list-flex -->
		</li>
