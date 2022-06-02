<?php
/**
 * Widget: Events List Event
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/v2/widgets/widget-events-list/event.php
 *
 * See more documentation about our views templating system.
 *
 * @link http://evnt.is/1aiy
 *
 * @version 5.2.1
 *
 * @var WP_Post $event The event post object with properties added by the `tribe_get_event` function.
 *
 * @see tribe_get_event() For the format of the event object.
 */

$container_classes = [ 'tribe-common-g-row', 'tribe-events-widget-events-list__event-row' ];
$container_classes['tribe-events-widget-events-list__event-row--featured'] = $event->featured;

$event_classes = tribe_get_post_class( [ 'tribe-events-widget-events-list__event' ], $event->ID );


use Tribe__Date_Utils as Dates;

/*
 * If the request date is after the event start date, show the request date to avoid users from seeing dates "in the
 * past" in relation to the date they requested (or today's date).
 */
$display_date = empty( $is_past ) && ! empty( $request_date )
	? max( $event->dates->start_display, $request_date )
	: $event->dates->start_display;

$event_month     = $display_date->format_i18n( 'F' );
$event_day_num   = $display_date->format_i18n( 'j' );
$event_year   = $display_date->format_i18n( 'Y' );
$event_date_attr = $display_date->format( Dates::DBDATEFORMAT );


?>
<div <?php tribe_classes( $container_classes ); ?>>


	<div class="tribe-events-widget-events-list__event-wrapper tribe-common-g-col">
		<article <?php tribe_classes( $event_classes ) ?>>
			<div style="display: flex; font-size: 0.9rem;">
				<div>
					<div style="background-image: url(<?php echo esc_url( $event->thumbnail->full->url ); ?>); width: 40px; height: 40px; background-size: cover;  margin-right: 0.5em;" >&nbsp;</div>
				</div>
				<div  style="">
						<?php echo esc_html( $event_day_num ); ?> <?php echo esc_html( $event_month ); ?> <?php echo esc_html( $event_year ); ?>						
						<?php $this->template( 'widgets/widget-events-list/event/title', [ 'event' => $event ] ); ?>
						<?php $this->template( 'widgets/widget-events-list/event/date', [ 'event' => $event ] ); ?>

					<?php $this->do_entry_point( 'event_meta' ); ?>
				</div>

			</div>
		</article>
	</div>

</div>

