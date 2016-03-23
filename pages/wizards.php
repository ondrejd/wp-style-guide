<?php
$wizard_type = filter_input(INPUT_GET, 'wizard');
if (in_array($wizard_type, array('plugin', 'theme'))):
	include_once("wizards-$wizard_type.php");
else:
?><div class="wrap">

	<?php screen_icon(); ?>

	<h1><?php esc_html_e( 'Wizards' ); ?></h1>

	<div class="metabox-holder">
		<div class="postbox-container" style="width: 49.5%; float: left;">
			<div class="postbox" style="margin: 0px 8px;min-height: 100px;">
				<h2 class="hndle ui-sortable-handle">
					<span>Plugin Wizard</span>
				</h2>
				<div class="inside">
					<div class="main">
						<p>Generate quickly your new WordPress plugin.</p>
						<p><a href="<?= admin_url('admin.php?page=wp-patterns-wizards&wizard=plugin')?>" class="button-primary alignright">Continue &gt;</a></p>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
		<div class="postbox-container" style="width: 49.5%; float: right;">
			<div class="postbox" style="margin: 0px 8px;min-height: 100px;">
				<h2 class="hndle ui-sortable-handle">
					<span>Theme Wizard</span>
				</h2>
				<div class="inside">
					<div class="main">
						<p>Create new WordPress theme..</p>
						<p><a href="<?= admin_url('admin.php?page=wp-patterns-wizards&wizard=theme')?>" class="button-primary alignright">Continue &gt;</a></p>
						<div class="clear"></div>
					</div>
				</div>
			</div>
		</div>
	</div>

</div>
<?php endif;?>