<?php
$wizard_type = filter_input(INPUT_GET, 'wizard');
if (in_array($wizard_type, array('plugin', 'theme', 'dashboard_widget', 'table_list'))):
	include_once("wizards-$wizard_type.php");
else:
?><div class="wrap">

	<?php screen_icon(); ?>

	<h1><?php _e( 'Wizards', WP_Style_Guide::PLUGIN_SLUG ) ?></h1>

	<div class="metabox-holder wizards-list">
		<div class="wizards-list-row">
			<div class="postbox-container wizard" style="width: 49.5%; float: left;">
				<div class="postbox" style="margin: 0px 8px;min-height: 100px;">
					<h2 class="hndle ui-sortable-handle">
						<span><?= __( 'Plugin Wizard', WP_Style_Guide::PLUGIN_SLUG ) ?></span>
					</h2>
					<div class="inside">
						<div class="main">
							<p><?= __( 'Generate quickly your new WordPress plugin&hellip;', WP_Style_Guide::PLUGIN_SLUG ) ?></p>
							<p><a href="<?= admin_url( 'admin.php?page=wp-patterns-wizards&wizard=plugin' )?>" class="button-primary alignright"><?= __( 'Enter wizard', WP_Style_Guide::PLUGIN_SLUG ) ?></a></p>
							<div class="clear"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="postbox-container wizard" style="width: 49.5%; float: left;">
				<div class="postbox" style="margin: 0px 8px;min-height: 100px;">
					<h2 class="hndle ui-sortable-handle">
						<span><?= __( 'Theme Wizard', WP_Style_Guide::PLUGIN_SLUG ) ?></span>
					</h2>
					<div class="inside">
						<div class="main">
							<p><?= __( 'Create new WordPress theme&hellip;' )?></p>
							<p><a href="<?= admin_url( 'admin.php?page=wp-patterns-wizards&wizard=theme' )?>" class="button-primary alignright"><?= __( 'Enter wizard', WP_Style_Guide::PLUGIN_SLUG ) ?></a></p>
							<div class="clear"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="wizards-list-row" style="clear: both; padding-top: 20px;">
			<div class="postbox-container" style="width: 49.5%; float: left;">
				<div class="postbox" style="margin: 0px 8px;min-height: 100px;">
					<h2 class="hndle ui-sortable-handle">
						<span><?= __( 'Widget Wizard', WP_Style_Guide::PLUGIN_SLUG ) ?></span>
					</h2>
					<div class="inside">
						<div class="main">
							<p><?php sprintf( __( 'Generate new <a href="%s" target="blank">widgets</a>.', WP_Style_Guide::PLUGIN_SLUG ), 'https://codex.wordpress.org/WordPress_Widgets' ); ?></p>
							<p><a href="<?= admin_url( 'admin.php?page=wp-patterns-wizards&wizard=table_list' )?>" class="button-primary alignright"><?= __( 'Enter wizard', WP_Style_Guide::PLUGIN_SLUG ) ?></a></p>
							<div class="clear"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="postbox-container" style="width: 49.5%; float: left;">
				<div class="postbox" style="margin: 0px 8px;min-height: 100px;">
					<h2 class="hndle ui-sortable-handle">
						<span><?= __( 'Dashboard Widget Wizard', WP_Style_Guide::PLUGIN_SLUG ) ?></span>
					</h2>
					<div class="inside">
						<div class="main">
							<p><?php sprintf( __( '', WP_Style_Guide::PLUGIN_SLUG ), 'https://codex.wordpress.org/Dashboard_SubPanel' ); ?></p>
							<p><?= __( 'Create new widget for WordPress Dashboard&hellip;', WP_Style_Guide::PLUGIN_SLUG ) ?></p>
							<p><a href="<?= admin_url( 'admin.php?page=wp-patterns-wizards&wizard=dashboard_widget' )?>" class="button-primary alignright"><?= __( 'Enter wizard', WP_Style_Guide::PLUGIN_SLUG ) ?></a></p>
							<div class="clear"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="wizards-list-row" style="clear: both; padding-top: 20px;">
			<div class="postbox-container" style="width: 49.5%; float: left;">
				<div class="postbox" style="margin: 0px 8px;min-height: 100px;">
					<h2 class="hndle ui-sortable-handle">
						<span><?= __( 'Custom Post Type Wizard', WP_Style_Guide::PLUGIN_SLUG ) ?></span>
					</h2>
					<div class="inside">
						<div class="main">
							<p><?= __( 'Generate code for custom post type&hellip;', WP_Style_Guide::PLUGIN_SLUG ) ?></p>
							<p><a href="<?= admin_url( 'admin.php?page=wp-patterns-wizards&wizard=cpt' )?>" class="button-primary alignright"><?= __( 'Enter wizard', WP_Style_Guide::PLUGIN_SLUG ) ?></a></p>
							<div class="clear"></div>
						</div>
					</div>
				</div>
			</div>
			<div class="postbox-container" style="width: 49.5%; float: left;">
				<div class="postbox" style="margin: 0px 8px;min-height: 100px;">
					<h2 class="hndle ui-sortable-handle">
						<span><?= __( 'Table List Wizard', WP_Style_Guide::PLUGIN_SLUG ) ?></span>
					</h2>
					<div class="inside">
						<div class="main">
							<p><?= __( 'Generate data table list (based on <code>WP_Table_List</code>)&hellip;', WP_Style_Guide::PLUGIN_SLUG ) ?></p>
							<p><a href="<?= admin_url( 'admin.php?page=wp-patterns-wizards&wizard=table_list' )?>" class="button-primary alignright"><?= __( 'Enter wizard', WP_Style_Guide::PLUGIN_SLUG ) ?></a></p>
							<div class="clear"></div>
						</div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<?php endif;?>