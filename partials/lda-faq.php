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

<style>
  /* Scoped to FAQ block */
  .lda-faq .lda-faq-divider {
    border: 0;
    height: 0.5px;
    background: #000;
    width: 100vw;
    margin-left: calc(50% - 50vw);
    margin-right: calc(50% - 50vw);
    margin-top: 24px;
    margin-bottom: 24px;
  }

  .lda-faq .lda-cta-btn {
    position: relative;
    z-index: 0;
    height: 50px;
    font-size: 16px;
    display: inline-flex;
    align-items: center;
    gap: 12px;
    background: #f26522; /* LDA orange */
    color: #fff;
    text-decoration: none;
    border-radius: 9999px;
    padding: 12px 60px 12px 20px;
    font-weight: 700;
    text-transform: uppercase;
    letter-spacing: 0.04em;
    transition: background-color .2s ease, filter .2s ease, transform .05s ease;
  }

  .lda-faq .lda-cta-btn:hover { filter: brightness(0.95); }
  .lda-faq .lda-cta-btn:active { transform: translateY(1px); }

  .lda-faq .lda-cta-btn__bubble {
    position: absolute;
    z-index: 10;
    font-size: 22px;
    right: 0px;
    width: 50px;
    height: 50px;
    border-radius: 50%;
    background: #000;
    color: #fff;
    display: inline-flex;
    align-items: center;
    justify-content: center;
    flex-shrink: 0;
  }

  .lda-faq .lda-cta-btn__label { color: #fff; }
</style>

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

<section class="lda-faq page-section large-padding-regular-padding" style="padding-top: 50px;">
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
