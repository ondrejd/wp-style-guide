<?php
/*
Plugin Name: WordPress Admin Pattern Library
Plugin URI: https://github.com/helenhousandi/wp-style-guide
Description: Because it's horrible that we don't have one.
Version: 1.0
Author: The WordPress Team
Author URI: http://wordpress.org
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html
*/

/**
 * @todo Add options page.
 */
class WP_Style_Guide {
	const PLUGIN_SLUG = 'wp-style-guide';
	const PLUGIN_VERSION = '1.0.1';

	/**
	 * Screens added.
	 * @var array
	 */
	private $screens;

	/**
	 * Hook name of the top level page.
	 * @var string
	 */
	private $hookname;

	/**
	* Default options of the plugin.
	* @var array
	*/
	private $default_options = array(
		'default_install_text' => "1. Upload plugin folder to the `/wp-content/plugins/` directory\n2. Activate the plugin through the 'Plugins' menu in WordPress\n",
		'default_faq_text' => "= Question #1 =\n\nAnswer #1 ...\n",
		'default_changelog_text' => "= 0.0.1 =\n* initial version\n",
		'default_include_license_file' => true,
		'default_has_dependency' => false,
		'default_has_administration' => true,
		'default_has_options' => true,
		'default_has_own_dbtables' => false,
		'default_has_localization' => true
	);

	/**
	 * Set up hooks.
	 */
	public function __construct() {
		// Note: This must be first because of localization
		//add_action( 'init', array( $this, 'init_textdomain' ) );
		add_action( 'init', array( $this, 'init' ) );
		add_action( 'admin_enqueue_scripts', array( $this, 'admin_enqueue_scripts' ) );
		add_action( 'admin_head', array( $this, 'admin_head' ) );
		add_action( 'admin_menu', array( $this, 'admin_menu' ) );
	}

	/**
	 * Initialize textdomain.
	 * @return void
	 * @uses load_plugin_textdomain()
	 */
	public function init_textdomain() {
	}

	/**
	 * Initialize plugin.
	 * @return void
	 */
	public function init() {
		load_plugin_textdomain( self::PLUGIN_SLUG, false, 'wp-style-guide/languages' );
		// Ensure that plugin's options are initialized
		$this->get_options();
		// Define our screens. 
		// Note: this has to be here because we need to be locales loaded at the first place.
		$this->screens = array(
			'wp-patterns-wizards' => array(
				'page_title' => __( 'Wizards', self::PLUGIN_SLUG ),
				'menu_title' => __( 'Wizards', self::PLUGIN_SLUG ),
				'callback' => 'wizards', // note that this has to be a class method
				'hookname' => null,
			),
			'wp-patterns-forms' => array(
				'page_title' => __( 'Forms', self::PLUGIN_SLUG ),
				'menu_title' => __( 'Forms', self::PLUGIN_SLUG ),
				'callback' => 'forms_page', // note that this has to be a class method
				'hookname' => null,
			),
			'wp-patterns-jquery-ui' => array(
				'page_title' => __( 'jQuery UI Components', self::PLUGIN_SLUG ),
				'menu_title' => __( 'jQuery UI Components', self::PLUGIN_SLUG ),
				'callback' => 'jquery_ui', // note that this has to be a class method
				'hookname' => null,
			),
			'wp-patterns-helper-classes' => array(
				'page_title' => __( 'Helper Classes', self::PLUGIN_SLUG ),
				'menu_title' => __( 'Helper Classes', self::PLUGIN_SLUG ),
				'callback' => 'helper_classes', // note that this has to be a class method
				'hookname' => null,
			),
		);
	}

	/**
	 * Returns plugin's options
	 * @return array
	 * @since 0.0.1
	 * @uses get_option()
	 * @uses update_option()
	 */
	public function get_options() {
		$options = get_option( self::PLUGIN_SLUG . '-options' );
		$need_update = false;

		if ( $options === false ) {
			$need_update = true;
			$options = array();
		}

		foreach ( $this->default_options as $key => $value ) {
			if ( !array_key_exists( $key, $options ) ) {
				$options[$key] = $value;
				$need_update = true;
			}
		}

		if ( !array_key_exists( 'latest_used_version', $options ) ) {
			$options['latest_used_version'] = self::PLUGIN_VERSION;
			$need_update = true;
		}

		if ( $need_update === true ) {
			update_option( self::PLUGIN_SLUG . '-options', $options );
		}

		return $options;
	} // end get_options()

