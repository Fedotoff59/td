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
	<a id="<?=$arItem['CODE']?>" class="readmore story" href="#">
		<div class="person">
			<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
			<h2><?=$arItem["NAME"]?></h2>
			<p><?echo $arItem['DISPLAY_PROPERTIES']['SCHOOL']['DISPLAY_VALUE'];?>, <?echo $arItem['DISPLAY_PROPERTIES']['CITY']['DISPLAY_VALUE'];?></p>
		</div>
	</a>
<?php endforeach ?>
<div id="<?=$arResult['CODE']?>" class="add">
	<?php if ($arResult['NAV_RESULT']->NavPageNomer < $arResult['NAV_RESULT']->NavPageCount): ?>
		<a id="spage_<?=$arResult['NAV_RESULT']->NavPageNomer?>" href="#">
	<?php else: ?>
		<a id="" href="#">
	<?php endif; ?>
		<img src="<?=SITE_SERVER_NAME?>/img/add.png" alt="">
	</a>
</div>