<?php 



function singlecoaching_posts_taxonomy_filter() {
     global $typenow; // this variable stores the current custom post type
     if( $typenow == 'blok' ){ // choose one or more post types to apply taxonomy filter for them if( in_array( $typenow  array('post','games') )
          $taxonomy_names = array('blok', 'bloksoort');
          foreach ($taxonomy_names as $single_taxonomy) {
               $current_taxonomy = isset( $_GET[$single_taxonomy] ) ? $_GET[$single_taxonomy] : '';
               $taxonomy_object = get_taxonomy( $single_taxonomy );
               $taxonomy_name = strtolower( $taxonomy_object->labels->name );
               $taxonomy_terms = get_terms( $single_taxonomy );
               if(count($taxonomy_terms) > 0) {
                    echo "<select name='$single_taxonomy' id='$single_taxonomy' class='postform'>";
                    echo "<option value=''>All $taxonomy_name</option>";
                    foreach ($taxonomy_terms as $single_term) {
                         echo '<option value='. $single_term->slug, $current_taxonomy == $single_term->slug ? ' selected="selected"' : '','>' . $single_term->name .' (' . $single_term->count .')</option>'; 
                    }
                    echo "</select>";
               }
          }
     }


}

add_action( 'restrict_manage_posts', 'singlecoaching_posts_taxonomy_filter' );

/* prepost waaronder een filter om blokjes vroeger dan vandaag - combineer dat met een conditional als zichtbaar */

// function university_adjust_queries($query) {
//   if (!is_admin() AND is_post_type_archive('campus') AND $query->is_main_query()) {
//     $query->set('posts_per_page', -1);
//   }

//   if (!is_admin() AND is_post_type_archive('program') AND $query->is_main_query()) {
//     $query->set('orderby', 'title');
//     $query->set('order', 'ASC');
//     $query->set('posts_per_page', -1);
//   }

//   if (!is_admin() AND is_post_type_archive('event') AND $query->is_main_query()) {
//     $today = date('Ymd');
//     $query->set('meta_key', 'event_date');
//     $query->set('orderby', 'meta_value_num');
//     $query->set('order', 'ASC');
//     $query->set('meta_query', array(
//               array(
//                 'key' => 'event_date',
//                 'compare' => '>=',
//                 'value' => $today,
//                 'type' => 'numeric'
//               )
//             ));
//   }
// }

// add_action('pre_get_posts', 'university_adjust_queries');