	/**
	 * Returns value of option with given key.
	 * @param string $key
	 * @return mixed Returns empty string if option with given key was not found.
	 * @static
	 * @uses get_option()
	 */
	public static function get_option($key) {
		$options = get_option( self::PLUGIN_SLUG . '-options' );

		if ( array_key_exists( $key, $options ) ) {
			return $options[$key];
		}

		return '';
	}

	/**
	 * Enqueue scripts and styles as needed.
	 * @return void
	 * @uses get_current_screen()
	 * @uses plugins_url()
	 * @uses wp_enqueue_script()
	 * @uses wp_enqueue_style()
	 * @uses wp_register_script()
	 */
	public function admin_enqueue_scripts() {
		$screen = get_current_screen();

		if ( $screen->base === $this->screens['wp-patterns-jquery-ui']['hookname'] ) {
			// Our CSS styles for jQuery UI
			wp_register_style( 'wp-jquery-ui', plugins_url( 'css/jquery-ui.min.css', __FILE__ ), false );
			wp_register_style( 'wp-jquery-ui-theme', plugins_url( 'css/jquery-ui.theme.min.css', __FILE__ ), false );
			wp_register_style( 'wp-jquery-ui-fixes', plugins_url( 'css/jquery-ui.fixes.css', __FILE__ ), false );
			wp_enqueue_style( 'wp-jquery-ui' );
			wp_enqueue_style( 'wp-jquery-ui-theme' );
			wp_enqueue_style( 'wp-jquery-ui-fixes' );

			// Script for "jQuery UI Components" page
			wp_register_script( 'wp_patterns_jqueryui_js', plugins_url( 'js/patterns-jqueryui.js', __FILE__ ), array( 'jquery', 'jquery-ui-core', 'jquery-ui-position', 'jquery-ui-accordion', 'jquery-ui-tabs', 'jquery-ui-dialog', 'jquery-ui-slider', 'jquery-ui-datepicker', 'jquery-ui-progressbar', 'jquery-ui-button' , 'jquery-ui-autocomplete' ), false, true );
			wp_enqueue_script( 'wp_patterns_jqueryui_js' );
		}
		elseif ( $screen->base === $this->screens['wp-patterns-wizards']['hookname'] ) {
			$wizard = filter_input( INPUT_GET, 'wizard' );

			if ( in_array( $wizard, array( 'plugin', 'theme' ) ) ) {
				wp_register_script( "wp_wizards_{$wizard}_js", plugins_url( "js/wizards-{$wizard}.js", __FILE__ ), array( 'jquery', 'jquery-ui-core' ), false, true );
				wp_enqueue_script( "wp_wizards_{$wizard}_js" );
			}
		}

		wp_enqueue_style( 'wp-style-guide', plugins_url( 'css/wp-style-guide.css', __FILE__ ), false );
		wp_enqueue_style( 'dashicons-guide', plugins_url( 'css/dashicons.css', __FILE__ ), false );
		wp_enqueue_style( 'prism-css', plugins_url( 'css/prism.css', __FILE__ ), false );

		wp_enqueue_script( 'prism-js', plugins_url( 'js/prism.js', __FILE__ ), false );
	}

