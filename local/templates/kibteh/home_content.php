<?

$googleplayLink = \COption::GetOptionString(
	"askaron.settings",
	"UF_GOOGLEPLAY_LINK"
);
$appstoreLink = \COption::GetOptionString(
	"askaron.settings",
	"UF_APPSTORE_LINK"
);
if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED !== true) die(); ?>
<div class="outer-container mb-sm-3">
	<div class="main-slider animated fadeIn">
		<? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"main_slider", 
	array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "main_slider",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "1",
		"IBLOCK_TYPE" => "-",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "N",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "20",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(
			0 => "",
			1 => "",
		),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "SORT",
		"SORT_BY2" => "ACTIVE_FROM",
		"SORT_ORDER1" => "ASC",
		"SORT_ORDER2" => "DESC",
		"STRICT_SECTION_CHECK" => "N"
	),
	false
); ?>
		<div class="main-slider__static animated fadeInLeft delay-2s">
			<div class="container">
				<div class="main-slider__header">Доступ с функцией
					<br>
					«свободные руки»
				</div>
				<div class="main-slider__btns">
					<a class="btn btn_primary fancybox" href="#giveContacts">Подробнее</a>
					<a class="btn btn_light btn_ico fancybox" href="https://www.youtube.com/watch?v=3dYouSEBKiU">
						<i class="icm icm-play"></i>
						<span>Видео</span>
					</a>
				</div>
				<div class="main-slider__smalltext">Продукт для корпоративного использования.
					<br>
					<a href="#" class="off-link">Решение для частных лиц</a>
				</div>
				<div class="main-slider__navigation slider-navigation">
					<div class="slider-btn" data-prev>
						<i class="icm icm-arrow rotate-180"></i>
					</div>
					<div class="slider-dots"></div>
					<div class="slider-btn" data-next>
						<i class="icm icm-arrow"></i>
					</div>
				</div>
				<div class="main-slider__end">Просто внедрить в любом
					<br>
					жилом комплексе
				</div>
			</div>
		</div>
	</div>
