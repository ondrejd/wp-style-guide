/**
 * JavaScripts for "Patterns Library -> jQuery UI Components" page.
 */

// TODO Translate strings!
jQuery( document ).on( 'ready', function() {
	console.log( "Hello from 'patterns-tables.js'!" );

	// Views
	jQuery( '#plugin-use_views' ).prop( 'checked', false );
	jQuery( '#use_views_area' ).hide();
	jQuery( '#use_views_description' ).show();
	jQuery( '#plugin-use_views' ).on( 'change', function() {
		if ( jQuery( this ).prop( 'checked' ) ) {
			jQuery( '#use_views_description' ).hide();
			jQuery( '#use_views_area' ).show();
		} else {
			jQuery( '#use_views_area' ).hide();
			jQuery( '#use_views_description' ).show();
		}
	});

	// Bulk actions
	jQuery( '#plugin-use_bulkactions' ).prop( 'checked', false );
	jQuery( '#use_bulkactions_area' ).hide();
	jQuery( '#use_bulkactions_description' ).show();
	jQuery( '#plugin-use_bulkactions' ).on( 'change', function() {
		if ( jQuery( this ).prop( 'checked' ) ) {
			jQuery( '#use_bulkactions_description' ).hide();
			jQuery( '#use_bulkactions_area' ).show();
		} else {
			jQuery( '#use_bulkactions_area' ).hide();
			jQuery( '#use_bulkactions_description' ).show();
		}
	});
});