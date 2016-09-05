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
<table>
	<?php foreach ($arResult["ITEMS"] as $i => $region): ?>
		<?php if (!($i%3)): ?>
			<tr>
		<?php endif; ?>
				<td>
				<?php if ($region["DISPLAY_PROPERTIES"]['FIO']['DISPLAY_VALUE'] != ''): ?>
					<a href="<?=$region["DETAIL_PAGE_URL"]?>">
						<p><?=$region["NAME"]?></p>
					</a>
				<?php else: ?>
					<p><?=$region["NAME"]?></p>
				<?php endif ?>
					
				</td>
		<?php if (!(($i+1)%3)): ?>
			</tr>
		<?php endif; ?>
	<?php endforeach ?>
</table>