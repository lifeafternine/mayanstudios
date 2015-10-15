<form name="form1" method="post" action="">
  <input type="hidden" name="section1" value="Y">


  <div>
    <div class="admin-left">

      <h3>Header and Footer</h3>

      <h3>Schedule Consultation</h3>
      <p><?php _e("Text:", 'menu-test' ); ?> <br />
        <input type="text" name="sc_text" value="<?php echo $sc_text; ?>" size="50">
      </p>

      <p><?php _e("Phone Number:", 'menu-test' ); ?> <br />
        <input type="text" name="sc_phone" value="<?php echo $sc_phone; ?>" size="50">
      </p>
      <p><?php _e("Address - Line 1:", 'menu-test' ); ?> <br />
        <textarea name="footer_address_1" cols="50" rows="1"><?php echo $footer_address_1; ?></textarea>
      </p>
      <p><?php _e("Address - Line 2:", 'menu-test' ); ?> <br />
        <textarea name="footer_address_2" cols="50" rows="1"><?php echo $footer_address_2; ?></textarea>
      </p>
      <p><?php _e("Email:", 'menu-test' ); ?> <br />
        <textarea name="footer_email" cols="50" rows="1"><?php echo $footer_email; ?></textarea>
      </p>

      <p><?php _e("Footer Disclaimer:", 'menu-test' ); ?> <br />
        <textarea name="footer_disclaimer" cols="50" rows="5"><?php echo $footer_disclaimer; ?></textarea>
      </p>
      <hr />
      <hr />

      <h3>Home Page</h3>

      <h4>Banner<h4>

        <p class="image-uploader">Enter an URL or upload an image for the banner.<br />
          <input class="upload_image" type="text" size="36" name="home_banner_img" value="<?php echo $home_banner_img; ?>" />
          <input class="upload_image_button" type="button" value="Upload Image" />
        </p>
        <p><?php _e("Banner Title:", 'menu-test' ); ?> <br />
          <input type="text" name="home_banner_title" value="<?php echo $home_banner_title; ?>" size="50">
        </p>
        <p><?php _e("Banner Text:", 'menu-test' ); ?> <br />
          <input type="text" name="home_banner_text" value="<?php echo $home_banner_text; ?>" size="50">
        </p>

        <h4>Soldier Bar</h4>

        <h2>Soldier 1</h2>
        <p class="image-uploader">Enter an URL or upload an image.<br />
          <input class="upload_image" type="text" size="36" name="home_bar1_img" value="<?php echo $home_bar1_img; ?>" />
          <input class="upload_image_button" type="button" value="Upload Image" />
        </p>
        <p><?php _e("Text:", 'menu-test' ); ?> <br />
            <textarea name="home_bar1_text" cols="50" rows="5"><?php echo $home_bar1_text; ?></textarea>
          </p>
        <p><?php _e("Link:", 'menu-test' ); ?> <br />
          <textarea name="home_bar1_url" cols="50" rows="1"><?php echo $home_bar1_url; ?></textarea>
        </p>

        <h2>Soldier 2</h2>
        <p class="image-uploader">Enter an URL or upload an image.<br />
          <input class="upload_image" type="text" size="36" name="home_bar2_img" value="<?php echo $home_bar2_img; ?>" />
          <input class="upload_image_button" type="button" value="Upload Image" />
        </p>
        <p><?php _e("Text:", 'menu-test' ); ?> <br />
            <textarea name="home_bar2_text" cols="50" rows="5"><?php echo $home_bar2_text; ?></textarea>
          </p>
          <p><?php _e("Link:", 'menu-test' ); ?> <br />
            <textarea name="home_bar2_url" cols="50" rows="1"><?php echo $home_bar2_url; ?></textarea>
          </p>
        <h2>Soldier 3</h2>
        <p class="image-uploader">Enter an URL or upload an image.<br />
          <input class="upload_image" type="text" size="36" name="home_bar3_img" value="<?php echo $home_bar3_img; ?>" />
          <input class="upload_image_button" type="button" value="Upload Image" />
        </p>
        <p><?php _e("Text:", 'menu-test' ); ?> <br />
            <textarea name="home_bar3_text" cols="50" rows="5"><?php echo $home_bar3_text; ?></textarea>
          </p>
          <p><?php _e("Link:", 'menu-test' ); ?> <br />
            <textarea name="home_bar3_url" cols="50" rows="1"><?php echo $home_bar3_url; ?></textarea>
          </p>

        <h4>Body</h4>
        <p><?php _e("Header:", 'menu-test' ); ?> <br />
          <input type="text" name="home_primary_header" value="<?php echo $home_primary_header; ?>" size="50">
        </p>
        <p><?php _e("Body:", 'menu-test' ); ?> <br />
          <textarea name="home_primary_body" cols="50" rows="5"><?php echo $home_primary_body; ?></textarea>
        </p>
        <p><?php _e("Secondary Header:", 'menu-test' ); ?> <br />
          <input type="text" name="home_secondary_header" value="<?php echo $home_secondary_header; ?>" size="50">
        </p>
        <p><?php _e("Secondary Body:", 'menu-test' ); ?> <br />
          <textarea name="home_secondary_body" cols="50" rows="5"><?php echo $home_secondary_body; ?></textarea>
        </p>

        <h4>Carousel</h4>
        <p><?php _e("Header:", 'menu-test' ); ?> <br />
          <input type="text" name="home_carousel_header" value="<?php echo $home_carousel_header; ?>" size="50">
        </p>
        <h2>Slide 1</h2>
        <p><?php _e("Slide 1 - Body:", 'menu-test' ); ?> <br />
          <textarea name="home_carousel_slide1_body" cols="50" rows="5"><?php echo $home_carousel_slide1_body; ?></textarea>
        </p>
        <p><?php _e("Slide 1 - Footer:", 'menu-test' ); ?> <br />
          <input type="text" name="home_carousel_slide1_footer" value="<?php echo $home_carousel_slide1_footer; ?>" size="50">
        </p>
        <h2>Slide 2</h2>
        <p><?php _e("Slide 2 - Body:", 'menu-test' ); ?> <br />
          <textarea name="home_carousel_slide2_body" cols="50" rows="5"><?php echo $home_carousel_slide2_body; ?></textarea>
        </p>
        <p><?php _e("Slide 2 - Footer:", 'menu-test' ); ?> <br />
          <input type="text" name="home_carousel_slide2_footer" value="<?php echo $home_carousel_slide2_footer; ?>" size="50">
        </p>
        <h2>Slide 3</h2>
        <p><?php _e("Slide 3 - Body:", 'menu-test' ); ?> <br />
          <textarea name="home_carousel_slide3_body" cols="50" rows="5"><?php echo $home_carousel_slide3_body; ?></textarea>
        </p>
        <p><?php _e("Slide 3 - Footer:", 'menu-test' ); ?> <br />
          <input type="text" name="home_carousel_slide3_footer" value="<?php echo $home_carousel_slide3_footer; ?>" size="50">
        </p>
        <h2>Slide 4</h2>
        <p><?php _e("Slide 4 - Body:", 'menu-test' ); ?> <br />
          <textarea name="home_carousel_slide4_body" cols="50" rows="5"><?php echo $home_carousel_slide4_body; ?></textarea>
        </p>
        <p><?php _e("Slide 4 - Footer:", 'menu-test' ); ?> <br />
          <input type="text" name="home_carousel_slide4_footer" value="<?php echo $home_carousel_slide4_footer; ?>" size="50">
        </p>


        <h2>Contact Us</h2>
        <p><?php _e("Contact - Header:", 'menu-test' ); ?> <br />
          <input type="text" name="contact_header" value="<?php echo $contact_header; ?>" size="50">
        </p>
        <p><?php _e("Contact - Body:", 'menu-test' ); ?> <br />
          <textarea name="contact_body" cols="50" rows="5"><?php echo $contact_body; ?></textarea>
        </p>
        <p><?php _e("Contact Button Text:", 'menu-test' ); ?> <br />
          <input type="text" name="contact_button_text" value="<?php echo $contact_button_text; ?>" size="50">
        </p>
        <p><?php _e("Contact Button Link:", 'menu-test' ); ?> <br />
          <input type="text" name="contact_button_url" value="<?php echo $contact_button_url; ?>" size="50">
        </p>

        <hr />
        <hr />

      </div>
    </div>
    <hr />


    <p class="submit">
      <input type="submit" name="Submit" class="button-primary" value="<?php esc_attr_e('Save Changes') ?>" />
    </p>

  </form>
</div>
