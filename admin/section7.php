<form name="form1" method="post" action="">
  <input type="hidden" name="section7" value="Y">


  <div>

    <div class="admin-left">
      <h3>Section 7</h3>
      <p><?php _e("Text Line 1:", 'menu-test' ); ?> <br />
        <input type="text" name="section7_text1" value="<?php echo $section7_text1; ?>" size="50">
      </p>
    <p><?php _e("Text Line 2:", 'menu-test' ); ?> <br />
        <textarea name="section7_text2" cols="50" rows="5"><?php echo $section7_text2; ?></textarea>
      </p>

      <p><?php _e("Fact1 text1:", 'menu-test' ); ?> <br />
        <input type="text" name="section7_fact1_text1" value="<?php echo $section7_fact1_text1; ?>" size="50">
      </p>
      <p><?php _e("Fact1 text2:", 'menu-test' ); ?> <br />
        <textarea name="section7_fact1_text2" cols="50" rows="5"><?php echo $section7_fact1_text2; ?></textarea>
      </p>
      <p><?php _e("Fact2 text1:", 'menu-test' ); ?> <br />
        <input type="text" name="section7_fact2_text1" value="<?php echo $section7_fact2_text1; ?>" size="50">
      </p>
      <p><?php _e("Fact2 text2:", 'menu-test' ); ?> <br />
        <textarea name="section7_fact2_text2" cols="50" rows="5"><?php echo $section7_fact2_text2; ?></textarea>
      </p>

      <p><?php _e("Fact 3 text1:", 'menu-test' ); ?> <br />
        <input type="text" name="section7_fact3_text1" value="<?php echo $section7_fact3_text1; ?>" size="50">
      </p>
      <p><?php _e("Fact3 text2:", 'menu-test' ); ?> <br />
        <textarea name="section7_fact3_text2" cols="50" rows="5"><?php echo $section7_fact3_text2; ?></textarea>
      </p>
      <p><?php _e("Fact 4 text1:", 'menu-test' ); ?> <br />
        <input type="text" name="section7_fact4_text1" value="<?php echo $section7_fact4_text1; ?>" size="50">
      </p>
      <p><?php _e("Fact4 text2:", 'menu-test' ); ?> <br />
        <textarea name="section7_fact4_text2" cols="50" rows="5"><?php echo $section7_fact4_text2; ?></textarea>
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