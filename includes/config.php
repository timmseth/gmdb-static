<?php
//Redirect to SSL if necessary (feel free to disable this if on localhost)
if(!isset($_SERVER["HTTPS"]) || $_SERVER["HTTPS"] != "on"){
    //Tell the browser to redirect to the HTTPS URL.
    header("Location: https://" . $_SERVER["HTTP_HOST"] . $_SERVER["REQUEST_URI"], true, 301);
    //Prevent the rest of the script from executing.
    exit;
}
#Set absolute path to site to build paths to files (no trailing /)
$siteAbsolutePath='https://localhost/gmdb';
//Set Text/Theme Branding
$pageTitle='The Game Masters Database';
$pageHeading='The Game Masters Database';
$pageTagline='DND Resources. Easy as duck.';
//get trailing dir for lazy page names
$cwdName=basename(__DIR__);
//if no pageTitle, use cwd
if ($pageTitle==''){
  $pageTitle==$cwdName;
}
?>