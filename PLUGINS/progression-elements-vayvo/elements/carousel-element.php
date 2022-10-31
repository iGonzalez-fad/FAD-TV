<?php
namespace Elementor;

if ( ! defined( 'ABSPATH' ) ) exit; // If this file is called directly, abort.


class Widget_ProgressionElementsVideoCarousel extends Widget_Base {

	
	public function get_name() {
		return 'progression-video-post-carousel';
	}

	public function get_title() {
		return esc_html__( 'Carousel - Vayvo', 'progression-elements-vayvo' );
	}

	public function get_icon() {
		return 'eicon-carousel progression-studios-vayvo-pe';
	}

   public function get_categories() {
		return [ 'progression-elements-vayvo-cat' ];
	}
	
	public function get_script_depends() { 
		return [ 'owl-carousel' ];
	}
	
	
	
	function Widget_ProgressionElementsVideoCarousel($widget_instance){
		
	}
	
	protected function _register_controls() {

		
  		$this->start_controls_section(
  			'section_title_global_options',
  			[
  				'label' => esc_html__( 'Carousel Settings', 'progression-elements-vayvo' )
  			]
  		);
		
		$this->add_control(
			'boosted_post_list_text_title',
			[
				'label' => esc_html__( 'Section Heading', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::TEXT,
			]
		);
		
		$this->add_control(
			'boosted_post_list_sub_heading_text_title',
			[
				'label' => esc_html__( 'Section Sub-Heading', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::TEXT,
			]
		);
		
		$this->add_control(
			'progression_main_post_count',
			[
				'label' => esc_html__( 'Post Count', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::NUMBER,
				'default' => '6',
			]
		);
		
		$this->add_control(
			'progression_elements_image_grid_column_count',
			[
  				'label' => esc_html__( 'Columns Desktop', 'progression-elements-skrn' ),
				'type' => Controls_Manager::NUMBER,				
				'default' => '3',
				'render_type' => 'template'
			]
		);
		
		$this->add_control(
			'progression_elements_image_grid_column_count_tablet',
			[
  				'label' => esc_html__( 'Columns Tablet', 'progression-elements-skrn' ),
				'type' => Controls_Manager::NUMBER,				
				'default' => '2',
				'render_type' => 'template'
			]
		);
		
		$this->add_control(
			'progression_elements_image_grid_column_count_mobile',
			[
  				'label' => esc_html__( 'Columns Mobile', 'progression-elements-skrn' ),
				'type' => Controls_Manager::NUMBER,				
				'default' => '1',
				'render_type' => 'template'
			]
		);
		
		
  		$this->add_control(
  			'progression_elements_image_grid_margin',
  			[
  				'label' => esc_html__( 'Margin', 'progression-elements-skrn' ),
  				'type' => Controls_Manager::NUMBER,
				'default' => '5',
				'render_type' => 'template'
  			]
  		);
		
		
		
		
		$this->add_control(
			'carousel_autoplay',
			[
				'label' => esc_html__( 'Autoplay', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
			]
		);
  		$this->add_control(
  			'carousel_autoplay_duration_number',
  			[
  				'label' => esc_html__( 'Autoplay Duration', 'progression-elements-skrn' ),
  				'type' => Controls_Manager::NUMBER,
				'default' => '5000',
				'condition' => [
					'carousel_autoplay' => 'yes',
				],
  			]
  		);
		
		
		$this->add_control(
			'carousle_slide_by',
			[
  				'label' => esc_html__( 'Slide by', 'progression-elements-skrn' ),
				'type' => Controls_Manager::NUMBER,				
				'default' => '1',
				'render_type' => 'template'
			]
		);
		
		
		$this->add_control(
			'carousel_loop',
			[
				'label' => esc_html__( 'Loop Carousel', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => 'yes',
				'return_value' => 'yes',
			]
		);
		
		
		$this->add_control(
			'carousel_nav_on',
			[
				'label' => esc_html__( 'Carousel Arrows', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SWITCHER,
				'default' => 'yes',
				'return_value' => 'yes',
			]
		);
		
		
		$this->add_control(
			'carousel_nav_arrows',
			[
				'label' => esc_html__( 'Always Display Arrows', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'yes',
				'condition' => [
					'carousel_nav_on' => 'yes',
				],
			]
		);
		
		$this->add_control(
			'carousel_dots',
			[
				'label' => esc_html__( 'Carousel Dots', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
			]
		);
		

		
		$this->end_controls_section();
		
		
  		$this->start_controls_section(
  			'section_title_layout_options',
  			[
  				'label' => esc_html__( 'Post Layout', 'progression-elements-vayvo' )
  			]
  		);

		

		
		$this->add_control(
			'progression_elements_post_show_rating',
			[
				'label' => esc_html__( 'Display Rating', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		

		
		$this->add_control(
			'progression_elements_post_display_genres',
			[
				'label' => esc_html__( 'Display Video Genres', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
				'default' => 'yes',
			]
		);
		
		$this->add_control(
			'progression_elements_post_display_categories',
			[
				'label' => esc_html__( 'Display Video Categories', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
			]
		);
		$this->add_control(
			'progression_elements_post_display_types',
			[
				'label' => esc_html__( 'Display Video Types', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SWITCHER,
				'return_value' => 'yes',
			]
		);
		
  	

		
		$this->end_controls_section();
		
		
  		$this->start_controls_section(
  			'section_title_secondary_options',
  			[
  				'label' => esc_html__( 'Post Query', 'progression-elements-vayvo' )
  			]
  		);
		
		
		$this->add_control(
			'progression_post_types',
			[
				'label' => esc_html__( 'Narrow by Filtering Types', 'progression-elements-vayvo' ),
				'description' => esc_html__( 'Choose a filtering type to display posts', 'progression-elements-vayvo' ),
				'label_block' => true,
				'multiple' => true,
				'type' => Controls_Manager::SELECT2,
				'options' => vayvo_elements_post_type_types(),
			]
		);

		
		$this->add_control(
			'progression_post_genres',
			[
				'label' => esc_html__( 'Narrow by Genres', 'progression-elements-vayvo' ),
				'description' => esc_html__( 'Choose a genre to display posts', 'progression-elements-vayvo' ),
				'label_block' => true,
				'multiple' => true,
				'type' => Controls_Manager::SELECT2,
				'options' => vayvo_elements_post_type_genres(),
			]
		);
		
		$this->add_control(
			'progression_post_cats',
			[
				'label' => esc_html__( 'Narrow by Category', 'progression-elements-vayvo' ),
				'description' => esc_html__( 'Choose a category to display posts', 'progression-elements-vayvo' ),
				'label_block' => true,
				'multiple' => true,
				'type' => Controls_Manager::SELECT2,
				'options' => vayvo_elements_post_type_categories(),
			]
		);
		
		
		
		
		
		
		
		$this->add_control(
			'progression_elements_post_order_sorting',
			[
				'label' => esc_html__( 'Order By', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'date',
				'options' => [
					'date' => esc_html__( 'Default - Date', 'progression-elements-vayvo' ),
					'title' => esc_html__( 'Post Title', 'progression-elements-vayvo' ),
					'menu_order' => esc_html__( 'Menu Order', 'progression-elements-vayvo' ),
					'modified' => esc_html__( 'Last Modified', 'progression-elements-vayvo' ),
					'comment_count' => esc_html__( 'Comment Count', 'progression-elements-vayvo' ),
					'rand' => esc_html__( 'Random', 'progression-elements-vayvo' ),
					'post_views' => esc_html__( 'Sort by post views', 'progression-elements-vayvo' ),
				],
			]
		);
		
		
		$this->add_control(
			'progression_elements_post_order',
			[
				'label' => esc_html__( 'Order', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SELECT,
				'default' => 'DESC',
				'options' => [
					'ASC' => esc_html__( 'Ascending', 'progression-elements-vayvo' ),
					'DESC' => esc_html__( 'Descending', 'progression-elements-vayvo' ),
				],
			]
		);
		
		$this->add_control(
			'progression_main_offset_count',
			[
				'label' => esc_html__( 'Offset Count', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::NUMBER,
				'default' => '0',
				'description' => esc_html__( 'Use this to skip over posts (Example: 3 would skip the first 3 posts.)', 'progression-elements-vayvo' ),
			]
		);
	
		
		$this->end_controls_section();
		
		
  		$this->start_controls_section(
  			'section_title_post_filtering',
  			[
  				'label' => esc_html__( 'Post Sorting', 'progression-elements-vayvo' )
  			]
  		);
		
		
		$this->add_control(
			'progression_elements_post_sorting',
			[
  				'label' => esc_html__( 'Video Sorting', 'progression-elements-vayvo' ),
				'label_block' => true,
				'type' => Controls_Manager::SELECT,				
				'default' => 'none',
				'options' => [
					'none' => esc_html__( 'No Sorting', 'progression-elements-vayvo' ),
					'type' => esc_html__( 'Sort by Type', 'progression-elements-vayvo' ),
					'genre' => esc_html__( 'Sort by Genre', 'progression-elements-vayvo' ),
					'category' => esc_html__( 'Sort by Category', 'progression-elements-vayvo' ),
				],
			]
		);
		
		$this->add_control(
			'progression_elements_post_filtering_text',
			[
				'label' => esc_html__( 'Sorting Text for "All Posts"', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::TEXT,
				'label_block' => true,
				'default' => esc_html__( 'All', 'progression-elements-vayvo' ),
			]
		);
		
		

		
		
		
		$this->end_controls_section();
		
		$this->start_controls_section(
			'progression_elements_section_main_styles',
			[
				'label' => esc_html__( 'Main Styles', 'progression-elements-vayvo' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		

		
  		$this->add_control(
  			'progression_elements_container_border-radius',
  			[
  				'label' => esc_html__( 'Container Border Radius', 'progression-elements-vayvo' ),
  				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => 0,
						'max' => 50,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .video-index-border-hover, {{WRAPPER}} .progression-video-index-content, {{WRAPPER}} .progression-studios-video-index-container, {{WRAPPER}}  .progression-studios-video-feaured-image img' => 'border-radius: {{SIZE}}px;',
				],
  			]
  		);
		

		
		$this->add_responsive_control(
			'progression_elements_content_padding',
			[
				'label' => esc_html__( 'Container Padding', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .progression-video-index-vertical-align' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		
		$this->add_group_control(
			Group_Control_Background::get_type(),
			[
				'name' => 'progression_elements_background_overlay',
				'types' => [ 'classic', 'gradient' ],
				'separator' => 'before',
				'selector' => '{{WRAPPER}} .progression-video-index-content',
			]
		);
		
		
		$this->add_control(
			'progression_elements_image_background_color',
			[
				'label' => esc_html__( 'Border Hover Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .progression-studios-video-index-container:hover .video-index-border-hover' => 'border-color: {{VALUE}}',
				],
			]
		);
		
		$this->add_control(
			'progression_elements_rating_color',
			[
				'label' => esc_html__( 'Rating Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .average-rating-video-empty' => 'color: {{VALUE}}',
				],
			]
		);
		
		
		$this->add_control(
			'progression_elements_rating_selected_color',
			[
				'label' => esc_html__( 'Rating Fill Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .average-rating-video-filled' => 'color: {{VALUE}}',
				],
			]
		);
		
		
		$this->end_controls_section();
		

		
		$this->start_controls_section(
			'section_styles_heading_styles',
			[
				'label' => esc_html__( 'Section Heading Styles', 'progression-elements-vayvo' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
			'boosted_flip_box_front_title_styles',
			[
				'type' => Controls_Manager::HEADING,
				'label' => esc_html__( 'Title', 'progression-elements-vayvo' ),
				'separator' => 'before',
			]
		);
		
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'progression_elements_heading_typography',
				'label' => esc_html__( 'Typography', 'progression-elements-vayvo' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} h2.progression-studios-skrn-post-list-title',
			]
		);
		
		$this->add_control(
			'boosted_elements_heading_font_color',
			[
				'label' => esc_html__( 'Title Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} h2.progression-studios-skrn-post-list-title' => 'color: {{VALUE}};',
				],
			]
		);
		
		
		$this->add_responsive_control(
			'progression_elements_secting_heading_margin',
			[
				'label' => esc_html__( 'Section Margin', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} h2.progression-studios-skrn-post-list-title' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'progression_elements_secting_heading_align',
			[
				'label' => esc_html__( 'Align', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::CHOOSE,
				'label_block' => false,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'progression-elements-vayvo' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'progression-elements-vayvo' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'progression-elements-vayvo' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'default' => 'left',
				'selectors' => [
					'{{WRAPPER}} h2.progression-studios-skrn-post-list-title' => 'text-align: {{VALUE}}',
				],
			]
		);
		
		
		
		$this->add_control(
			'boosted_flip_box_front_sub_title_styles',
			[
				'type' => Controls_Manager::HEADING,
				'label' => esc_html__( 'Sub-Title', 'progression-elements-vayvo' ),
				'separator' => 'before',
			]
		);
		
		
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'progression_elements_sub_heading_typography',
				'label' => esc_html__( 'Typography', 'progression-elements-vayvo' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} h2.progression-studios-skrn-post-list-title span',
			]
		);
		
		$this->add_control(
			'boosted_elements_heading_sub_font_color',
			[
				'label' => esc_html__( 'Sub-Title Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} h2.progression-studios-skrn-post-list-title span' => 'color: {{VALUE}};',
				],
			]
		);

		
		
		$this->end_controls_section();
		
		
		
		$this->start_controls_section(
			'section_styles_title_styles',
			[
				'label' => esc_html__( 'Title Styles', 'progression-elements-vayvo' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'progression_elements_title_typography',
				'label' => esc_html__( 'Typography', 'progression-elements-vayvo' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} h2.progression-video-title',
			]
		);
		
		$this->add_control(
			'boosted_elements_title_font_color',
			[
				'label' => esc_html__( 'Title Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} h2.progression-video-title' => 'color: {{VALUE}};',
				],
			]
		);
		
		
		$this->add_responsive_control(
			'boosted_elements_title_margin_bottom',
			[
				'label' => esc_html__( 'Title Margin Bottom', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => -20,
						'max' => 150,
					],
				],
				'selectors' => [
					'{{WRAPPER}} h2.progression-video-title' => 'margin-bottom: {{SIZE}}px;',
				],
			]
		);
		
		
		
		$this->end_controls_section();
		
		
		
		$this->start_controls_section(
			'section_styles_meta_styles',
			[
				'label' => esc_html__( 'Meta Styles', 'progression-elements-vayvo' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
				
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'progression_elements_escerpt_typography',
				'label' => esc_html__( 'Typography', 'progression-elements-vayvo' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} ul.video-index-meta-taxonomy li',
			]
		);
		
		
		$this->add_control(
			'progression_elements_excerpt_font_color',
			[
				'label' => esc_html__( 'Meta Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} ul.video-index-meta-taxonomy li' => 'color: {{VALUE}}',
				],
			]
		);
		
		$this->add_responsive_control(
			'boosted_elements_excerpt_margin_bottom',
			[
				'label' => esc_html__( 'Meta Margin Bottom', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'min' => -50,
						'max' => 150,
					],
				],
				'selectors' => [
					'{{WRAPPER}} ul.video-index-meta-taxonomy li' => 'margin-bottom: {{SIZE}}px;',
				],
			]
		);
		
		$this->end_controls_section();
		
		
		
		$this->start_controls_section(
			'section_styles_load_more_styles',
			[
				'label' => esc_html__( 'Load More Styles', 'progression-elements-vayvo' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		$this->add_control(
			'section_styles_load_more_icon',
			[
				'type' => Controls_Manager::ICON,
				'label_block' => true,
				'default' => 'fa-arrow-circle-down',
			]
		);
		
		$this->add_control(
			'section_styles_load_more_icon_indent',
			[
				'label' => esc_html__( 'Icon Spacing', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::SLIDER,
				'range' => [
					'px' => [
						'max' => 50,
					],
				],
				'selectors' => [
					'{{WRAPPER}} .infinite-nav-pro a span i' => 'margin-left: {{SIZE}}px;',
				],
			]
		);
		
		$this->add_responsive_control(
			'progression_elements_load_more_margin',
			[
				'label' => esc_html__( 'Margin', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .infinite-nav-pro a' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		
		$this->add_responsive_control(
			'progression_elements_load_more_padding',
			[
				'label' => esc_html__( 'Padding', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} .infinite-nav-pro a' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'progression_elements_load_moretypography',
				'label' => esc_html__( 'Typography', 'progression-elements-vayvo' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} .infinite-nav-pro a',
			]
		);
		
		
		
		
		$this->start_controls_tabs( 'boosted_elements_button_tabs' );

		$this->start_controls_tab( 'normal', [ 'label' => esc_html__( 'Normal', 'progression-elements-vayvo' ) ] );

		$this->add_control(
			'boosted_elements_button_text_color',
			[
				'label' => esc_html__( 'Text Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .infinite-nav-pro a' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'boosted_elements_button_background_color',
			[
				'label' => esc_html__( 'Background Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .infinite-nav-pro a' => 'background-color: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'boosted_elements_button_border_color',
			[
				'label' => esc_html__( 'Border Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .infinite-nav-pro a' => 'border-color: {{VALUE}};',
				],
			]
		);

		
		$this->end_controls_tab();

		$this->start_controls_tab( 'boosted_elements_hover', [ 'label' => esc_html__( 'Hover', 'progression-elements-vayvo' ) ] );

		$this->add_control(
			'boosted_elements_button_hover_text_color',
			[
				'label' => esc_html__( 'Text Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .infinite-nav-pro a:hover' => 'color: {{VALUE}};',
				],
			]
		);

		$this->add_control(
			'boosted_elements_button_hover_background_color',
			[
				'label' => esc_html__( 'Background Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .infinite-nav-pro a:hover' => 'background-color: {{VALUE}};',
				],
			]
		);
		
		$this->add_control(
			'boosted_elements_button_hover_border_color',
			[
				'label' => esc_html__( 'Border Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} .infinite-nav-pro a:hover' => 'border-color: {{VALUE}};',
				],
			]
		);

		$this->end_controls_tab();
		$this->end_controls_tabs();
		$this->end_controls_section();
		
		
		
		
		$this->start_controls_section(
			'section_styles_post_sorting_styles',
			[
				'label' => esc_html__( 'Post Sorting Styles', 'progression-elements-vayvo' ),
				'tab' => Controls_Manager::TAB_STYLE,
			]
		);
		
		

		
		$this->add_responsive_control(
			'progression_elements_sorting_margins',
			[
				'label' => esc_html__( 'Sorting Container Margin', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} ul.progression-filter-button-group' => 'margin: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		
		$this->add_responsive_control(
			'progression_elements_sorting_padding',
			[
				'label' => esc_html__( 'Sorting List Padding', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::DIMENSIONS,
				'size_units' => [ 'px', 'em', '%' ],
				'selectors' => [
					'{{WRAPPER}} ul.progression-filter-button-group li' => 'padding: {{TOP}}{{UNIT}} {{RIGHT}}{{UNIT}} {{BOTTOM}}{{UNIT}} {{LEFT}}{{UNIT}};',
				],
			]
		);
		

		
		$this->add_responsive_control(
			'boosted_elements_sorting_align',
			[
				'label' => esc_html__( 'Align', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::CHOOSE,
				'label_block' => false,
				'options' => [
					'left' => [
						'title' => esc_html__( 'Left', 'progression-elements-vayvo' ),
						'icon' => 'fa fa-align-left',
					],
					'center' => [
						'title' => esc_html__( 'Center', 'progression-elements-vayvo' ),
						'icon' => 'fa fa-align-center',
					],
					'right' => [
						'title' => esc_html__( 'Right', 'progression-elements-vayvo' ),
						'icon' => 'fa fa-align-right',
					],
				],
				'default' => 'center',
				'selectors' => [
					'{{WRAPPER}} ul.progression-filter-button-group' => 'text-align: {{VALUE}}',
				],
			]
		);
		
		
		
		
		$this->add_group_control(
			Group_Control_Typography::get_type(),
			[
				'name' => 'boosted_elements_sorting_align_typography',
				'label' => esc_html__( 'Typography', 'progression-elements-vayvo' ),
				'scheme' => \Elementor\Core\Schemes\Typography::TYPOGRAPHY_1,
				'selector' => '{{WRAPPER}} ul.progression-filter-button-group li',				
			]
		);
		
		$this->add_control(
			'progression_elements_sorting_text_color',
			[
				'label' => esc_html__( 'Text Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} ul.progression-filter-button-group li' => 'color: {{VALUE}}',
				],
			]
		);
		


		$this->add_control(
			'progression_elements_sorting_selected_text_color',
			[
				'label' => esc_html__( 'Selected Text Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} ul.progression-filter-button-group li.pro-checked' => 'color: {{VALUE}}',
				],
				'separator' => 'before',
				
			]
		);
		
		$this->add_control(
			'progression_elements_sorting_selected_border_color',
			[
				'label' => esc_html__( 'Selected Background Color', 'progression-elements-vayvo' ),
				'type' => Controls_Manager::COLOR,
				'selectors' => [
					'{{WRAPPER}} ul.progression-filter-button-group li.pro-checked' => 'background-color: {{VALUE}}',
				],
			]
		);
		

		
		
		$this->end_controls_section();
		
		
		
		
	}
	

	protected function render( ) {
		
	
	$settings = $this->get_settings();

	global $blogloop;
	global $post;
	
	if ( get_query_var('paged') ) { $paged = get_query_var('paged'); } else if ( get_query_var('page') ) {   $paged = get_query_var('page'); } else {  $paged = 1; }
	

	$post_per_page = $settings['progression_main_post_count'];
	$offset = $settings['progression_main_offset_count'];
	$offset_new = $offset + (( $paged - 1 ) * $post_per_page);
	
	
	
	if ( ! empty( $settings['progression_post_cats'] ) ) {
		$formatarray = $settings['progression_post_cats']; // get custom field value
		
		$catarray = $settings['progression_post_cats']; // get custom field value
		if($catarray >= 1 ) { 
			$catids = implode(', ', $catarray); 
		} else {
			$catids = '';
		}
		
		if($formatarray >= 1) { 
			$formatids = implode(', ', $formatarray);
         $formatidsexpand = explode(', ', $formatids);
			$formatoperator = 'IN'; 
		} else {
			$formatidsexpand = '';
			$formatoperator = 'NOT IN'; 
		}
		$operator = 'IN';
 	} else {

	 		$formatidsexpand = '';
			$operator = 'NOT IN';
 	}
	
	
	if ( ! empty( $settings['progression_post_types'] ) ) {
		$formattagarray = $settings['progression_post_types']; // get custom field value
		
		$tagarray = $settings['progression_post_types']; // get custom field value
		if($tagarray >= 1 ) { 
			$cattagidss = implode(', ', $tagarray); 
		} else {
			$cattagidss = '';
		}
		
		if($formattagarray >= 1) { 
			$formatagids = implode(', ', $formattagarray);
         $formatagidsexpand = explode(', ', $formatagids);
			$formatotagperator = 'IN'; 
		} else {
			$formatagidsexpand = '';
			$formatotagperator = 'NOT IN'; 
		}
		$tagoperator = 'IN';
 	} else {

	 		$formatagidsexpand = '';
			$tagoperator = 'NOT IN';
 	}
	

	if ( ! empty( $settings['progression_post_genres'] ) ) {
		$formatgenrearray = $settings['progression_post_genres']; // get custom field value
		
		$genrearray = $settings['progression_post_genres']; // get custom field value
		if($genrearray >= 1 ) { 
			$catgenreidss = implode(', ', $genrearray); 
		} else {
			$catgenreidss = '';
		}
		
		if($formatgenrearray >= 1) { 
			$formagenreids = implode(', ', $formatgenrearray);
         $formagenreidsexpand = explode(', ', $formagenreids);
			$formatogenreperator = 'IN'; 
		} else {
			$formagenreidsexpand = '';
			$formatogenreperator = 'NOT IN'; 
		}
		$genreoperator = 'IN';
 	} else {

	 		$formagenreidsexpand = '';
			$genreoperator = 'NOT IN';
 	}
	
	
	
 	$args = array(
 	        'post_type'         => 'video_skrn',
			  'orderby'         => $settings['progression_elements_post_order_sorting'],
			  'order'         => $settings['progression_elements_post_order'],
			  'ignore_sticky_posts' => 1,
			  'posts_per_page'     =>  $post_per_page,
			  'paged' => $paged,
			  'offset' => $offset_new,
			  'tax_query' => array(
				  'relation' => 'AND',
		        array(
		            'taxonomy' => 'video-category',
		            'field'    => 'slug',
		            'terms'    => $formatidsexpand,
						'operator' => $operator
		        ),
		        array(
	            'taxonomy' => 'video-type',
		            'field'    => 'slug',
		            'terms'    => $formatagidsexpand,
						'operator' => $tagoperator
		        ),
		        array(
	            'taxonomy' => 'video-genres',
		            'field'    => 'slug',
		            'terms'    => $formagenreidsexpand,
						'operator' => $genreoperator
		        ),
			  ),
 	);

	$blogloop = new \WP_Query( $args );
	?>
	

	<div class="progression-studios-elementor-carousel-container <?php if ( ! empty( $settings['carousel_nav_arrows'] ) ) : ?>progression-studios-always-arrows-on<?php endif; ?>">
		
				<?php if ( $settings['boosted_post_list_text_title'] ) : ?>
					<h2 class="progression-studios-skrn-post-list-title"><?php echo esc_attr( $settings['boosted_post_list_text_title'] ); ?><?php if ( $settings['boosted_post_list_sub_heading_text_title'] ) : ?><span><?php echo esc_attr( $settings['boosted_post_list_sub_heading_text_title'] ); ?></span><?php endif; ?>
		</h2>
				<?php endif; ?>
		
		<div id="progression-video-carousel-<?php echo esc_attr($this->get_id()); ?>" class="owl-carousel progression-own-theme">
		<?php while($blogloop->have_posts()): $blogloop->the_post();?>
		<div class="item">
			<?php include(locate_template('template-parts/elementor/content-skrn_video.php')); ?>
		</div>
		<?php  endwhile; // end of the loop. ?>
		</div><!-- close #progression-video-carousel-<?php echo esc_attr($this->get_id()); ?> -->
		
	</div><!-- close .progression-studios-elementor-carousel-container -->
	
	<div class="clearfix-pro"></div>

	<?php wp_reset_postdata();?>
	
	<script type="text/javascript">
	jQuery(document).ready(function($) {
		'use strict';
		
		$('#progression-video-carousel-<?php echo esc_attr($this->get_id()); ?>').owlCarousel({
		    margin:<?php echo esc_attr( $settings['progression_elements_image_grid_margin'] ); ?>,
		    items:<?php echo esc_attr( $settings['progression_elements_image_grid_column_count'] ); ?>,
			autoplay:<?php if ( ! empty( $settings['carousel_autoplay'] ) ) : ?>true<?php else: ?>false<?php endif; ?>,
			autoplayTimeout:<?php echo esc_attr( $settings['carousel_autoplay_duration_number'] ); ?>,
			nav: <?php if ( ! empty( $settings['carousel_nav_on'] ) ) : ?>true<?php else: ?>false<?php endif; ?>,
			slideBy:<?php echo esc_attr( $settings['carousle_slide_by'] ); ?>,
		    loop:<?php if ( ! empty( $settings['carousel_loop'] ) ) : ?>true<?php else: ?>false<?php endif; ?>,//match with rewind
			rewind: <?php if ( ! empty( $settings['carousel_loop'] ) ) : ?>true<?php else: ?>false<?php endif; ?>,
			dots: <?php if ( ! empty( $settings['carousel_dots'] ) ) : ?>true<?php else: ?>false<?php endif; ?>,
			autoplayHoverPause:true,
			responsive : {
			    // breakpoint from 0 up
			    0 : {
			        items:<?php echo esc_attr( $settings['progression_elements_image_grid_column_count_mobile'] ); ?>,
			    },
			    // breakpoint from 768 up
			    768 : {
			        items:<?php echo esc_attr( $settings['progression_elements_image_grid_column_count_tablet'] ); ?>,
			    },
			    // breakpoint from 1025 up
			    1025 : {
			        items:<?php echo esc_attr( $settings['progression_elements_image_grid_column_count'] ); ?>,
			    }
			}
		});
		
	});
	</script>

	<?php wp_reset_postdata();?>
	

	<?php
	
	}

	protected function content_template(){}
}


Plugin::instance()->widgets_manager->register_widget_type( new Widget_ProgressionElementsVideoCarousel() );