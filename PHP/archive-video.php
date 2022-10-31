<?php
/**
 * The template for displaying archive pages.
 *
 * Learn more: http://codex.wordpress.org/Template_Hierarchy
 *
 * @package pro
 */

get_header(); ?>

<?php

function advance_search_where($where){
    global $wpdb;
    if (is_search())
        $where .= "OR (t.name LIKE '%".get_search_query()."%' AND {$wpdb->posts}.post_status = 'publish')";
    return $where;
}

function advance_search_join($join){
    global $wpdb;
    if (is_search())
        $join .= "LEFT JOIN {$wpdb->term_relationships} tr ON {$wpdb->posts}.ID = tr.object_id INNER JOIN {$wpdb->term_taxonomy} tt ON tt.term_taxonomy_id=tr.term_taxonomy_id INNER JOIN {$wpdb->terms} t ON t.term_id = tt.term_id";
    return $join;
}

function advance_search_groupby($groupby){
    global $wpdb;

    // we need to group on post ID
    $groupby_id = "{$wpdb->posts}.ID";
    if(!is_search() || strpos($groupby, $groupby_id) !== false) return $groupby;

    // groupby was empty, use ours
    if(!strlen(trim($groupby))) return $groupby_id;

    // wasn't empty, append ours
    return $groupby.", ".$groupby_id;
}

