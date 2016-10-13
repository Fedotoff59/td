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
<div>
	<h1><?=$arResult['NAME']?></h1>
</div>
<div class="left">
	<div class="chairman">
		<img src="<?echo $arResult['DISPLAY_PROPERTIES']['PHOTO']['FILE_VALUE']['SRC'];?>" alt="">
		<h2><?echo $arResult['DISPLAY_PROPERTIES']['FIO']['DISPLAY_VALUE'];?></h2>
		<p class="contacts"><?echo $arResult['DISPLAY_PROPERTIES']['PHONE']['DISPLAY_VALUE'];?><br><?echo $arResult['DISPLAY_PROPERTIES']['MAIL']['DISPLAY_VALUE'];?></p>
		<p class="position"><?echo $arResult['DISPLAY_PROPERTIES']['POSITION']['DISPLAY_VALUE'];?></p>
	</div>
</div><!--
--><div class="right">
	<img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt="">
</div>
<div class="doc">
	<a href="javascript:void(null);">
		<p>Оставить заявку на участие в программе «Тетрадка Дружбы»</p>
	</a>
	<?if (is_array($arResult['DISPLAY_PROPERTIES']['DOC']['VALUE'])):?>
	<div>
		<a href="<?=$arResult['DISPLAY_PROPERTIES']['DOC']['VALUE'];?>">
			<img src="<?SITE_SERVER_NAME?>/img/doc1.png" alt="">
			<h2>Региональное положение о программе</h2>
			<p>Скачать</p>
		</a>
	</div>
	<?endif?>
</div>
<?
	/* Get path of doc from medialibrary */
	CModule::IncludeModule("fileman");
	CMedialib::Init();
	// 4 - is id of doc's collection
	$arRes = CMedialibItem::GetList(array('arCollections' => array("4"), 'ID' => Array(13)));
	$doc_path = $arRes[0]['PATH'];
	$programm_path = $arRes[1]['PATH'];
?>
<div class="b_region_promo b_region_promo--blue">
	<div class="b_region_promo__holder">
		<div class="b_region_promo__caption b_text-color-w">
			<span>Краевой Спортивный <br />праздник</span>
			<div class="b_region_promo__date">
				27 октября 2016
			</div>
			<div class="b_region_promo__place">
				СК им.Сухарева
			</div>
		</div>
		<div class="b_region_promo__links">
			<div class="b_region_promo__action">
				<a href="<?=$doc_path?>">Cкачать положение</a>
			</div>
			<div class="b_region_promo__action">
				<a href="/forms/sport/">Подать заявку</a>
			</div>
		</div>
	</div>
</div>