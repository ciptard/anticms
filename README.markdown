AntiCMS is a brutally simple PHP/Apache system for mostly static sites. No web-based editor. No database. For experienced web developers who want the bare minimum.

Usage
=====

Make sure .htaccess in enabled. (This has to be set in httpd.conf.) Unzip AntiCMS to your web root.

Look in the `pages` directory. You'll see `index.php` and `404.php`. These are special files. `index.php` is the home page of your site. `404.php`'s purpose should be obvious.

URI paths get mapped to filenames in the `pages` directory. For example, if you create `contact-us.php`, and you visit `http://whatever.host/contact-us`, you'll see the content from `contact-us.php`.

Other important files are in the `include` directory. There you'll find `header.php` and `footer.php`, which together comprise the site template.

Check out `anticms/menus.php` as well for some handy stuff.