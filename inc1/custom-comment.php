<?php 


add_filter('comment_form_defaults', 'set_my_comment_title', 20);
function set_my_comment_title( $defaults ){
 $defaults['title_reply'] = __('Geef hier je reactie', 'singlecoaching');
 return $defaults;
}