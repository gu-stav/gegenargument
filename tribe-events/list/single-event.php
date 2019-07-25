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
      global $post;

      $date_divider = ' – ';
      $time_divider = ' – ';

      $start_date = tribe_get_start_date($post->ID, false, 'd.m.');
      $end_date = tribe_get_end_date($post->ID, false, 'd.m.');

      $start_time = tribe_get_start_date($post->ID, false, 'H:i');
      $end_time = tribe_get_end_date($post->ID, false, 'H:i');

      if($end_date == $start_date) {
        $end_date = '';
        $date_divider = '';
      }

      if($has_venue_address) {
        $end_time .= ', ' . wp_strip_all_tags($venue_details['name']);
      }

      echo $start_date;
      echo $date_divider;
      echo $end_date;
    ?><span class="event__time"><?php
      echo $start_time;
      echo $time_divider;
      echo $end_time;
    ?></span>

  </div>

  <h3 class="event__title">
    <a href="<?php echo esc_url( tribe_get_event_link() ); ?>">
      <?php the_title(); ?>
    </a>
  </h3>

  <div class="event__content">
    <?php the_content(); ?>
  </div>
</div>
