<?php
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
$fields = json_decode($_REQUEST["FIELDS"]);
$properties = json_decode($_REQUEST["PROPERTIES"]);
	$APPLICATION->IncludeComponent("bitrix:news.detail",$_REQUEST['TEMPLATE'],Array(
			"CACHE_TYPE" => "N",
			"IBLOCK_TYPE" => "lists",
			"IBLOCK_ID" => $_REQUEST['IBLOCK_ID'],
			"ELEMENT_ID" => $_REQUEST["ELEMENT_ID"],
			"ELEMENT_CODE" => $_REQUEST['ELEMENT_CODE'],
			"FIELD_CODE" => $fields,
			"PROPERTY_CODE" => $properties
		)
	);
?>