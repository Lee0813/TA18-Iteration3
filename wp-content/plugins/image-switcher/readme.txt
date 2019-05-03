=== Plugin Name ===
Contributors: saiem,khanit
Tags: Image Switcher, Switcher, Photo Switcher, Image Changer
Requires at least: 4.6
Tested up to: 5.0
Stable tag: 1.1
Requires PHP: 7.0 or later
License: GPLv2 or later
License URI: https://www.gnu.org/licenses/gpl-2.0.html

Image Switcher plugin will give you ability to set two images together and image will change on Mouse hover.

== Description ==

**Note: Try your best to use 2 same height images instead of using Force Height Option**

Image Switcher plugin will give you ability to set two images together and image will change on Mouse hover. There are lots of benifits you'll
get from this particular plugin. All the list given :

* You can create shortcode from plugin admin panel.
* You don't need any css skill to decorate it properly.
* Place the shortcode wherever you want.
* Create shortcodes directly through page builders(Visual Composer, Elementor etc) *(Coming Soon!)*.
* Simply place this shortcode to preview the effect **[image_switcher]** . But you need to generate shortcode to add your own images and details. 

**If anyone has any idea to improve this plugin then just let me know through [Here](http://khanit.org/support) . I'll try my best to add that in future updates**

== Installation ==

1. Upload the plugin files to the `/wp-content/plugins/image-switcher` directory, or install the plugin through the WordPress plugins screen directly.
2. Activate the plugin through the 'Plugins' screen in WordPress
3. Use the Settings->Image Switcher screen to configure the plugin



== Frequently Asked Questions ==

= I'm not finding shortcode generator page, Where it is? =

After installing this plugin you'll see settings link directly, just click there. Or go to <code style="background: gray;color: white;padding: 0 10px;">Settings => Image Switcher</code>

= Can place the shortcode in php? =

Yes you can. You have to use **do_shortcode("[image_switcher]");** function.

== Screenshots ==

1. assets/screenshot-1.png
2. assets/screenshot-2.png


== Changelog ==

= 1.0 =
* Initial release.

= 1.1 =
**Improved compatibility**
* -Slowness- : It was slow to change/switch image while hovering. Now it is fixed.
* -JS- : Rely on JS reduced. Now it relies on CSS.
* -Responsive- : forced height will break in tabs,mobiles. That's mean images regular/ real height will work on tabs/mobiles.

