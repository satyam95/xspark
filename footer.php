<footer>
    <div class="container">
      <div class="inner-footer-container">
        <div class="footer-top-row-wrapper">
          <?php if(is_active_sidebar('footer-1')) : ?>
            <?php dynamic_sidebar('footer-1'); ?>
          <?php endif; ?>
          <?php if(is_active_sidebar('footer-2')) : ?>
            <?php dynamic_sidebar('footer-2'); ?>
          <?php endif; ?>
          <?php if(is_active_sidebar('footer-3')) : ?>
            <?php dynamic_sidebar('footer-3'); ?>
          <?php endif; ?>
          <?php if(is_active_sidebar('footer-4')) : ?>
            <?php dynamic_sidebar('footer-4'); ?>
          <?php endif; ?>
          <?php if(is_active_sidebar('footer-5')) : ?>
            <?php dynamic_sidebar('footer-5'); ?>
          <?php endif; ?>
        </div>
        <?php if(is_active_sidebar('footer-btm-1') !== false || is_active_sidebar('footer-btm-2') !== false ) : ?>
          <div class="footer-btm-row">
            <?php if(is_active_sidebar('footer-btm-1')) : ?>
              <?php dynamic_sidebar('footer-btm-1'); ?>
            <?php endif; ?>
            <?php if(is_active_sidebar('footer-btm-2')) : ?>
              <?php dynamic_sidebar('footer-btm-2'); ?>
            <?php endif; ?>
          </div>
        <?php endif; ?>
      </div>
    </div>
    <?php wp_footer(); ?>
   </footer>
</body>
</html>