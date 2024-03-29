<!DOCTYPE html>
<head>
    <link rel="stylesheet" type="text/css" href="css/style.css">
	<link rel="stylesheet" href="https://fonts.googleapis.com/css?family=Manrope">
	<title>Youmu</title>
	<link rel="apple-touch-icon" sizes="180x180" href="../favicon/apple-touch-icon.png">
	<link rel="icon" type="image/png" sizes="32x32" href="../favicon/favicon-32x32.png">
	<link rel="icon" type="image/png" sizes="16x16" href="../favicon/favicon-16x16.png">
	<link rel="manifest" href="../favicon/site.webmanifest">
	<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.5.1/jquery.min.js" integrity="sha384-ZvpUoO/+PpLXR1lu4jmpXWu80pZlYUAfxl5NsBMWOEPSjUn/6Z/hRTt8+pR6L4N2" crossorigin="anonymous"></script>
	<?php
        define('MATOMO_INCLUDED', true);
        include_once($_SERVER['DOCUMENT_ROOT'] . '/includes/matomo.php');
    ?>
</head>
<body>
    <div class="bg--image"></div>
    <div class="main" style="display:none;">
        <img class="main__pfp" src="img/pfp.png">
        <h1 class="main__heading">youmu</h1>
		<p class="main__p">A recursive reminder discord bot</p>
		<p class="main__p main--p2">(Minecraft background unrelated)</p>
		<div class="main__invite">
			<a href="https://discord.com/oauth2/authorize?client_id=747845487188639854&scope=bot&permissions=355392" target="_self" class="btn invite__btn">Invite</a>
		</div>
    </div>
	<div class="footer">
		<p class="footer__p">© 2021 3zachm - <a href="https://github.com/3zachm/recursive-reminders" target="_self">Source Code</a></p>
	</div>
	<script src="js/main.js"></script>
</body>