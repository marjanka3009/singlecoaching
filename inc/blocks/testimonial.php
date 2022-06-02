    <?php
    /**
     * Testimonial Block Template.
     *
     * @param array $block The block settings and attributes.
     * @param string $content The block inner HTML (empty).
     * @param bool $is_preview True during AJAX preview.     * @param (int|string) $post_id The post ID this block is saved to.     */
    // Create id attribute allowing for custom "anchor" value.    $id = 'indepersblad-' . $block['id'];    if( !empty($block['anchor']) ) {     $id = $block['anchor'];    }

    // Create class attribute allowing for custom "className" and "align" values.

    $className = 'testimonial';    if( !empty($block['className']) ) {
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


    $naam = get_field('naam') ?: '';
    $testimonial_tekst = get_field('testimonial_tekst') ?: '';
    $foto = get_field('foto') ?: '';
    $link = get_field('link') ?: '';
    $linktekst = get_field('linktekst') ?: '';
    ?>


<blockquote>
    <div style="display: flex; flex-direction: row; align-items: flex-start;">
        <div style="flex-basis: 150px;"><img class="wp-image-18748 img-round" style="width: 100%;" src="<?php echo $foto; ?>" alt=""></div>
        <div style="margin-left: 1em;">
            <span style="font-style: normal; color: #333;"><?php echo $testimonial_tekst; ?></span>
            <cite> ~ <?php echo $naam; ?></cite><br>
            <?php if ($link): ?>
                <a style="display: inline-block; padding-top: 0.75em;" href="<?php echo $link; ?>"><?php echo $linktekst; ?></a>
            <?php endif ?>

        </div>
        </div>
</blockquote>




