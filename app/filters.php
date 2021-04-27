<?php

/**
 * Theme filters.
 */

namespace App;

/**
 * Add "… Continued" to the excerpt.
 *
 * @return string
 */
add_filter('excerpt_more', function () {
    return sprintf(' &hellip; <a href="%s">%s</a>', get_permalink(), __('Continued', 'sage'));
});

add_filter( 'gform_validation_message', function ( $message, $form ) {
    return "<div class='validation_error'>There was a problem with your submission. Please select a response(s).</div>";
}, 10,2);