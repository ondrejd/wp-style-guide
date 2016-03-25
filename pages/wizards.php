<?php
$wizard_type = filter_input(INPUT_GET, 'wizard');
if (in_array($wizard_type, array('plugin', 'theme'))):
	include_once("wizards-$wizard_type.php");
else:
?><div class="wrap">

	<?php screen_icon(); ?>

	<h1><?php _e( 'Wizards', WP_Style_Guide::PLUGIN_SLUG ) ?></h1>

	<div class="metabox-holder">
		<div class="postbox-container" style="width: 49.5%; float: left;">
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
		<div class="postbox-container" style="width: 49.5%; float: right;">
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

</div>
<?php endif;?>