</div>
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"typesolution",
	Array(
		"ACTIVE_DATE_FORMAT" => "d.m.Y",
		"ADD_SECTIONS_CHAIN" => "N",
		"AJAX_MODE" => "N",
		"AJAX_OPTION_ADDITIONAL" => "",
		"AJAX_OPTION_HISTORY" => "N",
		"AJAX_OPTION_JUMP" => "N",
		"AJAX_OPTION_STYLE" => "N",
		"CACHE_FILTER" => "N",
		"CACHE_GROUPS" => "Y",
		"CACHE_TIME" => "36000000",
		"CACHE_TYPE" => "A",
		"CHECK_DATES" => "Y",
		"COMPONENT_TEMPLATE" => "typesolution",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(0=>"",1=>"",),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "2",
		"IBLOCK_TYPE" => "ru",
		"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
		"INCLUDE_SUBSECTIONS" => "Y",
		"MESSAGE_404" => "",
		"NEWS_COUNT" => "0",
		"PAGER_BASE_LINK_ENABLE" => "N",
		"PAGER_DESC_NUMBERING" => "N",
		"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
		"PAGER_SHOW_ALL" => "N",
		"PAGER_SHOW_ALWAYS" => "N",
		"PAGER_TEMPLATE" => ".default",
		"PAGER_TITLE" => "Типовые решения",
		"PARENT_SECTION" => "",
		"PARENT_SECTION_CODE" => "",
		"PREVIEW_TRUNCATE_LEN" => "",
		"PROPERTY_CODE" => array(0=>"",1=>"",),
		"SET_BROWSER_TITLE" => "N",
		"SET_LAST_MODIFIED" => "N",
		"SET_META_DESCRIPTION" => "N",
		"SET_META_KEYWORDS" => "N",
		"SET_STATUS_404" => "N",
		"SET_TITLE" => "N",
		"SHOW_404" => "N",
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	)
);?>
<section class="outer-container py-4 mb-1">
	<div class="container">
		<h2 class="h h_l ta-center mb-3 mb-sm-4">Преимущества и выгоды системы</h2>
		<ul class="ns features">
			<li class="featrues__item wow fadeInUp">
				<div class="feature" data-open>
					<div class="feature__header">
						<button class="feature__close"></button>
						<h3 class="h h_m">Единая среда доступа по смартфону</h3>
					</div>
					<div class="feature__body">
						<ul class="feature-props row">
							<li class="feature-props__item col-12 col-lg-6 wow fadeIn">
								<div class="feature-prop">
									<div class="feature-prop__ico">
										<div class="circle-ico">
											<i class="icm icm-no_key"></i>
										</div>
									</div>
									<div class="feature-prop__text">
										<h4 class="h h_s mb-1">Удобный гостевой доступ</h4>
										<div class="feature-prop__desc muted500">Простая моментальная отправка
											пользователями временных гостевых ключей. Гостям не требуется несколько раз
											звонить в домофон, они проходят на территорию и в подъезд со своим
											смартфоном
										</div>
									</div>
								</div>
							</li>
							<li class="feature-props__item col-12 col-lg-6 wow fadeIn">
								<div class="feature-prop">
									<div class="feature-prop__ico">
										<div class="circle-ico">
											<i class="icm icm-diamond"></i>
										</div>
									</div>
									<div class="feature-prop__text">
										<h4 class="h h_s mb-1">Телефон – единый идентификатор в рамках всего объекта
										</h4>
										<div class="feature-prop__desc muted500">С помощью цифровых ключей в смартфоне
											открываются двери подъезда, калитки ограждения, шлагбаумы, ворота парковки,
											вызываются лифты
										</div>
									</div>
								</div>
							</li>
							<li class="feature-props__item col-12 col-lg-6 wow fadeIn">
								<div class="feature-prop">
									<div class="feature-prop__ico">
										<div class="circle-ico">
											<i class="icm icm-lock"></i>
										</div>
									</div>
									<div class="feature-prop__text">
										<h4 class="h h_s mb-1">Безопасная аутентификация по смартфону</h4>
										<div class="feature-prop__desc muted500">Цифровые ключи надежно защищены
											криптографическим протоколом
										</div>
									</div>
								</div>
							</li>
							<li class="feature-props__item col-12 col-lg-6 wow fadeIn">
								<div class="feature-prop">
									<div class="feature-prop__ico">
										<div class="circle-ico">
											<i class="icm icm-hand"></i>
										</div>
									</div>
									<div class="feature-prop__text">
										<h4 class="h h_s mb-1">Бесключевой доступ «свободные руки»</h4>
										<div class="feature-prop__desc muted500">Открытие дверей и шлагбаумов по
											приближению без необходимости доставать смартфон
										</div>
									</div>
								</div>
							</li>
							<li class="feature-props__item col-12 col-lg-6 wow fadeIn">
								<div class="feature-prop">
									<div class="feature-prop__ico">
										<div class="circle-ico">
											<i class="icm icm-admin"></i>
										</div>
									</div>
									<div class="feature-prop__text">
										<h4 class="h h_s mb-1">Администрирование и логи доступа в облачном личном
											кабинете
										</h4>
										<div class="feature-prop__desc muted500">Система позволяет полностью
											контролировать наличие прав доступа и срок их действия у пользователей, а
											также фиксировать факты прохода или проезда, не требуя установки отдельного
											сервера. Вся функциональность доступна в личном кабинете в web-браузере.
										</div>
									</div>
								</div>
							</li>
							<li class="feature-props__item col-12 col-lg-6 wow fadeIn">
								<div class="feature-prop">
									<div class="feature-prop__ico">
										<div class="circle-ico">
											<i class="icm icm-factory"></i>
										</div>
									</div>
									<div class="feature-prop__text">
										<h4 class="h h_s mb-1">Легкая адаптация системы для любых объектов</h4>
										<div class="feature-prop__desc muted500">Система можно установить на любые
											объекты — от частного дома до большого завода.
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</li>
			<li class="features__item wow fadeInUp">
				<div class="feature">
					<div class="feature__header">
						<button class="feature__close"></button>
						<h2 class="h h_m">Единая среда доступа по смартфону</h2>
					</div>
					<div class="feature__body">
						<ul class="feature-props row">
							<li class="feature-props__item col-12 col-lg-6 wow fadeIn">
								<div class="feature-prop">
									<div class="feature-prop__ico">
										<div class="circle-ico">
											<i class="icm icm-no_key"></i>
										</div>
									</div>
									<div class="feature-prop__text">
										<h4 class="h h_s mb-1">Удобный
											<br>
											гостевой доступ
										</h4>
										<div class="feature-prop__desc muted500">Простая моментальная отправка
											пользователями временных гостевых ключей. Гостям не требуется несколько раз
											звонить в домофон, они проходят на территорию и в подъезд со своим
											смартфоном
										</div>
									</div>
								</div>
							</li>
							<li class="feature-props__item col-12 col-lg-6 wow fadeIn">
								<div class="feature-prop">
									<div class="feature-prop__ico">
										<div class="circle-ico">
											<i class="icm icm-diamond"></i>
										</div>
									</div>
									<div class="feature-prop__text">
										<h4 class="h h_s mb-1">Телефон – единый идентификатор
											<br>
											в рамках всего объекта
										</h4>
										<div class="feature-prop__desc muted500">С помощью цифровых ключей в смартфоне
											открываются двери подъезда, калитки ограждения, шлагбаумы, ворота парковки,
											вызываются лифты
										</div>
									</div>
								</div>
							</li>
							<li class="feature-props__item col-12 col-lg-6 wow fadeIn">
								<div class="feature-prop">
									<div class="feature-prop__ico">
										<div class="circle-ico">
											<i class="icm icm-lock"></i>
										</div>
									</div>
									<div class="feature-prop__text">
										<h4 class="h h_s mb-1">Безопасная аутентификация
											<br>
											по смартфону
										</h4>
										<div class="feature-prop__desc muted500">Цифровые ключи надежно защищены
											криптографическим протоколом
										</div>
									</div>
								</div>
							</li>
							<li class="feature-props__item col-12 col-lg-6 wow fadeIn">
								<div class="feature-prop">
									<div class="feature-prop__ico">
										<div class="circle-ico">
											<i class="icm icm-hand"></i>
										</div>
									</div>
									<div class="feature-prop__text">
										<h4 class="h h_s mb-1">Бесключевой доступ
											<br>
											«свободные руки»
										</h4>
										<div class="feature-prop__desc muted500">Открытие дверей и шлагбаумов по
											приближению без необходимости доставать смартфон
										</div>
									</div>
								</div>
							</li>
							<li class="feature-props__item col-12 col-lg-6 wow fadeIn">
								<div class="feature-prop">
									<div class="feature-prop__ico">
										<div class="circle-ico">
											<i class="icm icm-admin"></i>
										</div>
									</div>
									<div class="feature-prop__text">
										<h4 class="h h_s mb-1">Администрирование и логи доступа
											<br>
											в облачном личном кабинете
										</h4>
										<div class="feature-prop__desc muted500">Система позволяет полностью
											контролировать наличие прав доступа и срок их действия у пользователей, а
											также фиксировать факты прохода или проезда, не требуя установки отдельного
											сервера. Вся функциональность доступна в личном кабинете в web-браузере.
										</div>
									</div>
								</div>
							</li>
							<li class="feature-props__item col-12 col-lg-6 wow fadeIn">
								<div class="feature-prop">
									<div class="feature-prop__ico">
										<div class="circle-ico">
											<i class="icm icm-factory"></i>
										</div>
									</div>
									<div class="feature-prop__text">
										<h4 class="h h_s mb-1">Легкая адаптация системы
											<br>
											для любых объектов
										</h4>
										<div class="feature-prop__desc muted500">Система можно установить на любые
											объекты — от частного дома до большого завода.
										</div>
									</div>
								</div>
							</li>
						</ul>
					</div>
				</div>
			</li>
		</ul>
	</div>
