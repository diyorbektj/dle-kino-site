<!DOCTYPE html>
<html lang="ru">
<head>
	{headers}
	<meta name="viewport" content="width=device-width, initial-scale=1.0" />
	<meta name="theme-color" content="#111">
	<link rel="preload" href="{THEME}/css/common.css" as="style">
	<link rel="preload" href="{THEME}/css/styles.css" as="style">
	<link rel="preload" href="{THEME}/css/engine.css" as="style">
	<link rel="preload" href="{THEME}/css/fontawesome.css" as="style">
	<link rel="preload" href="{theme}/webfonts/manrope-400.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="{theme}/webfonts/manrope-700.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="preload" href="{theme}/webfonts/roboto-condensed-700.woff2" as="font" type="font/woff2" crossorigin>
    <link rel="preload" href="{theme}/webfonts/fa-light-300.woff2" as="font" type="font/woff2" crossorigin>
	<link rel="shortcut icon" href="{THEME}/images/favicon.svg" />
	<link href="{THEME}/css/common.css" type="text/css" rel="stylesheet" />
	<link href="{THEME}/css/styles.css" type="text/css" rel="stylesheet" />
	<link href="{THEME}/css/engine.css" type="text/css" rel="stylesheet" /> 
	<link href="{THEME}/css/fontawesome.css" type="text/css" rel="stylesheet" />
</head>

<body[available=showfull|main] class="pmovie2"[/available][available=showfull] id="pmovie"[/available]>

	<div class="wrapper">

		<div class="wrapper-container wrapper-main d-flex fd-column">

			<header class="header d-flex ai-center">
				<a href="/" class="logo header__logo">
					<div class="logo__title">Sitename</div>
					<p class="logo__caption">Подборка фильмов</p>
				</a>
				<ul class="header__menu d-flex js-this-in-mobile-menu">
					<li><a href="#">Главная</a></li>
					<li>
						<a href="#">Фильмы</a>
						<ul class="header__menu-hidden anim">
							<li><a href="#">Биографические</a></li>
							<li><a href="#">Мюзиклы</a></li>
							<li><a href="#">Боевики</a></li>
							<li><a href="#">Вестерны</a></li>
							<li><a href="#">Военные</a></li>
							<li><a href="#">Документальные</a></li>
							<li><a href="/films/detektivy/">Детективы</a></li>
							<li><a href="/films/detskie/">Детские</a></li>
							<li><a href="/films/dramy/">Драмы</a></li>
							<li><a href="/films/istoricheskie/">Исторические</a></li>
							<li><a href="/films/komedii/">Комедии</a></li>
							<li><a href="/korotkometrazhki/">Короткометражки</a></li>
							<li><a href="/films/kriminalnye-filmy/">Криминал</a></li>
							<li><a href="/films/melodramy/">Мелодрамы</a></li>
							<li><a href="/films/muzykalnye/">Музыкальные</a></li>
							<li><a href="/nuar/">Нуар</a></li>
							<li><a href="/films/priklyucheniya-filmy/">Приключения</a></li>
							<li><a href="/films/semeynye/">Семейные</a></li>
							<li><a href="/films/sport-filmy/">Спорт</a></li>
							<li><a href="/films/trillery/">Триллеры</a></li>
							<li><a href="/films/uzhasy-filmy/">Ужасы</a></li>
							<li><a href="/films/fantastika-filmy/">Фантастика</a></li>
							<li><a href="/films/fentezi-filmy/">Фэнтези</a></li>
						</ul>
					</li>
					<li><a href="#">Сериалы</a></li>
					<li><a href="#">Мультфильмы</a></li>
					<li><a href="#">Топ 100</a></li>
				</ul>
				<div class="header__search flex-grow-1">
					<form id="quicksearch" method="post">
						<input type="hidden" name="do" value="search">
						<input type="hidden" name="subaction" value="search">
						<div class="header__search-box">
							<input id="story" name="story" placeholder="Поиск по сайту..." type="text" autocomplete="off">
							<button type="submit" class="search-btn"><span class="fal fa-search"></span></button>
						</div>
					</form>
				</div>
				[group=5]<div class="header__btn js-show-login"><span class="fal fa-user"></span>Войти</div>[/group]
				[not-group=5]<div class="header__btn js-show-login"><span class="fal fa-cog"></span>Кабинет</div>[/not-group]
				<div class="header__btn-menu d-none js-show-mobile-menu"><span class="fal fa-bars"></span></div>
			</header>

			<!-- END HEADER -->

			<main class="col-main flex-grow-1 d-flex fd-column">
				{info}
				[not-available=showfull]{include file="main-seo.tpl"}[/not-available]
				[available=main|cat]
				[available=main]
				<div class="big-slider main-slider"><div id="owl-big">
					{custom limit="3" from="2" category="20" template="custom-slide"}
				</div></div>
				[/available]
				{* обычная карусель, вдруг понадобится 
				<div class="carou">
					<div class="carou__content" id="owl-carou">
						[available=main]{custom limit="16" from="9" template="custom-top"}[/available]
						[available=cat]{custom limit="16" order="rating" days="7" category="{category-id}" template="custom-top"}[/available]
					</div>
				</div>*}
				[/available]
				[available=main|cat|favorites]
				<section class="sect flex-grow-1">
					<div class="sect__header d-flex ai-center">
						[available=main]<h2 class="sect__title flex-grow-1">Новинки фильмов и сериалов <span>Только лучшие премьеры!</span></h2>[/available]
						[available=cat]<h2 class="sect__title flex-grow-1">{category-title}</h2>[/available]
						[available=favorites]<h2 class="sect__title flex-grow-1">Ваше избранное</h2>[/available]
						{include file="main-filter.tpl"}
					</div>
					<div class="sect__content">
						{content}
					</div>
				</section>
				[/available]
				[not-available=main|cat|favorites]<div class="flex-grow-1">{content}</div>[/not-available]
			</main>
			
			<!-- END COL MAIN -->

			<footer class="footer">
				<div class="footer__one d-flex ai-center">
					<div class="logo footer__logo">
						<div class="logo__title">Sitename</div>
						<p class="logo__caption">Подборка фильмов</p>
					</div>
					<ul class="header__menu footer__menu d-flex flex-grow-1">
						<li><a href="#">Главная</a></li>
						<li><a href="#">Фильмы</a></li>
						<li><a href="#">Сериалы</a></li>
						<li><a href="#">Мультфильмы</a></li>
						<li><a href="#">Топ 100</a></li>
					</ul>
					<a href="/?do=feedback" class="footer__btn btn">Правообладателям</a>
				</div>
				<div class="footer__two d-flex ai-center">
					<div class="footer__text flex-grow-1">
						© 2021 "Sitename.com" Смотрите лучшие фильмы онлайн.
						<br>Все права защищены. Или все-таки нет?
					</div>
					<div class="footer__counter">
						<img src="{theme}/images/counter.gif" loading="lazy" alt="">
					</div>
				</div>
			</footer>

			<!-- END FOOTER -->

		</div>

		<!-- END WRAPPER-MAIN -->

	</div>

	<!-- END WRAPPER -->

	{login}
	{jsfiles}
	<script src="{THEME}/js/libs.js"></script>
	{AJAX}

</body>
</html>
