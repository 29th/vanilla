<?php if (!defined('APPLICATION')) exit();

// Conversations
$Configuration['Conversations']['Version'] = '2.2.16.7';

// Database
$Configuration['Database']['Name'] = 'vanilla';
$Configuration['Database']['Host'] = 'localhost';
$Configuration['Database']['User'] = '';
$Configuration['Database']['Password'] = '';
$Configuration['Debug'] = FALSE;

// EnabledApplications
$Configuration['EnabledApplications']['Conversations'] = 'conversations';
$Configuration['EnabledApplications']['Vanilla'] = 'vanilla';

// EnabledPlugins
$Configuration['EnabledPlugins']['HtmLawed'] = 'HtmLawed';
$Configuration['EnabledPlugins']['steamprofile'] = TRUE;
$Configuration['EnabledPlugins']['MentionsPlus'] = TRUE;
$Configuration['EnabledPlugins']['EasyMembersList'] = TRUE;
$Configuration['EnabledPlugins']['AddMenuitem'] = TRUE;
$Configuration['EnabledPlugins']['29th-rank'] = TRUE;
$Configuration['EnabledPlugins']['GettingStarted'] = FALSE;
$Configuration['EnabledPlugins']['Quotes'] = TRUE;
$Configuration['EnabledPlugins']['EmojiPro'] = TRUE;
$Configuration['EnabledPlugins']['Emoticons'] = TRUE;
$Configuration['EnabledPlugins']['RiceBalls'] = TRUE;
$Configuration['EnabledPlugins']['Eventi'] = FALSE;
$Configuration['EnabledPlugins']['SimplePages'] = TRUE;
$Configuration['EnabledPlugins']['bootstrapmarkdown'] = TRUE;
$Configuration['EnabledPlugins']['DiscussionFiltersMenu'] = TRUE;
$Configuration['EnabledPlugins']['Participated'] = TRUE;
$Configuration['EnabledPlugins']['PersonnelFiles'] = TRUE;
$Configuration['EnabledPlugins']['UnreadOnIndex'] = TRUE;
$Configuration['EnabledPlugins']['VanillaStats'] = TRUE;
$Configuration['EnabledPlugins']['MarkdownMarkup'] = TRUE;
$Configuration['EnabledPlugins']['AllViewed'] = TRUE;

