<?php
/**
 * List View Loop
 * This file sets up the structure for the list loop
 *
 * Override this template in your own theme by creating a file at [your-theme]/tribe-events/list/loop.php
 *
 * @package TribeEventsCalendar
 *
 */

if ( ! defined( 'ABSPATH' ) ) {
  die( '-1' );
} ?>

<?php
global $post;
global $more;

$more = false;
?>

<ul class="events-list">

  <?php while ( have_posts() ) : the_post(); ?>
    <?php do_action( 'tribe_events_inside_before_loop' ); ?>

    <li class="event">
      <?php tribe_get_template_part( 'list/single', 'event' ) ?>
    </li>


    <?php do_action( 'tribe_events_inside_after_loop' ); ?>
  <?php endwhile; ?>

</ul>
