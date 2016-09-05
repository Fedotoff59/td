<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/header.php");
$GLOBALS["arrFilterMainTheme"] = array("PROPERTY_MAIN_VALUE" => 1);
$GLOBALS["arrFilterMain"] = array("PROPERTY_MAIN_VALUE" => 1);
?>
				<div class="mini_block about_us">
					<div>
						<h1>СМИ о нас</h1>
					</div>
					<a href="">
						<div class="other_news">
							<p class="date">19.04.2016 </p>
							<h2>Россия – Шри-Ланка, партнерские международные  молодежные площадки</h2>
						</div>
					</a>
					<hr>
					<a href="">
						<div class="other_news">
							<p class="date">04.04.2016</p>
							<h2>Пермский лагерь «Равные возможности»</h2>
						</div>
					</a>
					<hr>
					<a href="">
						<div class="other_news">
							<p class="date">17.02.2016</p>
							<h2>Горнолыжники с безграничными возможностями</h2>
						</div>
					</a>
					<hr>
					<a href="">
						<div class="other_news">
							<p class="date">01.01.2016</p>
							<h2>Россия – Шри-Ланка, партнерские международные  молодежные площадки</h2>
						</div>
					</a>
				</div>
				<div class="mini_block social_news">
					<div>
						<h1>Новости соцсетей</h1>
					</div>
					<script type="text/javascript" src="//vk.com/js/api/openapi.js?127"></script>

<!-- VK Widget -->
<div id="vk_groups"></div>

<script type="text/javascript">
VK.Widgets.Group("vk_groups", {redesign: 1, mode: 4, wide: 1, width: "220", height: "400", color1: 'FFFFFF', color2: '000000', color3: '5E81A8'}, 25371547);
</script>
				</div>
				<div class="block video">
					<div>
						<h1>Видео галерея</h1>
					</div>
					<img src="<?=SITE_SERVER_NAME?>/img/watch_more.png" alt="" class="watch_more">
					<iframe width="900" height="506" src="https://www.youtube.com/embed/videoseries?list=PLc6EWMPYXQP2Qna6GaCesOH2-aGw1JtXH" frameborder="0" allowfullscreen></iframe>
				</div>
				<div class="news_block block">
					<?$APPLICATION->IncludeComponent("bitrix:news.list","news",Array(
							"IBLOCK_ID" => "21",
							"NEWS_COUNT" => "3",
							"SORT_BY1" => "ACTIVE_FROM",
							"SORT_ORDER1" => "DESC",
							"SORT_BY2" => "SORT",
							"SORT_ORDER2" => "ASC",
							"FILTER_NAME" => "",
							"FIELD_CODE" => Array("ID")
						)
					);
					?>
				</div>
<?require($_SERVER["DOCUMENT_ROOT"]."/bitrix/footer.php");?>