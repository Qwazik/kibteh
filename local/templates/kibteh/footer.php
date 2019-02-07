<?
use Bitrix\Main\Page\Asset;
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
?>
<footer class="main-footer">
	<div class="container">
		<div class="row">
			<div class="col-auto main-footer__logo"><a class="logo logo_small off-link" href="/"><img src="<?=$logo;?>" alt=""></a>
				<div class="copyright d-md-none">
					© <?=date('Y');?> Все права защищены
				</div>
			</div>
			<div class="col main-footer__nav">
				<?$APPLICATION->IncludeComponent(
					"bitrix:menu",
					"bottom",
					array(
						"ALLOW_MULTI_SELECT" => "N",
						"CHILD_MENU_TYPE" => "left",
						"COMPONENT_TEMPLATE" => "bottom",
						"DELAY" => "N",
						"MAX_LEVEL" => "1",
						"MENU_CACHE_GET_VARS" => array(
						),
						"MENU_CACHE_TIME" => "3600",
						"MENU_CACHE_TYPE" => "Y",
						"MENU_CACHE_USE_GROUPS" => "Y",
						"ROOT_MENU_TYPE" => "bottom",
						"USE_EXT" => "N"
					),
					false
				);?>
			</div>
		</div>
	</div>
</footer>
<div class="modals">
	<div class="article-modal" id="modalArticle">
		<div class="modal__close" data-fancybox-close><i class="icm icm-plus"></i></div>
		<div class="article-modal__image">
            <img src="<?=SITE_TEMPLATE_PATH?>/assets/img/article-inner-image.jpg" alt="">
        </div>
		<div class="article-modal__text">
			<div class="default-content"></div>
		</div>
	</div>
	<div class="modal" id="emptyModal">
		<div class="modal__close" data-fancybox-close><i class="icm icm-plus"></i></div>
		<div class="modal__body"></div>
	</div>


	<div class="modal ta-center" id="giveContacts">
		<div class="modal__close" data-fancybox-close><i class="icm icm-plus"></i></div>
		<div class="modal__header">
			<div class="h h_m mb-2">Оставить контакты</div>
			<div class="h-desc">Напишите номер телефона и мы вам перезвоним за 10 минут</div>
		</div>
		<div class="modal__body">
			<form class="ajax-form form" action="#">
				<input type="hidden" name="form_event" value="feedback">
				<input type="hidden" name="form_subject" value="Оставить контакты">
				<div class="form-control">
					<label class="input">
						<span class="input__input">
                            <input name="name" type="name" placeholder="Василий" data-parsley-required>
							<span class="input__placeholder">Имя</span>
						</span>
					</label>
					<div class="input__error"></div>
				</div>
				<div class="form-control">
					<label class="input"><span class="input__input">
                    <input name="tel" type="tel" placeholder="+7(___) ___-__-__" data-parsley-required data-parsley-pattern="/\+7\(\d{3}\) \d{3}-\d\d-\d\d/"><span class="input__placeholder">Телефон</span></span>
					</label>
					<div class="input__error"></div>
				</div>
				<button class="btn btn_primary mt-4">Оставить контакты</button>
			</form>
		</div>
	</div>

	<div class="modal ta-center" id="product">
		<div class="modal__close" data-fancybox-close><i class="icm icm-plus"></i></div>
		<div class="modal__header">
			<div class="h h_m mb-2">Заказ</div>
			<div class="h-desc">Напишите номер телефона и мы вам перезвоним за 10 минут</div>
		</div>
		<div class="modal__body">
			<form class="ajax-form form" action="#">
				<input type="hidden" name="form_event" value="product">
				<input type="hidden" name="form_subject" value="Заказ">
				<input type="hidden" name="product_name" value="">
				<div class="form-control">
					<label class="input">
						<span class="input__input">
                            <input name="name" type="name" placeholder="Василий" data-parsley-required>
							<span class="input__placeholder">Имя</span>
						</span>
					</label>
					<div class="input__error"></div>
				</div>
				<div class="form-control">
					<label class="input"><span class="input__input">
                    <input name="tel" type="tel" placeholder="+7(___) ___-__-__" data-parsley-required data-parsley-pattern="/\+7\(\d{3}\) \d{3}-\d\d-\d\d/"><span class="input__placeholder">Телефон</span></span>
					</label>
					<div class="input__error"></div>
				</div>
				<button class="btn btn_primary mt-4">Заказать</button>
			</form>
		</div>
	</div>

	<div class="modal ta-center" id="sendQuest">
		<div class="modal__close" data-fancybox-close><i class="icm icm-plus"></i></div>
		<div class="modal__header">
			<div class="h h_m mb-2">Оставьте ваш вопрос</div>
			<div class="h-desc">Наши менеджеры подробно ответят на ваш вопрос в ближайшее время</div>
		</div>
		<div class="modal__body">
			<form class="ajax-form form" action="#">
				<input type="hidden" name="form_event" value="quest">
				<input type="hidden" name="form_subject" value="Вопрос">
				<div class="form-control">
					<label class="input"><span class="input__input">
                                    <input name="name" type="name" placeholder="Василий" data-parsley-required><span class="input__placeholder">Имя</span></span></label>
					<div class="input__error"></div>
				</div>
				<div class="form-control">
					<label class="input"><span class="input__input">
                                     <input name="email" type="email" placeholder="mail@mail.ru" data-parsley-required><span class="input__placeholder">Почта</span></span></label>
					<div class="input__error"></div>
				</div>
				<div class="form-control">
					<label class="input"><span class="input__input">
                                    <input name="comment" type="test" data-parsley-required><span class="input__placeholder">Ваш вопрос</span></span></label>
					<div class="input__error"></div>
				</div>
				<button class="btn btn_primary mt-4">Отправить</button>
			</form>
		</div>
	</div>
	<div class="modal ta-center" id="login">
		<div class="modal__close" data-fancybox-close>
			<i class="icm icm-plus"></i>
		</div>
		<div class="modal__header">
			<div class="h h_m mb-2">Вход</div>
		</div>
		<div class="modal__body">
			<form class="ajax-form form" action="#">
				<div class="form-control">
					<label class="input"><span class="input__input">
                        <input name="name" type="name" placeholder="Василий" data-parsley-required><span class="input__placeholder">Логин</span></span></label>
					<div class="input__error"></div>
				</div>
				<div class="form-control">
					<label class="input"><span class="input__input">
                                     <input name="name" type="password" data-parsley-required><span class="input__placeholder">Пароль</span></span></label>
					<div class="input__error"></div>
				</div>
				<div class="form-add">
					<a href="#forget" class="fancybox-reopen">Забыл пароль</a>
					<a href="#register" class="fancybox-reopen">Регистрация</a>
				</div>
				<button class="btn btn_primary mt-4">Войти</button>
			</form>
		</div>
	</div>
	<div class="modal ta-center" id="register">
		<div class="modal__close" data-fancybox-close>
			<i class="icm icm-plus"></i>
		</div>
		<div class="modal__header">
			<div class="h h_m mb-2">Регистрация</div>
		</div>
		<div class="modal__body">
			<form class="ajax-form form" action="#">
				<div class="form-control">
					<label class="input"><span class="input__input">
                        <input name="name" type="name" data-parsley-required><span class="input__placeholder">Логин</span></span></label>
					<div class="input__error"></div>
				</div>
				<div class="form-control">
					<label class="input"><span class="input__input">
                                     <input name="name" type="password" data-parsley-required><span class="input__placeholder">Пароль</span></span></label>
					<div class="input__error"></div>
				</div>
				<div class="form-add">
					<a href="#forget" class="fancybox-reopen">Забыл пароль</a>
					<a href="#login" class="fancybox-reopen">Войти</a>
				</div>
				<button class="btn btn_primary mt-4">Зарегистрироваться</button>
			</form>
		</div>
	</div>

	<div class="modal ta-center" id="forget">
		<div class="modal__close" data-fancybox-close>
			<i class="icm icm-plus"></i>
		</div>
		<div class="modal__header">
			<div class="h h_m mb-2">Восстановление пароля</div>
		</div>
		<div class="modal__body">
			<form class="ajax-form form" action="#">
				<div class="form-control">
					<label class="input"><span class="input__input">
                        <input name="name" type="tel" data-parsley-required>
							<span class="input__placeholder">Логин</span>
						</span>
					</label>
					<div class="input__error"></div>
				</div>
				<div class="form-add">
					<a href="#login" class="fancybox-reopen">Войти</a>
					<a href="#register" class="fancybox-reopen">Регистрация</a>
				</div>
				<button class="btn btn_primary mt-4">Восстановить</button>
			</form>
		</div>
	</div>
</div>
</div>
<!--scripts =================================================-->
<?
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/assets/libs/jquery/dist/jquery.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/assets/libs/fancybox/dist/jquery.fancybox.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/assets/libs/swiper/dist/js/swiper.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/assets/libs/parsleyjs/dist/parsley.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/assets/libs/parsleyjs/dist/i18n/ru.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/assets/libs/parsleyjs/dist/i18n/ru.extra.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/assets/libs/jquery.maskedinput/dist/jquery.maskedinput.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/assets/libs/wow/dist/wow.min.js');
Asset::getInstance()->addJs(SITE_TEMPLATE_PATH.'/assets/js/custom.js');
?>
</body>
</html>
