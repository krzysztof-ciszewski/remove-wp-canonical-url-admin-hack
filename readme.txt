=== Remove WP Canonical URL Admin Hack ===
Contributors: MrJamesMyers
Tags: canonical urls,wp-admin,remove
Requires at least: 4.2
Tested up to: 4.2
License: GPLv2 or later
License URI: http://www.gnu.org/licenses/gpl-2.0.html

WordPress plugin to remove canonical URLs from Admin Area.  useful for Reversed Proxie/Multi Site Installations.  Stops the wp_admin_canonical_url redirect in WP-Admin after 4.2 upgrade 

== Description ==
When you upgrade to WordPress 4.2, canonical URLS are added to wp-admin area.  There is then a JavaScript function that checks window.history.replaceState against the canonical URL and then does a location redirect.  

This is usually fine.  However if your blog is a multisite installation that is reverse proxied as a subsection of your site this may results in undesired behaviour for instance when trying to publish a post the page just redirects instead of updating.

== Installation ==
Upload the plugin to your blog, Activate it.  Then when you reload an admin page in the source code you should no longer see a canonical URL tag.