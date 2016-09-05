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
<?php foreach ($arResult["ITEMS"] as $i => $friend): ?>
	<div class="friend <?=$i==3?'last_friend':''?>">
		<a href="#" id="<?=$friend["CODE"]?>" class="readmore friends"><img src="<?=$friend["PREVIEW_PICTURE"]["SRC"]?>" alt=""></a>
		<p><?=$friend["NAME"]?></p>
	</div>
<?php endforeach ?>