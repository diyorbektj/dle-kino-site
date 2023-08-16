<article class="page ignore-select pmovie">

<header class="big-slider">
	<div class="bslide d-flex img-fit-cover">
		[not-smartphone]
		<div class="bslide__poster img-fit-cover pmovie__poster">
			<img src="{image-1}" loading="lazy" alt="{title}">
			<div class="bslide__label">Ultra HD 4K</div>
		</div>
		[/not-smartphone]
		<div class="bslide__desc flex-grow-1 d-flex fd-column">
			<div class="bslide__cat pmovie__genres">США, Канада, 2021, 172 мин.</div>
			<h1 class="bslide__title">{title}[edit]<span class="fal fa-pencil"></span>[/edit]</h1>
			<div class="bslide__subtitle">Station 19</div>
			[smartphone]
			<div class="img-fit-cover pmovie__poster-hm d-none">
				<img src="{image-1}" loading="lazy" alt="{title}">
				<div class="bslide__label">Ultra HD 4K</div>
			</div>
			[/smartphone]
			<ul class="bslide__text pmovie__header-list">
				<li>
					<span>Режиссер:</span>
					Адам Вингард
				</li>
				<li class="line-clamp">
					<span>Актеры:</span>
					<a href="#">Александр Скарсгард</a>, <a href="">Милли Бобби Браун</a>, <a href="">Ребекка Холл</a>, 
					<a href="">Брайан Тайри Генри</a>, <a href="">Сюн Огури</a>, <a href="">Эйса Гонсалес</a>, 
					Джулиан Деннисон, Лэнс Реддик, Кайл Чандлер, Демиан Бичир
				</li>
			</ul>
			<div class="bslide__btns flex-grow-1 d-flex ai-flex-end jc-space-between">
				<div class="bslide__btn btn js-scroll-to">Смотреть онлайн</div>
				[group=5]<div class="pmovie__fav flex-grow-1"><a href="#" class="js-show-login"><span class="fal fa-bookmark"></span></a></div>[/group]
				[not-group=5]
				<div class="pmovie__fav flex-grow-1">
				[add-favorites]<span class="fal fa-bookmark"></span>[/add-favorites]
				[del-favorites]<span class="fal fa-minus-circle"></span>[/del-favorites]
				</div>
				[/not-group]
				<div class="pmovie__ratings d-flex ai-center">
					<div class="pmovie__ratings-caption">Рейтинг:</div>
					[rating-type-4]<div class="pmovie__rating pmovie__rating--site">
						<div class="pmovie__rating-content poster__rating"></div>
						<div class="pmovie__rating-caption js-count-rating"><div class="d-none">{rating}</div>{vote-num} [declination={vote-num}]голос||а|ов[/declination]</div>
					</div>[/rating-type-4]
					<div class="pmovie__rating pmovie__rating--kp">
						<div class="pmovie__rating-content">7.6</div>
						<div class="pmovie__rating-caption">Рейтинг Кинопоиск</div>
					</div>
				</div>
			</div>
		</div>
		<img src="{image-1}" loading="lazy" alt="{title}">
		<div class="bslide__trailer js-show-trailer" data-trl="https://www.youtube.com/watch?v=-LkHS8geUjQ"><div class="fal fa-play anim"></div></div>
		{* это большая фоновая картинка (рекомендуется делать доп полем) 
			и кнопка трейлера, где адрес трейлера указывается в data-trl.
			Если большой картинки нет, то можно с помощью xfgiven, xfnotgiven выводить заглушку, то есть пример
			[xfgiven_bigimg]<img src="[xfvalue_bigimg]" loading="lazy" alt="{title}">[/xfgiven_bigimg]
			[xfnotgiven_bigimg]<img src="{theme}/images/bg.jpg" loading="lazy" alt="{title}">[/xfnotgiven_bigimg]
		*}
	</div>
</header>

