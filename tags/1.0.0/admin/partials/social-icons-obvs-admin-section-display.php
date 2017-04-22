<?php

/**
 * Display section text.
 *
 * @link       http://jase.io/
 * @since      1.0.0
 *
 * @package    Social_Icons_Obvs
 * @subpackage Social_Icons_Obvs/admin/partials
 */

?>

<p><?php _e( 'In this section you may choose the order in which your icons appear.', $this->plugin_name ); ?>
	<br><?php _e( 'When you are done, save your changes, grab the short code and hey presto… you are ready to display them!', $this->plugin_name ) ?></p>
<h3 class="sio--heading"><?php _e( 'Displaying the Icons', $this->plugin_name ); ?></h3>
<p><?php _e( 'Copy the short code below and paste it in the area(s) where you would like to display the icons on your website.', $this->plugin_name )  ?>
	<br><?php _e( 'For instance, you may want to paste it into a widget that is part of your sidebar or footer.', $this->plugin_name ) ?></p>
<p><?php _e( 'The shortcode is: ', $this->plugin_name ) ?><code><?php _e( '[social-icons-obvs]', $this->plugin_name ); ?></code></p>
<div class="sio--sort">
	<h3 class="sio--heading"><?php _e( 'Icon Order', $this->plugin_name ); ?></h3>
	<ul class="sio--sort-icons"></ul>
</div>
