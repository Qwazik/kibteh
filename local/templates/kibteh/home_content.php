<?

$googleplayLink = \COption::GetOptionString(
	"askaron.settings",
	"UF_GOOGLEPLAY_LINK"
);
$appstoreLink = \COption::GetOptionString(
	"askaron.settings",
	"UF_APPSTORE_LINK"
);
$address = \COption::GetOptionString(
	"askaron.settings",
	"UF_ADDRESS"
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
				<div class="main-slider__header">
					<!-- START: main_slider_header -->
					<? $APPLICATION->IncludeComponent(
					    "bitrix:main.include",
					    "",
					    Array("AREA_FILE_SHOW" => "file",
					        "AREA_FILE_SUFFIX" => "inc",
					        "EDIT_TEMPLATE" => "",
					        "PATH" => SITE_TEMPLATE_PATH."/include_areas/main_slider_header.php")
					); ?>
					<!-- END: main_slider_header -->
				</div>
				<div class="main-slider__btns">
					<a class="btn btn_primary fancybox" href="#giveContacts">
						<!-- START: main_slider_btn_more -->
						<? $APPLICATION->IncludeComponent(
						    "bitrix:main.include",
						    "",
						    Array("AREA_FILE_SHOW" => "file",
						        "AREA_FILE_SUFFIX" => "inc",
						        "EDIT_TEMPLATE" => "",
						        "PATH" => SITE_TEMPLATE_PATH."/include_areas/main_slider_btn_more.php")
						); ?>
						<!-- END:  -->
					</a>
					<a class="btn btn_light btn_ico fancybox" href="https://www.youtube.com/watch?v=3dYouSEBKiU">
						<i class="icm icm-play"></i>
						<span>
							<!-- START: main_slider_btn_video -->
							<? $APPLICATION->IncludeComponent(
							    "bitrix:main.include",
							    "",
							    Array("AREA_FILE_SHOW" => "file",
							        "AREA_FILE_SUFFIX" => "inc",
							        "EDIT_TEMPLATE" => "",
							        "PATH" => SITE_TEMPLATE_PATH."/include_areas/main_slider_btn_video.php")
							); ?>
							<!-- END:  -->
						</span>
					</a>
				</div>
				<div class="main-slider__smalltext">
					<!-- START: main_slider_smalltext -->
					<? $APPLICATION->IncludeComponent(
					    "bitrix:main.include",
					    "",
					    Array("AREA_FILE_SHOW" => "file",
					        "AREA_FILE_SUFFIX" => "inc",
					        "EDIT_TEMPLATE" => "",
					        "PATH" => SITE_TEMPLATE_PATH."/include_areas/main_slider_smalltext.php")
					); ?>
					<!-- END: main_slider_smalltext -->
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
				<div class="main-slider__end">
					<!-- START: main_slider_end -->
					<? $APPLICATION->IncludeComponent(
					    "bitrix:main.include",
					    "",
					    Array("AREA_FILE_SHOW" => "file",
					        "AREA_FILE_SUFFIX" => "inc",
					        "EDIT_TEMPLATE" => "",
					        "PATH" => SITE_TEMPLATE_PATH."/include_areas/main_slider_end.php")
					); ?>
					<!-- END: main_slider_end -->
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
<?$APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"features", 
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
		"COMPONENT_TEMPLATE" => "features",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "Y",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "3",
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
		"PROPERTY_CODE" => array(
			0 => "ICON",
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
);?>
<?$APPLICATION->IncludeComponent(
	"qwalex:getelement",
	"more_block",
	Array(
		"COMPONENT_TEMPLATE" => "more_block",
		"DETAIL_URL" => "/marketplace/detail/#code#/",
		"ELEMENT" => "40",
		"IBLOCK_ID" => "4",
		"PARENT_SECTION" => "",
		"PROPERTY_CODE" => array(0=>"2",1=>"ICON",2=>"",),
		"SEF_MODE" => "N"
	)
);?>

<? $APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"about",
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
		"COMPONENT_TEMPLATE" => "about",
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
		"IBLOCK_ID" => "5",
		"IBLOCK_TYPE" => "ru",
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
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	),
	false
); ?>

<? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"partners", 
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
		"COMPONENT_TEMPLATE" => "partners",
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
		"IBLOCK_ID" => "6",
		"IBLOCK_TYPE" => "ru",
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
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	),
	false
); ?>

<? $APPLICATION->IncludeComponent(
	"bitrix:news.list",
	"about_system",
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
		"COMPONENT_TEMPLATE" => "about_system",
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
		"IBLOCK_ID" => "7",
		"IBLOCK_TYPE" => "ru",
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
			0 => "ICON",
			1 => "",
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
	),
	false
); ?>
<? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"products", 
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
		"COMPONENT_TEMPLATE" => "products",
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
		"IBLOCK_ID" => "8",
		"IBLOCK_TYPE" => "ru",
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
			0 => "PARAMS_ADDITIONAL",
			1 => "PARAMS",
			2 => "PRICE",
			3 => "",
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
	),
	false
); ?>
<section class="outer-container py-3">
	<div class="container how-use">
		<div class="how-use__header wow fadeInLeft">
			<h2 class="h h_l mb-3">
