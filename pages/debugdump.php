<div class="wrap">

	<?php screen_icon(); ?>

	<h1><?php esc_html_e( 'WordPress Debug Dump', WP_Style_Guide::PLUGIN_SLUG ); ?></h1>

	<h2><?php esc_html_e( 'Enabled Plugins', WP_Style_Guide::PLUGIN_SLUG ); ?></h2>
	<?php R_Debug::list_plugins(); ?>

	<h2><?php esc_html_e( 'Defined Hooks', WP_Style_Guide::PLUGIN_SLUG ); ?></h2>
	<?php R_Debug::list_hooks(); ?>

	<h2><?php esc_html_e( 'CRON Jobs', WP_Style_Guide::PLUGIN_SLUG ); ?></h2>
	<?php R_Debug::list_cron(); ?>

	<h2><?php esc_html_e( 'Performance', WP_Style_Guide::PLUGIN_SLUG ); ?></h2>
	<?php R_Debug::list_performance( true ); ?>

	<h2><?php esc_html_e( 'MySQL Queries', WP_Style_Guide::PLUGIN_SLUG ); ?></h2>
	<?php R_Debug::list_queries(); ?>

	<h2><?php esc_html_e( 'Constants', WP_Style_Guide::PLUGIN_SLUG ); ?></h2>
	<?php R_Debug::list_constants(); ?>
</div>