</section>
<section class="outer-container mb-1 mb-sm-4">
	<div class="more-block">
		<div class="container">
			<div class="more-block__inner">
				<div class="more-block__image wow fadeInLeft">
					<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/more-block-image.png" alt="">
				</div>
				<div class="more-block__text wow fadeIn">
					<h2 class="h h_l h_light mb-2">Хотите больше узнать о системе SmartAirkey?</h2>
					<p>Заполните форму обратной связи, и мы свяжемся с вами в течение нескольких минут</p>
					<a class="fancybox btn btn_primary" href="#giveContacts">Узнать больше</a>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="outer-container py-3">
	<div class="container">
		<div class="row">
			<div class="col-12 col-lg-6 pr-md-5 mb-2 mb-sm-3 about-header wow fadeInLeft">
				<h2 class="h h_l mb-2">О компании</h2>
				<div class="default-content">
					<p>SmartAirkey — передовая компания, занимающаяся разработками высокотехнологичных систем контроля
						доступа с помощью современных смартфонов.
					</p>
				</div>
			</div>
			<div class="col-12 col-lg-6 pt-1">
				<div class="image-text mb-1 wow fadeInRight">
					<div class="image-text__image">
						<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/about-1.jpg" alt="">
					</div>
					<div class="image-text__text default-content">
						<h3 class="h h_m">Startup Village</h3>
						<p>SmartAirkey оказался в 2016 году в числе 100 лучших инновационных проектов, отобранных для
							участия STARTUP BAZAAR среди нескольких тысяч заявок.
						</p>
					</div>
				</div>
				<div class="image-text wow fadeInRight">
					<div class="image-text__image">
						<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/about-2.jpg" alt="">
					</div>
					<div class="image-text__text default-content">
						<h3 class="h h_m">Сколково</h3>
						<p>Разработка системы осуществляется при грантовой поддержке Фонда «Сколково»</p>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="outer-container pt-3">
	<div class="container">
		<h2 class="h h_l mb-4">Нашей системе доверяют</h2>
		<ul class="row ns">
			<li class="col-4 col-md-2 d-flex mb-2">
				<div class="partner-item wow fadeInUp" data-wow-delay="0">
					<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/partner1.png" alt="lg">
				</div>
			</li>
			<li class="col-4 col-md-2 d-flex mb-2">
				<div class="partner-item wow fadeInUp" data-wow-delay=".2s">
					<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/partner2.png" alt="asus">
				</div>
			</li>
			<li class="col-4 col-md-2 d-flex mb-2">
				<div class="partner-item wow fadeInUp" data-wow-delay=".4s">
					<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/partner3.png" alt="samsung">
				</div>
			</li>
			<li class="col-4 col-md-2 d-flex mb-2">
				<div class="partner-item wow fadeInUp" data-wow-delay=".6s">
					<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/partner4.png" alt="sony">
				</div>
			</li>
			<li class="col-4 col-md-2 d-flex mb-2">
				<div class="partner-item wow fadeInUp" data-wow-delay=".8s">
					<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/partner5.png" alt="google">
				</div>
			</li>
			<li class="col-4 col-md-2 d-flex mb-2">
				<div class="partner-item wow fadeInUp" data-wow-delay="1s">
					<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/partner6.png" alt="acer">
				</div>
			</li>
		</ul>
	</div>
