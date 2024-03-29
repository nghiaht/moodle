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
 * Strings for component 'message', language 'en', branch 'MOODLE_24_STABLE'
 *
 * @package   message
 * @copyright 1999 onwards Martin Dougiamas  {@link http://moodle.com}
 * @license   http://www.gnu.org/copyleft/gpl.html GNU GPL v3 or later
 */

defined('MOODLE_INTERNAL') || die();

$string['addcontact'] = 'Add contact';
$string['addsomecontacts'] = 'To send a message to someone, or to add a shortcut for them on this page, use the <a href="{$a}">search tab</a> above.';
$string['addsomecontactsincoming'] = 'These messages are from people who are not in your contact list. To add them to your contacts, click the "Add contact" icon next to their name.';
$string['ago'] = '{$a} ago';
$string['ajax_gui'] = 'Ajax chat room';
$string['allmine'] = 'All messages to me or from me';
$string['allstudents'] = 'All messages between students in course';
$string['allusers'] = 'All messages from all users';
$string['backupmessageshelp'] = 'If enabled, then instant messages will be included in SITE automated backups';
$string['beepnewmessage'] = 'Beep on new message';
$string['blockcontact'] = 'Block contact';
$string['blockedmessages'] = '{$a} message(s) to/from blocked users';
$string['blockedusers'] = 'Blocked users ({$a})';
$string['blocknoncontacts'] = 'Prevent non-contacts from messaging me';
$string['contactlistempty'] = 'Your contact list is empty';
$string['contacts'] = 'Contacts';
$string['context'] = 'context';
$string['defaultmessageoutputs'] = 'Default message outputs';
$string['defaults'] = 'Defaults';
$string['deletemessagesdays'] = 'Number of days before old messages are automatically deleted';
$string['disableall'] = 'Temporarily disable notifications';
$string['disableall_help'] = 'Temporarily disable all notifications except those marked as "forced" by the site administrator';
$string['disabled'] = 'Messaging is disabled on this site';
$string['disallowed'] = 'Disallowed';
$string['discussion'] = 'Discussion';
$string['editmymessage'] = 'Messaging';
$string['emailmessages'] = 'Email messages when I am offline';
$string['emailtagline'] = 'This is a copy of a message sent to you at "{$a->sitename}". Go to {$a->url} to reply.';
$string['emptysearchstring'] = 'You must search for something';
$string['errorcallingprocessor'] = 'Error calling defined output';
$string['errortranslatingdefault'] = 'Error translating default setting provided by plugin, using system defaults instead.';
$string['forced'] = 'Forced';
$string['formorethan'] = 'For more than';
$string['gotomessages'] = 'Go to messages';
$string['guestnoeditmessage'] = 'Guest user can not edit messaging options';
$string['guestnoeditmessageother'] = 'Guest user can not edit other user messaging options';
$string['includeblockedusers'] = 'Include blocked users';
$string['incomingcontacts'] = 'Incoming contacts ({$a})';
$string['keywords'] = 'Keywords';
$string['keywordssearchresults'] = 'Messages found: {$a}';
$string['keywordssearchresultstoomany'] = 'More than {$a} messages found. Refine your search.';
$string['loggedin'] = 'Online';
$string['loggedindescription'] = 'When I\'m logged in';
$string['loggedoff'] = 'Not online';
$string['loggedoffdescription'] = 'When I\'m offline';
$string['mailsent'] = 'Your message was sent via email.';
$string['managecontacts'] = 'Manage my contacts';
$string['managemessageoutputs'] = 'Manage message outputs';
$string['maxmessages'] = 'Maximum number of messages to show in the discussion history';
$string['message'] = 'Message';
$string['messagehistory'] = 'Message history';
$string['messagehistoryfull'] = 'All messages';
$string['messagenavigation'] = 'Message navigation:';
$string['messageoutputs'] = 'Message outputs';
$string['messages'] = 'Messages';
$string['messaging'] = 'Messaging';
$string['messagingblockednoncontact'] = '{$a} will not be able to reply as you have blocked non-contacts';
$string['messagingdisabled'] = 'Messaging is disabled on this site, emails will be sent instead';
$string['mostrecent'] = 'Recent messages';
$string['mostrecentconversations'] = 'Recent conversations';
$string['mostrecentnotifications'] = 'Recent notifications';
$string['mycontacts'] = 'My contacts';
$string['newonlymsg'] = 'Show only new';
$string['newsearch'] = 'New search';
$string['noframesjs'] = 'Use more accessible interface';
$string['nomessages'] = 'No messages waiting';
$string['nomessagesfound'] = 'No messages were found';
$string['noreply'] = 'Do not reply to this message';
$string['nosearchresults'] = 'There were no results from your search';
$string['offline'] = 'Offline';
$string['offlinecontacts'] = 'Offline contacts ({$a})';
$string['online'] = 'Online';
$string['onlinecontacts'] = 'Online contacts ({$a})';
$string['onlyfromme'] = 'Only messages from me';
$string['onlymycourses'] = 'Only in my courses';
$string['onlytome'] = 'Only messages to me';
$string['outputdisabled'] = 'Output disabled';
$string['outputdoesnotexist'] = 'Message output does not exists';
$string['outputenabled'] = 'Output enabled';
$string['outputnotavailable'] = 'Not available';
$string['outputnotconfigured'] = 'Not configured';
$string['page-message-x'] = 'Any message pages';
$string['pagerefreshes'] = 'This page refreshes automatically every {$a} seconds';
$string['permitted'] = 'Permitted';
$string['private_config'] = 'Popup message window';
$string['processordeleteconfirm'] = 'You are about to completely delete message output \'{$a}\'.  This will completely delete everything in the database associated with this output. Are you SURE you want to continue?';
$string['processordeletefiles'] = 'All data associated with the output \'{$a->processor}\' has been deleted from the database.  To complete the deletion (and prevent the output re-installing itself), you should now delete this directory from your server: {$a->directory}';
$string['processortag'] = 'Destination';
$string['providers_config'] = 'Configure notification methods for incoming messages';
$string['providerstag'] = 'Source';
$string['readmessages'] = '{$a} read messages';
$string['recent'] = 'Recent';
$string['removecontact'] = 'Remove contact';
$string['savemysettings'] = 'Save my settings';
$string['search'] = 'Search';
$string['searchcombined'] = 'Search people and messages';
$string['searchforperson'] = 'Search for a person';
$string['searchmessages'] = 'Search messages';
$string['sendingvia'] = 'Sending "{$a->provider}" via "{$a->processor}"';
$string['sendingviawhen'] = 'Sending "{$a->provider}" via "{$a->processor}" when {$a->state}';
$string['sendmessage'] = 'Send message';
$string['sendmessageto'] = 'Send message to {$a}';
$string['sendmessagetopopup'] = 'Send message to {$a} - new window';
$string['settings'] = 'Settings';
$string['settingssaved'] = 'Your settings have been saved';
$string['showmessagewindow'] = 'Popup window on new message';
$string['strftimedaydatetime'] = '%A, %d %B %Y, %I:%M %p';
$string['thisconversation'] = 'this conversation';
$string['timenosee'] = 'Minutes since I was last seen online';
$string['timesent'] = 'Time sent';
$string['touserdoesntexist'] = 'You can not send a message to a user id ({$a}) that doesn\'t exist';
$string['unblockcontact'] = 'Unblock contact';
$string['unreadmessages'] = 'Unread messages ({$a})';
$string['unreadnewmessage'] = 'New message from {$a}';
$string['unreadnewmessages'] = 'New messages ({$a})';
$string['unreadnewnotification'] = 'New notification';
$string['unreadnewnotifications'] = 'New notifications ({$a})';
$string['userisblockingyou'] = 'This user has blocked you from sending messages to them';
$string['userisblockingyounoncontact'] = '{$a} only accepts messages from their contacts.';
$string['userssearchresults'] = 'Users found: {$a}';
