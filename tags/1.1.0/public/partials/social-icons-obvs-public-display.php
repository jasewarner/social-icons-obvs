<?php
/**
 * The public-facing view of the plugin
 *
 * @link       http://jase.io/
 * @since      1.0.0
 *
 * @package    Social_Icons_Obvs
 * @subpackage Social_Icons_Obvs/public/partials
 */

$options = get_option( $this->plugin_name . '-options' );

// List of accounts.
$accounts = array(
	'behance',
	'bitbucket',
	'dribbble',
	'facebook',
	'github',
	'google',
	'instagram',
	'linkedin',
	'pinterest',
	'soundcloud',
	'tumblr',
	'twitter',
	'vimeo',
	'youtube',
	'yunojuno',
);

// Activated accounts.
$active_accounts = array();

// Check if account has been activated and push it into the new array.
foreach ( $accounts as $account ) {

	if ( array_key_exists( $account, $options ) ) {

		$url = $options[ $account . '_url' ];
		$pos = $options[ $account . '_pos' ];

		array_push( $active_accounts, array(
			'name' => $account,
			'url' => $url,
			'index' => $pos,
		) );
	}
}

// Function for sorting icons by index.
if ( ! function_exists( 'sort_by_index' ) ) {

	function sort_by_index( $a, $b ) {
		return $a['index'] - $b['index'];
	}
}

// Sort icons by index.
usort( $active_accounts, 'sort_by_index' );

// Custom options.
$alignment = $options['alignment'];
$background = $options['background'];
$custom_background = '';
$shape = $options['shape'];
$size = $options['size'];
$spacing = $options['spacing'];

if ( 'custom' == $background ) {
	$custom_background = $options['custom-background'];
}
?>

<ul class="sio--icons sio--icons-align-<?php echo esc_attr( $alignment ); ?> sio--icons-bg-<?php echo esc_attr( $background ); ?> sio--icons-shape-<?php echo esc_attr( $shape ); ?> sio--icons-size-<?php echo esc_attr( $size ); ?>">

<?php
foreach ( $active_accounts as $icon ) {

	?>

	<li class="sio--icon-spacing-<?php echo esc_attr( $spacing ); ?>">
		<a class="sio--icon sio--icon-<?php echo esc_attr( $icon['name'] ); ?>" href="<?php echo esc_url( $icon['url'] ); ?>"<?php if ( 'custom' == $background ) { ?> style="background-color: <?php echo esc_attr( $custom_background ); ?> "<?php } ?>></a>
	</li>

	<?php
}

echo '</ul>';
