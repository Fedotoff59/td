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
?>
<?php foreach ($arResult["ITEMS"] as $index => $arItem): ?>
	<h2 class="people passive"><?=$arItem["NAME"]?></h2>
	<div class="capability"><?echo $arItem["PREVIEW_TEXT"];?></div>
<?php endforeach ?>