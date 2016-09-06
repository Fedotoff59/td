<?
require($_SERVER['DOCUMENT_ROOT'].'/bitrix/modules/main/include/prolog_before.php');
$fields = json_decode($_REQUEST["FIELDS"]);
$properties = json_decode($_REQUEST["PROPERTIES"]);
$APPLICATION->IncludeComponent("bitrix:news.list",$_REQUEST['TEMPLATE'],Array(
		"IBLOCK_ID" => $_REQUEST['IBLOCK_ID'],
		"IBLOCK_CODE" => $_REQUEST['IBLOCK_CODE'],
		"NEWS_COUNT" => $_REQUEST['NEWS_COUNT'],
		"SORT_BY1" => "ACTIVE_FROM",
		"SORT_ORDER1" => "DESC",
		"SORT_BY2" => "SORT",
		"SORT_ORDER2" => "ASC",
		"FILTER_NAME" => "",
		"FIELD_CODE" => $fields,
		"PROPERTY_CODE" => $properties
	)
);
?>