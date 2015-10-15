<form name="form1" method="post" action="">
<input type="hidden" name="section3" value="Y">


<div>
<div class="admin-left">

<h3>Who We Are</h3>

<h4>Banner</h4>
        <p class="image-uploader">Enter an URL or upload an image for the banner.<br />
        <input class="upload_image" type="text" size="36" name="whoweare_banner" value="<?php echo $whoweare_banner; ?>" />
        <input class="upload_image_button" type="button" value="Upload Image" />
        </p>
        <p><?php _e("Text Line 1: (Optional)", 'menu-test' ); ?> <br />
        <input type="text" name="whoweare_banner_text" value="<?php echo $whoweare_banner_text; ?>" size="50">
        </p>

<h3>Statement Box 1</h3>


<p><?php _e("Header:", 'menu-test' ); ?> <br />
<input type="text" name="wwb_statementbox1_header" value="<?php echo $wwb_statementbox1_header; ?>" size="50">
</p>
<p><?php _e("Text:", 'menu-test' ); ?> <br />
<textarea name="wwb_statementbox1_text" cols="50" rows="5"><?php echo $wwb_statementbox1_text; ?></textarea>
</p>


<h4>What We Buy - Gallery</h4>

        <p><?php _e("Header Text:", 'menu-test' ); ?> <br />
        <input type="text" name="wwb_header" value="<?php echo $wwb_header; ?>" size="50">
        </p>
        <p><?php _e("Sub-Header Text:", 'menu-test' ); ?> <br />
        <input type="text" name="wwb_subheader" value="<?php echo $wwb_subheader; ?>" size="50">
        </p>

<h4>Image 1</h4>
        <p class="image-uploader">Enter an URL or upload an image.<br />
        <input class="upload_image" type="text" size="36" name="wwb1_image" value="<?php echo $wwb1_image; ?>" />
        <input class="upload_image_button" type="button" value="Upload Image" />
        </p>
        <p><?php _e("Image Text:", 'menu-test' ); ?> <br />
        <input type="text" name="wwb1_text" value="<?php echo $wwb1_text; ?>" size="50">
        </p>
<h4>Image 2</h4>
        <p class="image-uploader">Enter an URL or upload an image.<br />
        <input class="upload_image" type="text" size="36" name="wwb2_image" value="<?php echo $wwb2_image; ?>" />
        <input class="upload_image_button" type="button" value="Upload Image" />
        </p>
        <p><?php _e("Image Text:", 'menu-test' ); ?> <br />
        <input type="text" name="wwb2_text" value="<?php echo $wwb2_text; ?>" size="50">
        </p>
<h4>Image 3</h4>
        <p class="image-uploader">Enter an URL or upload an image.<br />
        <input class="upload_image" type="text" size="36" name="wwb3_image" value="<?php echo $wwb3_image; ?>" />
        <input class="upload_image_button" type="button" value="Upload Image" />
        </p>
        <p><?php _e("Image Text:", 'menu-test' ); ?> <br />
        <input type="text" name="wwb3_text" value="<?php echo $wwb3_text; ?>" size="50">
        </p>

<h3>Statement Box 2</h3>


<p><?php _e("Header:", 'menu-test' ); ?> <br />
<input type="text" name="wwb_statementbox2_header" value="<?php echo $wwb_statementbox2_header; ?>" size="50">
</p>
<p><?php _e("Text:", 'menu-test' ); ?> <br />
<textarea name="wwb_statementbox2_text" cols="50" rows="5"><?php echo $wwb_statementbox2_text; ?></textarea>
</p>

<h3>Testimonial 1 (Right Aligned Image)</h3>


        <p class="image-uploader">Enter an URL or upload an image.<br />
        <input class="upload_image" type="text" size="36" name="wwb_testimonial1_image" value="<?php echo $wwb_testimonial1_image; ?>" />
        <input class="upload_image_button" type="button" value="Upload Image" />
        </p>
        <p><?php _e("Header:", 'menu-test' ); ?> <br />
<textarea name="wwb_testimonial1_header" cols="50" rows="5"><?php echo $wwb_testimonial1_header; ?></textarea>
</p>
<p><?php _e("Text:", 'menu-test' ); ?> <br />
<textarea name="wwb_testimonial1_text" cols="50" rows="5"><?php echo $wwb_testimonial1_text; ?></textarea>
</p>
<p><?php _e("Attribution (Names):", 'menu-test' ); ?> <br />
<input type="text" name="wwb_testimonial1_attribution" value="<?php echo $wwb_testimonial1_attribution; ?>" size="50">
</p>
        <p><?php _e("Body:", 'menu-test' ); ?> <br />
<textarea name="wwb_testimonial1_body" cols="50" rows="5"><?php echo $wwb_testimonial1_body; ?></textarea>
</p>


</div>
</div>
<hr />

			<p class="submit">
				<input type="submit" name="Submit" class="button-primary" value="<?php esc_attr_e('Save Changes') ?>" />
			</p>
</form>
</div>

