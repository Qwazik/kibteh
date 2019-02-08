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
		<h2 class="h h_l mb-lg-4 mb-0"><?=$arResult['NAME'];?></h2>
		<div class="faq-list mb-4">
	<?foreach ($arResult['ITEMS'] as $arItem):
		$this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
		$this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
		?>
			<div class="faq-item wow fadeIn" id="<?=$this->GetEditAreaId($arItem['ID']);?>">

				<div class="faq-item__quest">
					<span><?=$arItem['PREVIEW_TEXT'];?></span>
					<div class="faq-item__toggler">
						<span></span>
						<span></span>
					</div>
				</div>
				<div class="faq-item__answer">
					<?=$arItem['DETAIL_TEXT'];?>
				</div>
			</div>
		<?endforeach;?>
		</div>
		<div class="faq-buttons wow fadeInUp">
			<?if($arParams["DISPLAY_BOTTOM_PAGER"]):?>
				<?=$arResult["NAV_STRING"]?>
			<?endif;?>
			<a class="fancybox btn btn_light" href="#sendQuest">Задать вопрос</a>
		</div>
	</div>
</section>
<?endif;?>

