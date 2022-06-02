<?php
/**
 * View: List Event
 *
 * Override this template in your own theme by creating a file at:
 * [your-theme]/tribe/events/v2/list/event.php
 *
 * See more documentation about our views templating system.
 *
 * @link http://evnt.is/1aiy
 *
 * @version 5.0.0
 *
 * @var WP_Post $event The event post object with properties added by the `tribe_get_event` function.
 *
 * @see tribe_get_event() For the format of the event object.
 */


// $container_classes['tribe-events-calendar-list__event-row--featured'] = $event->featured;

$event_classes = tribe_get_post_class( [ 'tribe_FOTO' ], $event->ID );

if ( ! $event->thumbnail->exists ) {
	return;
}
if ( empty( (string) $event->excerpt ) ) {
	return;
}
if ( empty( $event->cost ) ) {
	return;
}
if ( ! $event->thumbnail->exists ) {
	return;
}
if ( ! $event->venues->count() ) {
	return;
}

$separator            = esc_html_x( ', ', 'Address separator', 'the-events-calendar' );
$venue                = $event->venues[0];
$append_after_address = array_filter( array_map( 'trim', [ $venue->state_province, $venue->state, $venue->province ] ) );
$address              = $venue->address . ( $venue->address && ( $append_after_address || $venue->city ) ? $separator : '' );

use Tribe__Date_Utils as Dates;

$event_date_attr = $event->dates->start->format( Dates::DBDATEFORMAT );

/*
 * If the request date is after the event start date, show the request date to avoid users from seeing dates "in the
 * past" in relation to the date they requested (or today's date).
 */
$display_date = empty( $is_past ) && ! empty( $request_date )
	? max( $event->dates->start_display, $request_date )
	: $event->dates->start_display;

$event_week_day  = $display_date->format_i18n( 'l' );
$event_day_num   = $display_date->format_i18n( 'j' );
$event_month_num   = $display_date->format_i18n( 'F' );
$event_date_attr = $display_date->format( Dates::DBDATEFORMAT );

?>
<style>

.tribe-list-image-wrapper {
	width: 35%; 
}
@media (max-width: 525px) {
  .tribe-list-image-wrapper {
    flex: 100%;
  }
}
.tribe-list-description-wrapper {
	margin-top:0.25rem; 
	flex:1; 
	margin:0 1em;
}
.tribe-list-date {
	margin-top:1em; 
	margin-bottom: 1em;
}
.tribe-list-date-weekday {
	text-transform: capitalize;
}
.tribe-image-link {

}
.tribe-image {
}

.tribe-list-event-wrapper {
	display: flex; 
	flex-wrap: wrap; 
	margin-left: 0px; 
	margin-right: 0px; 
	margin-bottom: 2em;
}
.tribe-list-event-title {

}
.tribe-list-description-wrapper {
	margin-top:0.25rem; 
	flex:1; 
	margin:0 1em;
}
.tribe-list-description-time {
	display: block; 
	margin-bottom: 0.75em;
}
.tribe-list-event-address {
	margin:0.75em 0; 
	font-style: italic;
}

.tribe-list-event-cost" {
	font-family: latoregular; 
	font-weight: 500; 
	margin-top:0.75em; 
	color:#333; 
	font-size: 1.1em;
}
</style>

<div class="tribe-list-date">
	<time datetime="<?php echo esc_attr( $event_date_attr ); ?>">
		<span class="tribe-list-date-weekday"><?php echo esc_html( $event_week_day ); ?></span>  <?php echo esc_html( $event_day_num ); ?>  <?php echo esc_html( $event_month_num ); ?>
	</time> 
</div>


<article class="tribe-list-event-wrapper">
	<div class="tribe-list-image-wrapper">
		<a
			href="<?php echo esc_url( $event->permalink ); ?>"
			title="<?php echo esc_attr( $event->title ); ?>"
			rel="bookmark"
			class="tribe-image-link"
		>
			<img
				src="<?php echo esc_url( $event->thumbnail->full->url ); ?>"
				<?php if ( ! empty( $event->thumbnail->srcset ) ) : ?>
					srcset="<?php echo esc_attr( $event->thumbnail->srcset ); ?>"
				<?php endif; ?>
				<?php if ( ! empty( $event->thumbnail->alt ) ) : ?>
					alt="<?php echo esc_attr( $event->thumbnail->alt ); ?>"
				<?php endif; ?>
				<?php if ( ! empty( $event->thumbnail->title ) ) : ?>
					title="<?php echo esc_attr( $event->thumbnail->title ); ?>"
				<?php endif; ?>
				class="tribe-image"
			/>
		</a>
	</div>	

	<div class="tribe-list-description-wrapper">
			<time datetime="<?php echo esc_attr( $event_date_attr ); ?>" class="tribe-list-description-time">
				<?php echo $event->schedule_details->value(); ?>
			</time>
			<h2>
				<a
					href="<?php echo esc_url( $event->permalink ); ?>"
					title="<?php echo esc_attr( $event->title ); ?>"
					rel="bookmark"
					class="tribe-list-event-title"
				>
					<?php
					// phpcs:ignore
					echo $event->title;
					?>
				</a>
			</h2>
			<address class="tribe-list-event-address">
					<?php echo wp_kses_post( $venue->post_title ); ?>, 
					<?php 
					echo esc_html( $address ); 

					if ( ! empty( $venue->city ) ) : 
						echo esc_html( $venue->city );
						if ( $append_after_address ) :
							echo $separator;
						endif;
					endif;

					if ( $append_after_address ) : 
						echo esc_html( reset( $append_after_address ) ); 
					endif; 
					?>
			</address>
			<?php echo (string) $event->excerpt; ?>

			<p class="tribe-list-event-cost">
				<?php echo esc_html( $event->cost ) ?>
			</p>
		</div>

</article>