	/**
	 * Adds some styles directly to the header of a Wordpress administration page.
	 * @return void
	 * @todo Remove! Move into external CSS file and load in function {@see admin_enqueue_scripts()}.
	 */
	public function admin_head() {
?>
<style>
	.mp6 #adminmenu .<?php echo $this->hookname; ?> .wp-menu-image:before {
		content: '\f309';
	}
</style>
<?php
	}

	/**
	 * Add admin screens
	 * @return void
	 * @uses add_action()
	 * @uses add_menu_page()
	 * @uses add_submenu_page()
	 */
	public function admin_menu() {
		$this->hookname = add_menu_page( __( 'WordPress Admin Pattern Library', self::PLUGIN_SLUG ), __( 'Pattern Library', self::PLUGIN_SLUG ), 'read', 'wp-patterns', array( $this, 'toc' ) );
		add_action( 'load-' . $this->hookname, array( $this, 'create_help_screen' ) );

		foreach ( $this->screens as $slug => $args ) {
			$this->screens[$slug]['hookname'] = add_submenu_page( 'wp-patterns', $args['page_title'], $args['menu_title'], 'read', $slug, array( $this, $args['callback'] ) );
			add_action( 'load-' . $this->screens[$slug]['hookname'], array( $this, 'create_help_screen' ) );
		}
	}

	/**
	 * Add help.
	 * @return void
	 * @uses get_current_screen()
	 * @todo Finish this!
	 */
	public function create_help_screen() {
		$screen = get_current_screen();

		if ( $screen->id == $this->hookname ) {
			return;
		}

		// Wizards
		if ( $screen->id == $this->screens['wp-patterns-wizards']['hookname'] ) {
			$wizard = filter_input( INPUT_GET, 'wizard' );

			if ( $wizard == 'plugin' ) {
				// ...
			}
			elseif ( $wizard == 'theme' ) {
				// ...
			}
			else {
				$screen->add_help_tab(
					array(
						'id'      => 'wpsg_wizards_help_tab',
						'title'   => __( 'Wizards', self::PLUGIN_SLUG ),
						'content' => __( '<p>On this page are shown all available wizards. The main are wizards for <b>plugins</b> and <b>themes</b>. These two wizards help you to start new plugin/theme projects quickly and easily. An advantage is the same structure accross your projects.</p><p>Other wizards generating code snippets for various parts of development of WordPress plugins or themes.<p>', self::PLUGIN_SLUG ),
					)
				);
				$screen->set_help_sidebar(
					sprintf(
						__( '<b>Usefull links</b><p><a href="%s" target="blank">Options</a> where you can change code templates.</p><p><a href="%s" target="blank">Examples</a> of generated code with this plugin.</p>', self::PLUGIN_SLUG ),
						'#',
						'#'
					)
				);
			}
		}
		// jQuery UI Components
		elseif ( $screen->id == $this->screens['wp-patterns-jquery-ui']['hookname'] ) {
			$screen->add_help_tab(
				array(
					'id'      => 'wpsg_jqueryui_help_tab2',
					'title'   => __( 'Using jQuery UI', self::PLUGIN_SLUG ),
					'content' => sprintf(
						__( "<p>In <b>WordPress</b> are <a href=\"%s\" target=\"blank\">jQuery UI</a> stylesheets <b>not included</b> so we need to include it. This can be done pretty easily either by using some of exising <abbr title=\"Content Delivery Network\">CDN</abbr> or using your own copy of <b>jQuery UI</b> bundled with your plugin.</p><p>For more details se next tabs of this help.</p>", self::PLUGIN_SLUG ),
						'http://jqueryui.com/'
					)
				)
			);
			$screen->add_help_tab(
				array(
					'id'      => 'wpsg_jqueryui_help_tab3',
					'title'   => __( 'jQuery UI from CDN', self::PLUGIN_SLUG ),
					'content' => sprintf(
						__( "<p>Include needed stylesheets from some <abbr title=\"Content Delivery Network\">CDN</abbr> (there are plenty of them):</p><pre><code class=\"language-php\">/** @link http://snippets.webaware.com.au/snippets/load-a-nice-jquery-ui-theme-in-wordpress/ */\nfunction load_jquery_ui() {\n\tglobal \$wp_scripts;\n\t// tell WordPress to load jQuery UI tabs\n\twp_enqueue_script('jquery-ui-tabs');\n\t// get registered script object for jquery-ui\n\t\$ui = \$wp_scripts->query('jquery-ui-core');\n\t// tell WordPress to load the Smoothness theme from Google CDN\n\t\$protocol = is_ssl() ? 'https' : 'http';\n\t\$url = \"\$protocol://ajax.googleapis.com/ajax/libs/jqueryui/{\$ui->ver}/themes/smoothness/jquery-ui.min.css\";\n\twp_enqueue_style('jquery-ui-smoothness', \$url, false, null);\n}\n// If you need to load it in WordPress administration do this:\nadd_action( 'admin_enqueue_scripts', 'load_jquery_ui' );\n// Otherwise (for front-end) do this:\nadd_action( 'wp_enqueue_scripts', 'load_jquery_ui' );</code></pre>", self::PLUGIN_SLUG ),
						'http://jqueryui.com/'
					)
				)
			);
			$screen->add_help_tab(
				array(
					'id'      => 'wpsg_jqueryui_help_tab4',
					'title'   => __( 'Own jQuery UI', self::PLUGIN_SLUG ),
					'content' => sprintf(
						__( "<p>Place your own jQuery UI stylesheet (and images) within your plugin (for example we are using <code>js</code> and <code>css</code> sub-folders) and load it using script like this:<p><pre><code class=\"language-php\">function load_jquery_ui() {\n\t// Our CSS styles for jQuery UI (in `my_plugin/css` dir)\n\twp_register_style( 'my-jqueryui-css', plugins_url( 'css/jquery-ui.css', __FILE__ ), false );\n\twp_enqueue_style( 'my-jqueryui-css' );\n\t// Our JavaScript with jQuery UI as dependency:\n\twp_register_script(\n\t\t'my-jqueryui-js',\n\t\tplugins_url( 'js/myscript.js', __FILE__ ),\n\t\tarray(\n\t\t\t'jquery', 'jquery-ui-core', 'jquery-ui-position', 'jquery-ui-accordion', 'jquery-ui-tabs',\n\t\t\t'jquery-ui-dialog', 'jquery-ui-slider', 'jquery-ui-datepicker', 'jquery-ui-progressbar',\n\t\t\t'jquery-ui-button'\n\t\t),\n\t\tfalse,\n\t\ttrue\n\t);\n\twp_enqueue_script( 'my-jqueryui-js' );\n}\n\n// If you need to load it in WordPress administration do this:\nadd_action( 'admin_enqueue_scripts', 'load_jquery_ui' );\n// Otherwise (for front-end) do this:\nadd_action( 'wp_enqueue_scripts', 'load_jquery_ui' );</code></pre>", self::PLUGIN_SLUG ),
						'http://jqueryui.com/'
					)
				)
			);
			// TODO Add option for showing source code examples by default!
			/*$screen->add_option(
				'show_source_code',
				array(
					'label' => __( 'Show source codes', self::PLUGIN_SLUG ),
					'description' => __( 'Show source codes of the examples.', self::PLUGIN_SLUG ),
					'default' => false,
					'option' => 'wpsg_jqueryui_show_source_code'
				)
			);*/
		}
	}

	/**
	 * Output for our top level screen
	 * @return void
	 */
	public function toc() {
?>
<div class="wrap">

	<?php screen_icon(); ?>

	<h2><?php _e( 'WordPress Admin Pattern Library', self::PLUGIN_SLUG ); ?></h2>

	<h3><?php _e( 'Table of Contents', self::PLUGIN_SLUG ); ?></h3>

	<ul class="ul-disc">
	<?php foreach( $this->screens as $slug => $args ) : ?>
		<li><a href="<?php echo esc_url( admin_url( 'admin.php?page=' . $slug ) ); ?>"><?php echo esc_html( $args['page_title'] ); ?></a></li>
	<?php endforeach; ?>
	</ul>

	<h3><?php _e( 'Usefull links', self::PLUGIN_SLUG ); ?></h3>
	<ul class="ul-disc">
		<li><a href="https://developer.wordpress.org/resource/dashicons" target="blank"><?php _e( 'Developer Resources: Dashicons', self::PLUGIN_SLUG ); ?></a></li>
		<li><a href="https://codex.wordpress.org/Database_Description" target="blank"><?php _e( 'WordPress Database Description', self::PLUGIN_SLUG ); ?></a></li>
	</ul>

</div><!-- .wrap -->
<?php
	}

	/**
	 * Output jQuery UI components admin page using jQuery UI's theme visual test
	 * @return void
	 */
	public function jquery_ui() {
		include_once( 'pages/jquery-ui.php' );
	}

	/**
	 * Output form component admin page
	 * @return void
	 */
	public function forms_page() {
		include_once( 'pages/forms-page.php' );
	}

	public function helper_classes() {
		include_once( 'pages/helper-classes.php' );
	}

	public function wizards() {
		include_once( 'pages/wizards.php' );
	}
}

$wp_style_guide = new WP_Style_Guide;
