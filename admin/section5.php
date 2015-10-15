<form name="form1" method="post" action="">
  <input type="hidden" name="section5" value="Y">


  <div>
  <div class="admin-left">
    
<h4>Banner</h4>
        <p class="image-uploader">Enter an URL or upload an image for the banner.<br />
        <input class="upload_image" type="text" size="36" name="contact_banner" value="<?php echo $contact_banner; ?>" />
        <input class="upload_image_button" type="button" value="Upload Image" />
        </p>
        <p><?php _e("Text Line 1: (Optional)", 'menu-test' ); ?> <br />
        <input type="text" name="contact_banner_text" value="<?php echo $contact_banner_text; ?>" size="50">
        </p>

<h3>Statement Box 1</h3>
<p><?php _e("Header:", 'menu-test' ); ?> <br />
<input type="text" name="contact_statementbox1_header" value="<?php echo $contact_statementbox1_header; ?>" size="50">
</p>
<p><?php _e("Text:", 'menu-test' ); ?> <br />
<textarea name="contact_statementbox1_text" cols="50" rows="5"><?php echo $contact_statementbox1_text; ?></textarea>
</p>

<h3>Locations</h3>

<h4>Location 1</h4>
          <p class="image-uploader">Enter an URL or upload an image for the location.<br />
        <input class="upload_image" type="text" size="36" name="location1_image" value="<?php echo $location1_image; ?>" />
        <input class="upload_image_button" type="button" value="Upload Image" />
        </p>
        <p><?php _e("Title: ", 'menu-test' ); ?> <br />
        <input type="text" name="location1_title" value="<?php echo $location1_title; ?>" size="50">
        </p>
        <p><?php _e("Address:", 'menu-test' ); ?> <br />
        <textarea name="location1_address" cols="50" rows="5"><?php echo $location1_address; ?></textarea>
        </p>

<h4>Location 2</h4>
          <p class="image-uploader">Enter an URL or upload an image for the location.<br />
        <input class="upload_image" type="text" size="36" name="location2_image" value="<?php echo $location2_image; ?>" />
        <input class="upload_image_button" type="button" value="Upload Image" />
        </p>
        <p><?php _e("Title: ", 'menu-test' ); ?> <br />
        <input type="text" name="location2_title" value="<?php echo $location2_title; ?>" size="50">
        </p>
        <p><?php _e("Address:", 'menu-test' ); ?> <br />
        <textarea name="location2_address" cols="50" rows="5"><?php echo $location2_address; ?></textarea>
        </p>

<h4>Location 3</h4>
          <p class="image-uploader">Enter an URL or upload an image for the location.<br />
        <input class="upload_image" type="text" size="36" name="location3_image" value="<?php echo $location3_image; ?>" />
        <input class="upload_image_button" type="button" value="Upload Image" />
        </p>
        <p><?php _e("Title: ", 'menu-test' ); ?> <br />
        <input type="text" name="location3_title" value="<?php echo $location3_title; ?>" size="50">
        </p>
        <p><?php _e("Address:", 'menu-test' ); ?> <br />
        <textarea name="location3_address" cols="50" rows="5"><?php echo $location3_address; ?></textarea>
        </p> 
               
<h4>Location 4</h4>
          <p class="image-uploader">Enter an URL or upload an image for the location.<br />
        <input class="upload_image" type="text" size="36" name="location4_image" value="<?php echo $location4_image; ?>" />
        <input class="upload_image_button" type="button" value="Upload Image" />
        </p>
        <p><?php _e("Title: ", 'menu-test' ); ?> <br />
        <input type="text" name="location4_title" value="<?php echo $location4_title; ?>" size="50">
        </p>
        <p><?php _e("Address:", 'menu-test' ); ?> <br />
        <textarea name="location4_address" cols="50" rows="5"><?php echo $location4_address; ?></textarea>
        </p>













  </div>
  </div>


  <hr />

  <p class="submit">
    <input type="submit" name="Submit" class="button-primary" value="<?php esc_attr_e('Save Changes') ?>" />
  </p>

</form>
</div>