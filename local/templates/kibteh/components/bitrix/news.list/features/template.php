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
if(CModule::IncludeModule('iblock'))
?>

<?
$three = [];
$section_names = [];
foreach ($arResult['ITEMS'] as $item){
	if(!is_array($three[$item['IBLOCK_SECTION_ID']])) $three[$item['IBLOCK_SECTION_ID']] = [];;
	$three[$item['IBLOCK_SECTION_ID']][] = [
			'ID'=>$item['ID'],
			'NAME'=>$item['NAME'],
			'PREVIEW_PICTURE_SRC'=>$item['PREVIEW_PICTURE']['SRC'],
			'PREVIEW_TEXT'=>$item['PREVIEW_TEXT'],
			'IBLOCK_ID'=>$item['IBLOCK_ID'],
			'EDIT_LINK'=>$item['EDIT_LINK'],
			'DELETE_LINK'=>$item['DELETE_LINK'],
	        'ICON'=>$item['PROPERTIES']['ICON']['VALUE']
	];
	$section_name_res = CIBlockSection::GetByID($item['IBLOCK_SECTION_ID']);
	while ($section_name = $section_name_res->GetNext()){
		if(!in_array($section_name['NAME'],$section_names)){
			array_push($section_names, $section_name['NAME']);
		}
	}
}
?>

<?if(!empty($arResult['ITEMS'])):?>
	<section class="outer-container py-4 mb-1"  id="<?=$arResult['CODE'];?>">
		<div class="container">
			<h2 class="h h_l ta-center mb-3 mb-sm-4"><?=$arResult['NAME'];?></h2>
			<ul class="ns features">
				<?$cnt=0;foreach ($three as $section):

				  ?>
				<li class="features__item wow fadeInUp">
					<div class="feature" <?=($cnt===0)?'data-open':'';?>>
						<div class="feature__header">
							<button class="feature__close"></button>
							<h3 class="h h_m"><?=$section_names[$cnt];?></h3>
						</div>
						<div class="feature__body">
							<ul class="feature-props row">
								<?foreach($section as $item):
								$this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_EDIT"));
								$this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
								?>
								<li class="feature-props__item col-12 col-lg-6 wow fadeIn" id="<?=$this->GetEditAreaId($item['ID']);?>">
									<div class="feature-prop">
										<div class="feature-prop__ico">
											<div class="circle-ico">
												<i class="icm <?=$item['ICON'];?>"></i>
											</div>
										</div>
										<div class="feature-prop__text">
											<h4 class="h h_s mb-1"><?=$item['NAME'];?></h4>
											<?if(!empty($item['PREVIEW_TEXT'])):?>
												<div class="feature-prop__desc muted500">
													<?=$item['PREVIEW_TEXT'];?>
												</div>
											<?endif;?>
										</div>
									</div>
								</li>
								<?endforeach;?>
							</ul>
						</div>
					</div>
				</li>
                <?$cnt++;endforeach;?>
			</ul>
		</div>
	</section>
<?endif;?>