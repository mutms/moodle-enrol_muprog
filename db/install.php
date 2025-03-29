<?php
// This file is part of Programs for Moodle™.
// phpcs:disable moodle.Files.BoilerplateComment.CommentEndedTooSoon

/**
 * Programs installation script.
 *
 * @package     enrol_muprog
 * @copyright   2025 Petr Skoda
 * @license     https://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

/**
 * Enable muprog enrolments.
 */
function xmldb_enrol_muprog_install() {
    global $CFG;

    $enabled = explode(',', $CFG->enrol_plugins_enabled);
    $enabled[] = 'muprog';
    set_config('enrol_plugins_enabled', implode(',', $enabled));
    core_plugin_manager::reset_caches();
}