add_filter('posts_where','advance_search_where');
add_filter('posts_join', 'advance_search_join');
add_filter('posts_groupby', 'advance_search_groupby');
?>
	
		<div id="content-pro" class="site-content">
			<div class="width-container-pro">
				
				<?php
					if ( get_query_var('paged') ) { $paged = get_query_var('paged'); } else if ( get_query_var('page') ) { $paged = get_query_var('page'); } else { $paged = 1;}
				
					if(isset($_GET['search_keyword'])) {
						if($_GET['search_keyword']) {
							$keyword = $_GET['search_keyword'];
						} else {
							$keyword = null;
						}
					}
					
					$args = array(
						'post_type' => 'video_skrn',
						'paged' => $paged,
						's' => $keyword
					);
				
				if(isset($_GET['search_keyword'])) {
				$term = get_term_by('slug', $keyword, 'alumnos'); 
				/*console_log($keyword);*/
				/* console_log($term);*/
						
						if($_GET['search_keyword']) {
							$args['tax_query'][] = array(
							'taxonomy' => 'alumnos',
							'field' => 'slug',
							'terms' => array($keyword),
							'operator' => 'IN'
						);
							
						}
					}
					
					$vtype_expanded = (array) $_GET['vtype'];
					if(isset($_GET['vtype'])) {
					if($_GET['vtype']) {
						$args['tax_query'][] = array(
							'taxonomy' => 'video-type',
							'field' => 'slug',
							'terms' => $vtype_expanded,
							'operator' => 'IN',
						);
						
					}
					}
					
					if( get_theme_mod( 'progression_studios_video_search_multiple_genre') == 'multiple' ) {
						$vgenre_expanded = (array) $_GET['vgenre'];
					} else {
						$vgenre_expanded = $_GET['vgenre'];
					}

					if(isset($_GET['vgenre'])) {
					if($_GET['vgenre']) {
						$args['tax_query'][] = array(
							'taxonomy' => 'video-genres',
							'field' => 'slug',
							'terms' => $vgenre_expanded
						);
					}
					}
					
					if(isset($_GET['vduration'])) {
					if($_GET['vduration']) {
						$args['meta_query'][] = array(
							'key' => 'progression_studios_media_duration',
							'value' => $_GET['vduration'],
						);
					}
					}
					
					if(isset($_GET['vrating'])) {
					if($_GET['vrating']) {
						$vrating = explode( ',', $_GET['vrating'] );
						$args['meta_query'][] = array(
							// I know it isn't a key but can't figure it out 'key' => skrn_pro_comment_rating_get_average_ratings( $post->ID ),
							'key' => '_average_ratings',
							'value' => array( floatval( $vrating[0] ), floatval ( $vrating[1] ) ),
							'type' => 'DECIMAL',
							'compare' => 'BETWEEN'
						);
					}
					}
					
					
					if( get_theme_mod( 'progression_studios_video_search_multiple_cat') == 'multiple' ) {
						$vcategory_expanded = (array) $_GET['vcategory'];
					} else {
						$vcategory_expanded = $_GET['vcategory'];
					}
					
					
					if(isset($_GET['vcategory'])) {
					if($_GET['vcategory']) {
						$args['tax_query'][] = array(
							'taxonomy' => 'video-category',
							'field' => 'slug',
							'terms' => $vcategory_expanded,
							'operator' => 'IN',
						);
					}
					}
					
					
					if( get_theme_mod( 'progression_studios_video_search_multiple_director') == 'multiple' ) {
						$vdirector_expanded = (array) $_GET['vdirector'];
					} else {
						$vdirector_expanded = $_GET['vdirector'];
					}
					
					if(isset($_GET['vdirector'])) {
					if($_GET['vdirector']) {
						$args['tax_query'][] = array(
							'taxonomy' => 'video-director',
							'field' => 'slug',
							'terms' => $vdirector_expanded,
							'operator' => 'IN',
						);
					}
					}
				
				/*console_log($args);*/
				/*console_log(query_posts($args));*/
				query_posts($args); if(have_posts()):
				?>
					
					<div id="progression-studios-search-results-videos">
						<span><?php vayvo_progression_studios_search_video_counter(); ?></span> <?php echo esc_html__( 'Videos encontrados', 'vayvo-progression' ); ?>
					</div>
					
					<div class="progression-masonry-margins" style="margin-top:-<?php echo esc_attr(get_theme_mod('progression_studios_blog_index_gap', '3')); ?>px; margin-left:-<?php echo esc_attr(get_theme_mod('progression_studios_blog_index_gap', '3')); ?>px; margin-right:-<?php echo esc_attr(get_theme_mod('progression_studios_blog_index_gap', '3')); ?>px;">
						<div class="progression-studios-video-index-list">
							<?php while ( have_posts() ) : the_post(); ?>
								<div class="progression-masonry-item progression-masonry-col-<?php echo esc_attr(get_theme_mod( 'progression_studios_blog_columns', '3')); ?>">
									<div class="progression-masonry-padding-blog" style="padding:<?php echo esc_attr(get_theme_mod('progression_studios_blog_index_gap', '3')); ?>px;">
										<div class="progression-studios-isotope-animation">
											<?php get_template_part( 'template-parts/content', 'skrn_video' ); ?>
										</div><!-- close .studios-isotope-animation -->
									</div><!-- close .progression-masonry-padding-blog -->
								</div><!-- cl ose .progression-masonry-item -->
							<?php endwhile; ?>
							<div class="clearfix-pro"></div>
							
						</div><!-- close .progression-studios-video-index-list -->
						
						</div><!-- close .progression-masonry-margins -->
			
					<?php if (get_theme_mod( 'progression_studios_blog_pagination' ) == 'default') : ?>
						<?php progression_studios_show_pagination_links_pro(); ?>
					<?php endif; ?>
			
					<?php if (get_theme_mod( 'progression_studios_blog_pagination', 'load-more') == 'load-more') : ?>
						<div id="progression-load-more-manual"><?php progression_studios_infinite_content_nav_pro( 'nav-below' ); ?></div>
					<?php endif; ?>
			
					<?php if (get_theme_mod( 'progression_studios_blog_pagination') == 'infinite-scroll') : ?>
						<?php progression_studios_infinite_content_nav_pro( 'nav-below' ); ?>
					<?php endif; ?>

					<div class="clearfix-pro"></div>
				<?php else : ?>
			
<div class="progression-studios-video-index-none">
						<section class="no-results-pro not-found-pro">
<!--	
<h2 class="page-title-pro"><?php esc_html_e( 'No se encontraron proyectos', 'vayvo-progression' ); ?></h2>
<div class="page-content-pro">
<p><?php esc_html_e( 'No se encontró nada con los términos utilizados, intenta de nuevo con otros términos.', 'vayvo-progression' ); ?></p> -->
							<!-- SHORTCODE PARA AUSENCIA DE RESULTADOS / NO HAY RESULTADOS -->
							<?php echo do_shortcode('[elementor-template id="274"]'); ?>
							<!-- do_shortcode -->
							<!-- .</div>page-content -->
						</section><!-- .no-results -->
</div><!-- close .progression-video-index -->
			
				<?php endif; ?>
				
			<div class="clearfix-pro"></div>
			</div><!-- close .width-container-pro -->
		</div><!-- #content-pro -->
<?php get_footer(); ?>