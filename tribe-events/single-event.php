<?php
/**
 * List View Single Event
 * This file contains one event in the list view
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/single-event.php
 *
 * @package TribeEventsCalendar
 *
 */
if ( ! defined( 'ABSPATH' ) ) {
  die( '-1' );
}

// Setup an array of venue details for use later in the template
$venue_details = tribe_get_venue_details();

// Venue
$has_venue_address = ( ! empty( $venue_details['name'] ) ) ? ' location' : '';

?>
<div class="event__container">
  <div class="event__meta">
    <?php
      $dateFormat = 'd.m. H:i';
      if(tribe_event_is_all_day()) {
        $dateFormat = 'd.m.';
      }

      $start = tribe_get_start_date($post->ID, false, $dateFormat);
      $end = tribe_get_end_date($post->ID, false, $dateFormat);

      echo $start;

      if($end != $start) {
        echo ' – ';

        $start_date = tribe_get_start_date($post->ID, false, 'd.m.');
        $end_date = tribe_get_end_date($post->ID, false, 'd.m.');

        if($start_date == $end_date) {
          $end = tribe_get_end_date($post->ID, false, 'H:i');
        }

        echo $end;
      }
    ?>

    <?php
      if($has_venue_address) {
    ?>
        <span class="event__location">

    <?php
        echo wp_strip_all_tags($venue_details['name']);
    ?>

      </span>
    <?php
      }
    ?>
  </div>

  <h1 class="event__title">
    <?php the_title() ?>
  </h1>

  <div class="event__content">
    <?php the_content() ?>
  </div>
</div>
