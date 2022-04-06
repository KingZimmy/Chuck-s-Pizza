<!doctype html>
<html>
<head>
<meta charset="utf-8">
<title>Contact Form PHP</title>
</head>

<body>
	Thank You <?php echo $_POST["name"]; ?> for sending us a message! We will get back to you as soon as we can!<br>
	Your email address is: <?php echo $_POST["email"]; ?>
</body>
</html>