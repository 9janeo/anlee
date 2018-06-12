<?php
	function handleUpload($upload, $name) {
		// Check for attachment
		$attached_file = $_FILES['myfile']['name'];
		$tempname = $_FILES['myfile']['tmp_name'];
		$fileError = $_FILES['myfile']['error'];
		$fileSize = $_FILES['myfile']['size'];
		$fileType = $_FILES['myfile']['type'];
		// Get extension of attached file
		$fileExt = explode('.', $attached_file);
		$fileActualExt = strtolower(end($fileExt));
		// Specify accepted extensions
		$allowed = array('jpg', 'jpeg', 'png', 'pdf', 'doc', 'docx', 'txt', 'xlsx', 'csv', 'odt', 'rtf', 'rtfd', 'pages');

		if (in_array($fileActualExt, $allowed)) {
			if ($fileError === 0) {
				if ($fileSize < 10000000){
					// Create unique filename to prevent conflicts
					$fileNameNew = uniqid('', true).".".$fileActualExt;
					// Append senders name to unique filename
					$fileDestination = 'uploads/'.$name."-".$fileNameNew;
					// Move upload from temp folder to uploads
					move_uploaded_file($tempname, $fileDestination);
					return $fileDestination;
				}else {
					echo "File size is too large, max is 10MB!";
					echo $fileError;
				}
			} else {
				echo "There was an error uploading your file";
				echo $fileError;
			}
		} else {
			echo "you cannot upload this type of file";
			echo $fileError;
		}
	}
?>