<?php

/**
 * LDA FAQ Block Template
 *
 * @package      LDA Blocks
 * @author       Disnel Rodriguez
 * @since        1.0.0
 * @license      GPL-2.0+
 **/

?>

<section class="info-section page-section large-padding-regular-padding">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <h2>
          <?php echo get_field('title'); ?>
        </h2>
      </div>
    </div>
    <div class="row">
      <div class="col-12">
        <p>
          <?php echo get_field('intro'); ?>
        </p>
      </div>
    </div>
  </div>
</section>

<section class="page-section lda-faq">
  <div class="container">
    <div class="row">
      <div class="col-12">
        <hr class="lda-faq-divider" />
        <?php if (have_rows('faq')) : $first = true; ?>
          <?php while (have_rows('faq')) : the_row(); ?>
            <?php if (! $first) : ?>
              <hr class="lda-faq-divider" />
            <?php endif;
            $first = false; ?>
            <p class="font-weight-bold"><?php echo esc_html(get_sub_field('question')); ?></p>
            <div class="faq-answer">
              <?php echo get_sub_field('answer'); ?>
            </div>
          <?php endwhile; ?>
        <?php endif; ?>

        <?php $cta = get_field('ctaText');
        if (! empty($cta)) : ?>
          <?php $ctaUrl = function_exists('get_field') ? get_field('ctaUrl') : ''; ?>
          <div class="mt-4">
            <a class="lda-cta-btn" href="<?php echo esc_url($ctaUrl ? $ctaUrl : '#'); ?>">
              <span class="lda-cta-btn__label"><?php echo esc_html($cta); ?></span>
              <span class="lda-cta-btn__bubble" aria-hidden="true">&rarr;</span>
            </a>
          </div>
        <?php endif; ?>
      </div>
    </div>
  </div>
</section>
