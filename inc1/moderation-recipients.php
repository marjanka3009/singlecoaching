<?php

/*  Stuurt reacties naar ander e-mailadres dan admin */
function new_comment_moderation_recipients( $emails, $comment_id ) { 
    return array( 'info@marjankleinen.nl', 'hans.gierkink@singlecoaching.nl', 'meinou.lambeck@singlecoaching.nl' );
}
add_filter( 'comment_moderation_recipients', 'new_comment_moderation_recipients', 24, 2 );
add_filter( 'comment_notification_recipients', 'new_comment_moderation_recipients', 24, 2 );