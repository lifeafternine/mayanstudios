<?php
/**
Template Name: Home
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
  "contact_button_url",
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
          <div class="hero-banner"><img src="<?php echo $home_banner_img;?>" alt=""></div>
          <div class="hero-categories">
            <div class="l-constrained">
              <ul>
                <li><a href="<?php echo $home_bar1_url;?>"><img src="<?php echo $home_bar1_img;?>" alt=""><span><?php echo $home_bar1_text;?></span></a></li>
                <li><a href="<?php echo $home_bar2_url;?>"><img src="<?php echo $home_bar2_img;?>" alt=""><span><?php echo $home_bar2_text;?></span></a></li>
                <li><a href="<?php echo $home_bar3_url;?>"><img src="<?php echo $home_bar3_img;?>" alt=""><span><?php echo $home_bar3_text;?></span></a></li>
              </ul>
            </div>
          </div>
        </div>
      </div>
      <div class="three-fourths">
        <h2><?php echo $home_primary_header;?></h2>
        <p><?php echo $home_primary_body;?></p>
        <h3><?php echo $home_secondary_header;?></h3>
        <p><?php echo $home_secondary_body;?></p>
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
      <div style="overflow: hidden;" class="l-unconstrained">
        <div class="l-unconstrained-constraint">
          <div class="testimonials">
            <div class="l-constrained">
              <h2><?php echo $home_carousel_header;?></h2>
              <div data-carousel-autoplay="true" data-carousel-dots="true" data-carousel-nav="false" class="owl-carousel">
                <blockquote>
                  <p>“<?php echo $home_carousel_slide1_body;?>”</p>
                  <footer><?php echo $home_carousel_slide1_footer;?></footer>
                </blockquote>
                <blockquote>
                  <p>“<?php echo $home_carousel_slide2_body;?>”</p>
                  <footer><?php echo $home_carousel_slide2_footer;?></footer>
                </blockquote>
                <blockquote>
                  <p>“<?php echo $home_carousel_slide3_body;?>”</p>
                  <footer><?php echo $home_carousel_slide3_footer;?></footer>
                </blockquote>
                <blockquote>
                  <p>“<?php echo $home_carousel_slide4_body;?>”</p>
                  <footer><?php echo $home_carousel_slide4_footer;?></footer>
                </blockquote>
              </div>
            </div>
          </div>
        </div>
      </div>
      <h2 style="text-align: center;"><?php echo $contact_header;?></h2>
      <p><?php echo $contact_body;?></p>
      <p style="text-align: center;"><a href="<?php echo $contact_button_url;?>" class="button"><?php echo $contact_button_text;?></a><br><br><br></p>
    </div>
  </article>
</main>


<?php get_footer(); ?>