</section>
<section class="outer-container py-3 mb-1">
	<div class="container about-features">
		<div class="ta-center">
			<h2 class="h h_l mb-2">О системе</h2>
			<div class="h-desc">Система SmartAirkey состоит из трех компонентов</div>
		</div>
		<div class="row" data-swiper-container>
			<div class="slider-navigation slider-navigation_centered d-md-none">
				<div class="slider-btn" data-prev>
					<i class="icm icm-arrow rotate-180"></i>
				</div>
				<div class="slider-btn" data-next>
					<i class="icm icm-arrow"></i>
				</div>
			</div>
			<div class="col-6 col-lg-4 d-flex mb-2 mb-lg-0" data-swiper-slide>
				<div class="about-feature wow fadeInUp" data-wow-delay="">
					<div class="about-feature__ico">
						<i class="icm icm-controller"></i>
					</div>
					<h3 class="h h_xs about-feature__header">Контроллер мобильного доступа</h3>
					<div class="default-content">
						<ul>
							<li>Устанавливается на различные точки доступа: двери, шлагбаумы, ворота</li>
							<li>Считывает мобильные цифровые ключи и карты доступа (Mifare или Emarin)</li>
							<li>При отсутствии СКУД работает в автономном режиме, при использовании СКУД – интегрируется
								в нее
							</li>
						</ul>
					</div>
					<div class="about-feature__detail">
						<div class="default-content mb-4">
							<div class="h h_m">Контроллер мобильного доступа</div>
							<p>Особенностями бизнес-центров и административных зданий являются большие размеры, наличие
								прилегающей территории и парковок, множество технических помещений, а также
								распределённая структура арендаторов или департаментов.
							</p>
							<p>Система SmartAirkey упростит управление гостевым доступом в офисный центр и на парковку с
								помощью цифровых ключей. Стандартная интеграция с существующими СКУД доступ по времени и
								уровню не потребуют дополнительных расходов.
							</p>
						</div>
						<a class="fancybox btn btn_primary" href="#giveContacts">Заказать</a>
					</div>
					<button class="btn btn_bd mt-auto about-feature__btn">Подробнее</button>
				</div>
			</div>
			<div class="col-6 col-lg-4 d-flex mb-2 mb-lg-0" data-swiper-slide>
				<div class="about-feature wow fadeInUp" data-wow-delay=".2s">
					<div class="about-feature__ico">
						<i class="icm icm-cloud"></i>
					</div>
					<h3 class="h h_xs about-feature__header">Облачный сервис</h3>
					<div class="default-content">
						<ul>
							<li>Позволяет полностью управлять правами доступа с помощью выдачи, изменения и удаления
								цифровых ключей
							</li>
							<li>Позволяет администрировать точки доступа и пользователей</li>
							<li>Позволяет просматривать логи доступа</li>
							<li>Имеет развитый API для интеграции с системами учета управляющих компаний, контроля
								доступа, приложениями для жильцов.
							</li>
						</ul>
					</div>
					<div class="about-feature__detail">
						<div class="default-content mb-4">
							<div class="h h_m">Мобильное приложение</div>
							<p>Особенностями бизнес-центров и административных зданий являются большие размеры, наличие
								прилегающей территории и парковок, множество технических помещений, а также
								распределённая структура арендаторов или департаментов.
							</p>
							<p>Система SmartAirkey упростит управление гостевым доступом в офисный центр и на парковку с
								помощью цифровых ключей. Стандартная интеграция с существующими СКУД доступ по времени и
								уровню не потребуют дополнительных расходов.
							</p>
						</div>
						<a class="fancybox btn btn_primary" href="#giveContacts">Заказать</a>
					</div>
					<button class="btn btn_bd mt-auto about-feature__btn">Подробнее</button>
				</div>
			</div>
			<div class="col-6 col-lg-4 d-flex mb-2 mb-lg-0" data-swiper-slide>
				<div class="about-feature wow fadeInUp" data-wow-delay=".4s">
					<div class="about-feature__ico">
						<i class="icm icm-app">
							<div class="ta-center"></div>
						</i>
					</div>
					<h3 class="h h_xs about-feature__header">Мобильное приложение</h3>
					<div class="default-content mb-1">
						<ul>
							<li>Позволяет пользователям открывать двери и шлагбаумы по приближению, не доставая
								смартфона
							</li>
							<li>Позволяет хранить ключи от жилого комплекса, офиса, парковки, коттеджа и квартиры в
								одном приложении
							</li>
							<li>Позволяет в пару кликов отправлять временные гостевые ключи</li>
							<li>Администратору доступа позволяет настраивать и обновлять контроллеры SmartAirkey</li>
						</ul>
					</div>
					<div class="about-feature__detail">
						<div class="default-content mb-4">
							<div class="h h_m">Сервис управления цифровыми ключами</div>
							<p>Особенностями бизнес-центров и административных зданий являются большие размеры, наличие
								прилегающей территории и парковок, множество технических помещений, а также
								распределённая структура арендаторов или департаментов.
							</p>
							<p>Система SmartAirkey упростит управление гостевым доступом в офисный центр и на парковку с
								помощью цифровых ключей. Стандартная интеграция с существующими СКУД доступ по времени и
								уровню не потребуют дополнительных расходов.
							</p>
						</div>
						<a class="fancybox btn btn_primary" href="#giveContacts">Заказать</a>
					</div>
					<button class="btn btn_bd mt-auto about-feature__btn">Подробнее</button>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="outer-container py-3">
	<div class="container">
		<h2 class="h h_l ta-center mb-4">Нашей компанией была разработана система
			<br>
			на основе уникальных контроллеров
		</h2>
		<div class="product-slider js-swiper wow fadeInUp">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<div class="product-slide">
							<div class="row">
								<div class="col product-slide__image">
									<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/product-slider-image.jpg" alt="">
								</div>
								<div class="col pr-lg-5 pr-1">
									<div class="default-content mb-4">
										<h3 class="h h_m mb-2">Контроллер SmartAirkey</h3>
										<p>Контроллер доступа SmartAirkey SmartLock предназначен для контроля и
											управления доступом при помощи смартфона и представляет собой
											микропроцессорное электронное устройство. Контроллер может использоваться
											для управления доступом через двери, шлагбаумы, турникеты и другие средства
											ограничения доступа как самостоятельно, так и в составе Системы контроля и
											управления доступом.
										</p>
										<p>Система бесконтактного доступа SmartAirkey может использоваться в жилых
											комплексах, в загородных домах, в коттеджах, при оснащении умных домов, в
											коттеджных и дачных поселках, на парковках и автостоянках, в бизнес-центрах
											и офисах. Везде, где необходимо обеспечить бесключевой доступ «свободные
											руки».
										</p>
									</div>
									<div class="row product-slide__price-block">
										<div class="col-auto">
											<div class="product-slide__price">12 000 р.</div>
										</div>
										<div class="col">
											<a class="fancybox btn btn_primary" href="#giveContacts">Купить</a>
										</div>
									</div>
								</div>
								<div class="col-auto d-none d-md-block">
									<h4 class="h h_s mb-2">Характеристики</h4>
									<div class="props-images mb-1">
										<div class="props-images__item">
											<i class="icm icm-wifi"></i>
										</div>
										<div class="props-images__item">
											<i class="icm icm-bluetooth"></i>
										</div>
										<div class="props-images__item">
											<i class="icm icm-bluetooth__le"></i>
										</div>
									</div>
									<ul class="props-list">
										<li>1 реле (до 7А, 220V)</li>
										<li>Питание 9-16v</li>
										<li>Корпус DIN 6</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="product-slide">
							<div class="row">
								<div class="col product-slide__image">
									<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/product-slider-image.jpg" alt="">
								</div>
								<div class="col pr-lg-5 pr-1">
									<div class="default-content mb-4">
										<h3 class="h h_m mb-2">Контроллер SmartAirkey</h3>
										<p>Контроллер доступа SmartAirkey SmartLock предназначен для контроля и
											управления доступом при помощи смартфона и представляет собой
											микропроцессорное электронное устройство. Контроллер может использоваться
											для управления доступом через двери, шлагбаумы, турникеты и другие средства
											ограничения доступа как самостоятельно, так и в составе Системы контроля и
											управления доступом.
										</p>
										<p>Система бесконтактного доступа SmartAirkey может использоваться в жилых
											комплексах, в загородных домах, в коттеджах, при оснащении умных домов, в
											коттеджных и дачных поселках, на парковках и автостоянках, в бизнес-центрах
											и офисах. Везде, где необходимо обеспечить бесключевой доступ «свободные
											руки».
										</p>
									</div>
									<div class="row product-slide__price-block">
										<div class="col-auto">
											<div class="product-slide__price">12 000 р.</div>
										</div>
										<div class="col">
											<a class="fancybox btn btn_primary" href="#giveContacts">Купить</a>
										</div>
									</div>
								</div>
								<div class="col-auto d-none d-md-block">
									<h4 class="h h_s mb-2">Характеристики</h4>
									<div class="props-images mb-1">
										<div class="props-images__item">
											<i class="icm icm-wifi"></i>
										</div>
										<div class="props-images__item">
											<i class="icm icm-bluetooth"></i>
										</div>
										<div class="props-images__item">
											<i class="icm icm-bluetooth__le"></i>
										</div>
									</div>
									<ul class="props-list">
										<li>1 реле (до 7А, 220V)</li>
										<li>Питание 9-16v</li>
										<li>Корпус DIN 6</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="product-slide">
							<div class="row">
								<div class="col product-slide__image">
									<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/product-slider-image.jpg" alt="">
								</div>
								<div class="col pr-lg-5 pr-1">
									<div class="default-content mb-4">
										<h3 class="h h_m mb-2">Контроллер SmartAirkey</h3>
										<p>Контроллер доступа SmartAirkey SmartLock предназначен для контроля и
											управления доступом при помощи смартфона и представляет собой
											микропроцессорное электронное устройство. Контроллер может использоваться
											для управления доступом через двери, шлагбаумы, турникеты и другие средства
											ограничения доступа как самостоятельно, так и в составе Системы контроля и
											управления доступом.
										</p>
										<p>Система бесконтактного доступа SmartAirkey может использоваться в жилых
											комплексах, в загородных домах, в коттеджах, при оснащении умных домов, в
											коттеджных и дачных поселках, на парковках и автостоянках, в бизнес-центрах
											и офисах. Везде, где необходимо обеспечить бесключевой доступ «свободные
											руки».
										</p>
									</div>
									<div class="row product-slide__price-block">
										<div class="col-auto">
											<div class="product-slide__price">12 000 р.</div>
										</div>
										<div class="col">
											<a class="fancybox btn btn_primary" href="#giveContacts">Купить</a>
										</div>
									</div>
								</div>
								<div class="col-auto d-none d-md-block">
									<h4 class="h h_s mb-2">Характеристики</h4>
									<div class="props-images mb-1">
										<div class="props-images__item">
											<i class="icm icm-wifi"></i>
										</div>
										<div class="props-images__item">
											<i class="icm icm-bluetooth"></i>
										</div>
										<div class="props-images__item">
											<i class="icm icm-bluetooth__le"></i>
										</div>
									</div>
									<ul class="props-list">
										<li>1 реле (до 7А, 220V)</li>
										<li>Питание 9-16v</li>
										<li>Корпус DIN 6</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
					<div class="swiper-slide">
						<div class="product-slide">
							<div class="row">
								<div class="col product-slide__image">
									<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/product-slider-image.jpg" alt="">
								</div>
								<div class="col pr-lg-5 pr-1">
									<div class="default-content mb-4">
										<h3 class="h h_m mb-2">Контроллер SmartAirkey</h3>
										<p>Контроллер доступа SmartAirkey SmartLock предназначен для контроля и
											управления доступом при помощи смартфона и представляет собой
											микропроцессорное электронное устройство. Контроллер может использоваться
											для управления доступом через двери, шлагбаумы, турникеты и другие средства
											ограничения доступа как самостоятельно, так и в составе Системы контроля и
											управления доступом.
										</p>
										<p>Система бесконтактного доступа SmartAirkey может использоваться в жилых
											комплексах, в загородных домах, в коттеджах, при оснащении умных домов, в
											коттеджных и дачных поселках, на парковках и автостоянках, в бизнес-центрах
											и офисах. Везде, где необходимо обеспечить бесключевой доступ «свободные
											руки».
										</p>
									</div>
									<div class="row product-slide__price-block">
										<div class="col-auto">
											<div class="product-slide__price">12 000 р.</div>
										</div>
										<div class="col">
											<a class="fancybox btn btn_primary" href="#giveContacts">Купить</a>
										</div>
									</div>
								</div>
								<div class="col-auto d-none d-md-block">
									<h4 class="h h_s mb-2">Характеристики</h4>
									<div class="props-images mb-1">
										<div class="props-images__item">
											<i class="icm icm-wifi"></i>
										</div>
										<div class="props-images__item">
											<i class="icm icm-bluetooth"></i>
										</div>
										<div class="props-images__item">
											<i class="icm icm-bluetooth__le"></i>
										</div>
									</div>
									<ul class="props-list">
										<li>1 реле (до 7А, 220V)</li>
										<li>Питание 9-16v</li>
										<li>Корпус DIN 6</li>
									</ul>
								</div>
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slider-navigation slider-navigation_centered">
				<div class="slider-btn" data-prev>
					<i class="icm icm-arrow rotate-180"></i>
				</div>
				<div class="slider-btn" data-next>
					<i class="icm icm-arrow"></i>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="outer-container py-3">
	<div class="container how-use">
		<div class="how-use__header wow fadeInLeft">
			<h2 class="h h_l mb-3">Мобильные приложения</h2>
			<div class="default-content mb-3">
				<p>Наше мобильное приложение специально разработано для платформ IOS и Android. При создании системы мы
					использовали передовые технологии. Такой подход позволяет нам открывать новые возможности СКУД и
					расширять их функционал.
				</p>
			</div>
		</div>
		<div class="how-use__bottom">
			<div class="how-use__image wow fadeInRight">
				<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/phone.png" alt="">
			</div>
			<div class="how-use__bottom-left wow fadeInLeft">
				<h3 class="h h_m mb-4">Как пользоваться приложением?</h3>
				<ol class="how-use__list">
					<li class="how-use__item">
						<div class="how-use__title">Скачайте приложение</div>
						<p class="how-use__text">Скачайте приложение в Google Play или App Store</p>
						<div class="how-use__btns">
							<?if($googleplayLink):?>
							<a class="app-btn" href="<?=$googleplayLink;?>">
								<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/google-play.png" alt="GooglePlay">
							</a>
							<?endif;?>
							<?if($appstoreLink):?>
							<a class="app-btn" href="<?=$appstoreLink;?>">
								<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/app-store.png" alt="Appstore">
							</a>
							<?endif;?>
						</div>
					</li>
					<li class="how-use__item">
						<div class="how-use__title">Регистрация</div>
						<p class="how-use__text">Зарегистрируйтесь в приложении.</p>
					</li>
					<li class="how-use__item">
						<div class="how-use__title">Бесключевой доступ</div>
						<p class="how-use__text">Пользуйтесь бесключевым доступом.</p>
					</li>
				</ol>
			</div>
		</div>
	</div>
