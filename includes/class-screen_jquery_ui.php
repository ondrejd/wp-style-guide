<?php
/**
 * ...
 *
 * @author Ondrej Donek, <ondrejd@gmail.com>
 * @license Mozilla Public License 2.0 https://www.mozilla.org/MPL/2.0/
 * @package WP_Style_Guide
 * @subpackage Screens
 */

if ( ! class_exists( 'Screen_Jquery_Ui' ) ):

/**
 * Screen helper for "jQueryUI" page
 *
 * @author Ondřej Doněk, <ondrejd@gmail.com>
 * @since 1.0.1
 */
class Screen_Jquery_Ui {
	/**
	 * Slug of the screen.
	 * @since 1.0.1
	 * @var string
	 */
	const SLUG = 'wp-patterns-jquery-ui';

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
	 * @var Screen_Jquery_Ui $instance
	 */
	protected static $instance;

	/**
	 * Part of singleton implementation.
	 * @since 1.0.1
	 * @return Screen_Jquery_Ui
	 */
	protected static function get_instance() {
		if ( ! ( self::$instance instanceof Screen_Jquery_Ui ) ) {
			self::$instance = new Screen_Jquery_Ui();
		}

		return self::$instance;
	}

	/**
	 * Constructor.
	 * @internal
	 * @since 1.0.1
	 */
	protected function __construct() {
		$this->page_title = __( 'jQuery UI Components', WP_Style_Guide::PLUGIN_SLUG );
		$this->menu_title = __( 'jQuery UI', WP_Style_Guide::PLUGIN_SLUG );
	}

	/**
	 * Admin menu.
	 * @since 1.0.1
	 * @uses add_submenu_page()
	 * @uses add_action()
	 */
	public static function admin_menu() {
		$self = self::get_instance();

		$self->hookname = add_submenu_page( 'wp-patterns', $self->page_title, $self->menu_title, 'read', Screen_Jquery_Ui::SLUG, array( 'Screen_Jquery_Ui', 'render' ) );

		if ( method_exists( 'Screen_Jquery_Ui', 'create_help_screen' ) ) {
			add_action( 'load-' . $self->hookname, array( 'Screen_Jquery_Ui', 'create_help_screen' ) );
		}
	}

	/**
	 * Enqueue required scripts and CSS styles.
	 * @static
	 * @since 1.0.1
	 * @uses get_current_screen()
	 * @uses wp_register_script()
	 * @uses wp_enqueue_script()
	 * @uses wp_register_style()
	 * @uses wp_enqueue_style()
	 */
	public static function enqueue_scripts_and_styles() {
		$screen = get_current_screen();

		if ( $screen->base != WP_Style_Guide::$screens['wp-patterns-jquery-ui']['hookname'] ) {
			return;
		}

		wp_register_script( 'wp_patterns_jqueryui_js', plugins_url( 'js/patterns-jqueryui.js', dirname( __FILE__ ) ), array( 'jquery', 'jquery-ui-core', 'jquery-ui-position', 'jquery-ui-accordion', 'jquery-ui-tabs', 'jquery-ui-dialog', 'jquery-ui-slider', 'jquery-ui-datepicker', 'jquery-ui-progressbar', 'jquery-ui-button' , 'jquery-ui-autocomplete' ), false, true );
		wp_enqueue_script( 'wp_patterns_jqueryui_js' );

		wp_register_style( 'wp-jquery-ui', plugins_url( 'css/jquery-ui.min.css', dirname( __FILE__ ) ), false );
		wp_enqueue_style( 'wp-jquery-ui' );
		wp_register_style( 'wp-jquery-ui-theme', plugins_url( 'css/jquery-ui.theme.min.css', dirname( __FILE__ ) ), false );
		wp_enqueue_style( 'wp-jquery-ui-theme' );
		wp_register_style( 'wp-jquery-ui-fixes', plugins_url( 'css/jquery-ui.fixes.css', dirname( __FILE__ ) ), false );
		wp_enqueue_style( 'wp-jquery-ui-fixes' );
	}

	/**
	 * Add help.
	 * @static
	 * @return void
	 * @uses get_current_screen()
	 */
	public static function create_help_screen() {
		$screen = get_current_screen();

		if ( $screen->id != WP_Style_Guide::$screens['wp-patterns-jquery-ui']['hookname']) {
			return;
		}

		self::register_screen_options( $screen );
		self::screen_help( $screen );
	}

