Boot-WP
====

A basic Wordpress site framework with 2 starter themes: Bootstrap 3.x and Boostrap 4.x
----------------------

**Includes:**

1. Twitter Bootstrap 3.3.1 & 4.0 distribution files - css, js, glyphicons
2. Twitter Bootstrap 3.3.1 LESS files plus Bootstrap Mixins & Bootstrap 4.0 SCSS files & Mixins
3. A style.less or style.scss starter file that compiles to style.css for starting Wordpress themes
4. A site.js that compiles to a site.min.js file
5. Wordpress Core 4.9.4
6. Wordpress Template files: header.php, index.php, page.php, single.php, footer.php
7. Wordpress wp-config.php rearranged to allow for both local and hosted DB configurations
8. 2 starter themes called "boot-wp-theme" & "boot-wp-theme-4", Bootstrap 3 and Bootstrap 4 respectively, ready for customization
9. Added a mixins.less file with many commonly used LESS mixins which compiles from style.less, no added mixins for Bootstrap 4
10. I use CodeKit to check and compile the bootstrap and my own custom LESS / JS into the site's working CSS and JS files. The project includes a CodeKit config file that saves project level settings. The Bootstrap 4 starter theme has a config.codekit3 file that has the build settings for scss, js and other files ready to go

**Notes:**

Clone this repo into any folder, then hook up the theme folder to CodeKit and your ready to Rock!

**A Few More Goodies:**

- **theme_default_setup.php** that removes typically unwanted WordPress backend items.
- **BTC Site Functionality Plugin** containing: post_types.php, taxonomies.php, metaboxes.php, metaboxes_cmb2.php

*Fred Shequine*
