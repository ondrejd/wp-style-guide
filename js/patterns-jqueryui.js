/**
 * JavaScripts for "Patterns Library -> jQuery UI Components" page.
 */

jQuery(document).on('ready', function() {
	// Accordion
	var accordionHeight1;
	jQuery('#accordion-1').accordion({
		// Note: Fix for height.
		create: function(event, ui) {
			accordionHeight1 = event.target.clientHeight;
			jQuery(event.target).parent().css('height', accordionHeight1 + 'px');
		},
		header: 'h3'
	});
	jQuery('#accordion-2').accordion({
		// Note: Fix for height.
		create: function(event, ui) {
			if (event.target.clientHeight > accordionHeight1) {
				jQuery(event.target).parent().css('height', event.target.clientHeight + 'px');
			}
		}
	}).accordion('option', 'icons', false);

	// Autocomplete
	jQuery('#autocomplete').val(null).autocomplete({
		source: [ 'c++', 'java', 'php', 'coldfusion', 'javascript', 'asp', 'ruby', 'objective-c', 'python', 'rust', 'go', 'vala' ]
	});

	// Button
	jQuery('#button').button();
	jQuery('#radioset').buttonset();

	// Tabs
	jQuery('#tabs').tabs();

	// Dialog
	jQuery('#dialog').dialog({
		autoOpen: false,
		width: 600,
		buttons: {
			"Ok": function() {
				jQuery(this).dialog("close");
			},
			"Cancel": function() {
				jQuery(this).dialog("close");
			}
		}
	});

	// Dialog Link
	jQuery('#dialog_link').click(function(){
		jQuery('#dialog').dialog('open');
		return false;
	});

	// Datepicker
	jQuery('#datepicker').datepicker({
		inline: true,
		showWeek: true
	});

	jQuery('#multidatepicker').datepicker({
		numberOfMonths: 3,
		showButtonPanel: true,
		inline: true
	});

	// Slider
	jQuery('.slider').slider({
		range: true,
		values: [17, 67]
	});

	jQuery("#eq > span").each(function() {
		var value = parseInt(jQuery(this).text());
		jQuery(this).empty().slider({
			value: value,
			range: "min",
			animate: true,
			orientation: "vertical"
		});
	});


	// Progressbar
	jQuery("#progressbar").progressbar({
		value: 20
	});

	//hover states on the static widgets
	jQuery('#dialog_link, ul#icons li').hover(
		function() { jQuery(this).addClass('ui-state-hover'); },
		function() { jQuery(this).removeClass('ui-state-hover'); }
	);

	jQuery(".buttonset > button").button()
	.next()
	.button({
		text: false,
		icons: {
			primary: "ui-icon-triangle-1-s"
		}
	})
	.parent()
	.buttonset();


	jQuery('#beginning').button({
		text: false,
		icons: {
			primary: 'ui-icon-seek-start'
		}
	});
	jQuery('#rewind').button({
		text: false,
		icons: {
			primary: 'ui-icon-seek-prev'
		}
	});
	jQuery('#play').button({
		text: false,
		icons: {
			primary: 'ui-icon-play'
		}
	});
	jQuery('#stop').button({
		text: false,
		icons: {
			primary: 'ui-icon-stop'
		}
	});
	jQuery('#forward').button({
		text: false,
		icons: {
			primary: 'ui-icon-seek-next'
		}
	});
	jQuery('#end').button({
		text: false,
		icons: {
			primary: 'ui-icon-seek-end'
		}
	});
	jQuery("#shuffle").button();
	jQuery("#repeat").buttonset();
});