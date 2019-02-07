<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
use Bitrix\Main\Page\Asset;
$email = \COption::GetOptionString( "askaron.settings", "UF_MAIN_EMAIL" );
$phone = \COption::GetOptionString( "askaron.settings", "UF_PHONE" );
$work_time = \COption::GetOptionString( "askaron.settings", "UF_WORK_TIME" );
$logo = CFile::GetPath(\COption::GetOptionString( "askaron.settings", "UF_LOGO" ));
?>
<!DOCTYPE html>
<html lang="<?=LANGUAGE_ID;?>">
	<head>
		<title><?$APPLICATION->ShowTitle();?></title>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1, max-scale=1">
		<link rel="shortcut icon" href="<?=SITE_TEMPLATE_PATH?>/favicon.ico">
		<link rel="apple-touch-icon" href="apple-touch-icon.png">

		<?
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/assets/libs/fancybox/dist/jquery.fancybox.min.css');
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/assets/libs/swiper/dist/css/swiper.min.css');
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/assets/fonts/icomoon/style.css');
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/assets/css/animate.css');
		Asset::getInstance()->addCss(SITE_TEMPLATE_PATH.'/assets/css/style.css');
		Asset::getInstance()->addString('<link rel="stylesheet" href="../../../html/build/css/style.css">');
		$APPLICATION->ShowHead();
		?>
	</head>
	<body>
		<div id="panel"><?$APPLICATION->ShowPanel();?></div>
		<!--[if lt IE 10]>
		<p class="browserupgrade">Ваш браузер  <strong>устарел</strong>. Пожалуйста <a href="http://browsehappy.com/">обновите ваш браузер</a> для корректного отображения сайтов.</p>
		<![endif]-->
		<div class="page" id="app">
			<header class="top-panel">
				<div class="top-panel__inner">
					<div class="container">
						<div class="row align-items-center">
							<h1 class="col-auto top-panel__logo">
								<a class="logo" href="/">
									<img src="<?=$logo;?>" alt="<?=$APPLICATION->GetTitle(false);?>">
								</a>
							</h1>
							<div class="col-auto">
								<div class="row flex-column">
									<div class="col-auto top-panel__social">
										<ul class="social">
											<li class="social__item"><a class="social__link" href="#"><i class="icm icm-fb"></i></a></li>
											<li class="social__item"><a class="social__link" href="#"><i class="icm icm-vk"></i></a></li>
											<li class="social__item"><a class="social__link" href="#"><i class="icm icm-telegram"></i></a></li>
											<li class="social__item"><a class="social__link" href="#"><i class="icm icm-insta"></i></a></li>
										</ul>
									</div>
									<div class="col-auto top-panel__lang">
										<div class="lang">
											<div class="lang__current">Рус</div>
											<div class="lang__list"><a class="lang__item" href="/en/">Eng</a></div>
										</div>
									</div>
								</div>
							</div>
							<div class="ml-auto col-auto top-panel__right">
								<div class="top-panel__right-top row align-items-center">
									<div class="top-panel__info">
										<div class="horizontal-contacts">
											<?if($phone):?>
											<div class="horizontal-contacts__item">
												<i class="icm icm-phone"></i>
												<span><?=$phone;?></span>
											</div>
											<?endif;?>
											<?if($email):?>
											<div class="horizontal-contacts__item d-none d-lg-block">
												<i class="icm icm-mail"></i>
												<span><?=$email;?></span>
											</div>
											<?endif;?>
											<?if($work_time):?>
											<div class="horizontal-contacts__item">
												<i class="icm icm-clock"></i>
												<span><?=$work_time;?></span>
											</div>
											<?endif;?>
										</div>
									</div>
									<div class="top-panel__auth col-auto ml-auto">
										<a class="auth-btn fancybox" href="#login">
											<span class="auth-btn__ico"><i class="icm icm-user"></i></span>
											<span class="auth-btn__title">Вход</span>
										</a>
									</div>
								</div>
								<div class="top-panel__right-bottom">
									<div class="top-panel__nav">
										<?
											$APPLICATION->IncludeComponent(
	"bitrix:menu", 
	"top", 
	array(
		"ALLOW_MULTI_SELECT" => "N",
		"CHILD_MENU_TYPE" => "left",
		"DELAY" => "N",
		"MAX_LEVEL" => "1",
		"MENU_CACHE_GET_VARS" => array(
		),
		"MENU_CACHE_TIME" => "3600",
		"MENU_CACHE_TYPE" => "Y",
		"MENU_CACHE_USE_GROUPS" => "Y",
		"ROOT_MENU_TYPE" => "top",
		"USE_EXT" => "N",
		"COMPONENT_TEMPLATE" => "top"
	),
	false
);
										?>
									</div>
									<div class="top-panel__mobile d-lg-none">
										<div class="mobile-nav-btn"><span></span><span></span><span></span></div>
									</div>
									<div class="top-panel__feedback">
										<a class="btn btn_bd top-panel__callback fancybox" href="#giveContacts">
											Заказать
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
