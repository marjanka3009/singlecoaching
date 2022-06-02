    <?php 
    /** 
     * indepersonline Block Template. 
     * 
     * @param array $block The block settings and attributes. 
     * @param string $content The block inner HTML (empty). 
     * @param bool $is_preview True during AJAX preview. 
     * @param (int|string) $post_id The post ID this block is saved to. 
     */ 
     
    // Create id attribute allowing for custom "anchor" value. 
    $id = 'indepersonline-' . $block['id']; 
    if( !empty($block['anchor']) ) { 
     $id = $block['anchor']; 
    } 
     
    // Create class attribute allowing for custom "className" and "align" values. 
    $className = 'indepersonline'; 
    if( !empty($block['className']) ) { 
     $className .= ' ' . $block['className']; 
    } 
    if( !empty($block['align']) ) { 
     $className .= ' align' . $block['align']; 
    } 
     
    // Load values and assing defaults. 
    $image = get_field('image') ?: ''; 
    $link = get_field('link') ?: '';     
    $titel = get_field('titel') ?: ''; 
    $omschrijving = get_field('omschrijving') ?: ''; 
    
    ?> 

    <!-- iconen online = book, televisie = fa-video-camera radio fa-microphone -->
     
    <!--Markup for indepersonline--> 
    <div class="card">
        <h2 class="gamma margin-top-double"><a href="<?php echo $link; ?>"><i class="fa fontawesome-icon fa-link circle-yes"></i><?php echo $titel; ?></a></h2> 
        <a href="<?php echo $link; ?>" target="_blank"><div class="indepers" style=" background-image: url(<?php echo $image; ?>); "></div></a>
        <p><?php echo $omschrijving; ?></p> 
    </div>
        


<!-- height: 130px; max-width:99%; background-repeat: no-repeat; background-size: cover; background-position: top; -->
