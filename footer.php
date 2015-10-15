<?php
/**
 * The template for displaying the footer
 *
 * Contains the closing of the "site-content" div and all content after.
 *
 * @package WordPress
 * @subpackage Twenty_Fifteen
 * @since Twenty Fifteen 1.0
 */


 $array = array(
 	"sc_text",
   "sc_phone",
   "footer_address_1",
   "footer_address_2",
   "footer_email",
 );

 foreach ($array as $i => $value) {

   $$value = stripslashes_deep(get_option( $value ));
 }
?>

      <footer class="l-footer">
        <div class="l-constrained">
          <nav class="quick-links">
            <h3 class="element-invisible">Site links</h3>
            <ul>
              <li><a href="/">Home</a></li>
              <li><a href="/practice-areas.html">Practice Areas</a></li>
              <li><a href="/attorney.html">Attorney</a></li>
              <li><a href="/contact-us.html">Contact Us</a></li>
            </ul>
          </nav>
          <p class="legal">The information contained on this website is intended to introduce prospective clients to CAEJ Law, P.C., and is not to be considered a legal opinion or an offer to represent you. This web site is not intended to establish an attorney-client relationship. Emails sent to CAEJ Law, P.C. using any of their email addresses would not be confidential and would not create an attorney-client relationship.</p>
          <div class="contact-info">
            <h3 class="element-invisible">Contact Info</h3>
            <div itemtype="http://schema.org/Organization" class="vcard">
              <h4 itemprop="name" class="fn org element-invisible">Rulsky Law Group</h4>
              <div itemprop="address" itemtype="http://schema.org/PostalAddress" class="adr"><span class="type element-invisible">Work</span>
                <div itemprop="streetAddress" class="street-address">
                  <div class="thoroughfare"><?php echo $footer_address_1;?></div>
                </div><span itemprop="addressLocality" class="locality"><?php echo $footer_address_2;?></span>
              </div>
              <div class="tel"><span class="type element-invisible">Work</span><span itemprop="telephone"><span class="value prefix element-invisible">+</span>(<span class="value">888</span>) <span class="value">888</span> <span class="value">8888</span></span></div><a itemprop="email" href="mailto:<?php echo $footer_email;?>?subject=Website%20Inquiry" class="email"><?php echo $footer_email;?></a>
            </div>
          </div>
        </div>
      </footer>
    </div>
    <script src="https://ajax.googleapis.com/ajax/libs/jquery/1.11.3/jquery.min.js"></script>
    <script>window.jQuery || document.write('<script src="https://cdnjs.cloudflare.com/ajax/libs/jquery/1.11.3/jquery.min.js"><\/script>');</script>
    <script src="<?php echo get_stylesheet_directory_uri(); ?>/assets/js/main.js"></script>

<?php wp_footer(); ?>

</body>
</html>