</section>
<section class="outer-container py-3 mobile-text-center">
	<div class="container">
		<div class="row mb-4 mb-lg-6">
			<div class="col-12 col-lg-6">
				<h2 class="h h_l mb-2">Монтаж</h2>
				<div class="default-content">
					<p>Устанавливаем системы SmartAirkey качественно и быстро. При установке мы ориентируемся на
						тонкости работы объекта и гарантируем дальнейшее обслуживание и поддержку.
					</p>
				</div>
			</div>
			<div class="col d-none d-md-block"></div>
		</div>
		<div class="row">
			<div class="col-12 col-md-6 col-lg mb-2 mb-md-4 mb-lg-0">
				<div class="install-item wow fadeInUp" data-wow-delay=".5s">
					<div class="install-item__ico">
						<i class="icm icm-pro"></i>
					</div>
					<div class="install-item__col">
						<div class="install-item__title">Профессионально</div>
						<div class="default-content">Наши работники имеют соответствующие сертификаты для работы с
							оборудованием.
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg mb-2 mb-md-4 mb-lg-0">
				<div class="install-item wow fadeInUp" data-wow-delay=".4s">
					<div class="install-item__ico">
						<i class="icm icm-warranty"></i>
					</div>
					<div class="install-item__col">
						<div class="install-item__title">Гарантийное постобслуживание</div>
						<div class="default-content">В течение года обслуживание бесплатно.</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg mb-2 mb-md-4 mb-lg-0">
				<div class="install-item wow fadeInUp" data-wow-delay=".2s">
					<div class="install-item__ico">
						<i class="icm icm-system"></i>
					</div>
					<div class="install-item__col">
						<div class="install-item__title">Учет особенностей объекта</div>
						<div class="default-content">Мы устанавливаем СКУД на разные типы объектов, у вас частный
							случай, то мы с ним справимся.
						</div>
					</div>
				</div>
			</div>
			<div class="col-12 col-md-6 col-lg mb-2 mb-md-4 mb-lg-0">
				<div class="install-item wow fadeInUp" data-wow-delay="0">
					<div class="install-item__ico">
						<i class="icm icm-special"></i>
					</div>
					<div class="install-item__col">
						<div class="install-item__title">Учет особенностей SmartAirKey</div>
						<div class="default-content">В течение года обслуживание бесплатно.</div>
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="outer-container mb-3">
	<div class="more-block">
		<div class="container">
			<div class="more-block__inner">
				<div class="more-block__text wow fadeInLeft">
					<h2 class="h h_l h_light mb-2">Остались вопросы о системе SmartAirKey?</h2>
					<p>Оставьте ваши контакты и наш специалист ответит на них</p>
					<a class="fancybox btn btn_primary" href="#giveContacts">Оставить контакты</a>
				</div>
				<div class="more-block__image wow fadeInRight">
					<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/more-block-image2.png" alt="">
				</div>
			</div>
		</div>
	</div>
