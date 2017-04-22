<?php

/**
 * Preview custom changes.
 *
 * @link       http://jase.io/
 * @since      1.0.0
 *
 * @package    Social_Icons_Obvs
 * @subpackage Social_Icons_Obvs/admin/partials
 */

?>

<div class="sio--preview-container">
	<h3 class="sio--heading"><?php _e( 'Preview', $this->plugin_name ); ?></h3>
	<p><?php _e( 'This is how the icons will look across your website.', $this->plugin_name ); ?>
		<br><?php _e( 'Don’t forget to save your changes.', $this->plugin_name ); ?></p>
	<div class="sio--preview">
		<ul class="sio--preview-icons"></ul>
	</div>
</div>
