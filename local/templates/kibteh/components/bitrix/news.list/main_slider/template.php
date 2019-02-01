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
	<div class="swiper-container main-slider__slides">
		<div class="swiper-wrapper">
			<?foreach ($arResult['ITEMS'] as $arItem):
				$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
				$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
				?>

				<div
						class="swiper-slide main-slider__slide"
						id="<?=$this->GetEditAreaId($arItem['ID']);?>"
						data-title="<?=htmlspecialcharsBack($arItem['NAME']);?>"
						<?if(!empty($arItem['PREVIEW_TEXT'])):?>
							data-end="<?=$arItem['PREVIEW_TEXT'];?>"
						<?endif;?>
						<?if(!empty($arItem['PREVIEW_PICTURE']['SRC'])):?>
							style="background-image: url(<?=$arItem['PREVIEW_PICTURE']['SRC'];?>)"
						<?endif;?>

				</div>
			</div>
		<?endforeach;?>
	<?endif;?>
</div>
