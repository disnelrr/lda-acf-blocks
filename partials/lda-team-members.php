<?php
/**
 * Displays a LD&A common section
 *
 * @package      BRS Plugins
 * @author       Disnel Rodriguez & Maurice Tadros
 * @since        1.0.0
 * @license      GPL-2.0+
 **/
?>

<section class="page-section animatable team_members_section" id="team_members_section">
    <div class="container top-content">
        <?php the_field('title'); ?>
    </div>
    <div class="line dark has-black-background-color"></div>
    <div class="container bottom-content">
        <div class="row team-members-panel">
            <?php if ( have_rows('members') ):
                while ( have_rows('members') ) : the_row() ?>

                    <?php
                        $name = get_sub_field('name');
                        $description = get_sub_field('description');
                        $image = get_sub_field('image');
                        $rollover_image = get_sub_field('rollover_image');
                    ?>

                    <div class="team-member col-6 col-sm-4 col-lg-3" data-title="<?php echo $name; ?>" data-image-src="<?php echo $image ?>" >
                        <div class="member-desc d-none">
                            <?php the_sub_field('description'); ?>
                        </div>
                        <a title="<?php echo $name ?>" href="#">
                            <img src="<?php echo $image ?>" alt="<?php echo $name ?>">
                            <img src="<?php echo $rollover_image ?>" alt="<?php echo $name ?>">
                        </a>
                    </div>

                <?php endwhile; ?>
            <?php endif; ?>
            <div class="col-6 col-sm-4 col-lg-3 join-our-team">
                <a href="/career" class="no-decoration text-white">JOIN OUR<br/>TEAM<br/><img class="medium-arrow" src="/wp-content/uploads/2020/03/Inquiry-Arrow.png" alt="arrow"/></a>
            </div>
        </div>
    </div>
</section>
