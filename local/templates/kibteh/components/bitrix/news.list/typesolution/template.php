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
			'DELETE_LINK'=>$item['DELETE_LINK']
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
	<section class="outer-container py-4 mb-lg-5 wow fadeInUp" data-wow-offset="100" id="typeSolution">
		<h2 class="h h_l ta-center mb-2 mb-sm-4"><?=$arResult['NAME'];?></h2>
		<div class="js-tabs">
			<div class="ta-center mb-4">
				<div class="tab-nav">
					<div class="container">
						<div class="tab-nav__inner">
							<?foreach ($section_names as $key=>$section_name):?>
								<div class="tab-nav__item <?=($key===0)?'tab-nav__item_active':'';?>"><?=$section_name;?></div>
							<?endforeach;?>
						</div>
					</div>
				</div>
			</div>
			<div class="tab-content">
				<?
				$cnt = 0;
				foreach($three as $key=>$section):?>
					<div class="tab-content__item <?=($cnt===0)?'tab-content__item_active':'';$cnt++;?>">
						<div class="js-swiper">
							<div class="swiper-container">
								<div class="swiper-wrapper">
									<?foreach ($section as $item):
										$this->AddEditAction($item['ID'], $item['EDIT_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_EDIT"));
										$this->AddDeleteAction($item['ID'], $item['DELETE_LINK'], CIBlock::GetArrayByID($item["IBLOCK_ID"], "ELEMENT_DELETE"), array("CONFIRM" => GetMessage('CT_BNL_ELEMENT_DELETE_CONFIRM')));
									  ?>
									<div class="swiper-slide">
										<div class="solution-item" id="<?=$this->GetEditAreaId($item['ID']);?>">
											<div class="solution-item__col solution-item__col_image wow fadeInLeft" data-wow-offset="100">
												<div class="solution-item__image"
													<?if(!empty($item['PREVIEW_PICTURE_SRC'])):?>
														style="background-image:url('<?=$item['PREVIEW_PICTURE_SRC'];?>')"
													<?endif;?>
												></div>
											</div>
											<div class="solution-item__col wow fadeInRight" data-wow-offset="100">
												<div class="solution-item__text">
													<div class="slider-navigation mb-2">
														<div class="slider-btn" data-prev>
															<i class="icm icm-arrow rotate-180"></i>
														</div>
														<div class="slider-btn" data-next>
															<i class="icm icm-arrow"></i>
														</div>
													</div>
													<h3 class="h h_m mb-2"><?=$item['NAME'];?></h3>
													<?if(!empty($item['PREVIEW_TEXT'])):?>
														<?=$item['PREVIEW_TEXT'];?>
													<?endif;?>
													<a class="btn btn_bd" href="<?=$item['DETAIL_PAGE_URL'];?>">Подробнее</a>
												</div>
											</div>
										</div>
									</div>
									<?endforeach;?>
								</div>
							</div>
						</div>
					</div>
				<?endforeach;?>
			</div>
		</div>
	</section>
<?endif;?>