</section>
<section class="outer-container py-4">
	<div class="container">
		<h2 class="h h_l mb-4 ta-center">Выполненные проекты</h2>
		<div class="js-swiper wow fadeInUp" data-items="3">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<a class="post-item" href="#">
							<div class="post-item__image">
								<img class="img-responsive" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/carousel-image.jpg" alt="">
							</div>
							<div class="post-item__title">Бесключевой доступ в Сколково</div>
						</a>
					</div>
					<div class="swiper-slide">
						<a class="post-item" href="#">
							<div class="post-item__image">
								<img class="img-responsive" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/carousel-image.jpg" alt="">
							</div>
							<div class="post-item__title">Бесключевой доступ в Сколково</div>
						</a>
					</div>
					<div class="swiper-slide">
						<a class="post-item" href="#">
							<div class="post-item__image">
								<img class="img-responsive" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/carousel-image.jpg" alt="">
							</div>
							<div class="post-item__title">Бесключевой доступ в Сколково</div>
						</a>
					</div>
					<div class="swiper-slide">
						<a class="post-item" href="#">
							<div class="post-item__image">
								<img class="img-responsive" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/carousel-image.jpg" alt="">
							</div>
							<div class="post-item__title">Бесключевой доступ в Сколково</div>
						</a>
					</div>
					<div class="swiper-slide">
						<a class="post-item" href="#">
							<div class="post-item__image">
								<img class="img-responsive" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/carousel-image.jpg" alt="">
							</div>
							<div class="post-item__title">Бесключевой доступ в Сколково</div>
						</a>
					</div>
				</div>
			</div>
			<div class="slider-navigation slider-navigation_centered">
				<div class="slider-btn" data-prev>
					<i class="icm icm-arrow rotate-180"></i>
				</div>
				<div class="slider-btn" data-next>
					<i class="icm icm-arrow"></i>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="outer-container py-4">
	<div class="container">
		<h2 class="h h_l mb-lg-4 mb-0">Вопросы</h2>
		<div class="faq-list mb-4">
			<div class="faq-item wow fadeIn">
				<div class="faq-item__quest">
					<span>Владельцы, подскажите мне пожалуйста, сколько с машиной идет ключей Smart key в комплекте один или два? И где можно прочитать что это такое и на сколько надежно от угона.</span>
					<div class="faq-item__toggler">
						<span></span>
						<span></span>
					</div>
				</div>
				<div class="faq-item__answer">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates vero,
					nesciunt eaque facere provident hic adipisci rerum corrupti autem nostrum unde aliquam repellendus!
					Excepturi ipsum optio quos exercitationem commodi nemo?
				</div>
			</div>
			<div class="faq-item wow fadeIn">
				<div class="faq-item__quest">
					<span>Владельцы, подскажите мне пожалуйста, сколько с машиной идет ключей Smart key в комплекте один или два? И где можно прочитать что это такое и на сколько надежно от угона.</span>
					<div class="faq-item__toggler">
						<span></span>
						<span></span>
					</div>
				</div>
				<div class="faq-item__answer">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates vero,
					nesciunt eaque facere provident hic adipisci rerum corrupti autem nostrum unde aliquam repellendus!
					Excepturi ipsum optio quos exercitationem commodi nemo?
				</div>
			</div>
			<div class="faq-item wow fadeIn">
				<div class="faq-item__quest">
					<span>Владельцы, подскажите мне пожалуйста, сколько с машиной идет ключей Smart key в комплекте один или два? И где можно прочитать что это такое и на сколько надежно от угона.</span>
					<div class="faq-item__toggler">
						<span></span>
						<span></span>
					</div>
				</div>
				<div class="faq-item__answer">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates vero,
					nesciunt eaque facere provident hic adipisci rerum corrupti autem nostrum unde aliquam repellendus!
					Excepturi ipsum optio quos exercitationem commodi nemo?
				</div>
			</div>
			<div class="faq-item wow fadeIn">
				<div class="faq-item__quest">
					<span>Владельцы, подскажите мне пожалуйста, сколько с машиной идет ключей Smart key в комплекте один или два? И где можно прочитать что это такое и на сколько надежно от угона.</span>
					<div class="faq-item__toggler">
						<span></span>
						<span></span>
					</div>
				</div>
				<div class="faq-item__answer">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates vero,
					nesciunt eaque facere provident hic adipisci rerum corrupti autem nostrum unde aliquam repellendus!
					Excepturi ipsum optio quos exercitationem commodi nemo?
				</div>
			</div>
			<div class="faq-item wow fadeIn">
				<div class="faq-item__quest">
					<span>Владельцы, подскажите мне пожалуйста, сколько с машиной идет ключей Smart key в комплекте один или два? И где можно прочитать что это такое и на сколько надежно от угона.</span>
					<div class="faq-item__toggler">
						<span></span>
						<span></span>
					</div>
				</div>
				<div class="faq-item__answer">Lorem ipsum dolor sit amet consectetur adipisicing elit. Voluptates vero,
					nesciunt eaque facere provident hic adipisci rerum corrupti autem nostrum unde aliquam repellendus!
					Excepturi ipsum optio quos exercitationem commodi nemo?
				</div>
			</div>
		</div>
		<div class="faq-buttons wow fadeInUp">
			<a class="btn btn_bd" href="#">Показать весь список</a>
			<a class="fancybox btn btn_light" href="#sendQuest">Задать вопрос</a>
		</div>
	</div>
