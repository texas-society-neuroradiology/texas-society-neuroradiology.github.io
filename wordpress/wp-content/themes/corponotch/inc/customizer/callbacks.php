<?php
/**
 * Callbacks functions
 *
 * @package corponotch
 */

if ( ! function_exists( 'corponotch_topbar_section_enable' ) ) :
	/**
	 * Check if topbar_section section enabled.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function corponotch_topbar_section_enable( $control ) {
		return $control->manager->get_setting( 'corponotch_theme_options[enable_topbar]' )->value() ? true : false;
	}
endif;

if ( ! function_exists( 'corponotch_slider_section_enable' ) ) :
	/**
	 * Check if slider_section section enabled.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function corponotch_slider_section_enable( $control ) {
		return $control->manager->get_setting( 'corponotch_theme_options[enable_slider]' )->value() ? true : false;
	}
endif;

if ( ! function_exists( 'corponotch_short_cta_section_enable' ) ) :
	/**
	 * Check if short_cta_section section enabled.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function corponotch_short_cta_section_enable( $control ) {
		return $control->manager->get_setting( 'corponotch_theme_options[enable_short_cta]' )->value() ? true : false;
	}
endif;

if ( ! function_exists( 'corponotch_introduction_section_enable' ) ) :
	/**
	 * Check if introduction_section section enabled.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function corponotch_introduction_section_enable( $control ) {
		return $control->manager->get_setting( 'corponotch_theme_options[enable_introduction]' )->value() ? true : false;
	}
endif;

if ( ! function_exists( 'corponotch_service_section_enable' ) ) :
	/**
	 * Check if service_section section enabled.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function corponotch_service_section_enable( $control ) {
		return $control->manager->get_setting( 'corponotch_theme_options[enable_service]' )->value() ? true : false;
	}
endif;

if ( ! function_exists( 'corponotch_portfolio_section_enable' ) ) :
	/**
	 * Check if portfolio_section section enabled.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function corponotch_portfolio_section_enable( $control ) {
		return $control->manager->get_setting( 'corponotch_theme_options[enable_portfolio]' )->value() ? true : false;
	}
endif;

if ( ! function_exists( 'corponotch_team_section_enable' ) ) :
	/**
	 * Check if team_section section enabled.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function corponotch_team_section_enable( $control ) {
		return $control->manager->get_setting( 'corponotch_theme_options[enable_team]' )->value() ? true : false;
	}
endif;

if ( ! function_exists( 'corponotch_testimonial_section_enable' ) ) :
	/**
	 * Check if testimonial_section section enabled.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function corponotch_testimonial_section_enable( $control ) {
		return $control->manager->get_setting( 'corponotch_theme_options[enable_testimonial]' )->value() ? true : false;
	}
endif;

if ( ! function_exists( 'corponotch_contact_section_enable' ) ) :
	/**
	 * Check if contact_section section enabled.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function corponotch_contact_section_enable( $control ) {
		return $control->manager->get_setting( 'corponotch_theme_options[enable_contact]' )->value() ? true : false;
	}
endif;

if ( ! function_exists( 'corponotch_recent_section_enable' ) ) :
	/**
	 * Check if recent_section section enabled.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function corponotch_recent_section_enable( $control ) {
		return $control->manager->get_setting( 'corponotch_theme_options[enable_recent]' )->value() ? true : false;
	}
endif;

if ( ! function_exists( 'corponotch_recent_content_category_enable' ) ) :
	/**
	 * Check if recent content type is category.
	 *
	 * @param WP_Customize_Control $control WP_Customize_Control instance.
	 * @return bool Whether the control is active to the current preview.
	 */
	function corponotch_recent_content_category_enable( $control ) {
		return ( $control->manager->get_setting( 'corponotch_theme_options[enable_recent]' )->value() && 'category' == $control->manager->get_setting( 'corponotch_theme_options[recent_content_type]' )->value() );
	}
endif;
