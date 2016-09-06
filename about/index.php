<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$GLOBALS["arrFilterMainTheme"] = array("PROPERTY_MAIN_VALUE" => 1);
$GLOBALS["arrFilterMain"] = array("PROPERTY_MAIN_VALUE" => 1);
?>
				<div class="banner about">
					<img src="<?=SITE_SERVER_NAME?>/img/about us/1.png" alt="" class="current">
					<img src="<?=SITE_SERVER_NAME?>/img/about us/2.png" alt="" style="display:none;">
					<img src="<?=SITE_SERVER_NAME?>/img/about us/3.png" alt="" style="display:none;">
					<img src="<?=SITE_SERVER_NAME?>/img/about us/4.png" alt="" style="display:none;">
					<i class="arrow left"><img src="<?=SITE_SERVER_NAME?>/img/larrow.png" alt=""></i>
					<i class="arrow right"><img src="<?=SITE_SERVER_NAME?>/img/rarrow.png" alt=""></i>
				</div>
				<div class="banner history">
					<img src="<?=SITE_SERVER_NAME?>/img/story/1.png" alt="" class="current">
					<img src="<?=SITE_SERVER_NAME?>/img/story/2.png" alt="" style="display:none;">
					<img src="<?=SITE_SERVER_NAME?>/img/story/3.png" alt="" style="display:none;">
					<img src="<?=SITE_SERVER_NAME?>/img/story/4.png" alt="" style="display:none;">
					<img src="<?=SITE_SERVER_NAME?>/img/story/5.png" alt="" style="display:none;">
					<img src="<?=SITE_SERVER_NAME?>/img/story/6.png" alt="" style="display:none;">
					<img src="<?=SITE_SERVER_NAME?>/img/story/7.png" alt="" style="display:none;">
					<img src="<?=SITE_SERVER_NAME?>/img/story/8.png" alt="" style="display:none;">
					<i class="arrow left"><img src="<?=SITE_SERVER_NAME?>/img/larrow.png" alt=""></i>
					<i class="arrow right"><img src="<?=SITE_SERVER_NAME?>/img/rarrow.png" alt=""></i>
				</div>
				<div class="direction block">
					<div><h1>Правление организации</h1></div>
					<?$APPLICATION->IncludeComponent(
						"bitrix:news.list",
						"direction",
						array(
							"DISPLAY_DATE" => "N",
							"DISPLAY_NAME" => "Y",
							"DISPLAY_PICTURE" => "Y",
							"DISPLAY_PREVIEW_TEXT" => "Y",
							"AJAX_MODE" => "N",
							"IBLOCK_TYPE" => "lists",
							"IBLOCK_ID" => "11",
							"NEWS_COUNT" => "20",
							"SORT_BY1" => "SORT",
							"SORT_ORDER1" => "ASC",
							"SORT_BY2" => "SORT",
							"SORT_ORDER2" => "ASC",
							"FILTER_NAME" => "",
							"FIELD_CODE" => array(
								0 => "ID",
								1 => "NAME",
								2 => "PREVIEW_PICTURE",
								3 => "",
							),
							"PROPERTY_CODE" => array(
								0 => "LOCATION",
								1 => "",
							),
							"CHECK_DATES" => "Y",
							"DETAIL_URL" => "",
							"PREVIEW_TRUNCATE_LEN" => "",
							"ACTIVE_DATE_FORMAT" => "d.m.Y",
							"SET_TITLE" => "N",
							"SET_BROWSER_TITLE" => "N",
							"SET_META_KEYWORDS" => "N",
							"SET_META_DESCRIPTION" => "N",
							"SET_LAST_MODIFIED" => "N",
							"INCLUDE_IBLOCK_INTO_CHAIN" => "N",
							"ADD_SECTIONS_CHAIN" => "N",
							"HIDE_LINK_WHEN_NO_DETAIL" => "Y",
							"PARENT_SECTION" => "",
							"PARENT_SECTION_CODE" => "",
							"INCLUDE_SUBSECTIONS" => "N",
							"CACHE_TYPE" => "N",
							"CACHE_TIME" => "3600",
							"CACHE_FILTER" => "N",
							"CACHE_GROUPS" => "N",
							"DISPLAY_TOP_PAGER" => "N",
							"DISPLAY_BOTTOM_PAGER" => "N",
							"PAGER_TITLE" => "Новости",
							"PAGER_SHOW_ALWAYS" => "N",
							"PAGER_TEMPLATE" => "",
							"PAGER_DESC_NUMBERING" => "N",
							"PAGER_DESC_NUMBERING_CACHE_TIME" => "36000",
							"PAGER_SHOW_ALL" => "N",
							"PAGER_BASE_LINK_ENABLE" => "N",
							"SET_STATUS_404" => "N",
							"SHOW_404" => "N",
							"MESSAGE_404" => "",
							"PAGER_BASE_LINK" => "",
							"PAGER_PARAMS_NAME" => "arrPager",
							"AJAX_OPTION_JUMP" => "N",
							"AJAX_OPTION_STYLE" => "N",
							"AJAX_OPTION_HISTORY" => "N",
							"AJAX_OPTION_ADDITIONAL" => "",
							"COMPONENT_TEMPLATE" => "direction"
						),
						false
					);?>
				</div>
					<?$APPLICATION->IncludeComponent("bitrix:news.list","letters",Array(
					        "IBLOCK_ID" => "13",
					        "NEWS_COUNT" => "4",
					        "SORT_BY1" => "ACTIVE_FROM",
					        "SORT_ORDER1" => "DESC",
					        "SORT_BY2" => "SORT",
					        "SORT_ORDER2" => "ASC",
					        "FILTER_NAME" => "",
					        "FIELD_CODE" => Array("ID"),
					        "PROPERTY_CODE" => Array("POSITION")
					    )
					);
					?>
				</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>