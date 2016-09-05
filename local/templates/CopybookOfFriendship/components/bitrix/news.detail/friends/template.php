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
<div class="lightbox_content media">
	<h2><?=$arResult['DETAIL_TEXT']?></h2>
	<br>
	<br>
	<?foreach($arResult['DISPLAY_PROPERTIES']['PHOTO']['FILE_VALUE'] as $photo):?>
		<img src="<?=$photo['SRC']?>" alt="">
		<br>
	<?endforeach;?>
	<?echo $arResult['DISPLAY_PROPERTIES']['VIDEO']['DISPLAY_VALUE'];?>
</div>