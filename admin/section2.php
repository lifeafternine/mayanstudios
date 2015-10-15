<form name="form1" method="post" action="">
  <input type="hidden" name="section2" value="Y">


  <div>
    <div class="admin-left">
      <h3>Practice Areas</h3>

      <h4>Banner<h4>

        <p class="image-uploader">Enter an URL or upload an image for the banner.<br />
          <input class="upload_image" type="text" size="36" name="pa_banner_img" value="<?php echo $pa_banner_img; ?>" />
          <input class="upload_image_button" type="button" value="Upload Image" />
        </p>
        <p><?php _e("Banner Title:", 'menu-test' ); ?> <br />
          <input type="text" name="pa_banner_title" value="<?php echo $pa_banner_title; ?>" size="50">
        </p>
        <p><?php _e("Banner Text:", 'menu-test' ); ?> <br />
          <input type="text" name="pa_banner_text" value="<?php echo $pa_banner_text; ?>" size="50">
        </p>

        <h4>Body</h4>
        <p><?php _e("Header:", 'menu-test' ); ?> <br />
          <input type="text" name="pa_primary_header" value="<?php echo $pa_primary_header; ?>" size="50">
        </p>
        <p><?php _e("Body:", 'menu-test' ); ?> <br />
          <textarea name="pa_primary_body" cols="50" rows="5"><?php echo $pa_primary_body; ?></textarea>
        </p>

        <h3>Attorney</h3>

        <h4>Banner<h4>

          <p class="image-uploader">Enter an URL or upload an image for the banner.<br />
            <input class="upload_image" type="text" size="36" name="at_banner_img" value="<?php echo $at_banner_img; ?>" />
            <input class="upload_image_button" type="button" value="Upload Image" />
          </p>
          <p><?php _e("Banner Title:", 'menu-test' ); ?> <br />
            <input type="text" name="at_banner_title" value="<?php echo $at_banner_title; ?>" size="50">
          </p>
          <p><?php _e("Banner Text:", 'menu-test' ); ?> <br />
            <input type="text" name="at_banner_text" value="<?php echo $at_banner_text; ?>" size="50">
          </p>

          <h4>Body</h4>
          <p><?php _e("Header:", 'menu-test' ); ?> <br />
            <input type="text" name="at_primary_header" value="<?php echo $at_primary_header; ?>" size="50">
          </p>
          <p><?php _e("Body:", 'menu-test' ); ?> <br />
            <textarea name="at_primary_body" cols="50" rows="5"><?php echo $at_primary_body; ?></textarea>
          </p>

          <h3>Contact</h3>

          <h4>Banner<h4>

            <p class="image-uploader">Enter an URL or upload an image for the banner.<br />
              <input class="upload_image" type="text" size="36" name="contact_banner_img" value="<?php echo $contact_banner_img; ?>" />
              <input class="upload_image_button" type="button" value="Upload Image" />
            </p>
            <p><?php _e("Banner Title:", 'menu-test' ); ?> <br />
              <input type="text" name="contact_banner_title" value="<?php echo $contact_banner_title; ?>" size="50">
            </p>
            <p><?php _e("Banner Text:", 'menu-test' ); ?> <br />
              <input type="text" name="contact_banner_text" value="<?php echo $contact_banner_text; ?>" size="50">
            </p>

            <h4>Body</h4>
            <p><?php _e("Header:", 'menu-test' ); ?> <br />
              <input type="text" name="contact_primary_header" value="<?php echo $contact_primary_header; ?>" size="50">
            </p>
            <p><?php _e("Body:", 'menu-test' ); ?> <br />
              <textarea name="contact_primary_body" cols="50" rows="5"><?php echo $contact_primary_body; ?></textarea>
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