</section>
<section class="outer-container py-4 mb-1">
	<div class="container">
		<h2 class="h h_l mb-3">Новости</h2>
		<div class="js-swiper wow fadeInUp" data-items="3">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide">
						<a class="post-item fancybox" href="#modalArticle">
							<div class="post-item__image">
								<img class="img-responsive" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/carousel-image.jpg" alt="">
							</div>
							<div class="post-item__title">Бесключевой доступ в Сколково</div>
							<div class="post-item__date">14 октября</div>
						</a>
					</div>
					<div class="swiper-slide">
						<a class="post-item fancybox" href="#modalArticle">
							<div class="post-item__image">
								<img class="img-responsive" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/carousel-image.jpg" alt="">
							</div>
							<div class="post-item__title">Бесключевой доступ в Сколково</div>
							<div class="post-item__date">14 октября</div>
						</a>
					</div>
					<div class="swiper-slide">
						<a class="post-item fancybox" href="#modalArticle">
							<div class="post-item__image">
								<img class="img-responsive" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/carousel-image.jpg" alt="">
							</div>
							<div class="post-item__title">Бесключевой доступ в Сколково</div>
							<div class="post-item__date">14 октября</div>
						</a>
					</div>
					<div class="swiper-slide">
						<a class="post-item fancybox" href="#modalArticle">
							<div class="post-item__image">
								<img class="img-responsive" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/carousel-image.jpg" alt="">
							</div>
							<div class="post-item__title">Бесключевой доступ в Сколково</div>
							<div class="post-item__date">14 октября</div>
						</a>
					</div>
					<div class="swiper-slide">
						<a class="post-item fancybox" href="#modalArticle">
							<div class="post-item__image">
								<img class="img-responsive" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/carousel-image.jpg" alt="">
							</div>
							<div class="post-item__title">Бесключевой доступ в Сколково</div>
							<div class="post-item__date">14 октября</div>
						</a>
					</div>
				</div>
			</div>
			<div class="slider-navigation slider-navigation_centered">
				<div class="slider-btn" data-prev>
					<i class="icm icm-arrow rotate-180"></i>
				</div>
				<div class="slider-btn" data-next>
					<i class="icm icm-arrow"></i>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="outer-container my-md-3">
	<div class="home-map">
		<div class="home-map__map">
			<img id="map" src="<?= SITE_TEMPLATE_PATH ?>/assets/img/map.jpg">
		</div>
		<div class="home-map__contacts wow fadeInLeft" data-wow-offset="400">
			<div class="container">
				<div class="contacts-map">
					<h2 class="h h_l mb-3">Контакты</h2>
					<div class="default-content mb-2 mb-md-6">
						<p class="mb-2">117246, г. Москва,
							<br>
							Научный проезд, д. 8, стр. 1.
						</p>
						<ul class="ns">
							<li>
								<i class="icm icm-phone text-muted100 mr-1"></i>
								<span>8 (495) 150 66 25</span>
							</li>
							<li>
								<i class="icm icm-mail text-muted100 mr-1"></i>
								<span>info@smartairkey.com</span>
							</li>
							<li>
								<i class="icm icm-clock text-muted100 mr-1"></i>
								<span>Пн-Пт: 10:00 - 20:00</span>
							</li>
						</ul>
					</div>
					<ul class="social">
						<li class="social__item">
							<a class="social__link" href="#">
								<i class="icm icm-fb"></i>
							</a>
						</li>
						<li class="social__item">
							<a class="social__link" href="#">
								<i class="icm icm-vk"></i>
							</a>
						</li>
						<li class="social__item">
							<a class="social__link" href="#">
								<i class="icm icm-telegram"></i>
							</a>
						</li>
						<li class="social__item">
							<a class="social__link" href="#">
								<i class="icm icm-insta"></i>
							</a>
						</li>
					</ul>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="outer-container py-4">
	<div class="container">
		<h2 class="h h_l ta-center mb-3">Приглашаем к сотрудничеству партнеров</h2>
		<div class="h-desc ta-center">Мы производим высокотехнологичное оборудование SmartAirkey</div>
		<div class="row">
			<div class="col-lg-4 d-flex flex-column justify-content-center mobile-text-center mb-3 mb-lg-0 wow fadeInLeft">
				<h3 class="h_m mb-4">Эксклюзивные условия поставок</h3>
				<div class="default-content">
					<p>Выбирая SmartAirkey, вы предлагайте своим клиентам перспективные продукты и решения. Начните
						продажу SmartAirkey в своем городе и получите эксклюзивные условия поставок - успейте первыми
						предложить новый продукт своим клиентам.
					</p>
				</div>
			</div>
			<div class="mb-2 mb-md-0 col-12 col-md-6 col-lg-4 d-flex">
				<div class="ico-block wow fadeInRight">
					<div class="ico-block__ico">
						<i class="icm icm-update"></i>
					</div>
					<div class="ico-block__text">Система SmartAirkey совершенствует систему умного дома с помощью
						надежного и удобного бесключевого доступа
					</div>
				</div>
			</div>
			<div class="mb-2 mb-md-0 col-12 col-md-6 col-lg-4 d-flex">
				<div class="ico-block wow fadeInRight" data-wow-delay="0.2s">
					<div class="ico-block__ico">
						<i class="icm icm-integrate"></i>
					</div>
					<div class="ico-block__text">Легкая интеграция доступа с помощью цифровых ключей SmartAirkey в
						существующие СКУД для создания уникального продукта и повышения комфорта и удобства клиентов
					</div>
				</div>
			</div>
		</div>
	</div>
