<?php

/**
 * Displays a Gallery with different formats
 *
 * @package      BRS Plugins
 * @author       Disnel Rodriguez & Maurice Tadros
 * @since        1.0.0
 * @license      GPL-2.0+
 **/

?>

<section class="gallery-section">
    <?php if (have_rows('section')) : ?>
        <?php while (have_rows('section')) :
            the_row();
            $layout = get_row_layout();
            // Only text
            if ($layout == 'paragraph') :
                $text = get_sub_field('text'); ?>
                <div class="container">
                    <div class="row">
                        <div class="col-12 mb-2">
                            <p><?php echo $text ?></p>
                        </div>
                    </div>
                </div>
            <?php
            // Only images
            elseif ($layout == 'images_set') :
                $images = get_sub_field('images');
                $layout_class = 'layout' . str_repeat('-1', count($images));
                if (count($images) == 2) :
                    switch (get_sub_field('variant')):
                        case '2':
                            $layout_class = 'layout-1-2';
                            break;
                        case '3':
                            $layout_class = 'layout-2-1';
                            break;
                        default:
                            break;
                    endswitch;
                endif;
            ?>
                <div class="gallery-row <?php echo $layout_class ?>">
                    <?php foreach ($images as $image) : ?>
                        <div class="gallery-col<?php echo $layout_class == "layout-1" ? " w-100" : ""; ?>">
                            <img class="full-size-image" data-label="Before" src="<?php echo $image ?>" />
                            <a class="fancybox" href="<?php echo $image ?>" data-fancybox="images"></a>
                        </div>
                    <?php endforeach; ?>
                </div>
            <?php
            // Images + text with image in a column
            elseif ($layout == 'image_text_image') :
                $position = get_sub_field('text_image')['position'];
                $text = get_sub_field('text_image')['text'];
                $inside_image = get_sub_field('text_image')['image'];
                $image = get_sub_field('image');
                $layout_class = $position == 'Right' ? 'layout-2-1' : 'layout-1-2';
            ?>
                <div class="gallery-row <?php echo $layout_class; ?>" style="align-items: inherit">
                    <?php if ($position == 'Right') : ?>
                        <div class="gallery-col">
                            <img class="full-size-image" data-label="Before" src="<?php echo $image; ?>" />
                            <a class="fancybox" href="<?php echo $image; ?>" data-fancybox="images"></a>
                        </div>
                    <?php endif; ?>

                    <div class="gallery-col d-flex flex-column">
                        <br />
                        <p><?php echo $text ?></p>
                        <span style="flex-grow: 1"></span>
                        <div class="position-relative">
                            <img class="full-size-image" data-label="Before" src="<?php echo $inside_image; ?>" />
                            <a class="fancybox" href="<?php echo $inside_image; ?>" data-fancybox="images"></a>
                        </div>
                    </div>

                    <?php if ($position == 'Left') : ?>
                        <div class="gallery-col">
                            <img class="full-size-image" data-label="Before" src="<?php echo $image; ?>" />
                            <a class="fancybox" href="<?php echo $image; ?>" data-fancybox="images"></a>
                        </div>
                    <?php endif; ?>
                </div>
            <?php // Image(s) + Text
            elseif ($layout == 'images_text') :
                $images = get_sub_field('images');
                $text = get_sub_field('text');
                $text_left = get_sub_field('text_position') == 'Left';
                $layout_class = $text_left ? 'layout-1-2' : 'layout-2-1'; ?>
                <div class="gallery-row <?php echo $layout_class . '-with-text' ?>">
                    <?php if ($text_left) : ?>
                        <div class="gallery-col d-flex align-items-center">
                            <p><?php echo $text ?></p>
                        </div>
                    <?php endif; ?>
                    <?php if (count($images) == 2) : ?>
                        <div class="gallery-col">
                        <?php endif;
                    foreach ($images as $image) : ?>
                            <div class="gallery-col">
                                <img class="full-size-image" src="<?php echo $image ?>" />
                                <a class="fancybox" href="<?php echo $image ?>" data-fancybox="images"></a>
                            </div>
                        <?php endforeach;
                    if (count($images) == 2) : ?>
                        </div>
                    <?php endif; ?>
                    <?php if (!$text_left) : ?>
                        <div class="gallery-col d-flex align-items-center">
                            <p><?php echo $text ?></p>
                        </div>
                    <?php endif; ?>
                </div>
            <?php endif; ?>
        <?php endwhile; ?>
    <?php endif; ?>
</section>

<?php echo render_circle_button('back-to-main-button', 'BACK TO', 'MAIN GALLERY', '/gallery/'); ?>

<?php
