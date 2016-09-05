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
	<div class="story">
		<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt=""><!--
		--><div>
			<h2><?=$arItem["NAME"]?><br><?echo $arResult['DISPLAY_PROPERTIES']['SCHOOL']['DISPLAY_VALUE'];?></h2>
			<br>
			<hr>
			<br>
			<p><?echo $arItem["PREVIEW_TEXT"];?></p>
			<a href="#" id="<?=$arItem["CODE"]?>" class="readmore story">читать дальше</a>
		</div>
	</div>
<?php endforeach ?>