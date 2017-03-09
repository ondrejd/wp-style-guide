<?php
/**
 * ...
 *
 * @author Ondrej Donek, <ondrejd@gmail.com>
 * @license Mozilla Public License 2.0 https://www.mozilla.org/MPL/2.0/
 * @package WP_Style_Guide
 * @subpackage Screens
 */

if ( ! class_exists( 'Screen_Forms_Page' ) ):

/**
 * Screen helper for "Forms" page
 *
 * @author Ondřej Doněk, <ondrejd@gmail.com>
 * @since 1.0.1
 */
class Screen_Forms_Page {
	/**
	 * Slug of the screen.
	 * @since 1.0.1
	 * @var string
	 */
	const SLUG = 'wp-patterns-forms';

	/**
	 * Title of the page that screen represents.
	 * @since 1.0.1
	 * @var string $page_title
	 */
	protected $page_title;

	/**
	 * Title of the menu item that screen represents.
	 * @since 1.0.1
	 * @var string $menu_title
	 */
	protected $menu_title;

	/**
	 * @internal
	 * @since 1.0.1
	 * @var string $hookname
	 */
	protected $hookname;

	/**
	 * Holds instance of self (part of singleton implementation).
	 * @static
	 * @since 1.0.1
	 * @var Screen_Forms_Page $instance
	 */
	protected static $instance;

	/**
	 * Part of singleton implementation.
	 * @since 1.0.1
	 * @return Screen_Forms_Page
	 */
	protected static function get_instance() {
		if ( ! ( self::$instance instanceof Screen_Forms_Page ) ) {
			self::$instance = new Screen_Forms_Page();
		}

		return self::$instance;
	}

	/**
	 * Constructor.
	 * @internal
	 * @since 1.0.1
	 */
	protected function __construct() {
		$this->page_title = __( 'Forms', WP_Style_Guide::PLUGIN_SLUG );
		$this->menu_title = __( 'Forms', WP_Style_Guide::PLUGIN_SLUG );
	}

	/**
	 * Admin menu.
	 * @since 1.0.1
	 * @uses add_submenu_page()
	 * @uses add_action()
	 */
	public static function admin_menu() {
		$self = self::get_instance();

		$self->hookname = add_submenu_page( 'wp-patterns', $self->page_title, $self->menu_title, 'read', Screen_Forms_Page::SLUG, array( 'Screen_Forms_Page', 'render' ) );

		if ( method_exists( 'Screen_Forms_Page', 'create_help_screen' ) ) {
			add_action( 'load-' . $self->hookname, array( 'Screen_Forms_Page', 'create_help_screen' ) );
		}
	}

	/**
	 * Enqueue required scripts and CSS styles.
	 * @static
	 * @since 1.0.1
	 * @uses get_current_screen()
	 * @uses wp_register_script()
	 * @uses wp_enqueue_script()
	 */
	public static function enqueue_scripts_and_styles() {
		$screen = get_current_screen();

		if ( $screen->base != WP_Style_Guide::$screens['wp-patterns-forms']['hookname']) {
			return;
		}

		wp_register_script( 'wp_patterns_forms', plugins_url( 'js/patterns-forms.js', dirname( __FILE__ ) ), array( 'jquery' ), false, true );
		wp_enqueue_script( 'wp_patterns_forms' );
	}

	/**
	 * Add help.
	 * @return void
	 * @uses get_current_screen()
	 */
	public static function create_help_screen() {
		$screen = get_current_screen();

		if ( $screen->id != WP_Style_Guide::$screens['wp-patterns-forms']['hookname']) {
			return;
		}

		self::register_screen_options( $screen );
		self::screen_help();
	}

	/**
	 * Create screen help.
	 * @static
	 * @since 1.0.1
	 */
	public static function screen_help() {
		// ...
	}

	/**
	 * Register screen options.
	 * @static
	 * @since 1.0.1
	 * @param WP_Screen $screen
	 * @uses add_filter()
	 */
	public static function register_screen_options( $screen ) {
		add_filter( 'screen_layout_columns', array( 'Screen_Forms_Page', 'screen_options' ) );

		$screen->add_option( 'display_source_code_examples', '' );
	}

	/**
	 * Render screen options form.
	 * @static
	 * @since 1.0.1
	 */
	public static function screen_options() {
		$display_examples = ( ( bool ) WP_Style_Guide::get_option( 'display_source_code_examples' ) === true ) ? true : false;

		include_once( plugin_dir_path( dirname( __FILE__ ) ) . 'partials/screen_options-forms_page.php' );
	}

	/**
	 * Save screen options.
	 * @static
	 * @since 1.0.1
	 * @uses update_option()
	 * @uses wp_verify_nonce()
	 */
	public static function save_screen_options() {
		if (
			filter_input( INPUT_POST, WP_Style_Guide::PLUGIN_SLUG . '-submit_forms_screen_options' ) &&
			( bool ) wp_verify_nonce( filter_input( INPUT_POST, WP_Style_Guide::PLUGIN_SLUG . '-nonce' ) ) === true
		) {
			$display_examples = ( string ) filter_input( INPUT_POST, 'display_source_code_examples' );
			$display_examples = ( strtolower( $display_examples ) == 'on' ) ? true : false;
			$options = WP_Style_Guide::get_options();
			$need_update = false;

			if ( !array_key_exists('display_source_code_examples', $options ) ) {
				$need_update = true;
			}

			if ( !$need_update && $options['display_source_code_examples'] != $display_examples ) {
				$need_update = true;
			}

			if ( $need_update === true ) {
				$options['display_source_code_examples'] = $display_examples;

				update_option( WP_Style_Guide::PLUGIN_SLUG . '-options', $options );
			}
		}
	}

	/**
	 * Render page self.
	 * @static
	 * @since 1.0.1
	 */
	public static function render() {
		include_once( plugin_dir_path( dirname( __FILE__ ) ) . 'pages/forms-page.php' );
	}
}

endif;
