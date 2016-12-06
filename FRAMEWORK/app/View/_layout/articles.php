<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0, minimum-scale=1.0">
    <link rel="stylesheet" type="text/css" href="<?php echo SERVER; ?>style/style.css" />
    <title><?php echo $title; ?></title>
</head>
<body>
<header>
   <ul id="menu">
			<li><a href="index">Главная</a></li>
			<li><a href="articles">Архив</a></li>
			<li><a href="#">Контакты</a></li>
		</ul>
</header>
<div class="content">
    <div class="parag">
        <h2 class="in-parag">Статьи</h2>
    </div>
    <?php echo $content_for_layout; ?>
</div>
<div style="clear: both;"></div>
<footer>
    <div class="foo">

    </div>
    <div class="foo">

    </div>
    <div class="foo">

    </div>
</footer>
</body>
</html>