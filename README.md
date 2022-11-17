# gmdb-static
This is the static version of The Game Masters Database. 
It is designed to be dropped into any webserver and figure out its own paths etc. 
Nothing crazy fancy. Host it somewhere and browse to it to use.

## Requirements:
- A webserver (you can host it on apache,httpd,lamp,wamp,xxamp, etc).  
- PHP installed with the php-dom module (php8 with php-xml works).
- SSL cert if desired - if using localhost self-signed is fine or you can disable the SSL redirect as detailed below.

## File Placement
- Place all files in a folder of your choice in your webserver directory.
- By default the config is mapped to localhost/gmdb so a folder of "gmdb" is ideal for quickstart.

## Required Configuration
In the /includes/config.php file $siteAbsolutePath needs to be set to the absolute path of the installation directory like so:

```
$siteAbsolutePath='http://localhost/gmdb' 	//(localhost Non-SSL)
```
OR
```
$siteAbsolutePath='https://localhost/gmdb' 	//(localhost SSL)
```
OR
```
$siteAbsolutePath='http://thegmdb.com' 		//(hosted Non-SSL)
```
OR
```
$siteAbsolutePath='https://thegmdb.com' 	//(hosted SSL)
```

**Note:**
If choosing to serve this app in a localhost environment you will probably want to disable the SSL redirect by commenting out the first section (lines 3-8) in the /includes/config.php file.0

## Credits:
- Web Application made by [Seth Timmons](https://sethtimmons.com/) using [Bootstrap](https://getbootstrap.com/).
- Background photo by [Manfred Richter](https://pixabay.com/users/manfredrichter-4055600/?utm_source=link-attribution&utm_medium=referral&utm_campaign=image&utm_content=4127713) from [Pixabay](https://pixabay.com/?utm_source=link-attribution&utm_medium=referral&utm_campaign=image&utm_content=4127713).
- Logos created using [Free Logo Design](https://www.freelogodesign.org/).

#### DND Resources populated from various sources including:
- [https://dnd.wizards.com/](https://dnd.wizards.com/)
- [r/d100](https://www.reddit.com/r/d100)
- [DNDSPEAK](https://www.dndspeak.com/)
- [Sword Coast Soundscapes on Youtube](https://www.youtube.com/c/SwordCoastSoundscapes)
- [TheBombZen Grimoire](https://github.com/thebombzen/grimoire/)
