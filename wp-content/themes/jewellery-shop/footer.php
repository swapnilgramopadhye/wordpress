<?php
/**
 * The template for displaying the footer.
 *
 * Contains the closing of the #content div and all content after
 *
 * @package Jewellery Shop
 */
?>
<div id="footer">
  <div class="container">
    <div class="ftr-4-box">
      <?php dynamic_sidebar('footer-nav'); ?>
    </div>
  </div>
  <div class="copywrap text-center">
    <div class="container">      
      <p class="mb-0"><?php echo esc_html(
        get_theme_mod('jewellery_shop_copyright_line',
        __('Jewellery WordPress Theme','jewellery-shop'))); ?>
      </p>
    </div>
  </div>
</div>
<?php wp_footer(); ?>
</body>
</html>