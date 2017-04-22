<?php

/**
 * Provide an admin area view for the plugin
 *
 * This file is used to markup the admin-facing aspects of the plugin.
 *
 * @link       http://jase.io/
 * @since      1.0.0
 *
 * @package    Social_Icons_Obvs
 * @subpackage Social_Icons_Obvs/admin/partials
 */

?>

<div class="sio--wrap">
	<h2><?php echo esc_html( get_admin_page_title() ); ?></h2>
	<form method="post" action="options.php">

		<?php
		// Display section headings.
		$headings = array( 'Accounts', 'Customise', 'Display' );

		// Set counter.
		$i = 0;

		echo '<ul class="sio--tabs" role="tablist">';

		foreach ( $headings as $heading ) {

			// Start counter.
			$i++;
			?>

			<li<?php if ( 1 === $i ) { echo ' class="current"'; } ?> data-tab="tab-<?php echo $i; ?>"><a href="#<?php echo strtolower( $heading ) ?>"><?php echo $heading; ?></a></li>

			<?php
		}

		echo '</ul>';

		settings_fields( $this->plugin_name . '-options' );

		echo '<div id="tab-1" class="sio--tab-content tab-accounts current">';
		do_settings_sections( $this->plugin_name . '-accounts' );
		echo '</div>';

		echo '<div id="tab-2" class="sio--tab-content tab-customise">';
		do_settings_sections( $this->plugin_name . '-customise' );
		require_once 'social-icons-obvs-admin-section-customise-preview.php';
		echo '</div>';

		echo '<div id="tab-3" class="sio--tab-content tab-display">';
		do_settings_sections( $this->plugin_name . '-display' );
		echo '</div>';

		submit_button( 'Save Changes' );
		?>

	</form>
</div>
<div class="sio--loader"></div>
