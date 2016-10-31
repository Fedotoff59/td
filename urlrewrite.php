<?
$arUrlRewrite = array(
	array(
		"CONDITION" => "#^/organization/detail/([a-zA-Z_-]*)/#",
		"RULE" => "ELEMENT_CODE=\$1",
		"ID" => "",
		"PATH" => "/organization/detail/index.php",
	),
	array(
		"CONDITION" => "#^/news/#",
		"RULE" => "",
		"ID" => "bitrix:news",
		"PATH" => "/news/index.php",
	),
);

?>