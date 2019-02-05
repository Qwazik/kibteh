<?
$this->AddEditAction($arResult['ID'], $arResult['EDIT_LINK'], CIBlock::GetArrayByID($arResult["IBLOCK_ID"], "ELEMENT_EDIT"));
$this->AddDeleteAction($arResult['ID'], $arResult['DELETE_LINK'], CIBlock::GetArrayByID($arResult["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
?>
<section class="outer-container mb-1 mb-sm-4" id="<?=$this->GetEditAreaId($arResult['ID']);?>">
	<div class="more-block">
		<div class="container">
			<div class="more-block__inner">
				<?if($arResult['PROPERTIES']['IMAGE_POSITION']['VALUE_XML_ID'] !== 'right' && !empty($arResult['PREVIEW_PICTURE'])):?>
				<div class="more-block__image wow fadeInLeft">
					<img src="<?=CFile::GetPath($arResult['PREVIEW_PICTURE']);?>" alt="">
				</div>
				<?endif;?>
				<div class="more-block__text wow fadeIn">
					<h2 class="h h_l h_light mb-2"><?=$arResult['NAME'];?></h2>
					<?if(!empty($arResult['PREVIEW_TEXT'])):?>
						<div class="mb-3">
							<?=$arResult['PREVIEW_TEXT'];?>
						</div>
					<?endif;?>
					<a class="fancybox btn btn_primary" href="<?=$arResult['PROPERTIES']['BUTTON']['DESCRIPTION'];?>">
						<?=$arResult['PROPERTIES']['BUTTON']['VALUE'];?>
					</a>
				</div>
				<?if($arResult['PROPERTIES']['IMAGE_POSITION']['VALUE_XML_ID'] === 'right' && !empty($arResult['PREVIEW_PICTURE'])):?>
				  <div class="more-block__image wow fadeInLeft">
					  <img src="<?=CFile::GetPath($arResult['PREVIEW_PICTURE']);?>" alt="">
				  </div>
				<?endif;?>
			</div>
		</div>
	</div>
</section>