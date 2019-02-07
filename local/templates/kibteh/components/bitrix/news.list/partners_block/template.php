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
<section class="outer-container py-4" id="<?=$arResult['CODE'];?>">
	<div class="container">
		<h2 class="h h_l ta-center mb-3"><?=$arResult['NAME'];?></h2>
		<div class="h-desc ta-center"><?=$arResult['DESCRIPTION'];?></div>
		<div class="row">
			<?foreach ($arResult['ITEMS'] as $arItem):
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>
			<?if(!$arItem['PROPERTIES']['ICO']['VALUE']):?>
			<div class="col-lg-4 d-flex flex-column justify-content-center mobile-text-center mb-3 mb-lg-0 wow fadeInLeft" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
				<h3 class="h_m mb-4"><?=$arItem['NAME'];?></h3>
				<div class="default-content">
					<?if(!empty($arItem['PREVIEW_TEXT'])):?>
						<?=$arItem['PREVIEW_TEXT'];?>
					<?endif;?>
				</div>
			</div>
            <?else:?>
			<div class="mb-2 mb-md-0 col-12 col-md-6 col-lg-4 d-flex">
				<div class="ico-block wow fadeInRight" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
					<div class="ico-block__ico">
						<i class="icm <?=$arItem['PROPERTIES']['ICO']['VALUE'];?>"></i>
					</div>
					<div class="ico-block__text">
						<?if(!empty($arItem['PREVIEW_TEXT'])):?>
							<?=$arItem['PREVIEW_TEXT'];?>
						<?endif;?>
					</div>
				</div>
			</div>
            <?endif;?>
			<?endforeach;?>
		</div>
	</div>
</section>
<?endif;?>