<!-- START: app_header -->
<?$APPLICATION->IncludeComponent(
	"bitrix:main.include", 
	".default", 
	array(
		"AREA_FILE_SHOW" => "file",
		"AREA_FILE_SUFFIX" => "inc",
		"EDIT_TEMPLATE" => "",
		"COMPONENT_TEMPLATE" => ".default",
		"PATH" => SITE_TEMPLATE_PATH."/include_areas/app_header.php"
	),
	false
);?>
<!-- END: app_header -->
            </h2>
			<div class="default-content mb-3">
                 <!-- START: app_desc -->
                     <? $APPLICATION->IncludeComponent(
                         "bitrix:main.include",
                         "",
                         Array("AREA_FILE_SHOW" => "file",
                             "AREA_FILE_SUFFIX" => "inc",
                             "EDIT_TEMPLATE" => "",
                             "PATH" => SITE_TEMPLATE_PATH."/include_areas/app_desc.php")
                     ); ?>
                 <!-- END: app_desc -->
			</div>
		</div>
		<div class="how-use__bottom">
			<div class="how-use__image wow fadeInRight">
				 <!-- START: app_image -->
				     <? $APPLICATION->IncludeComponent(
				         "bitrix:main.include",
				         "",
				         Array("AREA_FILE_SHOW" => "file",
				             "AREA_FILE_SUFFIX" => "inc",
				             "EDIT_TEMPLATE" => "",
				             "PATH" => SITE_TEMPLATE_PATH."/include_areas/app_image.php")
				     ); ?>
				 <!-- END: app_image -->
			</div>
			<div class="how-use__bottom-left wow fadeInLeft">
				<h3 class="h h_m mb-4">
                     <!-- START: app_header2 -->
                         <? $APPLICATION->IncludeComponent(
                             "bitrix:main.include",
                             "",
                             Array("AREA_FILE_SHOW" => "file",
                                 "AREA_FILE_SUFFIX" => "inc",
                                 "EDIT_TEMPLATE" => "",
                                 "PATH" => SITE_TEMPLATE_PATH."/include_areas/app_header2.php")
                         ); ?>
                     <!-- END: app_header2 -->
                </h3>
				<ol class="how-use__list">
					<li class="how-use__item">
						<div class="how-use__title">
                             <!-- START: app_stage1_header -->
                                 <? $APPLICATION->IncludeComponent(
                                     "bitrix:main.include",
                                     "",
                                     Array("AREA_FILE_SHOW" => "file",
                                         "AREA_FILE_SUFFIX" => "inc",
                                         "EDIT_TEMPLATE" => "",
                                         "PATH" => SITE_TEMPLATE_PATH."/include_areas/app_stage1_header.php")
                                 ); ?>
                             <!-- END: app_stage1_header -->
                        </div>
						<p class="how-use__text">
                             <!-- START: app_stage1_desc -->
                                 <? $APPLICATION->IncludeComponent(
                                     "bitrix:main.include",
                                     "",
                                     Array("AREA_FILE_SHOW" => "file",
                                         "AREA_FILE_SUFFIX" => "inc",
                                         "EDIT_TEMPLATE" => "",
                                         "PATH" => SITE_TEMPLATE_PATH."/include_areas/app_stage1_desc.php")
                                 ); ?>
                             <!-- END: app_stage1_desc -->
                        </p>
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
						<div class="how-use__title">
                             <!-- START: app_stage2_header -->
                                 <? $APPLICATION->IncludeComponent(
                                     "bitrix:main.include",
                                     "",
                                     Array("AREA_FILE_SHOW" => "file",
                                         "AREA_FILE_SUFFIX" => "inc",
                                         "EDIT_TEMPLATE" => "",
                                         "PATH" => SITE_TEMPLATE_PATH."/include_areas/app_stage2_header.php")
                                 ); ?>
                             <!-- END: app_stage2_header -->
                        </div>
						<p class="how-use__text">
                             <!-- START: app_stage2_desc -->
                                 <? $APPLICATION->IncludeComponent(
                                     "bitrix:main.include",
                                     "",
                                     Array("AREA_FILE_SHOW" => "file",
                                         "AREA_FILE_SUFFIX" => "inc",
                                         "EDIT_TEMPLATE" => "",
                                         "PATH" => SITE_TEMPLATE_PATH."/include_areas/app_stage2_desc.php")
                                 ); ?>
                             <!-- END: app_stage2_desc -->
                        </p>
					</li>
					<li class="how-use__item">
						<div class="how-use__title">
                             <!-- START: app_stage3_header -->
                                 <? $APPLICATION->IncludeComponent(
                                     "bitrix:main.include",
                                     "",
                                     Array("AREA_FILE_SHOW" => "file",
                                         "AREA_FILE_SUFFIX" => "inc",
                                         "EDIT_TEMPLATE" => "",
                                         "PATH" => SITE_TEMPLATE_PATH."/include_areas/app_stage3_header.php")
                                 ); ?>
                             <!-- END: app_stage3_header -->
                        </div>
						<p class="how-use__text">
                             <!-- START: app_stage3_desc -->
                                 <? $APPLICATION->IncludeComponent(
                                     "bitrix:main.include",
                                     "",
                                     Array("AREA_FILE_SHOW" => "file",
                                         "AREA_FILE_SUFFIX" => "inc",
                                         "EDIT_TEMPLATE" => "",
                                         "PATH" => SITE_TEMPLATE_PATH."/include_areas/app_stage3_desc.php")
                                 ); ?>
                             <!-- END: app_stage3_desc -->
                        </p>
					</li>
				</ol>
			</div>
		</div>
	</div>
