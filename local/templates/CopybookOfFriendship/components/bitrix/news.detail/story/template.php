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
	<img src="<?=$arResult['PREVIEW_PICTURE']['SRC']?>" alt="" style="max-width: 480px">
	<h2><?=$arResult['NAME']?></h2>
	<p><?=$arResult["DISPLAY_ACTIVE_FROM"]?></p>
	<p><?=$arResult['DETAIL_TEXT']?>
</div>