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
<section class="outer-container py-3" id="<?=$arResult['CODE'];?>">
	<div class="container">
		<h2 class="h h_l ta-center mb-4">
			<?=htmlspecialcharsback($arResult['NAME']);?>
		</h2>
		<div class="product-slider js-swiper wow fadeInUp">
			<div class="swiper-container">
				<div class="swiper-wrapper">
					<?foreach ($arResult['ITEMS'] as $arItem):
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?>
					<div class="swiper-slide" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<div class="product-slide">
							<div class="row">
								<div class="col product-slide__image">
									<?if(!empty($arItem['PREVIEW_PICTURE']['SRC'])):?>
										<img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" alt="<?=$arItem['NAME'];?>">
									<?endif;?>
								</div>
								<div class="col pr-lg-5 pr-1">
									<div class="default-content mb-4">
										<h3 class="h h_m mb-2"><?=htmlspecialcharsback($arItem['NAME']);?></h3>
										<?if(!empty($arItem['PREVIEW_TEXT'])):?>
											<?=htmlspecialcharsback($arItem['PREVIEW_TEXT']);?>
										<?endif;?>
									</div>
									<div class="row product-slide__price-block">
										<div class="col-auto">
											<?if($arItem['PROPERTIES']['PRICE']['VALUE']):?>
											<div class="product-slide__price"><?=number_format($arItem['PROPERTIES']['PRICE']['VALUE'],0,' ',' ');?> р.</div>
											<?endif;?>
										</div>
										<div class="col">
										</div>
									</div>
								</div>
								
								<div class="col-auto d-none d-md-block">
									<h4 class="h h_s mb-2">Характеристики</h4>
									<?if($arItem['PROPERTIES']['PARAMS']['VALUE']):?>
									<div class="props-images mb-1">
										<?foreach ($arItem['PROPERTIES']['PARAMS']['VALUE'] as $param_key => $param):?>
										<div class="props-images__item">
											<i class="icm <?=$arItem['PROPERTIES']['PARAMS']['VALUE_XML_ID'][$param_key];?>"></i>
										</div>
										<?endforeach;?>
									</div>
									<?endif;?>
									<?if($arItem['PROPERTIES']['PARAMS_ADDITIONAL']['VALUE']):?>
									<ul class="props-list">
										<?foreach ($arItem['PROPERTIES']['PARAMS_ADDITIONAL']['VALUE'] as $param_key => $param):?>
											<li><?=$param;?></li>
										<?endforeach;?>
									</ul>
									<?endif;?>
								</div>
							</div>
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