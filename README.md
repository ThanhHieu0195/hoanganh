# HOANG ANH DOCUMENT 
#### link web: 
    http://localhost/hoanganh
#### database:
name: hoanganh
file import: hoanganh.sql
#### .htaccess
```
RewriteEngine On
RewriteBase /hoanganh/
RewriteRule ^index\.php$ - [L]
RewriteRule ^([_0-9a-zA-Z-]+/)?wp-admin$ $1wp-admin/ [R=301,L]
RewriteCond %{REQUEST_FILENAME} -f [OR]
RewriteCond %{REQUEST_FILENAME} -d
RewriteRule ^ - [L]
RewriteRule ^([_0-9a-zA-Z-]+/)?(wp-(content|admin|includes).*) $2 [L]
RewriteRule ^([_0-9a-zA-Z-]+/)?(.*\.php)$ $2 [L]
RewriteRule . index.php [L]
<IfModule mod_rewrite.c>
RewriteEngine On
RewriteBase /hoanganh/
RewriteRule ^index\.php$ - [L]
RewriteCond %{REQUEST_FILENAME} !-f
RewriteCond %{REQUEST_FILENAME} !-d
RewriteRule . /hoanganh/index.php [L]
</IfModule>
```
#### wp-config.php
```
define('WP_DEBUG', true);
define('WP_ALLOW_MULTISITE', true);
define('MULTISITE', true);
define('SUBDOMAIN_INSTALL', false);
define('DOMAIN_CURRENT_SITE', 'localhost');
define('PATH_CURRENT_SITE', '/hoanganh/');
define('SITE_ID_CURRENT_SITE', 1);
define('BLOG_ID_CURRENT_SITE', 1);
```
### plugins: 
    install acf pro plugin


=======
--
link web: 
http://localhost/hoanganh
--
db: hoanganh
import: hoanganh.sql
