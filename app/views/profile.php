
<?php


	// Get file info
	$file = Dropbox::getMetadata('/cell.cms/working-draft.txt');

	// sending the direct link:
	$dropboxPath = $file['path'];
	$pathError = Dropbox\Path::findError($dropboxPath);
	if ($pathError !== null) {
	    fwrite(STDERR, "Invalid <dropbox-path>: $pathError\n");
	    die;
	}

	// The $link is an array!
	$link = Dropbox::createTemporaryDirectLink($dropboxPath);
	// adding ?dl=1 to the link will force the file to be downloaded by the client.
	$dw_link = $link[0]."?dl=1";

	echo "Download link: ".$dw_link."<br>";

 
?>