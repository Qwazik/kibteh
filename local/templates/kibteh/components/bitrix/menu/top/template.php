<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
<nav class="main-nav">
<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<a class="main-nav__link" href="<?=$arItem["LINK"]?>" class="selected"><?=$arItem["TEXT"]?></a>
	<?else:?>
		<a class="main-nav__link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a>
	<?endif?>
	
<?endforeach?>

</nav>
<?endif?>