</section>
<section class="outer-container py-4 mb-2">
	<div class="container">
		<h2 class="h h_l ta-center">Истории успеха</h2>
		<div class="reviews js-swiper wow fadeInUp">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<div class="swiper-slide reviews__item">
						<div class="review">
							<div class="review__person review-person">
								<div class="review-person__photo">
									<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/person-photo.jpg" alt="">
								</div>
								<div class="review-person__name">Илья</div>
								<div class="review-person__who">Предприниматель</div>
							</div>
							<div class="review__header">Как мне помогла система Smart AirKey</div>
							<div class="review__dec"></div>
							<div class="review__text">В 2009 году Facebook отказалась взять на работу бывшего инженера
								Yahoo Эктона. Спустя пять лет социальная сеть Марка Цукерберга согласилась заплатить
								своему несостоявшемуся сотруднику более $3 млрд кэшем и акциями за его долю в мобильном
								мессенджере WhatsApp. Эктон — второй сооснователь сервиса, чья аудитория пробила планку
								в 600 млн пользователей.
							</div>
						</div>
					</div>
					<div class="swiper-slide reviews__item">
						<div class="review">
							<div class="review__person review-person">
								<div class="review-person__photo">
									<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/person-photo.jpg" alt="">
								</div>
								<div class="review-person__name">Илья</div>
								<div class="review-person__who">Предприниматель</div>
							</div>
							<div class="review__header">Как мне помогла система Smart AirKey</div>
							<div class="review__dec"></div>
							<div class="review__text">В 2009 году Facebook отказалась взять на работу бывшего инженера
								Yahoo Эктона. Спустя пять лет социальная сеть Марка Цукерберга согласилась заплатить
								своему несостоявшемуся сотруднику более $3 млрд кэшем и акциями за его долю в мобильном
								мессенджере WhatsApp. Эктон — второй сооснователь сервиса, чья аудитория пробила планку
								в 600 млн пользователей.
							</div>
						</div>
					</div>
					<div class="swiper-slide reviews__item">
						<div class="review">
							<div class="review__person review-person">
								<div class="review-person__photo">
									<img src="<?= SITE_TEMPLATE_PATH ?>/assets/img/person-photo.jpg" alt="">
								</div>
								<div class="review-person__name">Илья</div>
								<div class="review-person__who">Предприниматель</div>
							</div>
							<div class="review__header">Как мне помогла система Smart AirKey</div>
							<div class="review__dec"></div>
							<div class="review__text">В 2009 году Facebook отказалась взять на работу бывшего инженера
								Yahoo Эктона. Спустя пять лет социальная сеть Марка Цукерберга согласилась заплатить
								своему несостоявшемуся сотруднику более $3 млрд кэшем и акциями за его долю в мобильном
								мессенджере WhatsApp. Эктон — второй сооснователь сервиса, чья аудитория пробила планку
								в 600 млн пользователей.
							</div>
						</div>
					</div>
				</div>
			</div>
			<div class="slider-navigation slider-navigation_centered">
				<div class="slider-btn" data-prev>
					<i class="icm icm-arrow rotate-180"></i>
				</div>
				<div class="slider-btn" data-next>
					<i class="icm icm-arrow"></i>
				</div>
			</div>
		</div>
	</div>
</section>
