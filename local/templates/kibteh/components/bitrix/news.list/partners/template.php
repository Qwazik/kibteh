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
	<section class="outer-container pt-3" id="<?=$arResult['CODE'];?>">
		<div class="container">
			<h2 class="h h_l mb-4"><?=$arResult['NAME'];?></h2>
			<ul class="row ns">
				<?$cnt=0;foreach ($arResult['ITEMS'] as $arItem):
					$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
					$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
					?>
				  <li class="col-4 col-md-2 d-flex mb-2">
					  <div class="partner-item wow fadeInUp" data-wow-delay="<?=($cnt*0.15).'s';?>" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
						<?if(!empty($arItem['PREVIEW_PICTURE']['SRC'])):?>
							<img src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" alt="<?=$arItem['NAME'];?>">
						<?endif;?>
					  </div>
				  </li>
				<?$cnt++;endforeach;?>
			</ul>
		</div>
	</section>
<?endif;?>