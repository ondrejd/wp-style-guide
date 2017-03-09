<div class="wrap">

	<?php screen_icon(); ?>

	<h1><?= __( 'Wizards - DashBoard Widget', WP_Style_Guide::PLUGIN_SLUG )?></h1>

	<p class="description">
		<?php printf( __( 'See more details on <a href="%s">WordPress Codex</a>', WP_Style_Guide::PLUGIN_SLUG ), 'https://codex.wordpress.org/Dashboard_SubPanel', 'https://codex.wordpress.org/Dashboard_Widgets_API' ); ?>
	</p>

	<form id="wizard-dashboard_widget">
		<table class="form-table">
		</table>
		<input type="submit" name="submit-dashboard_widget" value="<?= __( 'Generate code', WP_Style_Guide::PLUGIN_SLUG )?>" class="button-primary">
	</form>
</div>