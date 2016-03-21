<?php
$wizard_type = filter_input(INPUT_GET, 'wizard');
if (in_array($wizard_type, array('plugin', 'theme'))):
	include_once("wizards-$wizard_type.php");
else:
?><div class="wrap">

	<?php screen_icon(); ?>

	<h1><?php esc_html_e( 'Wizards' ); ?></h1>

	<p class="wp-ui-notification"><code>XXX</code> Implement <a href="<?= admin_url('admin.php?page=wp-patterns-wizards&wizard=plugin')?>">plugin wizard</a>!</p>
	<p class="wp-ui-notification"><code>XXX</code> Implement <a href="<?= admin_url('admin.php?page=wp-patterns-wizards&wizard=theme')?>">theme wizard</a>!</p>

</div>
<?php endif;?>