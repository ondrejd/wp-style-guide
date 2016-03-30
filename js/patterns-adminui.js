/**
 * JavaScripts for "Patterns Library -> Other Widgets" page.
 */

jQuery(document).on('ready', function() {
	jQuery('.submit-example button').on('click', function() {
		if (jQuery(this).next().css('visibility') == 'collapse') {
			jQuery(this).next().css('visibility', 'visible');
		} else {
			jQuery(this).next().css('visibility', 'collapse');
		}
	});
} );