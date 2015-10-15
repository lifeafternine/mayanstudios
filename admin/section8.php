<form name="form1" method="post" action="">
  <input type="hidden" name="section8" value="Y">


  <div>
    <div class="admin-left">
      <h3>Form</h3>

      <p><?php _e("Contact 7 Shortcode:", 'menu-test' ); ?> <br />
        <textarea name="section8_form" cols="50" rows="5"><?php echo $section8_form; ?></textarea>
      </p>

    </div>
  </div>


  <div>

    <div class="admin-left">
      <h3>Social Media</h3>

      <p><?php _e("Twitter:", 'menu-test' ); ?> <br />
        <input type="text" name="twitter_url" value="<?php echo $twitter_url; ?>" size="50">
      </p>
      <p><?php _e("Facebook:", 'menu-test' ); ?> <br />
        <input type="text" name="facebook_url" value="<?php echo $facebook_url; ?>" size="50">
      </p>      
      <p><?php _e("LinkedIn:", 'menu-test' ); ?> <br />
        <input type="text" name="linkedin_url" value="<?php echo $linkedin_url; ?>" size="50">
      </p>
      <p><?php _e("gPlus:", 'menu-test' ); ?> <br />
        <input type="text" name="gplus_url" value="<?php echo $gplus_url; ?>" size="50">
      </p>


      <p><?php _e("Phone Number:", 'menu-test' ); ?> <br />
        <input type="text" name="phonelink" value="<?php echo $phonelink; ?>" size="50">
      </p>
            <p><?php _e("EMAIL:", 'menu-test' ); ?> <br />
        <input type="text" name="emaillink" value="<?php echo $emaillink; ?>" size="50">
      </p>
            <p><?php _e("ADDRESS:", 'menu-test' ); ?> <br />
        <textarea name="addresslink" cols="50" rows="5"><?php echo $addresslink; ?></textarea>
      </p> 

    </div>
  </div>

  <div class="admin-right">
  </div>

  <hr />

  <p class="submit">
    <input type="submit" name="Submit" class="button-primary" value="<?php esc_attr_e('Save Changes') ?>" />
  </p>

</form>
</div>