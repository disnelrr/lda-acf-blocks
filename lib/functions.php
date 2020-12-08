<?php
/**
 * Builds a section for the UI
 *
 * @param $attrs
 */
function build_section ($attrs) {
    //$id, $class, $theme, $title, $description, $circle_content, $rtl;
    $id = $attrs['id'] ? $attrs['id'] : round(microtime(true) * 1000);
    $top_content = $attrs['top_content'];
    $bottom_content = $attrs['bottom_content'];
    $circle_content = $attrs['circle_content'];
    $do_not_animate = $attrs['do_not_animate'] == true || $attrs['do_not_animate'] == 'true';
    $circle_small = $attrs['circle_small'] == true || $attrs['circle_small'] == 'true';
    $keep_circle = $attrs['keep_circle'] == true || $attrs['keep_circle'] == 'true';
    $rtl = $attrs['rtl'] == true || $attrs['rtl'] == 'true';
    $dark = $attrs['dark'] == true || $attrs['dark'] == 'true';
    $tag = $attrs['tag'] ? $attrs['tag'] : 'section';
    $hide_line = $attrs['hide_line'] == true;
    $hide_circle = $attrs['hide_circle'] == true;
    $add_center_classes = isset($attrs['add_center_classes']) ? $attrs['add_center_classes'] : true;

    $classes = array('page-section');
    if ($attrs['class'])
        $classes[] = $attrs['class'];
    if ($rtl)
        $classes[] = 'align-content-right';
    if ($circle_small)
        $classes[] = 'small-circle';
    if (!$keep_circle)
        $classes[] = 'hide-circle-on-mobile';
    if (!$do_not_animate)
        $classes[] = 'animatable';
    if ($add_center_classes)
        $classes[] = 'd-flex align-items-center justify-content-center';

    $class = implode(" ", $classes);

    ob_start();
    ?>
    <<?php echo $tag; ?> id="<?php echo $id; ?>" class="<?php echo $class; ?>">
        <?php if ($add_center_classes): ?>
        <div class="w-100">
        <?php endif; ?>
        <?php if ($top_content) { ?>
            <div class="container top-content">
                <?php echo $top_content; ?>
            </div>
        <?php } ?>
        <div class="line<?php echo $dark ? ' dark' : '' ?><?php echo $hide_line ? ' hidden' : '' ?>">
            <div class="line-inner"></div>
            <?php if (!$hide_circle) { ?>
            <div class="container">
                <div class="position-relative">
                    <div class="circle-animation <?php echo $dark ? 'dark-border' : '' ?> <?php echo $circle_small ? 'small' : '' ?>">
                        <svg xmlns="http://www.w3.org/2000/svg">
                            <circle
                                stroke-width="1"
                                class="shape <?php echo $circle_small ? 'small' : '' ?>"
                                stroke-dasharray="<?php echo $circle_small ? '0 550' : '0 1010' ?>"
                                stroke-dashoffset="<?php echo $circle_small ? '-201' : '-345' ?>"
                                cx="<?php echo $circle_small ? '65' : '111' ?>"
                                cy="<?php echo $circle_small ? '65' : '111' ?>"
                                r="<?php echo $circle_small ? '64' : '110' ?>"
                                fill="transparent"
                            />
                            <circle
                                stroke-width="1"
                                class="border <?php echo $circle_small ? 'small' : '' ?>"
                                stroke-dasharray="<?php echo $circle_small ? '0 550' : '0 1010' ?>"
                                stroke-dashoffset="<?php echo $circle_small ? '-201' : '-345' ?>"
                                cx="<?php echo $circle_small ? '65' : '111' ?>"
                                cy="<?php echo $circle_small ? '65' : '111' ?>"
                                r="<?php echo $circle_small ? '64' : '110' ?>"
                                fill="transparent"
                            />
                            <span class="text">
                                <?php echo $circle_content; ?>
                            </span>
                        </svg>
                    </div>
                </div>
            </div>
            <?php } ?>
        </div>
        <?php if ($bottom_content) { ?>
            <div class="container bottom-content">
                <?php print $bottom_content; ?>
            </div>
        <?php } ?>
        <?php if ($add_center_classes): ?>
        </div>
        <?php endif; ?>
    </<?php echo $tag; ?>>
    <?php
    return ob_get_clean();
}

?>
