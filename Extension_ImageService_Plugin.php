<?php
/**
 * File: Extension_ImageService_Plugin.php
 *
 * @since X.X.X
 *
 * @package W3TC
 *
 * phpcs:disable WordPress.WP.CronInterval
 */

namespace W3TC;

if ( ! defined( 'W3TC' ) ) {
	die();
}

/**
 * Extension_ImageService_Plugin
 *
 * @since X.X.X
 */
class Extension_ImageService_Plugin {
	/**
	 * Add hooks.
	 *
	 * @since X.X.X
	 * @static
	 */
	public static function wp_loaded() {
		add_action(
			'w3tc_extension_load_admin',
			array(
				'\W3TC\Extension_ImageService_Plugin_Admin',
				'w3tc_extension_load_admin',
			)
		);

		// Cron event handling.
		require_once __DIR__ . '/Extension_ImageService_Cron.php';

		add_action(
			'w3tc_imageservice_cron',
			array(
				'\W3TC\Extension_ImageService_Cron',
				'run',
			)
		);

		add_filter(
			'cron_schedules',
			array(
				'\W3TC\Extension_ImageService_Cron',
				'add_schedule',
			)
		);

		Extension_ImageService_Cron::add_cron();
	}
}

w3tc_add_action(
	'wp_loaded',
	array(
		'\W3TC\Extension_ImageService_Plugin',
		'wp_loaded',
	)
);