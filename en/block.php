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
 * Strings for component 'block', language 'en', branch 'MOODLE_24_STABLE'
 *
 * @package   block
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addtodock'] = 'Move this to the dock';
$string['anypagematchingtheabove'] = 'Any page matching the above';
$string['appearsinsubcontexts'] = 'Appears in sub-contexts';
$string['blocksettings'] = 'Block settings';
$string['bracketfirst'] = '{$a} (first)';
$string['bracketlast'] = '{$a} (last)';
$string['contexts'] = 'Page contexts';
$string['contexts_help'] = 'Contexts are more specific types of pages where this block can be displayed within the original block location. You will have different options here depending on the original block location and your current location. For example, you can restrict a block to only appearing on forum pages in a course by adding the block to the course (making it appear on all sub-pages), then going into a forum and editing the block settings again to restrict display to just forum pages.';
$string['createdat'] = 'Original block location';
$string['createdat_help'] = 'The original location where the block was created. Block settings may cause it to appear in other locations (contexts) within the original location. For example, a block created on a course page could be displayed in activities within that course. A block created on the front page can be displayed throughout the site.';
$string['defaultregion'] = 'Default region';
$string['defaultregion_help'] = 'Themes may define one or more named block regions where blocks are displayed. This setting defines which of these you want this block to appear in by default. The region may be overridden on specific pages if required.';
$string['defaultweight'] = 'Default weight';
$string['defaultweight_help'] = 'The default weight allows you to choose roughly where you want the block to appear in the chosen region, either at the top or the bottom. The final location is calculated from all the blocks in that region (for example, only one block can actually be at the top). This value can be overridden on specific pages if required.';
$string['deleteblockcheck'] = 'Are you sure that you want to delete this block titled {$a}?';
$string['deletecheck'] = 'Delete {$a} block?';
$string['moveblockhere'] = 'Move block here';
$string['movingthisblockcancel'] = 'Moving this block ({$a})';
$string['onthispage'] = 'On this page';
$string['pagetypes'] = 'Page types';
$string['pagetypewarning'] = 'The previously specified page type is no longer selectable. Please choose the most appropriate page type below.';
$string['region'] = 'Region';
$string['restrictpagetypes'] = 'Display on page types';
$string['showoncontextandsubs'] = 'Display on \'{$a}\' and any pages within it';
$string['showoncontextonly'] = 'Display on \'{$a}\' only';
$string['showonentiresite'] = 'Display throughout the entire site';
$string['showonfrontpageandsubs'] = 'Display on the front page and any pages added to the front page';
$string['showonfrontpageonly'] = 'Display on the front page only';
$string['subpages'] = 'Select pages';
$string['thisspecificpage'] = 'This specific page';
$string['undockall'] = 'Undock all';
$string['undockitem'] = 'Undock this item';
$string['visible'] = 'Visible';
$string['weight'] = 'Weight';
$string['wherethisblockappears'] = 'Where this block appears';
