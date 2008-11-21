<?php

$lang_admin_settings = array(

'Settings updated'				=>	'Settings updated.',

// Setup section
'Setup personal'				=>	'Personalize your PunBB installation',
'Setup personal legend'			=>	'PunBB installation',
'Board description label'		=>	'Board description',
'Board title label'				=>	'Board title',
'Default style label'			=>	'Default style',
'Setup local'					=>	'Configure PunBB for your location',
'Setup local legend'			=>	'Local settings',
'Default timezone label'		=>	'Default timezone',
'Adjust for DST'				=>	'Adjust for DST',
'DST label'						=>	'Daylight savings is in effect (advance times by 1 hour).',
'Default language label'		=>	'Default language',
'Default language help'			=>	'(If you remove a language pack you must update this setting)',
'Time format label'				=>	'Time format',
'Date format label'				=>	'Date format',
'Current format'				=>	'[ Current format: %s ] %s',
'External format help'			=>	'See <a class="exthelp" href="http://www.php.net/manual/en/function.date.php">here</a> for formatting options.',
'Setup timeouts'				=>	'Default timeouts and redirect delay',
'Setup timeouts legend'			=>	'Timeout defaults',
'Visit timeout label'			=>	'Visit timeout',
'Visit timeout help'			=>	'Seconds idle before last visit data is updated',
'Online timeout label'			=>	'Online timeout',
'Online timeout help'			=>	'Seconds idle before being removed from the online users list',
'Redirect time label'			=>	'Redirect wait',
'Redirect time help'			=>	'If set to 0 seconds, no redirect page will be displayed (not recommended)',
'Setup pagination'				=>	'Default pagination for topics, posts and post review',
'Setup pagination legend'		=>	'Pagination defaults',
'Topics per page label'			=>	'Topics per page',
'Posts per page label'			=>	'Posts per page',
'Topic review label'			=>	'Topic review',
'Topic review help'				=>	'Ordered newest first. 0 to disable.',
'Setup reports'					=>	'Method for receiving reports of posts and topics',
'Setup reports legend'			=>	'Receive reports',
'Reporting method'				=>	'Reporting method',
'Report internal label'			=>	'By internal report system.',
'Report both label'				=>	'Both by internal report system and by e-mail to those on mailing list.',
'Report email label'			=>	'By e-mail to those on mailing list.',
'Setup URL'						=>	'URL Scheme (<abbr title ="Search Engine Friendly">SEF</abbr> URLs) for your board\'s pages',
'Setup URL legend'				=>	'Select a scheme',
'URL scheme info'				=>	'<strong>WARNING!</strong> If you select any scheme other than the default scheme you must copy/rename the file <em>.htaccess.dist</em> to <em>.htaccess</em> in the forum root directory. The server that hosts the forums must be configured with mod_rewrite support and must allow the use of <em>.htaccess</em> files. For servers other than Apache, please refer to your servers documentation.',
'URL scheme label'				=>	'URL scheme',
'URL scheme help'				=>	'Make sure you have read and understood the information above.',
'Setup links'					=>	'Add your own links to the main navigation menu',
'Setup links info'				=>	'By entering HTML hyperlinks into this textbox, any number of items can be added to the navigation menu at the top of all pages. The format for adding new links is X = &lt;a href="URL"&gt;LINK&lt;/a&gt; where X is the position at which the link should be inserted (e.g. 0 to insert at the beginning and 2 to insert after "User list"). Separate entries with a linebreak.',
'Setup links legend'			=>	'Menu items',
'Enter links label'				=>	'Enter your links',
'Error no board title'			=>	'You must enter a board title.',
'Error timeout value'			=>	'The value of "Timeout online" must be smaller than the value of "Timeout visit".',


// Features section
'Features general'				=>	'General PunBB features which are optional',
'Features general legend'		=>	'General features',
'Searching'						=>	'Searching',
'Search all label'				=>	'Allow users to search all forums instead of one forum at a time. Disable if server load is high due to excessive searching.',
'User ranks'					=>	'User ranks',
'User ranks label'				=>	'Enable user ranking based on number of posts.',
'Censor words'					=>	'Censoring',
'Censor words label'			=>	'Enable censoring of specific words.',
'Quick jump'					=>	'Quick jump menu',
'Quick jump label'				=>	'Enable the quick jump (jump to forum) drop list.',
'Show version'					=>	'Show version',
'Show version label'			=>	'Show PunBB version number in the footer.',
'Online list'					=>	'Online list',
'Users online label'			=>	'Display list of guests and registered users online.',
'Features posting'				=>	'Topic and post features and information',
'Features posting legend'		=>	'Posting features',
'Quick post'					=>	'Quick post',
'Quick post label'				=>	'Add a quick post form at the foot of topics.',
'Subscriptions'					=>	'Subscriptions',
'Subscriptions label'			=>	'Allow users to subscribe to topics (receive e-mail when someone replies).',
'Guest posting'					=>	'Guest posting',
'Guest posting label'			=>	'Guests must supply e-mail addresses when posting.',
'User has posted'				=>	'User has posted',
'User has posted label'			=>	'Display a dot in front of topics to indicate to a user that they have posted in that topic earlier. Disable if you are experiencing high server load.',
'Topic views'					=>	'Topic views',
'Topic views label'				=>	'Keep track of the number of views a topic has. Disable if you are experiencing high server load in a busy forum.',
'User post count'				=>	'User post count',
'User post count label'			=>	'Show user post count in posts, profile and user list.',
'User info'						=>	'User info in posts',
'User info label'				=>	'Show poster location, register date, post count, e-mail and URL in posts.',
'Features posts'				=>	'Topic and post content',
'Features posts legend'			=>	'Topic and post content options',
'Post content group'			=>	'Message options',
'Allow BBCode label'			=>	'Allow BBCode in posts (recommended).',
'Allow img label'				=>	'Allow BBCode [img] tag in posts.',
'Smilies in posts label'		=>	'Convert smilies to small icons in posts.',
'Make clickable links label'	=>	'Allow BBCode parser to detect URLs and put them into [url] tag.',
'Allow capitals group'			=>	'Allow all capitals',
'All caps message label'		=>	'Allow messages to contain only capital letters.',
'All caps subject label'		=>	'Allow subjects to contain only capital letters.',
'Indent size label'				=>	'[code] tag indent size',
'Indent size help'				=>	'Indent text by this many spaces. If set to 8, a regular tab will be used',
'Quote depth label'				=>	'Maximum [quote] depth',
'Quote depth help'				=>	'The maximum times a [quote] tag can go inside other [quote] tags, any tags deeper than this will be discarded',
'Features sigs'					=>	'User signatures and signature content',
'Features sigs legend'			=>	'Signature options',
'Allow signatures'				=>	'Allow signatures',
'Allow signatures label'		=>	'Allow users to attach a signature to their posts.',
'Signature content group'		=>	'Signature content',
'BBCode in sigs label'			=>	'Allow BBCode in signatures.',
'Img in sigs label'				=>	'Allow BBCode [img] tag in signatures (not recommended).',
'All caps sigs label'			=>	'Allow signatures to contain only capital letters.',
'Smilies in sigs label'			=>	'Convert smilies to small icons in user signatures.',
'Max sig length label'			=>	'Maximum characters',
'Max sig lines label'			=>	'Maximum lines',
'Features Avatars'				=>	'User avatars (upload and size settings)',
'Features Avatars legend'		=>	'User avatar settings',
'Allow avatars'					=>	'Allow avatars',
'Allow avatars label'			=>	'Allow users to upload avatars for display in posts.',
'Avatar directory label'		=>	'Avatar upload directory',
'Avatar directory help'			=>	'Relative to the PunBB root directory. PHP must have write permissions to this directory.',
'Avatar Max width label'		=>	'Avatar max width',
'Avatar Max width help'			=>	'Pixels (60 is recommended).',
'Avatar Max height label'		=>	'Avatar max height',
'Avatar Max height help'		=>	'Pixels (60 is recommended).',
'Avatar Max size label'			=>	'Avatar max size',
'Avatar Max size help'			=>	'Bytes (10,240 is recommended).',
'Features update'				=>	'Automatically check for updates',
'Features update info'			=>	'PunBB is able to periodically check if there are any important updates to your software. The updates may be new releases or hotfix extensions. When updates are available an alert for administrator will appear.',
'Features update disabled info'	=>	'The ability to automatically check for updates is not available. In order to support this feature, the PHP environment under which PunBB runs, must support either the <a href="http://www.php.net/manual/en/ref.curl.php">cURL extension</a>, the <a href="http://www.php.net/manual/en/function.fsockopen.php">fsockopen() function</a> or be configured with <a href="http://www.php.net/manual/en/ref.filesystem.php#ini.allow-url-fopen">allow_url_fopen</a> enabled.',
'Features update legend'		=>	'Automatic updates',
'Update check'					=>	'Check for updates',
'Update check label'			=>	'Enable automatic update checking.',
'Check for versions'			=>	'Check for new versions',
'Auto check for versions'		=>	'Enable check for new versions of extensions.',
'Features gzip'					=>	'Compress output using gzip',
'Features gzip legend'			=>	'Output compression',
'Features gzip info'			=>	'If enabled, PunBB will gzip the output sent to browsers. This will reduce bandwidth usage, but use a little more CPU. This feature requires that PHP is configured with zlib (--with-zlib). Note: If you already have one of the Apache modules mod_gzip or mod_deflate set up to compress PHP scripts, you should disable this feature.',
'Enable gzip'					=>	'Enable gzip',
'Enable gzip label'				=>	'Enable output compression using gzip.',

// Announcements section
'Announcements head'			=>	'Display an announcement on each page of your board',
'Announcements legend'			=>	'Announcement',
'Enable announcement'			=>	'Enable announcement',
'Enable announcement label'		=>	'Display an announcement message.',
'Announcement heading label'	=>	'Announcement heading',
'Announcement message label'	=>	'Announcement message',
'Announcement message help'		=>	'You may use HTML in your message. Announcements are not parsed like posts.',
'Announcement message default'	=>	'<p>Enter your announcement here.</p>',

// Registration section
'Registration new'				=>	'New registrations',
'New reg info'					=>	'You may choose to verify all new registrations. When registration verification is enabled, users are e-mailed an activation link when they register. They can then use the link to set their password and log in. This feature also requires users to verify new e-mail addresses if they choose to change from the e-mail addresses they registered with. This is an effective way of avoiding registration abuse and making sure that all users have "correct" e-mail addresses in their profiles.',
'Registration new legend'		=>	'New registration settings',
'Allow new reg'					=>	'Allow new registrations',
'Allow new reg label'			=>	'Allow new users to register. Disable only under special circumstances.',
'Verify reg'					=>	'Verify registrations',
'Verify reg label'				=>	'Require verification of all new registrations by e-mail.',
'Reg e-mail group'				=>	'Registration e-mail',
'Allow banned label'			=>	'Allow registration with banned e-mail addresses.',
'Allow dupe label'				=>	'Allow registration with duplicate e-mail addresses.',
'Report new reg'				=>	'Notify by e-mail',
'Report new reg label'			=>	'Notify users on the mailing list when new users register.',
'E-mail setting group'			=>	'Default e-mail setting',
'Display e-mail label'			=>	'Display e-mail address to other users.',
'Allow form e-mail label'		=>	'Hide e-mail address but allow e-mail via the forum.',
'Disallow form e-mail label'	=>	'Hide e-mail address and disallow e-mail via the forum.',
'Registration rules'			=>	'Forum rules (enable and compose forum rules)',
'Registration rules info'		=>	'You may require new users to agree to a set of rules when registering. The rules will always be available through a link in the navigation table at the top of every page. You may enable the use of rules and then compose your rules below.',
'Registration rules legend'		=>	'Forum rules',
'Require rules'					=>	'Require agreement',
'Require rules label'			=>	'Users must agree to forum rules before registering.',
'Compose rules label'			=>	'Compose rules',
'Compose rules help'			=>	'You may use HTML as text is not parsed. Leaving empty disables the use of rules.',
'Rules default'					=>	'Enter your rules here.',

// Email section
'E-mail addresses'				=>	'Forum e-mail addresses and mailing list',
'E-mail addresses legend'		=>	'E-mail addresses',
'Admin e-mail'					=>	'Administrator\'s e-mail',
'Webmaster e-mail label'		=>	'Webmaster e-mail',
'Webmaster e-mail help'			=>	'The "from" address of e-mails sent by the forum',
'Mailing list label'			=>	'Create mailing list',
'Mailing list help'				=>	'A comma separated list of recipients of reports and/or new registration notifications.',
'E-mail server'					=>	'Mail server configuration for sending e-mails from the forum',
'E-mail server legend'			=>	'E-mail server',
'E-mail server info'			=>	'In most cases PunBB will be able to send e-mail using your local e-mail program in which case you can ignore the following settings. PunBB can be configured to use an external mail server. Enter the address of the external server and, if required, specify a custom port number if the SMTP server doesn\'t run on the default port 25 (example: mail.example.com:3580).',
'SMTP address label'			=>	'SMTP server address',
'SMTP address help'				=>	'For external servers. Leave blank to use local mail program',
'SMTP username label'			=>	'SMTP server username',
'SMTP username help'			=>	'Not required by most SMTP servers',
'SMTP password label'			=>	'SMTP server password',
'SMTP password help'			=>	'Not required by most SMTP servers',
'SMTP SSL'						=>	'Encrypt SMTP using SSL',
'SMTP SSL label'				=>	'If your version of PHP supports SSL and your SMTP server requires it.',
'Error invalid admin e-mail'	=>	'The admin e-mail address you entered is invalid.',
'Error invalid web e-mail'		=>	'The webmaster e-mail address you entered is invalid.',

// Maintenance section
'Maintenance head'				=>	'Setup maintenance message and activate maintenance mode',
'Maintenance mode info'			=>	'<strong>IMPORTANT!</strong> Putting the board into maintenance mode means it will only be available to administrators. This should be used if the board needs to taken down temporarily for maintenance.',
'Maintenance mode warn'			=>	'<strong>WARNING!</strong> DO NOT LOGOUT when the board is in maintenance mode. You will not be able to login again.',
'Maintenance legend'			=>	'Maintenance',
'Maintenance mode'				=>	'Maintenance mode',
'Maintenance mode label'		=>	'Put board into maintenance mode.',
'Maintenance message label'		=>	'Maintenance message',
'Maintenance message help'		=>	'The message to be shown when the board is in maintenance mode. You may use the default message provided or compose your own. You may use HTML in your message.',
'Maintenance message default'	=>	'The forums are temporarily down for maintenance. Please try again in a few minutes.<br /><br />Administrator',

);
