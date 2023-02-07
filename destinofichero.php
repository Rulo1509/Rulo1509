<?php
	if(isset($_FILES['fichero'])) {
		$file = $_FILES['fichero'];
		$file_name = $file['name'];
		$file_tmp = $file['tmp_name'];
		move_uploaded_file($file_tmp,"subidas/".$file_name);
	}
?>