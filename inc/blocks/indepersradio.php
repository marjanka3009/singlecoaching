    <?php 
    /** 
     * indeperradio Block Template. 
     * 
     * @param array $block The block settings and attributes. 
     * @param string $content The block inner HTML (empty). 
     * @param bool $is_preview True during AJAX preview. 
     * @param (int|string) $post_id The post ID this block is saved to. 
     */ 
     
    // Create id attribute allowing for custom "anchor" value. 
    $id = 'indepersradio-' . $block['id']; 
    if( !empty($block['anchor']) ) { 
     $id = $block['anchor']; 
    } 
     
    // Create class attribute allowing for custom "className" and "align" values. 
    $className = 'indepersradio'; 
    if( !empty($block['className']) ) { 
     $className .= ' ' . $block['className']; 
    } 
    if( !empty($block['align']) ) { 
     $className .= ' align' . $block['align']; 
    } 
     
    ?>
    <?php



            $image = get_sub_field('image') ?: ''; 
            $titel = get_sub_field('titel') ?: ''; 
            $audio = get_sub_field('audio') ?: '';
            

            ?> 
           <!-- iconen online = book, televisie = fa-video-camera radio fa-microphone -->

            <div class="card">
                <h2 class="gamma margin-top"><i class="fa fontawesome-icon fa-microphone circle-yes"></i>
                    <?php echo $titel; ?></h2>
                <div class="indepers" style="background: url(<?php echo $image; ?>);"></div>
               
                <figure class="wp-block-audio" style="width:100px;"><audio style="width:100px;" id="player" controls src="<?php echo $audio ?>"></audio></figure>
            </div>

     

