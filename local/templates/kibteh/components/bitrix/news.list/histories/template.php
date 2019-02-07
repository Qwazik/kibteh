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
<section class="outer-container py-4 mb-2" id="<?=$arResult['CODE'];?>">
	<div class="container">
		<h2 class="h h_l ta-center"><?=$arResult['NAME'];?></h2>
		<div class="reviews js-swiper wow fadeInUp">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<?foreach ($arResult['ITEMS'] as $arItem):
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?>
					<div class="swiper-slide reviews__item">
						<div class="review" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
							<div class="review__person review-person">
								<?if(!empty($arItem['PREVIEW_PICTURE']['SRC'])):?>
									<div class="review-person__photo">
										<img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" alt="<?=$arItem['NAME'];?>">
									</div>
								<?endif;?>
								<div class="review-person__name"><?=$arItem['NAME'];?></div>
								<?if($arItem['PROPERTIES']['POS']['VALUE']):?>
								<div class="review-person__who"><?=$arItem['PROPERTIES']['POS']['VALUE'];?></div>
                                <?endif;?>
							</div>
							<?if(!empty($arItem['PREVIEW_TEXT'])):?>
								<div class="review__header"><?=$arItem['PREVIEW_TEXT'];?></div>
							<?endif;?>
							<div class="review__dec"></div>
							<?if(!empty($arItem['DETAIL_TEXT'])):?>
							  <div class="review__text"><?=$arItem['DETAIL_TEXT'];?></div>
							<?endif;?>
						</div>
					</div>
					<?endforeach;?>
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
<?endif;?>