<!DOCTYPE html>
<head>
	<title>Комментарии</title>
	<link rel="stylesheet" href="/style/main.css" type="text/css" charset="utf-8">
</head>
<body>
	<header>
		<div class="mid">
			<div class="leftblock">
				<div class="info">
					<p>Телефон: (499)340-94-71</p>
					<p>Email: <u>info@future-group.ru</u></p>
				</div>
				<h1>Комментарии</h1>
			</div>
			<div class="rightblock">
				<div class="logo">
					<a href="/"><img src="/img/logo.png" alt="logo"></a>
				</div>
			</div>
		</div>
	</header>
	<hr class="clear">	
	<div class="content">
		<div class="mid">
			<div class="comments">
				<?php foreach ($posts as $post): ?>
				<div class="border">
					<h3><?=$post['name']; ?></h2>
					<p class="date"><?=$post['reg_date']; ?></p>
					<p class="text"><?=$post['content']; ?></p>
				</div>
				<?php endforeach; ?>
			</div>
			<div class="addcomment">
				<h2>Оставить комментарий</h2>
				<form action="store.php" method="post">
					<p>Ваше имя</p>
					<input type="text" name="title">
					<p>Ваш комментарий</p>
					<textarea name="content"></textarea> <br><br>
					<button type="submit">Отправить</button>				
				</form>
			</div>
		</div>
	</div>
	<footer>
		<div class="mid">
			<div class="footerLogo">
			<a href="/"><img src="/img/logo.png" alt="logo"></a>
		</div>
		<div class="footerInfo">
			<p>Телефон: (499)340-94-71</p>
			<p>Email: <u>info@future-group.ru</u></p>
			<p>Адрес: <u>115088 Москваб улю 2-я Машиностроения, д. 7 стр 1</u></p>
			<p class="rights">&#169 2010 - <?=date('Y') ?> Future. Все права защищены</p>
		</div>
		</div>
	</footer>


</body>
</html>
