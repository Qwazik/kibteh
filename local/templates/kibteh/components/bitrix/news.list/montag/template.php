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
<section class="outer-container py-3 mobile-text-center" id="<?=$arResult['CODE'];?>">
	<div class="container">
		<div class="row mb-4 mb-lg-6">
			<div class="col-12 col-lg-6">
				<h2 class="h h_l mb-2"><?=$arResult['NAME'];?></h2>
				<div class="default-content">
					<?=$arResult['DESCRIPTION'];?>
				</div>
			</div>
			<div class="col d-none d-md-block"></div>
		</div>
		<div class="row">
			<?foreach ($arResult['ITEMS'] as $arItem):
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
			<div class="col-12 col-md-6 col-lg mb-2 mb-md-4 mb-lg-0">
				<div class="install-item wow fadeInUp" data-wow-delay="0" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<div class="install-item__ico">
						<i class="icm <?=$arItem['PROPERTIES']['ICO']['VALUE'];?>"></i>
					</div>
					<div class="install-item__col">
						<div class="install-item__title"><?=$arItem['NAME'];?></div>
						<div class="default-content">
							<?if(!empty($arItem['PREVIEW_TEXT'])):?>
								<?=$arItem['PREVIEW_TEXT'];?>
							<?endif;?>
						</div>
					</div>
				</div>
			</div>
			<?endforeach;?>
		</div>
	</div>
</section>
<?endif;?>