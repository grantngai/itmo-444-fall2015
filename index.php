<?php
session_start();
?>
<html>
<head><title>Hello World</title>
</head>
<body>

<form enctype="multipart/form-data" action="result.php" method="POST">

<input type="hidden" name="MAX_FILE_SIZE" value="3000000" />

Send this file: <input name="userfile" type="file" /><br />
Enter Email of user: <input type="email" name="useremail" /><br />
Enter Phone of user (1xxxxxxxxxx): <input type="phone" name="phone">

<input type="submit" value="Send File" />
</form>
<hr />

<form enctype="multipart/form-data" action="gallery.php" method="POST">

Enter Email of user for gallery to browse: <input type="email" name="email">
<input type="submit" value="Load Gallery" />
</form>

</body>
</html>  
