<?
if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true) die();
use Bitrix\Main\Page\Asset;
use Bitrix\Main\Localization\Loc;
Loc::loadMessages(__FILE__);
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
		<?=Loc::getMessage('Old_browser');?>
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
                                        <? $APPLICATION->IncludeComponent(
                                            "bitrix:news.list",
                                            "socials",
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
                                                "COMPONENT_TEMPLATE" => "socials",
                                                "DETAIL_URL" => "",
                                                "DISPLAY_BOTTOM_PAGER" => "N",
                                                "DISPLAY_DATE" => "N",
                                                "DISPLAY_NAME" => "Y",
                                                "DISPLAY_PICTURE" => "Y",
                                                "DISPLAY_PREVIEW_TEXT" => "N",
                                                "DISPLAY_TOP_PAGER" => "N",
                                                "FIELD_CODE" => array(0 => "",
                                                    1 => "",),
                                                "FILTER_NAME" => "",
                                                "HIDE_LINK_WHEN_NO_DETAIL" => "N",
                                                "IBLOCK_ID" => (LANGUAGE_ID==='en')?'34':'33',
                                                "IBLOCK_TYPE" => "landing_page",
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
                                                    0 => "ICO",
                                                    1 => "LINIK",
                                                    2 => "",
                                                ),
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
                                        ); ?>
									</div>
									<div class="col-auto top-panel__lang">
										<div class="lang">
											<?if(LANGUAGE_ID=='ru'):?>
												<div class="lang__current">Рус</div>
												<div class="lang__list"><a class="lang__item" href="/en/">Eng</a></div>
											<?else:?>
												<div class="lang__current">Eng</div>
												<div class="lang__list"><a class="lang__item" href="/">Рус</a></div>
											<?endif;?>
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
											<span class="auth-btn__title"><?=Loc::getMessage('Login');?></span>
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
											<?=Loc::getMessage('Form_btn');?>
										</a>
									</div>
								</div>
							</div>
						</div>
					</div>
				</div>
			</header>
