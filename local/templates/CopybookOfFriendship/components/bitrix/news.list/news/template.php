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
$page = $arResult['NAV_RESULT']->NavPageNomer;
$prev = $page - 1;
$next = $page + 1;
$page_count = $arResult['NAV_RESULT']->NavPageCount;
?>
<i id='<?=$page>1?"npage_$prev":''?>' class="arrow left"><img src="<?=SITE_SERVER_NAME?>/img/larrow_gray.png" alt=""></i>
<i id='<?=$page<$page_count?"npage_$next":''?>' class="arrow right"><img src="<?=SITE_SERVER_NAME?>/img/rarrow_gray.png" alt=""></i>
<?php foreach ($arResult["ITEMS"] as $index => $arItem): ?>
	<div class="news" id="<?=$index?>">
		<p class="date"><?echo $arItem["DISPLAY_ACTIVE_FROM"]?></p>
		<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
		<a href="#" id="<?=$arItem["CODE"]?>" class="readmore news_link">
			<h2><?=$arItem["NAME"]?></h2>
		</a>
		<p class="text"><?echo $arItem["PREVIEW_TEXT"];?></p>
		<a href="#" id="<?=$arItem["CODE"]?>" class="readmore news_link">
			<p>читать далее</p></a>
	</div>
<?php endforeach ?>