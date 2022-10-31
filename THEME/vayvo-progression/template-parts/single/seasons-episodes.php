<?php $entries = get_post_meta( get_the_ID(), 'progression_studios_display_season_new', true ); ?>
<?php if( $entries != '' ) : ?> 
<div id="progression-video-single-section-seasons">
          <div id="progression-video-season-tabs">

          <ul class="video-tabs-nav-aztec nav">
              <?php $count = 1; foreach ( (array) $entries as $key => $entry ) :   ?>
              <li><a class="nav-link" href="#aztec-tab-<?php echo esc_attr($count) ?>"><?php echo esc_attr( $entry['progression_studios_season_title'] )?></a></li>
              <?php  $count++;  endforeach; ?>
          </ul>
          
          <?php $count = 1; foreach ( (array) $entries as $key => $entry ) :   ?>
              
  			<?php
  			//global $post;
              
            $seasons_tax = $entry['progression_studios_season_taxonomy'];
                                      
  			$args=array(
  			'post_type' => 'episodes_skrn',
  			'posts_per_page'=> '99',
            'order' => 'asc',
            'orderby' => 'title',
  			'tax_query' => array(
  			        array(
  			            'taxonomy'  => 'episode-season',
  			            'terms'     => $seasons_tax,
  						'field' => 'slug',
  			            'operator'  => 'IN'
  			        )
  			    ),	
  			);
	        
  			$rel_query = new WP_Query( $args ); if( $rel_query->have_posts() ) : 
  			?>
              
         
               <div class="tab-content">
                   <div id="aztec-tab-<?php echo esc_attr($count) ?>" class="tab-pane" role="tabpanel">
				  <ul class="progression-studios-episode-list-main">
                  
				  <?php               
                  while ( $rel_query->have_posts() ) : $rel_query->the_post();  ?>
                  <?php get_template_part( 'template-parts/single/content', 'seasons'); ?>
                  <?php   endwhile; ?>
				  </ul>
                
                
                </div><!-- close #aztec-tab-<?php echo esc_attr($i) ?> -->
               </div><!-- close .tab-content -->
                
        <?php  endif;			wp_reset_postdata();  ?>
            
        
                
          <?php  $count++;  endforeach; ?>
         
          
    	<div class="clearfix-pro"></div>
        </div><!-- close #progression-video-season-tabs -->
</div><!-- close #progression-video-single-section-more -->
<?php endif; ?>