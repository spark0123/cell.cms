<?php 

class DropboxController extends BaseController {
	public function getIndex()
    {
        //
    }

	public function getFileUpload($filename) {
		try{
				// Uploading the file
				$f = fopen('/Users/suep/cell.cms/'.$filename.'.txt', "rb");
				$result = Dropbox::uploadFile("/cell.cms/".$filename.'.txt',Dropbox\WriteMode::add(), $f);
				fclose($f);
				print_r($result);
				
		}catch(Exception $exception)
    	{
		   	echo('Dropbox File Upload error! ' . $exception);
		}
	}

	public function getFileInfo($filename) {
		try{
				// Get file info
				$file = Dropbox::getMetadata('/cell.cms/'.$filename.'.txt');

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
				
		}catch(Exception $exception)
    	{
		   	echo('Dropbox File Upload error! ' . $exception);
		}
	}
}