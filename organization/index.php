<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$GLOBALS["arrFilterMainTheme"] = array("PROPERTY_MAIN_VALUE" => 1);
$GLOBALS["arrFilterMain"] = array("PROPERTY_MAIN_VALUE" => 1);
$APPLICATION->SetTitle("Отделения - Детско-молодёжная общероссийская общественная организация «Тетрадка Дружбы»");
?>
	<?/*
	<div class="block info"><p>Представительства организации «Тетрадка Дружбы» открываются в разных уголках России, чтобы у любого ребёнка была возможность стать участником её деятельности. В школах и учреждениях дополнительного образования открываются местные отделения организации.</p></div>
	*/?>
				<div class="map block">
					<img src="/img/map.png" alt="">
					<div><h1>Выберите регион</h1></div>
					<?$APPLICATION->IncludeComponent("bitrix:news.list","regions_map",Array(
					        "IBLOCK_ID" => "9",
					        "NEWS_COUNT" => "54",
					        "SORT_BY1" => "ACTIVE_FROM",
					        "SORT_ORDER1" => "DESC",
					        "SORT_BY2" => "SORT",
					        "SORT_ORDER2" => "ASC",
					        "FILTER_NAME" => "",
					        "FIELD_CODE" => Array("ID"),
					        "PROPERTY_CODE" => Array("FIO"),
							"SET_TITLE" => "N",
					    )
					);?>
					<h2>Не нашли свой регион?</h2>
					<a href="javascript:void(null);">
						<p>Открыть отделение в своем регионе</p>
					</a>
				</div>
				<div class="block">
					<h1>Пожалуйста, выберите регион!</h1>
				</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>