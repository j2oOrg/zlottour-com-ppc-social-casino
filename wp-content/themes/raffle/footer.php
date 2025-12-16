<?php
  $brand = get_theme_file_uri('/assets/images/img.png');
  $privacy_link = get_privacy_policy_url();
  if (empty($privacy_link)) {
      $privacy_page = get_page_by_path('privacy-policy');
      $privacy_link = $privacy_page ? get_permalink($privacy_page) : home_url('/privacy-policy');
  }
?>
<footer class="footer-bar-c6u3">
  <div class="shell-wrap-z4m2">
    <div class="footer-brand-u2m9">
      <img class="brand-logo-u8b4" src="<?php echo esc_url( $brand ); ?>" alt="zlottour logo">
      <span class="sr-only">zlottour</span>
    </div>

    <div class="footer-note-w0e3" style="text-align:center;">
      <p class="section-sub-p0c6" style="margin:0;">
        © 2025 zlottour Association. All rights reserved. | Licence #465790<br>
        Please play responsibly. Must be 18+ to participate.<br>
        <a href="<?php echo esc_url( $privacy_link ); ?>" class="link-accent-m8q5">Privacy Policy</a>
      </p>
    </div>
  </div>
</footer>

<button id="hubScrollTop" class="scroll-top-d8n2" aria-label="Scroll to top">
  <i class="fas fa-chevron-up"></i>
</button>

<?php wp_footer(); ?>
</body>
</html>
