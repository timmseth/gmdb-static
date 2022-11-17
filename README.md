# gmdb-static
This is the static version of The Game Masters Database. 
It is designed to be dropped into any webserver and figure out its own paths etc. 
Nothing crazy fancy. Host it somewhere and browse to it to use.

## Requirements:
- A webserver (you can host it on apache,httpd,lamp,wamp,xxamp, etc).  
- SSL cert (self-signed is fine)
- PHP installed with php-dom/php-xml modules (php8 works).

## Localhost Modifications
By default the app contains an SSL redirect. You can disable this by commenting out the first section (lines 3-8) in the /includes/config.php file.