<?php
/**
 * File: PageSpeed_Widget_View.php
 *
 * @package W3TC
 */

namespace W3TC;

if ( ! defined( 'W3TC' ) ) {
	die();
}
?>
<div class="w3tcps_loading w3tc_none"></div>
<div class="w3tcps_error w3tc_none">
	<p><?php esc_html_e( 'Unable to fetch Page Speed results.', 'w3-total-cache' ); ?></p>
	<p>
		<input class="button w3tc-widget-ps-refresh" type="button" value="<?php esc_attr_e( 'Refresh Analysis', 'w3-total-cache' ); ?>" />
	</p>
</div>
<div class="w3tcps_content w3tc_none"></div>
<div class="w3tcps_buttons">
	<input class="button w3tcps_refresh" type="button" value="<?php esc_html_e( 'Refresh analysis', 'w3-total-cache' ); ?>" />
	<a href="#" class="button"><?php esc_html_e( 'View all results', 'w3-total-cache' ); ?></a>
</div>
