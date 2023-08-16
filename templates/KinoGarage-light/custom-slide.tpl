<div class="bslide d-flex img-fit-cover ai-flex-end">
	<div class="bslide__poster img-fit-cover">
		<img src="{image-1}" loading="lazy" alt="{title}">
		<div class="bslide__label">Ultra HD 4K</div>
	</div>
	<div class="bslide__desc flex-grow-1 d-flex fd-column">
		<div class="bslide__cat ws-nowrap">{category}</div>
		<h2 class="bslide__title ws-nowrap">{title}</h2>
		<div class="bslide__subtitle ws-nowrap">The call of the wild</div>
		[rating-type-4]<div class="bslide__rating poster__rating"><div class="js-count-rating d-none">{rating}{vote-num}</div></div>[/rating-type-4]
		<p class="bslide__text line-clamp">{short-story limit="500"}</p>
		<div class="bslide__btns flex-grow-1 d-flex ai-flex-end">
			<a href="{full-link}" class="bslide__btn btn">Смотреть онлайн</a>
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