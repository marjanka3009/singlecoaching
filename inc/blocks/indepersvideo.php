    <?php 
    /** 
     * indepersvideo Block Template. 
     * 
     * @param array $block The block settings and attributes. 
     * @param string $content The block inner HTML (empty). 
     * @param bool $is_preview True during AJAX preview. 
     * @param (int|string) $post_id The post ID this block is saved to. 
     */ 
     
    // Create id attribute allowing for custom "anchor" value. 
    $id = 'indepersvideo-' . $block['id']; 
    if( !empty($block['anchor']) ) { 
     $id = $block['anchor']; 
    } 
     
    // Create class attribute allowing for custom "className" and "align" values. 
    $className = 'indepersvideo'; 
    if( !empty($block['className']) ) { 
     $className .= ' ' . $block['className']; 
    } 
    if( !empty($block['align']) ) { 
     $className .= ' align' . $block['align']; 
    } 
     
    // Load values and assing defaults. 
    $embed = get_field('embed') ?: ''; 
    $titel = get_field('titel') ?: ''; 

    
    ?> 
     

    <!-- iconen online = book, televisie = fa-video-camera radio fa-microphone -->
     
    <!--Markup for indepersonline--> 
    <div class="indepers">
        <h2 class="gamma margin-top-double"><i class="fa fontawesome-icon fa-video-camera circle-yes"></i><?php echo $titel; ?></h2> 
        <p><?php echo $embed; ?></p>
    </div>
        

