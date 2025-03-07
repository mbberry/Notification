=== Notification - Custom Notifications and Alerts for WordPress ===
Contributors: notification, bracketspace, Kubitomakita, tomaszadamowicz, insejn, mateuszgbiorczyk
Tags: notification, notify, alert, email, mail, webhook, API, developer, framework
Requires at least: 4.9
Tested up to: 6.2
Stable tag: 8.0.15
Requires PHP: 7.4
License: GPLv3
License URI: http://www.gnu.org/licenses/gpl-3.0.html

Customisable email and webhook notifications with powerful developer friendly API for custom triggers and notifications. Send alerts easily.

== Description ==

Custom Notifications and Alerts without a hassle. Notify anyone about any action in your WordPress. With powerful Merge Tags, you can endlessly customize your messages. Set unlimited Notifications in your WordPress Admin via the beautiful and intuitive interface within 5 minutes.

[youtube https://www.youtube.com/watch?v=gW2KHrT_a7U]

= DEFAULT WORDPRESS EMAILS OVERWRITE =

Now, with this plugin, you can easily disable default WordPress emails and replace them with your own. To do that you can use our awesome Wizard which will guide you through the process.

= HOW DOES IT WORK =

The Notification plugin is built with three main components:

* Trigger - a WordPress action, ie. User registration or Post publication
* Carrier - the thing which is being sent, ie. Email or Push
* Merge Tag - dynamic content, ie. {user_email} or {post_permalink}

You can use them in any combination, adding as many Notifications as you want. They can be sent to multiple Recipients with the content you write.

The process is simple:

* You select the Trigger
* Compose your message with Merge Tags
* Set Recipients
* Save the Notification

From now on the Notification is working. Test it out and add more!

= PERFECT FOR DEVELOPERS =

The Notification plugin is easy to set in the WordPress Admin, but it's even easier to extend with some sweet API.

You can create your own Triggers with any WordPress action. If you do in your code `do_action( 'my_plugin_doing_awesome_thing' )` you can create a Trigger out of it.

This allows you to use the Notification plugin as a notification system in your own plugin or theme. How? Well, because of two things:

* You can easily load it by copying the plugin files and including `load.php` file. A function known from Advanced Custom Fields plugin.
* You can white label the plugin with just one function which is shipped in the plugin's core. For free.

How easy extending the Notification plugin is? Let's see:

* Adding another Merge Tag to existing trigger - 1 line of code
* Creating custom Trigger - one intuitive class definition and registration with a single method call
* Defining Global Merge Tag - 1 line of code
* Creating new Extension - we have a [Boilerplate](https://github.com/BracketSpace/Notification-Extension-Boilerplate/) ready for you to start hacking

[See the developer documentation](https://docs.bracketspace.com/notification/developer/general) if you don't believe us.

= DEFAULT CARRIERS =

* Email
* Webhook
* Webhook JSON

= DEFAULT RECIPIENTS =

The plugin comes with few registered by default recipient types for Email Carrier:

* Email address or Merge Tag – free type email address or a Merge Tag
* Administrator – takes an email from General Settings page
* User – takes an email from WordPress user profile
* Role – notify all Users having selected role at once

= DEFAULT TRIGGERS =

These are already defined in plugin’s core and are ready to use. You can enable or disable them on the Settings page.

WordPress:

* Available updates - sent as often as you set them, ie. every week

Post Type:

* Published post notification
* Post added to database notification
* Post drafted (saved as a draft) notification
* Updated post notification
* Post send for review (pending post) notification
* Post approved (pending to publish) notification
* Post moved to trash notification

The Notification plugin supports any Custom Post Type out of the box.

Taxonomy terms:

* Taxonomy term created notification
* Taxonomy term updated notification
* Taxonomy term deleted notification

The Notification plugin supports any Taxonomy out of the box.

Comment / Pingback / Trackback:

* New comment notification
* Comment replied notification
* Comment approved notification
* Comment unapproved notification
* Comment marked as spam notification
* Comment moved to trash notification

User:

* User registered notification
* User profile updated notification
* User logged in notification
* User failed to log in notification
* User logged out notification
* User password reset request notification
* User password changed notification
* User deleted notification

Media:

* Media added notification
* Media updated notification
* Media deleted notification

Plugin:

* Plugin activated notification
* Plugin deactivated notification
* Plugin installed notification
* Plugin removed notification
* Plugin updated notification

Theme:

* Theme installed notification
* Theme switched notification
* Theme updated notification

WordPress:

* Available updates notification

Privacy:

* Personal Data erased notification
* Personal Data erase request notification
* Personal Data exported notification
* Personal Data export request notification

Feel free to suggest new core triggers in the support forum.

Each Trigger has own set of Merge Tags but you can use the Global Merge Tags anywhere.

= GLOBAL MERGE TAGS =

Along the Trigger specific Merge Tags, you can use the below anywhere:

* Site homepage URL - `{home_url}`
* Site title - `{site_title}`
* Site tagline - `{site_tagline}`
* Site theme name - `{site_theme_name}`
* Site theme version - `{site_theme_version}`
* Current WordPress version - `{wordpress_version}`
* Admin email - `{admin_email}`
* Trigger name - `{trigger_name}`
* Trigger slug - `{trigger_slug}`

= AWESOME EXTENSIONS =

* [Conditionals](https://bracketspace.com/downloads/notification-conditionals/) - send Notifications in certain conditions
* [Custom Fields](https://bracketspace.com/downloads/notification-custom-fields/) - use any meta value in your Notifications
* [Slack](https://bracketspace.com/downloads/notification-slack/) - post messages to Slack channel
* [Push](https://bracketspace.com/downloads/notification-push/) - send push notifications via browser's native system
* [Discord](https://bracketspace.com/downloads/notification-discord/) - post messages to Discord channel
* [Twilio](https://bracketspace.com/downloads/notification-twilio/) - send bulk SMS messages from your Twilio registered phone number
* [Scheduled Triggers](https://bracketspace.com/downloads/notification-scheduled-triggers/) - schedule your notifications based on events time
* [Review Queue](https://bracketspace.com/downloads/notification-review-queue/) - catch your Notifications into queue for a manual review
* [WooCommerce](https://bracketspace.com/downloads/notification-woocommerce/) - triggers specific to WooCommerce
* [Pushbullet](https://bracketspace.com/downloads/notification-pushbullet/) - send Push and SMS Notifications via your phone
* [Pushover](https://bracketspace.com/downloads/notification-pushover/) - send Push messages to devices registered in Pushover
* [SendGrid](https://bracketspace.com/downloads/notification-sendgid/) - send emails using SendGrid service
* [Mailgun](https://bracketspace.com/downloads/notification-mailgun/) - send emails using Mailgun service
* [File Log](https://bracketspace.com/downloads/notification-file-log/) - save Notifications as file logs on the server
* [bbPress](https://wordpress.org/plugins/notification-bbpress/) - bbPress triggers
* [BuddyPress](https://wordpress.org/plugins/notification-buddypress/) - BuddyPress triggers and integration with their notification system
* [Signature](https://wordpress.org/plugins/signature-notification/) - add a signature to all your emails automatically
* [AppPresser](https://bracketspace.com/downloads/notification-apppresser) - push messages to your mobile app built with AppPresser
* [Email Attachments](https://bracketspace.com/downloads/notification-email-attachments/) - attach files to your notification

*Coming soon* - vote for the extensions

* [Facebook](https://bracketspace.com/downloads/notification-facebook/) - post messages to Facebook
* [Twitter](https://bracketspace.com/downloads/notification-twitter/) - post messages to Twitter
* [Zapier](https://bracketspace.com/downloads/notification-zapier/) - connect any WordPress event with Zapier
* [WordPress Poster](https://bracketspace.com/downloads/notification-wordpress-poster/) - create WordPress posts

= POSSIBLE USE CASES =

* Overwriting default WordPress Emails
* Post publication notification to the post author
* Custom comment approved notification to post author and administrator
* User logged in notification to the administrator
* Notification about removed user account

= USEFUL LINKS =

* [Documentation](https://docs.bracketspace.com/notification/)
* [GitHub repository](https://github.com/BracketSpace/Notification)
* [Report a bug](https://github.com/BracketSpace/Notification/issues/new)

= CUSTOM DEVELOPMENT =

BracketSpace - the company behind this plugin provides [custom WordPress plugin development services](https://bracketspace.com/custom-development/). We can create any custom plugin for you.

== Installation ==

= Requirements =

This plugin require at least PHP 7.0.

= Plugin install =

Download and install this plugin from Plugins -> Add New admin screen.

= Distributing in a plugin or theme =

Notification can be loaded also as a part of any plugin or theme. To do it just include plugins's `load.php` file. It will figure out if it's loaded from theme or from plugin.

[See the detailed guide](https://docs.bracketspace.com/notification/developer/general/bundling)

== Frequently Asked Questions ==

= How can I test my notifications? =

It's not needed to install 3rd-party plugins to catch your emails or other notifications. The Notification plugin comes with a logger which you can activate in the settings and see all the notification configuration parameters.

= Why I'm not receiving any emails? =

Is your WordPress sending any emails at all? The best way to test it is to try to reset your password. If you don't get any email than there's something wrong with your server configuration. You could use any SMTP plugin to fix that.

You can also try to activate the debug log in plugin settings to see if the email is triggered.

= Is this plugin for regular users? =

Ofcourse it is! We are trying to make both parties happy - the Users and Developers. Users got their intuitive and beautiful panel in WordPress Admin and Developers got an awesome API by which they can extend the Notification plugin.

So it doesn't matter if you don't have any coding skills, they are not required to setup the notifications with this plugin.

= How is this plugin different from Better Notifications for WordPress (BNFW)? =

The Notification plugin works very similar to BNFW but it has better codebase and interface. You can read the full comparison in the [Notification vs Better Notifications for WordPress](https://bracketspace.com/notification-vs-better-notifications-for-wordpress/) article.

= How to register my own triggers? =

With `register_trigger()` function. [See the detailed guide](https://docs.bracketspace.com/notification/developer/triggers/custom-trigger)

= How to include a custom field in the notification? =

You can [write a merge tag](https://docs.bracketspace.com/notification/developer/triggers/adding-merge-tags-to-existing-triggers) by yourself or go with a no-brainer [Custom Fields extension](https://bracketspace.com/downloads/notification-custom-fields/).

= How to target only specific post / category / user etc? =

You can control when exactly the notification is sending with the [Conditionals extension](https://bracketspace.com/downloads/notification-conditionals/).

= Can I send to a custom recipient list based on my own plugin or theme logic? =

Yes, just include `filter-id:some-value` in the `Recipient` value (using the `Email/Merge tag` type with the `Email` carrier), then return your recipient list from the `notification/recipient/email/some-value` filter.

= Can I bundle the plugin with my plugin or theme? =

Yes, you can. [See the detailed guide](https://docs.bracketspace.com/notification/developer/general/bundling)

= Is this plugin capable of sending high volume emails? =

The plugin is capable and it can send milions of emails, but probably your server is not. To send thousands of emails at once we'd suggest using [SendGrid](https://bracketspace.com/downloads/notification-sendgrid/) or [Mailgun](https://bracketspace.com/downloads/notification-mailgun/) extensions which were designed to support high volume emails in a single API call.

When using SMTP it's nearly impossible to send more than a dozen emails at once due to timeouts.

= Can I test my notifications before sending? =

Yes, just activate the debug log in the DEBUGGING section of the plugin settings. All notifications will be caught into log visible only to you.

= Can you create a plugin for me? =

Yes! We're offering a [custom plugin development](https://bracketspace.com/custom-development/) services. Feel free to contact us to find out how we can help you.

== Screenshots ==

1. Trigger edit screen
2. All triggers
3. Settings
4. Extensions
5. Help tab with global Merge Tags
6. Wizard
7. Default email disabler

== Changelog ==

= [Next] =

* [Changed] Global functions moved to namespace and set as deprecated.
* [Changed] Removed v6 & v7 deprecated functions
* [Changed] Minimum required PHP version from 7.4.
* [Changed] WordPress Coding Standards to PSR-12 standards.
* [Changed] Trigger dropdown is now taller for better UX.
* [Changed] Notification table is now filtered from uneccessary columns.
* [Fixed] Shortcodes being uncorrectly stripped leaving closing "]" behind.
* [Fixed] PHP 8.2 deprecations.
* [Fixed] Stripping shortcodes in carrier fields.
* [Added] New trigger after user confirms his new email address.
* [Added] New trigger after user confirms his new email address
* [Added] Option to disable notification about admin email address changed.
* [Added] New trigger after user confirms his new email address.
* [Added] New trigger after admin confirms new site email address.
* [Added] notification/admin/allow_column/$column filter.
* [Fixed] Email carrier header "From" prioritized over header in settings.

**Compatibility Breaking Changes**

* Class methods and properties has been changed from snake_case to camelCase.
* In Post Triggers, dynamic property `$trigger->{$post_type}` has been replaced with static prop `$trigger->post`.
* The same as above applies to Post Trigger datetime tags, namely: postCreationDatetime, postPublicationDatetime, and postModificationDatetime.
* Renamed functions:
  	notification_adapt() -> BracketSpace\Notification\adaptNotification()
  	notification_adapt_from() -> BracketSpace\Notification\adaptNotificationFrom()
	notification_swap_adapter() -> BracketSpace\Notification\swapNotificationAdapter()
  	notification_log() -> BracketSpace\Notification\log()
  	notification_add() -> BracketSpace\Notification\addNotification()
  	notification_convert_data() -> BracketSpace\Notification\convertNotificationData()
  	notification_register_settings() -> BracketSpace\Notification\registerSettings()
	notification_get_settings() -> BracketSpace\Notification\getSettings()
  	notification_get_setting() -> BracketSpace\Notification\getSetting()
  	notification_update_setting() -> BracketSpace\Notification\updateSetting()

== Upgrade Notice ==

= [Next] =
Minimum required PHP version is 7.4.
Compatibility breaking changes. Please make sure to review the changelog before upgrading and adjust your customizations.
The premium plugins won't work with Notification [Next] unless updated.

= 8.0.0 =
Compatibility breaking changes and security fixes. Please make sure to review the changelog before upgrading and adjust your customizations.
The premium plugins won't work with Notification v8 unless updated.

= 7.0.0 =
Compatibility breaking changes. Please make sure to review the changelog before upgrading and adjust your customizations.
The premium plugins won't work with Notification v7 unless updated.