</section>
<? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"montag", 
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
		"COMPONENT_TEMPLATE" => "montag",
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
		"IBLOCK_ID" => "9",
		"IBLOCK_TYPE" => "ru",
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
			1 => "",
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
	),
	false
); ?>
<?$APPLICATION->IncludeComponent(
	"qwalex:getelement", 
	"more_block", 
	array(
		"COMPONENT_TEMPLATE" => "more_block",
		"DETAIL_URL" => "/marketplace/detail/#code#/",
		"ELEMENT" => "41",
		"IBLOCK_ID" => "4",
		"PARENT_SECTION" => "",
		"PROPERTY_CODE" => array(
			0 => "2",
			1 => "3",
			2 => "ICON",
			3 => "",
		),
		"SEF_MODE" => "N"
	),
	false
);?>
<? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"works", 
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
		"COMPONENT_TEMPLATE" => "works",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "N",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "DETAIL_PICTURE",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "10",
		"IBLOCK_TYPE" => "ru",
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
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	),
	false
); ?>
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
<? $APPLICATION->IncludeComponent(
	"bitrix:news.list", 
	"works", 
	array(
		"ACTIVE_DATE_FORMAT" => "j F Y",
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
		"COMPONENT_TEMPLATE" => "works",
		"DETAIL_URL" => "",
		"DISPLAY_BOTTOM_PAGER" => "N",
		"DISPLAY_DATE" => "Y",
		"DISPLAY_NAME" => "Y",
		"DISPLAY_PICTURE" => "Y",
		"DISPLAY_PREVIEW_TEXT" => "N",
		"DISPLAY_TOP_PAGER" => "N",
		"FIELD_CODE" => array(
			0 => "DETAIL_PICTURE",
			1 => "",
		),
		"FILTER_NAME" => "",
		"HIDE_LINK_WHEN_NO_DETAIL" => "N",
		"IBLOCK_ID" => "11",
		"IBLOCK_TYPE" => "ru",
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
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_BY2" => "SORT",
		"SORT_ORDER1" => "DESC",
		"SORT_ORDER2" => "ASC",
		"STRICT_SECTION_CHECK" => "N"
	),
	false
); ?>
<section class="outer-container my-md-3">
	<div class="home-map">
		<div class="home-map__map">
			<?$APPLICATION->IncludeComponent("bitrix:map.yandex.view", "main", Array(
	"COMPONENT_TEMPLATE" => ".default",
		"CONTROLS" => array(	// Элементы управления
			0 => "ZOOM",
			1 => "MINIMAP",
			2 => "TYPECONTROL",
			3 => "SCALELINE",
		),
		"INIT_MAP_TYPE" => "MAP",	// Стартовый тип карты
		"MAP_DATA" => "a:4:{s:10:\"yandex_lat\";d:55.65611506778039;s:10:\"yandex_lon\";d:37.54670735596749;s:12:\"yandex_scale\";i:16;s:10:\"PLACEMARKS\";a:1:{i:0;a:3:{s:3:\"LON\";d:37.551633203705;s:3:\"LAT\";d:55.655847141494;s:4:\"TEXT\";s:73:\"117246, г. Москва,  Научный проезд, д. 8, стр. 1.\";}}}",	// Данные, выводимые на карте
		"MAP_HEIGHT" => "100%",	// Высота карты
		"MAP_ID" => "",	// Идентификатор карты
		"MAP_WIDTH" => "100%",	// Ширина карты
		"OPTIONS" => array(	// Настройки
			0 => "ENABLE_SCROLL_ZOOM",
			1 => "ENABLE_DBLCLICK_ZOOM",
			2 => "ENABLE_DRAGGING",
		)
	),
	false
);?>
		</div>
		<div class="home-map__contacts wow fadeInLeft" data-wow-offset="400">
			<div class="container">
				<div class="contacts-map">
					<h2 class="h h_l mb-3">Контакты</h2>
					<div class="default-content mb-2 mb-md-6">
						<p class="mb-2">
							<?=$address;?>
						</p>
						<ul class="ns">
							<li>
								<i class="icm icm-phone text-muted100 mr-1"></i>
								<a href="tel:<?=clearTel($phone);?>" class="off-link">
									<?=$phone;?>
								</a>
							</li>
							<li>
								<i class="icm icm-mail text-muted100 mr-1"></i>
								<a href="mailto:<?=$email;?>" class="off-link">
									<?=$email;?>
								</a>
							</li>
							<li>
								<i class="icm icm-clock text-muted100 mr-1"></i>
								<span>
									<?=$work_time;?>
								</span>
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
