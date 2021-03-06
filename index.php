<!DOCTYPE html>
<html lang="en">
<link rel="stylesheet" href="style.css">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<div class="header">
			<div class="logo"><img src="img/logo.png" alt=""></div>
			<div class="social-menu">
				<ul>
					<li><a href=""><img src="img/vk-logo.png" alt=""></a></li>
					<li><a href=""><img src="img/twitter-logo.png" alt=""></a></li>
					<li><a href=""><img src="img/fb-logo.png" alt=""></a></li>
					<li><a href=""><img src="img/gh-logo.png" alt=""></a></li>
				</ul>
			</div>
		</div>
		<div class="main"> 
			<div class="content__wrapper clearfix">
				<?php include(sidebar.php); ?>
				<div class="content">
					<div class="main__inform clearfix">
						<div class="main__inform-wrapper">
						<h2 class="content_header">Основная информация</h2></div>
						<div class="main__inform-photo"></div>
						<div class="main__inform-data">
							<ul class="main__inform-list">
								<li><span>Меня зовут:</span> Щилов Георгий Сергеевич</li>
								<li><span>Мой возраст:</span> 24 года</li>
								<li><span>Мой город:</span> Санкт-Петербург, Россия</li>
								<li><span>Моя специализация:</span> Фронд Энд разработка и SEO</li>
								<li><span>Ключевые навыеки:</span>
								<ul class="linear__list">
								 	<li>html</li>
								 	<li>css</li>
								 	<li>gulp</li>
								 	<li>js</li>
								 	<li>grunt</li>
								 </ul></li>
							</ul>
						</div>
					</div>
					<div class="main__exp">
						<div class="main__inform-wrapper">
						<h2 class="content_header">Опыт работы</h2>
							<ul>
								<li>
									<span>"ИП Боровицкий" - Продавец дисков</span>
									<span>Сентябрь 2005 - Август 2008</span>
								</li>
								<li><span>"ООО Системы безопастности" - Системный администратор</span>
									<span>Июнь 2008 - Июль 2010</span></li>
							</ul>
						</div>
					</div>
					<div class="main__edu">
						<div class="main__inform-wrapper">
						<h2 class="content_header">Образование</h2>
							<ul>
										<li>
											<span>Незаконченное высшее. СПБГУ ИТМО</span>
											<span>Октябрь 2012 - по настоящее время</span>
										</li>
										<li class="course"><span>Курсы Loftschool.ru</span>
											<span>Ноябрь 2014 - по настоящее время</span></li>
									</ul>
						</div>
					</div>
				</div>
			</div>
		</div>
		<div class="footer clearfix">
				<div class="footer__copywright">
					<span>© 2014, Это мой сайт, пожалуйста, не копируйте и не воруйте его</span>
				</div>
		</div>
	</div>
</body>
</html>