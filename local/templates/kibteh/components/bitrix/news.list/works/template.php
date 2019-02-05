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
<section class="outer-container py-4">
    <div class="container">
        <h2 class="h h_l mb-4 ta-center"><?=$arResult['NAME'];?></h2>
        <div class="js-swiper wow fadeInUp" data-items="3">
            <div class="swiper-container">
                <div class="swiper-wrapper">
                    <?$cnt=0;foreach ($arResult['ITEMS'] as $arItem):
                    $this->AddEditAction(
                        $arItem['ID'],
                        $arItem['EDIT_LINK'],
                        CIBlock::GetArrayByID(
                            $arItem["IBLOCK_ID"],
                            "ELEMENT_EDIT"));
                    $this->AddDeleteAction(
                        $arItem['ID'],
                        $arItem['DELETE_LINK'],
                        CIBlock::GetArrayByID(
                            $arItem["IBLOCK_ID"],
                            "ELEMENT_DELETE"),
                        array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));

                    ?>
                    <div class="swiper-slide">
                        <a class="post-item fancybox" href="#modalArticle" id="<?=$this->GetEditAreaId($arItem['ID']);?>">
                            <div class="post-item__image">
                                <?if(!empty($arItem['PREVIEW_PICTURE'])):?>
                                    <img    <?=(empty($arItem['DETAIL_PICTURE'])?'data-detail-picture':'');?>
                                            class="img-responsive" src="<?=$arItem['PREVIEW_PICTURE']['SRC'];?>" alt="<?=$arItem['NAME'];?>">
                                <?endif;?>
                            </div>
                            <div class="post-item__title"><?=$arItem['NAME'];?></div>
                            <?if($arParams["DISPLAY_DATE"]!="N" && $arItem["DISPLAY_ACTIVE_FROM"]):?>
                                <div class="post-item__date"><?=$arItem['DISPLAY_ACTIVE_FROM'];?></div>
                            <?endif;?>
                            <span class="d-none">
                                <?if(!empty($arItem['DETAIL_PICTURE'])):?>
                                    <img src="<?=$arItem['DETAIL_PICTURE']['SRC'];?>" alt="<?=$arItem['NAME'];?>" data-detail-picture>
                                <?endif;?>
                                <div data-detail-text>
                                    <div class="h h_m"><?=$arItem['NAME'];?></div>
                                    <?if(!empty($arItem['DETAIL_TEXT'])):?>
                                        <?=$arItem['DETAIL_TEXT'];?>
                                    <?endif;?>
                                </div>
                            </span>
                        </a>
                    </div>
                    <?$cnt++;endforeach;?>
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