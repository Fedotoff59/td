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
<div class="partners">
<?php foreach ($arResult["ITEMS"] as $index => $arItem): ?>
	<div class="partner">
		<?php if ($arItem['DISPLAY_PROPERTIES']['LINK']['VALUE'] != '' && $arItem['DISPLAY_PROPERTIES']['LINK']['VALUE'] != null): ?>
			<a href="<?echo $arItem['DISPLAY_PROPERTIES']['LINK']['VALUE'];?>">
				<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
			</a>
		<?php else: ?>
			<img src="<?=$arItem["PREVIEW_PICTURE"]["SRC"]?>" alt="">
		<?php endif ?>
	</div>
<?php endforeach;?>
</div>
<?$i = 0;?>
<div class="scroll">
<?while ($arResult['NAV_RESULT']->NavPageCount > $i):?>
	<?php if ($arResult['NAV_RESULT']->NavPageNomer == ++$i): ?>
		<input id='ppage_<?=$i?>' type="radio" name="scroll" checked>
		<label for="ppage_<?=$i?>"></label>
	<?php else: ?>
		<input id='ppage_<?=$i?>' type="radio" name="scroll">
		<label for="ppage_<?=$i?>"></label>
	<?php endif; ?>
<?endwhile;?>
</div>