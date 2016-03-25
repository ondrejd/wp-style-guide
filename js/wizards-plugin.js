/**
 * Script for "Wizards - Plugin" page.
 *
 * @author Ondřej Doněk, <ondrejd@gmail.com>
 * @license http://www.gnu.org/licenses/gpl-2.0.html GPLv2 or later
 */

jQuery(document).on("ready", function() {
	// Selecting license
	jQuery('input[name="plugin-license"').on("change", function() {
		console.log(jQuery(this).val());
		switch (jQuery(this).val()) {
			case "none":
				jQuery("#plugin-license_select").prop("disabled", true);
				jQuery("#plugin-license_other_name").prop("disabled", true);
				jQuery("#plugin-license_other_uri").prop("disabled", true);
				break;

			case "custom":
				jQuery("#plugin-license_select").prop("disabled", false).removeProp("disabled");
				jQuery("#plugin-license_other_name").prop("disabled", true);
				jQuery("#plugin-license_other_uri").prop("disabled", true);
				break;

			case "other":
				jQuery("#plugin-license_select").prop("disabled", true);
				jQuery("#plugin-license_other_name").prop("disabled", false).removeProp("disabled");
				jQuery("#plugin-license_other_uri").prop("disabled", false).removeProp("disabled");
				break;
		}
	});
});
