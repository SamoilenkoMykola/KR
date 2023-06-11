( function( api ) {

	// Extends our custom "CarExpert-pro" section.
	api.sectionConstructor['CarExpert-pro'] = api.Section.extend( {

		// No events for this type of section.
		attachEvents: function () {},

		// Always make the section active.
		isContextuallyActive: function () {
			return true;
		}
	} );

} )( wp.customize );