	/**
	 * Create screen help.
	 * @static
	 * @since 1.0.1
	 * @param WP_Screen $screen
	 */
	public static function screen_help( $screen ) {
		$screen->add_help_tab(
			array(
				'id'      => 'wpsg_jqueryui_help_tab2',
				'title'   => __( 'Using jQuery UI', WP_Style_Guide::PLUGIN_SLUG ),
				'content' => sprintf(
					__( "<p>In <b>WordPress</b> are <a href=\"%s\" target=\"blank\">jQuery UI</a> stylesheets <b>not included</b> so we need to include it. This can be done pretty easily either by using some of exising <abbr title=\"Content Delivery Network\">CDN</abbr> or using your own copy of <b>jQuery UI</b> bundled with your plugin.</p><p>For more details se next tabs of this help.</p>", WP_Style_Guide::PLUGIN_SLUG ),
					'http://jqueryui.com/'
				)
			)
		);
		$screen->add_help_tab(
			array(
				'id'      => 'wpsg_jqueryui_help_tab3',
				'title'   => __( 'jQuery UI from CDN', WP_Style_Guide::PLUGIN_SLUG ),
				'content' => sprintf(
					__( "<p>Include needed stylesheets from some <abbr title=\"Content Delivery Network\">CDN</abbr> (there are plenty of them):</p><pre><code class=\"language-php\">/** @link http://snippets.webaware.com.au/snippets/load-a-nice-jquery-ui-theme-in-wordpress/ */\nfunction load_jquery_ui() {\n\tglobal \$wp_scripts;\n\t// tell WordPress to load jQuery UI tabs\n\twp_enqueue_script('jquery-ui-tabs');\n\t// get registered script object for jquery-ui\n\t\$ui = \$wp_scripts->query('jquery-ui-core');\n\t// tell WordPress to load the Smoothness theme from Google CDN\n\t\$protocol = is_ssl() ? 'https' : 'http';\n\t\$url = \"\$protocol://ajax.googleapis.com/ajax/libs/jqueryui/{\$ui->ver}/themes/smoothness/jquery-ui.min.css\";\n\twp_enqueue_style('jquery-ui-smoothness', \$url, false, null);\n}\n// If you need to load it in WordPress administration do this:\nadd_action( 'admin_enqueue_scripts', 'load_jquery_ui' );\n// Otherwise (for front-end) do this:\nadd_action( 'wp_enqueue_scripts', 'load_jquery_ui' );</code></pre>", WP_Style_Guide::PLUGIN_SLUG ),
					'http://jqueryui.com/'
				)
			)
		);
		$screen->add_help_tab(
			array(
				'id'      => 'wpsg_jqueryui_help_tab4',
				'title'   => __( 'Own jQuery UI', WP_Style_Guide::PLUGIN_SLUG ),
				'content' => sprintf(
					__( "<p>Place your own jQuery UI stylesheet (and images) within your plugin (for example we are using <code>js</code> and <code>css</code> sub-folders) and load it using script like this:<p><pre><code class=\"language-php\">function load_jquery_ui() {\n\t// Our CSS styles for jQuery UI (in `my_plugin/css` dir)\n\twp_register_style( 'my-jqueryui-css', plugins_url( 'css/jquery-ui.css', __FILE__ ), false );\n\twp_enqueue_style( 'my-jqueryui-css' );\n\t// Our JavaScript with jQuery UI as dependency:\n\twp_register_script(\n\t\t'my-jqueryui-js',\n\t\tplugins_url( 'js/myscript.js', __FILE__ ),\n\t\tarray(\n\t\t\t'jquery', 'jquery-ui-core', 'jquery-ui-position', 'jquery-ui-accordion', 'jquery-ui-tabs',\n\t\t\t'jquery-ui-dialog', 'jquery-ui-slider', 'jquery-ui-datepicker', 'jquery-ui-progressbar',\n\t\t\t'jquery-ui-button'\n\t\t),\n\t\tfalse,\n\t\ttrue\n\t);\n\twp_enqueue_script( 'my-jqueryui-js' );\n}\n\n// If you need to load it in WordPress administration do this:\nadd_action( 'admin_enqueue_scripts', 'load_jquery_ui' );\n// Otherwise (for front-end) do this:\nadd_action( 'wp_enqueue_scripts', 'load_jquery_ui' );</code></pre>", WP_Style_Guide::PLUGIN_SLUG ),
					'http://jqueryui.com/'
				)
			)
		);
	}

	/**
	 * Register screen options.
	 * @static
	 * @since 1.0.1
	 * @param WP_Screen $screen
	 */
	public static function register_screen_options( $screen ) {
		// ...
	}

	/**
	 * Render screen options form.
	 * @static
	 * @since 1.0.1
	 * @param WP_Screen $screen
	 */
	public static function screen_options( $screen ) {
		// ...
	}

	/**
	 * Save screen options.
	 * @static
	 * @since 1.0.1
	 * @param WP_Screen $screen
	 */
	public static function save_screen_options( $screen ) {
		// ...
	}

	/**
	 * Render page self.
	 * @static
	 * @since 1.0.1
	 */
	public static function render() {
		include_once( plugin_dir_path( dirname( __FILE__ ) ) . 'pages/jquery-ui.php' );
	}
}

endif;
