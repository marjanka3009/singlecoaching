    <?php 
    /** 
     * voorpagina Block Template. 
     * 
     * @param array $block The block settings and attributes. 
     * @param string $content The block inner HTML (empty). 
     * @param bool $is_preview True during AJAX preview. 
     * @param (int|string) $post_id The post ID this block is saved to. 
     */ 
     
    // Create id attribute allowing for custom "anchor" value. 
    $id = 'voorpagina-' . $block['id']; 
    if( !empty($block['anchor']) ) { 
     $id = $block['anchor']; 
    } 
     
    // Create class attribute allowing for custom "className" and "align" values. 
    $className = 'voorpagina'; 
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
    $icoon = get_field('icoon') ?: '';
    $omschrijving = get_field('omschrijving') ?: ''; 
    $leesmeer = get_field('lees_meer') ?: ''; 
    $zichtbaar = get_field('zichtbaar') ?: '';
    
    ?> 
     
    <!--Markup for voorpagina--> 


        <?php if ($zichtbaar == 1): ?>
   <div class="card">
        <h2 class="gamma"><a href="<?php echo $link; ?>"><i class="fa fontawesome-icon fa-<?php echo $icoon; ?> circle-yes"></i> <?php echo $titel; ?></a></h2> 
        <div class="card-image" style="background-image: url(<?php echo $image; ?>);"></div>
        <p style="margin-top: 1em; "><?php echo $omschrijving; ?><br><a href="<?php echo $link; ?>"><?php echo $leesmeer; ?></a></p> 
    </div>
            
        <?php endif ?>
 