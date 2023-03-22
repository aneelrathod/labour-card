<!DOCTYPE html>
<html>
<body><center>

<?php

 $uploaddir = '/wamp/www/myfolder/uploaded/';
 $uploadfile = $uploaddir. basename($_FILES['file']['name']);
if (move_uploaded_file($_FILES['file']['tmp_name'], $uploadfile))
{
	echo "<h2>your aadar card was successfully uploaded.\n";
}
else
{
	echo "Error in uploading files..!\n";
}

?>
<a href="http://localhost/myfolder/labourhomepage.php">Home</a>
</center>
</body>
</html>