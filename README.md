# gmdb-static
This is the static version of The Game Masters Database. 
It is designed to be dropped into any webserver and figure out its own paths etc. 
Nothing crazy fancy. Host it somewhere and browse to it to use.

## Requirements:
- A webserver (you can host it on apache,httpd,lamp,wamp,xxamp, etc).  
- PHP installed with php-dom/php-xml modules (php8 works).
- SSL cert if desired - if using localhost self-signed is fine or you can disable the SSL redirect as detailed below.

## Required Configuration
In the /includes/config.php file $siteAbsolutePath needs to be set to your website absolute path like so:
- $siteAbsolutePath='http://localhost/gmdb' 	(localhost Non-SSL)
- $siteAbsolutePath='https://localhost/gmdb' 	(localhost SSL)
- $siteAbsolutePath='http://thegmdb.com' 		(hosted Non-SSL)
- $siteAbsolutePath='https://thegmdb.com' 		(hosted SSL)

**Note:**
If choosing to serve this app in a localhost environment you will probably want to disable the SSL redirect by commenting out the first section (lines 3-8) in the /includes/config.php file.0