<div class="page__cols d-flex">

	<div class="page__col-left">
		
		<ul class="pmovie__list">
			<li>
				<div>Режиссер:</div>
				Адам Вингард
			</li>
			<li class="not-shown-ajax"> {* not-shown-ajax - это не отображается в окошке у постера *}
				<div>Сценарист:</div>
				Джош Шеффер
			</li>
			<li>
				<div>Актеры:</div>
				<a href="#">Александр Скарсгард</a>, <a href="">Милли Бобби Браун</a>, <a href="">Ребекка Холл</a>, 
				<a href="">Брайан Тайри Генри</a>, <a href="">Сюн Огури</a>, <a href="">Эйса Гонсалес</a>, 
				Джулиан Деннисон, Лэнс Реддик, Кайл Чандлер, Демиан Бичир
			</li>
		</ul>
		<h2 class="page__subtitle">Скриншоты</h2>
		<div class="pmovie__screenshots">
			[xfvalue_screens]
			{* поле скриншотов, подробнее в инструкции *}
		</div>
		[not-smartphone]
		<div class="page__subtitle hm">Популярные фильмы</div>
		<div class="pmovie__items hm">
			{custom limit="3" days="30" order="rating" category="{category-id}" idexclude="{news-id}" template="custom-ftop"}
		</div>
		[/not-smartphone]
	</div>

	<div class="page__col-right flex-grow-1">
		<h2 class="page__subtitle">Сюжет фильма "{title}"</h2>
		<div class="page__text full-text clearfix">{full-story}</div>
		<h2 class="page__subtitle">Смотреть онлайн "{title}" бесплатно</h2>
		<div class="pmovie__player tabs-block">
			<div class="pmovie__player-controls d-flex ai-center">
				<div class="tabs-block__select d-flex flex-grow-1">
					<span>Смотреть онлайн</span> 
					<span>Запасной плеер</span>
				</div>
				<div class="pmovie__complaint">
					[complaint]Не работает?[/complaint]
				</div>
			</div>
			<div class="tabs-block__content d-none video-inside video-responsive">
				<iframe data-src="https://www.youtube.com/embed/I-5Op8acIN8" frameborder="0" allowfullscreen></iframe>
			</div>
			<div class="tabs-block__content d-none video-inside video-responsive">
				<iframe data-src="https://www.youtube.com/embed/cU6JjGfTvr0" frameborder="0" allowfullscreen></iframe>
			</div>
			{* если у вас свой адаптивный плеер, а не iframe или video, то уберите выше video-responsive *}
			<div class="pmovie__player-bottom d-flex jc-space-between ai-center">
				[rating-type-4]
				<div class="pmovie__rating-likes d-flex">
				[rating-plus]<span class="fal fa-plus-circle"></span>{likes}[/rating-plus]
				[rating-minus]<span class="fal fa-minus-circle"></span>{dislikes}[/rating-minus]
				</div>
				[/rating-type-4]
				<div class="pmovie__share not-shown-ajax d-flex ai-center">
					<div class="page__subtitle">Поделиться:</div>
					<div class="ya-share2 not-loaded" data-services="vkontakte,facebook,odnoklassniki,viber,whatsapp,telegram" data-counter="ig"></div>
				</div>
			</div>
			<div class="page__caption">
				На этой странице Вы можете <b>скачать песню {title}</b>!. 
				Слушайте онлайн в хорошем качестве, со своего телефона на Android, iphone или пк в любое время.
			</div>
		</div>
		<div class="page__comments">
			<div class="page__comments-title">Комментарии</div>
			<div class="page__comments-info">
				<span class="fal fa-exclamation-circle"></span>
				Минимальная длина комментария - 50 знаков. комментарии модерируются
			</div>
			{addcomments}
			<div class="page__comments-list [not-comments]page__comments-list--not-comments[/not-comments]" id="page__comments-list">
				[not-comments]<div class="message-info">Комментариев еще нет. Вы можете стать первым!</div>[/not-comments]
				{comments}{navigation}
			</div>
		</div>
	</div>

</div>

	<section class="sect pmovie__related">
		<div class="sect__header d-flex ai-center">
			<h2 class="sect__title flex-grow-1">Смотрите также <span>Только лучшие премьеры!</span></h2>
			<a href="#" target="_blank" class="soc-channels__item tlg">Мы в <div>Телеграм</div></a>
		</div>
		<div class="sect__content d-grid">
			{related-news}
		</div>
	</section>

</article>