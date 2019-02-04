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
	<section class="outer-container py-3">
		<div class="container">
			<div class="row">
				<div class="col-12 col-lg-6 pr-md-5 mb-2 mb-sm-3 about-header wow fadeInLeft">
					<h2 class="h h_l mb-2"><?=$arResult['NAME'];?></h2>
					<div class="default-content">
						<?=$arResult['DESCRIPTION'];?>
					</div>
				</div>
				<div class="col-12 col-lg-6 pt-1">
					<?foreach ($arResult['ITEMS'] as $arItem):
						$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
						$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
						?>
					<div class="image-text mb-1 wow fadeInRight" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<?if(!empty($arItem['PREVIEW_PICTURE']['SRC'])):?>
							<div class="image-text__image">
								<img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" alt="">
							</div>
						<?endif;?>
						<div class="image-text__text default-content">
							<h3 class="h h_m"><?=$arItem['NAME'];?></h3>
							<?if(!empty($arItem['PREVIEW_TEXT'])):?>
								<div class="default-content">
								<?=$arItem['PREVIEW_TEXT'];?>
								</div>
							<?endif;?>
						</div>
					</div>
					<?endforeach;?>

				</div>
			</div>
		</div>
	</section>
<?endif;?>

