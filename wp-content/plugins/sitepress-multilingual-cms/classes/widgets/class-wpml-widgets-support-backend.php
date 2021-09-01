<?php

use \WPML\FP\Obj;
use WPML\LIB\WP\Option as Option;

/**
 * This code is inspired by WPML Widgets (https://wordpress.org/plugins/wpml-widgets/),
 * created by Jeroen Sormani
 *
 * @author OnTheGo Systems
 */
class WPML_Widgets_Support_Backend implements IWPML_Action {
	const NONCE = 'wpml-language-nonce';

	private $active_languages;
	private $template_service;

	/**
	 * WPML_Widgets constructor.
	 *
	 * @param array                  $active_languages
	 * @param IWPML_Template_Service $template_service
	 */
	public function __construct( array $active_languages, IWPML_Template_Service $template_service ) {
		$this->active_languages = $active_languages;
		$this->template_service = $template_service;
	}

	public function add_hooks() {
		add_action( 'in_widget_form', array( $this, 'language_selector' ), 10, 3 );
		add_filter( 'widget_update_callback', array( $this, 'update' ), 10, 4 );
		add_action( 'wp_ajax_wpml_change_selected_language_for_legacy_widget', array( $this, 'set_selected_language_for_legacy_widget' ) );
		if ( $this->is_widgets_page() ) {
			add_action('enqueue_block_editor_assets', array($this, 'enqueue_scripts'));
		}
	}

	public function enqueue_scripts() {
		wp_register_script( 'widgets-language-switcher-script', ICL_PLUGIN_URL . '/dist/js/widgets-language-switcher/app.js', array( 'wp-block-editor' ) );
		wp_localize_script(
			'widgets-language-switcher-script',
			'wpml_active_and_selected_languages',
			[ "active_languages" => $this->active_languages, "legacy_widgets_languages" => $this->get_legacy_widgets_selected_languages() ]
		);
		wp_enqueue_script( 'widgets-language-switcher-script' );
	}

	/**
	 * @param WP_Widget|null $widget
	 * @param string|null    $form
	 * @param array          $instance
	 */
	public function language_selector( $widget, $form, $instance ) {

		$languages        = $this->active_languages;
		$languages['all'] = array(
			'code'        => 'all',
			'native_name' => __( 'All Languages', 'sitepress' ),
		);

		$model = array(
			'strings'           => array(
				'label' => __( 'Display on language:', 'sitepress' ),
			),
			'languages'         => $languages,
			'selected_language' => Obj::propOr( 'all', 'wpml_language', is_array( $instance ) ? $instance : [] ),
			'nonce'             => wp_create_nonce( self::NONCE ),
		);

		echo $this->template_service->show( $model, 'language-selector.twig' );
	}

	/**
	 * @param array     $instance
	 * @param array     $new_instance
	 * @param array     $old_instance
	 * @param WP_Widget $widget_instance
	 *
	 * @return array
	 */
	public function update( $instance, $new_instance, $old_instance, $widget_instance ) {
		if (wp_verify_nonce( Obj::prop( 'wpml-language-nonce', $_POST ), self::NONCE ) ) {
			$new_language = filter_var( Obj::prop('wpml_language', $_POST), FILTER_SANITIZE_FULL_SPECIAL_CHARS, FILTER_NULL_ON_FAILURE );

			if ( 'all' === $new_language || array_key_exists( $new_language, $this->active_languages ) ) {
				$instance['wpml_language'] = $new_language;
			}
		}

		return $instance;
	}

	public function is_widgets_page() {
		global $pagenow;

		return is_admin() && 'widgets.php' === $pagenow;
	}

	private function get_legacy_widgets_selected_languages() {
		$legacy_widgets_languages = [];
		$widgets = array_values($GLOBALS['wp_widget_factory']->widgets);
		foreach ($widgets as $widget) {
			$widget_option = Option::get($widget->option_name);

			if ( is_array( $widget_option ) ) {
				foreach ($widget_option as $key => $option) {
					if (is_array($option) && array_key_exists('wpml_language', $option)) {
						$legacy_widgets_languages[$widget->id_base . '-' . $key] = $option['wpml_language'];
					}
				}
			}
		}
		return $legacy_widgets_languages;
	}

	public function set_selected_language_for_legacy_widget() {
		if ( isset( $_POST['id'] ) && isset( $_POST['selected_language_value'] ) ) {
			$widget_id = sanitize_text_field( $_POST['id'] );
			$selected_language_value = sanitize_text_field( $_POST['selected_language_value'] );

			$widget = explode('-', $widget_id);
			$widget_id = array_pop($widget);
			$widget_option_name = 'widget_' . implode('-', $widget);
			$widgets_by_type = get_option($widget_option_name);

			$widgets_by_type[$widget_id]['wpml_language'] = $selected_language_value;

			Option::update($widget_option_name, $widgets_by_type);
		}
	}

}
