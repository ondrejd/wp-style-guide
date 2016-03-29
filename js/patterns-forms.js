/**
 * JavaScripts for "Patterns Library -> jQuery UI Components" page.
 */

// TODO Translate strings!
jQuery( document ).on( 'ready', function() {
	console.log( 'patterns-forms.js' );

	jQuery( '.code-example-link' ).on( 'click', function() {
		var example_id = jQuery( this ).data( 'example_id' );
		var visibility = jQuery( this ).data( 'visibility' );
		console.log( example_id, visibility, '#' + example_id + ' pre' );

		if ( visibility == 'visible' ) {
			jQuery( '#' + example_id + ' pre' ).css( 'display', 'none' );
			jQuery( this ).data( 'visibility', 'collapsed' );
			jQuery( this ).html( 'Show code example' );
		}
		else {
			jQuery( '#' + example_id + ' pre' ).css( 'display', 'block' );
			jQuery( this ).data( 'visibility', 'visible' );
			jQuery( this ).html( 'Hide code example' );
		}
	} );
} );