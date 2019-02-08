<?if (!defined("B_PROLOG_INCLUDED") || B_PROLOG_INCLUDED!==true)die();?>

<?if (!empty($arResult)):?>
	<nav class="footer-nav">


<?
foreach($arResult as $arItem):
	if($arParams["MAX_LEVEL"] == 1 && $arItem["DEPTH_LEVEL"] > 1) 
		continue;
?>
	<?if($arItem["SELECTED"]):?>
		<div class="footer-nav__col"><a class="footer-nav__link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></div>
	<?else:?>
		<div class="footer-nav__col"><a class="footer-nav__link" href="<?=$arItem["LINK"]?>"><?=$arItem["TEXT"]?></a></div>
	<?endif?>
	
<?endforeach?>

	</nav>
<?endif?>