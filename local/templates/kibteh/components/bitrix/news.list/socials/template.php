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
	

    <ul class="social">
        <?foreach ($arResult['ITEMS'] as $arItem):
	        $this->AddEditAction($arItem['ID'], $arItem['EDIT_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_EDIT"));
            $this->AddDeleteAction($arItem['ID'], $arItem['DELETE_LINK'], CIBlock::GetArrayByID($arItem["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
            $link = $arItem['PROPERTIES']['LINK']['VALUE'];
            $ico = $arItem['PROPERTIES']['ICO']['VALUE'];
            ?>
        <li class="social__item" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
            <a class="social__link" href="<?=$link;?>">
                <i class="icm <?=$ico;?>"></i>
            </a>
        </li>
        <?endforeach;?>
    </ul>
<?endif;?>
