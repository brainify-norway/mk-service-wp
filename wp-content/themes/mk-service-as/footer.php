<?php $phone = get_field("phone", "option");
$email = get_field("email", "option");
?>


<div class="footer wf-section">
  <div class="container w-container">
    <img class="footer-image" src="<?php echo get_stylesheet_directory_uri() ?>/images/logo-2.svg" loading="lazy" alt="logo" />
    <div class="text-block">
      <a href="mailto:<?php echo $email["link"] ?>" class="white"><?php echo $email["text"] ?></a>
    </div>
    <div class="text-block">
      <a href="tel:<?php echo $phone["link"] ?>" class="white"><?php echo $phone["text"] ?></a>
    </div>
  </div>
</div>
<script src="https://d3e54v103j8qbb.cloudfront.net/js/jquery-3.5.1.min.dc5e7f18c8.js?site=62f0ef921cef28dbf03aa6d6" type="text/javascript" integrity="sha256-9/aliU8dGd2tb6OSsuzixeV4y/faTqgFtohetphbbj0=" crossorigin="anonymous"></script>
<script src="<?php echo get_stylesheet_directory_uri() ?>/js/webflow.js" type="text/javascript"></script>
<!-- [if lte IE 9]><script src="https://cdnjs.cloudflare.com/ajax/libs/placeholders/3.0.2/placeholders.min.js"></script><![endif] -->

<?php wp_footer(); ?>

</body>

</html>