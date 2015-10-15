<?php
/**
Template Name: Attorney
*/

get_header();

$array = array(
  "sc_text",
  "sc_phone",
  "footer_disclaimer",
  "home_banner_img",
  "home_banner_title",
  "home_banner_text",
  "home_bar1_img",
  "home_bar1_text",
  "home_bar1_url",
  "home_bar2_img",
  "home_bar2_text",
  "home_bar3_url",
  "home_bar3_img",
  "home_bar3_text",
  "home_bar3_url",
  "home_primary_header",
  "home_primary_body",
  "home_secondary_header",
  "home_secondary_body",
  "home_carousel_header",
  "home_carousel_slide1_body",
  "home_carousel_slide1_footer",
  "home_carousel_slide2_body",
  "home_carousel_slide2_footer",
  "home_carousel_slide3_body",
  "home_carousel_slide3_footer",
  "home_carousel_slide4_body",
  "home_carousel_slide4_footer",
  "contact_header",
  "contact_body",
  "contact_button_text",
  "pa_banner_img",
  "pa_banner_title",
  "pa_banner_text",
  "pa_primary_header",
  "pa_primary_body",
  "at_banner_img",
  "at_banner_title",
  "at_banner_text",
  "at_primary_header",
  "at_primary_body",
);

foreach ($array as $i => $value) {

  $$value = stripslashes_deep(get_option( $value ));
}
?>

<main>
  <article class="post">
    <div class="l-constrained">
      <div class="l-unconstrained">
        <div class="l-unconstrained-constraint">
          <div class="hero-banner" style="margin-bottom: 20px;"><img src="<?php echo $at_banner_img;?>" alt=""></div>
        </div>
      </div>
      <div class="three-fourths">
        <h2><?php echo $at_primary_header;?></h2>
        <p><?php echo $at_primary_body;?></p>
          <h2><strong>Our&nbsp;Staff Members</strong></h2>
        <?php echo do_shortcode( '[Members]' ); ?>
      </div>
      <div class="one-fourth omega">
        <form action="" method="POST" class="request-consultation">
          <h3>Schedule Consultation</h3>
          <label class="form-item form-label-inside">
            <div class="label">Name</div>
            <input type="text" name="Name" required>
          </label>
          <label class="form-item form-label-inside">
            <div class="label">Email</div>
            <input type="email" name="Email" required>
          </label>
          <label class="form-item form-label-inside">
            <div class="label">Phone</div>
            <input type="tel" name="Phone" required>
          </label>
          <label class="form-item form-label-inside">
            <div class="label">Message</div>
            <textarea name="Message" required></textarea>
          </label>
          <label class="form-item"><img src="<?php echo get_stylesheet_directory_uri(); ?>/images/captcha.png" alt="">
            <div class="label">Please enter text from image</div>
            <input type="text" name="Captcha" required>
          </label>
          <div class="form-actions">
            <button type="submit">Send Information</button>
          </div>
        </form>
      </div>
    </div>
  </article>
</main>


<?php get_footer(); ?>
