<?php
/**
 * WP Audit Syslog.
 *
 * @copyright Copyright (C) 2023 Crimble Crumble - jimmy@crimblecrumble.com.au
 * @license   http://www.gnu.org/licenses/gpl-3.0.html GNU General Public License, version 3 or higher
 *
 * @wordpress-plugin
 * Plugin Name: WP Audit Syslog
 * Version:     0.0.0.9
 * Plugin URI:  https://swiftshield.com.au/wp-audit-syslog
 * Description: Adds syslog logging to free version of WP Activity Log
 * Author:      Crimble Crumble
 * Author URI:  https://crimblecrumble.com.au/
 * License:     GPL v3
 * Requires at least: 5.0
 * Requires PHP: 8.0
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU General Public License as published by
 * the Free Software Foundation, either version 3 of the License, or
 * (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
 * GNU General Public License for more details.
 *
 * You should have received a copy of the GNU General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */
if (! defined('ABSPATH')) {
    exit;
}

add_filter('wsal_event_id_before_log', function ($event_id, $event_data) {
    syslog(LOG_INFO, json_encode($event_data));
    return $event_id;
}, 100, 2);
