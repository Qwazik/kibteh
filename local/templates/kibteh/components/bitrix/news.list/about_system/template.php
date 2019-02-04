<?if(!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();
/** @var array $arParams */
/** @var array $arResult */
/** @global CMain $APPLICATION */
/** @global CUser $USER */
/** @global CDatabase $DB */
/** @var CBitrixComponentTemplate $this */
/** @var string $templateName */
/** @var string $templateFile */
/** @var string $templateFolder */
/** @var string $componentPath */
/** @var CBitrixComponent $component */
$this->setFrameMode(true);
?>

<?if(!empty($arResult['ITEMS'])):?>
<section class="outer-container py-3 mb-1">
	<div class="container about-features">
		<div class="ta-center">
			<h2 class="h h_l mb-2"><?=$arResult['NAME'];?></h2>
			<?if(!empty($arResult['DESCRIPTION'])):?>
				<div class="h-desc"><?=$arResult['DESCRIPTION'];?></div>
			<?endif;?>
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
			<?$i=0;foreach ($arResult['ITEMS'] as $arItem):
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
				<div class="col-6 col-lg-4 d-flex mb-2 mb-lg-0" data-swiper-slide>
					<div class="about-feature wow fadeInUp" data-wow-delay="<?=$i*0.2;?>s" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<div class="about-feature__ico">
							<i class="icm <?=$arItem['PROPERTIES']['ICON']['VALUE'];?>"></i>
						</div>
						<h3 class="h h_xs about-feature__header"><?=$arItem['NAME'];?></h3>
						<div class="default-content">
							<?if(!empty($arItem['PREVIEW_TEXT'])):?>
								<?=$arItem['PREVIEW_TEXT'];?>
							<?endif;?>
						</div>
						<div class="about-feature__detail">
							<div class="default-content mb-4">
								<div class="h h_m"><?=$arItem['NAME'];?></div>
								<?if(!empty($arItem['DETAIL_TEXT'])):?>
									<?=$arItem['DETAIL_TEXT'];?>
								<?endif;?>
							</div>
							<a class="fancybox btn btn_primary" href="#giveContacts">Заказать</a>
						</div>
						<button class="btn btn_bd mt-auto about-feature__btn">Подробнее</button>
					</div>
				</div>
			<?$i++;endforeach;?>
		</div>
	</div>
</section>
<?endif;?>
