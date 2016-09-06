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
	<img src="<?=$arResult['PREVIEW_PICTURE']['SRC']?>" alt="">
	<h2><?=$arResult['NAME']?></h2>
	<p><?=$arItem['DISPLAY_PROPERTIES']['POSITION']['VALUE']?></p>
	<p><?=$arResult["DISPLAY_ACTIVE_FROM"]?></p>
	<?if(strlen($arResult["DETAIL_TEXT"])>0):?>
		<p><?echo $arResult["DETAIL_TEXT"];?></p>
	<?endif;?>
	<?if(!empty($arResult["DETAIL_PICTURE"])>0):?>
		<img src="<?=$arResult['DETAIL_PICTURE']['SRC']?>" alt="">
	<?endif;?>
</div>