// Garden
$Configuration['Garden']['Title'] = '29th Infantry Division';
$Configuration['Garden']['Cookie']['Salt'] = '';
$Configuration['Garden']['Cookie']['Domain'] = '';
$Configuration['Garden']['Registration']['ConfirmEmail'] = '1';
$Configuration['Garden']['Registration']['Method'] = 'Captcha';
$Configuration['Garden']['Registration']['ConfirmEmailRole'] = '3';
$Configuration['Garden']['Registration']['CaptchaPrivateKey'] = '';
$Configuration['Garden']['Registration']['CaptchaPublicKey'] = '';
$Configuration['Garden']['Registration']['InviteExpiration'] = '1 week';
$Configuration['Garden']['Registration']['InviteRoles']['3'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['4'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['8'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['16'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['32'] = '0';
$Configuration['Garden']['Registration']['InviteRoles']['33'] = '0';
$Configuration['Garden']['Email']['SupportName'] = '';
$Configuration['Garden']['Email']['SupportAddress'] = '';
$Configuration['Garden']['Email']['UseSmtp'] = '1';
$Configuration['Garden']['Email']['SmtpHost'] = '';
$Configuration['Garden']['Email']['SmtpUser'] = '';
$Configuration['Garden']['Email']['SmtpPassword'] = '';
$Configuration['Garden']['Email']['SmtpPort'] = '';
$Configuration['Garden']['Email']['SmtpSecurity'] = 'ssl';
$Configuration['Garden']['InputFormatter'] = 'Markdown';
$Configuration['Garden']['Version'] = '2.2.16.7';
$Configuration['Garden']['RewriteUrls'] = TRUE;
$Configuration['Garden']['CanProcessImages'] = TRUE;
$Configuration['Garden']['SystemUserID'] = '4';
$Configuration['Garden']['Installed'] = TRUE;
$Configuration['Garden']['Theme'] = 'bootstrap';
$Configuration['Garden']['ThemeOptions']['Name'] = 'Bootstrap';
$Configuration['Garden']['ThemeOptions']['Styles']['Key'] = 'Avalon';
$Configuration['Garden']['ThemeOptions']['Styles']['Value'] = '%s_avalon';
$Configuration['Garden']['HomepageTitle'] = '29th Infantry Division';
$Configuration['Garden']['Description'] = '';
$Configuration['Garden']['FavIcon'] = 'favicon_f06e9f5a2f7eb907.ico';
$Configuration['Garden']['Embed']['Allow'] = TRUE;
$Configuration['Garden']['Embed']['RemoteUrl'] = '';
$Configuration['Garden']['Embed']['ForceDashboard'] = FALSE;
$Configuration['Garden']['Embed']['ForceForum'] = FALSE;
$Configuration['Garden']['TrustedDomains'] = array('personnel.29th.org');
$Configuration['Garden']['SignIn']['Popup'] = '1';
$Configuration['Garden']['User']['ValidationRegex'] = '\\d\\w_ äöüß\\/\\.';
$Configuration['Garden']['User']['ValidationLength'] = '{3,20}';
$Configuration['Garden']['EditContentTimeout'] = '-1';
$Configuration['Garden']['Html']['SafeStyles'] = FALSE;
$Configuration['Garden']['Format']['Hashtags'] = FALSE;
$Configuration['Garden']['Messages']['Cache'] = array('Dashboard/Profile/Index');

// Plugins
$Configuration['Plugins']['GettingStarted']['Dashboard'] = '1';
$Configuration['Plugins']['GettingStarted']['Registration'] = '1';
$Configuration['Plugins']['GettingStarted']['Categories'] = '1';
$Configuration['Plugins']['GettingStarted']['Plugins'] = '1';
$Configuration['Plugins']['GettingStarted']['Discussion'] = '1';
$Configuration['Plugins']['GettingStarted']['Profile'] = '1';
$Configuration['Plugins']['MentionsPlus']['MentionStart'] = '"';
$Configuration['Plugins']['MentionsPlus']['MentionStop'] = '"';
$Configuration['Plugins']['MentionsPlus']['MeActionCode'] = '/me';
$Configuration['Plugins']['EasyMembersList']['ShowLinkInMenu'] = '1';
$Configuration['Plugins']['EasyMembersList']['ShowLinkInFlyout'] = '1';
$Configuration['Plugins']['EasyMembersList']['ShowToGuests'] = '';
$Configuration['Plugins']['EasyMembersList']['ShowEmail'] = '';
$Configuration['Plugins']['EasyMembersList']['ShowOnlyToTheseUsers'] = '';
$Configuration['Plugins']['EasyMembersList']['HideTheseUsers'] = '';
$Configuration['Plugins']['AddMenuitem']['Name1'] = '';
$Configuration['Plugins']['AddMenuitem']['Link1'] = '';
$Configuration['Plugins']['AddMenuitem']['Name2'] = '';
$Configuration['Plugins']['AddMenuitem']['Link2'] = '';
$Configuration['Plugins']['AddMenuitem']['Name3'] = '';
$Configuration['Plugins']['AddMenuitem']['Link3'] = '';
$Configuration['Plugins']['AddMenuitem']['Name4'] = 'Personnel';
$Configuration['Plugins']['AddMenuitem']['Link4'] = 'http://personnel.29th.org';
$Configuration['Plugins']['AddMenuitem']['Name5'] = '';
$Configuration['Plugins']['AddMenuitem']['Link5'] = '';

// Routes
$Configuration['Routes']['DefaultController'] = array('categories', 'Internal');
$Configuration['Routes']['bWVtYmVycw=='] = array('/plugin/EasyMembersList', 'Internal');

// Vanilla
$Configuration['Vanilla']['Version'] = '2.2.16.7';
$Configuration['Vanilla']['Discussions']['Layout'] = 'table';
$Configuration['Vanilla']['Discussions']['PerPage'] = '30';
$Configuration['Vanilla']['Categories']['Layout'] = 'table';
$Configuration['Vanilla']['Categories']['MaxDisplayDepth'] = '3';
$Configuration['Vanilla']['Categories']['DoHeadings'] = '1';
$Configuration['Vanilla']['Categories']['HideModule'] = '1';
$Configuration['Vanilla']['Comments']['AutoRefresh'] = NULL;
$Configuration['Vanilla']['Comments']['PerPage'] = '30';
$Configuration['Vanilla']['Archive']['Date'] = '';
$Configuration['Vanilla']['Archive']['Exclude'] = FALSE;
$Configuration['Vanilla']['AdminCheckboxes']['Use'] = FALSE;
$Configuration['Vanilla']['Discussion']['SpamCount'] = '3';
$Configuration['Vanilla']['Discussion']['SpamTime'] = '60';
$Configuration['Vanilla']['Discussion']['SpamLock'] = '120';
$Configuration['Vanilla']['Comment']['SpamCount'] = '5';
$Configuration['Vanilla']['Comment']['SpamTime'] = '60';
$Configuration['Vanilla']['Comment']['SpamLock'] = '120';
$Configuration['Vanilla']['Comment']['MaxLength'] = '20000';

// Last edited by FSgt. Hill (208.38.36.24)2015-02-24 02:43:45