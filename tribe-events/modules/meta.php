<?php
/**
 * Single Event Meta Template
 *
 * @version 4.6.10
 *
 * @package TribeEventsCalendar
 */

do_action( 'tribe_events_single_meta_before' );	
		do_action( 'tribe_events_single_event_meta_primary_section_start' );
			// Details
			tribe_get_template_part( 'modules/meta/details' );
			// Organizer
			if ( tribe_has_organizer() ) tribe_get_template_part( 'modules/meta/organizer' );
		do_action( 'tribe_events_single_event_meta_primary_section_end' );

		do_action( 'tribe_events_single_event_meta_secondary_section_start' );
			// Venue
			tribe_get_template_part( 'modules/meta/venue' );	
		do_action( 'tribe_events_single_event_meta_secondary_section_end' );
	
do_action( 'tribe_events_single_meta_after' );