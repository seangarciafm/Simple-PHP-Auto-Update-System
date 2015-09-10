<?php
//
// download information
//
// location to download new version zip
$remote_file_url = 'http://albumart.flippenmusic.com/Alma_1115-13.zip'; #example: http://flippenmusic.com/v25.zip
// rename version location/name
$local_file = 'version/new-version.zip'; #example: version/new-version.zip
//
// version check information
//
// url to external verification of version number as a .TXT file
$ext_version_loc = "http://albumart.flippenmusic.com/current_version.txt"; #example: http://flippenmusic.com/version/current_version.txt
// users local version number
// added the 'uid' just to show that you can verify from an external server the 
// users information. But it can be replaced with something more simple
$vnum_loc = "version/vnum_". $_POST['uid'] .".txt"; #example: version/vnum_1.txt
?>