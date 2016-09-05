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
<div class="lightbox_content">
	<img class="portrait" src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt="">
	<h2><?=$arResult['NAME']?></h2>
	<p class="info"><?=$arResult['PROPERTIES']['LOCATION']['VALUE']?></p>
	<p class="story"><?=$arResult['DETAIL_TEXT']?></p>
</div>