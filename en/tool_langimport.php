<?php

// This file is part of Moodle - http://moodle.org/
//
// Moodle is free software: you can redistribute it and/or modify
// it under the terms of the GNU General Public License as published by
// the Free Software Foundation, either version 3 of the License, or
// (at your option) any later version.
//
// Moodle is distributed in the hope that it will be useful,
// but WITHOUT ANY WARRANTY; without even the implied warranty of
// MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE.  See the
// GNU General Public License for more details.
//
// You should have received a copy of the GNU General Public License
// along with Moodle.  If not, see <http://www.gnu.org/licenses/>.

/**
 * Strings for component 'tool_langimport', language 'en', branch 'MOODLE_24_STABLE'
 *
 * @package   tool_langimport
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['install'] = 'Install selected language pack';
$string['installedlangs'] = 'Installed language packs';
$string['langimport'] = 'Language import utility';
$string['langimportdisabled'] = 'Language import feature has been disabled. You have to update your language packs manually at the file-system level. Do not forget to purge string caches after you do so.';
$string['langpackinstalled'] = 'Language pack {$a} was successfully installed';
$string['langpackremoved'] = 'Language pack was uninstalled';
$string['langpackupdateskipped'] = 'Update of {$a} language pack skipped';
$string['langpackuptodate'] = 'Language pack {$a} is up-to-date';
$string['langupdatecomplete'] = 'Language pack update completed';
$string['missingcfglangotherroot'] = 'Missing configuration value $CFG->langotherroot';
$string['missinglangparent'] = 'Missing parent language <em>{$a->parent}</em> of <em>{$a->lang}</em>.';
$string['nolangupdateneeded'] = 'All your language packs are up to date, no update is needed';
$string['pluginname'] = 'Language packs';
$string['purgestringcaches'] = 'Purge string caches';
$string['remotelangnotavailable'] = 'Because Moodle can not connect to download.moodle.org, we are unable to do language pack installation automatically. Please download the appropriate zip file(s) from http://download.moodle.org, copy them to your {$a} directory and unzip them manually.';
$string['uninstall'] = 'Uninstall selected language pack';
$string['uninstallconfirm'] = 'You are about to completely uninstall language pack {$a}, are you sure?';
$string['updatelangs'] = 'Update all installed language packs';
