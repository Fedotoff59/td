<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$GLOBALS["arrFilterMainTheme"] = array("PROPERTY_MAIN_VALUE" => 1);
$GLOBALS["arrFilterMain"] = array("PROPERTY_MAIN_VALUE" => 1);
?>
				<div class="map block">
					<img src="<?=SITE_SERVER_NAME?>/img/map.png" alt="">
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
				<div class="region block">
					<?
						$APPLICATION->IncludeComponent("bitrix:news.detail", "region",Array(
								"CACHE_TYPE" => "N",
								"IBLOCK_TYPE" => "lists",
								"IBLOCK_ID" => "9",
								"ELEMENT_ID" => "",
								"ELEMENT_CODE" => $_REQUEST["ELEMENT_CODE"],
								"FIELD_CODE" => array("DETAIL_PICTURE"),
								"PROPERTY_CODE" => array("FIO", 'PHONE', 'MAIL', 'PHOTO', 'DOC', 'POSITION'),
								"SET_STATUS_404" => "Y",
								"SHOW_404" => "Y",
								"SET_TITLE" => "Y",
							)
						);
					?>
				</div>
				<?// TODO: Оформить в виде привязки к региону?>
				<div class="block copybooks_list">
					<div>
						<h1>Лучшие тетрадки дружбы</h1>
					</div>
					<a href='javascript:void(null);'>
						<div class="copybook">
							<img src="<?=SITE_SERVER_NAME?>/img/copybooks/class.png" alt="">
							<h2>«Дружный класс»</h2>
							<p>7«Б» класс , МБОУ «ООШ №1», г. Нытва</p>
						</div>
					</a>
					<a href='javascript:void(null);'>
						<div class="copybook">
							<img src="<?=SITE_SERVER_NAME?>/img/copybooks/world.png" alt="">
							<h2>«Мой мир»</h2>
							<p>Ширинкин Дмитрий, 1 «А» класс, МАОУ «СОШ №134»</p>
						</div>
					</a>
					<a href='javascript:void(null);'>
						<div class="copybook">
							<img src="<?=SITE_SERVER_NAME?>/img/copybooks/tradition.png" alt="">
							<h2>«Продолжаю традицию»</h2>
							<p>Девятова Евгения, 9 «Б» класс, МАОУ «Гимназия №5»</p>
						</div>
					</a>
					<a href='javascript:void(null);'>
						<div class="copybook">
							<img src="<?=SITE_SERVER_NAME?>/img/copybooks/fire.png" alt="">
							<h2>«Олимпийский огонь»</h2>
							<p>Киселёва Виктория, 5«А» класс, МАОУ «Гимназия №33»</p>
						</div>
					</a>
					<?/*<div class="add"><a href="http://"><img src="<?=SITE_SERVER_NAME?>/img/add.png" alt=""></a></div>*/?>
				</div>
				<?// TODO: Оформить в виде привязки к региону?>
				<div class="news_block block">
					<i class="arrow left"><img src="<?=SITE_SERVER_NAME?>/img/larrow_gray.png" alt=""></i>
					<i class="arrow right"><img src="<?=SITE_SERVER_NAME?>/img/rarrow_gray.png" alt=""></i>
					<?$APPLICATION->IncludeComponent("bitrix:news.list","news",Array(
					        "IBLOCK_ID" => "21",
					        "NEWS_COUNT" => "3",
					        "SORT_BY1" => "ACTIVE_FROM",
					        "SORT_ORDER1" => "DESC",
					        "SORT_BY2" => "SORT",
					        "SORT_ORDER2" => "ASC",
					        "FILTER_NAME" => "arrFilter",
					        "FIELD_CODE" => Array("ID"),
							"SET_TITLE" => "N",
					    )
					);
					?>
				</div>
				<?// TODO: Оформить в виде привязки к региону?>
				<div class="partners_block block">
					<div>
						<h1>Наши партнеры</h1>
					</div>
					<?$APPLICATION->IncludeComponent("bitrix:news.list","partners",Array(
								"IBLOCK_ID" => "10",
								"NEWS_COUNT" => "5",
								"SORT_BY1" => "ACTIVE_FROM",
								"SORT_ORDER1" => "DESC",
								"SORT_BY2" => "SORT",
								"SORT_ORDER2" => "ASC",
								"FILTER_NAME" => "",
								"FIELD_CODE" => Array("ID"),
								"PROPERTY_CODE" => Array("LINK"),
								"SET_TITLE" => "N",
							)
						);
					?>
				</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>