wp-starter-template
===================
A WordPress starter template including basic PHP files and CSS stylesheets:

* footer.php
* header.php
* index.php
* sidebar.php
* style.css
* functions.php

There are many other necessary pages for a WordPress theme as noted in the [WordPress Codex](http://codex.wordpress.org/Theme_Development#Template_Files_List). Here are a few of the template files copied directly from the WordPress Codex:

**style.css**

* The main stylesheet. This must be included with your Theme, and it must contain the information header for your Theme.

**index.php**

* The main template. If your Theme provides its own templates, index.php must be present.

**functions.php**

* Run theme-related functions to enable sidebars and widgets, menus, featured images, and other appropriate WordPress tasks.

**comments.php**

* The comments template.

**front-page.php**

* The front page template.

**home.php**

* The home page template, which is the front page by default. If you use a static front page this is the template for the page with the latest posts.

**single.php**

* The single post template. Used when a single post is queried. For this and all other query templates, index.php is used if the query template is not present.

**single-{post-type}.php**

* The single post template used when a single post from a custom post type is queried. For example, single-book.php would be used for displaying single posts from the custom post type named "book". index.php is used if the query template for the custom post type is not present.

**page.php**

* The page template. Used when an individual Page is queried.

**category.php**

* The category template. Used when a category is queried.

**search.php**

* The search results template. Used when a search is performed.

**404.php**

* The 404 Not Found template. Used when WordPress cannot find a post or page that matches the query.